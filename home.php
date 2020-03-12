<?php
session_start();
?>
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="UTF-8">
    <title>Login - GereCurso</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
	<?php
	if(isset($_SESSION['nao_autenticado'])):
	?>
	<div class="loginp">
	<p>Usuario ou senha invalidos!</p>
	</div>
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
		        </div>
		    </form>
	    </div>
</body>

</html>