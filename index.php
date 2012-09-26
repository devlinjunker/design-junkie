<?php $pagename="Home"; ?>
<?php include 'header.htm'; ?>

<aside>
	<?php 
		$scripts[] = "searchform.js";
		include("php/searchform.php");
	?>
	<div id="links">
		<h4>My Links</h4>
		
		<ul id="linklist">
			<li><a href="resume.pdf">My Resume</a></li>
			<li><a href="http://www.linkedin.com/pub/devlin-junker/32/32b/497">LinkedIn</a></li>
			<li><a href="http://twitter.com/devjunker">Twitter</a></li>
			<li><a href="http://www.facebook.com/devlin.junker">Facebook</a></li>
		</ul>
	</div>
</aside>

<section id="projects" >
	<h4><a href="projects">Projects<span id="more">More >></span></a></h4>
	
	<ol id="projectlist">
		<li>
			<article>
					<figure>
						<img class="square" src="img/projects/artist-website-square.jpg"></img>
					</figure>
					<div class="content-wrapper">
						<h5><a href="">Wordpress Website for Northwest Artist</a></h5>
						<p> Worpdress website and blog that I was hired to create. Customized theme
							developed with PHP, HTML and CSS. Wordpress widgets created and edited,  
							and custom Admin interface for easy blog development and customization.</p>
						<a id="view" href="">View Project >></a>
					</div>
			</article>
		</li>
		<li>
			<article>
					<figure>
						<img class="square" src="img/projects/eec-project-manager-square.jpg"></img>
					</figure>
					<div class="content-wrapper">
						<h5><a href="">OSU Energy Efficiency Center Web Interface</a></h5>
						<p>Interactive demo of the Web Database interface I developed for the EEC to track
							project develoment, time-entry management and employee work load. </p>
						<a id="view" href="">View Project >></a>
					</div>
			</article>
		</li>
	</ol>
</section>
<section id="labs">
	
	<h4><a href="labs">Experiments<span id="more">More >></span></a></h4>

	<ol id="lablist">
		<li>
			<h6><a href="../projects/representative-map/">Contact Senator Map</a></h6>
			<figure>
				<a href="../projects/representative-map/"><img class="square" src="img/projects/contact-senator-square.jpg"></img></a>
			</figure>
			<p>Google Map API used to create Interactive U.S. Map that shows contact information 
				for state senators.</p>
			<a id="view" href="../projects/representative-map/">View Experiment >></a>
		</li>
		<li>
			<h6><a href="../projects/textbook-finder/bookdonation/">Bookshare Application</a></h6>
			<figure>
				<a href="../projects/textbook-finder/bookdonation/"><img class="square" src="img/projects/textbook-login-square.jpg"></img></a>
			</figure>
			<p>Created for CS 361 - <dfn>Software Engineering 1</dfn> - A PHP web application with 
				a user login form and database.</p>
			<a id="view" href="../projects/textbook-finder/bookdonation/">View Experiment >></a>
		</li>
		<li class='hidden'>
			<h6><a href=""></a></h6>
			<figure>
				<img class="square" src=""></img>
			</figure>
			<p></p>
			<a id="view" href="">View Experiment >></a>
		</li>
	</ol>
</section>

<section id="about" class="section">
	<h4><a href="about">About Me<span id="more">More >></span></a></h4>
	
	<img id="myphoto" src="img/myphoto.jpg"></img>
	
	<div id="text">
		My name is Devlin Junker, I'm an undergraduate student studying Computer Science at Oregon 
		State University with a focus interface and on usability engineering.
		<br/><br/>
		As the computer application and service industries evolve at a fascinating pace, human-computer 
		interface's will define the future of interaction and communication. I feel extremely lucky to 
		be able to take part in this exciting growth and development, and to have the opportunity to help 
		define that future.
		<br/><br/>
		I am specifically interested in web and mobile application development for both consumers and organizations. 
		Information is a central piece of our life's as we enter the <dfn>information</dfn> age, and applications
		that help store and track all of the growing amounts of information around us will be important in keeping 
		people from becoming overwhelmed. I have experience developing web applications using HTML, CSS, Javascript, 
		Ruby and PHP in conjunction with relational database's to track, manage and store information for organizations. 
	</div>
	
	<a href="javascript:$('#quickcontact').toggle();$(window).scrollTop($('div#quickcontact').position().top)" class="btn">Quick Contact</a>
	
	<div id="quickcontact" hidden>
		<?php 
			$scripts[] = "contactform.js";
			include("php/contactform.php");
		?>
	</div>
</section>

	
<?php include 'footer.htm' ?>