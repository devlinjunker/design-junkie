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
					projects and manage employee work load.</p>
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
	
	<h4>Labs</h4>
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
		State University with a focus on usability engineering. The computer network and service industry
		is evolving at an amazing pace and the development of interfaces to facilitate use of these 
		technologies for the benefit of everyone is important 
		<br/><br/>
		I am  interested in web and mobile application development for consumer and organizational 
		applcations and I have experience developing web applications using HTML, CSS, Javascript, 
		Ruby and PHP in conjuction with AJAX, MySQL and relational database's to track, manage and 
		store information for groups and organizations. 
	</div>
	
	<a href="javascript:" class="btn">Quick Contact</a>
	
	<form id="quickcontact" class="contactform">
		<?php 
			$scripts[] = "contactform.js";
			include("contactform.php");
		?>
	</form>
</aside>

	
<?php include 'footer.htm' ?>