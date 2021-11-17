
  
<?php

$request = $_SERVER['REQUEST_URI'];
require __DIR__ . '/Controller/Login_Controller.php';
require __DIR__ . '/Controller/Register_Controller.php';

require __DIR__ . '/Controller/User_Controller.php';

require __DIR__ . '/Controller/Book_Controller.php';
require __DIR__ . '/Controller/Loan_Controller.php';
require __DIR__ . '/Controller/Historic_Controller.php';

require __DIR__ . '/Controller/BookAdm_Controller.php';
require __DIR__ . '/Controller/NewUserAdm_Controller.php';



switch ($request) {
        //Tela login
    case '/':
        (new LoginController())->index();
        break;
    case '/login':
        (new LoginController())->validation();
        break;

        //cadastro
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
        //devolução
    case '/client/devolution':
        (new Loan_Controller())->delete();
        header("Location: /User/hp");
        break;
        //historico
    case '/client/historic':
        (new Historic_Controller())->index();
        break;
        //dados
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


        //User em adm
    case '/admin/list_user':
        (new UserControllerAdmin())->index();
        break;

    case '/admin/data_user':
        (new UserControllerAdmin())->edit();
        break;

    case '/admin/update_user':
        (new UserControllerAdmin())->update();
        header("Location: /admin/list_user");
        break;

    case '/admin/delete_user':
        (new UserControllerAdmin())->delete();
        header("Location: /admin/list_user");
        break;

    case '/admin/register_adminUser':
        (new  Register_Controller())->createClientAdmin();
        break;
    case '/admin/store_user':
        (new  Register_Controller())->storeClientAdmin();
        header("Location: /admin/home_admin");
        break;
        //books
    case '/admin/add_book':
        (new BookControllerAdmin())->create();
        break;
    case '/admin/edit_book':
        (new BookControllerAdmin())->edit();
        break;
    case '/admin/update_book':
        (new BookControllerAdmin())->update();
        header("Location: /admin/home_admin");
        break;
    case '/admin/store_book':
        (new BookControllerAdmin())->store();
        header("Location: /admin/home_admin");
        break;
    case '/admin/delete_book':
        (new BookControllerAdmin())->delete();
        header("Location: /admin/home_admin");
        break;




        http_response_code(404);
        require __DIR__ . '/view/Erro.php';
        break;
}
