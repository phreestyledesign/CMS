<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


echo validation_errors('');

echo form_open('users/submit');

echo '<fieldset id="users">';
echo "<ul>";
echo "<li><label>Username: </label>";
echo form_input('username', $username)."</li>";
echo "<li><label>Password: </label>";
echo form_password('pword', $pword)."</li>";

echo form_submit('submit', 'Submit');

if (isset($update_id))
{
	echo form_hidden('update_id', $update_id);
}
echo "</ul>";
echo form_close();

echo '</fieldset>';
