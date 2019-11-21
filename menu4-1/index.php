<?php
                $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2');
                $number = 27;

                session_start();
                $query = "select question, view1, view2, view3, view4, view5 from problem where questionNum =$number";
                $result = $connect->query($query);
                $rows = mysqli_fetch_assoc($result);
        ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Experimental Page Layout Inspired by Flipboard" />
    <meta name="keywords" content="flip, pages, flipboard, layout, responsive, web, web design, grid, ipad, jquery, css3, 3d, perspective, transitions, transform" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <script type="text/javascript" src="js/modernizr.custom.08464.js"></script>
    <script id="pageTmpl" type="text/x-jquery-tmpl">
        <div class="${theClass}" style="${theStyle}">
				<div class="front">
					<div class="outer">
						<div class="content" style="${theContentStyleFront}">
							<div class="inner">{{html theContentFront}}</div>
						</div>
					</div>
				</div>
				<div class="back">
					<div class="outer">
						<div class="content" style="${theContentStyleBack}">
							<div class="inner">{{html theContentBack}}</div>
						</div>
					</div>
				</div>
			</div>			
		</script>
</head>
<style>
    @import url(//fonts.googleapis.com/earlyaccess/nanumpenscript.css);
    
    div, p, h1, h2, a{
        font-family: 'Nanum Pen Script', cursive;
    }

</style>

<body>

    <header class="main-title">
        <strong>핵심 기출 문제</strong>
        <p> </p>
        <p><strong>최근 5년중 가장 많이 나온 문제들만</strong></p>
    </header>

    <div id="flip" class="container">

        <div class="f-page f-cover">
            <div class="cover-elements">
                <div class="logo">
                    PROBLEM
                    <a class="f-ref" href="http://www.flickr.com/photos/nasahqphoto/"></a>
                </div>
                <h1>by PROBBANK<span>MADE BY HAN</span>span></h1>
                <div class="f-cover-story"><span>PROBBANK</span>꼭 한번 풀어보세요</div>
            </div>
            <div class="f-cover-flip">&lt; Flip</div>
        </div>

        <div class="f-page">
            <div class="f-title">
                <a onclick="javascript:history.back()"> Previous Page</a>
                <h2 onclick="location.href='../main_logout.php'">PROB BANK</h2>
                <a onclick="javascript:history.forward()"> Foward Page</a>
            </div>

            <div class="box w-25 h-70" style="font-family:'nanum pen script'; font-size:3em;">

                <?php echo $rows['question']?> <br>
                <?php echo $rows['view1']?> <br>
                <?php echo $rows['view2']?> <br>
                <?php echo $rows['view3']?> <br>
                <?php echo $rows['view4']?> <br>
            </div>
            <?php
                $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2');
                $number = 25;

                
                $query = "select question, view1, view2, view3, view4, view5 from problem where questionNum =$number";
                $result = $connect->query($query);
                $rows = mysqli_fetch_assoc($result);
        ?>
            <div class="box w-50 h-70 box-b-l box-b-r" style="font-family:'nanum pen script'; font-size:3em;">


                <?php echo $rows['question']?> <br>
                <?php echo $rows['view1']?> <br>
                <?php echo $rows['view2']?> <br>
                <?php echo $rows['view3']?> <br>
                <?php echo $rows['view4']?> <br>
            </div>
            <?php
                $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2');
                $number = 21;

                
                $query = "select question, view1, view2, view3, view4, view5 from problem where questionNum =$number";
                $result = $connect->query($query);
                $rows = mysqli_fetch_assoc($result);
        ?>

            <div class="box w-25 h-70" style="font-family:'nanum pen script'; font-size:3em;">


                <?php echo $rows['question']?> <br>
                <?php echo $rows['view1']?> <br>
                <?php echo $rows['view2']?> <br>
                <?php echo $rows['view3']?> <br>
                <?php echo $rows['view4']?> <br>
            </div>

            <?php
                $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2');
                $number = 29;

                
                $query = "select question, view1, view2, view3, view4, view5 from problem where questionNum =$number";
                $result = $connect->query($query);
                $rows = mysqli_fetch_assoc($result);
        ?>
            <div class="box w-50 h-30 box-b-r title-top" style="font-family:'nanum pen script'; font-size:3em;">
                <?php echo $rows['question']?> <br>
                <?php echo $rows['view1']?> <br>
                <?php echo $rows['view2']?> <br>
                <?php echo $rows['view3']?> <br>
                <?php echo $rows['view4']?> <br>
            </div>

            <?php
                $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2');
                $number = 33;

                
                $query = "select question, view1, view2, view3, view4, view5 from problem where questionNum =$number";
                $result = $connect->query($query);
                $rows = mysqli_fetch_assoc($result);
        ?>

            <div class="box w-50 h-30 title-top" style="font-family:'nanum pen script'; font-size:3em;">
                <?php echo $rows['question']?> <br>
                <?php echo $rows['view1']?> <br>
                <?php echo $rows['view2']?> <br>
                <?php echo $rows['view3']?> <br>
                <?php echo $rows['view4']?> <br>
            </div>
        </div>

        <div class="f-page">
            <div class="f-title">
                <a onclick="javascript:history.back()"> Previous Page</a>
                <h2 onclick="location.href='../main_logout.php'">PROB BANK</h2>
                <a onclick="javascript:history.forward()"> Foward Page</a>
            </div>
            
            <?php
                $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2');
                $number = 40;

                
                $query = "select question, view1, view2, view3, view4, view5 from problem where questionNum =$number";
                $result = $connect->query($query);
                $rows = mysqli_fetch_assoc($result);
        ?>
            <div class="box w-70 h-50 box-b-r title-top box-img-left" style="font-family:'nanum pen script'; font-size:3em;">
                <?php echo $rows['question']?> <br>
                <?php echo $rows['view1']?> <br>
                <?php echo $rows['view2']?> <br>
                <?php echo $rows['view3']?> <br>
                <?php echo $rows['view4']?> <br>

            </div>
            
            <?php
                $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2');
                $number = 45;

                
                $query = "select question, view1, view2, view3, view4, view5 from problem where questionNum =$number";
                $result = $connect->query($query);
                $rows = mysqli_fetch_assoc($result);
        ?>
            <div class="box w-30 h-50" style="font-family:'nanum pen script'; font-size:3em;">
                <?php echo $rows['question']?> <br>
                <?php echo $rows['view1']?> <br>
                <?php echo $rows['view2']?> <br>
                <?php echo $rows['view3']?> <br>
                <?php echo $rows['view4']?> <br>

            </div>
                <?php
                $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2');
                $number = 65;

                
                $query = "select question, view1, view2, view3, view4, view5 from problem where questionNum =$number";
                $result = $connect->query($query);
                $rows = mysqli_fetch_assoc($result);
        ?>
            <div class="box w-30 h-50 box-b-r title-top" style="font-family:'nanum pen script'; font-size:3em;">
                <?php echo $rows['question']?> <br>
                <?php echo $rows['view1']?> <br>
                <?php echo $rows['view2']?> <br>
                <?php echo $rows['view3']?> <br>
                <?php echo $rows['view4']?> <br>
            </div>
            
                <?php
                $connect = mysqli_connect('220.149.13.245:3306', 'root', '1234', 'test2');
                $number = 75;

                
                $query = "select question, view1, view2, view3, view4, view5 from problem where questionNum =$number";
                $result = $connect->query($query);
                $rows = mysqli_fetch_assoc($result);
        ?>
            <div class="box w-70 h-50 title-top box-img-left" style="font-family:'nanum pen script'; font-size:3em;">
                <?php echo $rows['question']?> <br>
                <?php echo $rows['view1']?> <br>
                <?php echo $rows['view2']?> <br>
                <?php echo $rows['view3']?> <br>
                <?php echo $rows['view4']?> <br>

            </div>
        </div>

        <div class="f-page">
            <div class="f-title">
                <a onclick="javascript:history.back()"> Previous Page</a>
                <h2 onclick="location.href='../main_logout.php'">PROB BANK</h2>
                <a onclick="javascript:history.forward()"> Foward Page</a>
            </div>
            <div class="box w-30 h-60 box-b-r title-top">

            </div>
            <div class="box w-70 h-60 box-img-left title-top">


            </div>
            <div class="box w-40 h-40 box-img-left box-b-r title-top">


            </div>
            <div class="box w-30 h-40 box-b-r title-top">

            </div>
            <div class="box w-30 h-40 title-top">

            </div>
        </div>

        <div class="f-page f-cover-back">
            <div id="codrops-ad-wrapper">

            </div>
        </div>
    </div>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript">
        var $container = $('#flip'),
            $pages = $container.children().hide();

        Modernizr.load({
            test: Modernizr.csstransforms3d && Modernizr.csstransitions,
            yep: ['js/jquery.tmpl.min.js', 'js/jquery.history.js', 'js/core.string.js', 'js/jquery.touchSwipe-1.2.5.js', 'js/jquery.flips.js'],
            nope: 'css/fallback.css',
            callback: function(url, result, key) {

                if (url === 'css/fallback.css') {
                    $pages.show();
                } else if (url === 'js/jquery.flips.js') {
                    $container.flips();
                }

            }
        });

    </script>
</body>

</html>
