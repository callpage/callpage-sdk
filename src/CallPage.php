<?php
namespace CallPage\CallPage;

class CallPage
{
    protected string $apiKey;
    protected Widget $widget;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function widget(int $id): Widget
    {
        return new Widget($id, $this->apiKey);
    }
}
