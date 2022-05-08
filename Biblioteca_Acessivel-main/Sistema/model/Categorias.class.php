<?php


/**
 *
 */
class Categorias extends Conexao
{
  private $car_id, $cat_nome, $cat_slog;
  function __construct()
  {
    parent::__construct();
  }

  function get_categorias()
  {
    $query = "SELECT * FROM {$this->db_prefix}categoria ";

    $this->ExecuteSQL($query);
    $this->getLista();
  }
  function getLista()
  {
    $i = 1;
    while ($lista = $this->ListarDados()) {
        $this->itens[$i] = array(
          'cat_id' => $lista['cat_id'],
          'cat_nome' => $lista['cat_nome'],
          'cat_img' => Rotas::get_SiteHome()."/media/images/".$lista['cat_img'],
          'cat_slug' => $lista['cat_slug'],
          'cat_link' => Rotas::get_Pag('livros').'/'.$lista['cat_id'].'/'.$lista['cat_slug']
        );
        $i++;
    }
  }

}



 ?>
