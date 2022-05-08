<?php
/* Smarty version 3.1.39, created on 2021-08-11 17:00:36
  from '/home/vol10_2/epizy.com/epiz_27739139/bibliotecaacessivel.rf.gd/htdocs/view/pesquisa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61143a74c162c9_42194597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8e8e2d8aa5774736c2415c58c1c7aa043e90be4' => 
    array (
      0 => '/home/vol10_2/epizy.com/epiz_27739139/bibliotecaacessivel.rf.gd/htdocs/view/pesquisa.tpl',
      1 => 1628654199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__form_busca.tpl' => 1,
  ),
),false)) {
function content_61143a74c162c9_42194597 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Start: Products Section -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="books-full-width">
                <div class="container">

                    <?php $_smarty_tpl->_subTemplateRender("file:__form_busca.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <div class="filter-options margin-list">
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <select name="OrganizarTitulo">
                                    <option selected="selected" tabindex="0">Organizar por Titulos</option>
                                    <option tabindex="0">Os mais Populares</option>
                                    <option tabindex="0">Os mais Recentes</option>
                                    <option tabindex="0">Os mais Avaliados</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <select name="OrganizarNome">
                                    <option selected="selected" tabindex="0">Organizar por Titulo</option>
                                    <option tabindex="0">de A ate G</option>
                                    <option tabindex="0">de H ate N</option>
                                    <option tabindex="0">de O ate S</option>
                                    <option tabindex="0">de T ate Z</option>
                                </select>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <select name="OrganizarLingua">
                                    <option selected="selected" tabindex="0">Organizar por Língua</option>
                                    <option tabindex="0">Portugues</option>
                                    <option tabindex="0">Ingles</option>
                                    <option tabindex="0">Frances</option>
                                    <option tabindex="0">Outra</option>
                                </select>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <select name="OrganizarData">
                                    <option selected="selected" tabindex="0">Organizar por Data</option>
                                    <option tabindex="0">De Hoje</option>
                                    <option tabindex="0">Desta Semana</option>
                                    <option tabindex="0">Deste Mes</option>
                                    <option tabindex="0">Deste Ano</option>
                                </select>
                            </div>
                            <div class="col-md-2 col-sm-12 pull-right">
                                <div class="filter-toggle">
                                    <a href="#" class="active"><i class="glyphicon glyphicon-th-large"></i></a>
                                    <!--<a href="books-media-list-view.html"><i class="glyphicon glyphicon-th-list"></i></a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="booksmedia-fullwidth">
                        <ul>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Livros']->value, 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
                                <li class="category-item <?php echo $_smarty_tpl->tpl_vars['l']->value['livro_cat_nome'];?>
" tabindex="0">
                                    <figure>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['l']->value['livro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['l']->value['livro_titulo'];?>
" />
                                        <figcaption class="bg-default">
                                            <div class="diamond">
                                                <i class="<?php echo $_smarty_tpl->tpl_vars['l']->value['livro_catalogo_nome'];?>
"></i>

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
</span><br>
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
                    </div>
                </div>

            </div>
        </main>
    </div>
</div>
<!-- End: Products Section -->
<?php }
}
