<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>main page</title>
    

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
 <link rel="stylesheet" href="stylemp.css"> 
 <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
 <link href="carousel.css" rel="stylesheet">
  </head>
  
  <body>
   
     <?php include 'header.php';?>

     <!-- Carousel
    ================================================== -->
    <center><div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
        <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        
        <div class="item">
          <img class="second-slide" src="img/slide2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>ปลัด พม.  “รณรงค์ปีใหม่หยุดความพิการบนท้องถนน”</h1>
              <p>กรุงเทพฯ--29 ธ.ค.--กระทรวงการพัฒนาสังคมและความมั่นคงของมนุษย์ วันนี้ (๒๘ ธ.ค.๕๘)</p>
              <p><a class="btn btn-lg btn-primary" href="detail-social_1.php" role="button">ดูรายละเอียด</a></p>
            </div>
          </div>
        </div>
		<div class="item active">
          <img class="first-slide" src="img/slide1.jpg" alt="First slide">;
          <div class="container">
            <div class="carousel-caption">
              <h1>ประชาสัมพันธ์ข่าวอบรมอาชีพสำหรับคนพิการ</h1>
              <p>ข่าวประชาสัมพันธ์ เกี่ยวกับอาชีพ สำหรับคนพิการ รับด่วนจำนวนจำกัด ปิดรับสมัครวันที่ 28 นี้</p>
              <p><a class="btn btn-lg btn-primary" href="detail-social_2.php" role="button">ดูรายละเอียด</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="img/slide3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>‘น้องทาม’ คนพิการต้นแบบปี 58</h1>
              <p>พม.ร่วมกับภาคีเครือข่ายจัดงานวันคนพิการสากล มอบโล่คนพิการต้นแบบให้ ‘น้องทาม’</p>
              <p><a class="btn btn-lg btn-primary" href="detail-social_3.php" role="button">ดูรายละเอียด</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div></center>
   <!-- /.carousel -->


    
	
	<div class="col-lg-12">
                    <h1 class="page-header"><center>
					งานที่แนะนำ</center></h1>
                </div>
                <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/job1.jpg" width="150"  alt="">
                            <div class="caption">
                                <h4><a href="#">รพ.เกษมราษฎร์ </a>
                                </h4>
                                <p>ที่อยู๋ : ต.บางแคเหนือ อ.บางแค จ.กรุงเทพมหานคร </p>
								<p>ตำแหน่ง : พนักงานทั่วไป</p>
								<p>ความพิการ : พิการทางการได้ยินหรือสื่อความหมาย </p>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                       <div class="thumbnail">
                            <img src="img/job2.jpg" width="150"  alt="">
                            <div class="caption">
                                <h4><a href="#">โรงแรมเซ็นทารา วอเตอร์เกท พาวิลเลี่ยน </a>
                                </h4>
                                <p>ที่อยู๋ :ต.มักกะสัน อ.ราชเทวี จ.กรุงเทพมหานคร </p>
								<p>ตำแหน่ง : พนักงานปฏิบัติการ</p>
								<p>ความพิการ : พิการทางการได้ยินหรือสื่อความหมาย </p>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/job3.jpg" width="150"  alt="">
                            <div class="caption">
                                <h4><a href="#">บจก.นีโอ สุกี้ไทยเรสเทอรองส์</a>
                                </h4>
                                <p>ที่อยู๋ : ต.บางโคล่ อ.บางคอแหลม จ.กรุงเทพมหานคร </p>
								<p>ตำแหน่ง : อาหารและเครื่องดื่ม</p>
								<p>ความพิการ : พิการทางการได้ยินหรือสื่อความหมาย </p>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/job4.jpg" width="150"  alt="">
                            <div class="caption">
                                <h4><a href="#">บริษัท ท๊อป มารีไทม์ เซอร์วิส จำกัด</a>
                                </h4>
                                <p>ที่อยู๋ : ต.บางนา อ.บางนา จ.กรุงเทพมหานคร </p>
								<p>ตำแหน่ง : ธุรการ การจัดการทั่วไป</p>
								<p>ความพิการ : พิการทางการได้ยินหรือสื่อความหมาย </p>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/job5.png" width="150"  alt="">
                            <div class="caption">
                                <h4><a href="#">บริษัทแอนเซอร์วันจำกัด</a>
                                </h4>
                                <p>ที่อยู๋ : ต.พลับพลา อ.วังทองหลาง จ.กรุงเทพมหานคร</p>
								<p>ตำแหน่ง : โปรแกรมเมอร์</p>
								<p>ความพิการ : พิการทางการได้ยินหรือสื่อความหมาย </p>
                            </div>
                            
                        </div>
                    </div>
                    

                    <div class="col-sm-4 col-lg-4 col-md-4">
                       
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <a class="btn btn-primary" target="_blank" href="">ดูเพิ่มเติม</a>
                    </div>

                </div>
    <div class="container marketing">

     

     
      <footer>
            
        <p class="pull-right"><a href="#">Back to top</a></p>
        
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </body>
</html>
