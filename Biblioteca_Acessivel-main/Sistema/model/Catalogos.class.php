<?php


class Catalogos extends Conexao
{
    private $car_id, $cat_nome, $cat_slog;
    function __construct()
    {
        parent::__construct();
    }

    function get_catalogos()
    {
        $query = "SELECT * FROM {$this->db_prefix}catalogo ";

        $this->ExecuteSQL($query);
        $this->getLista();
    }
    function getLista()
    {
        $i = 1;
        while ($lista = $this->ListarDados()) {
            $this->itens[$i] = array(
                'catalogo_id' => $lista['catlg_id'],
                'catalogo_nome' => $lista['catlg_nome'],
                'catalogo_icon' => $lista['catlg_icon']
            );
            $i++;
        }
    }

}



?>
