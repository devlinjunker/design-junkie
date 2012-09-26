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
			<li><a href="">My Resume</a></li>
			<li><a href="">LinkedIn</a></li>
			<li><a href="">Twitter</a></li>
			<li><a href="">Facebook</a></li>
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
						<h5><a href="">Northwest Artist's Wordpress Website</a></h5>
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
			<h6><a href="">Contact Senator Map</a></h6>
			<figure>
				<img class="square" src="img/projects/contact-senator-square.jpg"></img>
			</figure>
			<p>Google Map API used to create Interactive U.S. Map that shows contact information 
				for state senators.</p>
			<a id="view" href="">View Experiment >></a>
		</li>
		<li>
			<h6><a href="">Bookshare Application</a></h6>
			<figure>
				<img class="square" src="img/projects/textbook-login-square.jpg"></img>
			</figure>
			<p>Created for CS 361 - <dfn>Software Engineering 1</dfn> - A PHP web application with 
				a user login form and database.</p>
			<a id="view" href="">View Experiment >></a>
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
		State University with a focus design and on usability engineering. Computer application and
		services industries are evolving at a fascinating pace; the development of interfaces to 
		facilitate streamlined, robust interaction is an exciting and fun field.
		<br/><br/>
		I am interested in web and mobile application development. I have experience developing web 
		applications using HTML, CSS, Javascript, Ruby and PHP in conjuction with AJAX, MySQL and 
		relational database's to track, manage and store information for organizations. 
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