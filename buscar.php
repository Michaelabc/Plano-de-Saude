



<?php

include "conexao.php";

$buscar = $_POST['nome_plano'];

$sql = "SELECT * FROM planos WHERE UPPER (nome_plano)= UPPER ('$buscar')";
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