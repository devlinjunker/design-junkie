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
<div id="lablist">
	<ol>
		<li>
			<h6><a href="../../projects/representative-map/">Contact Senator Map</a></h6>
			<figure>
				<a href="../../projects/representative-map/"><img class="square" src="../img/projects/contact-senator-square.jpg"></img></a>
			</figure>
			<p>Google Map API used to create Interactive U.S. Map that shows contact information 
				for state senators.</p>
			<a id="view" href="../../projects/representative-map/">View Experiment >></a>
		</li>
		<li>
			<h6><a href="../../projects/textbook-finder/bookdonation/">Bookshare Application</a></h6>
			<figure>
				<a href="../../projects/textbook-finder/bookdonation/"><img class="square" src="../img/projects/textbook-login-square.jpg"></img></a>
			</figure>
			<p>Created for CS 361 - <dfn>Software Engineering 1</dfn> - A PHP web application with 
				a user login form and database.</p>
			<a id="view" href="../../projects/textbook-finder/bookdonation/">View Experiment >></a>
		</li>
		<li class="hidden">
			<h6><a href=""></a></h6>
			<figure>
				<a href=""><img class="square" src=""></img></a>
			</figure>
			<p></p>
			<a id="view" href="">View Experiment >></a>
		</li>
	</ol>
	<ol>
	</ol>
</div>
	

<?php include '../footer.htm' ?>