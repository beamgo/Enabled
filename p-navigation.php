
<!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top " role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="mainpageafterlogin.php">
                    <img style="max-width:100px; margin-top: -9px;" src="img/logo-small.png">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="p-search.php.php">ค้นหางาน</a>
                    </li>
                    <li> <?php    
	   $servername = "localhost";
		$name = "root";
		$userpassword = "";
		$dbname = "senior_project";
		$conn = mysqli_connect($servername,$name,$userpassword,$dbname);
        mysqli_set_charset($conn, "utf8");
        
     ?><a >ยินดีต้อนรับ &nbsp;<?php 
                        if(!isset($_SESSION["pname"])){echo "ผู้เยี่ยมชม";} else{
                        echo $_SESSION["pname"]." ";
                        echo $_SESSION["plastname"];}?></a>

                    </li>
                    <li>
                        <a href="p-edit-1.php">แก้ไขข้อมูลส่วนตัว</a>
                    </li>
                    <li>
                        <a href="p-logout.php">ออกจากระบบ</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
