<!DOCTYPE HTML>
<head>
<base href="http://192.168.1.104/cms/" />

<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="PhreestyleDESIGN" />
<meta name="Generator" content="&copy; 2010 - Phreestyledesign http://phreestyledesign.com" />

<link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/twoColumn.css" media="screen" />


<link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon" />

<title>Two Column Layout</title>
</head>

<body>

<div id="wrapper">

 <div id="header">
			<h1>
				<a href=""><?php include "assets/includes/header.php"; ?></a>
			</h1>
		</div><!-- end header -->
		<div id="navcontainer">
			<?php include "assets/includes/menu.php"; ?>
		</div><!-- end navcontainer -->

<div id="sidebar">
<ul>
<li>Sidebar menu here</li>
</ul>
</div><!-- end sidebar -->


<div id="content">
 <?php 
				echo "CONTENT IN HERE";
				if (!isset($view_file))
				{
					$view_file = "";
				}
				
				if (!isset($module))
				{
					$module = $this->uri->segment(1);
				}
				
				if (($view_file!="") && ($module!=""))
				{
					$path = $module."/".$view_file;
					$this->load->view($path);
				}

			 ?>
</div><!-- end content -->
 <div id="footer">
		 	<p>
			<?php include "assets/includes/footer.php"; ?>
			</p>
		 </div><!-- end footer -->

</div><!-- end wrapper -->
</body>
</html>
