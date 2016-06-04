<!--หน้าสายอาชีพที่ต้องการ-->
<?php
session_start();
ob_start();
error_reporting(0);
?>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>รายละเอียดงาน- คนพิการ</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
   <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
</head>
<?php
Header("Cache-Control: must-revalidate");

$offset = 60 * 60 * 24 * 30;
$ExpStr = "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
Header($ExpStr);
?>
     <?php    
	   $servername = "localhost";
		$name = "root";
		$userpassword = "";
		$dbname = "senior_project";
		$conn =
        mysqli_connect($servername,$name,$userpassword,$dbname);
        mysqli_set_charset($conn, "utf8");

        $sql =  "UPDATE pexp SET 
                firmname = '$_POST[firmname]',
                position = '$_POST[position]', 
                start = '$_POST[start]', 
                end = '$_POST[end]'
                WHERE pid ='$_SESSION[pid]'";
    
        $objQuery = mysqli_query($conn,$sql);

    
        $sql2 =  "UPDATE ppersonal SET 
                exp = '$_POST[pexp]'
                WHERE pid ='$_SESSION[pid]'";
    
        $objQuery2 = mysqli_query($conn,$sql2);

        
    ?>
    
<body>
<?php include 'p-navigation.php';?>
        <br><br>

<div class="container">
    <div class="row">
        <br><br>
        <ul class="nav nav-pills nav-justified">
        <li class="disabled"><a >ขั้นตอนที่ 1 : ข้อมูลส่วนตัว</a></li>
        <li class="disabled"><a >ขั้นตอนที่ 2 : ประวัติการศึกษา</a></li>
         <li class="disabled"><a >ขั้นตอนที่ 3 : ประวัติการทำงาน</a></li>
         <li class="active"><a >ขั้นตอนที่ 4 : สายอาชีพที่ต้องการ</a></li>
         <li class="disabled"><a >ขั้นตอนที่ 5 : ความพิการและอุปกรณ์</a></li>
         <li class="disabled"><a >ขั้นตอนที่ 6 : รูปถ่าย</a></li>
        </ul>   ​​
        <div class="panel panel-primary">
        <div class="panel-heading">
        <h3 class="panel-title">สายอาชีพที่ต้องการ</h3>
        </div>
        <div class="panel-body">
        <div class="container">
        <form method="post" action="register-5.php">
        <div class="row">
        </div>
           <div class="row">
                    <div class="col-lg-4">
                    </div>
                    <div class="col-lg-3" style="text-align:left;">
                    <br>
                    <br>
                    ประเภทของงานที่ต้องการ* :  
                    </div>
                    <div class="col-lg-3">
                    <br>
                    <br><div class="form-group">
                    </div>
                </div>
                </div>    
             <!-- /.row -->
                <div class="row"><br>
                    <div class="col-lg-4">
                    </div>
                    <div class="col-lg-4"  style="text-align:left;">
                    <div class="form-group">
                    <input name="typefulltime" type="hidden" required value="0">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="typefulltime" type="checkbox" value="1"> งานประจำ (full time)<br>
                        
                        <input name="typeparttime" type="hidden" value="0">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="typeparttime" type="checkbox" value="1"> งานชั่วคราว (part time)<br>
                        
                        <input name="typeintern" type="hidden" value="0">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="typeintern" type="checkbox" value="1"> ฝึกงาน (internship)<br>
                        
                        <input name="typefreelance" type="hidden" value="0">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="typefreelance" type="checkbox" value="1"> งานอิสระ (freelance)<br>
                    </div>
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                   
                    </div>
                </div>
                </div>
         <div class="row">
                    <div class="col-lg-4">
                    </div>
                    <div class="col-lg-3" style="text-align:left;">
                    <br>
                    สายงานที่ต้องการ* :  
                    </div>
                    <div class="col-lg-3">
                    <br>
                    <br><div class="form-group">
                    </div>
                </div>
                </div>    
             <!-- /.row -->
                <div class="row">
                    <div class="col-lg-4">
                    </div>
                    <div class="col-lg-4"  style="text-align:left;">
                    <div class="form-group">
                    <input name="posimarketing" type="hidden" value="0" required>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posimarketing" type="checkbox" value="1"> การตลาด (marketing)<br>
            
                        <input name="posipr" type="hidden" value="0">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posipr" type="checkbox" value="1"> ประชาสัมพันธ์ (PR)<br>
                        
                        <input name="posiprod" type="hidden" value="0">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posiprod" type="checkbox" value="1"> การผลิต (production)<br>
                        
                        <input name="posiedu" type="hidden" value="0">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posiedu" type="checkbox" value="1"> การศึกษา/วิชาการ (education)<br>
                        
                        <input name="posilogistic" type="hidden" value="0">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posilogistic" type="checkbox" value="1"> ขนส่ง (logistic)<br>
                        
                        <input name="posisale" type="hidden" value="0">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posisale" type="checkbox" value="1"> ฝ่ายขาย (sales)<br>
                        
                        <input name="posiservice" type="hidden" value="0">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posiservice" type="checkbox" value="1"> บริการลูกค้า (customer service)<br>
                        
                        <input name="posipurchase" type="hidden" value="0">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posipurchase" type="checkbox" value="1"> ฝ่ายจัดซื้อ (purchasing) <br>
                        
                        <input name="positrahot" type="hidden" value="0">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="positrahot" type="checkbox" value="1"> ท่องเที่ยวและโรงแรม (travel and hotel)<br>
                        
                        <input name="posifood" type="hidden" value="0">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posifood" type="checkbox" value="1"> อาหารและเครื่องดื่ม (food and beverage)<br>
                        
                        <input name="posibankmoney" type="hidden" value="0">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posibankmoney" type="checkbox" value="1"> การเงินและธนาคาร (finance and banking)<br>
                        
                        <input name="posihr" type="hidden" value="0">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posihr" type="checkbox" value="1"> ทรัพยากรบุคคล (human resource)<br>
                        
                        <input name="posispec" type="hidden" value="0">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posispec" type="checkbox" value="1"> บริการเฉพาะทาง (specialist)<br>
                        
                        <input name="posiacct" type="hidden" value="0">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posiacct" type="checkbox" value="1"> บัญชี (accounting)<br>
                        
                        <input name="posigov" type="hidden" value="0">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posigov" type="checkbox" value="1"> หน่วยงานราชการ (government agency)<br>
                        
                        <input name="posihlthbty" type="hidden" value="0">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posihlthbty" type="checkbox" value="1"> โภชนาการ/สุขภาพ/ความงาม (health and beauty)<br>
                        
                        <input name="posidesign" type="hidden" value="0">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posidesign" type="checkbox" value="1"> ออกแบบ (design)<br>
                        
                        <input name="posimedia" type="hidden" value="0">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posimedia" type="checkbox" value="1"> สื่อและโฆษณา (media and advertisement)<br>
                        
                        <input name="posiit" type="hidden" value="0">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posiit" type="checkbox" value="1"> ไอที (IT)<br>
                        
                        <input name="posiothers" type="hidden" value="0">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posiothers" type="checkbox" value="1"> อื่นๆ (others)<br>
            
                    </div>
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                   
                    </div>
                </div>
                </div>
           <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-3" style="text-align:right">
                    <br>
                    <br>
                    เงินเดือนที่ต้องการ :  
                    </div>
                    <div class="col-lg-3">
                    <br>
                    <br><div class="form-group">
                    <select name="salaryprefer" required>
                        <option value="0-9,000 บาท">0 - 9,000 บาท</option>
                        <option value="9,001-15,000 บาท">9,001 - 15,000 บาท</option>
                        <option value="15,001-30,000 บาท">15,001 - 30,000 บาท</option>
                        <option value="30,001-50,000 บาท">30,001 - 50,000 บาท</option>
                        <option value="มากกว่า 50,000 บาท">มากกว่า 50,000 บาท</option>
                    </select>
                        
                        </div>
                </div>
                </div>    
		<!-- /.row -->
                 <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2"  style="text-align:right">
                    จังหวัด :
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                        <select name="preferprovince" class="form-control">
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
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-4" style="text-align:right">
                    คุณต้องการรับอีเมล์แจ้งตำแหน่งงานที่เหมาะสมหรือไม่* :  
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                       &nbsp;&nbsp;&nbsp; <input name="mailalert" required type="radio" value="1"> ต้องการ  &nbsp;&nbsp;&nbsp;<input name="mailalert" required type="radio" value="0"> ไม่ต้องการ
                    </div>
                </div>
                </div>
       
         
        <!-- /.row -->
                <div class="row">
                
                    <div class="col-lg-12" align="center"><br><br>
                    <button type="submit" class="btn btn-success">ถัดไป</button>
                    <br><br>
                    </div>
                </div>
        </form>
        <?php // echo $_SESSION["pid"];?>
        
</div>
</div>
        </div></div></div></body>
</html>