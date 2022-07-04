<?php

namespace app\core;

class Request
{
    public array $data;


    public function __construct()
    {
        $this->data = $this->getSanitizedData();
    }
    public  function getSanitizedData()
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
        return $data;
    }
    public function __invoke()
    {
        return $this->data;
    }
}
