<?php 

require_once './Model/Model.php';

class Book extends Model 
{
    protected $model;
    protected $table = 'books';

    public function __construct()
    {
        $this->model = Model::class;
        $this->setTable($this->table);
    }

    public function loans()
    {
        return $this->oneToOne('loans', 'book_id', 'id');
    }
}