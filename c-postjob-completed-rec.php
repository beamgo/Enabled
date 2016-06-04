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

    <title>คนพิการที่แนะนำ</title>

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

$offset = 60 * 60 * 24 * 2;
$ExpStr = "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
Header($ExpStr);
?>
    
<body><?php include 'c-navigation.php';?>
 
		<?php //Connect Database

	    $servername = "localhost";
		$name = "root";
		$userpassword = "";
		$dbname = "senior_project";
		$conn = mysqli_connect($servername,$name,$userpassword,$dbname);
     	mysqli_set_charset($conn, "utf8"); 

     	?>

	<!--
	<a href = "Koh_Search.php">สำหรับคนพิการหางาน</a> / <a href="Fah_CompanySearch.php">สำหรับบริษัทค้นหาคนพิการ</a><br><br>
	-->
 	

<?php 	
	
       //  echo $_SESSION["hrname"]; ?> &nbsp;&nbsp;&nbsp; <?php
      //  echo $_SESSION["hrlastname"];
      //  echo $_SESSION["cid"];
    
    
        $sql0 = "SELECT MAX(jid) FROM jobpost";
		$objQuery0 = mysqli_query($conn,$sql0);
		$objResult0 = mysqli_fetch_array($objQuery0);
        $max = $objResult0["MAX(jid)"];
    
        $sql = "SELECT * FROM jobpost,nouse_edulevel WHERE jid = '$max' AND jobpost.jedu = nouse_edulevel.levelname";
		$objQuery = mysqli_query($conn,$sql);
		$objResult = mysqli_fetch_array($objQuery);
    

       
      
    
        $jtype = $objResult["jtype"];

        $jposi = $objResult["jposi"];

        $jdistype = $objResult["jdistype"];  
  
        $jedu = $objResult["levelno"];
  
        $jprovince = $objResult["jprovince"];
  
    echo $jtype;
      
   
    
    
      
		$strSQL = "";
        $DoQuery=0;
        $CheckStringSQL=0;
		//Start Check JobType
		if(isset($jtype)){ 
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
		if(isset($jposi)){ 
            if($jposi == "ทุกตำแหน่ง")
            {
                $strSQL = $strSQL;
            }
            else
            {
                if($CheckStringSQL > 0){

                    $strSQL = "$strSQL AND (ppersonal.$jposi = '1') ";
                } 
                else{

                    $strSQL = "SELECT * FROM ppersonal,pedu,nouse_edulevel WHERE (ppersonal.pid = pedu.pid) AND (pedu.edulevel = nouse_edulevel.levelname)";
                    $strSQL = "$strSQL AND (ppersonal.$jposi = '1') ";

                    $CheckStringSQL = 1;

                }
                $DoQuery = 1;
            }
        } // End Check JobPosition

        //Start Check DisType
		if(isset($jdistype)){ 
            if($jdistype == "ทุกประเภทความพิการ")
            {
                $strSQL = $strSQL;
            }
            else
            {
                if($CheckStringSQL > 0){

                    $strSQL = "$strSQL And (ppersonal.distype = '$jdistype') ";
                } 
                else{

                    $strSQL = "SELECT * FROM ppersonal,pedu,nouse_edulevel WHERE (ppersonal.pid = pedu.pid) AND (pedu.edulevel = nouse_edulevel.levelname)";
                    $strSQL = "$strSQL AND (ppersonal.distype = '$jdistype') ";

                    $CheckStringSQL = 1;

                }
                $DoQuery = 1;
            }
        } // End Check DisType

		//Start Check Education
		if(isset($jedu)){ 
            if($jedu == "อ่านออกเขียนได้")
            {
                $strSQL = $strSQL;
            }
            else
            {
                if($CheckStringSQL > 0){

                    $strSQL = "$strSQL And (levelno >= '$jedu')";
                } 
                else{

                    $strSQL = "SELECT * FROM ppersonal,pedu,nouse_edulevel WHERE (ppersonal.pid = pedu.pid) AND (pedu.edulevel = nouse_edulevel.levelname)";
                    $strSQL = "$strSQL AND (levelno >= '$jedu')";

                    $CheckStringSQL = 1;

                }
                $DoQuery = 1;
            }
        } // End Check Education
		
		//Start Check Province
    if(isset($jprovince)){ 
            if($jprovince == "ทุกจังหวัด")
            {
                $strSQL = $strSQL;
            }
            else
            {
                if($CheckStringSQL > 0){

        			$strSQL = "$strSQL AND (ppersonal.preferprovince = '$jprovince' OR ppersonal.preferprovince = 'ทุกจังหวัด')";
        		}
        		else{

        			$strSQL = "SELECT * FROM ppersonal,pedu,nouse_edulevel WHERE (ppersonal.pid = pedu.pid) AND (pedu.edulevel = nouse_edulevel.levelname)";
        			$strSQL = "$strSQL AND (ppersonal.preferprovince = '$jprovince' OR ppersonal.preferprovince = 'ทุกจังหวัด')";
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
        
            if($DoQuery==1){
        	$query = mysqli_query($conn,$strSQL);
        //	echo $strSQL;?><br><br><?php
            echo "<html> <h1>คนพิการที่แนะนำ</h1><br><br></html>";
        	
			while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){
				?>

                <div class="container list-group">
                <div class="col-lg-12" style="background-color:#E6E8EC; padding-top:10px; border-radius:6px">
                <div style="padding:20px; font-size:20px">
                <div class="col-lg-3">
                <img src="image/<?php echo $result["ppichalf"];?>" width="180px" height="180px" style="padding-bottom: 30px;">
                </div>
                <div class="col-lg-5">
                <h3 class="list-group-item-heading">
                <span class="glyphicon glyphicon-user"></span> 
                <?php echo $result["pname"];?></h3><br>
                

                <span class="glyphicon glyphicon-home"></span>
                <?php echo $result["pemail"]; 
                $mail->AddCC( $result["pemail"], $result["pname"]);?><br><br>


                <span class="glyphicon glyphicon-map-marker"></span>
                <?php echo $result["distype"];?><br>


                <span class="glyphicon glyphicon-map-marker"></span>
                <?php echo $result["edulevel"];?><br>


                <span class="glyphicon glyphicon-map-marker"></span>
                <?php echo $result["preferprovince"];?><br>

                <br>
</div>
<div class="col-lg-4" style="padding: 55px; padding-right: 20px;">
                <p align="right">
                <button class="btn btn-default btn-lg"><a href="p-jobdetail.php?jid=<?php echo $jid;?>">รายละเอียดเพิ่มเติม</a></button></p>
                </div>
</div></div>
</div>

                <?php
			}
            }
   
      //      else{
        //        echo "ไม่มีคนพิการที่ตรงกับความต้องการ";
       //     }


?>





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
$mail->Subject = 'งานที่แนะนำ';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('content.html'), dirname(__FILE__));
$mail->msgHTML("ขณะนี้มีบริษัทที่เหมาะสมกับคุณ สามารถดูข้อมูลได้ที่นี่ <a href='http://localhost/p-homepage.php'>Click Here</a> ");

//send the message, check for errors
if (!$mail->send()) {
   echo "Mailer Error: " . $mail->ErrorInfo;
} else {
   echo "Message sent!";
}
?>