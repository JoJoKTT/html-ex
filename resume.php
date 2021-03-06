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
    <title>簡歷</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/table.css" charset="UTF-8">
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
                <li class="active"><a href="resume.php">簡歷</a></li>
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

<div class="container text-center">
    <div class="col-sm-12 text-center">

        <nav class="nav nav-pills">
            <div class="container-fluid">
                <div class="navbar-header">
                </div>
                <ul class="nav navbar-nav nav-pills" type="square">
                    <li class="active"><a data-toggle="tab" href="#home">學歷</a></li>
                    <li><a data-toggle="tab" href="#menu1">經歷</a></li>
                    <li><a data-toggle="tab" href="#menu2">教學</a></li>
                    <li><a data-toggle="tab" href="#menu3">參加團體</a></li>
                    <li><a data-toggle="tab" href="#menu4">專題演講</a></li>
                    <li><a data-toggle="tab" href="#menu5">榮譽</a></li>
                    <li><a data-toggle="tab" href="#menu6">證照</a></li>
                    <li><a data-toggle="tab" href="#menu7">專利</a></li>
                    <li><a data-toggle="tab" href="#menu8">服務</a></li>
                    <li><a data-toggle="tab" href="#menu9">輔導</a></li>
                </ul>
            </div>
        </nav>
        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <h3>學歷</h3>
                <ul>
                    <li>沙鹿國小 (1972.9-1978.6)</li>
                    <li>沙鹿國中 (1978.9-1981.6)</li>
                    <li>台中一中 (1981.9-1984.6)</li>
                    <li>大同工學院資訊工程系   (1985.9-1989.6)</li>
                    <li>中正大學資訊工程所 碩士(1991.9-1993.6)</li>
                    <li>中正大學資訊工程所 博士(1993.9-2002.6)</li>
                </ul>
            </div>
            <div id="menu1" class="tab-pane fade">
                <h3>經歷</h3>
                <ul>
                    <li>1988.5  -1989.5  大同公司 網路組工讀</li>
                    <li>1989.7  -1991.5  預官第39期步兵排長 (陸軍步校（受訓）)(陸軍官校（資訊中心少尉教官）)</li>
                    <li>1997.2  -1997.5  第28屆全國大專運動會資訊組 測試規劃負責人</li>
                    <li>1999.12 -2000.4  網路資料庫、程式設計班講師(青輔會委託中正大學辦理，共三梯次)</li>
                    2002.8  -2003.1  澎湖技術學院 電算中心 系統作業與支援組 組長</li>
                </ul>
            </div>
            <div id="menu2" class="tab-pane fade">
                <h3>教學</h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <td>專任副教授</td>
                            <td>亞洲大學</td>
                            <td>2014.8 - 至今</td>
                            <td>null</td>
                        </tr>
                        <tr>
                            <td>專任助理教授</td>
                            <td>亞洲大學</td>
                            <td>2005.8 - 2014.7</td>
                            <td>18學期</td>
                        </tr>
                        <tr>
                            <td>專任助理教授</td>
                            <td>臺中健康暨管理學院</td>
                            <td>2003.2.1 - 2005.7</td>
                            <td>5 學期</td>
                        </tr>
                        <tr>
                            <td>專任講師</td>
                            <td>澎湖技術學院</td>
                            <td>2000.8.1 -  2003.1.31</td>
                            <td>5 學期</td>
                        </tr>
                        <tr>
                            <td rowspan="5">專任講師</td>
                            <td>中正大學</td>
                            <td>1995.8.1 - 1997.1.31<br>1997.8.1 - 1998.1.31<br>1998.8.1 - 2001.1.31</td>
                            <td>9 學期</td>
                        </tr>
                        <tr>
                            <td>中國醫藥學院</td>
                            <td>1997.9 - 1999.7 </td>
                            <td>4 學期</td>
                        </tr>
                        <tr>
                            <td>協志高職</td>
                            <td>1996.9 - 1998.2 </td>
                            <td>3 學期</td>
                        </tr>
                        <tr>
                            <td>勤益工專</td>
                            <td>1996.8.1 - 1997.1.31<br>1997.8.1 - 1998.1.31 </td>
                            <td>2 學期</td>
                        </tr>
                        <tr>
                            <td>台灣體育學院</td>
                            <td>1998.8.1 - 1999.1.31</td>
                            <td>3 學期</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="menu3" class="tab-pane fade">
                <h3>參加團體</h3>
                <p>Some content in menu 2.</p>
            </div>
            <div id="menu4" class="tab-pane fade">
                <h3>專題演講</h3>
                <p>Some content in menu 2.</p>
            </div>
            <div id="menu5" class="tab-pane fade">
                <h3>榮譽</h3>
                <p>Some content in menu 2.</p>
            </div>
            <div id="menu6" class="tab-pane fade">
                <h3>證照</h3>
                <p>Some content in menu 2.</p>
            </div>
            <div id="menu7" class="tab-pane fade">
                <h3>專利</h3>
                <p>Some content in menu 2.</p>
            </div>
            <div id="menu8" class="tab-pane fade">
                <h3>服務</h3>
                <p>Some content in menu 2.</p>
            </div>
            <div id="menu9" class="tab-pane fade">
                <h3>輔導</h3>
                <p>Some content in menu 2.</p>
            </div>
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