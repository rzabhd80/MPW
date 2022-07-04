<?php

namespace app\model;

use app\core\Model;

class User extends Model
{

    public string $name;
    public string $lastName;
    public string $email;
    public string $password;

    public static function create()
    {
    }
    public function validationRule(): array
    {
        return [];
    }

    public function validate()
    {
        return true;
    }
}
