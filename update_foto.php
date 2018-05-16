<?php 
	include "conexao.php";
	$foto = $_POST['foto'];
	$id = $_POST['id'];

	$sql = "UPDATE planos SET foto='$foto' WHERE id=$id";

	if ($conn->query($sql) === TRUE) {
		echo "Atualizado com sucesso";
	}

	else {
		echo "Error". $sql . "<br>" . $conn->error;
	}

	$conn->close()
 ?>