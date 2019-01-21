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
    <form action="login.php" method="POST">
        <input name="usuario" type="text" placeholder="Seu usuário" autofocus="">
        <input name="senha" type="password" placeholder="Sua senha">
        <button type="submit">Entrar</button>
    </form>
             
</body>

</html>