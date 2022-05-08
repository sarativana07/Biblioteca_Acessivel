<?php
/* Smarty version 3.1.39, created on 2021-08-13 16:26:05
  from 'C:\xampp\htdocs\biblioteca\view\__form_busca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611680fd4e0624_62794535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f78812d30b31a182c8462d4d01dac6eeee02be55' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biblioteca\\view\\__form_busca.tpl',
      1 => 1628853964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611680fd4e0624_62794535 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Start: Search Section -->
<section class="search-filters">
    <div class="container">
        <div class="filter-box">
            <h3>PESQUISAR LIVRO</h3>
            <form action="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
/pesquisa" method="POST">
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <label class="sr-only" for="titulo">Pesquise por Titulo</label>
                        <input class="form-control" placeholder="Insira aqui o titulo de um Livro para pesquisar" id="titulo" name="titulo" type="text" tabindex="0">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="form-group">
                        <select name="categoria" id="categoria" class="form-control">
                            <option tabindex="0">Escolha por Catalogos</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Catalogos']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['catalogo_id'];?>
" tabindex="0"><?php echo $_smarty_tpl->tpl_vars['c']->value['catalogo_nome'];?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="form-group">
                        <select name="category" id="category" class="form-control">
                            <option tabindex="0">Todas Categorias</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['cat_id'];?>
" tabindex="0"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['cat_nome'];?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="form-group">
                        <input class="form-control" type="submit" value="Pesquisar" tabindex="0">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- End: Search Section --><?php }
}
