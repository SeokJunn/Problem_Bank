<?php
    session_start();
?>

<!-- Add your content of head and header -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <meta content="description" name="description">
    <meta name="google" content="notranslate" />
    <meta content="Mashup templates have been developped by Orson.io team" name="author">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="./solve/assets/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="./solve/assets/favicon.ico" rel="icon">



    <link href="./solve/main.97292821.css" rel="stylesheet">
</head>

<style>
    @import url(//fonts.googleapis.com/earlyaccess/hanna.css);

    h1,
    h2,
    h3,
    h4,
    p,
    div,
    a,
    table,
    tr,
    td,
    th {
        font-family: 'Hanna', sans-serif;
    }

    #rounded-corner {
        font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
        font-size: 12px;
        margin-left: auto;
        margin-right: auto;
        height: 700px;
        width: 800px;

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
        font-family: "Monospace";
        text-align: center;
        width: 100px;
        padding: 8px;
        font-weight: normal;
        font-size: 20px;
        color: #039;
        background: #8ACFC5;


    }

    #rounded-corner td {

        font-family: "Monospace";
        font-size: 18px;
        padding: 8px;
        background: white;
        border-top: 1px solid #fff;
        color: #669;
        border: 1px;
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

    #button {
        background: #1AAB8A;
        color: #fff;
        border: none;
        position: relative;
        height: 50px;
        width: 50px font-size:3em;
        padding: 0 2em;
        cursor: pointer;
        transition: 800ms ease all;
        outline: none;
        margin-left: 60%;
    }

    #button:hover {
        background: #fff;
        color: #1AAB8A;
    }

    #button:before,
    button:after {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        height: 2px;
        width: 0;
        background: #1AAB8A;
        transition: 400ms ease all;
    }

    #button:after {
        right: inherit;
        top: inherit;
        left: 0;
        bottom: 0;
    }

    #button:hover:before,
    button:hover:after {
        width: 100%;
        transition: 800ms ease all;
    }


    #button2 {
        margin-left: 10px;
        background: #1AAB8A;
        color: #fff;
        border: none;

        height: 43px;
        width: 50px;
        font-size: 2em;
        text-align: center;
        padding: 0 2em;
        cursor: pointer;
        transition: 800ms ease all;
        outline: none;

    }

    #button2:hover {
        background: #fff;
        color: #1AAB8A;
    }

    #button2:before,
    button2:after {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        height: 2px;
        width: 50px;
        background: #1AAB8A;
        transition: 400ms ease all;
    }

    #button2:after {
        right: inherit;
        top: inherit;
        left: 0;
        bottom: 0;
    }

    #button2:hover:before,
    button2:hover:after {
        width: 100%;
        transition: 800ms ease all;
    }

    .d1 {
        margin-left: 28%;
    }

    .d1 input {
        width: 500px;
        height: 42px;
        padding-left: 10px;
        border: 2px solid #7BA7AB;
        border-radius: 5px;
        outline: none;
        background: #F9F0DA;
        color: #9E9C9C;
    }

    .d1 button {
        position: absolute;
        top: 0;
        right: 0px;
        width: 42px;
        height: 42px;
        border: none;
        background: #7BA7AB;
        border-radius: 0 5px 5px 0;
        cursor: pointer;
    }

    .d1 button:before {
        content: "\f002";
        font-family: FontAwesome;
        font-size: 16px;
        color: #F9F0DA;
    }

    #button3 {
        width: 100px;
    }

</style>

<body>

    <!-- Add your content of header -->
    <header>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="navbar-collapse">
                    <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="./main_logout.php">HOME</a></li>
                        <li><a href="./problem.php">PROBLEM</a></li>
                        <li><a href="./qna.php">QNA</a></li>
                        <li><a href="./my.php">MY</a></li>
                        <li><a href="./od.php">OD</a></li>
                        <li><a href="./main.php" id="login_pop" class="button special">SIGN OUT</a></li>


                    </ul>

                </div>
            </div>
        </nav>
    </header>



    <!-- Add your site or app content here -->
    <div class="background-image-container white-text-container" style="background-image: url('./solve/assets/images/img-05.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Question</h1>
                    <p class="">문제를 풀어보세요</p>


                </div>
            </div>
        </div>
    </div>
    <br>

    <table style="margin:0px 0px 5px 0px; width:100%; border:1px solid #ccc; background:#f8f8f8" align="center">
        <!-- 상단 타이틀 시작. -->
        <tr style="height:45px;">
            <td style="font-family:MalgunGothic,Sans-serif; font-weight:bolder; color:green; font-size:11pt" align="center" valign="middle">
                문제 응시 중
                <span style="font-size:10pt; font-weight:500">
                    <span style="padding-left:8px; font-weight:500">Timer</span>
                    <span id="min" style="width:15px; font-weight:500; text-align:right"></span>분
                    <span id="sec" style="width:15px; font-weight:500; text-align:right"></span>초
                </span>

                <script type="text/javascript" language="javascript">
                    function updateTime() {
                        var now = new Date();
                        var t = now.getTime() - startDate.getTime();
                        var s = Math.round(t / 1000);

                        min.innerHTML = Math.floor(s / 60);
                        sec.innerHTML = s % 60;
                        setTimeout("updateTime()", 500);
                    }
                    var startDate = new Date();
                    updateTime();

                </script>
            </td>
        </tr>
    </table>
    <?php

    $connect = mysqli_connect("220.149.13.245:3306", "root", "1234", "test2") or die("db연결 실패");

        $probType = $_POST['probType'];
    $subject = $_POST['subject'];
    $probDate = $_POST['probDate'];
    
    $query2 = " select probTypeNum from probType where probType='$probType' and probSubject='$subject' and probDate='$probDate' "; # probTypeNum 리턴
    $result2 = $connect -> query($query2);
    $rows2 = mysqli_fetch_assoc($result2);
    $probTypeNum = $rows2['probTypeNum']; #probTypeNum값이 있음
    
    $query = " select questionNum from submit where isCorrect=0 and probTypeNum='$probTypeNum' and not questionNum=0 "; # 틀린 문제 번호가 뭔지 리턴
    $result = $connect->query($query);
    
    $array_1 = array(); # array_1[]에 틀린 문제 번호를 배열에 저장 (불러와야 할 문제 번호 들), 항상 배열의 젤 앞에 있음
    $i = 0;
    for($i = 0; $row = mysqli_fetch_row($result); $i++){

      $array_1[$i] = $row[0];

    }
    $questionNum2 = $_POST['questionNum']; #questionNum2 = 0
    $questionNum = $questionNum2 + 1; #questionNum = 1

    $query3 = " select questionNum, question, view1, view2, view3, view4
                from problem
                where probTypeNum='$probTypeNum' and questionNum='$array_1[0]' "; #문제 불러옴
    $result3 = $connect->query($query3);
    $rows = mysqli_fetch_assoc($result3);
    
    $next = $_POST['next'];
    $subAns = $_POST['subAns'];
    
    if(isset($next)) {
        if($subAns==NULL) {
            echo "<script> alert('답을 선택하세요.'); history.back();</script>";
            exit();
        } else {
            $questionNum1 = 0; # 0 -> +1
            $query = " insert into submit (id, probTypeNum, questionNum, subAns, isCorrect)
                        values('$_SESSION[userid]', '$probTypeNum', '$array_1[$questionNum1]', '$subAns', (select if ('$subAns' = (select corAns
                                                                                                                        from problem
                                                                                                                        where probTypeNum='$probTypeNum' and questionNum='$array_1[$questionNum1]'), 1, 0)))
                        ON DUPLICATE KEY UPDATE questionNum='$array_1[$questionNum1]', subAns='$subAns', isCorrect = (select if ('$subAns' = (select corAns
                                                                                                                                    from problem
                                                                                                                                    where probTypeNum='$probTypeNum' and questionNum='$array_1[$questionNum1]'), 1, 0)) ";
            $result = $connect->query($query);
        }
    }

?>

    <form action='./resolve.php' method='post'>
        <table border="1" id="rounded-corner">
            <thead style="background:#7BA7AB;">

                <tr>
                    <th>문제번호</th>
                    <td><?php echo $rows['questionNum']?></td>
                </tr>

                <tr>
                    <th>문제</th>
                    <td><?php echo $rows['question']?></td>
                </tr>
            </thead>

            <tr>
                <th>1.<input type='radio' name='subAns' value='1' id="id1"></th>
                <td><label for="id1"><?php echo $rows['view1']?></label></td>
            </tr>
            <tr>
                <th>2.<input type='radio' name='subAns' value='2' id="id2"></th>
                <td><label for="id2"><?php echo $rows['view2']?></label></td>
            </tr>
            <tr>
                <th>3.<input type='radio' name='subAns' value='3' id="id3"></th>
                <td><label for="id3"><?php echo $rows['view3']?></label></td>
            </tr>
            <tr>
                <th>4.<input type='radio' name='subAns' value='4' id="id4"></th>
                <td><label for="id4"><?php echo $rows['view4']?></label></td>
            </tr>
            <tr>
                <th>5.<input type='radio' name='subAns' value='5' id="id5"></th>
                <td><label for="id5"><?php echo $rows['view4']?></label></td>
            </tr>


            <input type="hidden" name='questionNum' value='<?php echo $questionNum?>'>
            <input type="hidden" name='probType' value='<?php echo $probType?>'>
            <input type="hidden" name='subject' value='<?php echo $subject?>'>
            <input type="hidden" name='probDate' value='<?php echo $probDate?>'>
            <input type="hidden" name='probTypeNum' value='<?php echo $probTypeNum?>'>

            <br>
            <br>
            <div class="d1" style="float:left;">
                <input type='button' name="next" value='종료' id="button" onclick="location.href='./od.php'" style="width:150px; margin-left:650px; margin-bottom:20px;">
            </div>
        </table>
        <br>
        <div style="left;">
            <input type='submit' name="next" value='정답체크' id="button" style="">
            <input type='button' name="next" value='다음' id="button" onclick="window.location.reload(true)" style="padding-left:48px; padding-right:48px;">




        </div>

    </form>
    <br>
    <br>



    <footer class="footer-container white-text-container">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>한석준</p>
                    <p>대구대학교 컴퓨터공학과</p>
                    <p>UI 제작</p>

                </div>

                <div class="col-md-4">
                    <p>김병진</p>
                    <p>대구대학교 컴퓨터 공학과</p>
                    <P>DB 담당</P>
                </div>

            </div>

        </div>

    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            navbarToggleSidebar();
        });

    </script>


    <script type="text/javascript" src="./main.faaf51f9.js"></script>
</body>

</html>
