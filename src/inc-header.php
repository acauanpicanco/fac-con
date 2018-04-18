<?
	include('functions/core.php');
	
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">

	<title>Teste Facil Consulta</title>

	<!-- SEO META TAGS -->
	
	<meta name="description" content="-" />
	<meta name="author" content="Acauan Picanço" />
	<meta name="keywords" content="-">

	<base href="/">


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">




</head>
<body>



<header>

<nav class="navbar navbar-expand-lg navbar-light bg-light">Supermercado Fácil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
     
      
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="menuCompras" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Compras</a>
        <div class="dropdown-menu" aria-labelledby="menuCompras">
          <a class="dropdown-item" href="facil-consulta/site/fac-con/src/compras">Listar</a>
          <a class="dropdown-item" href="facil-consulta/site/fac-con/src/compras/editar">Adicionar</a>
          
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="menuprodutos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produtos</a>
        <div class="dropdown-menu" aria-labelledby="menuprodutos">
          <a class="dropdown-item" href="facil-consulta/site/fac-con/src/produtos">Listar</a>
          <a class="dropdown-item" href="facil-consulta/site/fac-con/src/produtos/editar">Adicionar</a>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="menuclientes" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clientes</a>
        <div class="dropdown-menu" aria-labelledby="menuclientes">
          <a class="dropdown-item" href="facil-consulta/site/fac-con/src/clientes">Listar</a>
          <a class="dropdown-item" href="facil-consulta/site/fac-con/src/clientes/editar">Adicionar</a>
          
        </div>
      </li>
     
    </ul>
  </div>
</nav>
</header>