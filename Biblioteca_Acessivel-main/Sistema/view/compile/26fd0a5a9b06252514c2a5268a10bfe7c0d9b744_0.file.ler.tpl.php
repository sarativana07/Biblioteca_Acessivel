<?php
/* Smarty version 3.1.39, created on 2021-08-06 19:32:53
  from 'C:\xampp\htdocs\biblioteca\view\my_livros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_610d72451b74b8_66664632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26fd0a5a9b06252514c2a5268a10bfe7c0d9b744' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biblioteca\\view\\my_livros.tpl',
      1 => 1628271165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610d72451b74b8_66664632 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="example1"></div>
<?php echo '<script'; ?>
 src="/js/pdfobject.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>PDFObject.embed("/pdf/sample-3pp.pdf", "#example1");<?php echo '</script'; ?>
>
<style>
    .pdfobject-container { height: 30rem; border: 1rem solid rgba(0,0,0,.1); }
</style><?php }
}
