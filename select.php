<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <title>SUS</title>

  </head>
  <body class="container">
    <img style="width: 100%" src="img/fundo.png">
    <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="select.php">Meus Planos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="atualizar.html">Atualizar Plano</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="plano.html">Inserir Plano</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="deletar.php">Deletar Plano</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Contato</a>
  </li>
  <nav class="navbar navbar-light bg-light">
  <form class="form-inline" method="POST" action="buscar.php">
    <input class="form-control mr-sm-2" name="nome_plano" type="buscar" placeholder="buscar" aria-label="buscar">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">buscar</button>
  </form>
</nav>
</ul>
<p>&nbsp;</p>
  
 
<div class="row">
<?php

include "conexao.php";

$sql = "SELECT * FROM planos ";
$result = $conn -> query($sql);

if ($result -> num_rows > 0) {
	while($row = $result -> fetch_assoc())
		{
		//echo $row['nome_plano']." - R$ ".$row['preco']."-".$row['abrangencia']."<br/>";
		//echo '<li class="list-group-item">'.$row["nome_plano"].'</li>';
     echo '<div class="card card-header text-center col-md-4" style="width: 18rem;">';
     echo '<div class="card card-body">';

		echo '<div class="card card-header  text-center h3 ">Plano: '.$row['nome_plano']. '</div';
		echo "<div class='col-md-4 col-lg-12 text-center'>";
		echo "<img src='img/".$row['foto']."'>";
		echo '<p class=card-body card-text h6">Preco do plano:R$'.$row['preco'];
		echo '<p class="card-body card-text h6">Abrangencia: '.$row["abrangencia"].'<br>';
		echo '</div>'; 
    echo '<a href="#" class="btn btn-primary"><small>Ver mais informações</a></small>';
 
     echo'</div>';
     echo'</div>';
	}
}
else{
	echo "0 resultados";
}

$conn -> close();

?>
 </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>


</html>
