<?php

require_once './Model/Model.php';

class User extends Model
{
    protected $model;
    protected $table = 'users';

    public function __construct()
    {
        $this->model = Model::class;
        $this->setTable($this->table);
    }

    public function loans()
    {
        return $this->oneToMany('loans', 'user_id', 'id');
    }
}
