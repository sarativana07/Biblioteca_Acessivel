<?php
/**
 *
 */
class Livro extends Conexao
{

    function __construct()
    {
      parent::__construct();
    }

    function get_Livros()
    {
      //query especifica para buscar produtos de uma categoria especifica
      $query = "SELECT * FROM {$this->db_prefix}livro l ,
      {$this->db_prefix}categoria c, {$this->db_prefix}catalogo g WHERE  l.livro_cat = c.cat_id AND l.livro_catalogo = g.catlg_id";

      $query.= " ORDER BY l.livro_id DESC";

      $this->ExecuteSQL($query);
      $this->getLista();
    }
    function get_LivroID($id)
    {
        //query especifica para buscar produtos de uma categoria especifica
        $query = "SELECT * FROM {$this->db_prefix}livro l ,
      {$this->db_prefix}categoria c, {$this->db_prefix}catalogo g WHERE  l.livro_cat = c.cat_id AND l.livro_catalogo = g.catlg_id";

        $query.= " AND livro_id = :id ";

        $params = array(':id'=>(int)$id);

        $this->ExecuteSQL($query,$params);
        $this->getLista();
    }


    function get_MeusLivros()
    {
        //query especifica para buscar produtos de uma categoria especifica
        $query = "SELECT * FROM {$this->db_prefix}livro l ,
      {$this->db_prefix}categoria c, {$this->db_prefix}catalogo g WHERE  l.livro_cat = c.cat_id AND l.livro_catalogo = g.catlg_id";

        $query.= " ORDER BY l.livro_id DESC";

        $this->ExecuteSQL($query);
        $this->getLista();
    }
    function get_LivrosFavoritos()
    {
        //query especifica para buscar produtos de uma categoria especifica
        $query = "SELECT * FROM {$this->db_prefix}livro l ,
      {$this->db_prefix}categoria c, {$this->db_prefix}catalogo g WHERE  l.livro_cat = c.cat_id AND l.livro_catalogo = g.catlg_id";

        $query.= " ORDER BY l.livro_id DESC";

        $this->ExecuteSQL($query);
        $this->getLista();
    }

    function getLista()
    {
      $i = 1;
      while ($lista = $this->ListarDados()) {
          $this->itens[$i] = array(
            'livro_id' => $lista['livro_id'],
            'livro_titulo' => $lista['livro_titulo'],
            'livro_autor' => $lista['livro_autor'],
            'livro_ISBN' => $lista['livro_ISBN'],
            'livro_prologo' => $lista['livro_prologo'],
            'livro_cat' => $lista['livro_cat'],
            'livro_img' => Rotas::get_SiteHome()."/media/images/".$lista['livro_img'],
            'livro_img_Grande' => Rotas::ImageLink($lista['livro_img'], 600 , 600),
            'livro_img_Pequeno' => Rotas::get_SiteHome()."/media/images/".$lista['livro_img'],
            'livro_cat_id' => $lista['cat_id'],
            'livro_cat_nome' => $lista['cat_nome'],
            'livro_catalogo_nome' => $lista['catlg_icon'],
            'livro_ficheiro' => $lista['livro_ficheiro'],
          );
          $i++;
      }
    }
}


 ?>
