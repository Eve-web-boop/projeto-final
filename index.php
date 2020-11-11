<?php
include_once "app/site/paginas/includes/header.php";

//navegaçaão 
include_once "app/site/paginas/includes/navegacao.php";
// fim navegaçaão 


// fim header 

echo "<hr>";

//páginas do meu site 

echo "<h1></h1>";

//Fim páginas do meu site 

echo "<hr>";


$paginas= isset($_GET['pg']);

if ($paginas) {
    # code...
    switch ($_GET['pg']) {
        
        case 'inicial':
            include_once "app/site/paginas/inicial.php";
            break;

        case 'produtos':
            include_once "app/site/paginas/produtos.php";
            break;
        case 'validaLogin':
            include_once "app/site/paginas/validaLogin.php";
            break;

        case 'contato':
            include_once "app/site/paginas/contato.php";
            break;
        
        default:
        include_once "app/site/paginas/inicial.php";
            break;
    }
} else {
    include_once "app/site/paginas/inicial.php";
}

//rodapé



include_once "app/site/paginas/includes/footer.php";
