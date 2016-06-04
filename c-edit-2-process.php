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
</head>
<body>
    <div id="hidden_form_container" style="display:none;"></div>

<?php    
	   $servername = "localhost";
		$name = "root";
		$userpassword = "";
		$dbname = "senior_project";
		$conn =
        mysqli_connect($servername,$name,$userpassword,$dbname);
        mysqli_set_charset($conn, "utf8");
    
                
    
         $sql = "UPDATE cinfo SET
                cname = '$_POST[cname]',
                cbranch = '$_POST[cbranch]',
                ctype = '$_POST[ctype]',
                cgenre = '$_POST[cgenre]',
                cphone = '$_POST[cphone]',
                cfax = '$_POST[cfax]',
                caddress = '$_POST[caddress]',
                cprovince = '$_POST[cprovince]'
                WHERE cid = '$_SESSION[cid]'";
    
        $objQuery = mysqli_query($conn,$sql);
    
        echo $_SESSION["hrname"]; ?> &nbsp;&nbsp;&nbsp; <?php
        echo $_SESSION["hrlastname"];
        echo $_SESSION["cid"];
     

        header("location: c-edit-3.php");
    ?>
    
    
 
    
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>