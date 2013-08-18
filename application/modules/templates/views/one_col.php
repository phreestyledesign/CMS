<!DOCTYPE HTML>
<head>


<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="PhreestyleDESIGN" />
<meta name="Generator" content="&copy; 2013 - Phreestyledesign http://phreestyledesign.com" />

<base href="http://192.168.1.104/cms/" />

<link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css" media="screen" />

<link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon" />

<title><?php echo $page_title; ?></title>
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
		<div id="content">
			<?php 
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
				else 
					{
			?>
						<p class="pagetitle"><?php echo $page_title; ?></p>
						<p class="description"><?php echo $description; ?></p>
						<p class="keywords"><?php echo $keywords; ?></p>
						<p class="datetime"><?php echo $datetime; ?></p>
						<?php echo nl2br($page_content); ?>
			<?php 
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