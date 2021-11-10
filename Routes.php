
  
<?php

$request = $_SERVER['REQUEST_URI'];
require __DIR__ . '/Controller/Login_Controller.php';

require __DIR__ . '/Controller/User_Controller.php';

require __DIR__ . '/Controller/Book_Controller.php';
require __DIR__ . '/Controller/Loan_Controller.php';


switch ($request) {
    //Tela login
    case '/' :
        (new LoginController())->index();
        break;
    case '/login':
        (new LoginController())->validation();
        break;
    
    
    //Routes User
    case '/User/hp' :
        (new Book_Controller())->index();
        break;
    case '/User/Emprestimos' :
            (new Loan_Controller())->index();
        break;


        http_response_code(404);
        require __DIR__ . '/view/Erro.php';
        break;
}