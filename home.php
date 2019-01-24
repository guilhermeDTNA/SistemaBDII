<?php
session_start();
?>
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="UTF-8">
    <title>GereDespesa</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
	<?php
	if(isset($_SESSION['nao_autenticado'])):
	?>
	<p>Usuario ou senha invalidos!</p>
	<?php
		endif;
		unset($_SESSION['nao_autenticado']);
	?>
		<div class="login">
		    <form action="login.php" method="POST">

		    	<div class="imgcontainer">
	    			<img src="avatar.png" alt="Avatar" class="avatar">
				</div>

				<div class="container">
					<label for="usuario"><b>Usuário</b></label>
			        <input name="usuario" type="text" placeholder="Seu usuário" required><br>
			        
			        <label for="senha"><b>Senha</b></label>
			        <input name="senha" type="password" placeholder="Sua senha" required><br>
			        
			        <button type="submit">Login</button>

			        <label>		        	
			        	<input type="checkbox" name="remember" checked="checked">Salvar
			        </label>
		        </div>

		        <div class="container" style="background-color: #f1f1f1">
		        	<button type="button" class="cancelbtn">Cancelar</button><br>
    				<span class="psw">Esqueceu a <a href="#">senha?</a></span>
		        </div>
		    </form>
	    </div>
</body>

</html>