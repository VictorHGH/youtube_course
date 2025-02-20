<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Contacts home page</title>
	</head>

	<body>
		<h1>Listado de contactos</h1>

		<ul>
		<?php foreach ($contacts as $contact): ?>
			<li>
				<a href="/contacts/<?=$contact['id']?>">
					<?=$contact['name']?>
				</a>
			</li>
		<?php endforeach; ?>
		</ul>
	</body>

</html>
