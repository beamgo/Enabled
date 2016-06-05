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
	<script src="p-skill-content.js"></script>


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
?>


<body>
      <?php include 'p-navigation.php' ; ?>

<div class="container">

    <h2 style="margin-top:100px; margin-bottom:3  0px;">แนะนำทักษะทางวิชาชีพ</h2>
    <!-- accordion tab button-->
    <div class="container"?
    <div class="col-sm-12">

      <button class="col-sm-3 round_top" onClick="changeTab(1)" id="tab1">
        ระดับพื้นฐาน
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
            <h4>ระดับพื้นฐาน</h4>
            <p>ทักษะพื้นฐานในการใช้คอมพิวเตอร์ ไม่ว่าจะเป็นการพิมพ์ดีด การใช้ Microsoft Office เบื้องต้น รวมถึงการรับ-ส่งอีเมล์ ซึ่งนับว่าเป็นทักษะสำคัญที่ควรมีในการประกอบอาชีพแทบทุกอาชีพ รวมถึงการค้นคว้าหาข้อมูลต่างๆบนอินเทอร์เน็ตในชีวิตประจำวัน ่</p>
          </div>
      </div>

    <div class="accordion">

	<!-- Skill 0 -->
   <h3>
		<script>
		 document.write(content_it_easy[0].topic);
		</script>
  </h3>
  <div>
    <p>&nbsp&nbsp&nbsp
			<script>
			  document.write(content_it_easy[0].body);
			</script>
    </p>
		<p><h4>อาชีพที่เหมาะสม</h4>
			<ul>
			<script>
			for(x in content_it_easy[0].job)
			document.write("<li>"+content_it_easy[0].job[x]+"</li>");
			</script>
		</ul>
		</p>
		<p><h4>สื่อการสอนออนไลน์</h4>
			<ul>
			<script>
			for(x in content_it_easy[0].course)
			{
			document.write("<li><a href='"+content_it_easy[0].course[x].link+"'>"+content_it_easy[0].course[x].name+"</a></li>");
			if(!content_it_easy[0].course[x].pic == "")
			document.write("<img src='"+content_it_easy[0].course[x].pic+"'>");
		  }
			</script>
		</ul>
		</p>
		<p><h4>ศูนย์การศึกษา</h4>
			<ul>
				<script>
				for(x in content_it_easy[0].center)
				{
				document.write("<li><a href='"+content_it_easy[0].center[x].link+"'>"+content_it_easy[0].center[x].name+"</a></li>");
				if(!content_it_easy[0].center[x].pic == "")
				document.write("<img src='"+content_it_easy[0].center[x].pic+"'>");
			  }
				</script>
		</ul>
		</p>
  </div>


		<!-- Skill 1 -->
	   <h3>
			<script>
			 document.write(content_it_easy[1].topic);
			</script>
	  </h3>
	  <div>
	    <p>&nbsp&nbsp&nbsp
				<script>
				  document.write(content_it_easy[1].body);
				</script>
	    </p>
			<p><h4>อาชีพที่เหมาะสม</h4>
				<ul>
				<script>
				for(x in content_it_easy[1].job)
				document.write("<li>"+content_it_easy[1].job[x]+"</li>");
				</script>
			</ul>
			</p>
			<p><h4>สื่อการสอนออนไลน์</h4>
				<ul>
				<script>
				for(x in content_it_easy[1].course)
				{
				document.write("<li><a href='"+content_it_easy[1].course[x].link+"'>"+content_it_easy[1].course[x].name+"</a></li>");
				if(!content_it_easy[1].course[x].pic == "")
				document.write("<img src='"+content_it_easy[1].course[x].pic+"'>");
			  }
				</script>
			</ul>
			</p>
			<p><h4>ศูนย์การศึกษา</h4>
				<ul>
					<script>
					for(x in content_it_easy[1].center)
					{
					document.write("<li><a href='"+content_it_easy[1].center[x].link+"'>"+content_it_easy[1].center[x].name+"</a></li>");
					if(!content_it_easy[1].center[x].pic == "")
					document.write("<img src='"+content_it_easy[1].center[x].pic+"'>");
				  }
					</script>
			</ul>
			</p>
	  </div>


			<!-- Skill 2 -->
		   <h3>
				<script>
				 document.write(content_it_easy[2].topic);
				</script>
		  </h3>
		  <div>
		    <p>&nbsp&nbsp&nbsp
					<script>
					  document.write(content_it_easy[2].body);
					</script>
		    </p>
				<p><h4>อาชีพที่เหมาะสม</h4>
					<ul>
					<script>
					for(x in content_it_easy[2].job)
					document.write("<li>"+content_it_easy[2].job[x]+"</li>");
					</script>
				</ul>
				</p>
				<p><h4>สื่อการสอนออนไลน์</h4>
					<ul>
					<script>
					for(x in content_it_easy[2].course)
					{
					document.write("<li><a href='"+content_it_easy[2].course[x].link+"'>"+content_it_easy[2].course[x].name+"</a></li>");
					if(!content_it_easy[2].course[x].pic == "")
					document.write("<img src='"+content_it_easy[2].course[x].pic+"'>");
				  }
					</script>
				</ul>
				</p>
				<p><h4>ศูนย์การศึกษา</h4>
					<ul>
						<script>
						for(x in content_it_easy[2].center)
						{
						document.write("<li><a href='"+content_it_easy[2].center[x].link+"'>"+content_it_easy[2].center[x].name+"</a></li>");
						if(!content_it_easy[2].center[x].pic == "")
						document.write("<img src='"+content_it_easy[2].center[x].pic+"'>");
					  }
						</script>
				</ul>
				</p>
		  </div>


				<!-- Skill 3 -->
			   <h3>
					<script>
					 document.write(content_it_easy[3].topic);
					</script>
			  </h3>
			  <div>
			    <p>&nbsp&nbsp&nbsp
						<script>
						  document.write(content_it_easy[3].body);
						</script>
			    </p>
					<p><h4>อาชีพที่เหมาะสม</h4>
						<ul>
						<script>
						for(x in content_it_easy[3].job)
						document.write("<li>"+content_it_easy[3].job[x]+"</li>");
						</script>
					</ul>
					</p>
					<p><h4>สื่อการสอนออนไลน์</h4>
						<ul>
						<script>
						for(x in content_it_easy[3].course)
						{
						document.write("<li><a href='"+content_it_easy[3].course[x].link+"'>"+content_it_easy[3].course[x].name+"</a></li>");
						if(!content_it_easy[3].course[x].pic == "")
						document.write("<img src='"+content_it_easy[3].course[x].pic+"'>");
					  }
						</script>
					</ul>
					</p>
					<p><h4>ศูนย์การศึกษา</h4>
						<ul>
							<script>
							for(x in content_it_easy[3].center)
							{
							document.write("<li><a href='"+content_it_easy[3].center[x].link+"'>"+content_it_easy[3].center[x].name+"</a></li>");
							if(!content_it_easy[3].center[x].pic == "")
							document.write("<img src='"+content_it_easy[3].center[x].pic+"'>");
						  }
							</script>
					</ul>
					</p>
			  </div>


					<!-- Skill 4 -->
				   <h3>
						<script>
						 document.write(content_it_easy[4].topic);
						</script>
				  </h3>
				  <div>
				    <p>&nbsp&nbsp&nbsp
							<script>
							  document.write(content_it_easy[4].body);
							</script>
				    </p>
						<p><h4>อาชีพที่เหมาะสม</h4>
							<ul>
							<script>
							for(x in content_it_easy[4].job)
							document.write("<li>"+content_it_easy[4].job[x]+"</li>");
							</script>
						</ul>
						</p>
						<p><h4>สื่อการสอนออนไลน์</h4>
							<ul>
							<script>
							for(x in content_it_easy[4].course)
							{
							document.write("<li><a href='"+content_it_easy[4].course[x].link+"'>"+content_it_easy[4].course[x].name+"</a></li>");
							if(!content_it_easy[4].course[x].pic == "")
							document.write("<img src='"+content_it_easy[4].course[x].pic+"'>");
						  }
							</script>
						</ul>
						</p>
						<p><h4>ศูนย์การศึกษา</h4>
							<ul>
								<script>
								for(x in content_it_easy[4].center)
								{
								document.write("<li><a href='"+content_it_easy[4].center[x].link+"'>"+content_it_easy[4].center[x].name+"</a></li>");
								if(!content_it_easy[4].center[x].pic == "")
								document.write("<img src='"+content_it_easy[4].center[x].pic+"'>");
							  }
								</script>
						</ul>
						</p>
				  </div>


						<!-- Skill 5 -->
					   <h3>
							<script>
							 document.write(content_it_easy[5].topic);
							</script>
					  </h3>
					  <div>
					    <p>&nbsp&nbsp&nbsp
								<script>
								  document.write(content_it_easy[5].body);
								</script>
					    </p>
							<p><h4>อาชีพที่เหมาะสม</h4>
								<ul>
								<script>
								for(x in content_it_easy[5].job)
								document.write("<li>"+content_it_easy[5].job[x]+"</li>");
								</script>
							</ul>
							</p>
							<p><h4>สื่อการสอนออนไลน์</h4>
								<ul>
								<script>
								for(x in content_it_easy[5].course)
								{
								document.write("<li><a href='"+content_it_easy[5].course[x].link+"'>"+content_it_easy[5].course[x].name+"</a></li>");
								if(!content_it_easy[5].course[x].pic == "")
								document.write("<img src='"+content_it_easy[5].course[x].pic+"'>");
							  }
								</script>
							</ul>
							</p>
							<p><h4>ศูนย์การศึกษา</h4>
								<ul>
									<script>
									for(x in content_it_easy[5].center)
									{
									document.write("<li><a href='"+content_it_easy[5].center[x].link+"'>"+content_it_easy[5].center[x].name+"</a></li>");
									if(!content_it_easy[5].center[x].pic == "")
									document.write("<img src='"+content_it_easy[5].center[x].pic+"'>");
								  }
									</script>
							</ul>
							</p>
					  </div>


							<!-- Skill 6 -->
						   <h3>
								<script>
								 document.write(content_it_easy[6].topic);
								</script>
						  </h3>
						  <div>
						    <p>&nbsp&nbsp&nbsp
									<script>
									  document.write(content_it_easy[6].body);
									</script>
						    </p>
								<p><h4>อาชีพที่เหมาะสม</h4>
									<ul>
									<script>
									for(x in content_it_easy[6].job)
									document.write("<li>"+content_it_easy[6].job[x]+"</li>");
									</script>
								</ul>
								</p>
								<p><h4>สื่อการสอนออนไลน์</h4>
									<ul>
									<script>
									for(x in content_it_easy[6].course)
									{
									document.write("<li><a href='"+content_it_easy[6].course[x].link+"'>"+content_it_easy[6].course[x].name+"</a></li>");
									if(!content_it_easy[6].course[x].pic == "")
									document.write("<img src='"+content_it_easy[6].course[x].pic+"'>");
								  }
									</script>
								</ul>
								</p>
								<p><h4>ศูนย์การศึกษา</h4>
									<ul>
										<script>
										for(x in content_it_easy[6].center)
										{
										document.write("<li><a href='"+content_it_easy[6].center[x].link+"'>"+content_it_easy[6].center[x].name+"</a></li>");
										if(!content_it_easy[6].center[x].pic == "")
										document.write("<img src='"+content_it_easy[6].center[x].pic+"'>");
									  }
										</script>
								</ul>
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
<script>
document.getElementById("accordion1").style.display = "inline";
document.getElementById("tab1").style.backgroundColor = "lightblue";
</script>
</html>
