<?php
namespace CallPage\CallPage;

use GuzzleHttp\Client;

class CallPage
{
    const BASE_URL = 'https://core.callpage.io/api/';
    const V1 = 'v1';
    const V2 = 'v2';
    const V3 = 'v3';

    protected string $apiKey;

    protected Widget $widget;

    protected Client $client;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
        $this->client = new Client([
            'base_uri' => self::BASE_URL,
            'headers'  => [
                'Authorization' => $this->apiKey,
            ],
        ]);
    }

    public function widget(int $id): Widget
    {
        return new Widget($id, $this->client);
    }
}
