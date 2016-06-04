<?php
session_start();
ob_start();
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
	<meta charset="UTF-8">

  <!-- Accrodion -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>


<title>skill enhancement</title>
<script>
  $(function() {
    $( ".accordion" ).accordion();
  });
  </script>
  <style>
    .accordion-tab{
      display:none;
    }
    .round_top{
      background-color:#E0E0E0;border:0px;
      border-top-left-radius: 20px;
      border-top-right-radius: 20px;
      padding:10px;
    }
    .ui-accordion-content{
        height:auto !important;
    }
  </style>
</head>

<?php
	   $servername = "localhost";
		$name = "root";
		$userpassword = "";
		$dbname = "senior_project";
		$conn = mysqli_connect($servername,$name,$userpassword,$dbname);
        mysqli_set_charset($conn, "utf8");

if(isset($_SESSION["pid"]))
{
        echo $_SESSION["pid"];
      echo $_SESSION["pname"]; ?> &nbsp;&nbsp; <?php
    echo $_SESSION["plastname"];
  }
?>


<body>
  <nav class="navbar navbar-default navbar-fixed-top " role="navigation">
    <div class="container">
            <a class="navbar-brand page-scroll" rel="home" href="#" title="Buy Sell Rent Everyting">
                <img style="max-width:100px; margin-top: -9px;" src="img/logo-small.png">
            </a>
        <form class="navbar-form navbar-right" action="p-checklogin.php" method="post">
            <!--?// php echo $_SESSION["pid"]; ?-->
            <div class="form-group">
                อีเมลล์ : <input name="pemail" type="text" class="form-control" placeholder="email คนพิการ">&nbsp;
                รหัสผ่าน : <input name="ppassword" class="form-control" type="password" required="" placeholder="รหัสผ่าน 8 - 15 ตัวอักษร">

            </div>

            <button type="submit" class="btn btn-default">เข้าสู่ระบบ</button><br>
        </form>
    </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">


            </ul>
        </div>
        <!-- /.navbar-collapse -->

    <!-- /.container -->
</nav>

<div class="container">

    <h2 style="margin-top:100px; margin-bottom:3  0px;">แนะนำทักษะทางวิชาชีพ</h2>
    <!-- accordion tab button-->
    <div class="container"?
    <div class="col-sm-12">

      <button class="col-sm-3 round_top" onClick="changeTab(1)" id="tab1">
        ระดับง่าย
      </button>
      <button class="col-sm-3 round_top" onClick="changeTab(2)" id="tab2">
        ระดับปานกลาง
      </button>
      <button class="col-sm-3 round_top" onClick="changeTab(3)" id="tab3">
        ระดับสูง
      </button>

    </div>
  </div>
    <script>
      function changeTab(level){
          var x = document.getElementsByClassName('accordion-tab');
          x[0].style.display = "none";
          x[1].style.display = "none";
          x[2].style.display = "none";
          document.getElementById("tab1").style.backgroundColor = "#E0E0E0";
          document.getElementById("tab2").style.backgroundColor = "#E0E0E0";
          document.getElementById("tab3").style.backgroundColor = "#E0E0E0";
          document.getElementById("accordion"+level).style.display = "inline";
          document.getElementById("tab"+level).style.backgroundColor = "lightblue";

      }
    </script>



<div class="container">
  <div class="col-sm-12">
    <!-- accordion1 -->
    <div class="accordion-tab" id="accordion1">

      <div class="container">
          <div class="col-sm-12">
            <h4>ระดับง่าย</h4>
            <p>เหมาะสำหรับ เด็ก ผู้พิการ และ ผู้ใหญ่</p>
          </div>
      </div>

    <div class="accordion">
  <h3>Section easyyyyyyyyyy</h3>
  <div>
    <p>
    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
    </p>
  </div>
  <h3>Section 2</h3>
  <div>
    <p>
    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
    suscipit faucibus urna.
    </p>
  </div>
  <h3>Section 3</h3>
  <div>
    <p>
    Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
    Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
    ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
    lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
    </p>
    <ul>
      <li>List item one</li>
      <li>List item two</li>
      <li>List item three</li>
    </ul>
  </div>
  <h3>Section 4</h3>
  <div>
    <p>
    Cras dictum. Pellentesque habitant morbi tristique senectus et netus
    et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
    faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
    mauris vel est.
    </p>
    <p>
    Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
    inceptos himenaeos.
    </p>
  </div>
  </div>
</div>


  <!-- accordion2 -->
  <div class="accordion-tab" id="accordion2">

    <div class="container">
        <div class="col-sm-12">
          <h4>ระดับปานกลาง</h4>
          <p>เหมาะสำหรับ เด็ก ผู้พิการ และ ผู้ใหญ่</p>
        </div>
    </div>

  <div class="accordion">
  <h3>Section Mediummmmmmmmmmmmmmmmm</h3>
  <div>
  <p>
  Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
  ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
  amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
  odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
  </p>
  </div>
  <h3>Section 2</h3>
  <div>
  <p>
  Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
  purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
  velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
  suscipit faucibus urna.
  </p>
  </div>
  <h3>Section 3</h3>
  <div>
  <p>
  Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
  Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
  ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
  lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
  </p>
  <ul>
    <li>List item one</li>
    <li>List item two</li>
    <li>List item three</li>
  </ul>
  </div>
  <h3>Section 4</h3>
  <div>
  <p>
  Cras dictum. Pellentesque habitant morbi tristique senectus et netus
  et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
  faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
  mauris vel est.
  </p>
  <p>
  Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
  inceptos himenaeos.
  </p>
  </div>
  </div>
</div>

<!--accordion 3 -->
<div class="accordion-tab" id="accordion3">

  <div class="container">
      <div class="col-sm-12">
        <h4>ระดับสูง</h4>
        <p>เหมาะสำหรับ เด็ก ผู้พิการ และ ผู้ใหญ่</p>
      </div>
  </div>

<div class="accordion">
<h3>Section Harddddddddddddddddd</h3>
<div>
  <p>
  Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
  ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
  amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
  odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
  </p>
</div>
<h3>Section 2</h3>
<div>
  <p>
  Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
  purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
  velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
  suscipit faucibus urna.
  </p>
</div>
<h3>Section 3</h3>
<div>
  <p>
  Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
  Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
  ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
  lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
  </p>
  <ul>
    <li>List item one</li>
    <li>List item two</li>
    <li>List item three</li>
  </ul>
</div>
<h3>Section 4</h3>
<div>
  <p>
  Cras dictum. Pellentesque habitant morbi tristique senectus et netus
  et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
  faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
  mauris vel est.
  </p>
  <p>
  Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
  inceptos himenaeos.
  </p>
</div>
</div>


</div>
</div>
</div>
</body>
</html>
