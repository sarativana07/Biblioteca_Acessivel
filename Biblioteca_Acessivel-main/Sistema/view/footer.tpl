



<section >
    <div vw class="enabled" tabindex="0">
        <div vw-access-button class="active" tabindex="0"></div>
        <div vw-plugin-wrapper tabindex="0">
             <div class="vw-plugin-top-wrapper" tabindex="0"></div>
        </div>
     </div>
     <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
     <script>
         new window.VLibras.Widget('https://vlibras.gov.br/app');
     </script>


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



<script>
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
</script>


<!-- Start: Footer -->
<footer class="site-footer">

    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="footer-text col-md-3">
                    <p><a target="_blank" tabindex="0" href="{$HOME}">Biblioteca Online Mocambique</a></p>
                </div>
                <div class="col-md-9 pull-right">

                    <ul>
                        <li><b>Desenvolvido Por:</b> Sara   Tivana</li>
                        <li>Michel Bisqué</li>
                        <li>Manuel Novela</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End: Footer -->

<!-- jQuery Latest Version 1.x -->
<script type="text/javascript" src="{$TEMA}/js/jquery-1.12.4.min.js"></script>

<!-- jQuery UI -->
<script type="text/javascript" src="{$TEMA}/js/jquery-ui.min.js"></script>

<!-- jQuery Easing -->
<script type="text/javascript" src="{$TEMA}/js/jquery.easing.1.3.js"></script>

<!-- Bootstrap -->
<script type="text/javascript" src="{$TEMA}/js/bootstrap.min.js"></script>

<!-- Mobile Menu -->
<script type="text/javascript" src="{$TEMA}/js/mmenu.min.js"></script>

<!-- Harvey - State manager for media queries -->
<script type="text/javascript" src="{$TEMA}/js/harvey.min.js"></script>

<!-- Waypoints - Load Elements on View -->
<script type="text/javascript" src="{$TEMA}/js/waypoints.min.js"></script>

<!-- Facts Counter -->
<script type="text/javascript" src="{$TEMA}/js/facts.counter.min.js"></script>

<!-- MixItUp - Category Filter -->
<script type="text/javascript" src="{$TEMA}/js/mixitup.min.js"></script>

<!-- Owl Carousel -->
<script type="text/javascript" src="{$TEMA}/js/owl.carousel.min.js"></script>

<!-- Accordion -->
<script type="text/javascript" src="{$TEMA}/js/accordion.min.js"></script>

<!-- Responsive Tabs -->
<script type="text/javascript" src="{$TEMA}/js/responsive.tabs.min.js"></script>

<!-- Responsive Table -->
<script type="text/javascript" src="{$TEMA}/js/responsive.table.min.js"></script>

<!-- Masonry -->
<script type="text/javascript" src="{$TEMA}/js/masonry.min.js"></script>

<!-- Carousel Swipe -->
<script type="text/javascript" src="{$TEMA}/js/carousel.swipe.min.js"></script>

<!-- bxSlider -->
<script type="text/javascript" src="{$TEMA}/js/bxslider.min.js"></script>


<!-- Custom Scripts -->
<script type="text/javascript" src="{$TEMA}/js/main.js"></script>






</body>


</html>