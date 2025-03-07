<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Detalle de contacto</title>
	</head>

	<body>
		<h1>Detalle de contacto</h1>

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
			</div>
		</div>
	</body>

	<style>
		h1 {
			text-align: center;
		}

		.card-container{
			max-width: 400px;
			max-height: 400px;
			margin: 0 auto;
			border: 1px solid #ccc;
			border-radius: 10px;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			padding: 20px 0;

		}

		.card-info {
			display: flex;
			align-items: center;
			justify-content: center;;
			width: 100%;
		}

		.image {
			content: url('https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp');
			width: 20%;
			height: auto;
			padding: 20px;
		}

		.links {
			display: flex;
			width: 100%;
			justify-content: space-around;
		}

		.back-button, .edit-button {
			display: block;
			text-align: center;
			color: black;
			text-decoration: none;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
			border: 1px solid #ccc;
			border-radius: 5px;
			padding: 5px 30px;
		}

		.edit-button {
			background-color: lightgreen;
		}
	</style>

</html>
