<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="css/style.css" rel="stylesheet">
</head>

<body>

	<form action="05_procesar.php" method="POST" enctype="multipart/form-data">
		<label>
			Nombre:
			<input type="text" name="name">
		</label>

		<br>
		<br>

		<label>
			Edad:
			<input type="number" name="age">
		</label>

		<br>

		<p>Sexo:</p>
		<select name="sexo">
			<option value="masculino">Masculino</option>
			<option value="femenino">Femenino</option>
		</select>

		<!-- <label>
			<input type="radio" name="sexo" value='masculino'>
			Masculino
		</label>

		<label>
			<input type="radio" name="sexo" value='femenino'>
			Femenino
		</label> -->

		<br>

		<p>Roles:</p>
		<label>
			<input type="checkbox" name="roles[]" value='administrador'>
			Administrador
		</label>

		<label>
			<input type="checkbox" name="roles[]" value='editor'>
			Editor
		</label>

		<label>
			<input type="checkbox" name="roles[]" value='moderador'>
			Moderador
		</label>

		<br>
		<br>

		<label>
			Archivo:
			<br>
			<input type="file" name="image">
		</label>

		<br>
		<br>

		<textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>

		<br>
		<br>

		<button type="submit">Enviar</button>
	</form>

</body>

</html>
