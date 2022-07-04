<?php

namespace app\core;

interface IRepository
{
    public  function insert();
    public  function update();
    public  function delete();
    public  function select();
}
