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
    <title>著作</title>
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
                <li class="active"><a href="book.php">著作</a></li>
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
$sql = "SELECT * FROM `book`";
$result = mysqli_query($connect,$sql);
?>
<div class="container text-center">
    <div class="col-sm-12 text-center">

        <nav class="nav nav-pills">
            <div class="container-fluid">
                <div class="navbar-header">
                </div>
                <ul class="nav navbar-nav nav-pills" type="square">
                    <li class="active"><a data-toggle="tab" href="#home">Journal</a></li>
                    <li><a data-toggle="tab" href="#menu1">International Conference</a></li>
                    <li><a data-toggle="tab" href="#menu2">Domestic Conference</a></li>
                    <li><a data-toggle="tab" href="#menu3">Book</a></li>
                    <li><a data-toggle="tab" href="#menu4">碩博士論文</a></li>
                    <li><a data-toggle="tab" href="#menu5">其他</a></li>
                </ul>
            </div>
        </nav>
        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <?php $pi="SELECT * FROM `book` WHERE id=$row[0]";
                $res = mysqli_query($connect,$pi);
                $col = mysqli_fetch_array($res); ?>
                <?php   while ($row = mysqli_fetch_array($result,MYSQLI_BOTH)) {
                    echo '<ul style="list-style: decimal;text-align: left">';
                    echo '<li>'.$row[1].'<br>'.$row[2].'<br>'.$row[3].','.$row[4].'doi: '.$row[5].' , '.$row[6]
                    .' , '.$row[7].' , '.$row[8].' ,  '.$row[9];?>
                    <form method="post" action="editbook.php" style="margin: 0; padding: 0;display: inline">
    <input style="display: inline;"type="submit" value="修改" />
    <input style="display: inline;"name="pi" type="hidden" value="<?php echo $col[0] ?>" />
</form>
<form method="post" action="delbook.php" style="margin: 0; padding: 0;display: inline">
    <input style="display: inline;"type="submit" value="刪除" />
    <input style="display: inline;"name="pi" type="hidden" value="<?php echo $col[0] ?>" />
</form>
               <?php }?>

                <form method="post" action="wbook.php" style="margin: 0; padding: 0;">
                    <input style="display: inline; width: 750px;height: 35px"type="submit" value="新增" />
                </form>

                <ul style="list-style: decimal;text-align: left">
                    <li><a href="http://www.mdpi.com/2076-3417/7/9/878" target="_blank">A Novel Approach to Extract
                        Significant Time Interval Patterns of Vehicles from Freeway Gantry Timestamp Sequences</a><br>
                        <span style="font-weight: bold">Jing-Doo Wang</span> and Ming-Chorng Hwang<br>
                        Applied Sciences, 2017, 7(9), 878; doi:10.3390/app7090878. (SCIE, IF=1.679)<br>
                        <a href="http://www.mdpi.com/journal/applsci/special_issues/IEEE_ICASI_2017" target="_blank">(Special
                            Issue "Selected Papers from IEEE ICASI 2017")</a></li>
                    <br>
                    <li>
                        <a href="http://link.springer.com/article/10.1007/s11227-016-1713-z?wt_mc=internal.event.1.SEM.ArticleAuthorOnlineFirst"
                           target="_blank">Extracting Significant Pattern Histories from Timestamped Texts using
                            MapReduce</a><br>
                        <span style="font-weight: bold">Jing-Doo Wang</span><br>
                        <a href="http://www.springer.com/computer/swe/journal/11227" target="_blank">Journal of
                            Supercomputing</a>, 72(8), pp. 3236-3260, DOI 10.1007/s11227-016-1713-z,, April 2016<br>
                        (SCI, SCIE 2014 JCR ,IF=0.858,RANK=56/102, COMPUTER SCIENCE, THEORY & METHODS)
                    </li>
                    <br>
                    <li>Shape Query for Pattern History in PubMed Literatures via Haar Wavelet<br>
                        <span style="font-weight: bold">Jing-Doo Wang</span>, Zhong-Kai Jiang,Jui-Chi Chen<br>
                        International Journal of Advanced Information Technologies(IJAIT), Vol. 9 ;No. 6. pp. 67-76,
                        December 2015.
                    </li>
                    <br>
                    <li>Combination Therapy Using Chelating Agent and Zinc for Wilson’s Disease.<br>
                        Jui-Chi Chen, Cheng-Hung Chuang, <span style="font-weight: bold">Jing-Doo Wang</span>, Chi-Wei
                        Wang,<br>
                        Journal of Medical and Biological Engineering (JMBE), vol. 35, no. 6, pp. 697-708, December
                        2015. (SCI, EI; ISSN: 1609-0985)
                    </li>
                    <br>
                    <li>A Novel BLAST-Based Relative Distance (BBRD) Method Can Effectively Group Members ofProtein
                        ArginineMethyltransferases and Suggest their Evolutionary Relationship.<br>
                        Yi-Chun Wang†,*, <span style="font-weight: bold">Jing-Doo Wang †</span>, Chin-Han Chen, Yi-Wen
                        Chen, Chuan Li *<br>
                        (†Co-first author, *Co-corresponding author),<br>
                        <a href="http://www.journals.elsevier.com/molecular-phylogenetics-and-evolution/"
                           target="_blank">Molecular Phylogenetics and Evolution</a>(201JCR, IF=4.018,
                        Rank=13/46,EVOLUTIONARY BIOLOGY)
                    </li>
                    <br>
                    <li>Mining for Representative Regions of Virus Genuses via Protein Sequences Clustering<br>
                        <span style="font-weight: bold">Jing-Doo Wang</span> and Yi-Chun Wang<br>
                        <a href="http://www.inderscience.com/browse/index.php?journalCODE=ijdmb" target="_blank">International
                            Journal of Data Mining and Bioinformatics</a> , Vol. 9, No. 3, (2013 JCR, IF=0.655,
                        Rank=48/65,MATHEMATICAL, COMPUTATIONAL BIOLOGY )
                    </li>
                    <br>
                    <li>Comparing Virus Classification using Genomic Materials according to Different Taxonomic
                        Levels<br>
                        <span style="font-weight: bold">Jing-Doo Wang</span><br>
                        <a>Journal of Bioinformatics and Computational Biology</a>, Vol. 11, No. 6, 1343003, November
                        2013 aspecial issue on GIW2013(SCIE(2013 JCR, IF=0.931, Rank=42/52,MATHEMATICAL; COMPUTATIONAL
                        BIOLOGY)
                    </li>
                    <br>
                    <li>An Approach to Evaluate the Fitness of One Class Structure via Dynamic Centroids<br>
                        <span style="font-weight: bold">Jing-Doo Wang</span> and Hsiang-Chuan Liu<br>
                        <a href="http://www.journals.elsevier.com/expert-systems-with-applications/#description"
                           target="_blank">Expert Systems with Applications</a> , October 2011, Vol.38, Issue 11, pp.
                        13764-13772.(SCI)(2011 JCR, IF=2.203, Rank=22/111,COMPUTER SCIENCE, ARTIFICIAL INTELLIGENCE)
                    </li>
                    <br>
                    <li>Evaluating the Ambiguities Between Two Classes via Euclidean Distance<br>
                        <span style="font-weight: bold">Jing-Doo Wang</span> and Hsiang-Chuan Liu<br>
                        Asian Journal of Health and Information Sciences, March 2009, Vol. 4, No. 1, pp. 21-35<br></li>
                    <li>Scaling behavior of Maximal Repeat Distributions in Genomic Sequences<br>
                        <span style="font-weight: bold">J.D. Wang</span>, Hsiang-Chuan Liu, Jeffrey J.P. Tsai and Ka-Lok
                        Ng.<br>
                        The International Journal of Cognitive Informatics and Natural Intelligence (IJCiNi) , 2008,
                        2(3), pages 31~42
                    </li>
                    <br>
                    <li>External memory approach to compute the maximal repeats across classes from DNA sequences<br>
                        <span style="font-weight: bold">Jing-Doo Wang</span>,<br>
                        Asian Journal of Health and Information Sciences, 2006, Vol. 1, Number 3, pages 276-295<br>
                        (A previous version of conference paper was published in NCS 2005)
                    </li>
                    <br>
                    <li>Improving Linear Classifier for Chinese Text Categorization<br>
                        Jyh-Jong Tsay and <span style="font-weight: bold">Jing-Doo Wang</span><br>
                        The Journal of Information Processing and Management(IP&M).(EI, SCI Expanded)<br>
                        Volume 40, Issue 2 , March 2004, pages 223-237
                    </li>
                    <br>
                    <li>Mining Periodic Events from Retrospective Chinese News<br>
                        <span style="font-weight: bold">Jing-Doo Wang</span> and Jyh-Jong Tsay<br>
                        International Journal of Computer Processing of Oriental Languages(CPOL)<br>
                        Vol. 15, No. 4 (December 2002) , pages 361-377<br>
                        Special Issue: Web and WAP Oriental Languages Multimedia Computing
                    </li>
                    <br>
                    <li>Design and Evaluation of Approaches for Automatic Chinese Text Categorization<br>
                        Jyh-Jong Tsay and <span style="font-weight: bold">Jing-Doo Wang</span><br>
                        International Journal of Computational Linguistics and Chinese Language Processing (CLCLP)<br>
                        Vol. 5, No. 2, August 2000, pages 43-58
                    </li>
                    <br>
                </ul>
            </div>
            <div id="menu1" class="tab-pane fade">
                <ul style="list-style: decimal;text-align: left">
                    <li>Extracting the Co-occurrences of DNA Maximal Repeats in both Human and Viruses<br>
                        <span style="font-weight: bold">Jing-Doo Wang</span>, Yi-Chun Wang and Rouh-Mei Hu and Jeffrey
                        Tsai<br>
                        <a href="http://bibe2017.com/index.html" target="_blank">The 17th IEEE International Conference
                            on BioInformatics and BioEngineering (BIBE 2017)</a>, pages 106-111, October 23 – 25, 2017.
                        Washington DC, U.S.A.
                    </li>
                    <br>
                    <li><a href="https://sciforum.net/conference/ICI2017/ICI-J" target="_blank">A Novel Approach to
                        Improve Quality Control by Comparing the Tagged Sequences of Product Traceability</a><br>
                        <span style="font-weight: bold">Jing-Doo Wang</span>,<br>
                        <a href="https://sciforum.net/conference/ICI2017" target="_blank">2017 The 3rd International
                            Conference on Inventions, 29 September–2 October 2017, Sun Moon Lake, Taiwan</a></li>
                    <br>
                    <li><a href="http://ieeexplore.ieee.org/document/7988259/" target="_blank">A Novel Approach to
                        Extract Significant Time Intervals of Vehicles from Superhighway Gantry Timestamp
                        Sequences</a><br>
                        <span style="font-weight: bold">Jing-Doo Wang</span>, and Ming-Chorng Hwang,<br>
                        <a href="http://2017.icasi.asia/site/page.aspx?pid=901&sid=1140&lang=en" target="_blank">2017
                            IEEE International Conference on Applied System Innovation (IEEE ICASI 2017)</a> May 13-17,
                        2017,Hotel emisia, Sapporo, Japan (<a
                                href="http://dns2.asia.edu.tw/~jdwang/IEEE_ICASI_2017_FirstPrizePaperAward_0301.pdf"
                                target="_blank">First Prize Paper Award</a>) (Extended version submitted to <a
                                href="http://www.mdpi.com/journal/applsci" target="_blank">Applied Sciences as a Special
                            Issue "Selected Papers from IEEE ICASI 2017</a>")
                    </li>
                    <br>
                    <li>Genome-wide Functional Identification of Maximal Consensus Patterns Derived from Multiple
                        Species piRNAs<br>
                        Wen-Ling Chan, Mei-Chun Yeh, <span style="font-weight: bold">Jing-Doo Wang</span>, , Jan-Gowth
                        Chang and Jeffrey Tsai<br>
                        <a href="http://bibe2016.asia.edu.tw/" target="_blank">The 16th annual IEEE International
                            Conference on Bioinformatics and Bioengineering(BIBE2016)</a>, October 31 November 1, 2016,
                        Taichung, Taiwan.
                    </li>
                    <br>
                    <li>Mining Distinctive DNA Patterns from the Upstream of Human Coding\&Non-Coding Genes via Class
                        Frequency Distribution<br>
                        <span style="font-weight: bold">Jing-Doo Wang</span>, Wen-Ling Chan, Charles C.N. Wang,
                        Jan-Gowth Chang, Jeffrey J.P. Tsai<br>
                        <a href="http://cibcb2016.org/" target="_blank">2016 IEEE Conference on Computational
                            Intelligence in Bioinformatics and Computational Biology(CIBCB 2016)</a>, 5th to 7th October
                        2016, Chiang Mai, Thailand.
                    </li>
                    <br>
                    <li>A Study of Comparing the Ambiguity of Existing Virus Taxonomy Structures Using Protein's Region
                        Names in the Vector Space Model<br>
                        <span style="font-weight: bold">Jing-Doo Wang</span><br>
                        <a href="http://cibcb2015.cosc.brocku.ca/" target="_blank">2015 IEEE Conference on Computational
                            Intelligence in Bioinformatics and Computational Biology(CIBCB 2015)</a> , C-15004, August
                        12-15, 2015, Niagara Falls, Canada
                    </li>
                    <br>
                    <li>Extracting Retrospective Patterns from Time-Stamped Texts According To Variable Query Time
                        Interval<br>
                        <span style="font-weight: bold">Jing-Doo Wang</span> and Wijayanto Heri*, (*Corresponding
                        author)<br>
                        <a href="http://imeti.org/" target="_blank">The International Multi-Conference on Engineering
                            and Technology Innovation 2015 (IMETI2015)</a>October 30 - November 3, 2015,
                        Kaohsiung,Taiwan.
                    </li>
                    <br>
                    <li>Comparing Virus Classification using Genomic Materials according to Different Taxonomic
                        Levels<br>
                        <span style="font-weight: bold">Jing-Doo Wang</span><br>
                        <a href="http://www.comp.nus.edu.sg/~giw2013/" target="_blank">The 24rd International Conference
                            on Genome Informatics (GIW 2013)</a>, December 16-18, 2013, Singapore<br>
                        (This paper is included as a special issue of <a
                                href="http://www.worldscientific.com/worldscinet/jbcb" target="_blank">Journal of
                            Bioinformatics and Computational Biology</a>, Vol. 11, No. 6 1343003, 2013.a specialissue on
                        GIW2013 (SCIE)(2013)
                    </li>
                    <br>
                    <li>(Poster) Virus Classification via Genomic Sequences From Different Taxonomic Level<br>
                        <span style="font-weight: bold">Jing-Doo Wang</span><br>
                        <a href="http://conf.ncku.edu.tw/giw2012/index.php/submission" target="_blank">The 23rd
                            International Conference on Genome Informatics (GIW 2012)</a>,page 76, December 12-14,
                        2012,National Cheng Kung University,Tainan in Taiwan
                    </li>
                    <br>
                    <li>(Poster) A Comparison study of Virus Classification by Genome Sequences<br>
                        <span style="font-weight: bold">Jing-Doo Wang</span><br>
                        <a href="http://bibe2011.asia.edu.tw/index.htm" target="_blank">The 11th IEEE International
                            Conference on Bioinformatics and Bioengineering</a>,pages 270-273, 24-26 October 2011,
                        Taichung, Taiwan.
                    </li>
                    <br>
                    <li>A Novel Approach to Compute Pattern History for Trend Analysis.<br>
                        <span style="font-weight: bold">Jing-Doo Wang</span><br>
                        <a href="http://icnc-fskd.dhu.edu.cn/Submission.htm" target="_blank">The 8th International
                            Conference on Fuzzy Systems and Knowledge Discovery</a>,, pages 1796-1800<br>
                        26-28 July 2011, Shanghai, China. (EI)
                    </li>
                    <br>
                    <li>Evaluating the Ambiguity of Class Structures via Instance Neighbor Entropy with Weighting.<br>
                        <span style="font-weight: bold">Jing-Doo Wang</span> and Yao-Chug Shi (施耀竣)<br>
                        <a href="http://fc2010.cs.pu.edu.tw/index.html" target="_blank">The IET International Conference
                            on Frontier Computing – Theory, Technologies and Applications</a>, pages 84B2-4, Taiwan,
                        August 4-6, 2010
                    </li>
                    <br>
                    <li>Evaluating the Ambiguity of Class Structure using Dynamic Centroids<br>
                        <span style="font-weight: bold">Jing-Doo Wang</span> and Hsiang-Chuan Liu<br>
                        <a href="http://cacs2009.ntut.edu.tw/" target="_blank">2009 CACS International Automatic Control
                            Conference</a>,page 87, Nov27-29, 2009,Taipei, Taiwan.
                    </li>
                    <br>
                    <li>A Novel Approach for Evaluating Class Structure Ambiguity<br>
                        <span style="font-weight: bold">Jing-Doo Wang</span>, Hsiang-Chuan Liu, Yao-Chug Shi<br>
                        <a href="http://www.icmlc.com/icmlc_welcome.htm" target="_blank">the International Conference on
                            Machine Learning and Cybernetics (ICMLC)</a> , pages1550-1555 , July 12-15, 2009.(EI)
                    </li>
                    <br>
                    <li>Evaluating the Ambiguities of Class Structure via Euclidean Distance<br>
                        <span style="font-weight: bold">Jing-Doo Wang</span>.<br>
                        2008 International Computer Symposium (ICS2008), 13-15 Nov, Taiwan, R.O.C, Vol. 2, pages 293-298
                    </li>
                    <br>
                    <li>(Poster) SCALING BEHAVIOR OF MAXIMAL REPEAT DISTRIBUTIONS IN GENOME SEQUENCES<br>
                        <span style="font-weight: bold">Jing-Doo Wang</span>, Shing-Chuan Liu and Ng Ka-Lok.<br>
                        The 4th Asia-Pacific Bioinformatics Conference (APBC2006) ,13-16 Feb, 2006.
                    </li>
                    <br>
                    <li>Evaluating the Correlation Between Two Events From Retrospective Chinese News,<br>
                        <span style="font-weight: bold">Jing-Doo Wang</span> and Jyh-Jong Tsay<br>
                        International Conference on Chinese Language Computing(ICCLC2002). 2002, pages 1-7
                    </li>
                    <br>
                    <li>Mining Periodic Events from the Chinese News<br>
                        <span style="font-weight: bold">Jing-Doo Wang</span> and Jyh-Jong Tsay<br>
                        International Conference on Chinese Computing, 2001(ICCC2001),pages 255-260,Singapore.
                    </li>
                    <br>
                    <li>A Scalable Approach for Chinese Term Extraction<br>
                        Jyh-Jong Tsay and <span style="font-weight: bold">Jing-Doo Wang</span><br>
                        2000 International Computer Symposium (ICS2000), Taiwan, R.O.C, pages 246-253
                    </li>
                    <br>
                    <li>Improving Linear Classifier for Chinese Text Categorization By ErrorCorrection<br>
                        Jyh-Jong Tsay and <span style="font-weight: bold">Jing-Doo Wang</span><br>
                        The Fifth International Workshop on Information Retrieval with Asian Languages(IRAL2000)
                        pages1--8, HongKong
                    </li>
                    <br>
                    <li>Implementation and Evaluation of Scalable Approaches for Automatic ChineseText
                        Categorization<br>
                        Jyh-Jong Tsay , <span style="font-weight: bold">Jing-Doo Wang</span> , Chun-Fu Pai and Ming-Kuen
                        Tsay<br>
                        The 13th Pacific Asia Conference on Language, Information and Computation, pages 179-190,1999
                    </li>
                    <br>
                </ul>
            </div>
            <div id="menu2" class="tab-pane fade">
                <ul style="list-style: decimal;text-align: left">
                    <li>提升Hadoop MapReduce計算效能之研究-以抽取樣式歷史為例<br>
                        陳彥棠、<span style="font-weight: bold">王經篤</span><br>
                        <a href="https://sites.google.com/site/nssse2015test/zheng-qiu-lun-wen" target="_blank">2015中華民國系統科學與工程研討會</a>，2015年
                        7 月17-19日,大同大學
                    </li>
                    <br>
                    <li>樣式歷史資料之形狀查詢-藉由Haar小波<br>
                        <span style="font-weight: bold">王經篤</span>、蔣中凱、陳瑞奇<br>
                        <a href="http://ait.inf.cyut.edu.tw/" target="_blank">2015年資訊科技國際研討會暨民生電子論壇 The 9th
                            International Conference on Advanced Information Technologies / Consumer Electronics Forum
                            (AIT/CEF 2015)</a>, 2015年 4 月24、25 日,朝陽科技大學, pages 1239-1254
                    </li>
                    <br>
                    <li>社群網站使用者上線時段分析-以批踢踢為例<br>
                        郭佳霖、<span style="font-weight: bold">王經篤</span>,<br>
                        2014 數位科技與創新管理研討會,2014年6月14日,華梵大學
                    </li>
                    <br>
                    <li>利用Hadoop建立文件樣式歷史資料索引之實作<br>
                        <span style="font-weight: bold">王經篤</span>、吳健瑋<br>
                        2014年第四屆網路智能與應用研討會,2014年 5 月 2、3 日,國立澎湖科技大學
                    </li>
                    <br>
                    <li>(Poster)A Novel Approach to Evaluate the Relative Distance of Proteins via Pearson correlation
                        coefficient<br>
                        Chin-Han Chen, Yi-Chun Wang and <span style="font-weight: bold">Jing Doo Wang</span>.<br>
                        <a href="http://conference.ym.edu.tw/actnews/?Sn=75" target="_blank">第10屆台灣生物資訊與系統生物學研討會(BIT2012)</a>,
                        October 19-21, 2012,國立陽明 大學, pages 55-56
                    </li>
                    <br>
                    <li>A Study of Virus Classification via Genomic DNA Sequences<br>
                        <span style="font-weight: bold">Jing-Doo Wang</span> and Jig-Fu Huang(黃進福)<br>
                        <a href="http://itaoi2011.nttu.edu.tw/index.php" target="_blank">第十屆離島資訊技術與應用研討會(ITAOI2011)</a>,
                        2011 年 5 月 13、14 日,國立臺東大學, page 44
                    </li>
                    <br>
                    <li>A Study of Virus Classification via Coding Sequence (CDS)<br>
                        <span style="font-weight: bold">Jing-Doo Wang</span> and Yong-Kai Lu(盧勇凱)<br>
                        <a href="http://ncwia2011.nuk.edu.tw/" target="_blank">第一屆網路智能與應用研討會(NCWIA2011)</a>,
                        2011年4月29日,國立高雄大學, page 88
                    </li>
                    <br>
                    <li>(Poster) Text Trend Analysis via Significant Term History - A study based on Indonesia News<br>
                        <span style="font-weight: bold">Jing-Doo Wang</span> and Arie Budiansyah<br>
                        Student Symposium in Computer Science and Information Management, Taichung, Taiwan, August
                        4-6,2010.
                    </li>
                    <br>
                    <li>(Poster)關鍵字之趨勢研究-藉由PubMed文獻<br>
                        <span style="font-weight: bold">王經篤</span>、廖益緯<br>
                        Student Symposium in Computer Science and Information Management, Taichung, Taiwan, August
                        4-6,2010.
                    </li>
                    <br>
                    <li>中華民國專利趨勢研究-藉由顯要事件歷史<br>
                        <span style="font-weight: bold">王經篤</span>、劉宣榮<br>
                        2010數位內容與傳播應用學術研討會,pages 29-35,民國99年5月25日,醒吾技術學院
                    </li>
                    <br>
                    <li>Evaluating the Ambiguity of Non-Linear Separable Class Structure via Instance Neighbor
                        Entropy<br>
                        <span style="font-weight: bold">Jing-Doo Wang</span> and Yao-Chug Shi(施耀竣)<br>
                        <a href="http://oota2009.csie.thu.edu.tw/" target="_blank">第二十屆物件導向技術及應用研討會</a>,page 54,Nov
                        20,2009 ,東海大學
                    </li>
                    <br>
                    <li>中西藥交互作用知識管理資訊系統架構之研究－利用資料探勘技術建置<br>
                        賴建龍、李明明、林聖興、<span style="font-weight: bold">王經篤</span><br>
                        2008全球服務科學管理理論與實務學術研討,Oct 17, 2008,國立彰化師範大學
                    </li>
                    <br>
                    <li>中文新聞相關性事件之挖掘-藉由Haar小波轉換<br>
                        <span style="font-weight: bold">王經篤</span>、楊季剛、廖益緯<br>
                        Proceeding of National Computer Symposium 2007(NCS2007), Taiwan, R.O.C.
                    </li>
                    <br>
                    <li>基因轉殖作物外來基因 BLAST 資料庫之建立<br>
                        王昭能、施仁國、<span style="font-weight: bold">王經篤</span>、葉錫東、范宗宸<br>
                        Proceeding of National Computer Symposium 2007(NCS2007), Taiwan, R.O.C.
                    </li>
                    <br>
                    <li>(Poster)A Genomic Study of Archaea regarding Oxygen Demand<br>
                        古菌相關於氧氣需求的基因體研究<br>
                        <span style="font-weight: bold">王經篤</span>、胡若梅、張文褔、鄒佳芳<br>
                        The 23st Workshop on Combinatorial Mathematics and Computational Theory<br>
                        第二十四屆組合數學與計算理論研討會, April 27~ 28, 2007
                    </li>
                    <br>
                    <li>An External Memory Approach to Compute the Statistics of Maximal Repeats from Whole Genome
                        Sequences<br>
                        <span style="font-weight: bold">Jing-Doo Wang</span><br>
                        Proceeding of National Computer Symposium 2005 (NCS2005), page 84, Taiwan, R.O.C.
                    </li>
                    <br>
                    <li>DNA Sequences Classification via Representative Patterns<br>
                        <span style="font-weight: bold">Jing-Doo Wang</span>,<br>
                        The 7th Conference on Chinese Medicine and Pharmacy, Engineering Technology and Applications to
                        Chinese and Western Medicine.<br>
                        第七屆工程科技與中西醫藥應用研討會,page 16, June 2004
                    </li>
                    <br>
                    <li>A Case Study of Predicting the Class of the Unknown Viruses of ssRNA positive-strand in NCBI<br>
                        <span style="font-weight: bold">Jing-Doo Wang</span>,<br>
                        The 21st Workshop on Combinatorial Mathematics and Computational Theory<br>
                        第二十一屆組合數學與計算理論研討會, pages 249-256, May 2004,
                    </li>
                    <br>
                    <li>Jyh-Jong Tsay, Yuan-Gu Wei, <span style="font-weight: bold">Jing-Doo Wang</span>,<br>
                        Proceeding of National Computer Symposium 2003(NCS2003),pages 369-376, Taiwan, R.O.C.
                    </li>
                    <br>
                    <li>有效中藥網路自動化搜尋資料庫<br>
                        李明明, 林志敏, <span style="font-weight: bold">王經篤</span>, 林英傑, 黃偉鳴,<br>
                        Proceedings of 第六屆工程科技與中西醫學應用研討會, pp. 254-258, Sep 2003, 臺中, 台灣.
                    </li>
                    <br>
                    <li>網際網路遠端監控- 水族箱管理<br>
                        <span style="font-weight: bold">王經篤</span>、何昱澄、劉彥良、陳宇作<br>
                        第三屆離島資訊技術與應用研討會, 2003, pages 278-283.
                    </li>
                    <br>
                    <li>Improving Linear Classifier for Chinese Text Categorization<br>
                        Jyh-Jong Tsay and <span style="font-weight: bold">Jing-Doo Wang</span><br>
                        Proceeding of National Computer Symposium 2001(NCS2001), pages B178-B188, Taiwan, R.O.C.
                    </li>
                    <br>
                    <li>Comparing Classifiers for Automatic Chinese Text Categorization<br>
                        Jyh-Jong Tsay and <span style="font-weight: bold">Jing-Doo Wang</span><br>
                        Proceeding of National Computer Symposium 1999(NCS'99),pages B-274--B-281, Taiwan, R.O.C.
                    </li>
                    <br>
                    <li>Term Selection with Distributional Clustering for Chinese Text Classification using N-grams<br>
                        Jyh-Jong Tsay and <span style="font-weight: bold">Jing-Doo Wang</span><br>
                        ROCLING 1999, pages 151-170,1999.
                    </li>
                    <br>
                    <li>(Master) Scalable Parallel Algorithm for All-Nearest-Neighbors Problems<br>
                        Jyh-Jong Tsay and <span style="font-weight: bold">Jing-Doo Wang</span><br>
                        Proceeding of National Computer Symposium 1993(NCS'93), R.O.C. V.2. pages 955-962
                    </li>
                    <br>
                </ul>
            </div>
            <div id="menu3" class="tab-pane fade">
                <ul style="list-style: circle;text-align: left">
                    <li>Book Title: Discoveries and Breakthroughs in Cognitive Informatics and Natural Intelligence</li>
                    <ul style="list-style: disc">
                        <li>Edited by: Yingxu Wang, University of Calgary, Canada</li>
                        <li>November 2009</li>
                        <li>ISBN: 978-1-60566-902-1</li>
                        <li>Chapter 28: Scaling Behavior of Maximal Repeat Distributions in Genomic Sequences --A
                            Randomize Test Follow Up Study
                        </li>
                        <br>
                        <li style="list-style: none"><span style="font-weight: bold">J.D. Wang</span> and Ka-Lok Ng</li>
                    </ul>
                    <li>(UnderConstruction) Book Title: "<a
                            href="https://www.intechopen.com/welcome/ebdf5cb36c49d7d0eaa38059c4434ee4/" target="_blank">Bioinformatics
                        in the Era of Post Genomics and Big Data</a>"
                    </li>
                    <ul style="list-style: disc">
                        <li>Edited by: Prof. Ibrokhim Abdurakhmonov</li>
                        <li>?</li>
                        <li>ISBN:?</li>
                        <li>(UnderWriting) <a href="https://www.intechopen.com/myprofile/index/dashboard"
                                              target="_blank">A novel approach to mine for biomarkers via precise
                            Intra-classes and Inter-classes comparison from tagged whole genomic sequences</a></li>
                        <br>
                    </ul>
                </ul>
            </div>
            <div id="menu4" class="tab-pane fade">
                <ul style="text-align: left">
                    <li>國立中正大學資訊工程所<a href="http://www.cs.ccu.edu.tw/~jdwang/publication/phd_JDWang_2002_6_17Final.ps"
                                      target="_blank">博士論文</a>(2002.6)<br>
                        Design and Evaluation of Approaches for Automatic Chinese Text Categorization<br>
                        (中文文件自動分類方法的設計與評估)
                    </li>
                    <br>
                    <li>國立中正大學資訊工程所碩士論文(1993.6)<br>
                        最近鄰近點問題之 nCUBE 計算法設計與實作
                    </li>
                    <br>
                </ul>
            </div>
            <div id="menu5" class="tab-pane fade">
                <ul style="text-align: left">
                    <li>王經篤 ，"中文文件分類關鍵詞選擇方法的比較"， 澎技學報，第四期，民國 90 年 元月，pp. 227-243. p></li>
                    <br></ul>
            </div>
        </div>
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