<?php
/**/
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'test';
/** /
$servidor = 'bd_mais.mysql.dbaas.com.br';
$usuario = 'bd_mais';
$senha = 'cocacola123';
$banco = 'bd_mais';
/**/
// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
  header("Location: index.php"); exit;
}
// Conectar ao servidor MySQL
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());

//$usuario = mysqli_real_escape_string($_POST['usuario']);
//$senha = mysqli_real_escape_string($_POST['senha']);
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
//echo $usuario;
//echo $senha;


// Executa uma consulta que pega cinco notícias
$sql = "SELECT `id`, `nome`, `cpf`, `cadastro`, `nivel`, `ativo` FROM `usuarios` WHERE `nome` = '$usuario' AND `senha` = sha1('$senha') LIMIT 1"; 
	$query = mysqli_query($mysqli, $sql);
        $resultado = mysqli_fetch_assoc($query);

		
echo 'Registros encontrados: ' . $query->num_rows;

	echo '<br>';


if (mysqli_num_rows($query) != 1) {
	echo "Login inválido!"; exit;
}  
else { 
    $id = $resultado['id'];
    $nome = $resultado['nome'];
	$email = $resultado['email'];
	$nivel = $resultado['nivel'];
	$ativo = $resultado['ativo'];
	$cadastro = $resultado['cadastro'];	
	
    echo '  ID: ' .$resultado['id'];
    echo '  Nome: ' .$resultado['nome'];
	echo '  email: ' .$resultado['email'];
	echo '  nivel: ' .$resultado['nivel'];
	echo '  ativo: ' .$resultado['ativo'];
	echo '  cadastro: ' .$resultado['cadastro'];
	echo $id;
	//exit;
	
  $resultado = mysqli_fetch_assoc($query);
  if (!isset($_SESSION)) session_start();
  $_SESSION['UsuarioID'] = $id;
  $_SESSION['UsuarioNome'] = $nome;
  $_SESSION['UsuarioNivel'] = $nivel;
  
  echo $nivel;
  IF($nivel==12){
	  echo "nivel é 2";
	  header("Location: restrito.php"); //jogar este dentro de if para definir as paginas de acesso por nivel  --- 
  }
  IF($nivel==3){
	  echo "nivel é 3";
	  header("Location: r_candidato.php"); //jogar este dentro de if para definir as paginas de acesso por nivel  --- 
  }
  IF($nivel==101){
	  echo "nivel é 1";
	  header("Location: r_adm.php");
  }
  IF($nivel==10){
	  echo "nivel é 1";
	  header("Location: r_demo.php"); //jogar este dentro de if para definir as paginas de acesso por nivel  --- 
  }
  IF($nivel==4){
	  echo "nivel é 4";
	  header("Location: r_funcionario.php"); //jogar este dentro de if para definir as paginas de acesso por nivel  --- 
  }
  IF($nivel==5){
	  echo "nivel é 5";
	  header("Location: marketing.php"); //jogar este dentro de if para definir as paginas de acesso por nivel  --- 
  }
  IF($nivel==6){
	  echo "nivel é 6";
	  header("Location: gestao.php"); //jogar este dentro de if para definir as paginas de acesso por nivel  --- 
  }
  IF($nivel==7){// sistema SOFIA
	  echo "nivel é 7";
	  header("Location: r_adm.php"); //jogar este dentro de if para definir as paginas de acesso por nivel  --- 
  }

  echo $_SESSION['UsuarioID'];
  echo "OK ".$resultado['nome'];
  
  exit;

}


/*
if (mysqli_num_rows($query) != 1) {
  echo "Login inválido!"; exit;
}  else {
  $resultado = mysqli_fetch_assoc($query);
  if (!isset($_SESSION)) session_start();
  $_SESSION['UsuarioID'] = $resultado['id'];
  $_SESSION['UsuarioNome'] = $resultado['nome'];
  $_SESSION['UsuarioNivel'] = $resultado['nivel'];
  header("Location: restrito.php"); exit;
}
*/
exit;

?>

















