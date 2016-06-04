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

    <title>Landing Page - Start Bootstrap Theme</title>

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
<?php include 'header.php'; ?>

<br>
<!-- Header -->
<a name="about"></a>
       
<!-- /.container -->
<br>
<br>
<br>
<br>
    
<!-- Menu -->
                        <div class="" id="menu_top" style="width:auto;height:100px;background-color:grey;"></div>
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
                <button type="submit" class="btn btn-warning btn-lg pull-left" style="width:150px">ผู้พิการ</button>
            <button type="submit" class="btn btn-warning btn-lg pull-left" style="width:150px;margin-left:20px">ผู้ประกอบการ</button>


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
                <img class="circle_img" src="images/office_bag.png">
                <h4 class="service-heading">ค้นหางาน</h4>
                <p class="text-muted">เว็บไซต์ของเรามีงานจากบริษัทกว่า200 งานรอคุณอยู่ หากคุณต้องการที่จะหางาน สามารถค้นหางานได้ที่นี</p>
            </div>
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                <img class="circle_img" src="images/office_bag.png">
                <h4 class="service-heading">สร้างโปรไฟล์</h4>
                <p class="text-muted">คุณอยากได้งานที่เงินเดือนสูงใช่ไหม คุณสามารถสร้างโปรไฟล์เพื่อสมัครงานได้ที่นี</p>
            </div>
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-newspaper-o fa-stack-1x fa-inverse"></i>
                    </span>
                <img class="circle_img" src="images/office_bag.png">
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
            <button class="col-md-4 button_big" style="background-color:#f3f3f3;">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-search fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading">ค้นหางาน</h4>
                <p class="text-muted">เว็บไซต์ของเรามีงานจากบริษัทกว่า200 งานรอคุณอยู่ หากคุณต้องการที่จะหางาน สามารถค้นหางานได้ที่นี</p>
            </button>
              <button class="col-md-4 button_big">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading">สร้างโปรไฟล์</h4>
                <p class="text-muted">คุณอยากได้งานที่เงินเดือนสูงใช่ไหม คุณสามารถสร้างโปรไฟล์เพื่อสมัครงานได้ที่นี</p>
            </button>
              <button class="col-md-4 button_big">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-newspaper-o fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading">จ้างงานคนพิการ</h4>
                <p class="text-muted">ค้นหาคนพิการที่ตรงที่ตรงต่อความสามารถและอยู่ใกล้สถานที่ทำงาน เพื่อความสะดวกของทั้งสองฝ่าย</p>
            </button>
        </div>
    </div>
    
    <!-- รูปบริการต่างๆ -->
    <div class="container">
           <div class="intro-header" style="padding:50px">

            <br>
            <br>

                <h1 align="left">ค้นหาโอกาสได้งานดีๆ </h1>
                <h1 align="left">จากบริษัทชั้นนำมากมาย</h1>
                <br>
                <button type="submit" class="btn btn-warning btn-lg pull-left">ค้นหางานที่ต้องการ</button>
                <br>
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
<section  class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">ทักษะที่ต้องพัฒนา</h2>
                <h3 class="section-subheading text-muted">ยังมีอีกหลายทักษะที่คุณต้องพัฒนาเพื่อโอกาสการทำงานที่มากขึ้น</h3>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/roundicons.png" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>สกิลด้านเทคโนโลยี</h4>
                    <p class="text-muted">ควรพัฒนาทักษะทางด้านโปรแกรม Microsoft office...</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/startup-framework.png" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>สกิลด้านกราฟฟิคดีไซน์</h4>
                    <p class="text-muted">ควรพัฒนาทักษะทางด้านโปรแกรม adobe photoshop...</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/treehouse.png" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>สกิลด้านภาษา</h4>
                    <p class="text-muted">ควรพัฒนาทักษะทางด้านการเขียนภาษาอังกฤษ...</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/golden.png" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>สกิลด้านการสื่อสาร</h4>
                    <p class="text-muted">การโน้มน้าวจิตใจคน การชักจูงผู้คน</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/escape.png" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>สกิลความเป็นผู้นำ</h4>
                    <p class="text-muted">รู้จักบริหารจัดการลูกทีม ควบคุมงาน..</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/dreams.png" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>สกิลด้านการขับรถ</h4>
                    <p class="text-muted">มีใบขับขี่</p>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>


<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
