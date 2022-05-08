
{include file="__form_busca.tpl"}

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
                {foreach from=$Categorias item=$categoria}
                    <div class="filter btn" tabindex="0" data-filter=".{$categoria.cat_nome}">{$categoria.cat_nome}</div>
                {/foreach}

            </div>
            <div id="category-filter">
                <ul class="category-list">
                    {foreach from=$Livros item=$l}
                        <li class="category-item {$l.livro_cat_nome}">
                            <figure>
                                <img src="{$l.livro_img}"  alt="{$l.livro_titulo} " />
                                <figcaption class="bg-default">
                                    <div class="diamond">
                                        <i class="{$l.livro_catalogo_nome}" tabindex="0"></i>

                                    </div>
                                    <div style="text-align: center; margin-top: 50px;">
                                        <a class="btn btn-success" href="{$HOME}/livro/{$l.livro_id}" tabindex="0"> Abrir Livro</a>
                                    </div>
                                    <div class="info-block">
                                        <h4 tabindex="0">{$l.livro_titulo}</h4>
                                        <span class="author" tabindex="0"><strong tabindex="0">Autor:</strong>{$l.livro_autor}</span>
                                        <span class="author" tabindex="0"><strong tabindex="0">ISBN:</strong> {$l.livro_ISBN}</span>
                                        <p tabindex="0">{substr($l.livro_prologo, 0, 100)}</p>

                                    </div>
                                </figcaption>
                            </figure>
                        </li>

                    {/foreach}

                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
<!-- Start: Category Filter -->

