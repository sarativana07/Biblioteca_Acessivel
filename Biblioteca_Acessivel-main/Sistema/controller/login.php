<?php

$smarty = new Template();



$smarty->assign('home',Rotas::get_SiteHome());



$smarty->display('login.tpl');

?>