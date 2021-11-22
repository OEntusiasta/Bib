<?php 

require_once './Model/Model.php';

class Loan extends Model 
{
    protected $model;
    protected $table = 'loans';

    public function __construct()
    {
        $this->model = Model::class;
        $this->setTable($this->table);
    }

    public function loanOneToMany()
    {
        return $this->oneToMany('users', 'id', 'user_id');
    }

    public function loanOneToOne()
    {
        return $this->oneToOne('books', 'id', 'book_id');
    }

    
}