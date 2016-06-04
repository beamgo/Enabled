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

    <title>แก้ไขข้อมูลส่วนตัว</title>

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

$offset = 60 * 60 * 24 * 100;
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
                exp = '$_POST[exp]'
                WHERE pid ='$_SESSION[pid]'";
    
        $objQuery2 = mysqli_query($conn,$sql2);

    echo $_SESSION["pid"];
    echo $_SESSION["pname"]; ?> &nbsp;&nbsp; <?php
    echo $_SESSION["plastname"];
    ?>
    
<body>
    <?php include 'p-navigation.php';?>
        <br><br>
     <?php
    
        $sql = "SELECT * FROM ppersonal WHERE pid = '".$_SESSION["pid"]."'";
		$objQuery = mysqli_query($conn,$sql);
		$objResult = mysqli_fetch_array($objQuery);
        
    ?>
 
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
        <h3 class="panel-title">แก้ไขข้อมูลส่วนตัว</h3>
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
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="typefulltime" type="checkbox" value="1" <?php if($objResult['typefulltime'] == 1) echo "checked"; ?>> งานประจำ (full time)<br>
                        
                      <input name="typeparttime" type="hidden" value="0"> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="typeparttime" type="checkbox" value="1" <?php if($objResult['typeparttime'] == 1) echo "checked"; ?>> งานชั่วคราว (part time)<br>
                        
                       <input name="typeintern" type="hidden" value="0">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="typeintern" type="checkbox" value="1" <?php if($objResult['typeintern'] == 1) echo "checked"; ?>> ฝึกงาน (internship)<br>
                        
                      <input name="typefreelance" type="hidden" value="0">  
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="typefreelance" type="checkbox" value="1" <?php if($objResult['typefreelance'] == 1) echo "checked"; ?>> งานอิสระ (freelance)<br>
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
            <input name="posimarketing" type="hidden" value="0" required>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posimarketing" type="checkbox" value="1" <?php if($objResult['posimarketing'] == 1) echo "checked"; ?>> การตลาด (marketing)<br>
            
                       
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posipr" type="checkbox" value="1" <?php if($objResult['posipr'] == 1) echo "checked"; ?>> ประชาสัมพันธ์ (PR)<br>
                        
                       
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posiprod" type="checkbox" value="1" <?php if($objResult['posiprod'] == 1) echo "checked"; ?>> การผลิต (production)<br>
                        
                       
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posiedu" type="checkbox" value="1" <?php if($objResult['posiedu'] == 1) echo "checked"; ?>> การศึกษา/วิชาการ (education)<br>
                        
                        
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posilogistic" type="checkbox" value="1" <?php if($objResult['posilogistic'] == 1) echo "checked"; ?>> ขนส่ง (logistic)<br>
                        
                       
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posisale" type="checkbox" value="1" <?php if($objResult['posisale'] == 1) echo "checked"; ?>> ฝ่ายขาย (sales)<br>
                        
                        
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posiservice" type="checkbox" value="1" <?php if($objResult['posiservice'] == 1) echo "checked"; ?>> บริการลูกค้า (customer service)<br>
                        
                        
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posipurchase" type="checkbox" value="1" <?php if($objResult['posipurchase'] == 1) echo "checked"; ?>> ฝ่ายจัดซื้อ (purchasing) <br>
                        
                        
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="positrahot" type="checkbox" value="1" <?php if($objResult['positrahot'] == 1) echo "checked"; ?>> ท่องเที่ยวและโรงแรม (travel and hotel)<br>
                        
                       
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posifood" type="checkbox" value="1" <?php if($objResult['posifood'] == 1) echo "checked"; ?>> อาหารและเครื่องดื่ม (food and beverage)<br>
                        
                        
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posibankmoney" type="checkbox" value="1" <?php if($objResult['posibankmoney'] == 1) echo "checked"; ?>> การเงินและธนาคาร (finance and banking)<br>
                        
                        
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posihr" type="checkbox" value="1" <?php if($objResult['posihr'] == 1) echo "checked"; ?>> ทรัพยากรบุคคล (human resource)<br>
                        
                        
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posispec" type="checkbox" value="1" <?php if($objResult['posispec'] == 1) echo "checked"; ?>> บริการเฉพาะทาง (specialist)<br>
                        
                        
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posiacct" type="checkbox" value="1" <?php if($objResult['posiacct'] == 1) echo "checked"; ?>> บัญชี (accounting)<br>
                        
                       
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posigov" type="checkbox" value="1" <?php if($objResult['posigov'] == 1) echo "checked"; ?>> หน่วยงานราชการ (government agency)<br>
                        
                       
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posihlthbty" type="checkbox" value="1" <?php if($objResult['posihlthbty'] == 1) echo "checked"; ?>> โภชนาการ/สุขภาพ/ความงาม (health and beauty)<br>
                        
                        
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posidesign" type="checkbox" value="1" <?php if($objResult['posidesign'] == 1) echo "checked"; ?>> ออกแบบ (design)<br>
                        
                       
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posimedia" type="checkbox" value="1" <?php if($objResult['posimedia'] == 1) echo "checked"; ?>> สื่อและโฆษณา (media and advertisement)<br>
                        
                        
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posiit" type="checkbox" value="1" <?php if($objResult['posiit'] == 1) echo "checked"; ?>> ไอที (IT)<br>
                        
                       
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="posiothers" type="checkbox" value="1" <?php if($objResult['posiothers'] == 1) echo "checked"; ?>> อื่นๆ (others)<br>
            
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
                        

                        <select name="salaryprefer" required><?php
    $the_key = $objResult["salaryprefer"]; // or whatever you want
    foreach(array(
                       '0-9,000 บาท' => '0-9,000 บาท',
                        '9,001-15,000 บาท' => '9,001-15,000 บาท',
                        '15,001-30,000 บาท' => '15,001-30,000 บาท',
                        '30,001-50,000 บาท' => '30,001-50,000 บาท',
                        'มากกว่า 50,000 บาท' => 'มากกว่า 50,000 บาท',
                  ) as $key => $val){
        ?><option value="<?php echo $key; ?>"<?php
            if($key==$the_key)echo ' selected="selected"';
        ?>><?php echo $val; ?></option><?php
    }
?></select>
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
                        <select name="preferprovince" required><?php
    $the_key = $objResult["preferprovince"]; // or whatever you want
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
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-4" style="text-align:right">
                    คุณต้องการรับอีเมล์แจ้งตำแหน่งงานที่เหมาะสมหรือไม่* :  
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                       &nbsp;&nbsp;&nbsp; <input name="mailalert" required type="radio" value="1" <?php if ($objResult["mailalert"] == 1) echo "checked";?>> ต้องการ  &nbsp;&nbsp;&nbsp;<input name="mailalert" required type="radio" value="0" <?php if ($objResult["mailalert"] == 0) echo "checked";?>> ไม่ต้องการ
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
</body>
</html>