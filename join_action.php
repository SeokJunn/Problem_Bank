<?php
 
        $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2') or die("fail");
  
        $id=$_GET['id'];
        $name=$_GET['name'];
        $email=$_GET['email'];
        $pw=$_GET['pw'];
        $date = date('Y-m-d H:i:s');
  
        //입력받은 데이터를 DB에 저장
        $query = "insert into user (id, name, email, pw, date) 
                  values ('$id', '$name', '$email', '$pw', '$date')";
 
        $result = $connect->query($query);
         //저장이 됬다면 (result = true) 가입 완료
        if($result) {
        ?>      <script>
                alert('가입 되었습니다.');
                location.replace("./login.php");
                </script>
 <?php   }
        else{
?>              <script>
                         alert("중복 또는 아이디/비밀번호를 확인하세요");
                                 history.back();
                        </script>
 <?php   }
         mysqli_close($connect);
?>
 


