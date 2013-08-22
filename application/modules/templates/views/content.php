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