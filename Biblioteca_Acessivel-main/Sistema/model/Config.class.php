<?php



/**
 * Configuracoes Basicas
 */

class Config{

	const SITE_URL =  "http://127.0.0.1/biblioteca";
	const SITE_PASTA =  "";
	const SITE_NOME =  "Biblioteca Mocambique";
	const SITE_EMAIL_ADMIN = "";

	//BASE DE DADOS
	const BD_HOST = "localhost",
		  BD_USER = "root",
		  BD_SENHA = "",
		  BD_BANCO = "biblioteca",
		  BD_PREFIX = "mz_",
		  BD_PORT = "3306";

	//INFORMACOES PARA PHP MAILLER
	const EMAIL_HOST = "smtp.gmail.com",
		  EMAIL_PORT = 587,
		  EMAIL_USER = "",
		  EMAIL_SENHA = "",
		  EMAIL_SMTAUTH = true,
		  EMAIL_SMTPSEC = "tls",
		  EMAIL_COPIA = "manuelnovela48@gmail.com";
}

 ?>
