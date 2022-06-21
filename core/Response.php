<?php

namespace app\core;

class Response
{
    public function setStatusCode(int $statsCode)
    {
        http_response_code($statsCode);
    }
}
