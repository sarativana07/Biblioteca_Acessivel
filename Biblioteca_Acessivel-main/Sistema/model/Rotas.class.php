<?php


/**
 * Url amigavel
 */
class Rotas
{

	public static $pag;
	private static $pasta_controller = 'controller/';
	private static $pasta_view = 'view';

	static function get_SiteHome(){
		return Config::SITE_URL;
	}

	static function get_SiteRaiz(){
		return $_SERVER['DOCUMENT_ROOT'];
	}
	
	static function get_SiteTema(){
		return self::get_SiteHome().'/'.self::$pasta_view;
	}

	static function get_pag($nome){
		return self::get_SiteHome().'/'.$nome;
	}


	static function ImageLink($img, $largura, $altura){
		$imagem  = self::get_SiteHome()."/media/images/thumb.php?src={$img}&w={$largura}&h={$altura}&zc=1";
		return $imagem;
	}

	static function get_Pagina()
	{
		if(isset($_GET['pag'])){

			$pagina = $_GET['pag'];

			self::$pag = explode('/', $pagina);

			$pagina = self::$pasta_controller.self::$pag[0] .'.php';

			self::$pag = $_GET; //full hack

			if(file_exists($pagina)){
				include $pagina;
			}else{
				include 'erro.php';
			}
		}

	}

}
 ?>
