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
    <div id="hidden_form_container" style="display:none;"></div>

<?php
	$pemail = $_POST["pemail"];

    $ppassword = $_POST["ppassword"];
    $retypepassword = $_POST["retypepassword"];

		$servername = "localhost";
		$name = "root";
		$userpassword = "";
		$dbname = "senior_project";
		$conn = mysqli_connect($servername,$name,$userpassword,$dbname);
		$sql = "SELECT * FROM ppersonal WHERE pemail = '".$_POST["pemail"]."'";
		$objQuery = mysqli_query($conn,$sql);
		$objResult = mysqli_fetch_array($objQuery);

    echo $objResult["pemail"];

    
        if($objResult["pemail"] == $pemail){

            echo "อีเมลนี้มีในระบบแล้ว กรุณาใช้อีเมลอื่น";
            echo "
 				<html>
   					<meta http-equiv=\"Refresh\" content=\"3; URL=p-register.php\">
 				</html>
 			";
        }
    
        else if($ppassword != $retypepassword){
            echo "ระบุรหัสผ่านไม่ตรงกัน กรุณาระบุรหัสผ่านให้ตรงกัน";
            echo "
 				<html>
   					<meta http-equiv=\"Refresh\" content=\"3; URL=p-register.php\">
 				</html>
 			";
        }
        else if(strlen( $ppassword) < 8){
            echo "กรุณาตั้งรหัสผ่านอย่างน้อย 8 ตัวอักษร";
            echo "
        <html>
            <meta http-equiv=\"Refresh\" content=\"3; URL=c-register.php\">
        </html>
      ";
        }
         
		else{
           echo $pemail;
           echo $ppassword;
            $_SESSION["preg_email"] =  $pemail;
            $_SESSION["preg_pass"] = $ppassword;
            
            
            
            
        function Gen_ID(){	
        $servername = "localhost";
		$name = "root";
		$userpassword = "";
		$dbname = "senior_project";
		$conn = mysqli_connect($servername,$name,$userpassword,$dbname);
        mysqli_set_charset($conn, "utf8");
		$New_ID = 0;
		$Current_ID = 0;
		$strSQL = "SELECT MAX(pid) FROM ppersonal";
				$obj = mysqli_query($conn,$strSQL);
				while($objResult = mysqli_fetch_array($obj,MYSQLI_ASSOC))
				{	
				$Current_ID = $objResult["MAX(pid)"];
				}	
				$New_ID	= $Current_ID + 1;
				return $New_ID;
		}
        $id = Gen_ID();
        $_SESSION["pid"]= $id;
    
        $sql = "INSERT INTO ppersonal (pid, ppassword, pemail,ppichalf,ppicfull)
                VALUES ('$id','$ppassword','$pemail','default.png','default.png')";
    
        $objQuery = mysqli_query($conn,$sql);
    
    
        $sql2 = "INSERT INTO pedu (pid) VALUES('$id')";
        $objQuery2 = mysqli_query($conn,$sql2);
    
    
        $sql3 = "INSERT INTO pexp (pid) VALUES('$id')";
        $objQuery3 = mysqli_query($conn,$sql3);
            
           
            
               echo // $_SESSION["pid"];
            
            
            
            
          header("location: register-1.php"); //redirect

        }

            ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
