<?
    $name="Сурин Алексей Владимирович";
    $old=30;
    define("Pi","3,14");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background-color: <?
             function CTime( $time ) {
            $time=date("H");

        }

        if (18<$time)
            echo "#000";
        else
            echo "#F00";
            ?>
        }
    </style>
</head>
<body>
<p> Мое имя <? echo $name?></p> <br>
<p>мой возраст <?echo $old?> лет </p>
<p><? echo constant ("Pi"); ?> </p>





</body>
</html>
