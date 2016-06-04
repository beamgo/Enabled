<?php
session_start();
ob_start();
error_reporting(0);
?>
<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
	<meta charset="UTF-8">
<title>Untitled Document</title>
    
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
<body>
    <div id="hidden_form_container" style="display:none;"></div>

<?php
	$cemail = $_POST["cemail"];
    $cpassword = $_POST["cpassword"];
    $retypepassword = $_POST["retypepassword"];

		$servername = "localhost";
		$name = "root";
		$userpassword = "";
		$dbname = "senior_project";
		$conn = mysqli_connect($servername,$name,$userpassword,$dbname);
		$sql = "SELECT * FROM cinfo WHERE cemail = '".$_POST["cemail"]."'";
		$objQuery = mysqli_query($conn,$sql);
		$objResult = mysqli_fetch_array($objQuery);

    echo $objResult["cemail"];


        if($objResult["cemail"] == $cemail){

            echo "อีเมลนี้มีในระบบแล้ว กรุณาใช้อีเมลอื่น";
            echo "
 				<html>
   					<meta http-equiv=\"Refresh\" content=\"3; URL=c-register.php\">
 				</html>
 			";
        }
    
        else if($cpassword != $retypepassword){
            echo "ระบุรหัสผ่านไม่ตรงกัน กรุณาระบุรหัสผ่านให้ตรงกัน";
            echo "
 				<html>
   					<meta http-equiv=\"Refresh\" content=\"3; URL=c-register.php\">
 				</html>
 			";
        }
         else if(strlen( $cpassword) < 8){
            echo "กรุณาตั้งรหัสผ่านอย่างน้อย 8 ตัวอักษร";
            echo "
        <html>
            <meta http-equiv=\"Refresh\" content=\"3; URL=c-register.php\">
        </html>
      ";
        }



		else{
           echo $cemail;
           echo $cpassword;
            $_SESSION["creg_email"] =  $cemail;
            $_SESSION["creg_pass"] = $cpassword;
            
             function Gen_cID(){
        $servername = "localhost";
		$name = "root";
		$userpassword = "";
		$dbname = "senior_project";
		$conn = mysqli_connect($servername,$name,$userpassword,$dbname);
        mysqli_set_charset($conn, "utf8");
		$New_cID = 0;
		$Current_cID = 0;
		$strSQL = "SELECT MAX(cid) FROM cinfo";
				$obj = mysqli_query($conn,$strSQL);
				while($objResult = mysqli_fetch_array($obj,MYSQLI_ASSOC))
				{
				$Current_cID = $objResult["MAX(cid)"];
				}
				$New_cID	= $Current_cID + 1;
				return $New_cID;
		}
        $cid = Gen_cID();
        $_SESSION["cid"]= $cid;

        $sql = "INSERT INTO cinfo (cid, cpassword, cemail,cpic)
                VALUES ('$cid','$cpassword','$cemail','default.png')";

        $objQuery = mysqli_query($conn,$sql);

        //     echo $_SESSION["hrname"]; ?> &nbsp;&nbsp;&nbsp; <?php
       //      echo $_SESSION["hrlastname"];
        //     echo $_SESSION["cid"];
            
          header("location: companyregister-1.php"); //redirect



        }

            ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
