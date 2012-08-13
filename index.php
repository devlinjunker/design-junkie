<?php $pagename="home"; ?>
<?php include 'header.htm'; ?>

<div id="projects" class="section">
	<h4>Projects</h4>
	
	<ul>
		<li>#1</li>
		<li>#2</li>
	</ul>
	
	<h4>Labs</h4>
</div>

<div id="links" class="section">
	<h4>Links</h4>
	
	<ul id="linklist">
		<li><a href="">LinkedIn</a></li>
		<li><a href="">Resume</a></li>
		<li><a href=""></a></li>
	</ul>
</div>

<div id="about" class="section">
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
			include(contactform.php);
		?>
	</form>
</div>

	
<?php include 'footer.htm' ?>