<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Biblioteca</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Biblioteca</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Início</a>
            </li>            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Bibliotecas
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="?page=listar-biblioteca">Listar</a></li>
                <li><a class="dropdown-item" href="?page=cadastrar-biblioteca">Cadastrar</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Atendentes
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="?page=listar-atendente">Listar</a></li>
                <li><a class="dropdown-item" href="?page=cadastrar-atendente">Cadastrar</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Alunos
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="?page=listar-aluno">Listar</a></li>
                <li><a class="dropdown-item" href="?page=cadastrar-aluno">Cadastrar</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorias
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="?page=listar-categoria">Listar</a></li>
                <li><a class="dropdown-item" href="?page=cadastrar-categoria">Cadastrar</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Livros
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="?page=listar-livro">Listar</a></li>
                <li><a class="dropdown-item" href="?page=cadastrar-livro">Cadastrar</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Reservas
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="?page=listar-reserva">Listar</a></li>
                <li><a class="dropdown-item" href="?page=cadastrar-reserva">Cadastrar</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-lg-12 mt-5">
          <?php
            //arquivo que conecta no banco de dados
            include('config.php');
            //chama as paginas individuais
            switch(@$_REQUEST["page"]){
              //biblioteca
              case "listar-biblioteca":
                include("pages/listar-biblioteca.php");
              break;
              case "cadastrar-biblioteca":
                include("pages/cadastrar-biblioteca.php");
              break;
              case "editar-biblioteca":
                include("pages/editar-biblioteca.php");
              break;
              case "salvar-biblioteca":
                include("pages/salvar-biblioteca.php");
              break;
              //atendente
              case "listar-atendente":
                include("pages/listar-atendente.php");
              break;
              case "cadastrar-atendente":
                include("pages/cadastrar-atendente.php");
              break;
              case "editar-atendente":
                include("pages/editar-atendente.php");
              break;
              case "salvar-atendente":
                include("pages/salvar-atendente.php");
              break;
              //aluno
              case "listar-aluno":
                include("pages/listar-aluno.php");
              break;
              case "cadastrar-aluno":
                include("pages/cadastrar-aluno.php");
              break;
              case "editar-aluno":
                include("pages/editar-aluno.php");
              break;
              case "salvar-aluno":
                include("pages/salvar-aluno.php");
              break;
              //categoria
              case "listar-categoria":
                include("pages/listar-categoria.php");
              break;
              case "cadastrar-categoria":
                include("pages/cadastrar-categoria.php");
              break;
              case "editar-categoria":
                include("pages/editar-categoria.php");
              break;
              case "salvar-categoria":
                include("pages/salvar-categoria.php");
              break;
              //livro
              case "listar-livro":
                include("pages/listar-livro.php");
              break;
              case "cadastrar-livro":
                include("pages/cadastrar-livro.php");
              break;
              case "editar-livro":
                include("pages/editar-livro.php");
              break;
              case "salvar-livro":
                include("pages/salvar-livro.php");
              break;
              //reserva
              case "listar-reserva":
                include("pages/listar-reserva.php");
              break;
              case "cadastrar-reserva":
                include("pages/cadastrar-reserva.php");
              break;
              case "editar-reserva":
                include("pages/editar-reserva.php");
              break;
              case "salvar-reserva":
                include("pages/salvar-reserva.php");
              break;
              default:
                include("pages/main.php");
            }
          ?>
        </div>
      </div>
    </div>
    
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>