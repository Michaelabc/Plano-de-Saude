<?php 
	include "conexao.php";
	$abrangencia = $_POST['abrangencia'];
	$id = $_POST['id'];

	$sql = "UPDATE planos SET abrangencia='$abrangencia' WHERE id=$id";

	if ($conn->query($sql) === TRUE) {
		echo "Atualizado com sucesso";
	}

	else {
		echo "Error". $sql . "<br>" . $conn->error;
	}

	$conn->close()
 ?>