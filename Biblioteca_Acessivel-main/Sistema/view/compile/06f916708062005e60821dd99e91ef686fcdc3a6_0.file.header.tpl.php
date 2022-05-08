<?php
/* Smarty version 3.1.39, created on 2021-08-13 14:03:27
  from 'C:\xampp\htdocs\biblioteca\view\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61165f8f6944f0_61270733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06f916708062005e60821dd99e91ef686fcdc3a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biblioteca\\view\\header.tpl',
      1 => 1628856202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61165f8f6944f0_61270733 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Start: Header Section -->
<header id="header-v1" class="navbar-wrapper inner-navbar-wrapper">
    <div class="container">
        <div class="row">

            <div class="alert alert-success" id="alert_div">
                <strong>Controle Por Voz! </strong > <span id="alert_span">para ativar o controle de voz, clique no botão vermelho no menu de acessibilidade no canto inferior direito.</span>
                <button type="button" class="close" data-dismiss="alert" tabindex="0">&times;</button>
            </div>
            <nav class="navbar navbar-default">
                <div class="row">
                    <div class="col-md-3">
                        <div class="navbar-header">
                            <div class="navbar-brand">
                                <h1>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
" tabindex="0" alt="logo">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/libraria-logo-v1.png" alt="LOGO BIBLIOTECA" />
                                    </a>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">

                        <div class="navbar-collapse hidden-sm hidden-xs">
                            <ul class="nav navbar-nav">


                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
" tabindex="0">Pagina Inicial</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
/meus_livros" tabindex="0">Meus Livros</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
/favoritos" tabindex="0">Livros Favoritos</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
/lancamentos" tabindex="0">Lancamentos</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
/contacto" tabindex="0">Contactar-nos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu hidden-lg hidden-md">
                    <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                    <div id="mobile-menu">
                        <ul>
                            <li class="mobile-title">
                                <h4>Navegacao</h4>
                                <a href="#" class="close" tabindex="0"></a>
                            </li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
" tabindex="0">Pagina Inicial</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
/meus_livros" tabindex="0">Meus Livros</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
/favoritos" tabindex="0">Livros Favoritos</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
/lancamentos" tabindex="0">Lancamentos</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
/contacto" tabindex="0">Contactar-nos</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </div>
</header>

<div class="black-hr" style="background: #fff;height: 100px;">

       <!--LEAVE ME HERE! Fsociety -->

</div>
<?php }
}
