<!DOCTYPE HTML>
<?php
    session_start();
?>

<html>

<head>
    <title>문제은행</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-xlarge.css" />
    </noscript>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.1.2/css/material-design-iconic-font.min.css">
</head>
<style>
    @import url(//fonts.googleapis.com/earlyaccess/hanna.css);
    h1,h2,h3,h4,p,div,a,table,tr,td,th{
        font-family: 'Hanna', sans-serif;
    }
    #a {
        text-align: left;
    }

    .b {
        text-align: center;
    }

    .panel {
        background-color: #444;
        height: 34px;
        padding: 10px;
    }

    .panel a#login_pop,
    .panel a#join_pop {
        border: 2px solid #aaa;
        color: #fff;
        display: block;
        float: left;
        margin-left: 10px;
        padding: 5px 10px;
        text-decoration: none;
        text-shadow: 1px 1px #000;

        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        -ms-border-radius: 10px;
        -o-border-radius: 10px;
        border-radius: 10px;
        font-family: 'dotum';
    }

    a#login_pop:hover,
    a#join_pop:hover {
        border-color: #eee;
    }

    

    .wrap {
        margin: 50px auto 0 auto;
        width: 100%;
        display: flex;
        align-items: space-around;
        max-width: 1200px;
    }

    .tile {
        width: 380px;
        height: 380px;
        margin: 10px;
        background-color: #99aeff;
        display: inline-block;
        background-size: cover;
        position: relative;
        cursor: pointer;
        transition: all 0.4s ease-out;
        box-shadow: 0px 35px 77px -17px rgba(0, 0, 0, 0.44);
        overflow: hidden;
        color: white;
        font-family: 'Roboto';

    }

    .tile img {
        height: 100%;
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 0;
        transition: all 0.4s ease-out;
    }

    .tile .text {
        /*   z-index:99; */
        position: absolute;
        padding: 30px;
        height: calc(100% - 60px);
        height: calc(100% - 60px);
    }

    .tile h1 {

        font-weight: 300;
        margin: 0;
        text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
    }

    .tile h2 {
        font-weight: 100;
        margin: 20px 0 0 0;
        font-style: italic;
        transform: translateX(200px);
    }

    .tile p {
        font-weight: 300;
        margin: 20px 0 0 0;
        line-height: 25px;
        /*   opacity:0; */
        transform: translateX(-200px);
        transition-delay: 0.2s;
    }

    .animate-text {
        opacity: 0;
        transition: all 0.6s ease-in-out;
    }

    .tile:hover {
        /*   background-color:#99aeff; */
        box-shadow: 0px 35px 77px -17px rgba(0, 0, 0, 0.64);
        transform: scale(1.05);
    }

    .tile:hover img {
        opacity: 0.2;
    }

    .tile:hover .animate-text {
        transform: translateX(0);
        opacity: 1;
    }

    .dots {
        position: absolute;
        bottom: 20px;
        right: 30px;
        margin: 0 auto;
        width: 30px;
        height: 30px;
        color: currentColor;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-around;

    }

    .dots span {
        width: 5px;
        height: 5px;
        background-color: currentColor;
        border-radius: 50%;
        display: block;
        opacity: 0;
        transition: transform 0.4s ease-out, opacity 0.5s ease;
        transform: translateY(30px);

    }

    .tile:hover span {
        opacity: 1;
        transform: translateY(0px);
    }

    .dots span:nth-child(1) {
        transition-delay: 0.05s;
    }

    .dots span:nth-child(2) {
        transition-delay: 0.1s;
    }

    .dots span:nth-child(3) {
        transition-delay: 0.15s;
    }

    @import url(https://fonts.googleapis.com/css?family=Roboto:400,500);


    .menu-button {
        -webkit-transition: 0.4s;
        -moz-transition: 0.4s;
        transition: 0.4s;
        position: absolute;
        right: 30px;
        bottom: 30px;
        width: 60px;
        height: 60px;
        text-align: center;
        line-height: 60px;
        border-radius: 50%;
        background-color: #E91E63;
        color: #FFFFFF;
        font-size: 24px;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26), 0 2px 10px 0 rgba(0, 0, 0, 0.22);
        cursor: pointer;
    }

    .menu-button:hover {
        background: #d81557;
        box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.28), 0 4px 15px 0 rgba(0, 0, 0, 0.25);
    }

    .menu-button a {
        -webkit-transition: 0.4s;
        -moz-transition: 0.4s;
        transition: 0.4s;
        opacity: 0;
        width: 0px;
        height: 0px;
        text-align: center;
        line-height: 50px;
        border-radius: 50%;
        color: #FFFFFF;
        font-size: 24px;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26), 0 2px 10px 0 rgba(0, 0, 0, 0.22);
        cursor: pointer;
    }

    .menu-button a:hover {
        box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.28), 0 4px 15px 0 rgba(0, 0, 0, 0.25);
    }

    .menu-button a:nth-child(2) {
        -webkit-transition-delay: 0.3s;
        -moz-transition-delay: 0.3s;
        transition-delay: 0.3s;
        position: absolute;
        right: 30px;
        bottom: 30px;
        background: #55acee;
    }

    .menu-button a:nth-child(3) {
        -webkit-transition-delay: 0.4s;
        -moz-transition-delay: 0.4s;
        transition-delay: 0.4s;
        position: absolute;
        right: 30px;
        bottom: 30px;
        background: #dc4e41;
    }

    .menu-button a:nth-child(4) {
        -webkit-transition-delay: 0.5s;
        -moz-transition-delay: 0.5s;
        transition-delay: 0.5s;
        position: absolute;
        right: 30px;
        bottom: 30px;
        background: #3F3F3F;
    }

    .menu-button:hover a {
        opacity: 1;
        width: 50px;
        height: 50px;
    }

    .menu-button:hover a:nth-child(2) {
        right: 80px;
        bottom: 0px;
    }

    .menu-button:hover a:nth-child(2):hover {
        -webkit-transition-delay: 0s;
        -moz-transition-delay: 0s;
        transition-delay: 0s;
        background: #3ea1ec;
    }

    .menu-button:hover a:nth-child(3) {
        right: 65px;
        bottom: 65px;
    }

    .menu-button:hover a:nth-child(3):hover {
        -webkit-transition-delay: 0s;
        -moz-transition-delay: 0s;
        transition-delay: 0s;
        background: #d83a2b;
    }

    .menu-button:hover a:nth-child(4) {
        right: 0px;
        bottom: 80px;
    }

    .menu-button:hover a:nth-child(4):hover {
        -webkit-transition-delay: 0s;
        -moz-transition-delay: 0s;
        transition-delay: 0s;
        background: #323232;
    }

    .loader-container {
        position: relative;
        height: 70px;
        width: 160px;
        margin: 200px auto 0;
    }

    .loader-container>div {
        position: relative;
        display: inline-block;
        background: #03A9F4;
        height: 100%;
        width: 10px;
        margin: 0;
        -webkit-animation: load 3s ease-in-out infinite;
        animation: load 3s ease-in-out infinite;
    }

    .loader-container .rectangle-2 {
        -webkit-animation-delay: 0.1s;
        animation-delay: 0.1s;
    }

    .loader-container .rectangle-3 {
        -webkit-animation-delay: 0.2s;
        animation-delay: 0.2s;
    }

    .loader-container .rectangle-4 {
        -webkit-animation-delay: 0.3s;
        animation-delay: 0.3s;
    }

    .loader-container .rectangle-5 {
        -webkit-animation-delay: 0.4s;
        animation-delay: 0.4s;
    }

    .loader-container .rectangle-6 {
        -webkit-animation-delay: 0.5s;
        animation-delay: 0.5s;
    }

    @-moz-keyframes load {

        0%,
        100% {
            -moz-transform: scaleY(1);
            background: #03A9F4;
        }

        16.67% {
            -moz-transform: scaleY(3);
            background: #FF5722;
        }

        33.33% {
            -moz-transform: scaleY(1);
            background: #FF5252;
        }

        50% {
            -moz-transform: scaleY(3);
            background: #E91E63;
        }

        66.67% {
            -moz-transform: scaleY(1);
            background: #9C27B0;
        }

        83.34% {
            -moz-transform: scaleY(3);
            background: #673AB7;
        }
    }

    @-webkit-keyframes load {

        0%,
        100% {
            -webkit-transform: scaleY(1);
            background: #03A9F4;
        }

        16.67% {
            -webkit-transform: scaleY(3);
            background: #FF5722;
        }

        33.33% {
            -webkit-transform: scaleY(1);
            background: #FF5252;
        }

        50% {
            -webkit-transform: scaleY(3);
            background: #E91E63;
        }

        66.67% {
            -webkit-transform: scaleY(1);
            background: #9C27B0;
        }

        83.34% {
            -webkit-transform: scaleY(3);
            background: #673AB7;
        }
    }

    @keyframes load {

        0%,
        100% {
            transform: scaleY(1);
            background: #03A9F4;
        }

        16.67% {
            transform: scaleY(3);
            background: #FF5722;
        }

        33.33% {
            transform: scaleY(1);
            background: #FF5252;
        }

        50% {
            transform: scaleY(3);
            background: #E91E63;
        }

        66.67% {
            transform: scaleY(1);
            background: #9C27B0;
        }

        83.34% {
            transform: scaleY(3);
            background: #673AB7;
        }
    }

</style>

<body id="top">
    
    <!-- Header -->
    <header id="header" class="skel-layers-fixed">
        <h1><a href="main.php">문제은행</a></h1>
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

    <!-- Banner -->
    <section id="banner">
        <div class="inner">
            <h2>문제 은행</h2>
            <p>다양한 문제를 풀어보세요 </p>
            <ul class="actions">
                <li><a href="login.php" class="button big special">LOG In</a></li>
                <li><a href="join.php" class="button big special">Sign Up</a></li>
            </ul>


            <div class="menu-button"><i class="zmdi zmdi-share"></i>
                <a href="problem.php" target="blank"><i class="zmdi zmdi-book"></i></a>
                <a href="qna.php" target="blank"><i class="zmdi zmdi-comment"></i></a>
                <a href="my.php" target="blank">MY </a>
            </div>

        </div>
    </section>

    <!-- One -->
    <section id="one" class="wrapper style1">
        <header class="major">
            <h2>정보 처리기사 시험 일정</h2>
            <p><a href="http://www.q-net.or.kr/crf005.do?id=crf00503&jmCd=1320&gSite=Q&gId=">시험 일정을 꼭 확인하세요</a></p>
        </header>
    </section>
    <div class="wrap">
        <div class="tile">
            <img src='images/T1.JPG' />
            <div class="text">
                <h1 style="color:black; font-weight: bold;">2019년 정기 1회</h1>

                <p class="animate-text" style="color:black; font-weight: bold;">필기 원서 접수 : 2019.01.25 ~ 01.31</p>
                <p class="animate-text" style="color:black; font-weight: bold;">필기 시험 : 2019.03.03</p>
                <p class="animate-text" style="color:black; font-weight: bold;">실기 원서 접수 : 2019.03.15 ~ 03.32</p>
                <p class="animate-text" style="color:black; font-weight: bold;">필기 시험 : 2019.04.13 ~ 04.27</p>
                <div class="dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>


        <div class="tile">
            <img src='images/T2.JPG' />
            <div class="text">
                <h1 style="color:black; font-weight: bold;">2019년 정기 2회</h1>

                <p class="animate-text" style="color:black; font-weight: bold;">필기 원서 접수 : 2019.03.29 ~ 04.04</p>
                <p class="animate-text" style="color:black; font-weight: bold;"> 필기 시험 : 2019.04.27</p>
                <p class="animate-text" style="color:black; font-weight: bold;">실기 원서 접수 : 2019.05.20 ~ 05.23</p>
                <p class="animate-text" style="color:black; font-weight: bold;">필기 시험 : 2019.06.29 ~ 07.12</p>
                <div class="dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>

        <div class="tile">
            <img src='images/T3.JPG' />
            <div class="text">
                <h1 style="color:black; font-weight: bold;">2019년 정기 3회</h1>

                <p class="animate-text" style="color:black; font-weight: bold;">필기 원서 접수 : 2019.01.25 ~ 01.31</p>
                <p class="animate-text" style="color:black; font-weight: bold;">필기 시험 : 2019.03.03</p>
                <p class="animate-text" style="color:black; font-weight: bold;">실기 원서 접수 : 2019.03.15 ~ 03.32</p>
                <p class="animate-text" style="color:black; font-weight: bold;">필기 시험 : 2019.04.13 ~ 04.27</p>
                <div class="dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>

    <BR></BR>
    <BR></BR>
    <BR></BR>
    <BR></BR>

    <!-- Two -->
    <section id="two" class="wrapper style2">
        <header class="major">
            <h2>시험 원서 접수 방법</h2>
            <p>접수 방법을 확인하시오.</p>
        </header>
        <div class="container">
            <div class="row">
                <div class="6u">
                    <section class="special">
                        <a href="#" class="image fit"><img src="images/qnet.PNG" alt="" height="300px" /></a>
                        <h3>Q-Net</h3>
                        <p>1. Q-Net 홈페이지 접속</p>
                        <p>2. 회원가입 하기</p>

                        <ul class="actions">
                            <li><a href="http://www.q-net.or.kr/man001.do?gSite=Q" class="button alt">Q-Net</a></li>
                        </ul>
                    </section>
                </div>
                <div class="6u">
                    <section class="special">
                        <a href="#" class="image fit"><img src="images/Qnet2.JPG" alt="" height="180px"></a>
                        <h3>원서 접수</h3>
                        <p>1. 자격·종목·응시유형선택</p>
                        <p>2. 추가입력</p>
                        <p>3. 장소선택 및 결제</p>
                        <p>4. 접수완료</p>
                        <ul class="actions">
                            <li><a href="javascript:void(0)" onclick="window.open('http://www.q-net.or.kr/rcv002.do?id=rcv00201&gSite=Q&gId=', '', 'width=500, height=700 top=8, left=5');" class="button alt" target="_top">원서접수</a></li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <!-- Three -->
    <section id="three" class="wrapper style1">
        <div class="container">
            <div class="row">
                <div class="8u">
                    <section>
                        <h2 style="text-align:center;">굼벵이</h2>

                        
                        <div class="loader-container">
                            <div class="rectangle-1"></div>
                            <div class="rectangle-2"></div>
                            <div class="rectangle-3"></div>
                            <div class="rectangle-4"></div>
                            <div class="rectangle-5"></div>
                            <div class="rectangle-6"></div>
                            <div class="rectangle-5"></div>
                            <div class="rectangle-4"></div>
                            <div class="rectangle-3"></div>
                            <div class="rectangle-2"></div>
                            <div class="rectangle-1"></div>
                        </div>
                    </section>
                </div>
                <div class="4u">
                    <section>
                        <h3>MENU 소개</h3>
                        <ol class="alt" type="1">
                            <li>QUESTION | 문제풀기</li>
                            <li>QNA | 질문하기</li>
                            <li>MY | 기출문제</li>
                            <li>OD | 오답풀기</li>
                        </ol>

                    </section>
                    <hr />
                    <section>
                        
                    </section>
                </div>
            </div>
        </div>
    </section>

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
