<?php
/* Smarty version 3.1.39, created on 2021-08-13 12:45:20
  from 'C:\xampp\htdocs\biblioteca\view\livro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61164d40e43420_78944093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88cb4dadd31b550f5109770c1a982014dbd20085' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biblioteca\\view\\livro.tpl',
      1 => 1628851518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61164d40e43420_78944093 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="top-bar">
    <button class="btn" id="prev-page" tabindex="0">
        <i class="fas fa-arrow-circle-left"></i> Pagina Anterior
    </button>
    <button class="btn" id="next-page" tabindex="0">
        Proxima Pagina <i class="fas fa-arrow-circle-right"></i>
    </button>
    <span class="page-info" tabindex="0">
        Pagina <span id="page-num" tabindex="0"></span> de <span id="page-count" tabindex="0"></span> Paginas
    </span>

</div>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['livro_actual']->value, 'livro');
$_smarty_tpl->tpl_vars['livro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['livro']->value) {
$_smarty_tpl->tpl_vars['livro']->do_else = false;
?>
<input type="hidden" id="book_name" value="<?php echo $_smarty_tpl->tpl_vars['livro']->value['livro_ficheiro'];?>
" />
    <br>
    <div class="sofreLivro">
        <b indextab="0"><?php echo $_smarty_tpl->tpl_vars['livro']->value['livro_titulo'];?>
</b>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<canvas id="pdf-render" tabindex="0"></canvas>

<div class="top-bar">
    <button class="btn" id="prev-page2" tabindex="0">
        <i class="fas fa-arrow-circle-left"></i> Pagina Anterior
    </button>
    <button class="btn" id="next-page2" tabindex="0">
        Proxima Pagina <i class="fas fa-arrow-circle-right"></i>
    </button>
    <span class="page-info" tabindex="0">
        Pagina <span id="page-num2" tabindex="0"></span> de <span id="page-count2" tabindex="0"></span> Paginas
    </span>

</div>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['livro_actual']->value, 'livro');
$_smarty_tpl->tpl_vars['livro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['livro']->value) {
$_smarty_tpl->tpl_vars['livro']->do_else = false;
?>

    <div class="livro_prologo">
        <span>Descricao : </span><b indextab="0"><?php echo $_smarty_tpl->tpl_vars['livro']->value['livro_prologo'];?>
</b>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php echo '<script'; ?>
 src="https://mozilla.github.io/pdf.js/build/pdf.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/book.js"><?php echo '</script'; ?>
>
<?php }
}
