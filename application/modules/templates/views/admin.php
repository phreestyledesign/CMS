<div id="content">
 <?php 
	
                        if (!isset($view_file)) {
                            $view_file = "";
                        }
                        
                        
                        if (!isset($module)) {
                            $module = $this->uri->segment(1);
                        }
                        
                        
                        if (($module!="") && ($view_file!="")) {
                            $path = $module."/".$view_file;
                            $this->load->view($path);
                        }
                        
                        
                      

  ?>


</div><!-- end admin_panel -->
<div id="footer">
		 	<p>
			<?php include "assets/includes/footer.php"; ?>
			</p>
		 </div><!-- end footer -->
</div><!-- end wrapper -->


</body>
</html>
