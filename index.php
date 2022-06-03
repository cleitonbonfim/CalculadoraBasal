<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculo de Calorias Basal</title>
</head>
<body>
	<h1>Preencha as Informações e Calsule sua Taxa Metabólica basal</h1>

			<form action="calcular_basal.php" method="POST">
				<tr>
					<td>Sexo:</td>

						<select name="select">
							<option value="Masculino" selected>Masculino</option>
							<option value="Feminino">Feminino</option>
						</select><br/>
				</tr>
				<tr>
					<td>Idade:</td>
						<td> 
							<input class="form-control" type="text" name="Idade"><br/>
						</td>
				</tr>
				<tr>
					<td>Altura:</td>
						<td> 
							<input class="form-control" type="text" name="Altura"><br/>
						</td>
				</tr>
				<tr>
					<td>Peso:</td>
						<td> 
							<input class="form-control" type="text" name="Peso"><br/><br/>
						</td>
				</tr>				
			  	<tr>
		    		<td><input class="btn btn-primary" type="submit" name="Calcular"></td>
		    	</tr>  	
			</form>

</body>
</html>