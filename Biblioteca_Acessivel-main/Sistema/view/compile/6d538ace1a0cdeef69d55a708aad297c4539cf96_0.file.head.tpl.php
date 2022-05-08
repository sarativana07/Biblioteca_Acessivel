<?php
/* Smarty version 3.1.39, created on 2021-08-11 05:16:52
  from 'C:\xampp\htdocs\biblioteca\view\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61134124e8ca27_44559858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d538ace1a0cdeef69d55a708aad297c4539cf96' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biblioteca\\view\\head.tpl',
      1 => 1628651751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61134124e8ca27_44559858 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="PT-mz">


<head>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

    <!-- Title -->
    <title>Biblioteca Acessivel Mocambique</title>

    <!-- Favicon -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/favicon.ico" rel="icon" type="image/x-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/css/font-awesome.min.css" rel="stylesheet" type="text/css" />


    <!-- Mobile Menu -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/css/mmenu.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/css/mmenu.positioning.css" rel="stylesheet" type="text/css" />

    <!-- Stylesheet -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/style.css" rel="stylesheet" type="text/css" />

    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/25fb04a7fc.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="application/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/auxiliar.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="application/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/tabindex.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="application/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/acessibilidade.js"><?php echo '</script'; ?>
>
    <style>
        .m-progress-bar {
            min-height: 1em;
            background: #c12d2d;
            width: 5%;
        }
    </style>

</head>

<body class="layout-v2">

<?php }
}
