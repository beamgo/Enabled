<!--หน้าข้อมูลส่วนตัว-->
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

<title>แก้ไขข้อมูลส่วนตัว</title>
    
     <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
   <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/jquery.easing.min.js" type="text/javascript"></script>
    <meta charset="UTF-8">
     <!--   <script type="text/javascript">
            function noBack(){
                window.history.forward()
            }
             
            noBack();
            window.onload = noBack;
            window.onpageshow = function(evt) { if (evt.persisted) noBack() }
            window.onunload = function() { void (0) }
        </script>
        -->
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
		$conn = mysqli_connect($servername,$name,$userpassword,$dbname);
     mysqli_set_charset($conn, "utf8");
    
        $pemail = "";
        $ppassword = "";
     //   $pemail = $_SESSION["preg_email"];
    //    echo $pemail;
    //    $ppassword = $_SESSION["preg_pass"];
    //    echo $ppassword;
    
   // echo $_SESSION["pid"];
    //echo $_SESSION["pname"]; ?> &nbsp;&nbsp; <?php
    //echo $_SESSION["plastname"];
    
  
   

?> 
    
<body><?php include 'p-navigation.php';?>
<br><br><br>
<div class="container">
    <div class="row">
        <br><br>
        <ul class="nav nav-pills nav-justified">
        <li class="active"><a >ขั้นตอนที่ 1 : ข้อมูลส่วนตัว</a></li>
        <li class="disabled"><a >ขั้นตอนที่ 2 : ประวัติการศึกษา</a></li>
         <li class="disabled"><a >ขั้นตอนที่ 3 : ประวัติการทำงาน</a></li>
         <li class="disabled"><a >ขั้นตอนที่ 4 : สายอาชีพที่ต้องการ</a></li>
         <li class="disabled"><a >ขั้นตอนที่ 5 : ความพิการและอุปกรณ์</a></li>
         <li class="disabled"><a >ขั้นตอนที่ 6 : รูปถ่าย</a></li>
        </ul>   ​​    
    <?php
    
    $sql = "SELECT * FROM ppersonal WHERE pid = '".$_SESSION["pid"]."'";
		$objQuery = mysqli_query($conn,$sql);
		$objResult = mysqli_fetch_array($objQuery);
    
    ?>
    
    


        <br><br>
<div class="container">
    <div class="row">
        <br><br>
        
         <div class="panel panel-primary">
        <div class="panel-heading">
        <h3 class="panel-title">แก้ไขข้อมูลส่วนตัว</h3>
        </div>
        <div class="panel-body">
        <div class="container"><br><br>

        <form method="post" action="p-edit-2.php">
        <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2"  style="text-align:right">
                    คำนำหน้าชื่อ :
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                       <select name="ptitle" required class="form-control">

        <?php
    $the_key = $objResult["ptitle"]; // or whatever you want
    foreach(array(
        '' => 'เลือกคำนำหน้าชื่อ',
        'นาย' => 'นาย',
        'นางสาว' => 'นางสาว',
        'นาง' => 'นาง',
    ) as $key => $val){
        ?><option value="<?php echo $key; ?>"<?php
            if($key==$the_key)echo ' selected="selected"';
        ?>><?php echo $val; ?></option><?php
    }
?></select>
                    </div>
                </div>
                </div>
		

         <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2"  style="text-align:right">
                    ชื่อ :
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                       <input class="form-control" name="pname" type="text" required value="<?php echo $objResult["pname"]; ?>" >
                    </div>
                </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2"  style="text-align:right">
                    นามสกุล :
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                       <input class="form-control" name="plastname" type="text" required value="<?php echo $objResult["plastname"]; ?>">
                    </div>
                </div>
                </div>
  <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2"  style="text-align:right">
                    อีเมล์ :
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                       <input class="form-control" name="pemail" type="email" readonly value="<?php echo $objResult["pemail"]; ?>">
                </div>
                </div></div>
                  <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2"  style="text-align:right">
                    วัน/เดือน/ปีเกิด :
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                       <input class="form-control" name="pbday" type="date" required value="<?php echo $objResult["pbday"]; ?>">
                </div>
                </div></div>
 <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2"  style="text-align:right">
                    เลขบัตรประจำตัวประชาชน :
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                       <input class="form-control" name="pidcard" type="text" required maxLength="13" value="<?php echo $objResult["pidcard"]; ?>">
                </div>
                </div></div>
<!-- /.row -->
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2"  style="text-align:right">
                    เบอร์โทรศัพท์ :
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                       <input class="form-control" name="ptel" type="tel" required maxLength="10" value="<?php echo $objResult["ptel"]; ?>">
                </div>
                </div></div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2"  style="text-align:right">
                    ที่อยู่ :
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                       <input class="form-control" name="paddress" type="text" required value="<?php echo $objResult["paddress"]; ?>">
                </div></div>
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
                       <select name="pprovince" required class="form-control"><?php
    $the_key = $objResult["pprovince"]; // or whatever you want
    foreach(array(
                        'กรุงเทพมหานคร' => 'กรุงเทพมหานคร',
                        'กระบี่' => 'กระบี่',
                        'กาญจนบุรี' => 'กาญจนบุรี',
                        'กาฬสินธุ์' => 'กาฬสินธุ์',
                        'กำแพงเพชร' => 'กำแพงเพชร',
                        'ขอนแก่น' => 'ขอนแก่น',
                        'จันทบุรี' => 'จันทบุรี',
                        'ฉะเชิงเทรา' => 'ฉะเชิงเทรา',
                        'ชลบุรี' => 'ชลบุรี',
                        'ชัยนาท' => 'ชัยนาท',
                        'ชัยภูมิ' => 'ชัยภูมิ',
                        'ชุมพร' => 'ชุมพร',
                        'เชียงราย' => 'เชียงราย',
                        'เชียงใหม่' => 'เชียงใหม่',
                        'ตรัง' => 'ตรัง',
                        'ตราด' => 'ตราด',
                        'ตาก' => 'ตาก',
                        'นครนายก' => 'นครนายก',
                        'นครปฐม' => 'นครปฐม',
                        'นครพนม' => 'นครพนม',
                        'นครราชสีมา' => 'นครราชสีมา',
                        'นครศรีธรรมราช' => 'นครศรีธรรมราช',
                        'นครสวรรค์' => 'นครสวรรค์',
                        'นนทบุรี' => 'นนทบุรี',
                        'นราธิวาส' => 'นราธิวาส',
                        'น่าน' => 'น่าน',
                        'บึงกาฬ' => 'บึงกาฬ',
                        'บุรีรัมย์' => 'บุรีรัมย์',
                        'ปทุมธานี' => 'ปทุมธานี',
                        'ประจวบคีรีขันธ์' => 'ประจวบคีรีขันธ์',
                        'ปราจีนบุรี' => 'ปราจีนบุรี',
                        'ปัตตานี' => 'ปัตตานี',
                        'พระนครศรีอยุธยา' => 'พระนครศรีอยุธยา',
                        'พังงา' => 'พังงา',
                        'พัทลุง' => 'พัทลุง',
                        'พิจิตร' => 'พิจิตร',
                        'พิษณุโลก' => 'พิษณุโลก',
                        'เพชรบุรี' => 'เพชรบุรี',
                        'เพชรบูรณ์' => 'เพชรบูรณ์',
                        'แพร่' => 'แพร่',
                        'พะเยา' => 'พะเยา',
                        'ภูเก็ต' => 'ภูเก็ต',
                        'มหาสารคาม' => 'มหาสารคาม',
                        'มุกดาหาร' => 'มุกดาหาร',
                        'แม่ฮ่องสอน' => 'แม่ฮ่องสอน',
                        'ยะลา' => 'ยะลา',
                        'ยโสธร' => 'ยโสธร',
                        'ร้อยเอ็ด' => 'ร้อยเอ็ด',
                        'ระนอง' => 'ระนอง',
                        'ระยอง' => 'ระยอง',
                        'ราชบุรี' => 'ราชบุรี',
                        'ลพบุรี' => 'ลพบุรี',
                        'ลำปาง' => 'ลำปาง',
                        'ลำพูน' => 'ลำพูน',
                        'เลย' => 'เลย',
                        'ศรีสะเกษ' => 'ศรีสะเกษ',
                        'สกลนคร' => 'สกลนคร',
                        'สงขลา' => 'สงขลา',
                        'สตูล' => 'สตูล',
                        'สมุทรปราการ' => 'สมุทรปราการ',
                        'สมุทรสงคราม' => 'สมุทรสงคราม',
                        'สมุทรสาคร' => 'สมุทรสาคร',
                        'สระแก้ว' => 'สระแก้ว',
                        'สระบุรี' => 'สระบุรี',
                        'สิงห์บุรี' => 'สิงห์บุรี',
                        'สุโขทัย' => 'สุโขทัย',
                        'สุพรรณบุรี' => 'สุพรรณบุรี',
                        'สุราษฎร์ธานี' => 'สุราษฎร์ธานี',
                        'สุรินทร์' => 'สุรินทร์',
                        'หนองคาย' => 'หนองคาย',
                        'หนองบัวลำภู' => 'หนองบัวลำภู',
                        'อ่างทอง' => 'อ่างทอง',
                        'อุดรธานี' => 'อุดรธานี',
                        'อุทัยธานี' => 'อุทัยธานี',
                        'อุตรดิตถ์' => 'อุตรดิตถ์',
                        'อุบลราชธานี' => 'อุบลราชธานี',
                        'อำนาจเจริญ' => 'อำนาจเจริญ',
    ) as $key => $val){
        ?><option value="<?php echo $key; ?>"<?php
            if($key==$the_key)echo ' selected="selected"';
        ?>><?php echo $val; ?></option><?php
    }
?></select>
                </div>
                </div>
        
            
<div class="row">
                
                    <div class="col-lg-12" align="center"><br><br>
                    <button type="submit" class="btn btn-success">ถัดไป</button>
                    <br><br>
                    </div>
                </div>
  
         
        </form>
       
</div>
</div>
</body>
</html>