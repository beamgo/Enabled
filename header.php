<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top " role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" rel="home" href="#" title="Buy Sell Rent Everyting">
                <img style="max-width:100px; margin-top: -9px;"
                     src="img/logo-small.png">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

               <!-- <li>
                    <a class="navbar-brand" href="mainpage.php">หน้าแรก</a>
                </li> -->

                <?php
                if (isset($_SESSION['authentication'])) {
                    ?>
                    <li>
                        <a class="navbar-brand" href="search.php">ค้นหางาน</a>
                    </li>
                    <li>
                        <a href="#">งานที่บันทึก</a>
                    </li>
                    <li>
                        <a href="register-1.php"><?= $_SESSION["register"]["name"] . ' ' . $_SESSION["register"]["surname"]?></a>
                    </li>
                    <li>
                        <a href="logout.php">ออกจากระบบ</a>
                    </li>
                <?php } else { ?>
                    <li>
                        <a class="navbar-default" href="firstpage.php">หน้าหลัก</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<br>