<!--หน้าประวัติการทำงาน-->
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

    <title>สมัครสมาชิก</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
   <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    
<script language="javascript">
         function show_table(id) {
             if(id == 1) { // ถ้าเลือก radio button 1 ให้โชว์ table 1 
                 document.getElementById("table_1").style.display = "";
             } 
             else if(id == 0) {
                  document.getElementById("table_1").style.display = "none";
             }
            }
</script>
    
    
</head>
<?php
Header("Cache-Control: must-revalidate");

$offset = 60 * 60 * 24 * 30;
$ExpStr = "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
Header($ExpStr);
?>
    
<!-- ใส่อมูลจากหน้า2 เข้าไปในdatabase table pedu -->
    <?php    
	   $servername = "localhost";
		$name = "root";
		$userpassword = "";
		$dbname = "senior_project";
		$conn = mysqli_connect($servername,$name,$userpassword,$dbname);
        mysqli_set_charset($conn, "utf8");

    
        $sql = "UPDATE pedu SET 
                edulevel = '$_POST[edulevel]', 
                educountry = '$_POST[educountry]', 
                eduinstitute = '$_POST[eduinstitute]', 
                edufaculty = '$_POST[edufaculty]', 
                edumajor= '$_POST[edumajor]', 
                eduyrgrad = '$_POST[eduyrgrad]', 
                edugpa = '$_POST[edugpa]', 
                eduprize = '$_POST[eduprize]', 
                edulang = '$_POST[edulang]', 
                edutalent = '$_POST[edutalent]' 
                WHERE pid = '$_SESSION[pid]'"; 
    
        $objQuery = mysqli_query($conn,$sql);

            
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
         <li class="active"><a >ขั้นตอนที่ 3 : ประวัติการทำงาน</a></li>
         <li class="disabled"><a >ขั้นตอนที่ 4 : สายอาชีพที่ต้องการ</a></li>
         <li class="disabled"><a >ขั้นตอนที่ 5 : ความพิการและอุปกรณ์</a></li>
         <li class="disabled"><a >ขั้นตอนที่ 6 : รูปถ่าย</a></li>
        </ul>   ​​
        <div class="panel panel-primary">
        <div class="panel-heading">
        <h3 class="panel-title">ประวัติการทำงาน</h3>
        </div>
        <div class="panel-body">
        <div class="container">
        <form method="post" action="register-4.php">
        <div class="row">
        </div>
        <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-3" style="text-align:right">
                    <br>
                    <br>
                    คุณเคยมีประสบการณ์ทำงานหรือไม่ :  
                    </div>
                    <div class="col-lg-3">
                    <br>
                    <br><div class="form-group">
                        <input name="pexp" type="radio" value="1" onclick="show_table(this.value);"> มี &nbsp;&nbsp;&nbsp;

        <input name="pexp" type="radio" value="0"> ไม่มี    
                    </div>
                </div>
                </div>    
                <div style="display:none" id="table_1"> 
                <!-- /.row -->
                <div class="row"><br>
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2" style="text-align:right">
                    องค์กร/บริษัทที่เคยทำงาน :  
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                        <input class="form-control" name="firmname" type="text" id="table_1" required>
                    </div>
                </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2" style="text-align:right">
                    ตำแหน่ง :  
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                        <input class="form-control" name="position" type="text" id="table_1">
                    </div>
                </div>
                </div>
                  <!-- /.row -->
                <div class="row"><br>
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2" style="text-align:right">
                    ระยะเวลาที่ทำงาน
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                    </div>
                </div>
                </div>  
                <!-- /.row -->
                <div class="row"><br>
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2" style="text-align:right">
                    เริ่มต้น :  
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                      <input name="start" type="date" id="table_1" class="form-control">
                    </div>
                </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2" style="text-align:right">
                    สิ้นสุด:  
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                      <input name="end" type="date" id="table_1" class="form-control">
                    </div>
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