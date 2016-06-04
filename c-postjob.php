<?php
session_start();
ob_start();
error_reporting(0);
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
	<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<?php
Header("Cache-Control: must-revalidate");

$offset = 60 * 60 * 24 * 3;
$ExpStr = "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
Header($ExpStr);
?>


    
<body><?php include("c-navigation.php");?>
<br>
    <form method="post" action="c-postjob-preview.php">
        
<?php    
	    $servername = "localhost";
		$name = "root";
		$userpassword = "";
		$dbname = "senior_project";
		$conn = mysqli_connect($servername,$name,$userpassword,$dbname);
        mysqli_set_charset($conn, "utf8");
        $sql = "SELECT * FROM cinfo WHERE cid = '".$_SESSION["cid"]."'";
		$objQuery = mysqli_query($conn,$sql);
		$objResult = mysqli_fetch_array($objQuery);
        $cname = "";
        $cname = $objResult["cname"];
        $cpic = "";
        $cpic = $objResult["cpic"];
    //    echo $objResult["cname"];
        echo $_SESSION["hrname"]; ?> &nbsp;&nbsp;&nbsp; <?php
        echo $_SESSION["hrlastname"]; ?> &nbsp;&nbsp; <?php
        echo $_SESSION["cid"];
?>    
        
		<br><br>
<div class="container">
    <div class="row">
        <br><br>
        <ul class="nav nav-pills nav-justified">
        
        </ul>   ​​
        
         <div class="panel panel-primary">
        <div class="panel-heading">
        <h3 class="panel-title">ประกาศรับสมัครงาน</h3>
        </div>
        <div class="panel-body">
        <div class="container">
        <form method="post" action="register-2.php">
        <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2" style="text-align:right">
                    <br>
                    <br>
                    บริษัท :  
                    </div>
                    <div class="col-lg-3">
                    <br>
                    <br><input name="cname" type="text" value="<?php echo $objResult["cname"]; ?>" class="form-control" readonly>
                    </div>
                </div>
                
<br>
  <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2"  style="text-align:right">
                    ตำแหน่ง :
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                       <input class="form-control" name="jname" type="text" width="500">
                    </div>
                </div>
                </div>
        <!-- เออหวะะะ อย่างงี้ต้องมีหน้า preview เช็คความถูกต้องก่อนโพสอีกหน้านึงปะวะ OMGGG -->
        
        <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2"  style="text-align:right">
                    ประเภทการจ้าง : 
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                       <select name="jtype" class="form-control">
                        <option value="ทุกประเภทการจ้าง">ทุกประเภทการจ้าง</option>
                        <option value="typefulltime">งานประจำ (full time)</option>
                        <option value="typeparttime">งานชั่วคราว (part time)</option>
                        <option value="typeintern">ฝึกงาน (internship)</option>
                        <option value="typefreelance">งานอิสระ (freelance)</option>
                    </select>
                    </div>
                </div>
                </div>


         <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2"  style="text-align:right">
                    สายงาน :
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                       <select name="jposi" class="form-control">
                        <option value="ทุกตำแหน่ง">ทุกตำแหน่ง</option>
                        <option value="posimarketing">การตลาด (marketing)</option>
                        <option value="posipr">ประชาสัมพันธ์ (PR)</option>
                        <option value="posiprod">การผลิต (production)</option>
                        <option value="posiedu">การศึกษา/วิชาการ (education)</option>
                        <option value="posilogistic">ขนส่ง (logistic)</option>
                        <option value="posisale">ฝ่ายขาย (sales)</option>
                        <option value="posiservice">บริการลูกค้า (customer service)</option>
                        <option value="posipurchase">ฝ่ายจัดซื้อ (purchasing)</option>
                        <option value="positrahot">ท่องเที่ยวและโรงแรม (travel and hotel)</option>
                        <option value="posifood">อาหารและเครื่องดื่ม (food and beverage)</option>
                        <option value="posibankmoney">การเงินและธนาคาร (finance and banking)</option>
                        <option value="posihr">ทรัพยากรบุคคล (human resource)</option>
                        <option value="posispec">บริการเฉพาะทาง (specialist)</option>
                        <option value="posiacct">บัญชี (accounting)</option>
                        <option value="posigov">หน่วยงานราชการ (government agency)</option>
                        <option value="posihlthbty">โภชนาการ/สุขภาพ/ความงาม (health and beauty)</option>
                        <option value="posidesign">ออกแบบ (design)</option>
                        <option value="posimedia">สื่อและโฆษณา (media and advertisement)</option>
                        <option value="posiit">ไอที (IT)</option>
                        <option value="posiothers">อื่นๆ (others)</option>
                 </select>
                    </div>
                </div>
                </div>

 <!-- /.row -->
                <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-3"  style="text-align:right">
                    ประเภทความพิการที่รับสมัคร :
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                       <select name="jdistype" class="form-control">
                        <option value="ทุกประเภทความพิการ">ทุกประเภทความพิการ</option>
                        <option value="พิการทางการเห็น">พิการทางการเห็น</option>
                        <option value="พิการทางการได้ยินหรือสื่อความหมาย">พิการทางการได้ยินหรือสื่อความหมาย</option>
                        <option value="พิการทางร่างกายหรือการเคลื่อนไหว">พิการทางร่างกายหรือการเคลื่อนไหว</option>
                        <option value="พิการทางจิตใจหรือพฤติกรรม">พิการทางจิตใจหรือพฤติกรรม</option>
                        <option value="พิการทางสติปัญญา">พิการทางสติปัญญา</option>
                        <option value="พิการทางการเรียนรู้">พิการทางการเรียนรู้</option>
                        <option value="พิการทางออทิสติก">พิการทางออทิสติก</option>
                   
                 </select>
                    </div>
                </div>
                </div>

         <!-- /.row -->
                <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-3"  style="text-align:right">
                    ระดับการศึกษาขั้นต่ำที่ต้องการ :
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                      <select name="jedu" class="form-control">
                        <option value="อ่านออกเขียนได้">อ่านออกเขียนได้</option>
                        <option value="ประถมศึกษา">ประถมศึกษา</option>
                        <option value="มัธยมศึกษาตอนต้น(ม.3)">มัธยมศึกษาตอนต้น(ม.3)</option>
                        <option value="มัธยมศึกษาตอนปลาย(ม.6)">มัธยมศึกษาตอนปลาย(ม.6)</option>
                        <option value="ประกาศนียบัตรวิชาชีพ(ปวช.)">ประกาศนียบัตรวิชาชีพ(ปวช.)</option>
                        <option value="ประกาศนียบัตรวิชาชีพชั้นสูง(ปวส.)">ประกาศนียบัตรวิชาชีพชั้นสูง(ปวส.)</option>
                        <option value="ประกาศนียบัตรวิชาชีพเทคนิค(ปวท.)">ประกาศนียบัตรวิชาชีพเทคนิค(ปวท.)</option>
                        <option value="อนุปริญญา">อนุปริญญา</option>
                        <option value="ปริญญาตรี">ปริญญาตรี</option>
                        <option value="ปริญญาโท">ปริญญาโท</option>
                        <option value="ปริญญาเอก">ปริญญาเอก</option>
                    </select>
                    </div>
                </div>
                </div>

    <!-- /.row -->
                <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-3"  style="text-align:right">
                    จังหวัดในการหางาน:
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                     <select name="jprovince" class="form-control">
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
                    </select>
                    </div>
                </div>
       </div>
        <!-- /.row -->
                <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-3"  style="text-align:right">
                    คุณสมบัติ :
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                     <input name="jjd" type="text" class="form-control">
                    </div>
                </div>
                </div>
  <br>
        <!-- /.row -->
                <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-3"  style="text-align:right">
                    ประสบการณ์การทำงาน :
                    </div> 
                    <div class="col-lg-3">
                        
                     <input name="jexp" type="radio" value="1"> จำเป็น  &nbsp;&nbsp;&nbsp;
                     <input name="jexp" type="radio" value="0"> ไม่จำเป็น
                    
                </div>
                </div>
                <br><br>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-3"  style="text-align:right">
                    เงินเดือน :
                    </div> 
                    <div class="col-lg-3">
                      <select name="jsalary" required>
                        <option value="0-9,000 บาท">0 - 9,000 บาท</option>
                        <option value="9,001-15,000 บาท">9,001 - 15,000 บาท</option>
                        <option value="15,001-30,000 บาท">15,001 - 30,000 บาท</option>
                        <option value="30,001-50,000 บาท">30,001 - 50,000 บาท</option>
                        <option value="มากกว่า 50,000 บาท">มากกว่า 50,000 บาท</option>
                    </select>
                    
                </div>
                </div>
<br>
 <!-- /.row -->
                <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-3"  style="text-align:right">
                    เกี่ยวกับบริษัท :
                    </div> 
                    <div class="col-lg-3">
                      <input name="jabtcmp" type="text" class="form-control">
                    
                </div>
                </div>
<br>
<!-- /.row -->
                <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-3"  style="text-align:right">
                    ช่องทางการติดต่อกลับ :
                    </div> 
                    <div class="col-lg-3">
                      <input name="jcontact" type="text" class="form-control">
                    
                </div>
                </div>

          <div class="row">
                
                    <div class="col-lg-12" align="center"><br><br>
                    <button type="submit" class="btn btn-success">โพสต์ประกาศรับสมัครงาน</button>
                    <br><br>
                    </div>
                </div>
        </form>
</div>
</div>
    </form>
</body>
</html>