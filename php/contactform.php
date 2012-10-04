<?php $scripts[] = "contactform.js"; ?>
<form class="contactform" action="<?php echo $sitepath;?>/php/process-contact.php" method="post">
	<?php
		$FORM = array();
		$RESPONSE = false;

		if(isset($_SESSION["cf_returndata"])) :
			$FORM = $_SESSION["cf_returndata"];
			$RESPONSE = true;
		endif;
	?>

	<ul id="errors" <?php echo (($RESPONSE && !$FORM["form_ok"]) ? "" : "hidden"); ?>>
		<li id="problems"> 
			There were some problems with your submission:
		</li>
		<?php
			if(isset($FORM["errors"]) && count($FORM["errors"]) > 0) :
				foreach($FORM["errors"] AS $ERROR) :
					echo "<li>$ERROR</li>";
				endforeach;
			endif;
		?>
	</ul>

	<p id="success" <?php echo (($RESPONSE && $FORM["form_ok"]) ? "" : "hidden"); ?>>
		Success! Thank you for contacting me, I will respond as soon as I can!
	</p>

	<label for="name">Name:
	<input type="text" id="name" name="name" required="required" value="<?php echo ( ($RESPONSE && !$FORM["form_ok"]) ? $FORM["posted_data"]["name"] : "" );?>"/>
	</label>

	<label for="email">Email:
	<input type="email" id="email" name="email" required="required" value="<?php echo ( ($RESPONSE && !$FORM["form_ok"]) ? $FORM["posted_data"]["email"] : "" );?>"/>
	</label>

	<label for="subject">Subject:
	<input type="text" id="subject" name="subject" required="required" value="<?php echo ( ($RESPONSE && !$FORM["form_ok"]) ? $FORM["posted_data"]["subject"] : "" );?>"/>
	</label>

	<textarea id="message" name="message" required="required" data-min-length="20" placeholder="20 Character Minimum"><?php echo ( ($RESPONSE && !$FORM["form_ok"]) ? $FORM["posted_data"]["message"] : "" );?></textarea>

	<input type="submit"/>
</form>
<?php unset($_SESSION['cf_returndata']); ?>  