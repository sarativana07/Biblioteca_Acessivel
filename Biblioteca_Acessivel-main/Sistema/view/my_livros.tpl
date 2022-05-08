<!-- End: Products Section -->
<div class="booksmedia-fullwidth">
    <div class="container">
        <h2 class="section-title text-center" tabindex="0">{$SEC_titulo}</h2>
        <span class="underline center"></span>
        <p class="lead text-center" tabindex="0">{$SEC_Subtitulo}</p>
        <ul class="popular-items-detail-v2">
            {foreach from=$Livros item=$l}
            <li>
                <div class="book-list-icon blue-icon"></div>
                <figure>
                    <img src="{$l.livro_img}" alt="{$l.livro_titulo}">
                    <figcaption>
                        <header>

                            <h4><a href="{$HOME}/livro/" tabindex="0">{$l.livro_titulo}</a></h4>
                            <p tabindex="0"><strong tabindex="0">Autor:</strong>  {$l.livro_autor}</p>
                            <p tabindex="0"><strong tabindex="0">ISBN:</strong>  {$l.livro_ISBN}</p>
                        </header>

                        <p tabindex="0">{substr($l.livro_prologo, 0, 100)}</p>
                        <div class="actions" tabindex="0">
                            <ul>
                                <li>
                                    <a class="btn btn-success" tabindex="0" href="{$HOME}/livro/{$l.livro_id}"> Abrir Livro</a>
                                </li>
                            </ul>
                        </div>
                    </figcaption>
                </figure>
            </li>
            {/foreach}

        </ul>
        <div class="nav-links" tabindex="0" id="nav-links">
            <a tabindex="0" class="prev page-numbers" href="#" id="LivroAnterior"> <i class="fa fa-long-arrow-left"></i>Anterior</a>
            <a tabindex="0" class="next page-numbers" href="#" id="LivroProximo"> Proximo <i class="fa fa-long-arrow-right"></i></a>
        </div>
    </div>
</div>