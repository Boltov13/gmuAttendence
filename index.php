<?php
require_once 'config/connect.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Посещаемость курсанта!</title>
</head>

<style>
    tr, td {
        padding: 10px;
    }

    th {
        background: grey;
        color:  white;
    }

    td {
        background:white;
    }
</style>
<body>
<div class="container mt-4">
    <form method="post" action="vendor/seek.php">
        <p>Проверка посещаемости курсанта/студента</p>
        <input type="text" name="seek_secondname" placeholder="Введите фамилию"> <br>
        <input type="text" name="seek_firstname" placeholder="Введите имя"> <br>
        <input type="text" name="seek_thirdname" placeholder="Введите отчество"> <br>
        <button type="submit" class="btn btn-success">Seek!</button>
    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>USERNAME</th>
        </tr>
        <?php
            $seek_user = mysqli_query($conn, query:"SELECT * FROM `users`");

            $seek_user = mysqli_fetch_all($seek_user);
            foreach($seek_user
                    as $seek_user_result) {
                ?>
                <tr>
                    <td><?= $seek_user_result[0]?></td>
                    <td><?= $seek_user_result[1]?></td>
                    <td><?= $seek_user_result[2]?></td>
                    <td><?= $seek_user_result[3]?></td>
                    <td><?= $seek_user_result[5]?></td>
                    <td><?= $seek_user_result[6]?></td>
                </tr>
                <?php
            }
        ?>
    </table>
</div>
</body>
</html>