<?
    $name="Сурин Алексей Владимирович";
    $old=30;
    define("Pi","3,14");

$time = date("H");
if (($time >= 8) or ($time < 20)){
    $mor = "https://michaelhyatt.com/wp-content/uploads/2016/06/iStock_82679937_MEDIUM.jpg";}
elseif (($time >= 20) or ($time < 8))
    $mor = "https://pbs.twimg.com/media/ESCmnKRWsAA5FIZ.jpg:large";?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body style="background-image:url('<?echo $mor?>');">
<p> Мое имя <? echo $name?></p> <br>
<p>мой возраст <?echo $old?> лет </p>
<p><? echo constant ("Pi"); ?> </p>
<?
$a=5;
do {
    echo "$a<br/>";
    $a++;
}while ($a <= 13);

    $c=1000;
    while ($c>50){
        $c=$c/2;
        echo "работаем с while $c<br/>";
    }
for($x=1000;$x>50;$x=$x/2)
{
    echo $x. ',  цикл For  ';
}
$h=random_int(0, 10);
echo "$h</br>";
if ($h==0){
    for($v=0;$v<=10;$v++)
        echo "$v";}
elseif($h==1){
    for($v=0;$v<=9;$v++)
        echo "$v";}
elseif($h==2){
    for($v=0;$v<=8;$v++)
        echo "$v";
}
elseif($h==3){
    for($v=0;$v<=7;$v++)
        echo "$v";
}
elseif($h==4){
    for($v=0;$v<=6;$v++)
        echo "$v";
}
elseif($h==5){
    for($v=0;$v<=5;$v++)
        echo "$v";
}
elseif($h==6){
for($v=0;$v<=4;$v++)
    echo "$v";}
elseif($h==7){
    for($v=0;$v<=3;$v++)
        echo "$v";}
elseif($h==8){
    for($v=0;$v<=2;$v++)
        echo "$v";}
elseif($h==9){
    for($v=0;$v<=1;$v++)
        echo "$v";}
elseif($h==10){
    for($v=0;$v<=0;$v++)
        echo "$v";}
?>




</body>
</html>
