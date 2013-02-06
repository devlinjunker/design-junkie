<?php $pagename="CS494"; ?>
<?php include '../../header.htm'; ?>
<?php $scripts[] = "cs494.js"; ?>

<h2 id="pagetitle">CS494 Webpage - Devlin Junker
	<div id="searchwrapper">
		<?php 
			include("../../php/searchform.php");
		?>
	</div>
</h2>
<section>
	<table id="cs494_assignments">
		<thead>
			<tr><td colspan="2">CS 494 Projects</td></tr>
		</thead>
		<tbody>
			<tr id="assignment1">
				<td><h4>Assignment 1</h4></td>
				<td>Practice HTML writing tables to display information and creating non-functioning forms. <div class="more">More ..</div></td>
			</tr>
			<tr id="assignment2">
				<td><h4>Assignment 2</h4></td>
				<td>Practice Javascript and jQuery by retrieving XML information using AJAX and displaying specific information in the XML on the page and in local storage or a cookie on the users computer. <div class="more">More ..</div></td>
			</tr>
		</tbody>
	</table>
</section>

<?php include '../../footer.htm'; ?>
