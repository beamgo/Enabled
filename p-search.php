<?php
session_start();
ob_start();
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
    
<body>
<br><br><br>
    <form method="post" action="p-search.php">
        <a href="p-main.php">กลับสู่หน้าหลัก</a><br>
<a href="p-edit-1.php">แก้ไขข้อมูลส่วนตัว</a><br>        
<a href="p-logout.php">ออกจากระบบ</a>
		<br><br>
    
<div class="container">
	<div class="row">
    	
		<br><br> 
        ค้นหางานที่ต้องการ
        
        <br><br><br>
        <?php
            ini_set('display_errors', 1);
            error_reporting(~0);
            $jtype = null;
            $jposi = null;
            $jdistype = null;
            $jedu = null;
            $jprovince = null;
        
            if(isset($_POST["jtype"]))
            {
                $jtype = $_POST["jtype"];
            }
            
            if(isset($_POST["jposi"]))
            {
                $jposi = $_POST["jposi"];
            }
            
            if(isset($_POST["jdistype"]))
            {
                $jdistype = $_POST["jdistype"];
            }
            
            if(isset($_POST["jedu"]))
            {
                $jedu = $_POST["jedu"];
            }
            
            if(isset($_POST["jprovince"]))
            {
                $jprovince = $_POST["jprovince"];
            }
        
        
        
?>
        <form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
            
        งานประเภทที่ต้องการ : <select name="jtype">
        				<option value="">ทุกประเภทการจ้าง</option>
                        <option value="งานประจำ (full time)">งานประจำ (full time)</option>
                      	<option value="งานชั่วคราว (part time)">งานชั่วคราว (part time)</option>
                        <option value="ฝึกงาน (internship)">ฝึกงาน (internship)</option>
                        <option value="งานอิสระ (freelance)">งานอิสระ (freelance)</option>
        			</select>
        <br><br>
        ตำแหน่งที่ต้องการ : <select name="jposi">
        				<option value="">ทุกตำแหน่ง</option>
                        <option value="การตลาด (marketing)">การตลาด (marketing)</option>
                        <option value="ประชาสัมพันธ์ (PR)">ประชาสัมพันธ์ (PR)</option>
                        <option value="การผลิต (production)">การผลิต (production)</option>
                        <option value="การศึกษา/วิชาการ (education)">การศึกษา/วิชาการ (education)</option>
                        <option value="ขนส่ง (logistic)">ขนส่ง (logistic)</option>
                        <option value="ฝ่ายขาย (sales)">ฝ่ายขาย (sales)</option>
                        <option value="บริการลูกค้า (customer service)">บริการลูกค้า (customer service)</option>
                        <option value="ฝ่ายจัดซื้อ (purchasing)">ฝ่ายจัดซื้อ (purchasing)</option>
                        <option value="ท่องเที่ยวและโรงแรม (travel and hotel)">ท่องเที่ยวและโรงแรม (travel and hotel)</option>
                        <option value="อาหารและเครื่องดื่ม (food and beverage)">อาหารและเครื่องดื่ม (food and beverage)</option>
                        <option value="การเงินและธนาคาร (finance and banking)">การเงินและธนาคาร (finance and banking)</option>
                        <option value="ทรัพยากรบุคคล (human resource)">ทรัพยากรบุคคล (human resource)</option>
                        <option value="บริการเฉพาะทาง (specialist)">บริการเฉพาะทาง (specialist)</option>
                        <option value="บัญชี (accounting)">บัญชี (accounting)</option>
                        <option value="หน่วยงานราชการ (government agency)">หน่วยงานราชการ (government agency)</option>
                        <option value="โภชนาการ/สุขภาพ/ความงาม (health and beauty)">โภชนาการ/สุขภาพ/ความงาม (health and beauty)</option>
                        <option value="ออกแบบ (design)">ออกแบบ (design)</option>
                        <option value="สื่อและโฆษณา (media and advertisement)">สื่อและโฆษณา (media and advertisement)</option>
                        <option value="ไอที (IT)">ไอที (IT)</option>
                        <option value="อื่นๆ (others)">อื่นๆ (others)</option>
                 </select>
         <br><br>
        
        ความพิการประเภท : <select name="jdistype">
        				<option value="">ทุกประเภทความพิการ</option>
                        <option value="พิการทางการเห็น">พิการทางการเห็น</option>
                      	<option value="พิการทางการได้ยินหรือสื่อความหมาย">พิการทางการได้ยินหรือสื่อความหมาย</option>
                        <option value="พิการทางร่างกายหรือการเคลื่อนไหว">พิการทางร่างกายหรือการเคลื่อนไหว</option>
                        <option value="พิการทางจิตใจหรือพฤติกรรม">พิการทางจิตใจหรือพฤติกรรม</option>
                        <option value="พิการทางสติปัญญา">พิการทางสติปัญญา</option>
                        <option value="พิการทางการเรียนรู้">พิการทางการเรียนรู้</option>
                        <option value="พิการทางออทิสติก">พิการทางออทิสติก</option>
        			</select>
         <br><br>
        ระดับการศึกษาขั้นต่ำ : <select name="jedu">
                        <option value="">อ่านออกเขียนได้</option>
                      	<option value="ประถมศึกษา">ประถมศึกษา</option>
                        <option value="มัธยมศึกษาตอนต้น(ม.3)">มัธยมศึกษาตอนต้น(ม.3)</option>
                        <option value="มัธยมศึกษาตอนปลาย(ม.6)">มัธยมศึกษาตอนปลาย(ม.6)</option>
                        <option value="ประกาศนียบัตรวิชาชีพ(ปวช.)">ประกาศนียบัตรวิชาชีพ(ปวช.)</option>
                        <option value="ประกาศนียบัตรวิชาชีพชั้นสูง(ปวส.)">ประกาศนียบัตรวิชาชีพชั้นสูง(ปวส.)</option>
                        <option value="ประกาศนียบัตรวิชาชีพเทคนิค(ปวท.)">ประกาศนียบัตรวิชาชีพเทคนิค(ปวท.)</option>
                        <option value="อนุปริญญ">อนุปริญญา</option>
                        <option value="ปริญญาตรี">ปริญญาตรี</option>
                        <option value="ปริญญาโท">ปริญญาโท</option>
                        <option value="ปริญญาเอก">ปริญญาเอก</option>
        			</select>
         <br><br>
         จังหวัดที่ต้องการทำงาน : <select name="jprovince">
        				<option value="">ทุกจังหวัด</option>
                        <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                        <option value="กระบี่">กระบี่</option>
                        <option value="กาญจนบุรี">กาญจนบุรี</option>
                        <option value="กาฬสินธุ์">กาฬสินธุ์</option>
                        <option value="กำแพงเพชร">กำแพงเพชร</option>
                        <option value="ขอนแก่น">ขอนแก่น</option>
                        <option value="จันทบุรี">จันทบุรี</option>
                        <option value="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
                        <option value="ชลบุรี">ชลบุรี</option>
                        <option value="ชัยนาท">ชัยนาท</option>
                        <option value="ชัยภูมิ">ชัยภูมิ</option>
                        <option value="ชุมพร">ชุมพร</option>
                        <option value="เชียงราย">เชียงราย</option>
                        <option value="เชียงใหม่">เชียงใหม่</option>
                        <option value="ตรัง">ตรัง</option>
                        <option value="ตราด">ตราด</option>
                        <option value="ตาก">ตาก</option>
                        <option value="นครนายก">นครนายก</option>
                        <option value="นครปฐม">นครปฐม</option>
                        <option value="นครพนม">นครพนม</option>
                        <option value="นครราชสีมา">นครราชสีมา</option>
                        <option value="นครศรีธรรมราช">นครศรีธรรมราช</option>
                        <option value="นครสวรรค์">นครสวรรค์</option>
                        <option value="นนทบุรี">นนทบุรี</option>
                        <option value="นราธิวาส">นราธิวาส</option>
                        <option value="น่าน">น่าน</option>
                        <option value="บึงกาฬ">บึงกาฬ</option>
                        <option value="บุรีรัมย์">บุรีรัมย์</option>
                        <option value="ปทุมธานี">ปทุมธานี</option>
                        <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
                        <option value="ปราจีนบุรี">ปราจีนบุรี</option>
                        <option value="ปัตตานี">ปัตตานี</option>
                        <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option>
                        <option value="พังงา">พังงา</option>
                        <option value="พัทลุง">พัทลุง</option>
                        <option value="พิจิตร">พิจิตร</option>
                        <option value="พิษณุโลก">พิษณุโลก</option>
                        <option value="เพชรบุรี">เพชรบุรี</option>
                        <option value="เพชรบูรณ์">เพชรบูรณ์</option>
                        <option value="แพร่">แพร่</option>
                        <option value="พะเยา">พะเยา</option>
                        <option value="ภูเก็ต">ภูเก็ต</option>
                        <option value="มหาสารคาม">มหาสารคาม</option>
                        <option value="มุกดาหาร">มุกดาหาร</option>
                        <option value="แม่ฮ่องสอน">แม่ฮ่องสอน</option>
                        <option value="ยะลา">ยะลา</option>
                        <option value="ยโสธร">ยโสธร</option>
                        <option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
                        <option value="ระนอง">ระนอง</option>
                        <option value="ระยอง">ระยอง</option>
                        <option value="ราชบุรี">ราชบุรี</option>
                        <option value="ลพบุรี">ลพบุรี</option>
                        <option value="ลำปาง">ลำปาง</option>
                        <option value="ลำพูน">ลำพูน</option>
                        <option value="เลย">เลย</option>
                        <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                        <option value="สกลนคร">สกลนคร</option>
                        <option value="สงขลา">สงขลา</option>
                        <option value="สตูล">สตูล</option>
                        <option value="สมุทรปราการ">สมุทรปราการ</option>
                        <option value="สมุทรสงคราม">สมุทรสงคราม</option>
                        <option value="สมุทรสาคร">สมุทรสาคร</option>
                        <option value="สระแก้ว">สระแก้ว</option>
                        <option value="สระบุรี">สระบุรี</option>
                        <option value="สิงห์บุรี">สิงห์บุรี</option>
                        <option value="สุโขทัย">สุโขทัย</option>
                        <option value="สุพรรณบุรี">สุพรรณบุรี</option>
                        <option value="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
                        <option value="สุรินทร์">สุรินทร์</option>
                        <option value="หนองคาย">หนองคาย</option>
                        <option value="หนองบัวลำภู">หนองบัวลำภู</option>
                        <option value="อ่างทอง">อ่างทอง</option>
                        <option value="อุดรธานี">อุดรธานี</option>
                        <option value="อุทัยธานี">อุทัยธานี</option>
                        <option value="อุตรดิตถ์">อุตรดิตถ์</option>
                        <option value="อุบลราชธานี">อุบลราชธานี</option>
                        <option value="อำนาจเจริญ">อำนาจเจริญ</option>
        			</select>
        
        
        
        
        <br><br><br>
        <input type="submit" value="Search">
        </form>
        
         <?php
$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "senior_project";
$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
    mysqli_set_charset($conn, "utf8");
$sql = "SELECT * FROM jobpost WHERE jtype LIKE '%".$jtype."%' AND jposi LIKE '%".$jposi."%' AND jdistype LIKE '%".$jdistype."%' AND jedu LIKE '%".$jedu."% AND jprovince LIKE %".$jprovince."%' ";
$query = mysqli_query($conn,$sql);
        while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
        {echo $result["cid"];
         echo $result["jtype"];
            
        }
?>
         
       
        
         
</div>
</div>
    
    
     -------------------------------------
        <br><br>
        งานที่แนะนำ
        <br><br>
        
<!-- ค่าค้นหาที่รับเข้ามา-->
        <?php
        $jtype = $_POST["jtype"];
        $jposi = $_POST["jposi"];
        $jdistype = $_POST["jdistype"];
        $jedu = $_POST["jedu"];
        $jprovince = $_POST["jprovince"];
        
        $ch =0;
        $have=0;
        
        
        //ค้นหาประเภทงานที่ต้องการ
        if($_POST["jtype"] !== ""){ //เลือกอะไรซักอย่างที่ไม่ใช่พวก ประเภทใดก็ได้
            $a = "ทุกประเภทการจ้าง";
            if($ch>0){ // ไม่มีทางเข้าอันนี้อยู่ละ
                
                $strSQL = "$strSQL And jtype='$jtype'";
            }
            else{ //เข้าอันนี้ตลอด
                
            $strSQL = "SELECT * FROM jobpost WHERE jtype = '$jtype' OR jtype='$a'";
            $ch=1;
            
            }
            $have=1;
            
        } 
      //  else{ //เลือกว่าประเภทงานใดก็ได้
       //     $strSQL = "SELECT * FROM jobpost";
                
       // }
       
        

        //ค้นหาโดยตำแหน่งที่อยากทำ
        if($_POST["jposi"] !== ""){ 
            $b = "ทุกตำแหน่ง";
            if($ch>0){ //เลือกอันอื่นๆที่ไม่ใช่ "ทุกประเภทการจ้าง"
                
                $strSQL = "$strSQL And (jposi='$jposi' OR jposi='$b')";
            } 
            else{ //เลือกก่อนหน้านั้นว่า "ทุกประเภทการจ้าง"
                
            $strSQL = "SELECT * FROM jobpost WHERE jposi = '$jposi' OR jposi='$b'";
            $ch=1;
            
            }
            $have=1;
                        
        }
     //   else{ //เลือกว่าตำแหน่งใดก็ได้
      //      $strSQL = "$strSQL And ";
    //    }
        
        
       
        //ค้นหาโดยประเภทความพิการ
        if($_POST["jdistype"] !== ""){
            $c= "ทุกประเภทความพิการ";
            if($ch>0){
                
                $strSQL = "$strSQL And (jdistype='$jdistype' OR jdistype='$c')";
            }
            else{
                
            $strSQL = "SELECT * FROM jobpost WHERE jdistype = '$jdistype' OR jdistype='$c'";
            $ch=1;
            
            }
            $have=1;
                      
        }
      //  else{ //เลือกว่าความพิการใดก็ได้
            //
    //    }
        
        
       
        //ค้นหาโดยระดับการศึกษา
        if($_POST["jedu"] !== ""){
             $d="อ่านออกเขียนได้";
             if($ch>0){
                
                $strSQL = "$strSQL And (jedu='$jedu' OR jedu='$d')";
            }
            else{
                
            $strSQL = "SELECT * FROM jobpost WHERE jedu = '$jedu' OR jedu='$d'";
            $ch=1;
            
            }
            $have=1;
                                            
        }
    //    else{ //เลือกว่าอ่านออกเขียนได้ ("")
            //
     //   }
        
        
        //ค้นหาโดยจังหวัด
        if($_POST["jprovince"] !== ""){
             $e="ทุกจังหวัด";
             if($ch>0){
                
                $strSQL = "$strSQL And (jprovince='$jprovince' OR jprovince='$e')";
            }
            else{
                
            $strSQL = "SELECT * FROM jobpost WHERE jprovince = '$jprovince' OR jprovince='$e'";
            $ch=1;
            
            }
            $have=1;
                        
        }
    //    else{ //เลือกว่า ทุกจังหวัด
            //
    //    }
      
    
    
    
    // ถ้าเลือกเป็นพวก "อะไรก็ได้มาทุกอัน" ก็จะเป็นแบบอันต่อไปนี้
        if($_POST["jtype"]==""&&$_POST["jposi"]==""&&$_POST["jdistype"]==""&&$_POST["jedu"]==""&&$_POST["jprovince"]==""){
                        
            $sql= "SELECT * FROM jobpost";
            $objQuery = mysqli_query($conn,$sql);
		  while($objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC))
            {   echo $objResult["jname"]; ?><br>
                <?php 
                    $cid = $objResult["cid"];
                    $sql2= "SELECT cname FROM cinfo WHERE cid = $cid";
                    $objQuery2 = mysqli_query($conn,$sql2);
                    $objResult2 = mysqli_fetch_array($objQuery2,MYSQLI_ASSOC);
    
                    echo $objResult2["cname"];
                ?>
            <br>
                <?php
                    echo $objResult["jprovince"]; 
            }
                $have=0;
        }
        
    
    
    
        $jpidfromall = array();
        if($have==1){
            
            $arrayno = 0;
            $alljpid = mysqli_query($conn,$strSQL);
                while($obj_alljpid=mysqli_fetch_array($alljpid,MYSQLI_ASSOC)){
                    
                    $aid = $obj_alljpid["jid"];
                    $jpidfromall[$arrayno] = $aid;
                    $arrayno++;
                    
                }
            
            
        }
        //ได้arrayชื่อjpidfromall ที่มีเลขjobpost ของเงื่อนไขที่เลือกมาได้เเล้ว
        
        $count_jpidfromall = count($jpidfromall);
        
        ?>
        
        
<!-- แสดงผลการค้นหา-->
        
        
        <?php
        
        sort($jpidfromall);
        $jpno=0;

        if($count_jpidfromall==0){
            
            echo"ไม่พบงานที่คุณต้องการ";
            
        }
        if($count_jpidfromall>0){
            
            $c=1;
            $d=0;
            
            while($d<$count_jpidfromall){ //เมื่อ d ยังน้อยกว่าจำนวนงานที่เจอก็ทำไปเรื่อยๆ
                
                $jpno = $jpidfromall[$d]; //เลขไอดีตอนนั้นๆ
                
                echo $jpno;
                $st="SELECT * FROM jobpost WHERE jid='$jpno'"; //ตัวแปรเก็บประโยคนี้
                $obj=mysqli_query($conn,$st);
                $objResult=mysqli_fetch_array($obj,MYSQLI_ASSOC);
                
                echo $objResult["jname"];
                
                $d++;
            }
            
            
        }
        
       

                ?>
        
       
        
         
                  

        <br><br><br><br><br>
        <br><br><br><br><br>
        <br><br><br><br><br>
    
    
    </form>
</body>
</html>