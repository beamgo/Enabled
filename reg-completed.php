<!-- หน้าreg เสร็จ -->
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
		$conn =
        mysqli_connect($servername,$name,$userpassword,$dbname);
        mysqli_set_charset($conn, "utf8");
    

    
    //    $sql =  "UPDATE ppersonal SET 
      //          ppichalf = '$_POST[ppichalf]',
        //        ppicfull = '$_POST[ppicfull]'
          //      WHERE pid ='$_SESSION[pid]'";
    
  //      $objQuery = mysqli_query($conn,$sql);

        
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
         <li class="disabled"><a >ขั้นตอนที่ 4 : สายอาชีพที่ต้องการ</a></li>
         <li class="disabled"><a >ขั้นตอนที่ 5 : ความพิการและอุปกรณ์</a></li>
         <li class="disabled"><a >ขั้นตอนที่ 6 : รูปถ่าย</a></li>
        </ul>   ​​
        <div class="panel panel-primary">
        <div class="panel-heading">
        <h3 class="panel-title">แก้ไขข้อมูลส่วนตัว</h3>
        </div>
        <div class="panel-body">
        <div class="container">
    <!-- ละหน้าสุดท้ายต้อง action ไปไหน -->
     <form method="post" action="p-main.php">
       
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
   					<meta http-equiv=\"Refresh\" content=\"5; URL=p-main.php\">
 				</html>
 			"; 
         
         ?>
         
    </form>
    
    <?php // echo $_SESSION["pid"];?>
</body>
</html>