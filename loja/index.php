<?php include("cabecalho.php"); ?>

<?php if(isset($_GET["login"]) && $_GET["login"]==true){?>
<p class="alert-success">Logado com sucesso</p>
<?php }?>

<?php if(isset($_GET["login"]) && $_GET["login"]==false){?>
	<p class="alert-danger">Usuario ou senha invalida!!!</p>
<?php }?>

            <h1>Bem vindo!</h1>
			<form action="login.php" method="post">
			<table class="table">
				<tr>
					<td>Email</td>
					<td><input class="form-control" type="email" name="email"></td>
				</tr>
				<tr>
					<td>Senha</td>
					<td><input class="form-control" type="password" name="senha"></td>
				</tr>
				<tr>
					<td></td>
					<td><button class="btn btn-primary">Login</button>
					<input class="btn btn-danger" type="reset" value="Limpar"/>
					</td>
				</tr>
			</table>
			</form>
			
<?php include("rodape.php"); ?>
