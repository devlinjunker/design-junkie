<?php $pagename="Projects"; ?>
<?php include '../header.htm' ?>

<h2 id="pagetitle"><?php echo $pagename;?>
	<div id="searchwrapper">
		<?php 
			$scripts[] = "searchform.js";
			include("../php/searchform.php");
		?>
	</div>
</h2>
<div id="projectlist">
</div>
<div id="links">
</div>
	

<?php include '../footer.htm' ?>