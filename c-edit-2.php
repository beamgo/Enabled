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

    
        $sql = "UPDATE cinfo SET
                hrtitle = '$_POST[hrtitle]',
                hrname = '$_POST[hrname]',
                hrlastname = '$_POST[hrlastname]', 
                hrid = '$_POST[hrid]', 
                hrphone = '$_POST[hrphone]', 
                hraddress = '$_POST[hraddress]' 
                WHERE cid = '$_SESSION[cid]'";
    
        $objQuery = mysqli_query($conn,$sql);

        $hrname = $_POST["hrname"];
        $_SESSION["hrname"]= $hrname;
        $hrlastname = $_POST["hrlastname"];
        $_SESSION["hrlastname"]= $hrlastname;
    
    
    ?>    
    
<body>
    
    <?php
    
        $sql2 = "SELECT * FROM cinfo WHERE cid = '".$_SESSION["cid"]."'";
		$objQuery2 = mysqli_query($conn,$sql2);
		$objResult2 = mysqli_fetch_array($objQuery2);
    
    ?>
    
<div class="container">
    <?php include 'c-navigation.php';?>
        <br><br>

<div class="container">
    <div class="row">
        <br><br>
        <ul class="nav nav-pills nav-justified">
        <li class="disabled"><a >ขั้นตอนที่ 1 : ข้อมูลส่วนตัว</a></li>
        <li class="active"><a >ขั้นตอนที่ 2 : ข้อมูลผู้ประกอบการ</a></li>
         <li class="disabled"><a >ขั้นตอนที่ 3 : รูปภาพ</a></li>
         <li class="disabled"><a >ขั้นตอนที่ 4 : งานที่ประกาศ</a></li>
        </ul>   ​​
        <div class="panel panel-primary">
        <div class="panel-heading">
        <h3 class="panel-title">แก้ไขข้อมูลส่วนตัว</h3>
        </div>
        <div class="panel-body">
        <div class="container">


        <form method="post" action="c-edit-2-process.php">
		
            <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2" style="text-align:right">
                    ชื่อบริษัท/
                    หน่วยงาน/
                    ผู้ประกอบการ :  
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                        <input class="form-control" name="cname" type="text" value="<?php echo $objResult2["cname"]; ?>" required>
                    </div>
                </div>
                </div>

<!-- /.row -->
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2" style="text-align:right">
                    สาขา :  
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                        <input class="form-control" name="cbranch" type="text" value="<?php echo $objResult2["cbranch"]; ?>">
                    </div>
                </div>
                </div>

<div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2" style="text-align:right">
                    <br>
                    <br>
                    ประเภทหน่วยงาน :  
                    </div>
                    <div class="col-lg-3">
                    <br>
                    <br><div class="form-group">
                        
                        <select name="ctype" required><?php
    $the_key = $objResult2["ctype"]; // or whatever you want
    foreach(array(
                        'รัฐบาล'  =>  'รัฐบาล',
                        'เอกชน'  =>  'เอกชน',
                        
    ) as $key => $val){
        ?><option value="<?php echo $key; ?>"<?php
            if($key==$the_key)echo ' selected="selected"';
        ?>><?php echo $val; ?></option><?php
    }
?></select>
                        
                    </div>
                </div>
                </div>    

<div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2" style="text-align:right">
                    <br>
                    <br>
                    ประเภทกิจการ : 
                    </div>
                    <div class="col-lg-3">
                    <br>
                    <br><div class="form-group">
                        
                        <select name="cgenre" required><?php
    $the_key = $objResult2["cgenre"]; // or whatever you want
    foreach(array(
                        '' => 'เลือกประเภทกิจการ',
                        'ห้างหุ้นส่วน' => 'ห้างหุ้นส่วน',
                        'บริษัทจำกัด' => 'บริษัทจำกัด',
                        'บริษัทมหาชนจำกัด' => 'บริษัทมหาชนจำกัด',
                        'องค์กรธุรกิจจัดตั้งหรือจดทะเบียนภายใต้กฎหมายเฉพาะ' => 'องค์กรธุรกิจจัดตั้งหรือจดทะเบียนภายใต้กฎหมายเฉพาะ',
                        'กิจการเจ้าของคนเดียว' => 'กิจการเจ้าของคนเดียว',
                        
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
                    เบอร์โทรศัพท์ :
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                        <input class="form-control" name="cphone" type="tel" maxLength="10" value="<?php echo $objResult2["cphone"]; ?>">
                    </div>
                </div>
                </div>

<!-- /.row -->
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2"  style="text-align:right">
                    โทรสาร :
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                        <input class="form-control" name="cfax" type="tel" maxLength="9" value="<?php echo $objResult2["cfax"]; ?>">
                    </div>
                </div>
                </div>
<!-- /.row -->
                 <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2"  style="text-align:right">
                    ที่อยู่ :
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                        <input class="form-control" name="caddress" type="text" value="<?php echo $objResult2["caddress"]; ?>">
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
                        <select name="cprovince" required><?php
    $the_key = $objResult["cprovince"]; // or whatever you want
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
                </div>
 
             
      <!-- /.row -->
                <div class="row">
                
                    <div class="col-lg-12" align="center"><br><br>
                    <button type="submit" class="btn btn-success">ถัดไป</button>
                    <br><br>
                    </div>
                </div>
            
        </form>
         <?php // echo $_SESSION["cid"];?>
</div>
</div>
</body>
</html>