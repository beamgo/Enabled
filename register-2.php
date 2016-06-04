<!-- หน้าประวัติการศึกษา -->
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

    <title>สมัครสมาชิก - คนพิการ</title>

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

       
        
        $sql = "UPDATE ppersonal SET
                pname = '$_POST[pname]',
                ptitle = '$_POST[ptitle]',
                plastname = '$_POST[plastname]', 
                pbday = '$_POST[pbday]', 
                pidcard = '$_POST[pidcard]', 
                ptel= '$_POST[ptel]', 
                paddress = '$_POST[paddress]', 
                pprovince = '$_POST[pprovince]'
                WHERE pid = '$_SESSION[pid]'";
    
        $objQuery = mysqli_query($conn,$sql);
    
    
    
        $pname = $_POST["pname"];
        $_SESSION["pname"]= $pname;
        $plastname = $_POST["plastname"];
        $_SESSION["plastname"]= $plastname;
       
     //   session_write_close();
    
    ?>
    
    
    <!-- ใส่อมูลจากหน้า1 เข้าไปในdatabase table ppersonal, pedu, pexp เพราะจะgen id ใส่ใน3ตารางนี้เลย แล้วในหน้าอื่นก็ค่อย update where id คือเลขไอดีนั้นๆเอา -->

<body><?php include 'p-navigation.php';?>
        <br><br>

<div class="container">
    <div class="row">
        <br><br>
        <ul class="nav nav-pills nav-justified">
        <li class="disabled"><a >ขั้นตอนที่ 1 : ข้อมูลส่วนตัว</a></li>
        <li class="active"><a >ขั้นตอนที่ 2 : ประวัติการศึกษา</a></li>
         <li class="disabled"><a >ขั้นตอนที่ 3 : ประวัติการทำงาน</a></li>
         <li class="disabled"><a >ขั้นตอนที่ 4 : สายอาชีพที่ต้องการ</a></li>
         <li class="disabled"><a >ขั้นตอนที่ 5 : ความพิการและอุปกรณ์</a></li>
         <li class="disabled"><a >ขั้นตอนที่ 6 : รูปถ่าย</a></li>
        </ul>   ​​
        <div class="panel panel-primary">
        <div class="panel-heading">
        <h3 class="panel-title">ประวัติการศึกษา</h3>
        </div>
        <div class="panel-body">
        <div class="container">
        <form method="post" action="register-3.php">
        
        <div class="row">
        <font color="red">* กรุณากรอกประวัติการศึกษาสูงสุดของคุณ</font>
        </div>
        <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2" style="text-align:right">
                    <br>
                    <br>
                    ระดับการศึกษา :  
                    </div>
                    <div class="col-lg-3">
                    <br>
                    <br><div class="form-group">
                        
                        <select name="edulevel" class="form-control" required>
                        <option value="อ่านออกเขียนได้">อ่านออกเขียนได้</option>
                        <option value="ประถมศึกษา">ประถมศึกษา</option>
                        <option value="มัธยมศึกษาตอนต้น(ม.3)">มัธยมศึกษาตอนต้น(ม.3)</option>
                        <option value="มัธยมศึกษาตอนปลาย(ม.6)">มัธยมศึกษาตอนปลาย(ม.6)</option>
                        <option value="ประกาศนียบัตรวิชาชีพ(ปวช.)">ประกาศนียบัตรวิชาชีพ(ปวช.)</option>
                        <option value="ประกาศนียบัตรวิชาชีพชั้นสูง(ปวส.)">ประกาศนียบัตรวิชาชีพชั้นสูง(ปวส.)</option>
                        <option value="ประกาศนียบัตรวิชาชีพเทคนิค(ปวท.)">ประกาศนียบัตรวิชาชีพเทคนิค(ปวท.)</option>
                        <option value="อนุปริญญา">อนุปริญญา</option>
                        <option value="ปริญญาตรี">ปริญญาตรี</option>
                        <option value="ปริญญาโท">ปริญญาโท</option>
                        <option value="ปริญญาเอก">ปริญญาเอก</option>
                    </select>
                        
                    </div>
                </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2" style="text-align:right">
                    ประเทศที่จบ :  
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                        <input class="form-control" name="educountry" type="text" required>
                    </div>
                </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2"  style="text-align:right">
                    ชื่อสถาบันการศึกษา : 
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                        <input class="form-control" type="text" name="eduinstitute">
                        </div>
                </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2"  style="text-align:right">
                    คณะ :
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                       <input class="form-control" name="edufaculty" type="text">
                    </div>
                </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2"  style="text-align:right">
                    สาขา :
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                        <input class="form-control" name="edumajor" type="text">
                    </div>
                </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2"  style="text-align:right">
                    ปีพ.ศ.ที่จบการศึกษา :
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                        <input class="form-control" name="eduyrgrad" type="text">
                    </div>
                </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-2"  style="text-align:right">
                    คะแนนเฉลี่ย (GPA) :
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                        <input class="form-control" name="edugpa" type="text">
                    </div>
                </div>
                </div>
                <!-- /.row -->
                 <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-3"  style="text-align:right">
                    รางวัล/ความสำเร็จ/เกียรตินิยม :
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                        <input class="form-control" name="eduprize" type="text">
                    </div>
                </div>
                </div>
                <!-- /.row -->
                 <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-3"  style="text-align:right">
                    ทักษะทางด้านภาษา :
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                        <input class="form-control" name="edulang" type="text">
                    </div>
                </div>
                </div>
                <!-- /.row -->
                 <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-3"  style="text-align:right">
                    ทักษะอื่นๆ :
                    </div> 
                    <div class="col-lg-3">
                        <div class="form-group">
                        <input class="form-control" name="edutalent" type="text">
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
        </div></div></div></body>
</html>