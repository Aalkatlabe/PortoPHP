<?php


class Project
{
    public $id;
    public $name;
    public $link;

    public function __construct()
    {
        settype($this->id, 'integer');
    }
}