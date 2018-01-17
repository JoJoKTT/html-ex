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
    <title>學生</title>
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
                <li><a href="project.php">研究計畫</a></li>
                <li><a href="teach.php">教授課程</a></li>
                <li><a href="resume.php">簡歷</a></li>
                <li><a href="subject.php">學術</a></li>
                <li><a href="book.php">著作</a></li>
                <li class="active"><a href="student.php">學生</a></li>
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
$sql = "SELECT * FROM `student`";
$result = mysqli_query($connect,$sql);
?>
<div class="container text-center">
    <div class="col-sm-12 text-center">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <tr>
                    <td width="7%">學年度</td>
                    <td width="13%">系所</td>
                    <td width="10%">姓名</td>
                    <td width="35%">論文題目</td>
                    <td width="25%">備註</td>
                    <td width="10%">修改、刪除</td>
                </tr>
                <?php $pi="SELECT * FROM `student` WHERE id=$row[0]";
                $res = mysqli_query($connect,$pi);
                $col = mysqli_fetch_array($res); ?>
                    <?php   while ($row = mysqli_fetch_array($result,MYSQLI_BOTH)) {
                        echo '<tr>';
                        echo '<td width="7%">' . $row[1] . '</td>';
                        echo '<td width="13%">' . $row[2] . '</td>';
                        echo '<td width="10%">' . $row[3] . '</td>';
                        echo '<td width="35%">' . $row[4] . '</td>';
                        echo '<td width="25%">' . $row[5] . '</td>';
                        echo '<td width="10%">
                        <form method="post" action="editstudent.php" style="margin: 0; padding: 0;display: inline">
                            <input style="display: inline;"type="submit" value="修改" />
                            <input style="display: inline;"name="pi" type="hidden" value="<?php echo $col[0] ?>" />
                        </form>
                        <form method="post" action="delstudent.php" style="margin: 0; padding: 0;display: inline">
                            <input style="display: inline;"type="submit" value="刪除" />
                            <input style="display: inline;"name="pi" type="hidden" value="<?php echo $col[0] ?>" />
                        </form>
                        </td>';
                        echo '</tr>';
                    }?>
            </table>
            <form method="post" action="wstudent.php" style="margin: 0; padding: 0;">
                <input style="display: inline; width: 750px;height: 35px"type="submit" value="新增" />
            </form>
        </div>
        <hr>
        <ul style="list-style: disc;text-align: left">
            <li>3D影像軌跡追蹤與預測系統(Java)</li>
            <li><a href="http://asia.edu.tw/~jdwang/StudentProjects/LinearClassifierSystem.htm" target="_blank">線性分類器系統開發(Java)</a></li>
            <li>網路流行話語擷取系統(Java)-『丁丁』是一個人才！？</li>
            <li><a href="http://dns2.asia.edu.tw/~jdwang/StudentProjects/ProjectDevelop.htm" target="_blank">專案開發</a></li>
            <li style="list-style: none"><a href="http://dns2.asia.edu.tw/~jdwang/TeachingCourses/PaperStudy.htm" target="_blank">PaperStudy</a></li>
            <li style="list-style: none"><a href="http://dns2.asia.edu.tw/~jdwang/ThesisWriting.htm" target="_blank">Thesis or Report</a></li>
            <ul style="list-style: circle">
                <li><a href="http://www.cs.nthu.edu.tw/~cherung/teaching/2009cs5321/link/latex.pdf" target="_blank">Latex教學</a></li>
                <li>some useful LaTeX related resources:</li>
                <ul style="list-style: square">
                    <li>Online Resources - <a href="http://www.tug.org/interest.html" target="_blank"></a>http://www.tug.org/interest.html</li>
                    <li>Online LaTeX editor - <a href="http://www.scribtex.com/" target="_blank">http://www.scribtex.com/</a></li>
                </ul>
            </ul>
        </ul>
    </div>
</div>

<footer class="container text-center">
    <p>地址：41354 台中市霧峰區柳豐路500號<br/>
        電話：04-2332-3456 ext:1847<br/>
        FAX : 04-2332-5737<br/>
        E-mail: jdwang@asia.edu.tw<br/>
        網頁：http://dns2.asia.edu.tw/~jdwang
    </p>
    <hr color="#fb00cc" width="80%" size="8px">
    Wufeng Division, Taichung<br/>
    Taiwan 41354.<br/>
    Tel: 886-4-2332-3456 ext. 1847<br/>
    Fax: 886-4-2330-5737<br/>
    E-mail: jdwang@asia.edu.tw<br/>
    Web:http://dns2.asia.edu.tw/~jdwang
</footer>

<div class="container" style="padding: 0">
    <nav class="navbar navbar-inverse"></nav>
</div>

</body>
</html>