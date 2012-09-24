<form class="searchform">
	<div id="advanced">
		<a href="javascript:$('#options').toggle();"><i class="icon-cog icon-large"></i></a>
	</div>
	<input type="text" name="search" id="search" placeholder="Search"/>
	<div id="options" hidden>
		<label>Projects <input type="radio" name="searchtype" value="projects" <?php echo ($pagename == "Projects") ? "checked" : ""; ?>/></label>
		<label>Expiriments <input type="radio" name="searchtype" value="experiments" <?php echo ($pagename == "Experiments") ? "checked" : ""; ?>/></label>
		<label>Both <input type="radio" name="searchtype" value="both"/></label>
	</div>
</form>