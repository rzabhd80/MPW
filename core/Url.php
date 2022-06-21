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

    public static function getSanitizedData()
    {
        $data = [];
        if (Url::methodExtractor() === "GET") {
            foreach ($_GET as $key => $value) {
                $data[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        } else if (Url::methodExtractor() === "POST") {
            foreach ($_POST as $key => $value) {
                $data[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
    }
}
