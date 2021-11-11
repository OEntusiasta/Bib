
  
<?php

$request = $_SERVER['REQUEST_URI'];
require __DIR__ . '/Controller/Login_Controller.php';
require  __DIR__ . '/Controller/Register_Controller.php';

require __DIR__ . '/Controller/User_Controller.php';

require __DIR__ . '/Controller/Book_Controller.php';
require __DIR__ . '/Controller/Loan_Controller.php';
require __DIR__ . '/Controller/Historic_Controller.php';

require  __DIR__ . '/Controller/BookAdm_Controller.php';


switch ($request) {
        //Tela login
    case '/':
        (new LoginController())->index();
        break;
    case '/login':
        (new LoginController())->validation();
        break;

        //Register
    case '/register':
        (new Register_Controller())->create();
        break;
    case '/store_register':
        (new Register_Controller())->store();
        header("Location: /");
        break;

        //Routes User
    case '/User/hp':
        (new Book_Controller())->index();
        break;
    case '/User/Emprestimos':
        (new Loan_Controller())->index();
        break;

    case '/client/store':
        (new Loan_Controller())->store();
        header("Location: /User/hp");
        break;

    case '/client/devolution':
        (new Loan_Controller())->delete();
        header("Location: /User/hp");
        break;

    case '/client/historic':
        (new Historic_Controller())->index();
        break;

    case '/client/data_user':
        (new DataUserController())->edit();
        break;

    case '/client/update_data_user':
        (new DataUserController())->updateClient();
        header("Location: /");
        break;

        //Routes Adm
    case '/admin/home_admin':
        (new BookControllerAdmin())->index();
        break;






        http_response_code(404);
        require __DIR__ . '/view/Erro.php';
        break;
}
