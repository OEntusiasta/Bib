<?php

require './Model/loan.php';

class Loan_Controller
{

    public $loan, $timezone;
    protected $id, $data;

    public function __construct()
    {
        {
            $this->loan = new Loan();
            $dateStart = date("Y-m-d H:i", time() + 3600*(date("I")));
            $dateEnd = date("Y-m-d H:i", strtotime($dateStart. ' + 2 days'));
            $this->data = array(
                "date_start"=>$dateStart,
                "date_end"=>$dateEnd,
                "user_id"=>$_SESSION['id'],
                "book_id"=>$_POST['id']
            );
        }

    }

    public function index()
    {
        $loans = $this->loan->Loan($_SESSION['id']);
        include './view/User/Emprestimos.php';
    }

    public function show()
    {
        $this->loan->find($this->id);
    }

    public function create()
    {

    }

    public function store()
    {
        $this->loan->create($this->data);
        $dataUpdate = array("status"=>'pending');
        (new Book())->update($_POST['id'], $dataUpdate);
    }

    public function edit()
    {
        //chamar a tela de edição de livros
    }

    public function update()
    {
        //ação de editar livro
    }

    public function delete()
    {
        $data = array("deleted_at"=>date("Y-m-d H:i", time() + 3600*(date("I"))));
        (new Loan())->update($_POST['id'], $data);


        $dataUpdate = array("status"=>'available');
        (new Book())->update($_POST['book_id'], $dataUpdate);
    }

}