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

	$email = $_POST["email"];
	//echo $pemail;
	$password = $_POST["password"];
	//echo $ppassword;
	if($email==""){
		echo "กรุณาใส่อีเมลล์";
	}
	else if($password==""){
		echo "กรุณาใส่รหัสผ่าน";
	}
	else{
		$servername = "localhost";
		$name = "root";
		$userpassword = "";
		$dbname = "senior_project";
		$conn = mysqli_connect($servername,$name,$userpassword,$dbname);
         mysqli_set_charset($conn, "utf8");

		$sql = "SELECT * FROM ppersonal,cinfo WHERE pemail = '".$_POST["email"]."' or cemail = '".$_POST["email"]."'" ;
		$objQuery = mysqli_query($conn,$sql);
		$objResult = mysqli_fetch_array($objQuery);
       
        

		 if($objResult["cpassword"] == $password || $objResult["cemail"] == $email){

			$_SESSION["pname"]=$objResult["pname"];
			$_SESSION["plastname"]=$objResult["plastname"];
			$_SESSION["pid"]=$objResult["pid"];

			//   echo $_SESSION["pname"];
			//   echo $_SESSION["plastname"];

			echo "สำเร็จ";
			echo "
 				<html>
   					<meta http-equiv=\"Refresh\" content=\"2; URL=mainpageafterlogin-c.php\">
 				</html>
 			";


		}
	    else if($objResult["ppassword"] == $password || $objResult["pemail"] == $email){
            
            $_SESSION["pname"]=$objResult["pname"];
            $_SESSION["plastname"]=$objResult["plastname"];
            $_SESSION["pid"]=$objResult["pid"];
            
			echo "สำเร็จ";
            echo "
 				<html>
   					<meta http-equiv=\"Refresh\" content=\"2; URL=mainpageafterlogin.php\">
 				</html>
 			"; 
            

		}
		else{
			echo "อีเมลหรือรหัสผ่าน ไม่ถูกต้อง";
			echo "
 				<html>
   					<meta http-equiv=\"Refresh\" content=\"3; URL=index.php\">
 				</html>
 			";
		}
	}
?>


    
</body>
</html>