<?php
$smarty = new Template();

$smarty->assign('TEMA', Rotas::get_SiteTema());

if(isset($_GET['id'])){
  //INIT Livros
  $livro = new Livro();
  $livro->get_LivroID($_GET['id']);
  $smarty->assign('livro_actual',$livro->getItens());
}

$smarty->display('livro.tpl');

 ?>
