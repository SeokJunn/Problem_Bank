<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="A responsive folded flyer-like restaurant menu with some 3D" />
    <meta name="keywords" content="css3, perspective, 3d, jquery, transform3d, responsive, template, restaurant, menu, leaflet, folded, flyer, concept" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,500|Arvo:700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
    <!--[if lte IE 8]><style>.support-note .note-ie{display:block;}</style><![endif]-->
</head>
    <style>
        dl, h4, dd {
            text-align: center;
        }
    </style>

<body>
    <div class="container">

        <!-- Codrops top bar -->
        <div class="codrops-top">
            <a href="../my.php">
                <strong>&laquo; 뒤로가기 </strong>
            </a>
            <span class="right">

            </span>
        </div>
        <!--/ Codrops top bar -->

        <!-- header -->
        <header id="header" class="skel-layers-fixed">

            <h1><a href="../main_logout.php">Prob Bank</a></h1>
        </header>

        <section class="main">

            <div id="rm-container" class="rm-container">

                <div class="rm-wrapper">

                    <div class="rm-cover">

                        <div class="rm-front">
                            <div class="rm-content">

                                <div class="rm-logo"></div>
                                <h2>영어 단어장</h2>
                                <h3>다양한 난이도</h3>
                                <h3>알파벳 순서</h3>

                                <a href="#" class="rm-button-open">View the Menu</a>
                                <div class="rm-info">
                                    <p>
                                        <strong>다양한 영어기출문제 풀기</strong><br>
                                        1주일 마다 업데이트<br>
                                    </p>
                                </div>

                            </div><!-- /rm-content -->
                        </div><!-- /rm-front -->

                        <div class="rm-back">
                            <div class="rm-content">
                                <h4>영단어</h4>
                                <dl>
                                    <?php
                                            $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2');

                                            
                                            $i = 0;
                                    
                                            $query = " select num, typeNum, word, meaning from wordlist where typeNum = 951 and num = '$i' ";
                                            $result = $connect->query($query);
                                            $rows = mysqli_fetch_array($result);
                                                                                            
                                        ?>
                                    <dt><a href="http://herbivoracious.com/2011/11/crostini-with-young-pecorino-grilled-figs-and-arugula-mint-pesto-recipe.html" class="rm-viewdetails" data-thumb="images/">
                                        <?php echo $rows['word']?> <br>

                                    </a></dt>
                                    <dd>
                                        <?php echo $rows['meaning']?> <br>
                                    </dd>

                                    <dd></dd>
                                    <dt></dt>
                                </dl>
                                
                                <dl>
                                    <?php
                                            $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2');

                                            
                                            $i = 2;
                                    
                                            $query = " select num, typeNum, word, meaning from wordlist where typeNum = 951 and num = '$i' ";
                                            $result = $connect->query($query);
                                            $rows = mysqli_fetch_array($result);
                                                                                            
                                        ?>
                                    <dt><a href="http://herbivoracious.com/2011/11/crostini-with-young-pecorino-grilled-figs-and-arugula-mint-pesto-recipe.html" class="rm-viewdetails" data-thumb="images/">
                                        <?php echo $rows['word']?> <br>

                                    </a></dt>
                                    <dd>
                                        <?php echo $rows['meaning']?> <br>
                                    </dd>

                                    <dd></dd>
                                    <dt></dt>
                                </dl>
                                
                                <dl>
                                    <?php
                                            $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2');

                                             
                                            
                                            $i = 3;
                                    
                                            $query = " select num, typeNum, word, meaning from wordlist where typeNum = 951 and num = '$i' ";
                                            $result = $connect->query($query);
                                            $rows = mysqli_fetch_array($result);
                                                                                            
                                        ?>
                                    <dt><a href="http://herbivoracious.com/2011/11/crostini-with-young-pecorino-grilled-figs-and-arugula-mint-pesto-recipe.html" class="rm-viewdetails" data-thumb="images/">
                                        <?php echo $rows['word']?> <br>

                                    </a></dt>
                                    <dd>
                                        <?php echo $rows['meaning']?> <br>
                                    </dd>

                                    <dd></dd>
                                    <dt></dt>
                                </dl>
                                
                                <dl>
                                    <?php
                                            $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2');

                                             
                                            
                                            $i = 4;
                                    
                                            $query = " select num, typeNum, word, meaning from wordlist where typeNum = 951 and num = '$i' ";
                                            $result = $connect->query($query);
                                            $rows = mysqli_fetch_array($result);
                                                                                            
                                        ?>
                                    <dt><a href="http://herbivoracious.com/2011/11/crostini-with-young-pecorino-grilled-figs-and-arugula-mint-pesto-recipe.html" class="rm-viewdetails" data-thumb="images/">
                                        <?php echo $rows['word']?> <br>

                                    </a></dt>
                                    <dd>
                                        <?php echo $rows['meaning']?> <br>
                                    </dd>

                                    <dd></dd>
                                    <dt></dt>
                                </dl>
                                
                                <dl>
                                    <?php
                                            $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2');

                                             
                                            
                                            $i = 5;
                                    
                                            $query = " select num, typeNum, word, meaning from wordlist where typeNum = 951 and num = '$i' ";
                                            $result = $connect->query($query);
                                            $rows = mysqli_fetch_array($result);
                                                                                            
                                        ?>
                                    <dt><a href="http://herbivoracious.com/2011/11/crostini-with-young-pecorino-grilled-figs-and-arugula-mint-pesto-recipe.html" class="rm-viewdetails" data-thumb="images/">
                                        <?php echo $rows['word']?> <br>

                                    </a></dt>
                                    <dd>
                                        <?php echo $rows['meaning']?> <br>
                                    </dd>

                                    <dd></dd>
                                    <dt></dt>
                                </dl>
                                
                                <dl>
                                    <?php
                                            $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2');

                                             
                                            
                                            $i = 6;
                                    
                                            $query = " select num, typeNum, word, meaning from wordlist where typeNum = 951 and num = '$i' ";
                                            $result = $connect->query($query);
                                            $rows = mysqli_fetch_array($result);
                                                                                            
                                        ?>
                                    <dt><a href="http://herbivoracious.com/2011/11/crostini-with-young-pecorino-grilled-figs-and-arugula-mint-pesto-recipe.html" class="rm-viewdetails" data-thumb="images/">
                                        <?php echo $rows['word']?> <br>

                                    </a></dt>
                                    <dd>
                                        <?php echo $rows['meaning']?> <br>
                                    </dd>

                                    <dd></dd>
                                    <dt></dt>
                                </dl>
                                
                                <dl>
                                    <?php
                                            $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2');

                                             
                                            
                                            $i = 7;
                                    
                                            $query = " select num, typeNum, word, meaning from wordlist where typeNum = 951 and num = '$i' ";
                                            $result = $connect->query($query);
                                            $rows = mysqli_fetch_array($result);
                                                                                            
                                        ?>
                                    <dt><a href="http://herbivoracious.com/2011/11/crostini-with-young-pecorino-grilled-figs-and-arugula-mint-pesto-recipe.html" class="rm-viewdetails" data-thumb="images/">
                                        <?php echo $rows['word']?> <br>

                                    </a></dt>
                                    <dd>
                                        <?php echo $rows['meaning']?> <br>
                                    </dd>

                                    <dd></dd>
                                    <dt></dt>
                                </dl>
                                
                                <dl>
                                    <?php
                                            $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2');

                                             
                                            
                                            $i = 8;
                                    
                                            $query = " select num, typeNum, word, meaning from wordlist where typeNum = 951 and num = '$i' ";
                                            $result = $connect->query($query);
                                            $rows = mysqli_fetch_array($result);
                                                                                            
                                        ?>
                                    <dt><a href="http://herbivoracious.com/2011/11/crostini-with-young-pecorino-grilled-figs-and-arugula-mint-pesto-recipe.html" class="rm-viewdetails" data-thumb="images/">
                                        <?php echo $rows['word']?> <br>

                                    </a></dt>
                                    <dd>
                                        <?php echo $rows['meaning']?> <br>
                                    </dd>

                                    <dd></dd>
                                    <dt></dt>
                                </dl>
                                
                                
                                


                            </div><!-- /rm-content -->
                            <div class="rm-overlay"></div>

                        </div><!-- /rm-back -->

                    </div><!-- /rm-cover -->

                    <div class="rm-middle">
                        <div class="rm-inner">
                            <div class="rm-content">
                                <h4>영단어</h4>
                                <dl>
                                    <?php
                                            $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2');

                                            
                                            $i = 200;
                                    
                                            $query = " select num, typeNum, word, meaning from wordlist where typeNum = 951 and num = '$i' ";
                                            $result = $connect->query($query);
                                            $rows = mysqli_fetch_array($result);
                                                                                            
                                        ?>
                                    <dt><a href="http://herbivoracious.com/2011/11/crostini-with-young-pecorino-grilled-figs-and-arugula-mint-pesto-recipe.html" class="rm-viewdetails" data-thumb="images/">
                                        <?php echo $rows['word']?> <br>

                                    </a></dt>
                                    <dd>
                                        <?php echo $rows['meaning']?> <br>
                                    </dd>

                                    <dd></dd>
                                    <dt></dt>
                                </dl>
                                
                                <dl>
                                    <?php
                                            $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2');

                                            
                                            $i = 201;
                                    
                                            $query = " select num, typeNum, word, meaning from wordlist where typeNum = 951 and num = '$i' ";
                                            $result = $connect->query($query);
                                            $rows = mysqli_fetch_array($result);
                                                                                            
                                        ?>
                                    <dt><a href="http://herbivoracious.com/2011/11/crostini-with-young-pecorino-grilled-figs-and-arugula-mint-pesto-recipe.html" class="rm-viewdetails" data-thumb="images/">
                                        <?php echo $rows['word']?> <br>

                                    </a></dt>
                                    <dd>
                                        <?php echo $rows['meaning']?> <br>
                                    </dd>

                                    <dd></dd>
                                    <dt></dt>
                                </dl>
                                
                                <dl>
                                    <?php
                                            $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2');

                                            
                                            $i = 202;
                                    
                                            $query = " select num, typeNum, word, meaning from wordlist where typeNum = 951 and num = '$i' ";
                                            $result = $connect->query($query);
                                            $rows = mysqli_fetch_array($result);
                                                                                            
                                        ?>
                                    <dt><a href="http://herbivoracious.com/2011/11/crostini-with-young-pecorino-grilled-figs-and-arugula-mint-pesto-recipe.html" class="rm-viewdetails" data-thumb="images/">
                                        <?php echo $rows['word']?> <br>

                                    </a></dt>
                                    <dd>
                                        <?php echo $rows['meaning']?> <br>
                                    </dd>

                                    <dd></dd>
                                    <dt></dt>
                                </dl>
                                
                                <dl>
                                    <?php
                                            $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2');

                                            
                                            $i = 203;
                                    
                                            $query = " select num, typeNum, word, meaning from wordlist where typeNum = 951 and num = '$i' ";
                                            $result = $connect->query($query);
                                            $rows = mysqli_fetch_array($result);
                                                                                            
                                        ?>
                                    <dt><a href="http://herbivoracious.com/2011/11/crostini-with-young-pecorino-grilled-figs-and-arugula-mint-pesto-recipe.html" class="rm-viewdetails" data-thumb="images/">
                                        <?php echo $rows['word']?> <br>

                                    </a></dt>
                                    <dd>
                                        <?php echo $rows['meaning']?> <br>
                                    </dd>

                                    <dd></dd>
                                    <dt></dt>
                                </dl>
                                
                                <dl>
                                    <?php
                                            $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2');

                                            
                                            $i = 204;
                                    
                                            $query = " select num, typeNum, word, meaning from wordlist where typeNum = 951 and num = '$i' ";
                                            $result = $connect->query($query);
                                            $rows = mysqli_fetch_array($result);
                                                                                            
                                        ?>
                                    <dt><a href="http://herbivoracious.com/2011/11/crostini-with-young-pecorino-grilled-figs-and-arugula-mint-pesto-recipe.html" class="rm-viewdetails" data-thumb="images/">
                                        <?php echo $rows['word']?> <br>

                                    </a></dt>
                                    <dd>
                                        <?php echo $rows['meaning']?> <br>
                                    </dd>

                                    <dd></dd>
                                    <dt></dt>
                                </dl>
                                
                                <dl>
                                    <?php
                                            $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2');

                                            
                                            $i = 205;
                                    
                                            $query = " select num, typeNum, word, meaning from wordlist where typeNum = 951 and num = '$i' ";
                                            $result = $connect->query($query);
                                            $rows = mysqli_fetch_array($result);
                                                                                            
                                        ?>
                                    <dt><a href="http://herbivoracious.com/2011/11/crostini-with-young-pecorino-grilled-figs-and-arugula-mint-pesto-recipe.html" class="rm-viewdetails" data-thumb="images/">
                                        <?php echo $rows['word']?> <br>

                                    </a></dt>
                                    <dd>
                                        <?php echo $rows['meaning']?> <br>
                                    </dd>

                                    <dd></dd>
                                    <dt></dt>
                                </dl>
                                
                                <dl>
                                    <?php
                                            $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2');

                                            
                                            $i = 206;
                                    
                                            $query = " select num, typeNum, word, meaning from wordlist where typeNum = 951 and num = '$i' ";
                                            $result = $connect->query($query);
                                            $rows = mysqli_fetch_array($result);
                                                                                            
                                        ?>
                                    <dt><a href="http://herbivoracious.com/2011/11/crostini-with-young-pecorino-grilled-figs-and-arugula-mint-pesto-recipe.html" class="rm-viewdetails" data-thumb="images/">
                                        <?php echo $rows['word']?> <br>

                                    </a></dt>
                                    <dd>
                                        <?php echo $rows['meaning']?> <br>
                                    </dd>

                                    <dd></dd>
                                    <dt></dt>
                                </dl>
                                
                                <dl>
                                    <?php
                                            $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2');

                                            
                                            $i = 207;
                                    
                                            $query = " select num, typeNum, word, meaning from wordlist where typeNum = 951 and num = '$i' ";
                                            $result = $connect->query($query);
                                            $rows = mysqli_fetch_array($result);
                                                                                            
                                        ?>
                                    <dt><a href="http://herbivoracious.com/2011/11/crostini-with-young-pecorino-grilled-figs-and-arugula-mint-pesto-recipe.html" class="rm-viewdetails" data-thumb="images/">
                                        <?php echo $rows['word']?> <br>

                                    </a></dt>
                                    <dd>
                                        <?php echo $rows['meaning']?> <br>
                                    </dd>

                                    <dd></dd>
                                    <dt></dt>
                                </dl>
                            </div><!-- /rm-content -->
                            <div class="rm-overlay"></div>
                        </div><!-- /rm-inner -->
                    </div><!-- /rm-middle -->

                    <div class="rm-right">

                        <div class="rm-front">

                        </div>

                        <div class="rm-back">
                            <span class="rm-close">Close</span>
                            <div class="rm-content">
                                <h4>영단어</h4>
                               <dl>
                                    <?php
                                            $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2');

                                            
                                            $i = 507;
                                    
                                            $query = " select num, typeNum, word, meaning from wordlist where typeNum = 951 and num = '$i' ";
                                            $result = $connect->query($query);
                                            $rows = mysqli_fetch_array($result);
                                                                                            
                                        ?>
                                    <dt><a href="http://herbivoracious.com/2011/11/crostini-with-young-pecorino-grilled-figs-and-arugula-mint-pesto-recipe.html" class="rm-viewdetails" data-thumb="images/">
                                        <?php echo $rows['word']?> <br>

                                    </a></dt>
                                    <dd>
                                        <?php echo $rows['meaning']?> <br>
                                    </dd>

                                    <dd></dd>
                                    <dt></dt>
                                </dl>
                                
                                <dl>
                                    <?php
                                            $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2');

                                            
                                            $i = 508;
                                    
                                            $query = " select num, typeNum, word, meaning from wordlist where typeNum = 951 and num = '$i' ";
                                            $result = $connect->query($query);
                                            $rows = mysqli_fetch_array($result);
                                                                                            
                                        ?>
                                    <dt><a href="http://herbivoracious.com/2011/11/crostini-with-young-pecorino-grilled-figs-and-arugula-mint-pesto-recipe.html" class="rm-viewdetails" data-thumb="images/">
                                        <?php echo $rows['word']?> <br>

                                    </a></dt>
                                    <dd>
                                        <?php echo $rows['meaning']?> <br>
                                    </dd>

                                    <dd></dd>
                                    <dt></dt>
                                </dl>
                                
                                <dl>
                                    <?php
                                            $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2');

                                            
                                            $i = 509;
                                    
                                            $query = " select num, typeNum, word, meaning from wordlist where typeNum = 951 and num = '$i' ";
                                            $result = $connect->query($query);
                                            $rows = mysqli_fetch_array($result);
                                                                                            
                                        ?>
                                    <dt><a href="http://herbivoracious.com/2011/11/crostini-with-young-pecorino-grilled-figs-and-arugula-mint-pesto-recipe.html" class="rm-viewdetails" data-thumb="images/">
                                        <?php echo $rows['word']?> <br>

                                    </a></dt>
                                    <dd>
                                        <?php echo $rows['meaning']?> <br>
                                    </dd>

                                    <dd></dd>
                                    <dt></dt>
                                </dl>
                                
                                <dl>
                                    <?php
                                            $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2');

                                            
                                            $i = 510;
                                    
                                            $query = " select num, typeNum, word, meaning from wordlist where typeNum = 951 and num = '$i' ";
                                            $result = $connect->query($query);
                                            $rows = mysqli_fetch_array($result);
                                                                                            
                                        ?>
                                    <dt><a href="http://herbivoracious.com/2011/11/crostini-with-young-pecorino-grilled-figs-and-arugula-mint-pesto-recipe.html" class="rm-viewdetails" data-thumb="images/">
                                        <?php echo $rows['word']?> <br>

                                    </a></dt>
                                    <dd>
                                        <?php echo $rows['meaning']?> <br>
                                    </dd>

                                    <dd></dd>
                                    <dt></dt>
                                </dl>
                                
                                <dl>
                                    <?php
                                            $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2');

                                            
                                            $i = 511;
                                    
                                            $query = " select num, typeNum, word, meaning from wordlist where typeNum = 951 and num = '$i' ";
                                            $result = $connect->query($query);
                                            $rows = mysqli_fetch_array($result);
                                                                                            
                                        ?>
                                    <dt><a href="http://herbivoracious.com/2011/11/crostini-with-young-pecorino-grilled-figs-and-arugula-mint-pesto-recipe.html" class="rm-viewdetails" data-thumb="images/">
                                        <?php echo $rows['word']?> <br>

                                    </a></dt>
                                    <dd>
                                        <?php echo $rows['meaning']?> <br>
                                    </dd>

                                    <dd></dd>
                                    <dt></dt>
                                </dl>
                                
                                <dl>
                                    <?php
                                            $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2');

                                            
                                            $i = 512;
                                    
                                            $query = " select num, typeNum, word, meaning from wordlist where typeNum = 951 and num = '$i' ";
                                            $result = $connect->query($query);
                                            $rows = mysqli_fetch_array($result);
                                                                                            
                                        ?>
                                    <dt><a href="http://herbivoracious.com/2011/11/crostini-with-young-pecorino-grilled-figs-and-arugula-mint-pesto-recipe.html" class="rm-viewdetails" data-thumb="images/">
                                        <?php echo $rows['word']?> <br>

                                    </a></dt>
                                    <dd>
                                        <?php echo $rows['meaning']?> <br>
                                    </dd>

                                    <dd></dd>
                                    <dt></dt>
                                </dl>
                                
                                <dl>
                                    <?php
                                            $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2');

                                            
                                            $i = 513;
                                    
                                            $query = " select num, typeNum, word, meaning from wordlist where typeNum = 951 and num = '$i' ";
                                            $result = $connect->query($query);
                                            $rows = mysqli_fetch_array($result);
                                                                                            
                                        ?>
                                    <dt><a href="http://herbivoracious.com/2011/11/crostini-with-young-pecorino-grilled-figs-and-arugula-mint-pesto-recipe.html" class="rm-viewdetails" data-thumb="images/">
                                        <?php echo $rows['word']?> <br>

                                    </a></dt>
                                    <dd>
                                        <?php echo $rows['meaning']?> <br>
                                    </dd>

                                    <dd></dd>
                                    <dt></dt>
                                </dl>
                                
                                
                                
                                <div class="rm-order">
                                    <p><strong>유용한 영단어장</strong> </p>
                                </div>
                            </div><!-- /rm-content -->
                        </div><!-- /rm-back -->

                    </div><!-- /rm-right -->
                </div><!-- /rm-wrapper -->

            </div><!-- /rm-container -->

        </section>

    </div>
    <!-- jQuery if needed -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/menu.js"></script>
    <script type="text/javascript">
        $(function() {

            Menu.init();

        });

    </script>
</body>

</html>
