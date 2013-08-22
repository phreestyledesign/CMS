<a href="http://phreestyledesign.com">PhreestyleDESIGN</a> &copy; 
	<?php 
		$startCopyRight='2007';
		if(date('Y') == $startCopyRight)
		{
			echo $startCopyRight;
		}
		else
		{
			echo $startCopyRight.'-'. date('Y');
		} 
		?> 
