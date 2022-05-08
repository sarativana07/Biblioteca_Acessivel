<?php
/* Smarty version 3.1.39, created on 2021-08-13 17:22:16
  from 'C:\xampp\htdocs\biblioteca\view\my_livros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61168e287c0eb1_73397692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbcd90cde111e006ec04034744d3038b39eaaa3b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biblioteca\\view\\my_livros.tpl',
      1 => 1628868023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61168e287c0eb1_73397692 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- End: Products Section -->
<div class="booksmedia-fullwidth">
    <div class="container">
        <h2 class="section-title text-center" tabindex="0"><?php echo $_smarty_tpl->tpl_vars['SEC_titulo']->value;?>
</h2>
        <span class="underline center"></span>
        <p class="lead text-center" tabindex="0"><?php echo $_smarty_tpl->tpl_vars['SEC_Subtitulo']->value;?>
</p>
        <ul class="popular-items-detail-v2">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Livros']->value, 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
            <li>
                <div class="book-list-icon blue-icon"></div>
                <figure>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['l']->value['livro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['l']->value['livro_titulo'];?>
">
                    <figcaption>
                        <header>

                            <h4><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
/livro/" tabindex="0"><?php echo $_smarty_tpl->tpl_vars['l']->value['livro_titulo'];?>
</a></h4>
                            <p tabindex="0"><strong tabindex="0">Autor:</strong>  <?php echo $_smarty_tpl->tpl_vars['l']->value['livro_autor'];?>
</p>
                            <p tabindex="0"><strong tabindex="0">ISBN:</strong>  <?php echo $_smarty_tpl->tpl_vars['l']->value['livro_ISBN'];?>
</p>
                        </header>

                        <p tabindex="0"><?php echo substr($_smarty_tpl->tpl_vars['l']->value['livro_prologo'],0,100);?>
</p>
                        <div class="actions" tabindex="0">
                            <ul>
                                <li>
                                    <a class="btn btn-success" tabindex="0" href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
/livro/<?php echo $_smarty_tpl->tpl_vars['l']->value['livro_id'];?>
"> Abrir Livro</a>
                                </li>
                            </ul>
                        </div>
                    </figcaption>
                </figure>
            </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </ul>
        <div class="nav-links" tabindex="0" id="nav-links">
            <a tabindex="0" class="prev page-numbers" href="#" id="LivroAnterior"> <i class="fa fa-long-arrow-left"></i>Anterior</a>
            <a tabindex="0" class="next page-numbers" href="#" id="LivroProximo"> Proximo <i class="fa fa-long-arrow-right"></i></a>
        </div>
    </div>
</div><?php }
}
