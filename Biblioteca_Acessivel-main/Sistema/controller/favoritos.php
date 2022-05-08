<?php
$smarty = new Template();



//INIT Meus Livros
$livros = new Livro();
$livros->get_LivrosFavoritos();


$smarty->assign('HOME',Rotas::get_SiteHome());

$smarty->assign('SEC_titulo', "Seus Livros Favoritos");
$smarty->assign('SEC_Subtitulo', "Encontre abaixo a lista dos seus Livros Favoritos. Voce pode voltar a abrir-los instantaneamente clicando ou por comando de voz");
$smarty->assign('Livros', $livros->getItens());

$smarty->display('my_livros.tpl');

?>
