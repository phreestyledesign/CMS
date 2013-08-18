<h2>Content Management System</h2>

<?php
echo anchor('webpages/create', '<p>Create New Page</p>');
?>

<table summary="Management conlsole for CMS" id="manage">

    <tr>
		<th>Page Headline</th><th>DateStamp</th><th>Edit</th><th>Delete</th>
	</tr>
    <?php
    foreach($query->result() as $row) 
	{
        	
        $page_headline = $row->page_headline;
        $datetime = $row->datetime;
        $edit_url = base_url()."index.php/webpages/create/".$row->id;
        $delete_url = base_url()."webpages/deleteconf/".$row->id;
		
		
		    
        
        
    ?>
    <tr>
		<td><?php echo $page_headline; ?></td>
		<td><?php echo $datetime; ?></td>
		<td><?php echo anchor($edit_url, 'Edit'); ?></td>
		<td>
			<?php $page_url = $row->page_url;
    			if (($page_url=="homepage") || ($page_url=="contactus") || ($page_url=="thankyou")) {
        		//this is a special page - don't let them delete it!
        		echo "-";
    			} else {
        			echo anchor($delete_url, 'Delete');
    			}
    
    		?>
    	</td>
	</tr>
    <?php
    }
    ?>
   
</table>