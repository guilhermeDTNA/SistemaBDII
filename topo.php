<html>
    <head>
        <meta charset="UTF-8">
        <title>Página Inicial</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
     <?php
        session_start();
        include_once './valida_login.php';
        ?>

        <div class="menu-container">
    <ul class="menu clearfix">
        <!-- <li><a href="index.php"><img src="inicio.png" class="inicio"></a></li> -->
        <li><a href="index.php">Home</a>
        <li><a href="index.php">Listagens</a>
            <!-- Nível 1 -->
            <!-- submenu -->
            <ul class="sub-menu clearfix">
                <li><a href="listar.php?msg=aluno">LISTAR ALUNOS</a></li>
                <li><a href="listar.php?msg=professor" >LISTAR PROFESSORES</a></li>
                <li><a href="listar.php?msg=curso" >LISTAR CURSOS</a></li>
                <li><a href="listar.php?msg=despesa" >LISTAR DESPESAS</a></li>
                <li><a href="listar.php?msg=matricula" >LISTAR MATRÍCULAS</a></li>
                <li><a href="listar.php?msg=diretor" >LISTAR DIRETORES</a></li>
            </ul><!-- submenu -->
        </li>
        <li><a href="aluno.php">Gestão de pessoas</a>
            <ul class="sub-menu clearfix">
                <li><a href="aluno.php">Gerenciar alunos</a></li>
                <li><a href="professor.php" >Gerenciar Professores</a></li>
                <li><a href="diretor.php" >Gerenciar diretores</a></li>
            </ul><!-- submenu -->
        </li>
        <li><a href="curso.php">Gestão de curso</a>
            <ul class="sub-menu clearfix">
                <li><a href="matricula.php">Gerenciar matricula</a></li>
            </ul><!-- submenu -->
        </li>
        <li><a href="despesa.php">Gestão de despesas</a></li>
        <div class="logout">
      <a href="logout.php">Sair</a>
        </div>
    </ul>

</div>

</div>

        <!-- <div class="topo"> 
            <div class="topointerior">
                
                    <a href="index.php"><img src="inicio.png" height="55px" width="70px"></a>
                
                <div class="menu">
                    <ul>
                        <li><a href="listar.php?msg=aluno" target="_blank">LISTAR ALUNOS</a></li>
                        <li><a href="listar.php?msg=professor" target="_blank">LISTAR PROFESSORES</a></li>
                        <li><a href="listar.php?msg=curso" target="_blank">LISTAR CURSOS</a></li>
                        <li><a href="listar.php?msg=despesa" target="_blank">LISTAR DESPESAS</a></li>
                        <li><a href="listar.php?msg=matricula" target="_blank">LISTAR MATRÍCULAS</a></li>
                        <li><a href="listar.php?msg=diretor" target="_blank">LISTAR DIRETORES</a></li>
                    </ul>
                </div>
            </div>
        </div> -->
</body>
</html>
