<?php

$smarty = new Template();

$smarty->assign('HOME',Rotas::get_SiteHome());
$smarty->assign('TEMA',Rotas::get_SiteTema());

$smarty->display('contact.tpl');

?>