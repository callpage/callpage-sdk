<?php
namespace CallPage\CallPage;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

class Widget
{
    protected int $widgetId;

    protected Client $client;

    public function __construct(int $widgetId, Client $client)
    {
        $this->widgetId = $widgetId;
        $this->client = $client;
    }

    /**
     * @throws GuzzleException
     */
    public function call(string $number, ?int $departmentId): ResponseInterface
    {
        return $this->client->post(
            CallPage::V2 . '/external/widgets/call', [
                'form_params' => [
                    'id'            => $this->widgetId,
                    'tel'           => $number,
                    'department_id' => $departmentId,
                ],
            ]
        );
    }

    /**
     * @throws GuzzleException
     */
    public function message(string $tel, string $email, string $text): ResponseInterface
    {
        return $this->client->post(
            CallPage::V2 . '/external/widgets/' . $this->widgetId . '/message', [
                'form_params' => [
                    'tel'   => $tel,
                    'email' => $email,
                    'text'  => $text,
                ],
            ]
        );
    }
}
