<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(isset($_SESSION['email']) && $_SESSION['email']!=""){
}else{
    echo "Please Login first";
    header("refresh:2;url=index.html");  //轉址
    exit(); //不執行之後的程式碼
}
include("db_con_inc.php");
?>
<head>
    <title>研究計畫</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 450px}

        /* Set gray background color and 100% height */
        .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height:auto;}
        }
    </style>
</head>
<body>

<div class="container">
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php">首頁</a></li>
                <li class="active"><a href="project.php">研究計畫</a></li>
                <li><a href="teach.php">教授課程</a></li>
                <li><a href="resume.php">簡歷</a></li>
                <li><a href="subject.php">學術</a></li>
                <li><a href="book.php">著作</a></li>
                <li><a href="student.php">學生</a></li>
                <li><a href="link.php">常用連結</a></li>
                <li><a href="reference.php">參考期刊</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"> Logout</a></li>
            </ul>
        </div>
    </nav>
</div>
<?php
$sql = "SELECT * FROM `project`";
$result = mysqli_query($connect,$sql);
?>
<div class="container text-center">
    <div class="col-sm-12 text-center">
        <h1>研究計畫</h1>
        <hr>
        <?php   while ($row = mysqli_fetch_array($result,MYSQLI_BOTH)) {
            echo '<ul><br>';
            echo '<li style="display: inline">' . $row[1] . '</li>';?>

            <?php $pi="SELECT * FROM `project` WHERE id=$row[0]";
            $res = mysqli_query($connect,$pi);
            $col = mysqli_fetch_array($res); ?>
            <form method="post" action="editproject.php" style="margin: 0; padding: 0;display: inline">
                <input style="display: inline;"type="submit" value="修改" />
                <input style="display: inline;"name="pi" type="hidden" value="<?php echo $col[0] ?>" />
            </form>
            <form method="post" action="delproject.php" style="margin: 0; padding: 0;display: inline">
                <input style="display: inline;"type="submit" value="刪除" />
                <input style="display: inline;"name="pi" type="hidden" value="<?php echo $col[0] ?>" />
            </form>
            <?php
            echo '<li><span style="font-size: large;color: blueviolet">計畫名稱:</span>' . $row[2] . '</li>';
            if($row[3]!=null){
            echo '<li><span style="font-size: large;color: blueviolet">學生:</span>' . $row[3] . '</li>';
            }
            echo '<li><span style="font-size: large;color: blueviolet">計畫編號:</span>' . $row[4] . '</li>';
            echo '<li><span style="font-size: large;color: blueviolet">計畫執行起迄:</span>' . $row[5] . '~' . $row[6] . '</li>';
            if($row[7]!=null){
                echo '<li><span style="font-size: large;color: blueviolet">核定金額:</span>' . $row[7] . ' NT</li>';
            }
            echo '<li><span style="font-size: large;color: blueviolet">擔任職務：</span>' . $row[8] . '</li>';
            echo '</ul><br>';
        }
        ?>
        <form method="post" action="wproject.php" style="margin: 0; padding: 0;">
            <input style="display: inline; width: 750px;height: 35px"type="submit" value="新增" />
        </form>
    </div>
</div>

<footer class="container text-center">
    <p>地址：41354 台中市霧峰區柳豐路500號<br/>
        電話：04-2332-3456 ext:1847<br/>
        FAX :  04-2332-5737<br/>
        E-mail: jdwang@asia.edu.tw<br/>
        網頁：http://dns2.asia.edu.tw/~jdwang
    </p>
    <hr color="#fb00cc" width="80%" size="8px">
    Wufeng Division, Taichung<br/>
    Taiwan 41354.<br/>
    Tel: 886-4-2332-3456 ext. 1847<br/>
    Fax: 886-4-2330-5737<br/>
    E-mail:  jdwang@asia.edu.tw<br/>
    Web:http://dns2.asia.edu.tw/~jdwang
</footer>

<div class="container" style="padding: 0"><nav class="navbar navbar-inverse"></nav></div>

</body>
</html>
