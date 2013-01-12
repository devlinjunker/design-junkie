<?php $pagename="Home"; ?>
<?php include 'header.htm'; ?>

<aside id="bar">
	<?php 
		include("php/searchform.php");
	?>
	<div id="links">
		<h4>My Links</h4>
		
		<ul id="linklist">
			<li><a href="resume.pdf">My Resume</a></li>
			<li><a href="http://www.linkedin.com/pub/devlin-junker/32/32b/497">LinkedIn</a></li>
			<li><a href="http://twitter.com/devjunker">Twitter</a></li>
			<li><a href="http://www.facebook.com/devlin.junker">Facebook</a></li>
			<li><a href="http://www.github.com/devlinjunker">GitHub</a></li>
		</ul>
	</div>
</aside>

<section id="projects" >
	<h4><a href="projects">Projects<span class="more">More >></span></a></h4>
	
	<ol id="projectlist">
		<li>
			<article>
					<figure>
						<a href="http://www.wovenfiredesigns.com"><img class="square" src="img/projects/artist-website-square.jpg" alt="Artist's Wordpress Website"/></a>
					</figure>
					<div class="content-wrapper">
						<h5><a href="http://www.wovenfiredesigns.com">Wordpress Website for Northwest Artist</a></h5>
						<p> Wordpress website and blog that I was hired to create. Customized theme
							developed with PHP, HTML and CSS. Wordpress widgets created and edited,  
							and custom Admin interface for easy blog development and customization.</p>
						<a class="view" href="http://www.wovenfiredesigns.com">View Project >></a>
					</div>
			</article>
		</li>
		<li>
			<article>
					<figure>
						<a href="<?php echo $sitepath;?>/projects/iac"><img class="square" src="img/projects/eec-project-manager-square.jpg" alt="EEC Database Interface"/></a>
					</figure>
					<div class="content-wrapper">
						<h5><a href="<?php echo $sitepath;?>/projects/iac">OSU Energy Efficiency Center Web Interface</a></h5>
						<p>Interactive demo of the Web Database interface I developed for the EEC to track
							project develoment, time-entry management and employee work load. Made with PHP, Javascript,
							HTML, and CSS. Not completely functional due to restrictions on OSU student databases.</p>
						<a class="view" href="<?php echo $sitepath;?>/projects/iac">View Project >></a>
					</div>
			</article>
		</li>
	</ol>
</section>
<section id="labs">
	
	<h4><a href="labs">Experiments<span class="more">More >></span></a></h4>

	<ol id="lablist">
		<li>
			<h6><a href="<?php echo $sitepath;?>/projects/representative-map/">Contact Senator Map</a></h6>
			<figure>
				<a href="<?php echo $sitepath;?>/projects/representative-map/"><img class="square" src="img/projects/contact-senator-square.jpg" alt="Contact Senator Map"/></a>
			</figure>
			<p>Google Map API used to create Interactive U.S. Map that shows contact information 
				for state senators.</p>
			<a class="view" href="../projects/representative-map/">View Experiment >></a>
		</li>
		<li>
			<h6><a href="<?php echo $sitepath;?>/projects/textbook-finder/bookdonation/">Bookshare Application</a></h6>
			<figure>
				<a href="<?php echo $sitepath;?>/projects/textbook-finder/bookdonation/"><img class="square" src="img/projects/textbook-login-square.jpg" alt="Bookshare Application"/></a>
			</figure>
			<p>Created for CS 361 - <dfn>Software Engineering 1</dfn> - A PHP web application with 
				a user login form and database.</p>
			<a class="view" href="<?php echo $sitepath;?>/projects/textbook-finder/bookdonation/">View Experiment >></a>
		</li>
	</ol>
</section>

<section id="about" class="section">
	<h4><a href="about">About Me<span class="more">More >></span></a></h4>
	
	<img id="myphoto" src="img/myphoto.jpg" alt="My Picture"/>
	
	<div id="text">
		<strong>Hi, My name is Devlin Junker,</strong> I'm an undergraduate student studying Computer Science at Oregon 
		State University with a focus on usability engineering and interface development.
		<br/><br/>
		I have experience with front and back-end development and with using Photoshop to create and design interfaces 
		for web applications. As a developer I can make the interfaces a reality by using the newest technologies, including
		HTML5, CSS3, and jQuery. I also have experience organizing and manipulating the data on the back-end using PHP
		in conjunction with SQL database's. 
		<br/><br/>
		I am currently interested in freelance design and/or development opportunities. If you are in need of help on a project and 
		interested in working with me, you can get ahold of me with the form below and I will respond promptly.
	</div>
	
	<a href="javascript:$('#quickcontact').toggle();$(window).scrollTop($('div#quickcontact').position().top)" class="btn">Quick Contact</a>
	
	<div id="quickcontact" <?php echo (isset($_SESSION["cf_returndata"]) ? "" : "hidden"); ?>>
		<?php 
			include("php/contactform.php");
		?>
	</div>
</section>

	
<?php include 'footer.htm' ?>