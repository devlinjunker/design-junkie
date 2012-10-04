<?php $pagename="Experiments"; ?>
<?php include '../header.htm' ?>

<h2 id="pagetitle"><?php echo $pagename;?>
	<div id="searchwrapper">
		<?php 
			include("../php/searchform.php");
		?>
	</div>
</h2>
<section id="labs">
	<ol id="lablist">
		<li>
			<h6><a href="<?php echo $sitepath;?>/projects/representative-map/">Contact Senator Map</a></h6>
			<figure>
				<a href="<?php echo $sitepath;?>/projects/representative-map/"><img class="square" src="../img/projects/contact-senator-square.jpg" alt="Contact Senator Map"/></a>
			</figure>
			<p>Google Map API used to create Interactive U.S. Map that shows contact information 
				for state senators.</p>
			<a class="view" href="<?php echo $sitepath;?>/projects/representative-map/">View Experiment >></a>
		</li>
		<li>
			<h6><a href="<?php echo $sitepath;?>/projects/textbook-finder/bookdonation/">Bookshare Application</a></h6>
			<figure>
				<a href="<?php echo $sitepath;?>/projects/textbook-finder/bookdonation/"><img class="square" src="<?php echo $sitepath;?>/img/projects/textbook-login-square.jpg" alt="Bookshare Application"/></a>
			</figure>
			<p>Created for CS 361 - <dfn>Software Engineering 1</dfn> - A PHP web application with 
				a user login form and database.</p>
			<a class="view" href="<?php echo $sitepath;?>/projects/textbook-finder/bookdonation/">View Experiment >></a>
		</li>
		
	</ol>
</section>
	

<?php include '../footer.htm' ?>