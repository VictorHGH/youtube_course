<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Crear contacto</title>
	</head>

	<body>
		<div class="main">		
			<div class="container">
				<h1>Crear contacto</h1>

				<form action="/contacts" method="post">
					<div class="input">
						<label for="name">Name:</label>
						<input type="text" placeholder="Jon Doe" name="name" id="name">
					</div>

					<div class="input">
						<label for="email">Email:</label>
						<input type="email" name="email" id="email" placeholder="jon@doe.com">
					</div>

					<div class="input">
						<label for="phone">Phone:</label>
						<input type="tel" name="phone" id="phone" placeholder="123456789">
					</div>

					<input class='submit-button' type="submit" value="Crear">
			</div>
		</div>

	</body>

	<style>

		.main{
			content: "";
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			width: 100%;
			height: 97dvh;
			background-color: black;
		}

		.container{
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			margin: auto;
			background-color: #f2f2f2;
			width: 300px;
			height: 300px;
			padding-bottom: 30px;
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

