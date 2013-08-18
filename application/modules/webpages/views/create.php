<h2>Create New Page</h2>
<?php

echo validation_errors("<p id='errors'>", "</p>");


echo form_open('webpages/submit/'.$update_id);
?>

<?php echo form_fieldset('Create Content','id="test"');?>
<ul>
	<li>
	  <?php  
	  echo form_label('Page Headline:', 'page_headline');
	   $data = array(
	      'name'   	=> 'page_headline',
	  'id'          => 'page_headline',
	  'value'       =>  $page_headline,
	  'maxlength'   => '230',
	  //'size'        => '50',
	  //'style'       => 'width:320px',
	);
	
	echo form_input($data); 
	?>
	</li>

          
        
            
            
          <li>
          <?php  
          echo form_label('Page Title:', 'page_title');
           $data = array(
              'name'        => 'page_title',
              'id'          => 'page_title',
              'value'       =>  $page_title,
              'maxlength'   => '230',
              //'size'        => '50',
              //'style'       => 'width:320px',
            );

        echo form_input($data); 
        ?>
        </li>
            
            
            
        <li>
    	<?php  
    	echo form_label('Keywords:', 'keywords');
           $data = array(
              'name'        => 'keywords',
              'id'          => 'keywords',
              'value'       =>  $keywords,
              'maxlength'   => '230',
              //'size'        => '50',
              
            );

        echo form_input($data); 
        ?>
        </li>
            
           <li>
           <?php  
           echo form_label('Description:', 'description');
           $data = array(
              'name'        => 'description',
              'id'          => 'description',
              'value'       =>  $description,
              'maxlength'   => '230',
              //'size'        => '50',
              //'style'       => 'width:750px',
            );

        echo form_input($data); 
        ?>
        </li>
            
	  <li>
           <?php  
           echo form_label('Page URL:', 'page_url');
           $data = array(
              'name'        => 'page_url',
              'id'          => 'page_url',
              'value'       =>  $page_url,
              'maxlength'   => '230',
              //'size'        => '50',
              //'style'       => 'width:750px',
            );

        echo form_input($data); 
        ?>
        </li>
        
    
        <li>
        <?php  
			echo form_label('Page Content:', 'page_content');
           $data = array(
              'name'        => 'page_content',
              'id'          => 'page_content',
              'value'       =>  $page_content,
              //'rows'   => '30',
              'cols'        => '50',
              //'style'       => 'width:890px',
            );

        echo form_textarea($data); 
        ?>
        </li>
        
        
        
        
        
        <?php echo form_submit('submit', 'Submit'); ?>
    
    
    
</ul>
<?php echo form_fieldset_close(); ?>
<?php
echo form_close();