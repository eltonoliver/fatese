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
	
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<!--MENU ANIMADO -->	 
    <link rel="stylesheet" type="text/css" href="css/style9.css" />
	<!-- -->

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="img/favicon.png" />  
	
</head>
<body>
<div class="container">
	<div class="row">
		<div class="span12">
			<!--TOPO -->
			<div id="topo"><div id="slogan">Faculdade de Tecnologia Senac Amazonas</div></div>
		</div>
		<div class="span12" style="background-color:#f9ac4a;">
			<ul id="menu">
				<a href="?pg=home"><li>Início</li></a>
				<a href="?pg=institucional"><li> Institucional</li></a> 
				<a href="?pg=graduacao"><li> Graduação </li></a>
				<a href="http://www.ead.senac.br" target="blank"><li> Pós Graduação EAD </li></a>
				<a href="?pg=biblioteca"><li>Bíblioteca</li></a>
				<a href="?pg=faleconosco"><li>Fale Conosco</li></a>
				<a href="?pg=links"><li> Links </li></a>
			</ul>
		</div>
	</div>
	<?php
		@$pg = $_GET['pg'];
		if($pg == 'institucional'){
			include 'includes/institucional.php';
		}elseif($pg == 'home'){
			include    'includes/home.php';
		}elseif($pg == 'graduacao'){
			include 'includes/graduacao.php';
		}elseif($pg == 'biblioteca'){
			include 'includes/biblioteca.php';
		}elseif($pg == 'faleconosco'){
			include 'includes/faleconosco.php';
		}elseif($pg == 'links'){
			include 'includes/links.php';
		}else{
			include 'includes/home.php';
		}
	?>	
	<div class="row" >
		<div class="span12" style="background-color:#004c94;">
			<div class="row">
				<div class="span4">					
					<ul id="menu-footer">
						<li><h5> Institucional </h5>  </li>
						<li><a href="?pg=faleconosco"> Fale Conosco </a>  </li>
						<li><a href="http://www.am.senac.br/virtual/transpReg.php"> Transparência da Gestão </a>  </li>
						<li><a href="http://www.senac.br/"> Departamento Regional </a>   </li>						
						<li><h5> Programas </h5>  </li>
						<li><a href="http://www.am.senac.br/psg/"> PSG </a></li>
						<li> Pronatec  </li>
						<li> Aprendizagem Comercial  </li>
					</ul>	
				</div>
				<div class="span4">
					<!--COLUNA 4 -->
					<ul id="menu-footer">
						<li><h5> Sistemas </h5></li>
						<li><a href="http://www.fecomercio-am.org.br/"> Fecomércio AM </a> </li>
						<li><a href="http://www.sesc-am.com.br/">Sesc AM  </a> </li>
						<li><a href="http://www.am.senac.br/"> Senac AM </a>  </li>
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