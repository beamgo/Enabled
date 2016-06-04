<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <link href="css/cover.css" rel="stylesheet">
	<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<?php
Header("Cache-Control: must-revalidate");

$offset = 60 * 60 * 24 * 3;
$ExpStr = "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
Header($ExpStr);
?>
<body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
           <!--   <h3 class="masthead-brand">Cover</h3> -->
              <nav>
                <ul class="nav masthead-nav">
       <!--           <li class="active"><a href="#">Home</a></li>
                  <li><a href="#">Features</a></li>
                  <li><a href="#">Contact</a></li> -->
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">Enabled</h1>
            <p class="lead">คุณคือ?</p>
            <p class="lead">
              <a href="p-homepage.php" class="btn btn-lg btn-default">คนพิการ</a><br><br>
              <a href="c-homepage.php" class="btn btn-lg btn-default">ผู้ประกอบการ</a>
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>By <a href="">Isaree</a>.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

  </body>
</html>