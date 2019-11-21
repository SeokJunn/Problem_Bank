<? php
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
    <script type="text/javascript" language="javascript">


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
    .view_btn{
        margin-left: 48%;
        margin-bottom: 20px;
    }
    .view_table{
        margin-left: 20%;
        text-align: center;
        vertical-align: middle;
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
                <li><a href="logout.php">LOG OUT</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main -->
    <section id="main" class="wrapper style1">
        <section id="banner">
            <header class="major">
                <h2>문제 게시판</h2><br>
                <p>다양한 기출 문제를 풀어보세요.</p>
            </header>
        </section>
    </section>

    <!-- view -->

    <?php
                $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2');
                $number = $_GET['number'];

                session_start();
                $query = "select title, content, date, id from board where number =$number";
                $result = $connect->query($query);
                $rows = mysqli_fetch_assoc($result);
        ?>

    <table class="view_table" align=center border="1" style="width:60%; " >
        <tr>
            <th style="text-align:center; width:150px;">제목</th>
            <th colspan="6" class="view_title" style="text-align:center;"><?php echo $rows['title']?></th>
        </tr>
    
        <tr>
            <td class="view_id" >작성자</td>
            <td class="view_id2" style="text-align:center;"><?php echo $rows['id']?></td>
        </tr>


        <tr height=500 border="1">
            <th style="vertical-align: middle; text-align:center; font-size:2em;">내용</th>
            <th colspan="6" class="view_content" valign="top" style="text-align:center; vertical-align: middle; font-size:2em;">

                <?php echo $rows['content']?></th>
        </tr>
    </table>


    <!-- MODIFY & DELETE -->
    <div class="view_btn">

        <input type="button" value='목록' onclick="location.href='./qna.php'">
        <input type="button" value='수정' onclick="location.href='./modify.php?number=<?=$number?>&id=<?=$_SESSION['userid']?>'">
        
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
