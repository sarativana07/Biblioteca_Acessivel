<?php
/* Smarty version 3.1.39, created on 2021-08-11 00:13:29
  from '/home/vol10_2/epizy.com/epiz_27739139/bibliotecaacessivel.rf.gd/htdocs/view/livro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61134e69d579f8_15873022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8e26f71ce71622d32a08eaa4ad4a162a1e8c978' => 
    array (
      0 => '/home/vol10_2/epizy.com/epiz_27739139/bibliotecaacessivel.rf.gd/htdocs/view/livro.tpl',
      1 => 1628654198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61134e69d579f8_15873022 (Smarty_Internal_Template $_smarty_tpl) {
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

<canvas id="pdf-render" tabindex="0"></canvas>

<?php echo '<script'; ?>
 src="https://mozilla.github.io/pdf.js/build/pdf.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/book.js"><?php echo '</script'; ?>
>
<?php }
}
