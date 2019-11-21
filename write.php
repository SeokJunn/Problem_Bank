<?php
session_start();
?>
<!DOCTYPE HTML>
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
    <script type="text/javascript" language="javascript"></script>
    <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-xlarge.css" />
    </noscript>
</head>

<style>
    @import url(//fonts.googleapis.com/earlyaccess/hanna.css);
    h1,h2,h3,h4,p,div,a,table,tr,td,th{
        font-family: 'Hanna', sans-serif;
    }
    .popup {
        background-color: #fff;
        border: 3px solid #fff;
        display: inline-block;
        left: 50%;
        opacity: 0;
        padding: 15px;
        position: fixed;
        text-align: justify;
        top: 40%;
        visibility: hidden;
        z-index: 10;

        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);

        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        -ms-border-radius: 10px;
        -o-border-radius: 10px;
        border-radius: 10px;

        -webkit-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
        -moz-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
        -ms-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
        -o-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
        box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;

        -webkit-transition: opacity .5s, top .5s;
        -moz-transition: opacity .5s, top .5s;
        -ms-transition: opacity .5s, top .5s;
        -o-transition: opacity .5s, top .5s;
        transition: opacity .5s, top .5s;
    }
    
    .sel{
        float:left;
    }
    #go{
        margin-left: 500px;
    }

</style>


<body id="top">

    <!-- overlay-->

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

    <!-- banner -->
    <section id="main" class="wrapper style1">
        <section id="banner">
            <header class="major">
                <h2>문제 게시판</h2><br>
                <p>다양한 기출 문제를 풀어보세요.</p>
            </header>
        </section>
    </section>
    
    <!-- main -->
    <?php
           
                $URL = "./login.php";
                if(!isset($_SESSION['userid'])) {
        ?>

    <script>
        alert("로그인이 필요합니다");
        location.replace("<?php echo $URL?>");

    </script>
    <?php
                }
        ?>
<!-- write -->
    <form method="get" action="write_action.php">
        <table style="padding-top:50px" align=center width=700 border=0>
                        <tr>
                <td height=20 align=center bgcolor=#ccc>
                    <font color=white> 글쓰기</font>
                </td>
            </tr>
            
            <tr>
                <td bgcolor=white>
                    <table class="table2" border="0">
                        <tr>
                            <td>작성자</td>
                            <td><input  type="hidden" name="name" value="<?=$_SESSION['userid']?>"><?=$_SESSION['userid']?></td>
                        </tr>

                        <tr>
                            <td>제목</td>
                            <td><input type=text name=title size=60></td>
                        </tr>

                        <tr>
                            <td>내용</td>
                            <td><textarea name=content cols=85 rows=15></textarea></td>
                        </tr>

                    </table>
                    <center>
                        <input type="submit" value="작성"> 
                    </center>
                </td>
            </tr>
        </table>
    </form>




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
