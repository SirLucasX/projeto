<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Produtos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Cadastrar Produto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">Lista de Produtos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<nav class="navbar" style="background-color: #e3f2fd;">
  <!-- Navbar content -->
</nav>

<div class='container'>
  <div class='row'>
    <div class= 'col mt-5'>
      <?php 
      switch(@$_REQUEST["page"]){
        case "novo":
          include("novo-produto.php");
          break;
          }
 ?>
    
  </div>
    </div>
    </div>

<script src="../js/bootstrap.bundle.min.js" ></script>
  </body>
</html>