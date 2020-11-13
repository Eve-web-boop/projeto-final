<?php
//include_once "app/site/paginas/includes/header.php";

//navegaçaão 
//include_once "app/site/paginas/includes/navegacao.php";
// fim navegaçaão 

if (!isset($_SESSION['usuario'])) {
    $usuario = 'Kemelly@gmail.com';
    $senha = '123456';

    session_start();

    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha'] = $senha;
     

    switch ($_GET['pg']) {
        case 'cpanel':
            include_once "app/painelAdm/index.php";
            break;
        case 'login':
            include_once "app/painelAdm/index.php";
            break;
        
        default:
            # code...
            break;
    }
} else {

    include_once "app/painelAdm/paginas/login.php";
}
    # code...

//rodapé



//include_once "app/site/paginas/includes/footer.php";
