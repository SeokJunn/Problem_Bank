<?

include "db_info.php";

$id=$_POST['id'];
$email=$_POST['email'];



$sql="select logid from user where email='$email'";

$result=mysql_query($sql,$conn);



$row=mysql_fetch_array($result);





if(!$row){

  echo "<script>alert('없는 ID입니다');history.back();</script>";

}else{

    echo "<script>alert('회원님의 PW는 "1234" 입니다.');
    location.replace("../login.php");
    </script>";

}



?>
