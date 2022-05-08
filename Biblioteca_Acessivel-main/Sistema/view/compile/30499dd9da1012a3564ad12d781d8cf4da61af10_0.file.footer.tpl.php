<?php
/* Smarty version 3.1.39, created on 2021-08-12 12:39:50
  from '/home/vol10_2/epizy.com/epiz_27739139/bibliotecaacessivel.rf.gd/htdocs/view/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61154ed6b4a693_47211001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30499dd9da1012a3564ad12d781d8cf4da61af10' => 
    array (
      0 => '/home/vol10_2/epizy.com/epiz_27739139/bibliotecaacessivel.rf.gd/htdocs/view/footer.tpl',
      1 => 1628786332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61154ed6b4a693_47211001 (Smarty_Internal_Template $_smarty_tpl) {
?>



<section >
    <div vw class="enabled" tabindex="0">
        <div vw-access-button class="active" tabindex="0"></div>
        <div vw-plugin-wrapper tabindex="0">
             <div class="vw-plugin-top-wrapper" tabindex="0"></div>
        </div>
     </div>
     <?php echo '<script'; ?>
 src="https://vlibras.gov.br/app/vlibras-plugin.js"><?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
>
         new window.VLibras.Widget('https://vlibras.gov.br/app');
     <?php echo '</script'; ?>
>


    <div class="adminActions">
        <input type="checkbox" name="adminToggle" class="adminToggle"  />
        <a class="adminButton" href="#!" title="Menu de Acessibilidade" tabindex="0"><i class="fab fa-accessible-icon"></i></a>
        <div class="adminButtons">
            <a href="#" title="Ampliar textos" id="zoomIn" tabindex="0"><i class="fas fa-search-plus"></i></a>
            <a href="#" title="Minimizar textos" id="zoomOut" tabindex="0"><i class="fas fa-search-minus"></i></a>
            <a href="#" title="Controlo Por Voz" onclick="ouvir()" id="ouvir" tabindex="0"><i class="fas fa-microphone"></i></a>
            <a href="#" title="Leitura de Tela" onclick="speak('Ativar Modo Leitura de Tela!')" tabindex="0"><i class="fas fa-blind"></i></a>
        </div>
    </div>

</section>



<!-- Start: Facts Counter -->
<div class="black-hr">

</div>
<!-- End: Facts Counter -->



<?php echo '<script'; ?>
>
const MIC_PERM_BUTTON = document.querySelector('#ouvir');

MIC_PERM_BUTTON.addEventListener('click', async ev => {
  console.debug('Mic perm:', 'button click:', ev);

  setTimeout(() => queryBrowserMicrophonePermission(), 200);

  const res = await launchBrowserMicrophoneAllowPrompt();

  queryBrowserMicrophonePermission();
});

queryBrowserMicrophonePermission();

async function launchBrowserMicrophoneAllowPrompt () {
  try { // Initiate the browser prompt.
    const res = await navigator.mediaDevices.getUserMedia({ audio: true, video: false });

    console.warn('Mic perm:', 'allow:', res);
    return res;
  } catch (err) {
    console.warn('Mic perm:', 'block:', err); // "DOMException: Permission denied"
    return false;
  }
}

async function queryBrowserMicrophonePermission () {
  const result = await navigator.permissions.query({ name: 'microphone' });

  if (result.state == 'granted') {
  } else if (result.state == 'prompt') {
  } else if (result.state == 'denied') {
  }

  result.onchange = ev => {
    console.warn('Mic perm:', 'onchange:', ev);
  };

  console.warn('Mic perm:', 'state:', result.state, result);
  return result;
}
<?php echo '</script'; ?>
>


<!-- Start: Footer -->
<footer class="site-footer">

    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="footer-text col-md-3">
                    <p><a target="_blank" tabindex="0" href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
">Biblioteca Online Mocambique</a></p>
                </div>
                <div class="col-md-9 pull-right">

                    <ul>
                        <li><b>Desenvolvido Por:</b> Sara   Tivana</li>
                        <li>Michel Bis..</li>
                        <li>Manuel Novela</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End: Footer -->

<!-- jQuery Latest Version 1.x -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/jquery-1.12.4.min.js"><?php echo '</script'; ?>
>

<!-- jQuery UI -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/jquery-ui.min.js"><?php echo '</script'; ?>
>

<!-- jQuery Easing -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/jquery.easing.1.3.js"><?php echo '</script'; ?>
>

<!-- Bootstrap -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>

<!-- Mobile Menu -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/mmenu.min.js"><?php echo '</script'; ?>
>

<!-- Harvey - State manager for media queries -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/harvey.min.js"><?php echo '</script'; ?>
>

<!-- Waypoints - Load Elements on View -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/waypoints.min.js"><?php echo '</script'; ?>
>

<!-- Facts Counter -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/facts.counter.min.js"><?php echo '</script'; ?>
>

<!-- MixItUp - Category Filter -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/mixitup.min.js"><?php echo '</script'; ?>
>

<!-- Owl Carousel -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/owl.carousel.min.js"><?php echo '</script'; ?>
>

<!-- Accordion -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/accordion.min.js"><?php echo '</script'; ?>
>

<!-- Responsive Tabs -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/responsive.tabs.min.js"><?php echo '</script'; ?>
>

<!-- Responsive Table -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/responsive.table.min.js"><?php echo '</script'; ?>
>

<!-- Masonry -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/masonry.min.js"><?php echo '</script'; ?>
>

<!-- Carousel Swipe -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/carousel.swipe.min.js"><?php echo '</script'; ?>
>

<!-- bxSlider -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/bxslider.min.js"><?php echo '</script'; ?>
>

<!-- Custom Scripts -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/main.js"><?php echo '</script'; ?>
>






</body>


</html><?php }
}
