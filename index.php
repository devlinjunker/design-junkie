<?php $pagename="home"; ?>
<?php include 'header.htm'; ?>

<section id="articles" class="section">
	<h4>Projects</h4>
	
	<ol id="projects">
		<li>
			<article>
				<h5>Energy Efficiency Center Web Database</h5>
				<figure>
					<img src=""></img>
				</figure>
				<p>Interactive demo of the Web Database interface I developed for the EEC to track
					project develoment, time-entry management and employee work load. </p>
			</article>
		</li>
		<li>
			<article>
				<h5>CS 275 Final Project</h5>
				<figure>
					<img src=""></img>
				</figure>
				<p>Final project for my Web Database Course. Task Management Application to track 
					progress and time spent, developed with HTML, Javascript PHP, MySQL and 
					Relational Databases. </p>
			</article>
		</li>
	</ol>
	
	<h4>Experiments</h4>
	<ol id="labs">
		<li>
			<figure>
				<img src=""></img>
				<caption>Google Map API Contact your Senator</caption>
			</figure>
		</li>
	</ol>
</section>

<aside id="links" class="section">
	<h4>Links</h4>
	
	<ul id="linklist">
		<li><a href="">Twitter</a></li>
		<li><a href="">LinkedIn</a></li>
		<li><a href="">My Resume</a></li>
	</ul>
</aside>

<aside id="about" class="section">
	<h4>About Me</h4>
	
	<img id="myphoto" src="<?php echo $sitepath;?>/img/myphoto.jpg"></img>
	
	<div id="text">
		My name is Devlin Junker, I'm an undergraduate student studying Computer Science at Oregon 
		State University with a focus design and on usability engineering. Computer application and
		services industries are evolving at a fascinating pace; the development of interfaces to 
		facilitate streamlined, robust interaction is an exciting and fun field.
		<br/><br/>
		I am interested in web and mobile application development. I have experience developing web 
		applications using HTML, CSS, Javascript, Ruby and PHP in conjuction with AJAX, MySQL and 
		relational database's to track, manage and store information for organizations. 
	</div>
	
	<a href="javascript:$('#quickcontact').toggle();" class="btn">Quick Contact</a>
	
	<form id="quickcontact" class="contactform" hidden="hidden">
		<?php 
			$scripts[] = "contactform.js";
			include("contactform.php");
		?>
	</form>
</aside>

	
<?php include 'footer.htm' ?>