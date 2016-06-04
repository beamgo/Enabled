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
    
    <!--    <script type="text/javascript">
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

        $cemail = "";
        $cpassword = "";
        $cemail = $_SESSION["creg_email"];
        echo $cemail;
        $cpassword = $_SESSION["creg_pass"];
        echo $cpassword;

   


?>

<body>
<div class="container">
    <?php include 'c-navigation.php';?>
        <br><br>

<div class="container">
    <div class="row">
        <br><br>
        <ul class="nav nav-pills nav-justified">
        <li class="disabled"><a >ขั้นตอนที่ 1 : ข้อมูลส่วนตัว</a></li>
        <li class="disabled"><a >ขั้นตอนที่ 2 : ข้อมูลผู้ประกอบการ</a></li>
         <li class="disabled"><a >ขั้นตอนที่ 3 : รูปภาพ</a></li>
         <li class="active"><a >ขั้นตอนที่ 4 : งานที่ประกาศ</a></li>
        </ul>   ​​
        <div class="panel panel-primary">
        <div class="panel-heading">
        <h3 class="panel-title">แก้ไขข้อมูลส่วนตัว</h3>
        </div>
        <div class="panel-body">
        <div class="container">


      <?php
            
        $sql = "SELECT * FROM cinfo WHERE cid = '$_SESSION[cid]'";
		$objQuery = mysqli_query($conn,$sql);
		$objResult = mysqli_fetch_array($objQuery);
            
        $sql2 = "SELECT * FROM jobpost WHERE cid = '0001'";
		$objQuery2 = mysqli_query($conn,$sql2);
   
           
    ?>   
   
        
                              
                            
        <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2" style="text-align:right">
        งานที่เคยประกาศรับสมัคร : 
        </div>
                    <div class="col-lg-3">
                        <div class="form-group">
        <?php 
            while($objResult2 = mysqli_fetch_array($objQuery2,MYSQLI_ASSOC)){
                echo $objResult2["jname"];?><br>
        <a href="c-edit-4-1.php?jid=<?php echo $objResult2["jid"]?>">ลบประกาศงาน</a><br><br>
        <?php
                
            }
            
            ?> 
            </div>
                </div>
                </div>
   
            
            
      

<div class="row">
<div class="col-lg-12" align="center"><br><br>
            <a href="c-edit-completed.php"><button>บันทึก</button></a>
         </div>
                </div>
        
        <?php // echo $_SESSION["cid"];?>
</div>
</div>
</body>
</html>
