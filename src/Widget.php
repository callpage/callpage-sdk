<?php

namespace CallPage\CallPage;

class Widget
{
    protected int $id;

    protected string $apiKey;

    public function __construct(int $id, string $apiKey)
    {
        $this->id = $id;
        $this->apiKey = $apiKey;
    }

    public function call(string $number, ?int $departmentId) {}
}
