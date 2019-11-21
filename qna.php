<?php
session_start();
?>
<!DOCTYPE HTML>
<html>

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

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
    h1,h2,h3,h4,p,div,a,table,tr,td,th{
        font-family: 'Hanna', sans-serif;
    }
    #rounded-corner {
        font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
        font-size: 22px;
        width: 100%;
        
        text-align: left;
        border-collapse: collapse;
    }

    #rounded-corner thead th.rounded-company {
        background: #b9c9fe url('left.png') left -1px no-repeat;
    }

    #rounded-corner thead th.rounded-q4 {
        background: #b9c9fe url('right.png') right -1px no-repeat;
    }

    #rounded-corner th {
        padding: 8px;
        font-weight: normal;
        font-size: 13px;
        color: #039;
        background-color: aquamarine;
    }

    #rounded-corner td {
        padding: 8px;
        background: white;
        border-top: 1px solid #fff;
        color: #669;
    }

    #rounded-corner tfoot td.rounded-foot-left {
        background: #e8edff url('botleft.png') left bottom no-repeat;
    }

    #rounded-corner tfoot td.rounded-foot-right {
        background: #e8edff url('botright.png') right bottom no-repeat;
    }

    #rounded-corner tbody tr:hover td {
        background: #d0dafd;
    }

    #head {
        background-color: aquamarine;
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
    <?php
                $connect = mysqli_connect('220.149.13.245', 'root', '1234', 'test2') or die ("connect fail");
                $query ="select * from board order by number desc";
                $result = $connect->query($query);
                $total = mysqli_num_rows($result);
 
        ?>
    <section id="banner">
        
            <header class="major">
                <h2>QNA 게시판</h2><br>
                <p>마음껏 질문 하세요.</p>
            </header>
    </section>        
        
        <div style="margin-top:20px; height:18px; vertical-align:top;">
            <span style="margin-right:10px;">［글자크기 <a href="javascript:a()">100%</a> | <a href="javascript:b()">120%</a> | <a href="javascript:c()">150%</a>］</span>
        </div>
    

    <!-- main -->

    


        <table id="rounded-corner" summary="2007 Major IT Companies' Profit">
            <thead align="center" id="head">
                <tr>
                    <td width="50" align="center">번호</td>
                    <td width="300" align="center">제목</td>
                    <td width="100" align="center">작성자</td>
                    <td width="100" align="center">날짜</td>
                </tr>
            </thead>
            <tbody>
                <?php
                while($rows = mysqli_fetch_assoc($result)){ //DB에 저장된 데이터 수 (열 기준)
                        if($total%2==0){
        ?> <tr class="even">
                    <?php   }
                        else{
        ?>
                <tr>
                    <?php } ?>
                    <td width="50" align="center"><?php echo $total?></td>
                    <td width="300" align="center"><a href="view2.php?number=<?php echo $rows['number']?>"><?php echo $rows['title']?></a></td>

                    <td width="100" align="center"><?php echo $rows['id']?></td>
                    <td width="100" align="center"><?php echo $rows['date']?></td>

                </tr>
                <?php
                $total--;
                }
        ?>
            </tbody>
        </table>

        <div class=text style="margin-left:850px;">
            <input type="button" font style="cursor: hand" onClick="location.href='./write.php'" value="글쓰기">

        </div>
        <br>
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
