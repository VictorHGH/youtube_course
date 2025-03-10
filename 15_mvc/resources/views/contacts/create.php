<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Crear contacto</title>
	</head>

	<body>
		<div class="main">		
			<h1>Crear contacto</h1>
			<div class="container">

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
		h1 {
			text-align: center;
		}

		.main{
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
		}

		.container{
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			margin: auto;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
			border-radius: 10px;
			background-color: #fbfaf8;
			padding: 25px;
		}

		.input{
			margin-bottom: 20px;
			}	

		.input label {
			display: block;
			margin-bottom: 5px;
		}

		.input input {
			border-radius: 5px;
			border: none;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
			height: 20px;
			padding: 8px;
		}

		.submit-button{
			width: 100%;
			padding: 5px;
			background-color: lightgreen;
			border-radius: 5px;
			border: none;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
		}

	</style>	

</html>

