<?php $pagename="Search"; ?>
<?php include '../header.htm' ?>

<h2 id="pagetitle"><span><?php echo $pagename;?></span>
	<div id="searchwrapper">
		<?php 
			$scripts[] = "searchpage.js";
			include("../php/searchform.php");
		?>
	</div>
</h2>

<?php if($_GET['searchtype'] == "projects" || $_GET['searchtype'] == "both"){ ?>

<h4>Projects</h4>
<div id="projectlist">
	<ol>
		<li>
			<article>
					<figure>
						<a href="http://www.wovenfiredesigns.com"><img class="square" src="../img/projects/artist-website-square.jpg"></img></a>
					</figure>
					<div class="content-wrapper">
						<h5><a href="http://www.wovenfiredesigns.com">Northwest Artist's Wordpress Website</a></h5>
						<p> Worpdress website and blog that I was hired to create. Customized theme
							developed with PHP, HTML and CSS. Wordpress widgets created and edited,  
							and custom Admin interface for easy blog development and customization.</p>
						<a id="view" href="http://www.wovenfiredesigns.com">View Project >></a>
					</div>
			</article>
		</li>
		<li>
			<article>
					<figure>
						<a href="http://web.engr.oregonstate.edu/~junkerd/projects/iac"><img class="square" src="../img/projects/eec-project-manager-square.jpg"></img></a>
					</figure>
					<div class="content-wrapper">
						<h5><a href="http://web.engr.oregonstate.edu/~junkerd/projects/iac">OSU Energy Efficiency Center Web Interface</a></h5>
						<p>Interactive demo of the Web Database interface I developed for the EEC to track
							project develoment, time-entry management and employee work load. </p>
						<a id="view" href="http://web.engr.oregonstate.edu/~junkerd/projects/iac">View Project >></a>
					</div>
			</article>
		</li>
		<li>
			<article>
					<figure>
						<a href="http://web.engr.oregonstate.edu/~junkerd/projects/task-manager"><img class="square" src="../img/projects/project-manager-square.jpg"></img></a>
					</figure>
					<div class="content-wrapper">
						<h5><a href="http://web.engr.oregonstate.edu/~junkerd/projects/task-manager">CS 275 Final Project</a></h5>
						<p>Final project for my Web Database Course. Task Management Application to track 
							progress and time spent, developed with HTML, Javascript PHP, MySQL and 
							Relational Databases. </p>
						<a id="view" href="http://web.engr.oregonstate.edu/~junkerd/projects/task-manager">View Project >></a>
					</div>
			</article>
		</li>
	</ol>
</div>

<?php } if($_GET['searchtype'] == "experiments" || $_GET['searchtype'] == "both"){ ?>
<h4>Experiments</h4>
<div id="lablist">
	<ol>
		<li>
			<h6><a href="<?php echo $sitepath;?>/projects/representative-map/">Contact Senator Map</a></h6>
			<figure>
				<a href="<?php echo $sitepath;?>/projects/representative-map/"><img class="square" src="<?php echo $sitepath;?>/img/projects/contact-senator-square.jpg"></img></a>
			</figure>
			<p>Google Map API used to create Interactive U.S. Map that shows contact information 
				for state senators.</p>
			<a id="view" href="<?php echo $sitepath;?>/projects/representative-map/">View Experiment >></a>
		</li>
		<li>
			<h6><a href="<?php echo $sitepath;?>/projects/textbook-finder/bookdonation/">Bookshare Application</a></h6>
			<figure>
				<a href="<?php echo $sitepath;?>/projects/textbook-finder/bookdonation/"><img class="square" src="<?php echo $sitepath;?>/img/projects/textbook-login-square.jpg"></img></a>
			</figure>
			<p>Created for CS 361 - <dfn>Software Engineering 1</dfn> - A PHP web application with 
				a user login form and database.</p>
			<a id="view" href="<?php echo $sitepath;?>/projects/textbook-finder/bookdonation/">View Experiment >></a>
		</li>
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
<?php } ?>
<div id="noresults">
	Your search - <strong><?php echo $_GET['query'];?></strong> - did not match any projects or experiments.
</div>
	

<?php include '../footer.htm' ?>