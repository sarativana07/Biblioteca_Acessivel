<!-- Start: Products Section -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="books-full-width">
                <div class="container">

                    {include file="__form_busca.tpl"}

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
                            {foreach from=$Livros item=$l}
                                <li class="category-item {$l.livro_cat_nome}" tabindex="0">
                                    <figure>
                                        <img src="{$l.livro_img}" alt="{$l.livro_titulo}" />
                                        <figcaption class="bg-default">
                                            <div class="diamond">
                                                <i class="{$l.livro_catalogo_nome}"></i>

                                            </div>
                                            <div style="text-align: center; margin-top: 50px;">
                                                <a class="btn btn-success" href="{$HOME}/livro/{$l.livro_id}" tabindex="0"> Abrir Livro</a>
                                            </div>
                                            <div class="info-block">
                                                <h4 tabindex="0">{$l.livro_titulo}</h4>
                                                <span class="author" tabindex="0"><strong tabindex="0">Autor:</strong>{$l.livro_autor}</span><br>
                                                <span class="author" tabindex="0"><strong tabindex="0">ISBN:</strong> {$l.livro_ISBN}</span>
                                                <p tabindex="0">{substr($l.livro_prologo, 0, 100)}</p>

                                            </div>
                                        </figcaption>
                                    </figure>
                                </li>

                            {/foreach}

                        </ul>
                    </div>
                </div>

            </div>
        </main>
    </div>
</div>
<!-- End: Products Section -->
