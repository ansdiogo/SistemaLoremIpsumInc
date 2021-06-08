<?php
$nivel_necessario = 3;
require 'chave-session.php';//SOMENTE ACESSA COM ACESSO
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Intranet - Nova Era</title> <link rel="icon" href="img/favicon/cropped-icon-mercantil-circle-1-32x32.png" sizes="32x32" /> <link rel="icon" href="img/favicon/cropped-icon-mercantil-circle-1-192x192.png" sizes="192x192" /> <link rel="apple-touch-icon-precomposed" href="img/favicon/cropped-icon-mercantil-circle-1-180x180.png" /> <meta name="msapplication-TileImage" content="img/favicon/cropped-icon-mercantil-circle-1-270x270.png" />
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link href="https://fonts.googleapis.com/css?family=Barlow" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Barlow Semi Condensed' rel='stylesheet'>
  <style>
	.total{ width:100%; color: white;  position: fixed;}
	.topBar {
		padding: 8px 25px 1px 0px;
		background-color: #25628f;
		height: 55px;
		width: 100%;
	}
	.headerImg img {
		height: 52px;
		margin-top: -8px;
		max-width: 100%;
		border: none;
		-webkit-border-radius: 0;
		border-radius: 0;
		-webkit-box-shadow: none;
		box-shadow: none;
		padding-left: 25px;
	}
	.flutuarR{
		float: right;
	}
	.flutuarL{
		float: left;
	}
	.aum a{
		padding-left: 20px;
		//font-size:20px;
	}
	.total a{
		color: white;
		box-shadow: none;
		text-decoration: none;
	}
	.dropdown-menu-right a{
		color: black;
	}
	.total a:hover{

		color: lightblue;
		box-shadow: none;
		text-decoration: none;
	}
	.total a:focus{
		color: lightblue;
		text-decoration: none;
	}
	.dropdown-item {
		display: block;
		width: 100%;
		padding: 3px 1.5rem;
		clear: both;
		font-weight: 400;
		color: #292b2c;
		text-align: inherit;
		white-space: nowrap;
		background: 0 0;
		border: 0;
	}
	.totalCorpo{ width:100%;
	}
	.w3-button {
		color: #25628f!important;
	}
	.w3-btn, .w3-button {
		background-color: transparent;
	}
	.w3-green, .w3-hover-green:hover {
		color: #fff!important;
		background-color: #25628d!important;
	}
	.w3-button:hover {
		color: #fefefe!important;
		background-color: #353535!important;
	}
	.black{
		color: #000;
	}
	body{
		font-size: 15px;
		font-family: 'Barlow', sans-serif;
		overflow: hidden;
		margin-right: -20px;
	} .texto{font-family: 'Barlow', sans-serif;}
	body {
		font-family: "Barlow Semi Condensed", Sans-serif!important;
	}
	.card-menu{
		width: 160px;
	}
	@media only screen and (max-width: 400px) {
		.card-menu {
			width: 395px;
		}
		.headerImg img {
			max-width: 93%!important;
		}
		.dashboard {
			margin-left: 0px!important;
			//overflow: hidden; 
			margin-bottom: 5px;
		}
		.ks-user {
			visibility: hidden;
		}
	}
	@media only screen and (min-width: 500px) {
		.fa.fa-bars	{
			visibility: hidden;
		}
	}
	@media only screen and (max-width: 630px) {
		.ks-user {
			visibility: hidden;
		}
	}	
  </style>
  <link href="estilos.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>

<div class="total">
    <div class="col-sm-4 topBar flutuarL" >
		<div class="flutuarL headerImg"><a href="#">
				<img src="img/logo-empresas.png" alt="emManaus Agência Digital Logotipo" clas="emManaus" align="top" >
			</a>
			  <a href="javascript:void(0);" class="icon" onclick="meuColapso()">
				<i class="fa fa-bars"></i>
			  </a>
		</div>

		<div class="nav-item dropdown ks-user flutuarR" >
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
				<span class="ks-avatar">
					<img src="https://png.pngtree.com/svg/20161217/avatar__181424.png" width="36" height="36">
				</span>
				<span class="ks-info">
					Olá, <?php echo utf8_encode($_SESSION['UsuarioNome']); ?>!
				</span>
			</a>
			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="Preview">
				<br>
				<a class="dropdown-item botao_41" href="#">
					<span class="la la-user ks-icon"></span>
					<span>Seu perfil cadastrado</span>
				</a>
				<a class="dropdown-item" href="#">
					<span class="la la-wrench ks-icon" aria-hidden="true"></span>
				</a>
				<a class="dropdown-item" href="#">
					<span class="la la-question-circle ks-icon" aria-hidden="true"></span>
				</a>
				<a class="dropdown-item" href="logout.php">
					<span class="la la-sign-out ks-icon" aria-hidden="true"></span>
					<span>Encerrar</span>
				</a>
			</div>
		</div>
		

	</div>
</div>


<div style="color: #25628f;">
	<div class="w3-sidebar w3-bar-block w3-light-grey w3-card card-menu" style=" margin-top:56px; " id="sideBar">
		<a href="" class="w3-bar-item w3-button colapsar botao_11 black"><i class="fa fa-th-large" aria-hidden="true"></i> 
		Visão geral</a>
		
		<!--div class="w3-bar-item w3-button" onclick="myAccFunc()"><i class="fa fa-group" aria-hidden="true"></i> 
		Gestão <i class="fa fa-caret-down"></i></div>
		<div id="demoAcc" class="w3-hide w3-white w3-card-4">
		<a href="#" class="w3-bar-item w3-button colapsar botao_21"><i class="fa fa-address-book-o" aria-hidden="true"></i>
		Cadastrar Colaborador</a>
		<a href="#" class="w3-bar-item w3-button colapsar botao_22"><i class="fa fa-child" aria-hidden="true"></i>
		Cadastrar Oportunidades de trabalho</a>
		<a href="#" class="w3-bar-item w3-button colapsar botao_23"><i class="fa fa-check-square" aria-hidden="true"></i>
		Visualizar vagas cadastradas</a>
		<a href="#" class="w3-bar-item w3-button colapsar botao_24"><i class="fa fa-drivers-license-o" aria-hidden="true"></i>
		Visualizar Candidatos cadastrados</a>
		<a href="#" class="w3-bar-item w3-button colapsar botao_25"><i class="fa fa-check-square-o" aria-hidden="true"></i>
		Visualizar Candidatos selecionados</a>
		<a href="#" class="w3-bar-item w3-button colapsar botao_26"><i class="fa fa-file-text-o" aria-hidden="true"></i>
		Cadastrar Notícia ou Informativo</a>
		<a href="#" class="w3-bar-item w3-button colapsar botao_27"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
		Visualizar Notícias ou Informativos</a>
		</div>
 
		<div class="w3-dropdown-click">
		<div class="w3-bar-item w3-button" onclick="myDropFunc()"><i class="fa fa-share-alt"> </i> 
		   Marketing <i class="fa fa-caret-down"></i>
		</div>
		<div id="demoDrop" class="w3-dropdown-content w3-white w3-card-4">
		  <a href="#" class="w3-bar-item w3-button colapsar botao_31">Ofertas do dia</a>
		</div>
		</div-->
		
		<div class="w3-bar-item w3-button" onclick="myAccFunc3()"><i class="fa fa-address-book-o" aria-hidden="true"></i> 
		Seu Perfil <i class="fa fa-caret-down"></i></div>
		<div id="demoAcc3" class="w3-hide w3-white w3-card-4">
		<a href="#" class="w3-bar-item w3-button colapsar botao_41"><i class="fa fa-address-card-o" aria-hidden="true"></i>
		Seu Cadastro</a>
		<a href="#" class="w3-bar-item w3-button colapsar botao_42"><i class="fa fa-bullhorn" aria-hidden="true"></i>
		Currículo</a>
		<a href="#" class="w3-bar-item w3-button colapsar botao_43"><i class="fa fa-universal-access" aria-hidden="true"></i>
		Tipo de vaga</a>
		<a href="#" class="w3-bar-item w3-button colapsar botao_44"><i class="fa fa-edit" aria-hidden="true"></i>
		Vaga desejada</a>
		<a href="#" class="w3-bar-item w3-button colapsar botao_45"><i class="fa fa-key" aria-hidden="true"></i>
		Trocar Senha</a>
				<a href="#" class="w3-bar-item w3-button colapsar botao_99"></a>
		</div>

		<a href="#" class="w3-bar-item w3-button colapsar botao_51"><i class="fa fa-expeditedssl" aria-hidden="true"></i> 
		Política de Privacidade</a>

		<a href="logout.php" class="w3-bar-item w3-button"><i class="fa fa-sign-out" aria-hidden="true"></i>
		Encerrar</a>
<div class="assinatura">
<a target="_blank" href="http://www.emManaus.com.br/">
	<div style="padding-left: 20%;position: absolute;bottom: 25px;">
		<div style=" float: left; padding-top: 1px; color: #dee1e6; font-weight: 400; ">2018 | </div>
			<img src="https://www.supernovaera.com.br/wp-content/uploads/2018/11/emManaus-cinza.svg" alt="emManaus Agência Digital Logotipo" align="top" style="width: 52px; float: left;">
	</div>
</a>
</div>
		
	</div>
	<div class="w3-container dashboard" style="margin-left:150px">

		<iframe class="dashboard" src="dashboard-candidato.php" width="100%"  frameborder="0" scrolling="yes">
		e-folheto
		</iframe>
	</div>
</div>

<script>
var y;
function meuColapso() {
    var xxx = document.getElementById("sideBar");
if (x.matches) { // If media query matches
    if ( y === 0) {
        y=1;
		xxx.style.maxWidth = "395px";
    } else {
        y=0;
		xxx.style.maxWidth = "0";
    }
}else{}

}

var x = window.matchMedia("(max-width: 700px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes

function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-green";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-green", "");
    }
}
function myAccFunc2() {
    var x = document.getElementById("demoAcc2");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-green";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-green", "");
    }
}
function myAccFunc3() {
    var x = document.getElementById("demoAcc3");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-green";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-green", "");
    }
}

function myDropFunc() {
    var x = document.getElementById("demoDrop");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-green";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-green", "");
    }
}
</script>
<script>
$( ".colapsar" ).click(function() {
	meuColapso();
});

$( ".botao_11" ).click(function() {
   //$('.dashboard').append('<button class="alert">Clique-me</button>');
   $('.dashboard').attr('src','');
});
$( ".botao_21" ).click(function() {
   $('.dashboard').attr('src','z_cadastra_usuarios.php');
});
$( ".botao_22" ).click(function() {
   $('.dashboard').attr('src','cadastrarvaga.php');
});
$( ".botao_23" ).click(function() {
   $('.dashboard').attr('src','view-vagas-cadastradas.php');
});
$( ".botao_24" ).click(function() {
   $('.dashboard').attr('src','view-lista-candidatos.php');//visualizar candidatos cadastrados
});
$( ".botao_25" ).click(function() {
   $('.dashboard').attr('src','view-lista-candidatos-selecionados.php');//visualizar candidatos cadastrados
});
$( ".botao_26" ).click(function() {
   $('.dashboard').attr('src','cadastrar_msg.php');//cadastra msg
});
$( ".botao_27" ).click(function() {
   $('.dashboard').attr('src','view_msg_cadastradas.php');//visualizar / editar msg
});

$( ".botao_31" ).click(function() {
   $('.dashboard').attr('src','https://www.supernovaera.com.br/cadastrarofertas/');
});
$( ".botao_41" ).click(function() {
   $('.dashboard').attr('src','z_perfil.php?idUser=<?php echo $_SESSION['UsuarioID']; ?>');//$_SESSION['UsuarioID']
});
$( ".botao_42" ).click(function() {
   $('.dashboard').attr('src','up_curriculum.php');
});
$( ".botao_43" ).click(function() {
   $('.dashboard').attr('src','up-tipo.php');
});
$( ".botao_44" ).click(function() {
   $('.dashboard').attr('src','up-vaga.php');
});
$( ".botao_45" ).click(function() {
   $('.dashboard').attr('src','up-senha.php');
});
$( ".botao_51" ).click(function() {
   $('.dashboard').attr('src','https://www.supernovaera.com.br/politica-de-privacidade-texto/');
});
$( ".botao_61" ).click(function() {
   $('.dashboard').attr('src','z_cadastra.php');
});
$( ".botao_62" ).click(function() {
   $('.dashboard').attr('src','z_cadastra_tipo_vaga.php');
});
$( ".botao_63" ).click(function() {
   $('.dashboard').attr('src','view-edit-tipo-vaga.php');
});

$( ".botao_12" ).click(function() {// http://localhost/PhpLogin/up-senha.php	https://www.dropbox.com/sh/gxre1tgygi1lon1/AAD_RWuXGNkI2VLGxPZiMtEVa?dl=0
   $('.dashboard').attr('src','');
});
</script>

</body>