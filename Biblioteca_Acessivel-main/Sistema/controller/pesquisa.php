<?php
$smarty = new Template();



//INIT Meus Livros
$livros = new Livro();
$livros->get_MeusLivros();


$smarty->assign('HOME',Rotas::get_SiteHome());


$smarty->assign('Livros', $livros->getItens());
$smarty->display('pesquisa.tpl');

?>
