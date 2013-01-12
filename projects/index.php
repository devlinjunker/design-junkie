<?php $pagename="Projects"; ?>
<?php include '../header.htm' ?>

<h2 id="pagetitle"><span><?php echo $pagename;?></span>
	<div id="searchwrapper">
		<?php 
			include("../php/searchform.php");
		?>
	</div>
</h2>
<section id="projects">
	<ol id="projectlist">
		<li>
			<article>
					<figure>
						<a href="http://www.wovenfiredesigns.com"><img class="square" src="../img/projects/artist-website-square.jpg" alt="Artist's Wordpress Website"/></a>
					</figure>
					<div class="content-wrapper">
						<h5><a href="http://www.wovenfiredesigns.com">Northwest Artist's Wordpress Website</a></h5>
						<p> Worpdress website and blog that I was hired to create. Customized theme
							developed with PHP, HTML and CSS. Wordpress widgets created and edited,  
							and custom Admin interface for easy blog development and customization.</p>
						<a class="view" href="http://www.wovenfiredesigns.com">View Project >></a>
					</div>
			</article>
		</li>
		<li>
			<article>
					<figure>
						<a href="http://web.engr.oregonstate.edu/~junkerd/projects/iac"><img class="square" src="../img/projects/eec-project-manager-square.jpg" alt="EEC Database Interface"/></a>
					</figure>
					<div class="content-wrapper">
						<h5><a href="http://web.engr.oregonstate.edu/~junkerd/projects/iac">OSU Energy Efficiency Center Web Interface</a></h5>
						<p>Interactive demo of the Web Database interface I developed for the EEC to track
							project develoment, time-entry management and employee work load. Made with PHP, Javascript,
							HTML, and CSS. Not completely functional due to restrictions on OSU student databases.</p>
						<a class="view" href="http://web.engr.oregonstate.edu/~junkerd/projects/iac">View Project >></a>
					</div>
			</article>
		</li>
		<li>
			<article>
					<figure>
						<a href="http://web.engr.oregonstate.edu/~junkerd/projects/task-manager"><img class="square" src="../img/projects/project-manager-square.jpg" alt="Project Management Web Application"/></a>
					</figure>
					<div class="content-wrapper">
						<h5><a href="http://web.engr.oregonstate.edu/~junkerd/projects/task-manager">Project Management Application</a></h5>
						<p>Final project for CS 275 - <dfn>Introduction to Databases</dfn>. Task Management Application to track 
							progress and time spent on coursework and projects, developed with HTML, Javascript, PHP, MySQL and 
							Relational Databases. </p>
						<a class="view" href="http://web.engr.oregonstate.edu/~junkerd/projects/task-manager">View Project >></a>
					</div>
			</article>
		</li>
	</ol>
</section>

	

<?php include '../footer.htm' ?>