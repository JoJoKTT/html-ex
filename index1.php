<!DOCTYPE html>
<html lang="en">
<?php

include("db_con_inc.php");
session_start();

if($_SESSION['email'] == null)
{    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
    exit();
}

?>
<head>
    <title>首頁</title>
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
                <li class="active"><a href="index.html">首頁</a></li>
                <li><a href="resume.html">簡歷</a></li>
                <li><a href="subject.html">學術</a></li>
                <li><a href="book.html">著作</a></li>
                <li><a href="student.html">學生</a></li>
                <li><a href="link.html">常用連結</a></li>
                <li><a href="reference.html">參考期刊</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"> Logout</a></li>
                <li><a href="member.php">個資</a></li>
            </ul>
        </div>
    </nav>
</div>

<div class="container-fluid text-center">
    <div class="container">
        <div class="col-sm-9 text-center">
            <h1>王經篤</h1>
            <h2>亞洲大學</h2>
            <h3>資訊工程系</h3>
            <h4>副教授</h4>
        </div>
        <div class="col-sm-3 text-center">
            <img src="910100540_jdwang_2011_12_7.jpg" width="150px" height="200px">
        </div>
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
