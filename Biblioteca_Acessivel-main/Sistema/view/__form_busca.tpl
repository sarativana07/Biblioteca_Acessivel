<!-- Start: Search Section -->
<section class="search-filters">
    <div class="container">
        <div class="filter-box">
            <h3>PESQUISAR LIVRO</h3>
            <form action="{$HOME}/pesquisa" method="POST">
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <label class="sr-only" for="titulo">Pesquise por Titulo</label>
                        <input class="form-control" placeholder="Insira aqui o titulo de um Livro para pesquisar" id="titulo" name="titulo" type="text" tabindex="0">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="form-group">
                        <select name="categoria" id="categoria" class="form-control">
                            <option tabindex="0">Escolha por Catalogos</option>
                            {foreach from=$Catalogos item=$c}
                                <option value="{$c.catalogo_id}" tabindex="0">{$c.catalogo_nome}</option>
                            {/foreach}
                        </select>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="form-group">
                        <select name="category" id="category" class="form-control">
                            <option tabindex="0">Todas Categorias</option>
                            {foreach from=$Categorias item=$categoria}
                                <option value="{$categoria.cat_id}" tabindex="0">{$categoria.cat_nome}</option>
                            {/foreach}
                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="form-group">
                        <input class="form-control" type="submit" value="Pesquisar" tabindex="0">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- End: Search Section -->