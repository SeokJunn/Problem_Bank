<?php
    $connect = mysqli_connect("220.149.13.245:3306", "root", "1234", "test2") or die("db연결 실패");

    $probTypeNum = $_POST['probTypeNum'];
    $questionNum = $_POST['questionNum'];
    $subAns = $_POST['subAns'];
    

    $query = " insert into submit (id, probTypeNum, questionNum, subAns, isCorrect) 
                values ('test', '$probTypeNum', '$questionNum', '$subAns', (select if ('$subAns'' = (select corAns
                                                                                                    from problem
                                                                                                    where probTypeNum='$probTypeNum' and questionNum='$questionNum'), 1, 0))) ";
    
    $result = $connect->query($query);
?>
