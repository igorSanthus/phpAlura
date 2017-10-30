<?php
include("conecta.php");
include("banco-usuario.php"); 

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
// var_dump($usuario);
if($usuario==null){
	header("Loction: index.php?login=0");
}else{
	setcookie("usuario_logado", $usuario["email"]);
	header("Loction: index.php?login=1");


}
die();


	  
?>