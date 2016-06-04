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

</head>
<SCRIPT Language="JavaScript">

</SCRIPT>
<body>

<!-- Navigation -->
<?php include 'header.php'; ?>
<br>
<!-- Header -->
<a name="about"></a>
<div class="intro-header">
    <div class="container">
        <form name="DD" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">


            <br>
            <br>


            <h1 align="left">ค้นหาโอกาสได้งานดีๆ </h1>
            <h1 align="left">จากบริษัทชั้นนำมากมาย</h1>
            <br>
            <button type="submit" class="btn btn-warning btn-lg pull-left">ค้นหางานที่ต้องการ</button>


            <!--
            <a class="btn btn-primary" type="submit" role="button">ค้นหา</a>
            -->


            <br>

        </form>
    </div>

</div>
<br>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-lg-8 about">
            <h1 class="page-header">งานที่แนะนำ</h1>
        <br>
            <br>
        <div >
            <div class="thumbnail">
                <img align="left" src="img/job1.jpg" width="150"  alt="">
                <div class="caption">
                    <h4><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รพ.เกษมราษฎร์ </a>
                    </h4><br>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ที่อยู่ : ต.บางแคเหนือ อ.บางแค จ.กรุงเทพมหานคร </p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตำแหน่ง : พนักงานทั่วไป</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ความพิการ : พิการทางการได้ยินหรือสื่อความหมาย </p>

                </div>

            </div>
        </div>

        <div >
            <div class="thumbnail">
                <img align="left" src="img/job2.jpg" width="150"  alt="">
                <div class="caption">
                    <h4><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โรงแรมเซ็นทารา วอเตอร์เกท พาวิลเลี่ยน </a>
                    </h4>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ที่อยู่ :ต.มักกะสัน อ.ราชเทวี จ.กรุงเทพมหานคร </p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตำแหน่ง : พนักงานปฏิบัติการ</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ความพิการ : พิการทางการได้ยินหรือสื่อความหมาย </p>
                </div>

            </div>
        </div>

            <div >
                <div class="thumbnail">
                    <img align="left" src="img/job3.jpg" width="150"  alt="">
                    <div class="caption">
                        <h4><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;บจก.นีโอ สุกี้ไทยเรสเทอรองส์</a>
                        </h4>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ที่อยู่ : ต.บางโคล่  จ.กรุงเทพมหานคร </p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตำแหน่ง : อาหารและเครื่องดื่ม</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ความพิการ : พิการทางการได้ยินหรือสื่อความหมาย </p>
                    </div>

                </div>
            </div>

            <div >
                <div class="thumbnail">
                    <img align="left" src="img/job4.jpg" width="150"  alt="">
                    <div class="caption">
                        <h4><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;บริษัท ท๊อป มารีไทม์ เซอร์วิส จำกัด</a>
                        </h4>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ที่อยู่ : ต.บางนา อ.บางนา จ.กรุงเทพมหานคร </p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตำแหน่ง : ธุรการ การจัดการทั่วไป</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ความพิการ : พิการทางการได้ยินหรือสื่อความหมาย </p>
                    </div>

                </div>
            </div>

            <div>
                <div class="thumbnail">
                    <img align="left" src="img/job5.png" width="150"  alt="">
                    <div class="caption">
                        <h4><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;บริษัทแอนเซอร์วันจำกัด</a>
                        </h4>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ที่อยู่ : ต.พลับพลา อ.วังทองหลาง จ.กรุงเทพมหานคร</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตำแหน่ง : โปรแกรมเมอร์</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ความพิการ : พิการทางการได้ยินหรือสื่อความหมาย </p>
                    </div>

                </div>
            </div>

    </div>
        <div class="col-xs-12 col-sm-4 col-lg-4">
            <ul class="about">

                <h1 class="page-header">สกิลที่ต้องพัฒนา</h1>
                <br>
                <div class="thumbnail borderThumb">
                   <div class="caption">
                       <h3>สกิลด้านเทคโนโลยี</h3>
                       <p>ควรพัฒนาทักษะทางด้านโปรแกรม Microsoft office...</p>
                       <a href="javascript:void(0)" class="btn btn-primary readMore roundBtn" role="button">อ่านเพิ่มเติม</a>
                    </div>
                </div>
                <div class="thumbnail borderThumb">
                    <div class="caption">
                        <h3>สกิลด้านกราฟฟิคดีไซน์</h3>
                        <p>ควรพัฒนาทักษะทางด้านโปรแกรม adobe photoshop...</p>
                        <a href="javascript:void(0)" class="btn btn-primary readMore roundBtn" role="button">อ่านเพิ่มเติม</a>
                     </div>
                </div>


                <div class="thumbnail borderThumb">
                    <div class="caption">
                        <h3>สกิลด้านภาษา </h3>
                        <p>ควรพัฒนาทักษะทางด้านการเขียนภาษาอังกฤษ...</p>
                        <a href="javascript:void(0)" class="btn btn-primary readMore roundBtn" role="button">อ่านเพิ่มเติม</a>
                    </div>

                </div>
            </ul>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">ข่าวสารล่าสุด

            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="thumbnail borderThumb"> <span><img   class="img-responsive" alt=""></span>
                <div class="caption">
                    <h3>ปลัด พม. เปิดงาน “รณรงค์ปีใหม่หยุดความพิการบนท้องถนน” </h3>
                    <h6>29 กุมภาพันธ์ 2559</h6>
                    <p>กรุงเทพฯ--29 ธ.ค.--กระทรวงการพัฒนาสังคมและความมั่นคงของมนุษย์ วันนี้ (๒๘ ธ.ค.๕๘) เวลา ๑๐.๓๐ น. นายไมตรี อินทุสุต
                        ปลัดกระทรวงการพัฒนาสังคมและความมั่นคง ของมนุษย์ (ปพม.) เป็นประธานในพิธีเปิดงาน "รณรงค์ปีใหม่หยุดความพิการบนท้องถนน"...</p>
                    <a class="btn btn-primary" href="detail-social_1.php">อ่านต่อ<span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="thumbnail borderThumb">  <span><img  class="img-responsive" alt=""></span>
                <div class="caption">
                    <h3>ประชาสัมพันธ์ข่าวอบรมอาชีพสำหรับคนพิการ</h3>
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
                    <h3>‘น้องทาม’ หนูน้อยไร้แขน คนพิการต้นแบบปี 58</h3>
                    <h6>4 ธันวาคม 2558</h6>
                    <p>พม.ร่วมกับภาคีเครือข่ายจัดงานวันคนพิการสากล มอบโล่คนพิการต้นแบบให้ ‘น้องทาม’ หนูน้อยไร้แขนชาวพิษณุโลกที่ร่วมกิจกรรมปั่นเพื่อแม่ ส่วน ‘มาดามแป้ง-นวลพรรณ ล่ำซำ’
                        รับรางวัลองค์กรธุรกิจสนับสนุนงานด้านคนพิการดีเด่นต่อเนื่อง... เมื่อวันที่ 3 ธ.ค.2558 ที่ห้องรอยัลจูบิลี่ บอลรูม เมืองทองธานี กรมส่งเสริม...</p>
                    <a class="btn btn-primary" href="detail-social_3.php">อ่านต่อ <span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
        </div>
    </div>

</div>



<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
