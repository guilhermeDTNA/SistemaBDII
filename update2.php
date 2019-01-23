<?php
    session_start();
    include_once './valida_login.php';
?>
<?php 
include_once("mysql.php");

if($_POST['oTipo'] == 'curso'){
        $id_registro = $_POST['id_registro']; 
        $id_professor = $_POST['id_professor'];
        $nome = $_POST['nome'];
        $num_alunos = $_POST['num_alunos'];
        $mensalidade = $_POST['mensalidade'];

        try {
            $msql = "UPDATE `curso` SET `id_professor` = '$id_professor', `nome_curso` = '$nome' WHERE `id_curso` = $id_registro";
            $stmt = $pdo->prepare($msql);

            $stmt->bindParam($id_professor, $_REQUEST['id_professor']);
            $stmt->bindParam($nome, $_REQUEST['nome_curso']);
            $stmt->execute();    

            echo"<script language='javascript' type='text/javascript'>window.location.href='./index.php';</script>";
        } catch (Exception $e) {
            
        }

}elseif (($_POST['oTipo'] == 'despesa')) {
        
        $id_registro = $_POST['id_registro']; 
        $id_diretor = $_POST['id_diretor'];
        $nome = $_POST['nome'];
        $valor_despesa = $_POST['valor_despesa'];
        

        try {
            $msql = "UPDATE `despesa` SET `id_diretor` = '$id_diretor', `nome_despesa` = '$nome', valor_despesa = '$valor_despesa' WHERE `id_despesa` = $id_registro";
            $stmt = $pdo->prepare($msql);

            $stmt->bindParam($id_diretor, $_REQUEST['id_diretor']);
            $stmt->bindParam($nome, $_REQUEST['nome_despesa']);
            $stmt->bindParam($valor_despesa, $_REQUEST['valor_despesa']);
            $stmt->execute();    

            echo"<script language='javascript' type='text/javascript'>window.location.href='./index.php';</script>";
        } catch (Exception $e) {
            
        }


}elseif(($_POST['oTipo'] == 'matricula')) {
        
        $id_registro = $_POST['id_registro']; 
        $id_aluno = $_POST['id_aluno'];
        $id_curso = $_POST['id_curso'];
       
        

        try {
            $msql = "UPDATE `matricula` SET `id_aluno` = '$id_aluno', id_curso = '$id_curso' WHERE `id_matricula` = $id_registro";
            $stmt = $pdo->prepare($msql);

            $stmt->bindParam($id_aluno, $_REQUEST['id_aluno']);
            $stmt->bindParam($id_curso, $_REQUEST['id_curso']);
            $stmt->execute();    

            echo"<script language='javascript' type='text/javascript'>window.location.href='./index.php';</script>";
        } catch (Exception $e) {
                    die("ERROR: Could not able to execute $msql. " . $e->getMessage());
        }
    

} else{
    	$id_registro = $_POST['id_registro']; 
    	$nome = $_POST['nome'];
    	$sobrenome = $_POST['sobrenome'];
    	$email = $_POST['email'];
    	$data_nasc = $_POST['data_nasc'];
    	$rua = $_POST['rua'];
    	$numero = $_POST['numero'];
    	$cidade = $_POST['cidade'];
    	$estado = $_POST['estado'];
    	//

    try {
    	

    	
        // Create prepared statement
    if(($_POST['oTipo'] == 'aluno')){
        $msql = "UPDATE aluno SET nome_aluno = '$nome', sobrenome_aluno = '$sobrenome', email_aluno = '$email', data_nasc = '$data_nasc', rua_aluno = '$rua', numero = '$numero', cidade_aluno = '$cidade', estado_aluno = '$estado' WHERE id_aluno = '$id_registro'";

        $stmt = $pdo->prepare($msql);

        $stmt->bindParam($nome, $_REQUEST['nome_aluno']);
        $stmt->bindParam($sobrenome, $_REQUEST['sobrenome_aluno']);
        $stmt->bindParam($email, $_REQUEST['email_aluno']);
       // $stmt->bindParam($data_nasc, $_REQUEST['data_nasc']);
        $stmt->bindParam($rua, $_REQUEST['rua_aluno']);
        $stmt->bindParam($numero, $_REQUEST['numero']);
        $stmt->bindParam($cidade, $_REQUEST['cidade_aluno']);
        $stmt->bindParam($estado, $_REQUEST['estado_aluno']);
        $stmt->execute(); 

    }elseif ($_POST['oTipo'] == 'professor') {
        $msql = "UPDATE professor SET nome_professor = '$nome', sobrenome_professor = '$sobrenome', email_professor = '$email', data_nasc = '$data_nasc', rua_professor = '$rua', numero = '$numero', cidade_professor = '$cidade', estado_professor = '$estado' WHERE id_professor = '$id_registro'";

        $stmt = $pdo->prepare($msql);

        $stmt->bindParam($nome, $_REQUEST['nome_professor']);
        $stmt->bindParam($sobrenome, $_REQUEST['sobrenome_professor']);
        $stmt->bindParam($email, $_REQUEST['email_professor']);
       // $stmt->bindParam($data_nasc, $_REQUEST['data_nasc']);
        $stmt->bindParam($rua, $_REQUEST['rua_professor']);
        $stmt->bindParam($numero, $_REQUEST['numero']);
        $stmt->bindParam($cidade, $_REQUEST['cidade_professor']);
        $stmt->bindParam($estado, $_REQUEST['estado_professor']);
    }else{
        $msql = "UPDATE diretor SET nome_diretor = '$nome', sobrenome_diretor = '$sobrenome', email_diretor = '$email', data_nasc = '$data_nasc', rua_diretor = '$rua', numero = '$numero', cidade_diretor = '$cidade', estado_diretor = '$estado' WHERE id_diretor = '$id_registro'";

        $stmt = $pdo->prepare($msql);

        $stmt->bindParam($nome, $_REQUEST['nome_diretor']);
        $stmt->bindParam($sobrenome, $_REQUEST['sobrenome_diretor']);
        $stmt->bindParam($email, $_REQUEST['email_diretor']);
       // $stmt->bindParam($data_nasc, $_REQUEST['data_nasc']);
        $stmt->bindParam($rua, $_REQUEST['rua_diretor']);
        $stmt->bindParam($numero, $_REQUEST['numero']);
        $stmt->bindParam($cidade, $_REQUEST['cidade_diretor']);
        $stmt->bindParam($estado, $_REQUEST['estado_diretor']);
    }
        

        // Execute the prepared statement
        $stmt->execute();
        echo"<script language='javascript' type='text/javascript'>window.location.href='./index.php';</script>";
    } catch (PDOException $e) {
        die("ERROR: Could not able to execute $msql. " . $e->getMessage());
    }

}
// Close connection
unset($pdo);


 ?>