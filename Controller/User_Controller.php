<?php

require_once './Model/User.php';

class DataUserController
{

    public $data_client;
    protected $id;
    protected $data;

    public function __construct()
    {
        $this->data_client = new User();
        $this->data = array
        (
            "email" => $_POST['email'],
            "password" => $_POST['password'],
            "name" => $_POST['name'],
            "phone" => $_POST['phone'],
            "is_admin" => false,
            "created_at" => NULL,
            "updated_at" => NULL,
            "deleted_at" => NULL
        );
        $this->id = $_POST['id'];
    }

    public function index()
    {
        $data_clients = $this->data_client->all();
        include './view/User/Dados_usuario.php';
    }

    public function show()
    {
        $this->data_client->find($this->id);
    }

    public function create()
    {

    }

    public function store()
    {
        //ação de criar livros
//        $books = (new Book())->create();
//        include './resources/views/client/homePage.php';
    }

    public function edit()
    {
        //chamar a tela de edição de dados
//        $id = $_POST['id'];
//        $data_client = (new User())->find($id);
        include './view/User/Dados_usuario.php';
    }

    public function editAdmin()
    {
        //chamar a tela de edição de dados
        $id = $_POST['id'];
        $data_client = (new User())->find($id);
        include './resources/views/admin/updateUsers.php';
    }

    public function update()
    {
        //ação de editar dados
        $this->data_client->update($this->id, $this->data);
    }

    public function updateClient()
    {
        //ação de editar dados
        $this->data_client->update($_SESSION['id'], $this->data);
    }

    public function delete()
    {
        $this->data_client->delete($this->id);
    }

}