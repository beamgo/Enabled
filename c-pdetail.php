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
<style>
    .row{
        color: #000;
    }
    </style>
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
   
    echo $_SESSION["hrname"]; ?> &nbsp;&nbsp; <?php
    echo $_SESSION["hrlastname"];
    echo $_SESSION["cid"];
?>    
    

    
<body>
    <?php include 'c-navigation.php';?>

<div class="container" style="background-image: url(banner-bg.jpg); height: 70%; width: 100%;"><font color="#FFFFFF">
    <div class="row">
    <div class="col-lg-2">
        </div>
   </div>
        <div class="row">
            <div class="col-lg-2">
            </div>
        <div class="col-lg-4">
            
    <form method="post" action="">
        <br><br><br>
     

    <div class="container">
	<div class="row">

        <?php
        $pid_get = $_GET['pid'];
        $sql = "SELECT * FROM ppersonal,pedu WHERE ppersonal.pid = pedu.pid AND ppersonal.pid = '$pid_get'";
		$objQuery = mysqli_query($conn,$sql);
		$objResult = mysqli_fetch_array($objQuery);
    ?>
        <div style="display:block;height:400px;">&nbsp;</div>
        <h1>ข้อมูลคนพิการ</h1>
        <br><br><br>
        <br><br><br>
        <img src="image/<?php echo $objResult["ppichalf"];?>" width="150px" height="150px">
        <br><br><br>
        <br><br><br>
        
        <?php echo $objResult['ptitle'];?>&nbsp;<?php echo $objResult['pname'];?>&nbsp;<?php echo $objResult['plastname']; ?>
        <br><br>
        การศึกษา :  <?php echo $objResult['edulevel'];?>
        <br><br>
        
        ตำแหน่งงานที่สนใจ : 
        <?php if ($objResult['posimarketing']== 1) { echo "การตลาด(marketing)";} ?><br>
        <?php if ($objResult['posipr'] == 1) { echo "ประชาสัมพันธ์ (PR)";} ?><br>
        <?php if ($objResult['posiprod'] == 1) { echo "การผลิต (production)";}?><br>
        <?php if ($objResult['posiedu']== 1) { echo "การศึกษา/วิชาการ (education)";} ?><br>
        <?php if ($objResult['posilogistic'] == 1) { echo "ขนส่ง (logistic)";} ?><br>
        <?php if ($objResult['posisale']== 1) { echo "ฝ่ายขาย (sales)";} ?><br>
        <?php if ($objResult['posiservice'] == 1) { echo "บริการลูกค้า (customer service)";} ?><br>
        <?php if ($objResult['posipurchase'] == 1) { echo "ฝ่ายจัดซื้อ (purchasing)";}?><br>
        <?php if ($objResult['positrahot']== 1) { echo "ท่องเที่ยวและโรงแรม (travel and hotel)";} ?><br>
        <?php if ($objResult['posifood'] == 1) { echo "อาหารและเครื่องดื่ม (food and beverage)";} ?><br>
        <?php if ($objResult['posibankmoney']== 1) { echo "การเงินและธนาคาร (finance and banking)";} ?><br>
        <?php if ($objResult['posihr'] == 1) { echo "ทรัพยากรบุคคล (human resource)";} ?><br>
        <?php if ($objResult['posispec'] == 1) { echo "บริการเฉพาะทาง (specialist)";}?><br>
        <?php if ($objResult['posiacct']== 1) { echo "บัญชี (accounting)";} ?><br>
        <?php if ($objResult['posigov'] == 1) { echo "หน่วยงานราชการ (government agency)";} ?><br>
        <?php if ($objResult['posihlthbty']== 1) { echo "โภชนาการ/สุขภาพ/ความงาม (health and beauty)";} ?><br>
        <?php if ($objResult['posidesign'] == 1) { echo "ออกแบบ (design)";} ?><br>
        <?php if ($objResult['posimedia'] == 1) { echo "สื่อและโฆษณา (media and advertisement)";}?><br>
        <?php if ($objResult['posiit']== 1) { echo "ไอที (IT)";} ?><br>
        <?php if ($objResult['posiothers'] == 1) { echo "อื่นๆ (others)";} ?>
        <br><br>
        ประเภทความพิการ : <?php echo $objResult['distype'];?>
        <br><br>
        รายละเอียดความพิการเพิ่มเติม : <?php 
            if($objResult['disdetail']!="") 
                echo $objResult['disdetail'];
            else
                echo "-";?>
        <br><br>
        อุปกรณ์ความช่วยเหลือ : <?php 
            if($objResult['disaid']!="") 
                echo $objResult['disaid'];
            else
                echo "-";?>
        <br><br>
        ติดต่อ : <br>
        &nbsp;&nbsp; email : <?php echo $objResult['pemail'];?>
        <br>
        &nbsp;&nbsp; tel : <?php echo $objResult['ptel'];?>
        <br><br>
        จังหวัด : <?php echo $objResult['pprovince'];?>
        
        
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
</div>
</div>
    </form>
</body>
</html>