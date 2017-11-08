<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/8
 * Time: 上午 10:05
 */
$n=9;
$m=9;
$a=$_POST[a];
$b=$_POST[b];
$c=$_POST[c];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>James</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php echo "我是廖峻棋，資工數位3A<br>";
    echo "<table>";
    for($i=1;$i<=$n;$i++){
        echo "<tr>";
        for($j=1;$j<=$m;$j++){
            echo "<td>  ". $i*$j."  </td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<div style='background-color: rgb($a,$b,$c);width: 100px;height: 100px;'></div>";

    ?>
</body>
</html>