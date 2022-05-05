<?php

#Connection to the databse
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


$firstname_seek = $_POST['seek_firstname'];
$secondname_seek = $_POST['seek_secondname'];
$thirdname_seek = $_POST['seek_thirdname'];
$seek_result = mysqli_query($conn, query:"SELECT * FROM `users` WHERE `first_name` LIKE '$firstname_seek' AND `second_name` LIKE '$secondname_seek' AND `third_name` LIKE '$thirdname_seek'");
var_dump($seek_result);
$firstname_result = mysqli_fetch_all($seek_result);
var_dump($seek_result);
?>

<pre>
    <?php print_r($seek_result);
    echo 'то, что сверху уберу после отладки^^^^';
    ?>
</pre>

<!DOCTYPE html>
<html lang="ru">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Результат поиска</title>
</head>
<body>
<h1 class="">Результат поиска по курсанту:<?php
    foreach($seek_result as $result_name) {echo $result_name[2],"\n", $result_name[1];}?></h1>
<?php
//echo "наладить вывод данных";
//?>
</body>
</html>