<?php
$servername = "localhost";
$database = "gmudatabase";
$username = "boltov";
$password = "Olesya29!";
// Создаем соединение
$conn = mysqli_connect($servername, $username, $password, $database);
// Проверяем соединение
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully!\n";
