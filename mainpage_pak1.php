<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <style type="text1/css">
        p.margin {
            margin: 4cm 4cm 3cm 4cm
        }

    </style>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Start Page</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
          type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

      <style>
        .button_big{
            background-color:#E0E0E0;border:0px;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            padding:10px;
        }
          .circle_img{
              border-radius: 100px;
              width:200px;
              height: 200px;
              margin-bottom:25px;
          }
    </style>


</head>
<SCRIPT Language="JavaScript">

</SCRIPT>
<body>

<!-- Navigation -->
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top " role="navigation">
    <div class="container">
            <a class="navbar-brand page-scroll" rel="home" href="#" title="Buy Sell Rent Everyting">
                <img style="max-width:100px; margin-top: -9px;"
                     src="img/logo-small.png">
            </a>
        <form class="navbar-form navbar-right" action="p-checklogin.php" method="post">
            <?// php echo $_SESSION["pid"]; ?>
            <div class="form-group">
                อีเมลล์ : <input name="email" type="text" class="form-control" placeholder="email ">&nbsp;
                รหัสผ่าน : <input name="password" class="form-control" type="password" required placeholder="รหัสผ่าน 8 - 15 ตัวอักษร">

            </div>

            <button type="submit" class="btn btn-default">เข้าสู่ระบบ</button><br>
        </form>
    </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">


            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<br>

<br>


<!-- Header -->
                <div class="intro-header" style="padding:50px">
           <div class="container">

        <form name="DD" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

            <br>
            <br>


                <h1 align="left">สังคมเพื่อคนพิการ</h1>
                <h1 align="left">ในการพัฒนาตนเอง เพื่อโอกาสในการหางาน</h1>
                <br>
                <h2 align="left">สมัครสมาชิก</h2>
                <button href="p-register.php" type="submit" class="btn btn-warning btn-lg pull-left" style="width:150px">ผู้พิการ</button>
                <button href="c-register.php" type="submit" class="btn btn-warning btn-lg pull-left" style="width:150px;margin-left:20px">ผู้ประกอบการ</button>

                <!--
                <a class="btn btn-primary" type="submit" role="button">ค้นหา</a>
                -->


                <br>
               </form>
            </div>

    </div>
<!-- เป้าหมาย -->
    <section>
        <div class="container" style="padding:100px;">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">เป้าหมาย</h2>
            </div>
        </div>
        <br>
        <div class="row text-center col-sm-12">
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-search fa-stack-1x fa-inverse"></i>
                    </span>

                <h4 class="service-heading">ค้นหางาน</h4>
                <p class="text-muted">เว็บไซต์ของเรามีงานจากบริษัทกว่า200 งานรอคุณอยู่ หากคุณต้องการที่จะหางาน สามารถค้นหางานได้ที่นี</p>
            </div>
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>

                <h4 class="service-heading">สร้างโปรไฟล์</h4>
                <p class="text-muted">คุณอยากได้งานที่เงินเดือนสูงใช่ไหม คุณสามารถสร้างโปรไฟล์เพื่อสมัครงานได้ที่นี</p>
            </div>
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-newspaper-o fa-stack-1x fa-inverse"></i>
                    </span>

                <h4 class="service-heading">จ้างงานคนพิการ</h4>
                <p class="text-muted">ค้นหาคนพิการที่ตรงที่ตรงต่อความสามารถและอยู่ใกล้สถานที่ทำงาน เพื่อความสะดวกของทั้งสองฝ่าย</p>
            </div>
        </div>
    </div>
        </section>

<!-- บริการของเรา -->
<section id="services" style="background:#7caaff; padding-top:65px;padding-bottom:120px;  background-image: url('img/slide1.jpg');background-attachment: fixed; background-position:center;
    background-attachment: fixed;">
    <div class="container">/
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading;" style="color:white;">บริการของเรา</h2>
            </div>
        </div>
        <br>
        <div class="row text-center col-sm-12"  style="margin:0px;padding:0;">
            <button onclick="click1()" class="col-md-4 button_big" style="background-color:white;" onmouseover="changeService(this)" value="findwork.jpg">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-search fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading">ค้นหางาน</h4>
                <p class="text-muted">เว็บไซต์ของเรามีงานจากบริษัทกว่า200 งานรอคุณอยู่ หากคุณต้องการที่จะหางาน สามารถค้นหางานได้ที่นี</p>
            </button>
              <button onclick="click1()" class="col-md-4 button_big" onmouseover="changeService(this)" value="createprofile.jpg">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading">สร้างโปรไฟล์</h4>
                <p class="text-muted">คุณอยากได้งานที่เงินเดือนสูงใช่ไหม คุณสามารถสร้างโปรไฟล์เพื่อสมัครงานได้ที่นี</p>
            </button>
              <button onclick="click1()" class="col-md-4 button_big" onmouseover="changeService(this)" value="hirepeople.jpg">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-newspaper-o fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading">จ้างงานคนพิการ</h4>
                <p class="text-muted">ค้นหาคนพิการที่ตรงที่ตรงต่อความสามารถและอยู่ใกล้สถานที่ทำงาน เพื่อความสะดวกของทั้งสองฝ่าย</p>
            </button>
        </div>
    </div>
    <script>
      function changeService(obj){
        var x = document.getElementsByClassName("button_big");
        x[0].style.backgroundColor = "#E0E0E0";
        x[1].style.backgroundColor = "#E0E0E0";
        x[2].style.backgroundColor = "#E0E0E0";
        obj.style.backgroundColor = "white";
          document.getElementById("service_img").style.backgroundImage = 'url("images/'+obj.value+'")';
      }
      function click() {
          alert ('กรุณาเข้าสู่ระบบ');
      }

    </script>

    <!-- รูปบริการต่างๆ -->
    <div class="container">

           <div id="service_img" style="padding:50px;background-image: url('images/findwork.jpg');background-size: 100%;background-position: center;  border-bottom-left-radius: 20px;
             border-bottom-right-radius: 20px;height:350px">

           </div>

    </div>


</section>
    <!-- ข่าวสารล่าสุด -->

    <div class="container">
    <div class="row">
        <div class="col-lg-12" style="text-align:center">
            <h2 class="page-header">ข่าวสารล่าสุด</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="thumbnail borderThumb"> <span><img   class="img-responsive" alt=""></span>
                <div class="caption">
                    <h4>ปลัด พม. เปิดงาน “รณรงค์ปีใหม่หยุดความพิการบนท้องถนน” </h4>
                    <h6>29 กุมภาพันธ์ 2559</h6>
                    <p> กรุงเทพฯ--29 ธ.ค.--กระทรวงการพัฒนาสังคมและความมั่นคงของมนุษย์ วันนี้ (๒๘ ธ.ค.๕๘) เวลา ๑๐.๓๐ น. นายไมตรี อินทุสุต
                        ปลัดกระทรวงการพัฒนาสังคมและความมั่นคง ของมนุษย์ (ปพม.) เป็นประธานในพิธีเปิดงาน "รณรงค์ปีใหม่หยุดความพิการบนท้องถนน"...</p>
                    <a class="btn btn-primary" href="detail-social_1.php">อ่านต่อ<span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="thumbnail borderThumb">  <span><img  class="img-responsive" alt=""></span>
                <div class="caption">
                    <h4>ประชาสัมพันธ์ข่าวอบรมอาชีพสำหรับคนพิการ</h4>
                    <h6>24 มภราคม 2558</h6>
                    <p>ข่าวประชาสัมพันธ์ เกี่ยวกับอาชีพ สำหรับคนพิการ รับด่วนจำนวนจำกัด (20 คนเท่านั้น) ปิดรับสมัครวันที่ 28 ธันวาคม 2558 ด้วย วิทยาลัยราชสุดา ร่วมกับโครงการ Workability จัดการอบรมอาชีพ จำนวน 4 สาขา ได้แก่ 1. งานธุรการและคอมพิวเตอร์ทั่วไป
                        2. งานพัฒนาสินค้าผลิตภัณฑ์ชุมชน 3. งานบริหารอาหาร...</p>
                    <a class="btn btn-primary" href="detail-social_2.php">อ่านต่อ <span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="thumbnail borderThumb">  <span><img class="img-responsive" alt=""> </span>
                <div class="caption">
                    <h4>‘น้องทาม’ หนูน้อยไร้แขน คนพิการต้นแบบปี 58</h4>
                    <h6>4 ธันวาคม 2558</h6>
                    <p>พม.ร่วมกับภาคีเครือข่ายจัดงานวันคนพิการสากล มอบโล่คนพิการต้นแบบให้ ‘น้องทาม’ หนูน้อยไร้แขนชาวพิษณุโลกที่ร่วมกิจกรรมปั่นเพื่อแม่ ส่วน ‘มาดามแป้ง-นวลพรรณ ล่ำซำ’
                        รับรางวัลองค์กรธุรกิจสนับสนุนงานด้านคนพิการดีเด่นต่อเนื่อง... เมื่อวันที่ 3 ธ.ค.2558 ที่ห้องรอยัลจูบิลี่ บอลรูม เมืองทองธานี กรมส่งเสริม...</p>
                    <a class="btn btn-primary" href="detail-social_3.php">อ่านต่อ <span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
        </div>
    </div>
    </div>

<!-- Portfolio Grid Section -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
