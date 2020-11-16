<?php
include_once "app/painelAdm/helpers/helperAdm.php";

session_start();


//definindo a variavel pg
$pg = 'cpanel';

if (isset($_GET['pg'])) {
    $pg = $_GET['pg'];
}

if (isset($_SESSION['usuario'])) {

    switch ($pg) {
        case 'cpanel':
            include_once "app/painelAdm/index.php";
            break;

        default:
            include_once "app/painelAdm/index.php";
            break;
    }
} else {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
        if (verificaSeLogado()) {
            include_once "app/painelAdm/paginas/login.php";
        }
    } else {
        include_once "app/painelAdm/paginas/login.php";
    }


    //include_once "app/painelAdm/paginas/login.php";
}

//     $usuario = 'Kemelly@gmail.com';
//     $senha = '123456';

//     session_start();

//     $_SESSION['usuario'] = $usuario;
//     $_SESSION['senha'] = $senha;
     

//     switch ($_GET['pg']) {
//         case 'cpanel':
//             include_once "app/painelAdm/index.php";
//             break;
//         case 'login':
//             include_once "app/painelAdm/index.php";
//             break;
        
//         default:
//             # code...
//             break;
//     }
// } else {

//     include_once "app/painelAdm/paginas/login.php";
// }
//     # code...

// //rodapé



//include_once "app/site/paginas/includes/footer.php";
