<?php
session_start();
ob_start();
error_reporting(0);
date_default_timezone_set('Asia/Bangkok');

require 'PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
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

    <title>ค้นหางานที่ต้องการ</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
   <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

</head>

        <?php //Connect Database
        $servername = "localhost";
        $name = "root";
        $userpassword = "";
        $dbname = "senior_project";
        $conn = mysqli_connect($servername,$name,$userpassword,$dbname);
        mysqli_set_charset($conn, "utf8"); 

        
        ?> 

<body>
<?php include 'p-navigation.php';?>

<div class="container" style="background-image: url(banner-bg.jpg); height: 70%; width: 100%;"><font color="#FFFFFF">
    <div class="row">
    <div class="col-lg-2">
        </div>
    <div class="col-lg-4">
        <br><br><br><br>              
        <h3>ค้นหางานที่ต้องการ </h3><br>
        </div></div>
        <div class="row">
            <div class="col-lg-2">
            </div>
        <div class="col-lg-4">
            
    
    <form method="get" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">

    <!-- Job Type Dropdown -->
    งานประเภทที่ต้องการ :
    <select name="jtype" class="form form-control">
                        <option value="ทุกประเภทการจ้าง">ทุกประเภทการจ้าง</option>
                        <option value="งานประจำ (full time)">งานประจำ (full time)</option>
                        <option value="งานชั่วคราว (part time)">งานชั่วคราว (part time)</option>
                        <option value="ฝึกงาน (internship)">ฝึกงาน (internship)</option>
                        <option value="งานอิสระ (freelance)">งานอิสระ (freelance)</option>
    </select><br>

    <!-- Job Position Dropdown -->
    ตำแหน่งที่ต้องการ : 
    <select name="jposi" class="form form-control">
                        <option value="ทุกตำแหน่ง">ทุกตำแหน่ง</option>
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
    </select><br>

    <!-- Education Level Dropdown -->

    ระดับการศึกษาขั้นต่ำ : 
    <select name="jedu" class="form form-control">
                        <option value="01">อ่านออกเขียนได้</option>
                        <option value="02">ประถมศึกษา</option>
                        <option value="03">มัธยมศึกษาตอนต้น(ม.3)</option>
                        <option value="04">มัธยมศึกษาตอนปลาย(ม.6)</option>
                        <option value="05">ประกาศนียบัตรวิชาชีพ(ปวช.)</option>
                        <option value="06">ประกาศนียบัตรวิชาชีพชั้นสูง(ปวส.)</option>
                        <option value="07">ประกาศนียบัตรวิชาชีพเทคนิค(ปวท.)</option>
                        <option value="08">อนุปริญญา</option>
                        <option value="09">ปริญญาตรี</option>
                        <option value="10">ปริญญาโท</option>
                        <option value="11">ปริญญาเอก</option>
    </select><br><br><br><br>

            </div>

            <div class="col-lg-4">
    <!-- DisType Dropdown -->   
    ความพิการประเภท : 
    <select name="jdistype" class="form form-control">
                        <option value="ทุกประเภทความพิการ">ทุกประเภทความพิการ</option>
                        <option value="พิการทางการเห็น">พิการทางการเห็น</option>
                        <option value="พิการทางการได้ยินหรือสื่อความหมาย">พิการทางการได้ยินหรือสื่อความหมาย</option>
                        <option value="พิการทางร่างกายหรือการเคลื่อนไหว">พิการทางร่างกายหรือการเคลื่อนไหว</option>
                        <option value="พิการทางจิตใจหรือพฤติกรรม">พิการทางจิตใจหรือพฤติกรรม</option>
                        <option value="พิการทางสติปัญญา">พิการทางสติปัญญา</option>
                        <option value="พิการทางการเรียนรู้">พิการทางการเรียนรู้</option>
                        <option value="พิการทางออทิสติก">พิการทางออทิสติก</option>
    </select><br>

    <!-- Province Dropdown -->
    จังหวัดที่ต้องการทำงาน : 
    <select name="jprovince" class="form form-control">
                        <option value="ทุกจังหวัด">ทุกจังหวัด</option>
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
    </select><br><br>

        <p align="right"><button type="submit" class="btn btn-default btn-lg btn-warning">ค้นหางาน <i class="fa fa-search fa-fw"></i></button></p>
    </div>
    </div> <!--End Row2 -->
    </form>
    </font>
    </div> <!--End Container-->
    <br>

<!-- START BACKEND PART-->
<?php   
        $CheckStringSQL = 0;
        $DoQuery = 0;
        //Start Check JobType  
        if (isset($_GET["jtype"])) 
        {
            $jtype = $_GET["jtype"];
            if($jtype == "ทุกประเภทการจ้าง")
            {
                //Already Choose Previous Filter
                if($CheckStringSQL > 0)
                {
                    $strSQL = "$strSQL AND (jid != '0000')";
                }
                else
                {
                    $strSQL = "SELECT * FROM jobpost,nouse_edulevel WHERE jobpost.jedu = nouse_edulevel.levelname AND jid != '0000'";
                    $CheckStringSQL = 1;
                }
                $DoQuery = 1;
            }
            else
            {
                if($CheckStringSQL > 0)
                {
                    $strSQL = "$strSQL And (jtype = '$jtype OR jtype = 'ทุกประเภทการจ้าง' )'";
                } 
                else
                {
                    $strSQL = "SELECT * FROM jobpost,nouse_edulevel WHERE jobpost.jedu = nouse_edulevel.levelname AND (jtype = '$jtype' OR jtype = 'ทุกประเภทการจ้าง') ";
                    $CheckStringSQL = 1;
                }
                $DoQuery = 1;
            }
        } 
            // End Check JobType

        //Start Check JobPosition
        if(isset($_GET["jposi"])){ 

            if($_GET["jposi"] == "ทุกตำแหน่ง"){

                $jposi= $_GET["jposi"];

                //Already Choose Previous Filter
                if($CheckStringSQL > 0){

                    $strSQL = "$strSQL AND (jid != '0000')";
                }
                else{

                    $strSQL = "SELECT * FROM jobpost,nouse_edulevel WHERE jobpost.jedu = nouse_edulevel.levelname AND jid != '0000'";

                    $CheckStringSQL = 1;
                }
            }
            else{
                $jposi = $_GET["jposi"];

                if($CheckStringSQL > 0){
                
                    $strSQL = "$strSQL And (jposi = '$jposi' OR jposi = 'ทุกตำแหน่ง' ) ";
                } 
                else{
                
                    $strSQL = "SELECT * FROM jobpost,nouse_edulevel WHERE jobpost.jedu = nouse_edulevel.levelname AND (jposi = '$jposi' OR jposi = 'ทุกตำแหน่ง') ";
                    
                    $CheckStringSQL = 1;
            
                }
            }
            $DoQuery = 1;
                        
        } // End Check JobPosition

        //Start Check Education Level
        if(isset($_GET["jedu"])){

            if($_GET["jedu"] == "อ่านออกเขียนได้"){

                $jedu= $_GET["jedu"];

                //Already Choose Previous Filter
                if($CheckStringSQL > 0){

                    $strSQL = "$strSQL AND (jid != '0000')";
                }
                else{

                    $strSQL = "SELECT * FROM jobpost,nouse_edulevel WHERE jobpost.jedu = nouse_edulevel.levelname AND jid != '0000'";

                    $CheckStringSQL = 1;
                }
            }
            else{
                $eduid = $_GET["jedu"];

                //Already Choose Previous Filter
                if($CheckStringSQL > 0){
                
                    $strSQL = "$strSQL AND (levelno >= '$eduid' OR levelno = '01')";
                }
                //Didn't Choose Previous Filter
                else{
                
                    $strSQL = "SELECT * FROM jobpost,nouse_edulevel WHERE jobpost.jedu = nouse_edulevel.levelname AND (levelno >= '$eduid' OR levelno = '01') ";
                
                    $CheckStringSQL = 1;
                }
            }
            $DoQuery = 1;

        }  // End Check Education

        //Start Check DisType
        if(isset($_GET["jdistype"])){

            if($_GET["jdistype"] == "ทุกประเภทความพิการ"){

                $jdistype = $_GET["jdistype"];

                //Already Choose Previous Filter
                if($CheckStringSQL > 0){

                    $strSQL = "$strSQL AND (jid != '0000')";
                }
                else{

                    $strSQL = "SELECT * FROM jobpost,nouse_edulevel WHERE jobpost.jedu = nouse_edulevel.levelname AND jid != '0000'";

                    $CheckStringSQL = 1;
                }
            }
            else{
                $jdistype = $_GET["jdistype"];

                //Already Choose Previous Filter
                if($CheckStringSQL > 0){

                    $strSQL = "$strSQL AND (jdistype = '$jdistype' OR jdistype = 'ทุกประเภทความพิการ')";
                }
                else{

                    $strSQL = "SELECT * FROM jobpost,nouse_edulevel WHERE jobpost.jedu = nouse_edulevel.levelname AND (jdistype = '$jdistype' OR jdistype = 'ทุกประเภทความพิการ')";

                    $CheckStringSQL = 1;
                }
            }
                $DoQuery = 1;

        }  // End Check DisType

        //Start Check Province
        if(isset($_GET["jprovince"])){

            if($_GET["jprovince"] == "ทุกจังหวัด"){

                $jprovince = $_GET["jprovince"];

                //Already Choose Previous Filter
                if($CheckStringSQL > 0){

                    $strSQL = "$strSQL AND (jid != '0000')";
                }
                else{

                    $strSQL = "SELECT * FROM jobpost,nouse_edulevel WHERE jobpost.jedu = nouse_edulevel.levelname AND jid != '0000'";

                    $CheckStringSQL = 1;
                }
            }
            else{
                $jprovince = $_GET["jprovince"];

                //Already Choose Previous Filter
                if($CheckStringSQL > 0){

                    $strSQL = "$strSQL AND (jprovince = '$jprovince' OR jprovince = 'ทุกจังหวัด')";
                }
                else{

                    $strSQL = "SELECT * FROM jobpost,nouse_edulevel WHEREjobpost.jedu = nouse_edulevel.levelname AND (jprovince = '$jprovince' OR jprovince = 'ทุกจังหวัด') ";

                    $CheckStringSQL = 1;
                }
            }

            $DoQuery = 1;

        }  // End Check Province

?>

<div class="container">
<div class="row">

        <?php // Start Query
        if($DoQuery == 1){
            $query = mysqli_query($conn,$strSQL);

            echo "<html> <h1>ผลการค้นหา</h1><br></html>";

            while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){
            ?>

<?php   $jid = $result["jid"];
                            $cid = $result["cid"];
                            $strSQL2 = "SELECT * FROM cinfo WHERE cid = $cid";
                            $query2 = mysqli_query($conn,$strSQL2);
                            $result2 = mysqli_fetch_array($query2,MYSQLI_ASSOC);
?>



                <div class="container list-group">
                <div class="col-lg-12" style="background-color:#E6E8EC; padding-top:10px; border-radius:6px">
                <div style="padding:20px; font-size:20px">
                <div class="col-lg-3">
                <img src="image/<?php echo $result2['cpic'];?>" width="180px" height="180px" style="padding-bottom: 30px;">
                </div>
                <div class="col-lg-5">
                <h3 class="list-group-item-heading"><span class="glyphicon glyphicon-user"></span> <?php echo $result["jname"];?></h3><br>
                   

                    <span class="glyphicon glyphicon-home"></span> 
                    <?php echo $result2["cname"];?><br><br>

                    
                     <span class="glyphicon glyphicon-map-marker"></span> <?php echo $result["jposi"];?><br>

                    <span class="glyphicon glyphicon-map-marker"></span> <?php echo $result["jedu"];?><br>

                    <span class="glyphicon glyphicon-map-marker"></span> <?php echo $result["jdistype"];?><br>

                    <span class="glyphicon glyphicon-map-marker"></span> <?php echo $result["jprovince"];?><br><br>
                    
                </div>
                <div class="col-lg-4" style="padding: 55px; padding-right: 20px;">
                <p align="right">
                <button class="btn btn-default btn-lg"><a href="p-jobdetail.php?jid=<?php echo $jid;?>">รายละเอียดเพิ่มเติม</a></button></p>
                </div>
                </div></div></div>
                <?php
            }

        }
        // Blank All Filter

        if (!isset($_GET["jedu"]) && !isset($_GET["jdistype"]) && !isset($_GET["jprovince"]) && !isset($_GET["jtype"]) && !isset($_GET["jposi"])) {
            $strSQL0 = "SELECT typefulltime,typeparttime,typeintern,typefreelance,posimarketing,posipr,posiprod,posiedu,posilogistic,posisale,posiservice,posipurchase,positrahot,posifood,posibankmoney,posihr,posispec,posiacct,posigov,posihlthbty,posidesign,posimedia,posiit,posiothers,distype,preferprovince,edulevel FROM ppersonal, pedu WHERE ppersonal.pid = pedu.pid AND ppersonal.pid = '$_SESSION[pid]'";
            $query = mysqli_query($conn,$strSQL0);
            $i=0;
            $jtypecnt = 0;
            $jposicnt = 0;
            $strSQL = "SELECT * FROM jobpost WHERE (jid != '0000')";
            while($result = mysqli_fetch_array($query,MYSQL_BOTH))
            {
                if($result[0]==1)   {$strSQL = "$strSQL OR (jtype = 'งานประจำ (full time)')"; $jtypecnt++;}
                if($result[1]==1)   {$strSQL = "$strSQL OR (jtype = 'งานชั่วคราว (part time)')"; $jtypecnt++;}
                if($result[2]==1)   {$strSQL = "$strSQL OR (jtype = 'ฝึกงาน (internship)')"; $jtypecnt++;}
                if($result[3]==1)   {$strSQL = "$strSQL OR (jtype = 'งานอิสระ (freelance)')"; $jposicnt++;}
                if($result[4]==1)   {$strSQL = "$strSQL OR (jposi = 'การตลาด (marketing)')"; $jposicnt++;}
                if($result[5]==1)   {$strSQL = "$strSQL OR (jposi = 'ประชาสัมพันธ์ (PR)')"; $jposicnt++;}
                if($result[6]==1)   {$strSQL = "$strSQL OR (jposi = 'การผลิต (production)')"; $jposicnt++;}
                if($result[7]==1)   {$strSQL = "$strSQL OR (jposi = 'การศึกษา/วิชาการ (education)')"; $jposicnt++;}
                if($result[8]==1)   {$strSQL = "$strSQL OR (jposi = 'ขนส่ง (logistic)')"; $jposicnt++;}
                if($result[9]==1)   {$strSQL = "$strSQL OR (jposi = 'ฝ่ายขาย (sales)')"; $jposicnt++;}
                if($result[10]==1)  {$strSQL = "$strSQL OR (jposi = 'บริการลูกค้า (customer service)')"; $jposicnt++;}
                if($result[11]==1)  {$strSQL = "$strSQL OR (jposi = 'ฝ่ายจัดซื้อ (purchasing)')"; $jposicnt++;}                    
                if($result[12]==1)  {$strSQL = "$strSQL OR (jposi = 'ท่องเที่ยวและโรงแรม (travel and hotel)')"; $jposicnt++;}
                if($result[13]==1)  {$strSQL = "$strSQL OR (jposi = 'อาหารและเครื่องดื่ม (food and beverage)')"; $jposicnt++;}
                if($result[14]==1)  {$strSQL = "$strSQL OR (jposi = 'การเงินและธนาคาร (finance and banking)')"; $jposicnt++;}
                if($result[15]==1)  {$strSQL = "$strSQL OR (jposi = 'ทรัพยากรบุคคล (human resource)')"; $jposicnt++;}
                if($result[16]==1)  {$strSQL = "$strSQL OR (jposi = 'บริการเฉพาะทาง (specialist)')"; $jposicnt++;}
                if($result[17]==1)  {$strSQL = "$strSQL OR (jposi = 'บัญชี (accounting)')"; $jposicnt++;}
                if($result[18]==1)  {$strSQL = "$strSQL OR (jposi = 'หน่วยงานราชการ (government agency)')"; $jposicnt++;}
                if($result[19]==1)  {$strSQL = "$strSQL OR (jposi = 'โภชนาการ/สุขภาพ/ความงาม (health and beauty)')"; $jposicnt++;}
                if($result[20]==1)  {$strSQL = "$strSQL OR (jposi = 'ออกแบบ (design)')"; $jposicnt++;}
                if($result[21]==1)  {$strSQL = "$strSQL OR (jposi = 'สื่อและโฆษณา (media and advertisement)')"; $jposicnt++;}
                if($result[22]==1)  {$strSQL = "$strSQL OR (jposi = 'ไอที (IT)')"; $jposicnt++;}
                if($result[23]==1)  {$strSQL = "$strSQL OR (jposi = 'อื่นๆ (others)')"; $jposicnt++;}
                if($result[24]==1)  {$strSQL = "$strSQL OR (jdistype = '$result[24]')";}
                if($result[25]==1)  {$strSQL = "$strSQL OR (jprovince = '$result[25]')";}
                if($result[26]==1)  {$strSQL = "$strSQL OR (jedu = '$result[26]')";}
                if($jtypecnt == 4)  {$strSQL = "$strSQL OR (jtype = 'ทุกประเภทการจ้าง')";}
                if($jposicnt == 20) {$strSQL = "$strSQL OR (jtype = 'ทุกตำแหน่ง')";}
            }                         
            $query = mysqli_query($conn,$strSQL);
            echo "<html> <h1>งานที่แนะนำ</h1><br></html>";

            while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){
            ?>
 <?php   $jid = $result["jid"];
                            $cid = $result["cid"];
                            $strSQL2 = "SELECT * FROM cinfo WHERE cid = $cid";
                            $query2 = mysqli_query($conn,$strSQL2);
                            $result2 = mysqli_fetch_array($query2,MYSQLI_ASSOC);
                    ?>
                <div class="container list-group">
                <div class="col-lg-12" style="background-color:#E6E8EC; padding-top:10px; border-radius:6px">
                <div style="padding:20px; font-size:20px">
                <div class="col-lg-3">
                <img src="image/<?php echo $result2['cpic'];?>"  width="180px" height="180px" style="padding-bottom: 30px;">
                </div>
                <div class="col-lg-5">
                <h3 class="list-group-item-heading"><span class="glyphicon glyphicon-user"></span> <?php echo $result["jname"];?></h3><br>
                   <span class="glyphicon glyphicon-home"></span>
                    <?php echo $result2["cname"];?><br><br>
                    
                    
                    <span class="glyphicon glyphicon-map-marker"></span> <?php echo $result["jposi"];?><br>

                    <span class="glyphicon glyphicon-map-marker"></span> <?php echo $result["jedu"];?><br>

                    <span class="glyphicon glyphicon-map-marker"></span> <?php echo $result["jdistype"];?><br>

                    <span class="glyphicon glyphicon-map-marker"></span> <?php echo $result["jprovince"];?><br><br>
                    
                    
                    <?php // echo $result2["cemail"];
                    $mail->AddCC( $result2["cemail"], $result2["cname"]);
                    ?>
                    
                    
                </div>
                <div class="col-lg-4" style="padding: 55px; padding-right: 20px;">
                <p align="right">
                <button class="btn btn-default btn-lg"><a href="p-jobdetail.php?jid=<?php echo $jid;?>">รายละเอียดเพิ่มเติม</a></button></p>
                </div>
                </div></div></div>
                <?php
            }
        }
            
?> 


<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script></div></div>   
</body>
</html>
<?php

//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "smtp.gmail.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "xxx@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "xxx";
//Set who the message is to be sent from
$mail->setFrom('xxx@gmail.com', 'Enabled Project\'s staff');
//Set who the message is to be sent to
$mail->addAddress('xxx@gmail.com', 'ชื่อคนรับ');
//Set the subject line
$mail->CharSet = 'UTF-8';
$mail->Subject = 'คนพิการที่แนะนำ';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('content.html'), dirname(__FILE__));
$mail->msgHTML("ขณะนี้มีคนพิการที่เหมาะสมกับบริษัทของคุณ สามารถดูข้อมูลได้ที่นี่ <a href='http://localhost/c-homepage.php'>Click Here</a> ");

//send the message, check for errors
if (!$mail->send()) {
   echo "Mailer Error: " . $mail->ErrorInfo;
} else {
   echo "Message sent!";
}
?>

