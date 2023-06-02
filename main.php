<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
    <link rel="stylesheet" href="Стиль.css" />
</head>
<body>

<div class="flex-container">

    <div class="header">
        <?php include 'logo.inc.php' ?>
        <?php include 'menu.inc.php' ?>
    </div>

    <div class="about_me">

        <h1>  <?php  echo $p  ?> </h1>

        <div class="data">
            <div class="myImg">
                <?php  echo '<img src="https://onpape.com/data/onpape.com-34817301.jpg" width="500" height="500">'; ?>
            </div>

            <div class="fullname">
                <p> Меня зовут
                    <?php  echo $name, ' ', $surname . '<br>';
                    echo 'город', ' ', $city; ?>
                </p>
                <p> Я из потока
                    <?php  echo 'HACKER-', $group; ?>
                    </p>
                <p> Мне
                    <?php  echo $age;   ?>
                    лет </p>
                <p> Мы научились создавать переменные </p>
                <p> Изучили простые операции с ними </p>
            </div>
        </div>

        <div class="knowledge">

            <?php  include 'knowledge.inc.php'; ?>
            <?php   echo $a, ' ', $b, ' ', $c; ?> <br>

            <?php
            $a = 10;
            $b = 20;
            $c = $a + $b;
            echo $c;
            ?>   <br>
            <?php
            echo $d;
            ?>

        </div>

        <div class="article">
            <p class="text">
                0000000000000000000011111111111111111111  НЕ ОШИБАЕТСЯ ТОТ, КТО НИЧЕГО НЕ ДЕЛАЕТ 11111111111111110000000000000000000000
            </p>
        </div>
    </div>

    <?php include 'footer.inc.php' ?>

</div>


</body>

<?php
$db_host = '127.0.0.1';
$db_user = 'root';
$db_password = 'root';
$db_db = 'information_schema';
$db_port = 8889;

$mysqli = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db,
    $db_port
);

if ($mysqli->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
}

echo 'Success: A proper connection to MySQL was made.';
echo '<br>';
echo 'Host information: '.$mysqli->host_info;
echo '<br>';
echo 'Protocol version: '.$mysqli->protocol_version;

$mysqli->close();
?>
</html>


