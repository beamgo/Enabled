<?php
session_start();
ob_start();
error_reporting(0);
?>
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

<?php //หน้านี้ทำหน้าที่ยัดข้อมูลประกาศรับสมัครงานลง table jobpost แล้วก็gen jidด้วย
Header("Cache-Control: must-revalidate");

$offset = 60 * 60 * 24 * 3;
$ExpStr = "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
Header($ExpStr);
?>    
        
<body>
<br><br><br>
        <form method="post" action="c-postjob-completed-rec.php">
  <!--          
            ยืนยันการประกาศงาน? <br>
            <button type="submit">โพสต์ประกาศรับสมัครงานนี้</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="c-mainbrowse.php"><button>ยกเลิก</button></a>
        -->    
            
    <?php 
        $servername = "localhost";
		$name = "root";
		$userpassword = "";
		$dbname = "senior_project";
		$conn = mysqli_connect($servername,$name,$userpassword,$dbname);
        mysqli_set_charset($conn, "utf8");
        echo $_SESSION["hrname"]; ?> &nbsp;&nbsp;&nbsp; <?php
        echo $_SESSION["hrlastname"];
        echo $_SESSION["cid"];
    
    
         $sql2 = "SELECT * FROM cinfo WHERE cid = '$_SESSION[cid]'";
		$objQuery2 = mysqli_query($conn,$sql2);
		$objResult2 = mysqli_fetch_array($objQuery2);
    
    

        $cpic = $objResult2['cpic'];
        $cname = $_POST["cname"];
        $jname = $_POST["jname"];    
        $jtype = $_POST["jtype"];
        $jposi = $_POST["jposi"];
        $jdistype = $_POST["jdistype"];  
        $jedu = $_POST["jedu"];
        $jprovince = $_POST["jprovince"];
        $jjd = $_POST["jjd"];
        $jexp = $_POST["jexp"];
        $jsalary = $_POST["jsalary"];
        $jabtcmp = $_POST["jabtcmp"];
        $jcontact = $_POST["jcontact"];
    
        $sql = "SELECT * FROM cinfo WHERE cname = '$cname'";
		$objQuery = mysqli_query($conn,$sql);
		$objResult = mysqli_fetch_array($objQuery);

        $cid = $objResult["cid"];
    
    
        function Gen_ID(){	
        $servername = "localhost";
		$name = "root";
		$userpassword = "";
		$dbname = "senior_project";
		$conn = mysqli_connect($servername,$name,$userpassword,$dbname);
        mysqli_set_charset($conn, "utf8");
		$New_ID = 0;
		$Current_ID = 0;
		$strSQL = "SELECT MAX(jid) FROM jobpost";
        $obj = mysqli_query($conn,$strSQL);
				while($objResult = mysqli_fetch_array($obj,MYSQLI_ASSOC))
				{	
				$Current_ID = $objResult["MAX(jid)"];
				}	
				$New_ID	= $Current_ID + 1;
				return $New_ID;
		}
        $jid = Gen_ID();
       // $_SESSION["jid"]= $jid; มันเป็นseesionไม่ได้อยุละปะ
    
            echo $cid;
            echo $jname;
            echo $jtype;
            echo $jposi;
            echo $jprovince;
            echo $jexp;
            echo $jsalary;
            echo $jabtcmp;
            echo $jdistype;
            echo $jcontact;
            echo $jjd;
            echo $jedu;
            
            
            
        $sql3 = "INSERT INTO jobpost (jid, cid, jname, jtype, jposi, jprovince, jexp, jsalary, jabtcmp, jdistype, jcontact, jjd, jedu)
                VALUES ('$jid', '$cid', '$jname', '$jtype', '$jposi', '$jprovince', '$jexp', '$jsalary', '$jabtcmp', '$jdistype', '$jcontact', '$jjd', '$jedu')";
           
    
        $objQuery3 = mysqli_query($conn,$sql3);
        //$objResult3 = mysqli_fetch_array($objQuery3);
    
        echo $jid;
    
    
    header("location: c-postjob-completed-rec.php"); //redirect
    
    
    //jid
    //cid
    //cname
   // jname
   // jtype
    //jposi
   // jdistype
   // jedu
   // jprovince
   // jjd
   // jexp
  //  jsalary
   // jabtcmp
   // jcontact
    ?>
    
   
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    </form>
            </body>
</html>