<?php $scripts[] = "../labs/cs494/assignment3/actor_form.js"; ?>
<h4>Insert New Actor/Actress</h4>
<form action="process-insert-actor.php" method="post" enctype="multipart/form-data" >
	<?php
		$FORM = array();
		$RESPONSE = false;

		if(isset($_SESSION["af_returndata"])) :
			$FORM = $_SESSION["af_returndata"];
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
		Successfully entered a new Actor or Actress into the Database!
	</p>

    <div> 
        <label for="actor_name"> 
            <span class="label_text">Actor/Actress Name:</span> 
            <input type="text" class="required" id="actor_name" name="actor_name" required="required"/>
        </label>
    </div>

    <!--div>
        <label for="actor_url_name">
            <span class="label_text">URL Name:</span>
            <input type="text" class="required" id="actor_url_name" name="actor_url_name" required="required"/>
        </label>
    </div>

    <div> 
        <label for="actor_url"> 
            <span class="label_text">URL:</span> 
            <input type="url" class="required" id="actor_url" name="actor_url" required="required"/>
        </label>
    </div-->

    <!--div> 
          <div><label><span class="label_text"><u>Photo</u></span></label></div>
          <label for="actor_photo_find"> <span class="label_text">Find Online:</span> <input type="radio" value="find" name="actor_photo" id="actor_photo_find"/></label>
          <label for="actor_photo_upload"> <span class="label_text">Upload:</span> <input type="radio" value="upload" name="actor_photo" id="actor_photo_upload"/></label>
    </div-->

    <div> 
        <label for="actor_photo"> 
            <span class="label_text">Photo:</span> 
            <span class="file_upload_fix">
                <div class="new_upload">
                    <input type="button" value="Upload"/>
                    <input type="text" disabled="true" required="required" name="filename"/>
                </div>
                <input type="file" id="actor_photo" name="actor_photo"/>
            </span>
        </label>
    </div>

    <div id="actor_photo_preview">
    </div>

    <input type="submit" value="Submit"/>

</form>

<?php unset($_SESSION['af_returndata']); ?>  
