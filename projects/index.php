<?php $pagename="Projects"; ?>
<?php include '../header.htm' ?>

<h2 id="pagetitle"><span><?php echo $pagename;?></span>
	<div id="searchwrapper">
		<?php 
			include("../php/searchform.php");
		?>
	</div>
</h2>
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
<div id="links">
</div>
	

<?php include '../footer.htm' ?>