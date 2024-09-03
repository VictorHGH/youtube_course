<?php

declare(strict_types=1);

$name = "Victor";

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<main class="container">
		<h1>Home</h1>

		<?php if ($name != ""): ?>
			<p>Welcome to the home page, <?= $name ?></p>
		<?php else: ?>
			<p>Welcome to the home page.</p>
		<?php endif; ?>
	</main>
</body>

<style>
	.container {
		max-width: 1200px;
		margin: 0 auto;
		text-align: center;
	}
</style>

</html>
