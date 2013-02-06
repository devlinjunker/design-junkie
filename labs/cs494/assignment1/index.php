<?php $pagename="CS494 Assignment1"; ?>
<?php include '../../../header.htm' ?>
<?php $scripts[] = "cs494.js"; ?>

<h2 id="pagetitle">CS494 - HTML and CSS - Devlin Junker
	<div id="searchwrapper">
		<?php 
			include("../../../php/searchform.php");
		?>
	</div>
</h2>
<section>
	<table>
		<thead>
			<tr><td>Favorite Courses at OSU</td></tr>
		</thead>
		<tbody>
			<tr><td>CS 275 - Intro to Databases</td></tr>
			<tr><td>CS 311 - Operating Systems I</td></tr>
			<tr><td>CS 361 - Software Engineering I</td></tr>
			<tr><td>CS 362 - Software Engineering II</td></tr>
		</tbody>
	</table>
</section>
<section>
	<table>
		<thead>
			<tr><td>Favorite Professors at OSU</td></tr>
		</thead>
		<tbody>
			<tr><td>Dr. Ben Lee</td></tr>
			<tr><td>Dr. Jennifer Parham-Mocello</td></tr>
			<tr><td>Dr. Alex Groce</td></tr>
			<tr><td>Dr. Martin Erwig</td></tr>
			<tr><td>Dr. Chris Scaffidi</td></tr>
		</tbody>
	</table>
</section>
<section>
	<h4>Courses I Want to Take</h4>
	<ul>
		<li>CS 411 - Operating Systems II</li>
		<li>CS 419 - Intro to Data Visualization</li>
		<li>CS 440 - Database Management Systems</li>
		<li>CS 496 - Cloud and Mobile Development</li>
	</ul>
</section>
<section>
	<h4>Rate a Course</h4>
	<form id="rate_course">
		<div>
			<label for="name">Course Name:</label>
			<input type="text" name="name"/>
		</div>
		<div>
			<label for="rating">Rating:</label> 
			1 <input type="radio" name="rating" value="1"/>
			2 <input type="radio" name="rating" value="2"/>
			3 <input type="radio" name="rating" value="3"/>
			4 <input type="radio" name="rating" value="4"/>
			5 <input type="radio" name="rating" value="5"/>
		</div>
	</form>
</section>	

<?php include '../../../footer.htm' ?>
