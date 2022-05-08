<?php
require './lib/autoload.php';

session_start();

$smarty = new Template();

//INIT Categorias
$categorias = new Categorias();
$categorias->get_categorias();

//INIT Catalogos
$catalogos = new Catalogos();
$catalogos->get_catalogos();

//INIT Livros
$livros = new Livro();
$livros->get_Livros();


//valores para a View do Smarty
$smarty->assign('TEMA', Rotas::get_SiteTema());
$smarty->assign('HOME',Rotas::get_SiteHome());
$smarty->assign('SITE_NOME', Config::SITE_NOME);
$smarty->assign('_SESSION',$_SESSION);
// init items
$smarty->assign('Categorias', $categorias->getItens());
$smarty->assign('Catalogos', $catalogos->getItens());
$smarty->assign('Livros', $livros->getItens());

//paginas do smarty
/*$smarty->assign('livro',Rotas::get_pag('livro'));
$smarty->assign('ler',Rotas::get_pag('ler'));
$smarty->assign('escutar',Rotas::get_pag('escutar'));
$smarty->assign('assistir',Rotas::get_pag('assistir'));
$smarty->assign('meus-livros', Rotas::get_pag('meus-livros'));*/


$smarty->display('index.tpl');
?>
