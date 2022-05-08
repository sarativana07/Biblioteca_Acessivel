<img src="https://github.com/matiassingers/awesome-readme/blob/master/icon.png" align="right" />


# bibloteca_acessivel_mozambique

[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D_7.1-8892BF.svg)](https://github.com/symfony/symfony)
[![Build status][shield-build]](#)
[![MIT licensed][shield-license]](#)



[shield-license]: https://img.shields.io/badge/license-MIT-blue.svg
[shield-build]: https://img.shields.io/badge/build-passing-brightgreen.svg

<h2>Demostração rápida- https://bibliotecaacessivel.rf.gd</h2>
<span>Clique no link acima para acessar uma pré-instalação do nosso sistema.</span>

<p><b>Onde Você pode testar os Modos:</b></p>
	<ul>
		<li> Controle de voz </li>
		<li> Leitura de tela </li>
		<li> Navegação por guias (tabindex) </li>
		<li> Ampliar (ZoomIn) ou reduzir (ZoomOut) Texto, imagens, tabelas e outros elementos visíveis </li>
		<li> Modo de linguagem de sinais (Libras) </li>
		<li> Assistente Virtual, implementado como uma Bibliotecária Virtual </li>
	</ul>
 ou
 
# Faça sua própria instalação

<h2> Browsers Suportados </h2>

| [<img src="https://raw.githubusercontent.com/alrra/browser-logos/master/src/edge/edge_48x48.png" alt="IE / Edge" width="24px" height="24px" />](http://gotbahn.github.io/browsers-support-badges/)</br>IE / Edge | [<img src="https://raw.githubusercontent.com/alrra/browser-logos/master/src/firefox/firefox_48x48.png" alt="Firefox" width="24px" height="24px" />](http://gotbahn.github.io/browsers-support-badges/)</br>Firefox | [<img src="https://raw.githubusercontent.com/alrra/browser-logos/master/src/chrome/chrome_48x48.png" alt="Chrome" width="24px" height="24px" />](http://gotbahn.github.io/browsers-support-badges/)</br>Chrome | [<img src="https://raw.githubusercontent.com/alrra/browser-logos/master/src/safari/safari_48x48.png" alt="Safari" width="24px" height="24px" />](http://gotbahn.github.io/browsers-support-badges/)</br>Safari | [<img src="https://raw.githubusercontent.com/alrra/browser-logos/master/src/safari-ios/safari-ios_48x48.png" alt="iOS Safari" width="24px" height="24px" />](http://gotbahn.github.io/browsers-support-badges/)</br>iOS Safari | [<img src="https://raw.githubusercontent.com/alrra/browser-logos/master/src/samsung-internet/samsung-internet_48x48.png" alt="Samsung" width="24px" height="24px" />](http://gotbahn.github.io/browsers-support-badges/)</br>Samsung | [<img src="https://raw.githubusercontent.com/alrra/browser-logos/master/src/opera/opera_48x48.png" alt="Opera" width="24px" height="24px" />](http://gotbahn.github.io/browsers-support-badges/)</br>Opera |
| --------- | --------- | --------- | --------- | --------- | --------- | --------- |
| IE11, Edge| Todas versões| Todas versões| Todas versões| Todas versões| últimas 2 versões| últimas 2 versões

## Requisitos do sistema

<ul>
	<li>requer Apache Server, PHP 7.1+ e MySQL para executar</li>
	<li>Antes de instalar o Sistema, certifique-se de que as extensões PHP (mysqli, mbstring, curl) e biblioteca PHP (GD) e funções PHP (allow_url_fopen () & mail ()) e extensão Apache (mod_rewrite) estão habilitadas em seu servidor</li>
	<li>SSL certificate (opcional)</li>
</ul>

## Etapas de instalação

<ol>
	<li> 
		<h4>Ficheiros </h4>
		<p> Copiar todos ficheiro da pasta <a href='https://github.com/michelbisque/bibloteca_acessivel_mozambique/tree/main/Sistema'>"Sistema"</a> para a pasta do apache, do seu servidor</p>
		<p> Nota: Pode instalar em uma pasta ao enves da root, desde que especifique o caminho nas configuracoes a seguir</p>
	</li>
	<li> 
		<h4>Base de Dados && Configuracao de Caminhos</h4>
		<ol>
			<li>
				<p>Criar uma base de dados e importar o ficheiro "biblioteca.sql", que se encontra pasta <a href='https://github.com/michelbisque/bibloteca_acessivel_mozambique/blob/main/Banco%20de%20Dados/biblioteca.sql' >"Banco de dados"</a>  no GitHUB</p>
			</li>
			<li>
				<p>Editar  as configuracoes de acesso a base de dados. Abrir o ficheiro "root/model/Config.class.php" acessado apartir da Pasta raiz do seu servidor.</p>
				<p>Consiedere sua Proprias Configuracoes.
					
	class Config{
		const SITE_URL =  "http://127.0.0.1/biblioteca/"; 	//Endereco IP do seu servidor apache antecedido por http:// ou https:// 
		const SITE_PASTA =  ""; 				//Nome da paste se seu sistema esta em uma sub-pasta. Ex: organizacao.co.mz/biblioteca
		const SITE_NOME =  "Biblioteca Acessivel"; 		//Nome do Site
		const SITE_EMAIL_ADMIN = "admin@help.com"; Email	//Email do administrador do sistema
				
		//BASE DE DADOS
		const BD_HOST = "localhost",   				//Endereco IP do seu servidor MYSQL
		BD_USER = "root",					//Usuario MYSQL
		BD_SENHA = "",						//Senha MYSQL
		BD_BANCO = "biblioteca",				//Nome da base de dados que foi importado o ficheiro "biblioteca.sql" no passo anterior.
		BD_PREFIX = "mz_",					// Nao Alterar - prefixo do nome das tabelas.
		BD_PORT = "3306";					// Porta do seu servidor MYSQL
*//
		 </p>
	     </li>
	   </ol>
	</li>
	<li><h4>Concluir</h4><p> Acessar o sistema atraves de seu navegador usando a URL especificada  Obrigado! </p></li>
</ol>

Isso é tudo, aproveite!
			
# Recursos

<ol>
	<li>
		<b>Modo de linguagem de sinais (Libras)</b> 
		<p>O Sistema tem uma a funcao de um assistente de traducao de texto para linguagem de sinais, deste modo atraves de gestos simples podemos expressar textos complexos.	 </p>  
	</li>
	<li>
		<b>Menu de Acessibilidade</b> 
		<p>Permite fazer configuracoes rapidas de acessibilidade, onde o usuario pode activar e desativar os modos de acessibilidade a seguir</p>
	</li>
	<li>
		<b>Controle Por Voz</b> 
		<p>O sistema possue um mode de controle por voz e assistente virtual, que permite o usuario ter interacao com o sistema atraves de comandos usando o microphone do dispositivo. para acessar esse modo basta escolher no menu de Acessibilidade o botao de "Controle por Voz" e permitir que o sistema active o seu microphone</p>
	</li>
	<li>
		<b>Zoom</b> 
		<p>Zoom In - Amplia todos recursos visiveis e Zoom out - reduz o seu tamanho</p>
	</li>
	<li>
		<b>Navegação por guias</b>
		<p>Implementamos cuidadosamente o atributo "tabindex" de forma a tornar a pagina acessivel a qualquer tipo de navegacao.</p>
	</li>
</ol>
		
# bibloteca_acessivel_mozambique
