<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Detalle de contacto</title>
	</head>

	<body>
		<h1>Detalle de contacto</h1>

		<div class="main">
			<div class="card-container">

				<div class="card-info">
					<div class="image"></div>

					<div class="info">
						<p><strong>Nombre: </strong> <?= $contact['name'] ?></p>
						<p><strong>Email: </strong> <?= $contact['email'] ?></p>
						<p><strong>Phone: </strong> <?= $contact['phone'] ?></p>
					</div>
				</div>

				<div class="links">
					<a class="back-button" href="/contacts">volver</a>
					<a class="edit-button" href="/contacts/<?=$contact['id']?>/edit">Editar</a>
					<form action="/contacts/<?=$contact['id']?>/delete" method="post">
						<button class="delete-button">Eliminar</button>
					</form>
				</div>
			</div>
		</div>
	</body>

	<style>

		* {
			 box-sizing: border-box;
			 margin: 0;
			 padding: 0;
		}

		h1 {
			text-align: center;
			margin: 20px 0;
		}

		.main{
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
		}

		.card-container{
			border-radius: 10px;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			background-color: #fbfaf8;

		}

		.card-info {
			display: flex;
			align-items: center;
			justify-content: center;
			padding: 20px;
			width: 100%;
		}

		.info p{
			margin: 10px;
		}

		.image {
			content: url('https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp');
			margin-right: 20px;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
		}

		.links {
			display: flex;
			width: 100%;
			justify-content: space-around;
			margin: 0 20px;
		}

		.back-button, .edit-button, .delete-button {
			display: block;
			text-align: center;
			color: black;
			text-decoration: none;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
			border-radius: 5px;
			padding: 5px 30px;
			border: none;
		}

		.edit-button {
			background-color: lightgreen;
		}

		.delete-button {
			background-color: lightcoral;
			height: 30px;
		}

	</style>

</html>
