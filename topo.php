<html>
    <head>
  <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="estilo.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   
    <title></title>
    </head>
    <body>
       <div id='cssmenu'>
        <ul>
           <li class='active'><a href="index.php"><span>Home</span></a></li>
           <li class='has-sub'><a href='#'><span>Listagens</span></a>
              <ul>
                  <li><a href="listar.php?msg=aluno" target="_blank">LISTAR ALUNOS</a></li>
                <li><a href="listar.php?msg=professor" target="_blank">LISTAR PROFESSORES</a></li>
                <li><a href="listar.php?msg=curso" target="_blank">LISTAR CURSOS</a></li>
                <li><a href="listar.php?msg=despesa" target="_blank">LISTAR DESPESAS</a></li>
                <li><a href="listar.php?msg=matricula" target="_blank">LISTAR MATRÍCULAS</a></li>
                <li><a href="listar.php?msg=diretor" target="_blank">LISTAR DIRETORES</a></li>
              </ul>
           </li>
           <li class='has-sub'><a href='#'><span>Gestão de pessoas</span></a>
              <ul>
                <li><a href="gerenciar.php?tipo=aluno">Gerenciar alunos</a></li>
                <li><a href="gerenciar.php?tipo=professor" >Gerenciar Professores</a></li>
                <li><a href="gerenciar.php?tipo=diretor" >Gerenciar diretores</a></li>
              </ul>
           </li>
          <li class='has-sub'><a href='#'><span>Gestão de curso</span></a>
              <ul>
                <li><a href="gerenciar.php?tipo=curso">Curso</a></li>
                <li><a href="gerenciar.php?tipo=matricula">Gerenciar matricula</a></li>
              </ul>
           </li>  
           <li class='active'><a href="gerenciar.php?tipo=despesa"><span>Gestão de despesas</span></a></li>    
           <div class="logout">
              <a href="logout.php">Sair</a>
           </div> 
        </ul>
      </div>

</body>
</html>
