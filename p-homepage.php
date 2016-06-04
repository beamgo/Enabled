<html>
<head>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>หน้าหลัก- คนพิการ</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
   <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
</head>
</head>
<?php
Header("Cache-Control: must-revalidate");

$offset = 60 * 60 * 24 * 3;
$ExpStr = "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
Header($ExpStr);
?>
<body>

        <div class="row">
        <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
        <form class="navbar-form navbar-right" action="p-checklogin.php" method="post">
            <?// php echo $_SESSION["pid"]; ?>
            <div class="form-group">
            อีเมลล์ : <input name="pemail" type="text" class="form-control" placeholder="email คนพิการ">&nbsp;
            รหัสผ่าน : <input name="ppassword" class="form-control" type="password" required placeholder="รหัสผ่าน 8 - 15 ตัวอักษร">
          
            </div>
    
            <button type="submit" class="btn btn-default">เข้าสู่ระบบ</button><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            ยังไม่ได้เป็นสมาชิก? 
            &nbsp;&nbsp;
            <a href="p-register.php"> สมัครสมาชิกที่นี่</a>
        </form> 
        </div><!-- /.navbar-collapse -->
        </nav>
        </div><!-- .row -->
        
    
      <div class="container" style="background-image: url(banner-bg.jpg); height: 70%; width: 100%;"><font color="#FFFFFF">
    <div class="row">
    <div class="col-lg-2">
        </div>
    <div class="col-lg-4">
        <br><br><br><br>              
        <h3>ประกาศงานทั้งหมด </h3><br>
        </div></div>
        <div class="row">
            <div class="col-lg-2">
            </div>
        <div class="col-lg-4">
            
   	<form method="post" action="p-warnlogin.php">

	<!-- Job Type Dropdown -->
	งานประเภท :
	<select name="jtype" class="form form-control">
        				<option value="ทุกประเภทการจ้าง">ทุกประเภทการจ้าง</option>
                        <option value="งานประจำ (full time)">งานประจำ (full time)</option>
                      	<option value="งานชั่วคราว (part time)">งานชั่วคราว (part time)</option>
                        <option value="ฝึกงาน (internship)">ฝึกงาน (internship)</option>
                        <option value="งานอิสระ (freelance)">งานอิสระ (freelance)</option>
    </select><br>

	<!-- Job Position Dropdown -->
	ตำแหน่ง :
	<select name="jposi" class="form form-control">
        				<option value="ทุกตำแหน่ง">ทุกตำแหน่ง</option>
                        <option value="การตลาด (marketing)">การตลาด (marketing)</option>
                        <option value="ประชาสัมพันธ์ (PR)">ประชาสัมพันธ์ (PR)</option>
                        <option value="การผลิต (production)">การผลิต (production)</option>
                        <option value="การศึกษา/วิชาการ (education)">การศึกษา/วิชาการ (education)</option>
                        <option value="ขนส่ง (logistic)">ขนส่ง (logistic)</option>
                        <option value="ฝ่ายขาย (sales)">ฝ่ายขาย (sales)</option>
                        <option value="บริการลูกค้า (customer service)">บริการลูกค้า (customer service)</option>
                        <option value="ฝ่ายจัดซื้อ (purchasing)">ฝ่ายจัดซื้อ (purchasing)</option>
                        <option value="ท่องเที่ยวและโรงแรม (travel and hotel)">ท่องเที่ยวและโรงแรม (travel and hotel)</option>
                        <option value="อาหารและเครื่องดื่ม (food and beverage)">อาหารและเครื่องดื่ม (food and beverage)</option>
                        <option value="การเงินและธนาคาร (finance and banking)">การเงินและธนาคาร (finance and banking)</option>
                        <option value="ทรัพยากรบุคคล (human resource)">ทรัพยากรบุคคล (human resource)</option>
                        <option value="บริการเฉพาะทาง (specialist)">บริการเฉพาะทาง (specialist)</option>
                        <option value="บัญชี (accounting)">บัญชี (accounting)</option>
                        <option value="หน่วยงานราชการ (government agency)">หน่วยงานราชการ (government agency)</option>
                        <option value="โภชนาการ/สุขภาพ/ความงาม (health and beauty)">โภชนาการ/สุขภาพ/ความงาม (health and beauty)</option>
                        <option value="ออกแบบ (design)">ออกแบบ (design)</option>
                        <option value="สื่อและโฆษณา (media and advertisement)">สื่อและโฆษณา (media and advertisement)</option>
                        <option value="ไอที (IT)">ไอที (IT)</option>
                        <option value="อื่นๆ (others)">อื่นๆ (others)</option>
    </select><br>

	<!-- Education Level Dropdown -->

    ระดับการศึกษาขั้นต่ำ : 
    <select name="jedu" class="form form-control">
                        <option value="01">อ่านออกเขียนได้</option>
                      	<option value="02">ประถมศึกษา</option>
                        <option value="03">มัธยมศึกษาตอนต้น(ม.3)</option>
                        <option value="04">มัธยมศึกษาตอนปลาย(ม.6)</option>
                        <option value="05">ประกาศนียบัตรวิชาชีพ(ปวช.)</option>
                        <option value="06">ประกาศนียบัตรวิชาชีพชั้นสูง(ปวส.)</option>
                        <option value="07">ประกาศนียบัตรวิชาชีพเทคนิค(ปวท.)</option>
                        <option value="08">อนุปริญญา</option>
                        <option value="09">ปริญญาตรี</option>
                        <option value="10">ปริญญาโท</option>
                        <option value="11">ปริญญาเอก</option>
    </select><br><br><br><br>

            </div>

            <div class="col-lg-4">
	<!-- DisType Dropdown -->	
    ความพิการประเภท : 
    <select name="jdistype" class="form form-control">
        				<option value="ทุกประเภทความพิการ">ทุกประเภทความพิการ</option>
                        <option value="พิการทางการเห็น">พิการทางการเห็น</option>
                      	<option value="พิการทางการได้ยินหรือสื่อความหมาย">พิการทางการได้ยินหรือสื่อความหมาย</option>
                        <option value="พิการทางร่างกายหรือการเคลื่อนไหว">พิการทางร่างกายหรือการเคลื่อนไหว</option>
                        <option value="พิการทางจิตใจหรือพฤติกรรม">พิการทางจิตใจหรือพฤติกรรม</option>
                        <option value="พิการทางสติปัญญา">พิการทางสติปัญญา</option>
                        <option value="พิการทางการเรียนรู้">พิการทางการเรียนรู้</option>
                        <option value="พิการทางออทิสติก">พิการทางออทิสติก</option>
    </select><br>

	<!-- Province Dropdown -->
    สนใจทำงานในจังหวัด :
    <select name="jprovince" class="form form-control">
        				<option value="ทุกจังหวัด">ทุกจังหวัด</option>
                        <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                        <option value="กระบี่">กระบี่</option>
                        <option value="กาญจนบุรี">กาญจนบุรี</option>
                        <option value="กาฬสินธุ์">กาฬสินธุ์</option>
                        <option value="กำแพงเพชร">กำแพงเพชร</option>
                        <option value="ขอนแก่น">ขอนแก่น</option>
                        <option value="จันทบุรี">จันทบุรี</option>
                        <option value="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
                        <option value="ชลบุรี">ชลบุรี</option>
                        <option value="ชัยนาท">ชัยนาท</option>
                        <option value="ชัยภูมิ">ชัยภูมิ</option>
                        <option value="ชุมพร">ชุมพร</option>
                        <option value="เชียงราย">เชียงราย</option>
                        <option value="เชียงใหม่">เชียงใหม่</option>
                        <option value="ตรัง">ตรัง</option>
                        <option value="ตราด">ตราด</option>
                        <option value="ตาก">ตาก</option>
                        <option value="นครนายก">นครนายก</option>
                        <option value="นครปฐม">นครปฐม</option>
                        <option value="นครพนม">นครพนม</option>
                        <option value="นครราชสีมา">นครราชสีมา</option>
                        <option value="นครศรีธรรมราช">นครศรีธรรมราช</option>
                        <option value="นครสวรรค์">นครสวรรค์</option>
                        <option value="นนทบุรี">นนทบุรี</option>
                        <option value="นราธิวาส">นราธิวาส</option>
                        <option value="น่าน">น่าน</option>
                        <option value="บึงกาฬ">บึงกาฬ</option>
                        <option value="บุรีรัมย์">บุรีรัมย์</option>
                        <option value="ปทุมธานี">ปทุมธานี</option>
                        <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
                        <option value="ปราจีนบุรี">ปราจีนบุรี</option>
                        <option value="ปัตตานี">ปัตตานี</option>
                        <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option>
                        <option value="พังงา">พังงา</option>
                        <option value="พัทลุง">พัทลุง</option>
                        <option value="พิจิตร">พิจิตร</option>
                        <option value="พิษณุโลก">พิษณุโลก</option>
                        <option value="เพชรบุรี">เพชรบุรี</option>
                        <option value="เพชรบูรณ์">เพชรบูรณ์</option>
                        <option value="แพร่">แพร่</option>
                        <option value="พะเยา">พะเยา</option>
                        <option value="ภูเก็ต">ภูเก็ต</option>
                        <option value="มหาสารคาม">มหาสารคาม</option>
                        <option value="มุกดาหาร">มุกดาหาร</option>
                        <option value="แม่ฮ่องสอน">แม่ฮ่องสอน</option>
                        <option value="ยะลา">ยะลา</option>
                        <option value="ยโสธร">ยโสธร</option>
                        <option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
                        <option value="ระนอง">ระนอง</option>
                        <option value="ระยอง">ระยอง</option>
                        <option value="ราชบุรี">ราชบุรี</option>
                        <option value="ลพบุรี">ลพบุรี</option>
                        <option value="ลำปาง">ลำปาง</option>
                        <option value="ลำพูน">ลำพูน</option>
                        <option value="เลย">เลย</option>
                        <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                        <option value="สกลนคร">สกลนคร</option>
                        <option value="สงขลา">สงขลา</option>
                        <option value="สตูล">สตูล</option>
                        <option value="สมุทรปราการ">สมุทรปราการ</option>
                        <option value="สมุทรสงคราม">สมุทรสงคราม</option>
                        <option value="สมุทรสาคร">สมุทรสาคร</option>
                        <option value="สระแก้ว">สระแก้ว</option>
                        <option value="สระบุรี">สระบุรี</option>
                        <option value="สิงห์บุรี">สิงห์บุรี</option>
                        <option value="สุโขทัย">สุโขทัย</option>
                        <option value="สุพรรณบุรี">สุพรรณบุรี</option>
                        <option value="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
                        <option value="สุรินทร์">สุรินทร์</option>
                        <option value="หนองคาย">หนองคาย</option>
                        <option value="หนองบัวลำภู">หนองบัวลำภู</option>
                        <option value="อ่างทอง">อ่างทอง</option>
                        <option value="อุดรธานี">อุดรธานี</option>
                        <option value="อุทัยธานี">อุทัยธานี</option>
                        <option value="อุตรดิตถ์">อุตรดิตถ์</option>
                        <option value="อุบลราชธานี">อุบลราชธานี</option>
                        <option value="อำนาจเจริญ">อำนาจเจริญ</option>
    </select><br><br>

        <p align="right"><button type="submit" class="btn btn-default btn-lg btn-warning">ค้นหาคนพิการ <i class="fa fa-search fa-fw"></i></button></p>
	</div>
    </div> <!--End Row2 -->
    </form>
    </font>
    </div> <!--End Container-->
    <br>
          
               
     
    <?php   
          $servername = "localhost";
		  $name = "root";
		  $userpassword = "";
		  $dbname = "senior_project";
		  $conn = mysqli_connect($servername,$name,$userpassword,$dbname);
        mysqli_set_charset($conn, "utf8");
            
          $sql= "SELECT * FROM jobpost";
		  $objQuery = mysqli_query($conn,$sql);
    
             echo "<html> <h1>งานทั้งหมดในระบบ</h1><br></html>";
		  while($objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC)){ ?>
    <?php 
          $cid = $objResult["cid"];
          $sql2= "SELECT * FROM cinfo WHERE cid = $cid";
          $objQuery2 = mysqli_query($conn,$sql2);
          $objResult2 = mysqli_fetch_array($objQuery2,MYSQLI_ASSOC);
    ?>     


              <div class="container list-group">
                <div class="col-lg-12" style="background-color:#E6E8EC; padding-top:10px; border-radius:6px">
                <div style="padding:20px; font-size:20px">
                <div class="col-lg-3">
                <img src="image/<?php echo $objResult2["cpic"];?>" width="180px" height="180px" style="padding-bottom: 30px;">
                </div>
                <div class="col-lg-5">
                <h3 class="list-group-item-heading"><span class="glyphicon glyphicon-user"></span>
    
    
    <?php
                    echo $objResult["jname"];
                    ?></h3><br>
                    
    <span class="glyphicon glyphicon-home"></span> 
    <?php
                    echo $objResult2["cname"];
    ?>
    <br>  <span class="glyphicon glyphicon-map-marker"></span>
    <?php
                    echo $objResult["jprovince"]; ?>
                    </div>
                <div class="col-lg-4" style="padding: 55px; padding-right: 20px;">
                <p align="right">
                           <button class="btn btn-default btn-lg"><a href="p-warnlogin.php">รายละเอียดเพิ่มเติม</a></button></p>
                </div>
                </div></div></div>
    <?php
            }?>          
            
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>    
    
    </div></div>
</body>
</html>