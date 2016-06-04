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
</head>

<body>
         <form method="post" action="c-edit-3.php" enctype="multipart/form-data">
         <?php    
	   $servername = "localhost";
		$name = "root";
		$userpassword = "";
		$dbname = "senior_project";
		$conn = mysqli_connect($servername,$name,$userpassword,$dbname);
        mysqli_set_charset($conn, "utf8");
    
      
             
    ?>
     
        <?php
        echo $_SESSION["cid"];
      
                $namephoto = $_FILES["uppic"]["name"];
        $tmp=explode('.',$namephoto);
        $extension=end($tmp);
                $tmpphoto = $_FILES["uppic"]["tmp_name"];
                $icon = 'c-logo';
                $space = '_';
                $dot = '.';
                $id = $_SESSION["cid"];
                $newname = $icon.$space.$id.$dot.$extension;
                echo $newname; 
        // ถึงตรงแอคโค่ชื่อยังถูก
                
        ?> <br>
               <?php 
        mysqli_set_charset($conn, "utf8");
                
                if(copy($_FILES["uppic"]["tmp_name"],"image/".$newname))
                {
                    echo "ย้ายรูปได้";
                }
                else 
                {
                    echo "ย้ายไม่ได้";
                }
                
                
                $sql1 = "UPDATE cinfo SET 
                        cpic = '$newname'
                        WHERE cid = '$_SESSION[cid]'";
                 $objQuery = mysqli_query($conn,$sql1);
                
                
        
        
        header("location:c-edit-3.php");
        
        ?>
        
        
        </form>
    </body>
    
</html>