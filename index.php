
<!DOCTYPE html>
<html lang="en">
<head>
<?php require 'person/title.php'; ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="icon" href="img/favicon/cropped-icon-mercantil-circle-1-32x32.png" sizes="32x32" />
<link rel="icon" href="img/favicon/cropped-icon-mercantil-circle-1-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="img/favicon/cropped-icon-mercantil-circle-1-180x180.png" />
<meta name="msapplication-TileImage" content="img/favicon/cropped-icon-mercantil-circle-1-270x270.png" />
<link href='https://fonts.googleapis.com/css?family=Barlow Semi Condensed' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Barlow Semi Condensed' rel='stylesheet'>
  <style>
	.azulAgil {
		background-size: 1500px 100%;
		color: #FFF;
		padding-top: 120px;
		padding-bottom: 120px;
		background-blend-mode: overlay;
		}
	body{ font-family: "Barlow Semi Condensed", Sans-serif;  		background-color: #333;  }
	.form-control{  background-color: #ffffff17; color: #FFF; font-size: 22px;}
	#txSenha:focus{font-size: 30px;}
	.btn-default {
		color: #fff;
		background-color: #ffffff17;
		border-color: #fff;
	}
	.emManaus img{
		width: 94px!important;
	}
	.leftCss{
		padding:100px;
		padding-top:16%;
	}
	body {
		//background: url(http://www.bath.ac.uk/psychology/images/iStock-525212970-16-9.jpg);
		background-size: 1800px;
	}
	
	.leftCss img{
		max-height:100px;
	}
	@media (max-width: 767px) { 
		.leftCss{
			padding:80px;
			padding-bottom:0px;
			padding-top:30px;
		}
	}
	@media (min-width: 768px) and (max-width: 1043px) {
		.leftCss{
			padding:10px;
			padding-bottom:0px;
			padding-top:20%;
		}
	}
	.imagem-o{
		background: #04416e;
		width: 100%;
		height: 100%;
		float: left;
		position: absolute;
		top: 0;
		left: 0;
		opacity: 0.93;
	}
	@media only screen and (max-width: 700px) {
		.mobile1{
			    width: 70%;
		}
		.col-sm-4 {
			padding-right: 0px!important;
			padding-left: 0px!important;
		}
		.mobile2{
			    width: 0px!important;
		}
		.col-xs-12 {
			width: 97%;
		}
	}
	body {
		font-family: "Barlow Semi Condensed", Sans-serif!important;
	}
@media (min-width: 768px)
.col-sm-12 {
    width: 97%!important;
}
  </style>
</head>
<body>

<div class="container-fluid">

  <div class="row">
    <div class="col-sm-4" >

	</div>
    <div class="col-xs-12 col-sm-7 col-md-5 col-lg-4 azulAgil" >
		<div class="imagem-o"></div>
		<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
			<div class="container-fluid">
				<a href="/office"><img src="img/logo-empresas_.png" alt="Logo SOFIA" clas="emManaus" align="top" style="height: 94px;">	</a>
				<h2>Login</h2>
				<form action="validacao.php" method="post">
					<fieldset><br>
						<label for="txUsuario">Login do usuário</label>
						<input type="text" name="usuario" id="txUsuario" maxlength="25" class="form-control" placeholder="Digite o seu login" /><br>
						<label for="txSenha">Senha</label>
						<input type="password" name="senha" id="txSenha" class="form-control" placeholder="Digite a sua senha"/>
							<div class="checkbox">
							  <label><input type="checkbox" name="remember"> Lembre-me</label>
							</div>
						<input type="submit" value="Entrar" class="btn btn-default btn-lg"/>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
    <div class="col-sm-4 mobile2" >
	</div>
  </div>

  
<div class="col-sm-11 mobile1" style="align-items: center; bottom: 1px; position: absolute; ">
<a target="_blank" href="https://www.linkedin.com/in/ansdiogo/" style=" margin-left: 48%; float: left; ">
Diogo Rafael da Silva</a>
</div>
  
  
</div>
    
</body>
</html>