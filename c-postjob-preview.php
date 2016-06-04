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

$offset = 60 * 60 * 24 * 2;
$ExpStr = "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
Header($ExpStr);
?>
    
    

    
<body><?php include("c-navigation.php");?>

    

    <form method="post" action="c-postjob-process.php" enctype="multipart/form-data">
                  
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
       
  
        <?php
        $sql = "SELECT * FROM cinfo WHERE cid = '".$_SESSION["cid"]."'";
		$objQuery = mysqli_query($conn,$sql);
		$objResult = mysqli_fetch_array($objQuery);

    
        
        $cname = $_POST["cname"];
        $jname = $_POST["jname"];    
        $jtype = $_POST["jtype"];
        $jposi = $_POST["jposi"];
        $jdistype = $_POST["jdistype"];   
        $jedu = $_POST["jedu"];
        $jprovince = $_POST["jprovince"];
        $jjd = $_POST["jjd"];
        $jexp = $_POST["jexp"];
        $jsalary = $_POST["jsalary"];
        $jabtcmp = $_POST["jabtcmp"];
        $jcontact = $_POST["jcontact"];

    
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
         <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2" style="text-align:right">
                    <br>
                    <br><br><br><br>
                    รูป :  
                    </div>
                    <div class="col-lg-3">
                    <br>
                    <br><img src="image/<?php echo $objResult['cpic'];?>" width="150px" height="150px">
                    </div>
                </div><br>
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
                       <input class="form-control" name="jname" type="text" value="<?php echo $jname;?>"  readonly>
                    </div>
                </div>
                </div>
<!-- /.row -->
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2"  style="text-align:right">
                    บริษัท :
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                       <input class="form-control" name="jname" type="text" value="<?php echo $cname;?>"  readonly>
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
                       <input class="form-control" name="jprovince" type="text" value="<?php echo $jprovince;?>"  readonly>
                    </div>
                </div>
                </div>
       <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2"  style="text-align:right">
                    ประเภทการจ้าง :
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                       <input class="form-control" name="jtype" type="text" value="<?php echo $jtype;?>"  readonly>
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
                       <input class="form-control" name="jposi" type="text" value="<?php echo $jposi;?>"  readonly>
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
                       <input class="form-control" name="jdistype" type="text" value="<?php echo $jdistype;?>"  readonly>
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
                       <input class="form-control" name="jedu" type="text" value="<?php echo $jedu;?>"  readonly>
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
                        <div class="form-group">
                       <input name="jexp" type="radio" value="<?php echo $jexp;?>" <?php if ($jexp == 1) echo "checked";?>> จำเป็น &nbsp;&nbsp;
        <input name="jexp" type="radio" value="<?php echo $jexp;?>" <?php if ($jexp == 0) echo "checked";?>> ไม่จำเป็น
                    </div>
                </div>
                </div><br>

                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-3"  style="text-align:right">
                    เงินเดือน :
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                       <input class="form-control" name="jsalary" type="text" value="<?php echo $jsalary;?>"  readonly> 
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
                       <input class="form-control" name="jjd" type="text" value="<?php echo $jjd;?>"  readonly>
                    </div>
                </div>
                </div>
 <!-- /.row -->
                <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-3"  style="text-align:right">
                    เกี่ยวกับบริษัท :
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                       <input class="form-control" name="jabtcmp" type="text" value="<?php echo $jabtcmp;?>"  readonly>
                    </div>
                </div>
                </div>
     <!-- /.row -->
                <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-3"  style="text-align:right">
                    เกี่ยวกับบริษัท :
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                       <input class="form-control" name="jabtcmp" type="text" value="<?php echo $jabtcmp;?>"  readonly>
                    </div>
                </div>
                </div>
                     <!-- /.row -->
                <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-3"  style="text-align:right">
                    ช่องทางการติดต่อกลับ :
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                       <input class="form-control" name="jcontact" type="text" value="<?php echo $jcontact;?>"  readonly>
                    </div>
                </div>
                </div><br><br>
<div class="row">
                    
                    <div class="col-lg-12" align="center">
                    <a href="c-postjob.php"><button class="btn btn-default">แก้ไข</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-success">โพสต์ประกาศรับสมัครงานนี้</button></div>
                    <br><br>
                    </div>
                </div>
                  
        
</div>
</div>
    </form>
</body>
</html>