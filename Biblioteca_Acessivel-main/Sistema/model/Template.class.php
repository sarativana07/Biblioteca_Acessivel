<?php


/**
 *
 */
class Template extends SmartyBC
{

	function __construct()
	{
		# INIT do SMARTY
		parent:: __construct();

		$this->setTemplateDir('view');
		$this->setCompileDir('view/compile/');
		$this->setCacheDir('view/cache/');

	}
}
 ?>
