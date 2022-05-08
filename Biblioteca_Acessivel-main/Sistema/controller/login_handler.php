<?php

$usario = new Usuario();

if(isset($_GET['pag'])){
    if($_GET['id'] == 'cliente'){
        $usario->GetLogin('841234567','1234');
    }
    if($_GET['id'] == 'vendedor'){
        $usario->GetLogin('841234568','1234');
    }
    if($_GET['id'] == 'entregador'){
        $usario->GetLogin('841234569','1234');
    }
    if($_GET['id'] == 'logOut'){
        session_destroy();
        $_SESSION['USUARIO']['usu_id'] = 0;
        $_SESSION['USUARIO']['usu_telefone'] = null;
        $_SESSION['USUARIO']['usu_senha'] = null;
        $_SESSION['USUARIO']['usu_balanco'] = 0.0;
        $_SESSION['USUARIO']['usu_tipo'] = -1;
    }
}
if(isset($_POST['telefone']) ) {
    if(isset($_POST['senha']) ) {
        $usario->GetLogin($_POST['telefone'], $_POST['senha']);
    }
}


$location = 'Location: '.Rotas::get_SiteHome();
header($location);
?>