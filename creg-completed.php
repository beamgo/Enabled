<?php
session_start();
ob_start();
error_reporting(0);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>สมัครสมาชิก</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
   <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    
        <script type="text/javascript">
            function noBack(){
                window.history.forward()
            }
             
            noBack();
            window.onload = noBack;
            window.onpageshow = function(evt) { if (evt.persisted) noBack() }
            window.onunload = function() { void (0) }
        </script>
    
    
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
  
?>

<body>
    <?php include 'c-navigation.php';?>
        <br><br>


<div class="container">
    <div class="row">
        <br><br>
        <ul class="nav nav-pills nav-justified">
        <li class="disabled"><a >ขั้นตอนที่ 1 : ข้อมูลส่วนตัว</a></li>
        <li class="disabled"><a >ขั้นตอนที่ 2 : ข้อมูลผู้ประกอบการ</a></li>
         <li class="disabled"><a >ขั้นตอนที่ 3 : รูปภาพ</a></li>
        </ul>   ​​
        <div class="panel panel-primary">
        <div class="panel-heading">
        <h3 class="panel-title">สมัครสมาชิก</h3>
        </div>
        <div class="panel-body">
        <div class="container">

     <form method="post" action="c-mainbrowse.php">
       <div class="row">
                    <div class="col-lg-4">
                    </div>
                    <div class="col-lg-3" style="text-align:right">
                    
                    <br>
                    บันทึกข้อมูลเรียบร้อยแล้ว
                    </div>
                    
                </div>    

          <?php
         
         echo "
 				<html>
   					<meta http-equiv=\"Refresh\" content=\"5; URL=c-mainbrowse.php\">
 				</html>
 			"; 
         
         ?>
         
    </form>
    
    <?php // echo $_SESSION["cid"];?>
</body>
</html>