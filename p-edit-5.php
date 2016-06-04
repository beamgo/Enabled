<!--หน้าควมพิการและอุปกรณ์-->
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

$offset = 60 * 60 * 24 * 30;
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
    

    // ยังไม่ได้ทำ checkbox ของประเภทงานที่ต้องการ กับ สายงานที่ต้องการ
    // ยังไม่ได้ทำ ต้องการอีเมลแจ้งเตือน
    
        if($_POST['posimarketing'] == '1'){
            $sql =  "UPDATE ppersonal SET 
                posimarketing = '$_POST[posimarketing]'
                WHERE pid = '$_SESSION[pid]'"; 
            $objQuery = mysqli_query($conn,$sql);
        }
        else{};
        
        if($_POST['posipr'] == '1'){
            $sql1 =  "UPDATE ppersonal SET 
                posipr = '$_POST[posipr]'
                WHERE pid = '$_SESSION[pid]'"; 
            $objQuery1 = mysqli_query($conn,$sql1);
        }
        else{};
    
        if($_POST['posiprod'] == '1'){
            $sql2 =  "UPDATE ppersonal SET 
                posiprod = '$_POST[posiprod]'
                WHERE pid = '$_SESSION[pid]'"; 
            $objQuery2 = mysqli_query($conn,$sql2);
        }
        else{};
    
        if($_POST['posiedu'] == '1'){
            $sql3 =  "UPDATE ppersonal SET 
                posiedu = '$_POST[posiedu]'
                WHERE pid = '$_SESSION[pid]'"; 
            $objQuery3 = mysqli_query($conn,$sql3);
        }
        else{};
        
        if($_POST['posilogistic'] == '1'){
            $sql4 =  "UPDATE ppersonal SET 
                posilogistic = '$_POST[posilogistic]'
                WHERE pid = '$_SESSION[pid]'"; 
            $objQuery4 = mysqli_query($conn,$sql4);
        }
        else{};
    
        if($_POST['posisale'] == '1'){
            $sql5 =  "UPDATE ppersonal SET 
                posisale = '$_POST[posisale]'
                WHERE pid = '$_SESSION[pid]'"; 
            $objQuery5 = mysqli_query($conn,$sql5);
        }
        else{};
        
        if($_POST['posiservice'] == '1'){
            $sql6 =  "UPDATE ppersonal SET 
                posiservice = '$_POST[posiservice]'
                WHERE pid = '$_SESSION[pid]'"; 
            $objQuery6 = mysqli_query($conn,$sql6);
        }
        else{};
    
        if($_POST['posipurchase'] == '1'){
            $sql7 =  "UPDATE ppersonal SET 
                posipurchase = '$_POST[posipurchase]'
                WHERE pid = '$_SESSION[pid]'"; 
            $objQuery7 = mysqli_query($conn,$sql7);
        }
        else{};
    
        if($_POST['positrahot'] == '1'){
            $sql8 =  "UPDATE ppersonal SET 
                positrahot = '$_POST[positrahot]'
                WHERE pid = '$_SESSION[pid]'"; 
            $objQuery8 = mysqli_query($conn,$sql8);
        }
        else{};
        
        if($_POST['posifood'] == '1'){
            $sql9 =  "UPDATE ppersonal SET 
                posifood = '$_POST[posifood]'
                WHERE pid = '$_SESSION[pid]'"; 
            $objQuery9 = mysqli_query($conn,$sql9);
        }
        else{};
    
        if($_POST['posibankmoney'] == '1'){
            $sql10 =  "UPDATE ppersonal SET 
                posibankmoney = '$_POST[posibankmoney]'
                WHERE pid = '$_SESSION[pid]'"; 
            $objQuery10 = mysqli_query($conn,$sql10);
        }
        else{};
        
        if($_POST['posihr'] == '1'){
            $sql11 =  "UPDATE ppersonal SET 
                posihr = '$_POST[posihr]'
                WHERE pid = '$_SESSION[pid]'"; 
            $objQuery11 = mysqli_query($conn,$sql11);
        }
        else{};
    
        if($_POST['posispec'] == '1'){
            $sql12 =  "UPDATE ppersonal SET 
                posispec = '$_POST[posispec]'
                WHERE pid = '$_SESSION[pid]'"; 
            $objQuery12 = mysqli_query($conn,$sql12);
        }
        else{};
    
        if($_POST['posiacct'] == '1'){
            $sql13 =  "UPDATE ppersonal SET 
                posiacct = '$_POST[posiacct]'
                WHERE pid = '$_SESSION[pid]'"; 
            $objQuery13 = mysqli_query($conn,$sql13);
        }
        else{};
        
        if($_POST['posigov'] == '1'){
            $sql14 =  "UPDATE ppersonal SET 
                posigov = '$_POST[posigov]'
                WHERE pid = '$_SESSION[pid]'"; 
            $objQuery14 = mysqli_query($conn,$sql14);
        }
        else{};
    
        if($_POST['posihlthbty'] == '1'){
            $sql15 =  "UPDATE ppersonal SET 
                posihlthbty = '$_POST[posihlthbty]'
                WHERE pid = '$_SESSION[pid]'"; 
            $objQuery15 = mysqli_query($conn,$sql15);
        }
        else{};
        
        if($_POST['posidesign'] == '1'){
            $sql16 =  "UPDATE ppersonal SET 
                posidesign = '$_POST[posidesign]'
                WHERE pid = '$_SESSION[pid]'"; 
            $objQuery16 = mysqli_query($conn,$sql16);
        }
        else{};
    
        if($_POST['posimedia'] == '1'){
            $sql17 =  "UPDATE ppersonal SET 
                posimedia = '$_POST[posimedia]'
                WHERE pid = '$_SESSION[pid]'"; 
            $objQuery17 = mysqli_query($conn,$sql17);
        }
        else{};
    
        if($_POST['posiit'] == '1'){
            $sql18 =  "UPDATE ppersonal SET 
                posiit = '$_POST[posiit]'
                WHERE pid = '$_SESSION[pid]'"; 
            $objQuery18 = mysqli_query($conn,$sql18);
        }
        else{};
        
        if($_POST['posiothers'] == '1'){
            $sql19 =  "UPDATE ppersonal SET 
                posiothers = '$_POST[posiothers]'
                WHERE pid = '$_SESSION[pid]'"; 
            $objQuery19 = mysqli_query($conn,$sql19);
        }
        else{};
    
    
    
        if($_POST['typefulltime'] == '1'){
            $sql20 =  "UPDATE ppersonal SET 
                typefulltime = '$_POST[typefulltime]'
                WHERE pid = '$_SESSION[pid]'"; 
            $objQuery20 = mysqli_query($conn,$sql20);
        }
        else{};
    
        if($_POST['typeparttime'] == '1'){
            $sql21 =  "UPDATE ppersonal SET 
                typeparttime = '$_POST[typeparttime]'
                WHERE pid = '$_SESSION[pid]'"; 
            $objQuery21 = mysqli_query($conn,$sql21);
        }
        else{};
        
        if($_POST['typeintern'] == '1'){
            $sql22 =  "UPDATE ppersonal SET 
                typeintern = '$_POST[typeintern]'
                WHERE pid = '$_SESSION[pid]'"; 
            $objQuery22 = mysqli_query($conn,$sql22);
        }
        else{};
    
        if($_POST['typefreelance'] == '1'){
            $sql23 =  "UPDATE ppersonal SET 
                typefreelance = '$_POST[typefreelance]'
                WHERE pid = '$_SESSION[pid]'"; 
            $objQuery23 = mysqli_query($conn,$sql23);
        }
        else{};
    
    
    
        $sql24 =  "UPDATE ppersonal SET 
                salaryprefer = '$_POST[salaryprefer]',
                preferprovince = '$_POST[preferprovince]'
                WHERE pid ='$_SESSION[pid]'";
    
        $objQuery24 = mysqli_query($conn,$sql24);

    
    
    
        $sql25 =  "UPDATE ppersonal SET 
                mailalert = '$_POST[mailalert]'
                WHERE pid ='$_SESSION[pid]'";
    
        $objQuery25 = mysqli_query($conn,$sql25);
        
        echo $_SESSION["pid"];
        echo $_SESSION["pname"]; ?> &nbsp;&nbsp; <?php
        echo $_SESSION["plastname"];
        
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
         <li class="active"><a >ขั้นตอนที่ 5 : ความพิการและอุปกรณ์</a></li>
         <li class="disabled"><a >ขั้นตอนที่ 6 : รูปถ่าย</a></li>
        </ul>   ​​
        <div class="panel panel-primary">
        <div class="panel-heading">
        <h3 class="panel-title">แก้ไขข้อมูลส่วนตัว</h3>
        </div>
        <div class="panel-body">
        <div class="container">
        
        <form method="post" action="p-edit-5-process.php" enctype="multipart/form-data">
        
            <?php
            
            
        $sql = "SELECT * FROM ppersonal WHERE pid = '$_SESSION[pid]'";
		$objQuery = mysqli_query($conn,$sql);
		$objResult = mysqli_fetch_array($objQuery);
            
            
            echo $objResult['disid'];
            ?>
            
            
		
    <!--    อัพโหลดสำเนาบัตรประจำตัวผู้พิการ
            (พร้อมรับรองสำเนาถูกต้องในการสมัครเว็บไซต์นี้เท่านั้น)   : <img src="image/<?php echo $objResult['disid'];?>" width="150px" height="150px">
            
            <input name="updis" type="file"><button type="submit">ทำการอัพโหลด</button><br>
         
      -->      
           
<div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-3" style="text-align:right">
                    <br>
                    <br>
                    ประเภทความพิการ* :  
                    </div>
                    <div class="col-lg-3">
                    <br>
                    <br>
         <select name="distype" required><?php
    $the_key = $objResult["distype"]; // or whatever you want
    foreach(array(
                         '' => 'เลือกประเภทความพิการ' ,
                        'พิการทางการเห็น' => 'พิการทางการเห็น' ,
                        'พิการทางการได้ยินหรือสื่อความหมาย' => 'พิการทางการได้ยินหรือสื่อความหมาย' ,
                        'พิการทางร่างกายหรือการเคลื่อนไหว' => 'พิการทางร่างกายหรือการเคลื่อนไหว' ,
                        'พิการทางจิตใจหรือพฤติกรรม' => 'พิการทางจิตใจหรือพฤติกรรม' ,
                        'พิการทางสติปัญญา' => 'พิการทางสติปัญญา' ,
                        'พิการทางการเรียนรู้' => 'พิการทางการเรียนรู้' ,
                        'พิการทางออทิสติก' => 'พิการทางออทิสติก' ,
    ) as $key => $val){
        ?><option value="<?php echo $key; ?>"<?php
            if($key==$the_key)echo ' selected="selected"';
        ?>><?php echo $val; ?></option><?php
    }
?></select>
            </div></div>
            
             <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-3" style="text-align:right">
                    
                    <br>
                    อธิบายรายละเอียด :  
                    </div>
                    <div class="col-lg-3">
                    
                    <br><div class="form-group">
                        <input name="disdetail" type="text" placeholder="<?php echo $objResult["disdetail"]; ?>" class="form-control">
                        </div>
                </div>
                </div>    
       <!--  ลักษณะความพิการ : --> <!--<select name="disno">  <!-- จะมีลักษณะความพิการของแต่ละประเภทอีก คือถ้าเลือกพิการประเภท1(พิการทางการเห็น) จะให้ขึ้นลักษณะ2อันให้เลือกอัตโนมัติ (ตาเลือนราง,ตาบอด) -->
                    <!--    <option>เลือกลักษณะความพิการ</option>
                    </select> -->
           <!-- /.row -->
                <div class="row">
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-4" style="text-align:right">
                    อุปกรณ์ช่วยความพิการ  :  
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                      <input name="disaid" type="text" placeholder="<?php echo $objResult["disaid"]; ?>" class="form-control">
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