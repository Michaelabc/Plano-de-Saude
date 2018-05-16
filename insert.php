<?php 
	include "conexao.php";

	$nome_plano = $_POST['nome_plano'];
	$preco = $_POST['preco'];
	$abrangencia = $_POST['abrangencia'];
	$foto = $_POST['foto'];


	$sql = "INSERT INTO planos (nome_plano, preco, abrangencia, foto) VALUES ('$nome_plano', '$preco', '$abrangencia', '$foto')";

	if ($conn->query($sql) === TRUE) {
		echo "usuário inserido com sucesso";
	}

	else {
		echo "Error". $sql . "<br>" . $conn->error;
	}

	$conn->close()
 ?>