<?php

namespace App;

class Example
{
    protected $apikey;

    public function __construct($apikey)
    {
        $this->apikey = $apikey;
    }

    public function handle()
    {
        die('it works!');
    }
}