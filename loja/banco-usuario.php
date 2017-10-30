<?php 
function buscaUsuario($conexao, $email, $senha){
	$senhaMd5 = md5($senha);
	$query = "select * from produtos where email = '{$email}' and senha = '{$senhaMd5}'";
    $result = mysqli_query($conexao, $query);
	return  mysqli_fetch_assoc($result);
}
     //return  $usuario ;
?>