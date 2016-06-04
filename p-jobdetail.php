<?php
session_start();
ob_start();
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

    <title>หน้าหลัก - คนพิการ</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
   <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
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
        echo $_SESSION["pid"];
        echo $_SESSION["pname"]; ?> &nbsp;&nbsp; <?php
        echo $_SESSION["plastname"];
?>    
    

    
<body background="banner-bg.jpg" style="background-attachment: fixed;
  background-repeat: repeat;">
<?php include 'p-navigation.php' ?> 
<br><br><br><br>

        <?php 

        $jid=$_GET['jid'];


        $sql = "SELECT * FROM jobpost WHERE jid = $jid";
		$objQuery = mysqli_query($conn,$sql);
		$objResult = mysqli_fetch_array($objQuery);
        $cid = $objResult["cid"];
        
         $sql1 = "SELECT * FROM cinfo WHERE cid =$cid";
        $objQuery1 = mysqli_query($conn,$sql1);
        $objResult1 = mysqli_fetch_array($objQuery1);
        $cpic = $objResult1["cpic"];
        $cname = $objResult1["cname"];
        
        
        $jname = $objResult["jname"];    
        $jtype = $objResult["jtype"];
        $jposi = $objResult["jposi"];
        $jdistype = $objResult["jdistype"];   
        $jedu = $objResult["jedu"];
        $jprovince = $objResult["jprovince"];
        $jjd = $objResult["jjd"];
        $jexp = $objResult["jexp"];
        $jsalary = $objResult["jsalary"];
        $jabtcmp = $objResult["jabtcmp"];
        $jcontact = $objResult["jcontact"];
        
        ?> 
        
        
        <div class="container" style="background-color: #FFFFFF;">
        <div class="row"><br><br><h2>
            <div class="col-lg-1"></div>
            <div class="col-lg-8">ชื่องาน : <?php echo $objResult["jname"]; ?><br><br>
            ผู้ประกอบการ : <?php echo $objResult1["cname"]; ?><br><br>
            จังหวัด : <?php echo $objResult["jprovince"]; ?><br><br>
            </div></h2>
            <div class="col-lg-3"><img src="image/<?php echo $cpic;?>" width="150px" height="150px"><br><br></div>
        </div>

        <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
        <div class="panel panel-default">
            <div class="panel-body" style="background-color: #e1e1e1;"><h4>
                <div class="col-md-12" style="background-color: #e1e1e1;">
                ประเภทของงาน    : <?php echo $jtype;?><br><br>
                สายงาน : <?php echo $jposi;?><br><br>
                ประเภทของความพิการ : <?php echo $jdistype;?><br><br>
                ระดับการศึกษาขั้นต่ำ : <?php echo $jedu;?><br><br>
                ประสบการณ์ในการทำงาน : <?php
                                            if($jexp == '0'){echo "ไม่มีประสบการณ์ทำงาน";}
                                            else{ echo "มีประสบการณ์ทำงาน";}
                                        ?><br><br>
                เงินเดือน : <?php echo $jsalary;?> บาท<br><br></div>
         </h4></div>
        </div></div>

        </div>

        <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-9">
                <div class="row">
                <h2>คุณสมบัติ</h2>
                </div><br>
                <div class="row"><h4>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6"><?php echo $jjd; ?></div>
                </div><br><br><br></h4>
                <div class="row">
                <h2>เกี่ยวกับบริษัท</h2>
                </div><br>
                <div class="row"><h4>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6"><?php echo $jabtcmp;?></div>
                </div><br><br><br></h4>
                <div class="row">
                <h2>ช่องทางการติดต่อกลับ</h2>
                </div><br>
                <div class="row"><h4>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6"><?php echo $jcontact;?></div>
                </div><br><br><br></h4>
                  
        </div>
        </div>
        
        
    </div>
    </div>
</body>
</html>