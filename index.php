<?php $pagename="Home"; ?>
<?php include 'header.htm'; ?>

<section id="articles" class="section">
	<h4>Projects</h4>
	
	<ol id="projectlist">
		<li>
			<article>
				<div class="content-wrapper">
					<figure>
						<img class="square" src="img/projects/eec-project-manager-square.jpg"></img>
					</figure>
					<h5>OSU Energy Efficiency Center Web Interface</h5>
					<p>Interactive demo of the Web Database interface I developed for the EEC to track
						project develoment, time-entry management and employee work load. </p>
				</div>
			</article>
		</li>
		<li>
			<article>
					<figure>
						<img class="square" src="img/projects/project-manager-square.jpg"></img>
					</figure>
					<div class="content-wrapper">
						<h5>CS 275 Final Project</h5>
						<p>Final project for my Web Database Course. Task Management Application to track 
							progress and time spent, developed with HTML, Javascript PHP, MySQL and 
							Relational Databases. </p>
					</div>
			</article>
		</li>
	</ol>
	
	<h4>Experiments</h4>
	<ol id="lablist">
		<li>
			<h6>Contact Senator Map</h6>
			<figure>
				<img class="square" src="img/projects/contact-senator-square.jpg"></img>
			</figure>
			<p>Google Map API used to create Interactive U.S. Map that shows contact information 
				for state senators.</p>
		</li>
		<li>
			<h6>Bookshare Application</h6>
			<figure>
				<img class="square" src="img/projects/contact-senator-square.jpg"></img>
			</figure>
			<p>Created for CS 361 <dfn>Software Engineering 1</dfn> PHP web application with 
				user login test.</p>
		</li>
		<li class='invisible'>
			<h6></h6>
			<figure>
				<img class="square" src=""></img>
			</figure>
			<p></p>
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
	
	<div id="quickcontact" hidden>
		<?php 
			$scripts[] = "contactform.js";
			include("php/contactform.php");
		?>
	</div>
</aside>

	
<?php include 'footer.htm' ?>