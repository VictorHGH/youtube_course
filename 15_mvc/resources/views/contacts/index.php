<input type="text">
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Contacts home page</title>
		<script src="https://unpkg.com/@tailwindcss/browser@4"></script>
	</head>

	<body>
		<div class="container mx-auto">
			<h1 class="text-3xl font-bold mb-4 mt-4 ml-4">Listado de contactos</h1>

			<form action="/contacts" class="flex mb-10">
				<input type="text" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escriba el contacto" required />
				<button type="button" class="m-4 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Buscar</button>
			</form>

			<a class="bg-blue-500 text-white ml-4 p-2 rounded-lg" href="/contacts/create">Crear contacto</a>

			<ul class="list-disc list-inside ml-5 mt-4">
				<?php foreach ($contacts['data'] as $contact): ?>
					<li>
						<a href="/contacts/<?=$contact['id']?>">
							<?=$contact['name']?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>

			<?php 
				$paginate = 'contacts';
				require_once '../resources/views/assets/pagination.php' 
			?>

		</div>

	</body>

</html>
