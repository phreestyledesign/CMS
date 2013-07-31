<!DOCTYPE HTML>
<head>
<base href="http://192.168.1.104/cms/" />

<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="PhreestyleDESIGN" />
<meta name="Generator" content="&copy; 2013 - Phreestyledesign http://phreestyledesign.com" />

<link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css" media="screen" />

<link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon" />

<title>one column template</title>
</head>

<body>
	<div id="wrapper">
		<div id="header">
			<h1>
				<a href=""><?php include "assets/includes/header.php"; ?></a>
			</h1>
		</div><!-- end header -->
		<div id="menu">
			<?php include "assets/includes/menu.php"; ?>
		</div><!-- end menu -->
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