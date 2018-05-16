<?php 
	include "conexao.php";
	$preco = $_POST['preco'];
	$id = $_POST['id'];

	$sql = "UPDATE planos SET preco='$preco' WHERE id=$id";

	if ($conn->query($sql) === TRUE) {
		echo "Atualizado com sucesso";
	}

	else {
		echo "Error". $sql . "<br>" . $conn->error;
	}

	$conn->close()
 ?>