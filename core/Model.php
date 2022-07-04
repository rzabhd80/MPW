<?php

namespace app\core;

abstract class Model extends Repository
{

    public function loadData($data)
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }
    public function validate()
    {
        return true;
    }

    public function store()
    {
    }

    public function delete()
    {
    }

    abstract static function create();
    abstract public function validationRule(): array;
}
