<?php $pagename="Experiments"; ?>
<?php include '../header.htm' ?>

<h2 id="pagetitle"><?php echo $pagename;?>
	<div id="searchwrapper">
		<?php 
			$scripts[] = "searchform.js";
			include("../php/searchform.php");
		?>
	</div>
</h2>
<div id="links">
</div>
	

<?php include '../footer.htm' ?>