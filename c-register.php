
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
	<meta charset="UTF-8">
<title>Untitled Document</title>
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
     
?>    
    

    
<body>

<body background="banner-bg.jpg">  
    <div class="container">
        <div class="row"><br><br><br><br><br><br><br>
        </div>
        <div class="row">
          <div class="col-md-4" style="#ffb130">
          </div>
          <div class="col-md-4" style="border-radius:5px; border: 1px white solid; align-self: center; overflow: hidden; background-color:#FFFFFF; width:360px; box-shadow: 10px 10px 5px #888888;">
            
          <form method="post" action="c-checkreg.php">
          <h3 style="padding-bottom:8px; padding-top:3px"><center><font color="#5C5C5C">ผู้ประกอบการ</font></center></h3>
          อีเมล์ :
          <input name="cemail" type="email" required autofocus style="border:2px #D4D6DD solid" class="form-control"><br>
          รหัสผ่าน :
          <input name="cpassword" type="password" required placeholder="รหัสผ่าน 8 - 15 ตัวอักษร" maxLength="15" style="border:2px #D4D6DD solid; border-radius:4px" class="form-control"><br>
          ยืนยันรหัสผ่าน :
          <input name="retypepassword" required type="password" placeholder="กรอกรหัสผ่านอีกครั้ง" maxLength="15" style="border:2px #D4D6DD solid; border-radius:4px" class="form-control"><br><br>
        
          <button class="btn btn-lg btn-success btn-block" type="submit" style="border-radius:5px; font-size:15px">สมัครสมาชิก</button>
          </form>
          </div>
        <div class="col-md-4">
        </div> 
        </div> <!-- /container -->
<br><br><br>

       

       
        
        
    </div>
</body>
</html>