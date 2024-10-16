<?php

$name = $_REQUEST['name'];
$age = $_REQUEST['age'];
$sexo = $_REQUEST['sexo'];
$roles = $_REQUEST['roles'];
$mensaje = $_REQUEST['mensaje'];

$image = $_FILES['image'];
$patch = $_SERVER['DOCUMENT_ROOT'] . '/youtube_course/imagenes/' . $image['name'];

echo "<p>El nombre del usuario es: $name</p>";
echo "<p>La edad del usuario es: $age</p>";
echo "<p>El sexo del usuario es: $sexo</p>";
echo "<p>Roles:</p>";
echo "<p>Mensaje: $mensaje</p>";

echo "<ul>";
foreach ($roles as $role) {
	$role = ucfirst($role);
	echo "<li>$role</li>";
}
echo "</ul>";

move_uploaded_file($image['tmp_name'], $patch);
