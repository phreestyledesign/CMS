<p>
		<a href="http://phreestyledesign.com">PhreestyleDESIGN</a> &copy; 
		<?php 
			$startCopyRight='1998';
			if(date('Y') == $startCopyRight)
			{
			echo $startCopyRight;
			}
			else
			{
			echo $startCopyRight.'-'. date('Y');
			} 
		?> 
	</p>