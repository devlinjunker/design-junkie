<?php $pagename="About"; ?>
<?php include '../header.htm' ?>

<h2 id="pagetitle"><?php echo $pagename;?></h2>
<section id="contact">
	<form id="contactform" class="contactform">
		<?php 
			$scripts[] = "contactform.js";
			include("../php/contactform.php");
		?>
	</form>
</div>
	

<?php include '../footer.htm' ?>