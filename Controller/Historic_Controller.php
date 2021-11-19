<?php

require_once './Model/loan.php';

class Historic_Controller
{

    public $historic;
    protected $id;

    public function __construct()
    {
        $this->historic = new Loan();
    }

    public function index()
    {
        $historics = $this->historic->all;
        include './view/User/Historico.php';
    }

    public function show()
    {
        $this->historic-> find($this->id);
    }

    public function create()
    {

    }

    public function store()
    {
    
    }

    public function edit()
    {
      
    }

    public function update()
    {
      
    }

    public function delete()
    {
     
    }

}