<?php

/**
 *
 */
class Conexao extends Config
{
  private $host, $user, $password, $db_name;

  protected $obj, $itens=array(),$db_prefix;

  function __construct()
  {
    $this->host = self::BD_HOST;
    $this->user = self::BD_USER;
    $this->password = self::BD_SENHA;
    $this->db_name = self::BD_BANCO;
    $this->db_prefix = self::BD_PREFIX;

    try{
        if($this->Conectar() == null){
            $this->Conectar();
        }
    }catch(Exception $e){
        exit($e->getMessage().' <h2> Erro ao conectar com a base de dados! verifique as definicoes no ficheiro /model/Config.php </h2>');
    }
  }

  private function Conectar()
  {
      $options  = array(
          PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
          PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
      );

      $conn = new PDO("mysql:host={$this->host};dbname={$this->db_name}",
              $this->user, $this->password, $options);

      return $conn;
    }
    function ExecuteSQL($query, array $params = NULL ){
        $this->obj = $this->Conectar()->prepare($query);

        if(is_array($params) && sizeof($params) >= 1){
           foreach ($params as $key => $value) {
              $this->obj->bindvalue($key, $value);
           }
        }

        return $this->obj->execute();
    }

    function ListarDados()
    {
       return $this->obj->fetch(PDO::FETCH_ASSOC);
    }

    function TotalDados()
    {
      return $this->obj->rowCount();
    }

    function getItens()
    {
      return $this->itens;
    }


}


 ?>
