<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Alterar Aluno - GereCurso</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>

    <body>
        <?php
        session_start();
        include_once './valida_login.php';
        ?>
        <?php
         include_once "mysql.php";
        include_once './topo.php';

        ?>
        <div class="titulo_opcoes">
            <font color="black">Altera alunos
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> 
            <p align="center"> Identificação (ID) do aluno: <input type="text" name="id_aluno" required="">
                <input type="submit" value="Procurar" name="procurar"></p>
        </form>

        <?php if(isset($_POST['procurar'])){

            $id_alun = $_POST['id_aluno'];
            
           try {
            $stmt = $pdo->prepare("SELECT id_aluno, nome_aluno, sobrenome_aluno, email_aluno FROM aluno WHERE id_aluno = '$id_alun'");
            $stmt->execute();
            $arrValues = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if(empty($arrValues)){
            ?>    
                <p align="center" style="color: red"><?php echo "Nenhum registro encontrado"; ?></p>
                
            <?php }else{
// open the table
        print "<h2><p align=center> <font color=red> Aluno: </font></p></h2> ";

            print "<table align=center border=2px height = 100 wdith= 200 cellspacing=5 cellpadding= 5>\n";
            print "<tr>\n";
// add the table headers
            foreach ($arrValues[0] as $key => $useless) {
                print "<th>$key</th>";
            }
            print "</tr>";
// display data
            foreach ($arrValues as $row) {
                print "<tr>";
                foreach ($row as $key => $val) {
                    print "<td>$val</td>";
                }
                ?>
               
                <td><a href="updateAluno.php?id_a=<?php echo "$id_alun" ?>" style="color: green"> Atualizar </a></td>
                
                <?php 
                
                print "</tr>\n";
            }
// close the table
            print "</table>\n";
        }
        } catch (PDOException $e) {
            die("ERROR: Could not able to execute $sql. " . $e->getMessage());
        }

           
        }

            include_once './rodape.php';
            ?>

    </body>
</html>