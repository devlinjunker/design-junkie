<?php $pagename="About"; ?>
<?php include '../header.htm' ?>

<h2 id="pagetitle"><?php echo $pagename;?></h2>
<section id="info">
	<img id="myphoto" src="<?php echo $sitepath;?>/img/myphoto.jpg" alt="My Picture"/>
	<strong>Hi, My name is Devlin Junker,</strong> I'm an undergraduate student studying Computer Science at Oregon 
	State University with a focus on usability engineering and interface development.
	<br/><br/>
	I have experience with front and back-end development and with using Photoshop to create and design interfaces 
	for web applications. As a developer I can make the interfaces a reality by using the newest technologies, including
	HTML5, CSS3, and jQuery. Using PHP and .NET I have experience organizing and manipulating the data on the back-end
	in conjunction with SQL database's. 
	<br/><br/>
	I am currently interested in freelance design and/or development opportunities. If you are in need of help on a project and 
	interested in working with me, you can get ahold of me with the form below and I will respond promptly.
</section>
<section id="contact">
	<?php 
		include("../php/contactform.php");
	?>
</section>
	

<?php include '../footer.htm' ?>