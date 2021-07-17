<?php

//ERRORS DISPLAY
	//error_reporting(E_ALL);
	//ini_set('display_errors', 'On');

	include 'structure.php';	
	
	$headerDisplay = new documentHeader();
	$headerDisplay->displayContent();
	
	echo '
		<div class="w3-col l6 m8 s12 w3-center w3-margin-top" style="margin:auto;float:none;">
			<div class="w3-container w3-teal">
			<h2 style="margin-top:10px;">שאלה חדשה</h2>
			</div>
			<form class="w3-container w3-card-4">
			<br>
			<p>      
			<label class="w3-text-grey">Name</label>
			<input class="w3-input w3-border" type="text" required>
			</p>
			<p>      
			<label class="w3-text-grey">Email</label>
			<input class="w3-input w3-border" type="text" required>
			</p>
			<p>      
			<label class="w3-text-grey">Subject</label>
			<textarea class="w3-input w3-border" style="resize:none"></textarea>
			</p>
			<br>
			<div class="w3-row">
			<div class="w3-half">
				<input id="milk" class="w3-check" type="checkbox" checked="checked">
				<label>Milk</label>
				<br>
				<input id="sugar" class="w3-check" type="checkbox">
				<label>Sugar</label>
				<br>
				<input id="lemon" class="w3-check" type="checkbox" disabled>
				<label>Lemon (Disabled)</label>
				<br><br>
			</div>
			
			<div class="w3-half">
				<input id="male" class="w3-radio" type="radio" name="gender" value="male" checked>
				<label>Male</label>
				<br>
				<input id="female" class="w3-radio" type="radio" name="gender" value="female">
				<label>Female</label>
				<br>
				<input id="unknown" class="w3-radio" type="radio" name="gender" value="" disabled>
				<label>Don\'t know (Disabled)</label>
			</div>
			</div>
			<p><button type="button" class="w3-btn w3-padding w3-teal" style="width:120px">Send &nbsp; &#10095;</button></p>
			</form>
		</div>

	';

?>
			


	



