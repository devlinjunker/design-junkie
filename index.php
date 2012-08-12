<?php $pagetitle="Home"; ?>
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
		<li></li>
	</ul>
</div>

<div id="about" class="section">
	<h4>About Me</h4>
	<img id="myphoto" src="<?php echo $sitepath;?>/img/myphoto.jpg"></img>
	<div id="text">
		My name is Devlin Junker, I'm an undergraduate student studying Computer Science at Oregon 
		State University with a focus on usability engineering. Networking is evolving at an amazing 
		speend and the development of interfaces to facilitate communication
		<br/><br/>
		I am  interested in web and mobile application development and I have experience developing 
		applications using HTML, CSS, Javascript, Ruby and PHP in conjuction with AJAX, MySQL 
		and relational database's to track and store information for organizations. 
	</div>
	<a href="<?php echo $sitepath;?>/about" class="btn">Quick Contact</a>
	<div>
		<label for="name">Name:</label><input name="name"/>
	</div>
</div>

	
<?php include 'footer.htm' ?>