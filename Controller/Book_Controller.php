<?php

require './Model/Books.php';

class Book_Controller
{

    public $book;
    protected $id;

    public function __construct()
    {
        $this->book = new Book();
    
    }

    public function index()
    {
        $booksClient = $this->book->all();
        include './view/User/hp.php';
    }

    public function show()
    {
        $this->book->find($this->id);
    }
}