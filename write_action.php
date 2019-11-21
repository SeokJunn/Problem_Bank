<?php
                $connect = mysqli_connect("220.149.13.245", "root", "1234", "test2") or die("fail");
                
                $id = $_GET['name'];                      //Writer
                #$pw = $_GET['pw'];                        //Password
                $title = $_GET['title'];                  //Title
                $content = $_GET['content'];              //Content
                $date = date('Y-m-d H:i:s');            //Date
 
                $URL = './qna.php';                   //return URL
  
                $query = "insert into board (number,title, content, id, pw, date) 
                        values(NULL,'$title', '$content', '$id', '', '$date')";
 
                $result = $connect->query($query);
                if($result){
?>                  <script>
                        alert("<?php echo "글이 등록되었습니다."?>");
                        location.replace("<?php echo $URL?>");
                    </script>
<?php
                }
                else{
                        echo "FAIL";
                }
 
                mysqli_close($connect);
?>