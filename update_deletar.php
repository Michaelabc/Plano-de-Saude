<?php 
	include "conexao.php";

	$id = $_POST['id'];

	$sql = "DELETE FROM  planos WHERE id=$id";

	if ($conn->query($sql) === TRUE) {
		echo "Deletado com sucesso";
	}

	else {
		echo "Error". $sql . "<br>" . $conn->error;
	}

	$conn->close()
 ?>