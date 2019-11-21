<?php        
    session_start();
 
 
                $URL = "./main.php";
 
                if(!isset($_SESSION['userid'])) {
        ?>              <script>
                                alert("권한이 없습니다.");
                                location.replace("<?php echo $URL?>");
                        </script>
        <?php   } 
?>

<!DOCTYPE HTML>

<html>

<head>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold' rel='stylesheet' type='text/css'>
    <link href='http://www.blueb.co.kr/data/201010/IJ12872540888408/stylesheet.css' rel='stylesheet' type='text/css'>
    
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
        <link rel="stylesheet" href="css/skel.css" />

        <link rel="stylesheet" href="css/style-xlarge.css" />
    </noscript>
</head>
<style>
    @import url(//fonts.googleapis.com/earlyaccess/hanna.css);
    h1,h2,h3,h4,p,div,a,table,tr,td,th{
        font-family: 'Hanna', sans-serif;
    }
    

</style>

<body id="top">

    <!-- Header -->
    <header id="header" class="skel-layers-fixed">
        <h1><a href="main_logout.php">문제은행</a></h1>
        <nav id="nav">
            <ul>
                <li><a href="main.php">HOME</a></li>
                <li><a href="problem.php">PROBLEM</a></li>
                <li><a href="od.php">OD</a></li>
                <li><a href="qna.php">QNA</a></li>
                <li><a href="my.php">MY</a></li>
                <li><?php
                $connect = mysqli_connect('220.149.13.245', 'root', '1234', 'test2') or die ("connect fail");
                $query ="select * from user order by number desc";
                $result = $connect->query($query);
                
 
                
 
                if(isset($_SESSION['userid'])) {
       //                 echo $_SESSION['userid'];?>
              <a href="./logout.php">LOGOUT</a>
<!--     <button onclick="location.href='./logout.php'">로그아웃</button>-->
        <?php
                }
                else {
        ?>              
<!--              <button onclick="location.href='./login.php'">로그인</button>-->
              <a href="./login.php">LOGIN</a>
              
        <?php   }
        ?></li>
            </ul>
        </nav>
    </header>

    <!-- benner -->
    
        <section id="banner">
            <header class="major">
                <h2>MY 게시판</h2><br>
                <p>ㅇㅇ님의 게시판</p>
            </header>
        </section>
    
    
    <!-- main -->
        <div id="container" style="background-color: #BEF7FF; position:relative;">
            <div id="header">
                <div id="logo">
                    <h1>CSS3 Rainbow</h1>
                    
                </div>
                <div class="rainbow">
                    <div class="red rounding"></div>
                    <div class="orange rounding"></div>
                    <div class="yellow rounding"></div>
                    <div class="green rounding"></div>
                    <div class="blue rounding"></div>
                    <div class="nila rounding"></div>
                    <div class="purple rounding"></div>
                </div>
                <div id="cloud-2">
                    <div class="cloud1 rounding cloudgradient"></div>
                    <div class="cloud3 rounding cloudgradient"></div>
                    <div class="cloud2 rounding cloudgradient"></div>
                </div>
                <div id="cloud-3">
                    <div class="cloud1 rounding cloudgradient"></div>
                    <div class="cloud3 rounding cloudgradient"></div>
                    <div class="cloud2 rounding cloudgradient"></div>
                </div>
                <div id="cloud-4">
                    <div class="cloud1 rounding cloudgradient"></div>
                    <div class="cloud3 rounding cloudgradient"></div>
                    <div class="cloud2 rounding cloudgradient"></div>
                </div>
                <div id="cloud-5">
                    <div class="cloud1 rounding cloudgradient"></div>
                    <div class="cloud3 rounding cloudgradient"></div>
                    <div class="cloud2 rounding cloudgradient"></div>
                </div>
                <div id="cloud-0">
                    <div class="cloud1 rounding cloudgradient2"></div>
                    <div class="cloud3 rounding cloudgradient2"></div>
                    <div class="cloud2 rounding cloudgradient2"></div>
                </div>

            </div>
            <div id="body" class="">
                <!--cloudgradient-->
                <div id="contentgreen">

                </div>
                <div id="contentyellow">
                    <div>
                        <br>
                        <br>
                        
                        <h2 style="font-size:24px;">영어 단어장</h2>
                        <h4>단어집으로 먼저 공부하세요~!</h4>
                        <input type="button" value="이동" onclick="location.href='./menu4/index.php'">
                    </div>
                </div>
                <div id="contentred">
                </div>
                <div id="contentorange">
                    <div>
                        <h2 style="font-size:21px;">기사 관련 핵심 기출</h2>

                        <h3 style="float:left; margin-right:10px; text-align:left;"><a href=""><strong>정처기 기출</strong></a></h3><input type="button" value="이동" onclick="location.href='./menu4-1/index.php'" style="float:left;">
                        <br>
                    </div>
                </div>
                <div id="contentnila">
                </div>
                <div id="contentpurple">
                </div>
                <div id="contentblue">
                    <div>
                        <marquee scrollamount=90>
                            <font color=red>★━━─</font>
                        </marquee><br>
                        <marquee scrollamount=50>
                            <font color=blue>★━━─</font>
                        </marquee><br>
                        <marquee scrollamount=60>
                            <font color=orange>★━━─</font>
                        </marquee><br>
                        <marquee scrollamount=40>
                            <font color=green>★━━─</font>
                        </marquee><br>
                        <marquee scrollamount=80>
                            <font color=violet>★━━─</font>
                        </marquee><br>
                        <marquee scrollamount=45>
                            <font color=pink>★━━─</font>
                        </marquee><br>
                        <marquee scrollamount=70>
                            <font color=black>★━━─</font>
                        </marquee><br>

                    </div>
                </div>
                <div class="linepurple "></div>
                <div class="linered "></div>
                <div class="linegreen "></div>
                <div class="lineorange "></div>
                <div class="lineblue "></div>
                <div class="lineyellow "></div>
                <div class="linenila "></div>
                <div id="cloud-6">
                    <div class="cloud3 rounding cloudgradient2"></div>
                    <div class="cloud2 rounding cloudgradient2"></div>
                    <div class="cloud1 rounding cloudgradient2"></div>
                </div>
                <div id="cloud-7">
                    <div class="cloud1 rounding cloudgradient2"></div>
                    <div class="cloud3 rounding cloudgradient2"></div>
                    <div class="cloud2 rounding cloudgradient2"></div>
                </div>
                <div id="cloud-8">
                    <div class="cloud1 rounding cloudgradient2"></div>
                    <div class="cloud3 rounding cloudgradient2"></div>
                    <div class="cloud2 rounding cloudgradient2"></div>
                </div>
                <div id="cloud-9">
                    <div class="cloud2 rounding cloudgradient2"></div>
                </div>
                <div id="credit">

                </div>
            </div>

        </div>


        <!-- Footer -->
        <footer id="footer">
            <div class="container">
                <div class="row double">
                    <div class="6u">
                        <h2>한석준</h2>
                        <p>대구대학교 컴퓨터공학과</p>
                        <p>UI 제작</p>
                        <ul class="icons">
                            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                            <li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
                            <li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
                        </ul>
                    </div>

                    <div class="6u">
                        <h2>김병진</h2>
                        <p>대구대학교 컴퓨터 공학과</p>
                        <P>DB 담당</P>
                        <ul class="icons">
                            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                            <li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
                            <li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
                        </ul>
                    </div>
                </div>
                <ul class="copyright">
                    <li>&copy; 대구대학교</li>
                    <li>UI: 한석준</li>
                    <li>DB: 김병진</li>
                </ul>
            </div>
        </footer>

</body>

</html>
