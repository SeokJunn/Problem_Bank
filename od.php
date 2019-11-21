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
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
    <title>Left Sidebar - Ion by TEMPLATED</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <script type="text/javascript" language="javascript">
        // 화면 해상도(문제크기)
        function a() {
            document.body.style.zoom = '100%';
            void(0);
        }

        function b() {
            document.body.style.zoom = '125%';
            void(0);
        }

        function c() {
            document.body.style.zoom = '150%';
            void(0);
        }

    </script>
    <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-xlarge.css" />
    </noscript>
</head>

<style>
    @import url(//fonts.googleapis.com/earlyaccess/hanna.css);
    h1,h2,h3,h4,p,div,a,table,tr,td,th, select, form, option{
        font-family: 'Hanna', sans-serif;
    }
    
    #tt{
        font-family: 'Hanna', sans-serif;
        font-size: 22px;    
        width: 70%;
        padding-left: 20%;        
    }
    #go{
        margin-top: 20px;
        margin-left: 88%;
    }
</style>


<body id="top">

    <!-- overlay-->

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

    <!-- Main -->
    
        <section id="banner">
            <header class="major">
                <h2>OD 게시판</h2><br>
                <p>오답 풀어보세요.</p>
            </header>
        </section>
        <div align="center">
            <!--Mobile, PC 페이지 컨테이너 가운데 정렬 시작.-->
            <div id="dotabi_pc_container">
                <!--PC 컨테이너 시작.-->
                <div class="container_padding">
                    <!--PC 컨테이너 여백 시작.-->

                    <table style="margin-bottom:5px; width:100%; border:solid 0px #ccc; " cellspacing="0" cellpadding="0">
                        <!--PC Top Head 시작.-->
                        <tr>
                            <td style="padding:15px 0px; width:120px; font-family:tahoma; text-align:center;">

                            </td>
                            <td>
                                <div id="dotabi_top_ribbon" style="padding:12px 0px; text-align:left;">
                                    <!--PC 리본메뉴, 문제집중뷰 시작.-->


                                    <form name='catTop_form' method='post' action='./resolve.php' style='margin:0px; color: black;' id="tt">
                                        <P>USER : <input type="hidden" name="name" value="<?=$_SESSION['userid']?>"><?=$_SESSION['userid']?></P>
                                    <select onchange="categoryChange(this)" name="probType">
                                          <option>응시 분야를 선택하세요</option>
                                          <option value="기능/기술(기사)">기능/기술 [기사]</option>
                                          <option value="영어">영어</option>
                                          <option value="한자">한자</option>
                                    </select>&nbsp;
                                     
                                    <select id="good" onchange="categoryChange2(this)" name="subject">
                                        <option>종목을 선택하세요</option>
                                    </select>&nbsp;

                                    <select id="good2" name="probDate">
                                        <option>회차를 선택하세요</option>
                                    </select>&nbsp;
                                        <input type="hidden" name='questionNum' value="0">
                                         <input type="hidden" name='wantNum' value="1">
                                         
                                         <input type="hidden" name="next" value="NULL">
                                         <input type="hidden" name="subAns" value="NULL">
                                        <input type="submit" value="다음" id="go">
                                    </form>

                                    <div style="margin-top:20px; height:18px; vertical-align:top;">

                                    </div>
                                </div>
                                <!--PC 리본메뉴, 문제집중뷰 끝.-->
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
    </div>
                 
    <script>
        function categoryChange(e) {
            var good_a = [" ", "정보처리기사"];

            var good_b = [" ", "영단어"];

            var good_c = [" ", "사자성어"];
            var target = document.getElementById("good");

            if (e.value == "기능/기술(기사)") var d = good_a;
            else if (e.value == "영어") var d = good_b;
            else if (e.value == "한자") var d = good_c;

            target.options.length = 0;

            for (x in d) {
                var opt = document.createElement("option");
                opt.value = d[x];
                opt.innerHTML = d[x];
                target.appendChild(opt);
            }
        }

        function categoryChange2(e) {
            var good_a = ["190303"];

            var good_b = ["중등1", "중등2", "중등3", "중등4", "고등1", "고등2", "고등3", "고등4"];

            var good_c = ["수능기출1", "수능기출2"];
            var target = document.getElementById("good2");

            if (e.value == "정보처리기사") var d = good_a;
            else if (e.value == "영단어") var d = good_b;
            else if (e.value == "사자성어") var d = good_c;

            target.options.length = 0;

            for (x in d) {
                var opt = document.createElement("option");
                opt.value = d[x];
                opt.innerHTML = d[x];
                target.appendChild(opt);
            }
        }

    </script>



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
