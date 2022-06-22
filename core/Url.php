<?php

namespace app\core;

class Url
{
    public static function urlExtractor(): string
    {
        $url = $_SERVER["REQUEST_URI"];
        if ($url == null) return "/";
        if (str_contains($url, '?'))
            return explode("?", $url)[0];
        else return $url;
    }

    public static function methodExtractor(): string
    {
        return $_SERVER["REQUEST_METHOD"];
    }

    public static function paramExtractor(): string
    {
        $url = $_SERVER["REQUEST_URI"];
        if ($url == null) return "";
        if (str_contains($url, '?'))
            return explode("?", $url)[1];
        else return "";
    }
}
