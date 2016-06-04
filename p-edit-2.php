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
       
        session_write_close();
   // echo $_SESSION["pid"];
   // echo $_SESSION["pname"]; ?> &nbsp;&nbsp; <?php
   // echo $_SESSION["plastname"];
    
    ?>
    
    
    <!-- ใส่อมูลจากหน้า1 เข้าไปในdatabase table ppersonal, pedu, pexp เพราะจะgen id ใส่ใน3ตารางนี้เลย แล้วในหน้าอื่นก็ค่อย update where id คือเลขไอดีนั้นๆเอา -->
<body><?php include 'p-navigation.php';?>
 <br><br><br>
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
    
     <?php
    
    $sql = "SELECT * FROM pedu WHERE pid = '".$_SESSION["pid"]."'";
		$objQuery = mysqli_query($conn,$sql);
		$objResult = mysqli_fetch_array($objQuery);
    
    
    ?>
    
    
    
    <br><br>
<div class="container">
	<div class="row">
        <br>

    	   <div class="panel panel-primary">
        <div class="panel-heading">
        <h3 class="panel-title">แก้ไขข้อมูลส่วนตัว</h3>
        </div>
        <div class="panel-body">
        <div class="container"><br><br>   
        <form method="post" action="p-edit-3.php">
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
                        
                        <select name="edulevel" required><?php
    $the_key = $objResult["edulevel"]; // or whatever you want
    foreach(array(
                        'อ่านออกเขียนได้'  =>  'อ่านออกเขียนได้',
                        'ประถมศึกษา'  =>  'ประถมศึกษา',
                        'มัธยมศึกษาตอนต้น(ม.3)'  =>  'มัธยมศึกษาตอนต้น(ม.3)',
                        'มัธยมศึกษาตอนปลาย(ม.6)'  =>  'มัธยมศึกษาตอนปลาย(ม.6)',
                        'ประกาศนียบัตรวิชาชีพ(ปวช.)'  =>  'ประกาศนียบัตรวิชาชีพ(ปวช.)',
                        'ประกาศนียบัตรวิชาชีพชั้นสูง(ปวส.)'  =>  'ประกาศนียบัตรวิชาชีพชั้นสูง(ปวส.)',
                        'ประกาศนียบัตรวิชาชีพเทคนิค(ปวท.)'  =>  'ประกาศนียบัตรวิชาชีพเทคนิค(ปวท.)',
                        'อนุปริญญา'  =>  'อนุปริญญา',
                        'ปริญญาตรี'  =>  'ปริญญาตรี',
                        'ปริญญาโท'  =>  'ปริญญาโท',
                        'ปริญญาเอก'  =>  'ปริญญาเอก',
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
                    <div class="col-lg-2" style="text-align:right">
                    ประเทศที่จบ :  
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                        <input name="educountry" type="text" required value="<?php echo $objResult["educountry"]; ?>">
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
                        <input name="eduinstitute" type="text" value="<?php echo $objResult["eduinstitute"]; ?>">
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
                       <input name="edufaculty" type="text" value="<?php echo $objResult["edufaculty"]; ?>">
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
                        <input name="edumajor" type="text" value="<?php echo $objResult["edumajor"]; ?>">
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
                        <input name="eduyrgrad" type="text" value="<?php echo $objResult["eduyrgrad"]; ?>">
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
                        <input name="edugpa" type="text" value="<?php echo $objResult["edugpa"]; ?>">
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
                        <input name="eduprize" type="text" value="<?php echo $objResult["eduprize"]; ?>">
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
                        <input name="edulang" type="text" value="<?php echo $objResult["edulang"]; ?>">
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
                        <input name="edutalent" type="text" value="<?php echo $objResult["edutalent"]; ?>">
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