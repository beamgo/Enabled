<?php
session_start();
ob_start();
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
    <?php 
    
        $servername = "localhost";
		$name = "root";
		$userpassword = "";
		$dbname = "senior_project";
		$conn = mysqli_connect($servername,$name,$userpassword,$dbname);
        mysqli_set_charset($conn, "utf8");
        echo $_SESSION["hrname"]; ?> &nbsp;&nbsp;&nbsp; <?php
        echo $_SESSION["hrlastname"];
        echo $_SESSION["cid"];
    ?>
    
    
    
    
    
<body>
<br><br><br>
    
 <form method="post" action="c-result.php">
     <a href="c-mainbrowse.php">กลับสู่หน้าหลัก</a> <br>
     <a href="c-edit-1.php">แก้ไขข้อมูลส่วนตัว</a> <br>
     <a href="c-logout.php">ออกจากระบบ</a>
		<br><br>
<div class="container">
	<div class="row">
    	<ul class="nav nav-tabs">
 		<li role="presentation" class="active"><a href="c-browse.php">ค้นหาคนพิการ</a></li>
  		<li role="presentation"><a href="c-postjob.php">ประกาศรับสมัครงาน</a></li>
 <!--   <li role="presentation"><a href="register-3.php">ประวัติการทำงาน</a></li>
        <li role="presentation"><a href="register-4.php">สายอาชีพที่ต้องการ</a></li>
        <li role="presentation"><a href="register-5.php">ความพิการและอุปกรณ์</a></li>
        <li role="presentation"><a href="register-6.php">รูปถ่าย</a></li> -->
		</ul>
        <br><br><br>
         ค้นหาคนพิการที่...
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button><a href="c-postjob.php">ประกาศรับสมัครงาน</a></button>
        <br><br><br>
        
        สนใจงานประเภท : <select name="jtype">
        				<option value="ทุกประเภทการจ้าง">ทุกประเภทการจ้าง</option>
                        <option value="งานประจำ (full time)">งานประจำ (full time)</option>
                      	<option value="งานชั่วคราว (part time)">งานชั่วคราว (part time)</option>
                        <option value="ฝึกงาน (internship)">ฝึกงาน (internship)</option>
                        <option value="งานอิสระ (freelance)">งานอิสระ (freelance)</option>
        			</select>
        <br><br>
        
        สนใจตำแหน่ง : <select name="posi">
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
                 </select>
         <br><br>
        
        ความพิการประเภท : <select name="distype">
        				<option value="ทุกประเภทความพิการ">ทุกประเภทความพิการ</option>
                        <option value="การทางการเห็น">พิการทางการเห็น</option>
                      	<option value="พิการทางการได้ยินหรือสื่อความหมาย">พิการทางการได้ยินหรือสื่อความหมาย</option>
                        <option value="การทางร่างกายหรือการเคลื่อนไหว">พิการทางร่างกายหรือการเคลื่อนไหว</option>
                        <option value="พิการทางจิตใจหรือพฤติกรรม">พิการทางจิตใจหรือพฤติกรรม</option>
                        <option value="พิการทางสติปัญญา">พิการทางสติปัญญา</option>
                        <option value="พิการทางการเรียนรู้">พิการทางการเรียนรู้</option>
                        <option value="พิการทางออทิสติก">พิการทางออทิสติก</option>
        			</select>
         <br><br>
        ระดับการศึกษาขั้นต่ำ : <select name="edulevel">
                        <option value="อ่านออกเขียนได้">อ่านออกเขียนได้</option>
                      	<option value="ประถมศึกษา">ประถมศึกษา</option>
                        <option value="มัธยมศึกษาตอนต้น(ม.3)">มัธยมศึกษาตอนต้น(ม.3)</option>
                        <option value="มัธยมศึกษาตอนปลาย(ม.6)">มัธยมศึกษาตอนปลาย(ม.6)</option>
                        <option value="ประกาศนียบัตรวิชาชีพ(ปวช.)">ประกาศนียบัตรวิชาชีพ(ปวช.)</option>
                        <option value="ประกาศนียบัตรวิชาชีพชั้นสูง(ปวส.)">ประกาศนียบัตรวิชาชีพชั้นสูง(ปวส.)</option>
                        <option value="ประกาศนียบัตรวิชาชีพเทคนิค(ปวท.)">ประกาศนียบัตรวิชาชีพเทคนิค(ปวท.)</option>
                        <option value="อนุปริญญ">อนุปริญญา</option>
                        <option value="ปริญญาตรี">ปริญญาตรี</option>
                        <option value="ปริญญาโท">ปริญญาโท</option>
                        <option value="ปริญญาเอก">ปริญญาเอก</option>
        			</select>
         <br><br><br>
        สนใจทำงานในจังหวัด : <select name="preferprovince">
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
        
        <br><br><br>
        <a href="c-result.php"><button type="submit">ค้นหา</button></a>
        
         <br><br>
		

         
         
        
</div>
</div>
    </form>
    
    
       ผลลัพธ์การค้นหาคนพิการ
         <br><br>
    
    <form>
        <!--ที่จะไปหน้า c-detail.phpต่อ -->
    </form>
         
         <br><br><br><br><br>
        <br><br><br><br><br>
    
    
</body>
</html>