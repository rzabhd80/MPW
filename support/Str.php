<?php

namespace app\support;

class Str
{

    public static function str_rand(int $len = 10): string
    {
        $char_set = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $cahr_set_len = strlen($char_set);
        $random_str = "";
        for ($i = 0; $i < $len; $i++) {
            $chosen_index = rand(0, $char_set - 1);
            $random_str .= $char_set[$chosen_index];
        }
        return $random_str;
    }
}
