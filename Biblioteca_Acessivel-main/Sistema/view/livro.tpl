<div class="top-bar">
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

{foreach from=$livro_actual item=livro}
<input type="hidden" id="book_name" value="{$livro.livro_ficheiro}" />
    <br>
    <div class="sofreLivro">
        <b indextab="0">{$livro.livro_titulo}</b>
    </div>
{/foreach}

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

{foreach from=$livro_actual item=livro}

    <div class="livro_prologo">
        <span>Descricao : </span><b indextab="0">{$livro.livro_prologo}</b>
    </div>
{/foreach}

<script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>


<script src="{$TEMA}/js/book.js"></script>
