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
    
<?php 
    
        
    
	$pemail = $_POST["pemail"];
	//echo $pemail;
	$ppassword = $_POST["ppassword"];
	//echo $ppassword;
	if($pemail==""){
		echo "กรุณาใส่อีเมลล์";
	}
	else if($ppassword==""){
		echo "กรุณาใส่รหัสผ่าน";
	}
	else{
		$servername = "localhost";
		$name = "root";
		$userpassword = "";
		$dbname = "senior_project";
		$conn = mysqli_connect($servername,$name,$userpassword,$dbname);
         mysqli_set_charset($conn, "utf8");
		$sql = "SELECT * FROM ppersonal WHERE pemail = '".$_POST["pemail"]."'";
		$objQuery = mysqli_query($conn,$sql);
		$objResult = mysqli_fetch_array($objQuery);
       
        
        if($objResult["ppassword"] != $ppassword || $objResult["pemail"] != $pemail){
		 echo "อีเมลหรือรหัสผ่าน ไม่ถูกต้อง";
			echo "
 				<html>
   					<meta http-equiv=\"Refresh\" content=\"3; URL=p-homepage.php\">
 				</html>
 			"; 
		}
		else{
            
            $_SESSION["pname"]=$objResult["pname"];
            $_SESSION["plastname"]=$objResult["plastname"];
            $_SESSION["pid"]=$objResult["pid"];
            
         //   echo $_SESSION["pname"];
         //   echo $_SESSION["plastname"];
            
			echo "สำเร็จ";
            echo "
 				<html>
   					<meta http-equiv=\"Refresh\" content=\"2; URL=mainpageafterlogin.php\">
 				</html>
 			"; 
            

		}		
	}
?>


    
</body>
</html>