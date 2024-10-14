<?php

$name = $_REQUEST['name'];
$age = $_REQUEST['age'];
$sexo = $_REQUEST['sexo'];
$roles = $_REQUEST['roles'];
$image = $_FILES['image'];

echo "<p>El nombre del usuario es: $name</p>";
echo "<p>La edad del usuario es: $age</p>";
echo "<p>El sexo del usuario es: $sexo</p>";
echo "<p>Roles:</p>";

echo "<ul>";
foreach ($roles as $role) {
	$role = ucfirst($role);
	echo "<li>$role</li>";
}
echo "</ul>";

var_dump($image);
