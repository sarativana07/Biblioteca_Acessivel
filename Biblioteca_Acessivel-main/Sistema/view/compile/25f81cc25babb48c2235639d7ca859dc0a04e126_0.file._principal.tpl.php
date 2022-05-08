<?php
/* Smarty version 3.1.39, created on 2021-08-11 00:08:34
  from '/home/vol10_2/epizy.com/epiz_27739139/bibliotecaacessivel.rf.gd/htdocs/view/_principal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61134d42e24768_23264854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25f81cc25babb48c2235639d7ca859dc0a04e126' => 
    array (
      0 => '/home/vol10_2/epizy.com/epiz_27739139/bibliotecaacessivel.rf.gd/htdocs/view/_principal.tpl',
      1 => 1628654200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__form_busca.tpl' => 1,
  ),
),false)) {
function content_61134d42e24768_23264854 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:__form_busca.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Start: Facts Counter -->
<div class="layout-v2-counter">
    <div class="facts-counter">
        <div class="container">
            <div class="row">
                <ul>
                    <li class="color-light-green">
                        <div class="fact-item">
                            <div class="fact-icon">
                                <i class="ebook"></i>
                            </div>
                            <span tabindex="0">Livros<strong class="fact-counter" tabindex="0">156</strong></span>
                        </div>
                    </li>
                    <li class="color-green">
                        <div class="fact-item">
                            <div class="fact-icon">
                                <i class="eaudio"></i>
                            </div>
                            <span tabindex="0">Audios<strong class="fact-counter" tabindex="0">50</strong></span>
                        </div>
                    </li>
                    <li class="color-red">
                        <div class="fact-item">
                            <div class="fact-icon">
                                <i class="magazine"></i>
                            </div>
                            <span tabindex="0">Magazine<strong class="fact-counter" tabindex="0">4</strong></span>
                        </div>
                    </li>
                    <li class="color-blue">
                        <div class="fact-item">
                            <div class="fact-icon">
                                <i class="videos"></i>
                            </div>
                            <span tabindex="0">Videos<strong class="fact-counter" tabindex="0">45</strong></span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End: Facts Counter -->


<!-- Start: Category Filter -->
<section class="category-filter section-padding">
    <div class="container">
        <div class="row">
            <div class="center-content">
                <h2 class="section-title" tabindex="0">Livros Disponiveis</h2>
                <span class="underline center"></span>
                <p class="lead" tabindex="0">Voce pode escolher qualquer um destes livros para ler. Tambem, pode escolher uma das categorias a seguir para facilitar sua busca.</p>
            </div>
            <div class="filter-buttons">
                <div class="filter btn" data-filter="all" tabindex="0">Todas Livros</div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                    <div class="filter btn" tabindex="0" data-filter=".<?php echo $_smarty_tpl->tpl_vars['categoria']->value['cat_nome'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['cat_nome'];?>
</div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </div>
            <div id="category-filter">
                <ul class="category-list">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Livros']->value, 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
                        <li class="category-item <?php echo $_smarty_tpl->tpl_vars['l']->value['livro_cat_nome'];?>
">
                            <figure>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['l']->value['livro_img'];?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['l']->value['livro_titulo'];?>
 " />
                                <figcaption class="bg-default">
                                    <div class="diamond">
                                        <i class="<?php echo $_smarty_tpl->tpl_vars['l']->value['livro_catalogo_nome'];?>
" tabindex="0"></i>

                                    </div>
                                    <div style="text-align: center; margin-top: 50px;">
                                        <a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
/livro/<?php echo $_smarty_tpl->tpl_vars['l']->value['livro_id'];?>
" tabindex="0"> Abrir Livro</a>
                                    </div>
                                    <div class="info-block">
                                        <h4 tabindex="0"><?php echo $_smarty_tpl->tpl_vars['l']->value['livro_titulo'];?>
</h4>
                                        <span class="author" tabindex="0"><strong tabindex="0">Autor:</strong><?php echo $_smarty_tpl->tpl_vars['l']->value['livro_autor'];?>
</span>
                                        <span class="author" tabindex="0"><strong tabindex="0">ISBN:</strong> <?php echo $_smarty_tpl->tpl_vars['l']->value['livro_ISBN'];?>
</span>
                                        <p tabindex="0"><?php echo $_smarty_tpl->tpl_vars['l']->value['livro_prologo'];?>
</p>

                                    </div>
                                </figcaption>
                            </figure>
                        </li>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
<!-- Start: Category Filter -->

<?php }
}
