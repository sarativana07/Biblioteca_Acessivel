<?php
/* Smarty version 3.1.39, created on 2021-08-12 22:33:48
  from 'C:\xampp\htdocs\biblioteca\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611585ac0d13e2_15005541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '525be49d09241c10695f1bafef6042075ac9977f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biblioteca\\view\\index.tpl',
      1 => 1628800355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
    'file:_principal.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_611585ac0d13e2_15005541 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<div id="main" >
    <input type="hidden" id="site_url" value="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
" />
<?php 
    Rotas::get_Pagina();
?>

<?php if (!((Rotas::$pag !== null ))) {?>

    <?php $_smarty_tpl->_subTemplateRender("file:_principal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }?>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="0" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!--<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="js-title-step">Configuracao de Acessibilidade</h4>
            </div>
            <div class="modal-body">
                <div class="row hide" data-step="1" data-title="This is the first step!">
                   sds <div class="jumbotron">This is the first step!sds</div>1
                </div>
                <div class="row hide" data-step="2" data-title="This is the second step!">
                    <div class="jumbotron">This is the second step!</div>2
                </div>
                <div class="row hide" data-step="3" data-title="This is the last step!">
                    <div class="jumbotron">This is the last step!</div>3
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default js-btn-step pull-left" data-orientation="cancel" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-warning js-btn-step" data-orientation="previous">Proximo</button>
                <button type="button" class="btn btn-success js-btn-step" data-orientation="next">Anterior</button>
            </div>
            -->
                <!-- MultiStep Form -->
                <div class="modal-header">
                    <h4 class="js-title-step">Configuracao de Acessibilidade</h4>
                </div>
                <form id="msform" tabindex="0">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active">Tipo de Limitacao</li>
                                <li>Duracao da Limitacao</li>
                            </ul>
                            <!-- fieldsets -->
                            <fieldset tabindex="0">
                                <h4 class="fs-title">Tipo de Limitacao</h4>
                                <span class="fs-subtitle">Informe-nos qual a e sua limitacao, escolhendo a seguir.</span>

                                <br>

                                <div class="row posicao_switch">
                                    <span class="switch">
                                        <label for="visual" tabindex="0">Limitacao Visual  </label>
                                        <input type="checkbox" class="switch" id="visual" tabindex="0" aria-checked="false" aria-labelledby="visual">
                                        <label for="visual" tabindex="0"></label>
                                    </span>
                                </div>
                                <div class="row posicao_switch">
                                    <span class="switch">
                                        <label for="auditiva" tabindex="0">Limitacao Auditiva  </label>
                                        <input type="checkbox" class="switch" id="auditiva" tabindex="0" aria-checked="false" aria-labelledby="auditiva">
                                        <label for="auditiva" tabindex="0"></label>
                                    </span>
                                </div>
                                <div class="row posicao_switch">
                                    <span class="switch">
                                        <label for="movimento" tabindex="0">Limitacao de Movimento  </label>
                                        <input type="checkbox" class="switch" id="movimento" tabindex="0" aria-checked="false" aria-labelledby="movimento">
                                        <label for="movimento" tabindex="0"></label>
                                    </span>
                                </div>
                                <div class="row posicao_switch">
                                    <span class="switch">
                                        <label for="psicologica" tabindex="0">Limitacao Psicologica  </label>
                                        <input type="checkbox" class="switch" id="psicologica" tabindex="0" aria-checked="false" aria-labelledby="psicologica">
                                        <label for="psicologica" tabindex="0"></label>
                                    </span>
                                </div>


                                 <input type="button" name="next" class="next action-button" value="Proximo" tabindex="0" aria-checked="false"/>
                            </fieldset>

                            <fieldset tabindex="0">
                                <h4 class="fs-title">Duracao da Limitacao</h4>
                                <span class="fs-subtitle">Informe-nos qual a duracao de sua limitacao, escolhendo a seguir.</span>
                                <br>

                                <div class="row posicao_switch">
                                    <span class="switch">
                                        <label for="permanente" tabindex="0">Permanente </label>
                                        <input type="checkbox" class="switch" id="permanente" tabindex="0">
                                        <label for="permanente" tabindex="0"></label>
                                    </span>
                                </div>
                                <div class="row posicao_switch">
                                    <span class="switch">
                                        <label for="temporaria" tabindex="0">Temporatia </label>
                                        <input type="checkbox" class="switch" id="temporaria" tabindex="0">
                                        <label for="temporaria" tabindex="0"></label>
                                    </span>
                                </div>
                                <div class="row posicao_switch">
                                    <span class="switch">
                                        <label for="situacional" tabindex="0">Situacional  </label>
                                        <input type="checkbox" class="switch" id="situacional" tabindex="0">
                                        <label for="situacional" tabindex="0"></label>
                                    </span>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Anterior" tabindex="0"/>
                                <input type="submit" name="submit"  id="modalClose" class="submit action-button" value="Confirmar" tabindex="0"/>
                            </fieldset>
                        </form>
                <!-- /.MultiStep Form -->
            <div class="modal-footer">
                <br>
            </div>
            </div>
        </div>
    </div>
</div>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
