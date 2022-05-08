<?php
$smarty = new Template();



//INIT Meus Livros
$livros = new Livro();
$livros->get_MeusLivros();


$smarty->assign('HOME',Rotas::get_SiteHome());

$smarty->assign('SEC_titulo', "Lacamentos : Livros Novos");
$smarty->assign('SEC_Subtitulo', "Encontre abaixo a lista de todos Livros recentemente publicados. Voce pode voltar a abrir-los instantaneamente clicando ou por comando de voz");
$smarty->assign('Livros', $livros->getItens());

$smarty->display('my_livros.tpl');

?>
