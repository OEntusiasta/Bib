<?php

require_once './Model/User.php';

class UserControllerAdmin
{

    public $user;
    protected $id;
    protected $data;

    public function __construct()
    {
        $this->user = new User();
        $this->data = array
        (
            "email" => $_POST['email'],
            "password" => $_POST['password'],
            "name" => $_POST['name'],
            "phone" => $_POST['phone'],
            "is_admin" => (!!$_POST['type_user']),
            "created_at" => NULL,
            "updated_at" => NULL,
            "deleted_at" => NULL
        );
        $this->id = $_POST['id'];
    }

    public function index()
    {
        $users = $this->user->all();
        include './view/Adm/usersByAdm.php';
    }

    public function show()
    {
        $this->user->find($this->id);
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function edit()
    {
        $id = $_POST['id'];
        $user = (new User())->find($id);
        include './view/Adm/UptadeUser_adm.php';
    }

    public function update()
    {
        $this->user->update($this->id, $this->data);
    }

    public function delete()
    {
        $this->user->delete($this->id);
    }

}