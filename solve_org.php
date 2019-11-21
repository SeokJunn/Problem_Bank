<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>

<body>

    <?php
            $i = 1;
    
            $connect = mysqli_connect("220.149.13.245:3306", "root", "1234", "test") or die("db연결 실패");
        
            
                
            $probType = "기능/기술(기사)"; #$_GET['probType'];
            $subject = "정보처리기사"; #$_GET['subject'];
            $probDate = "190303"; #$_GET['probDate'];
            
            #$query = "select * from problem where probType="기능/기술(기사)" and subject="정보처리기사" and probDate="190303""
            $query = " select questionNum, question, view1, view2, view3, view4, view5 from problem
                    where probType='$probType' and subject='$subject' and probDate='$probDate' and questionNum = '$i' ";
            $result = $connect -> query($query);
            $rows = mysqli_fetch_assoc($result);
            
        
            #$obj = simplexml_load_file('./problem.xml');
            #print_r($obj);

            header("Content-Type: text/html; charset=UTF-8");
            $xml_string = file_get_contents('./problem.xml');
            $xml = simplexml_load_string($xml_string);
            
        
        ?>
    
    <table border="1">
        <tr>
            <th>문제번호</th>
            <td><?php echo $xml->row[$i]->questionNum ?></td>
        </tr>

        <tr>
            <th>문제</th>
            <td><?php echo $xml->row[$i]->question?></td>
        </tr>
        <tr>
            <th>보기1</th>
            <td><?php echo $xml->row[$i]->view1?></td>
        </tr>
        <tr>
            <th>보기2</th>
            <td><?php echo $xml->row[$i]->view2?></td>
        </tr>
        <tr>
            <th>보기3</th>
            <td><?php echo $xml->row[$i]->view3?></td>
        </tr>
        <tr>
            <th>보기4</th>
            <td><?php echo $xml->row[$i]->view4?></td>
        </tr>
        <tr>
            <th>보기5</th>
            <td><?php echo $xml->row[$i]->view5?></td>
        </tr>

    </table>

   
    <form method="post">
        <input type="submit" name="test" id="test" value="다음문제" action="<?php echo testfun() ?>" /><br />
    </form>
    



</body>

</html>
