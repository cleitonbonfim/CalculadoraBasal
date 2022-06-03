<?php include("cabecalho.php");
	
	$sexo = $_POST['select'];
	$idade = $_POST['Idade'];
	$altura = $_POST['Altura'];
	$peso = $_POST['Peso'];
	
	echo "Você informou os dados abaixo:<br/>";
	echo "Sexo: $sexo<br/>";
	echo "Idade: $idade<br/>";
	echo "Altura: $altura<br/>";
	echo "Peso: $peso<br/><br/>";

	if ($sexo == "Masculino") {
		$bas = 66+(13.8*$peso)+(5*$altura)-(6.8*$idade);
	} else if ($sexo == "Feminino"){
		$bas = 655+(9.6*$peso)+(1.8*$altura)-(4.7*$idade);
	} else {
		echo "não é possivel calcular";
	}
	
	echo "Sua Taxa Metabólica Basal é de $bas";


 ?>