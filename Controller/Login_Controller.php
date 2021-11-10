<?php
session_start();

require_once './Model/User.php';

class LoginController
{

    public $login;
    protected $id, $email, $password, $is_admin;

    public function __construct()
    {
        $this->login = new User();
        $this->email = $_POST['email'];
        $this->password = $_POST['password'];
        $this->is_admin = $_POST['type_user'];
    }

    public function validation()
    {
        $login = $this->login->validation($this->email, $this->password);
        if(($login == "f")) {
            header("Location: /User/hp");
        }else if (($login == "t")){
                    header("Location: /admin/home_admin");
            }
        else
            header("Location: /");
    }

    public function index()
    {
        $logins = $this->login->all();
        include './view/Login.php';
    }

    public function show()
    {
        $this->login->find($this->id);
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