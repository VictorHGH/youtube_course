<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Contacts home page</title>
		<script src="https://unpkg.com/@tailwindcss/browser@4"></script>
	</head>

	<body>
		<h1 class="text-3xl font-bold mb-3">Listado de contactos</h1>

		<a class="text-blue-500 border-b-2" href="/contacts/create">Crear contacto</a>

		<ul class="list-disc list-inside ml-3">
			<?php foreach ($contacts['data'] as $contact): ?>
				<li>
					<a href="/contacts/<?=$contact['id']?>">
						<?=$contact['name']?>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>



		<div class="flex flex-col items-center">
		  <!-- Help text -->
		  <span class="text-sm text-gray-700 dark:text-gray-400">
				Mostrando <span class="font-semibold text-gray-900 dark:text-white"><?=$contacts['from']?></span> to <span class="font-semibold text-gray-900 dark:text-white"><?=$contacts['to']?></span> of <span class="font-semibold text-gray-900 dark:text-white"><?=$contacts['total']?></span> Entradas
		  </span>
		  <div class="inline-flex mt-2 xs:mt-0">
			<!-- Buttons -->
			<a href="<?=$contacts['prev_page_url']?>" class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-800 rounded-s hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
				<svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
				  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
				</svg>
				Prev
			</a>
			<a href="<?=$contacts['next_page_url']?>" class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-800 border-0 border-s border-gray-700 rounded-e hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
				Next
				<svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
				<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
			  </svg>
			</a>
		  </div>
		</div>
	</body>

</html>
