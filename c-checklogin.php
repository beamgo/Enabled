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
<body>
    
     
 <!--   <a href="c-logout.php">ออกจากระบบ</a> -->
		<br><br>  
<?php 
    
    
    
    
    
    
	$cemail = $_POST["cemail"];
	//echo $cemail;
	$cpassword = $_POST["cpassword"];
	//echo $cpassword;
	if($cemail==""){
		echo "กรุณาใส่อีเมลล์";
	}
	else if($cpassword==""){
		echo "กรุณาใส่รหัสผ่าน";
	}
	else{
		$servername = "localhost";
		$name = "root";
		$userpassword = "";
		$dbname = "senior_project";
		$conn = mysqli_connect($servername,$name,$userpassword,$dbname);
        mysqli_set_charset($conn, "utf8");
        
        
		$sql = "SELECT * FROM cinfo WHERE cemail = '".$_POST["cemail"]."'";
		$objQuery = mysqli_query($conn,$sql);
		$objResult = mysqli_fetch_array($objQuery);
        
        

		if($objResult["cpassword"] != $cpassword || $objResult["cemail"] != $cemail){
		 echo "อีเมลหรือรหัสผ่าน ไม่ถูกต้อง";
			echo "
 				<html>
   					<meta http-equiv=\"Refresh\" content=\"3; URL=c-homepage.php\">
 				</html>
 			"; 
		}
		else{
            
            $_SESSION["hrname"]=$objResult["hrname"];
            $_SESSION["hrlastname"]=$objResult["hrlastname"];
            $_SESSION["cid"]=$objResult["cid"];
            
        //    echo $_SESSION["pname"];
        //    echo $_SESSION["plastname"];
			echo "สำเร็จ";
            echo "
 				<html>
   					<meta http-equiv=\"Refresh\" content=\"2; URL=c-mainbrowse.php\">
 				</html>
 			"; 

		}		
	}
?>
    
</body>
</html>