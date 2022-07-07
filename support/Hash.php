<?php

namespace app\support;

class Hash
{
    public static function salted_hash(string $given_string): string
    {
        $salt = Str::str_rand(10);
        $salted_pass = $given_string . $salt;
        return hash("sha256", $salted_pass);
    }
}
