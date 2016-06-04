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

    <title>ค้นหาคนพิการ</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
   <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
      <!--  <script type="text/javascript">
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
    
         $_SESSION["cid"];
              //  $_SESSION[cid]
        $sql55= "SELECT * FROM cinfo WHERE cid = '".$_SESSION["cid"]."'";
		$objQuery55 = mysqli_query($conn,$sql55);
		$objResult = mysqli_fetch_array($objQuery55,MYSQLI_ASSOC);   
        
        
    

?>
      <body>
<?php include 'c-navigation.php';?>

<div class="container" style="background-image: url(banner-bg.jpg); height: 70%; width: 100%;"><font color="#FFFFFF">
    <div class="row">
    <div class="col-lg-2">
        </div>
    <div class="col-lg-4">
        <br><br><br><br>              
        <h3>ค้นหาคนพิการที่... </h3><br>
        </div></div>
        <div class="row">
            <div class="col-lg-2">
            </div>
        <div class="col-lg-4">
            
	
        <form method="get" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">	

        สนใจงานประเภท : <select name="jtype"  class="form form-control">
        				<option value="ทุกประเภทการจ้าง">ทุกประเภทการจ้าง</option>
                        <option value="typefulltime">งานประจำ (full time)</option>
                      	<option value="typeparttime">งานชั่วคราว (part time)</option>
                        <option value="typeintern">ฝึกงาน (internship)</option>
                        <option value="typefreelance">งานอิสระ (freelance)</option>
        			</select>
        <br><br>
        
        สนใจตำแหน่ง : <select name="posi" class="form form-control">
        				<option value="ทุกตำแหน่ง">ทุกตำแหน่ง</option>
                        <option value="posimarketing">การตลาด (marketing)</option>
                        <option value="posipr">ประชาสัมพันธ์ (PR)</option>
                        <option value="posiprod">การผลิต (production)</option>
                        <option value="posiedu">การศึกษา/วิชาการ (education)</option>
                        <option value="posilogistic">ขนส่ง (logistic)</option>
                        <option value="posisale">ฝ่ายขาย (sales)</option>
                        <option value="posiservice">บริการลูกค้า (customer service)</option>
                        <option value="posipurchase">ฝ่ายจัดซื้อ (purchasing)</option>
                        <option value="positrahot">ท่องเที่ยวและโรงแรม (travel and hotel)</option>
                        <option value="posifood">อาหารและเครื่องดื่ม (food and beverage)</option>
                        <option value="posibankmoney">การเงินและธนาคาร (finance and banking)</option>
                        <option value="posihr">ทรัพยากรบุคคล (human resource)</option>
                        <option value="posispec">บริการเฉพาะทาง (specialist)</option>
                        <option value="posiacct">บัญชี (accounting)</option>
                        <option value="posigov">หน่วยงานราชการ (government agency)</option>
                        <option value="posihlthbty">โภชนาการ/สุขภาพ/ความงาม (health and beauty)</option>
                        <option value="posidesign">ออกแบบ (design)</option>
                        <option value="posimedia">สื่อและโฆษณา (media and advertisement)</option>
                        <option value="posiit">ไอที (IT)</option>
                        <option value="posiothers">อื่นๆ (others)</option>
                 </select>
         <br><br>
        
        ความพิการประเภท : <select name="distype" class="form form-control">
        				<option value="ทุกประเภทความพิการ">ทุกประเภทความพิการ</option>
                        <option value="พิการทางการเห็น">พิการทางการเห็น</option>
                      	<option value="พิการทางการได้ยินหรือสื่อความหมาย">พิการทางการได้ยินหรือสื่อความหมาย</option>
                        <option value="พิการทางร่างกายหรือการเคลื่อนไหว">พิการทางร่างกายหรือการเคลื่อนไหว</option>
                        <option value="พิการทางจิตใจหรือพฤติกรรม">พิการทางจิตใจหรือพฤติกรรม</option>
                        <option value="พิการทางสติปัญญา">พิการทางสติปัญญา</option>
                        <option value="พิการทางการเรียนรู้">พิการทางการเรียนรู้</option>
                        <option value="พิการทางออทิสติก">พิการทางออทิสติก</option>
        			</select>
         <br><br><br><br>

            </div>

            <div class="col-lg-4">
        ระดับการศึกษาขั้นต่ำ : <select name="edulevel" class="form form-control">
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
        			</select>
         <br><br><br>
        สนใจทำงานในจังหวัด : <select name="preferprovince" class="form form-control">
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
        			</select>
        
        <br><br>

        <p align="right"><button type="submit" class="btn btn-default btn-lg btn-warning">ค้นหางาน <i class="fa fa-search fa-fw"></i></button></p>
	</div>
    </div> <!--End Row2 -->
    </form>
    </font>
    </div> <!--End Container-->
    <br>
        
<?php 	
		$CheckStringSQL = 0;
		$DoQuery = 0;
		$strSQL = "";
		//Start Check JobType
		if(isset($_GET["jtype"])){ 
			$jtype = $_GET["jtype"];
            if($jtype == "ทุกประเภทการจ้าง")
            {
                $strSQL = $strSQL;
            }
            else
            {
                if($CheckStringSQL > 0)
                {
                    $strSQL = "$strSQL AND (ppersonal.$jtype = '1') ";
                }
                else{
                    $strSQL = "SELECT * FROM ppersonal,pedu,nouse_edulevel WHERE (ppersonal.pid = pedu.pid) AND (pedu.edulevel = nouse_edulevel.levelname)";
                    $strSQL = "$strSQL AND (ppersonal.$jtype = '1') ";
                    $CheckStringSQL = 1;
                }
                $DoQuery = 1;
            }
        }
    // End Check JobType

        //Start Check JobPosition
		if(isset($_GET["posi"])){ 
			$posi = $_GET["posi"];
            if($posi == "ทุกตำแหน่ง")
            {
                $strSQL = $strSQL;
            }
            else
            {
                if($CheckStringSQL > 0){

                    $strSQL = "$strSQL AND (ppersonal.$posi = '1') ";
                } 
                else{

                    $strSQL = "SELECT * FROM ppersonal,pedu,nouse_edulevel WHERE (ppersonal.pid = pedu.pid) AND (pedu.edulevel = nouse_edulevel.levelname)";
                    $strSQL = "$strSQL AND (ppersonal.$posi = '1') ";

                    $CheckStringSQL = 1;

                }
                $DoQuery = 1;
            }
        } // End Check JobPosition

        //Start Check DisType
		if(isset($_GET["distype"])){ 
            
			$distype = $_GET["distype"];
            if($distype == "ทุกประเภทความพิการ")
            {
                $strSQL = $strSQL;
            }
            else
            {
                if($CheckStringSQL > 0){

                    $strSQL = "$strSQL And (ppersonal.distype = '$distype') ";
                } 
                else{

                    $strSQL = "SELECT * FROM ppersonal,pedu,nouse_edulevel WHERE (ppersonal.pid = pedu.pid) AND (pedu.edulevel = nouse_edulevel.levelname)";
                    $strSQL = "$strSQL AND (ppersonal.distype = '$distype') ";

                    $CheckStringSQL = 1;

                }
                $DoQuery = 1;
            }
        } // End Check DisType

		//Start Check Education
		if(isset($_GET["edulevel"])){ 
            
			$edulevel = $_GET["edulevel"];
            if($edulevel == "อ่านออกเขียนได้")
            {
                $strSQL = $strSQL;
            }
            else
            {
                if($CheckStringSQL > 0){

                    $strSQL = "$strSQL And (levelno >= '$edulevel' OR levelno = '01') ";
                } 
                else{

                    $strSQL = "SELECT * FROM ppersonal,pedu,nouse_edulevel WHERE (ppersonal.pid = pedu.pid) AND (pedu.edulevel = nouse_edulevel.levelname)";
                    $strSQL = "$strSQL AND (levelno >= '$edulevel') ";

                    $CheckStringSQL = 1;

                }
                $DoQuery = 1;
            }
        } // End Check Education
		
		//Start Check Province
    if(isset($_GET["preferprovince"])){ 
			$preferprovince = $_GET["preferprovince"];
            if($preferprovince == "ทุกจังหวัด")
            {
                $strSQL = $strSQL;
            }
            else
            {
                if($CheckStringSQL > 0){

        			$strSQL = "$strSQL AND (ppersonal.preferprovince = '$preferprovince' OR ppersonal.preferprovince = 'ทุกจังหวัด')";
        		}
        		else{

        			$strSQL = "SELECT * FROM ppersonal,pedu,nouse_edulevel WHERE (ppersonal.pid = pedu.pid) AND (pedu.edulevel = nouse_edulevel.levelname)";
        			$strSQL = "$strSQL AND (ppersonal.preferprovince = '$preferprovince' OR ppersonal.preferprovince = 'ทุกจังหวัด')";
                    $CheckStringSQL = 1;
        		}	
                $DoQuery = 1;
            }
       
    }
    // End Check Province
?>
        
<div class="container">
<div class="row">        
        
<?php
		// Start Query
        if($DoQuery == 1){

        	$query = mysqli_query($conn,$strSQL);
        	//echo $strSQL;?><br><?php
        	echo "<html> <h1>ผลการค้นหา</h1><br><br> </html>";
        	?>

        	<?php

			while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){
?>
    <div class="container list-group">
                <div class="col-lg-12" style="background-color:#E6E8EC; padding-top:10px; border-radius:6px">
                <div style="padding:20px; font-size:20px">
                <div class="col-lg-3">
                <img src="image/<?php echo $result["ppichalf"]; ?>" width="180px" height="180px" style="padding-bottom: 30px;">
                </div>
                <div class="col-lg-5">
                <h3 class="list-group-item-heading"><span class="glyphicon glyphicon-user"></span>
                    <?php echo $result["pname"];?>&nbsp;<?php echo $result["plastname"];?></h3><br>
                    
			<span class="glyphicon glyphicon-home"></span> 
                    <?php  echo $result['pemail'];?><br>
                    
            <span class="glyphicon glyphicon-map-marker"></span>        
                    <?php echo $result["distype"];?><br>
                    
             <span class="glyphicon glyphicon-map-marker"></span>        
                    <?php echo $result["edulevel"];?><br>
                    
            <span class="glyphicon glyphicon-home"></span>        
                    <?php echo $result["preferprovince"];?>
             </div>       
            <div class="col-lg-4" style="padding: 55px; padding-right: 20px;">
                <p align="right">
                <button class="btn btn-default btn-lg"><a href="c-pdetail.php?pid=<?php echo $result["pid"];?>">รายละเอียดเพิ่มเติม</a></button></p>
                </div>
                </div></div></div>
    
    <?php
                
                
			}
		}

		// Blank All Filter

		if (!isset($_GET["posi"]) && !isset($_GET["jtype"]) && !isset($_GET["distype"]) && !isset($_GET["preferprovince"]) && !isset($_GET["edulevel"])) {
			
			echo "<html> <h1>คนพิการทั้งหมด</h1><br></html>";
			
			$strSQL = "SELECT ppersonal.*,pedu.* FROM ppersonal,pedu WHERE (ppersonal.pid = pedu.pid)";
			$query = mysqli_query($conn,$strSQL);

			while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){
				?>
                <div class="container list-group">
                <div class="col-lg-12" style="background-color:#E6E8EC; padding-top:10px; border-radius:6px">
                <div style="padding:20px; font-size:20px">
                <div class="col-lg-3">
                   
                <img src="image/<?php echo $result["ppichalf"];?>" width="180px" width="180px" height="180px" style="padding-bottom: 30px;">
                </div>
                <div class="col-lg-5">
                <h3 class="list-group-item-heading"><span class="glyphicon glyphicon-user"></span> <?php
                
//				echo $result["pid"];
                echo $result["pname"];?>&nbsp;<?php echo $result["plastname"];?></h3>
                <span class="glyphicon glyphicon-home"></span>
                <?php echo $result["distype"]?><br>
                <span class="glyphicon glyphicon-home"></span>
                <?php echo $result["edulevel"];?><br>
                <span class="glyphicon glyphicon-home"></span>
                <?php echo $result["preferprovince"];?><br>
                </div>
                <div class="col-lg-4" style="padding: 55px; padding-right: 20px;">
                <p align="right">
                <button class="btn btn-default btn-lg"><a href="c-pdetail.php?pid=<?php echo $result["pid"];?>">รายละเอียดเพิ่มเติม</a></button></p>
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