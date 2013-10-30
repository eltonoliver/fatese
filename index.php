<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>:::Portal Fatese:::</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<!--MENU ANIMADO -->	 
     <link rel="stylesheet" type="text/css" href="css/style9.css" />
	<!-- -->

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">  
	
</head>
<body>
<div class="container">
	<div class="row">
		<div class="span12">
			<!--TOPO -->
			<div id="topo"> <div id="slogan">Faculdade de Tecnologia Senac Amazonas</div> </div>
		</div>
		<div class="span12" style="background-color: #f9ac4a;">
			
			<ul id="menu" >
				<li><a href="?pg=home"> Início </a> </li>
				<li><a href="?pg=institucional"> Institucional </a> </li>
				<li><a href="?pg=graduacao"> Graduação </a></li>
				<li><a href="http://www.ead.senac.br" target="blank"> Pós Graduação EAD </a></li>
				<li><a href=""> Bíblioteca </a></li>
				<li><a href=""> Fale Conosco </a></li>
				<li><a href=""> Links </a></li>
			</ul>
		</div>
	</div>
	<?php 

		
		$pg = $_GET['pg'];

		switch ($pg) {
			case $pg == 'institucional' : include 'includes/institucional.php';	
				break ;
			case $pg == 'home' : include 'includes/home.php';
				break;
			case $pg == 'graduacao' : include 'includes/graduacao.php';	 
				break;	
			default: include 'includes/home.php';
				break;
		}


	?>
	
	<div class="row" >
		<div class="span12" style="background-color:#004c94;">
			<div class="row">
				<div class="span4">					
					<ul id="menu-footer">
						<li><h5> Institucional </h5>  </li>
						<li> Quem Somos   </li>
						<li> Fale Conosco   </li>
						<li> Transparência da Gestão   </li>
						<li> Departamento Regional   </li>
						<li> Links Relacionados   </li>
						<li><h5> Programas </h5>  </li>
						<li> PSG  </li>
						<li> Pronatec  </li>
						<li> Aprendizagem Comercial  </li>
						

					</ul>	
				</div>
				<div class="span4">
					<!--COLUNA 4 -->
					<ul id="menu-footer">
						<li><h5> Sistemas </h5>  </li>
						<li> Fecomércio AM   </li>
						<li> Sesc AM   </li>
						<li> Senac AM   </li>					

					</ul>	
					
				</div>
				<div class="span4">
					<!--COLUNA 3 -->

					
				</div>
			</div>
			<div class="row">
				<div class="span12" style="background-color:#f79401;height:50px;">
						<br>
						<center><p style="color:white;font-size:15px;">Senac © Todos os direitos reservados - 2013</p></center>
					
				</div>
			</div>
		</div>
	</div>
</div> 		

</body>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</html>
