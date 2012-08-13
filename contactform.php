<?php
	$FORM = array();
	$RESPONSE = false;

	if(isset($_SESSION["form_data"])) :
		$FORM = $_SESSION["form_data"];
		$RESPONSE = true;
	endif;
?>

<ul id="errors" class="<?php echo (($RESPONSE && !$FORM["FORM_OK"]) ? "visible" : ""); ?>">
	<li id="info"> 
		There were some problems with your submission:
	</li>
	<?php
		if(isset($FORM["errors"]) && count($FORM["errors"]) > 0) :
			foreach($FORM["ERRORS"] AS $ERROR) :
				echo "<li>$ERROR</li>";
			endforeach;
		endif;
	?>
</ul>

<p id="success" class="<?php echo (($RESPONSE && $FORM["FORM_OK"]) ? "visible" : ""); ?>">
	Success! Thank you for contacting me, I will respond as soon as I can!
</p>

<label for="name">Name:</label>
<input type="text" id="name" name="name" required="required"/>

<label for="email">Email:</label>
<input type="email" id="email" name="email" required="required"/>

<label for="subject">Subject:</label>
<input type="text" id="subject" name="subject" required="required"/>

<textarea id="message" name="message" required="required" 
			min-length="20" placeholder="20 Character Minimum"></textarea>

<input type="submit"/>