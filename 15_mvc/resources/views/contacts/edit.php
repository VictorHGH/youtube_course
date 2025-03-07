<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Edicion de contacto</title>
	</head>

	<body>
		<h1>Editar contacto</h1>
		<div class="container">

			<form action="/contacts/<?=$contact['id']?>" method="post">
				<div class="input">
					<label for="name">Name:</label>
					<input type="text" name="name" id="name" value="<?= $contact['name'] ?>">
				</div>

				<div class="input">
					<label for="email">Email:</label>
					<input type="email" name="email" id="email" value="<?= $contact['email'] ?>">
				</div>

				<div class="input">
					<label for="phone">Phone:</label>
					<input type="tel" name="phone" id="phone" value="<?= $contact['phone'] ?>">
				</div>

				<button class='submit-button' type="submit">Actualizar</button>
		</div>

	</body>

	<style>
		h1 {
			text-align: center;
		}
		.container{
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			margin: auto;
			width: 300px;
			height: 300px;
			padding-bottom: 30px;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
			border-radius: 10px;
		}

		.input{
			margin-bottom: 20px;
			}	

		.input label {
			display: block;
		}

		.input input {
			border-radius: 5px;
			border: 1px solid #ccc;
			height: 20px;
			padding: 5px;
		}

		.submit-button{
			width: 100%;
			padding: 5px;
			background-color: lightgreen;
			border: 1px solid #ccc;
			border-radius: 5px;
		}

	</style>	

</html>


