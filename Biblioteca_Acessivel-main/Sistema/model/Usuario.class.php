<?php

class Usuario extends Conexao
{
    public $_logged_in = false;
    public $_is_admin = false;
    public $_is_vendedor = false;
    public $_is_entregador = false;
    public $_is_cliente = false;
    public $_data = [];

    private $_cookie_user_id = "c_user";
    private $_cookie_user_token = "xs";
    private $_cookie_user_referrer = "ref";

    private $telefone, $senha;

    /* ------------------------------- */
    /* __construct */
    /* ------------------------------- */

    /**
     * __construct
     *
     * @return void
     */

    public function __construct()
    {
        parent::__construct();
    }

    function GetLogin($telefone, $senha){
        $this->setTelefone($telefone);
        $this->setSenha($senha);

        $query = "SELECT * FROM {$this->db_prefix}usuario";

        $query.= " WHERE usu_telefone = :telefone AND usu_senha = :senha";

        $params = array(
            ':telefone'=>$this->getTelefone(),
            ':senha'=>$this->getSenha()
        );


        $this->ExecuteSQL($query, $params);

        if($this->TotalDados() > 0){
            echo 'yes';
            $lista = $this->ListarDados();

            session_start();
            $_SESSION['USUARIO']['usu_id'] = $lista['usu_id'];
            $_SESSION['USUARIO']['usu_telefone'] = $lista['usu_telefone'];
            $_SESSION['USUARIO']['usu_senha'] = $lista['usu_senha'];
            $_SESSION['USUARIO']['usu_balanco'] = $lista['usu_balanco'];
            $_SESSION['USUARIO']['usu_tipo'] = $lista['usu_tipo'];
        }
        //$this->getLista();
    }

    private function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    private function setSenha($senha){
        $this->senha = $senha; //cripto falta
    }

    private function getTelefone(){
        return $this->telefone;
    }
    private function getSenha(){
        return $this->senha;
    }


    function getLista()
    {
        $i = 1;
        while ($lista = $this->ListarDados()) {
            $this->itens[$i] = array(

                'usu_id' => $lista['usu_id'],
                'usu_telefone' => $lista['usu_telefone'],
                'usu_senha' => $lista['usu_senha'],
                'usu_balanco' => $lista['usu_balanco']
            );
            $i++;
        }
    }

}

?>