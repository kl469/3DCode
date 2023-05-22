<?php
namespace core\base;

use core\db\Sqlite;

class Model extends Sqlite
{
    protected $model;

    public function __construct()
    {
        if (!$this->table) {

            $this->model = get_class($this);

            $this->model = substr($this->model, 0, -5);

            $this->table = strtolower($this->model);
        }
    }
}