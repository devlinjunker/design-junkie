<?php $scripts[] = "searchform.js"; ?>
<form class="searchform" action="<?php echo $sitepath;?>/search">
	<div id="searchbarwrapper">
		<div id="advanced">
			<a href="javascript:$('#options').toggle();"><i class="icon-cog icon-large"></i></a>
		</div>
		<input type="text" name="query" id="search" placeholder="Search" <?php if(isset($_GET['query'])){ echo "value='$_GET[query]'";}?>/>
		
	</div>
	<div id="options" hidden>
		<label>Projects <input type="radio" name="searchtype" value="projects" <?php echo ($pagename == "Projects" || $_GET['searchtype'] == "projects") ? "checked" : ""; ?>/></label>
		<label>Experiments <input type="radio" name="searchtype" value="experiments" <?php echo ($pagename == "Experiments" || $_GET['searchtype'] == "experiments") ? "checked" : ""; ?>/></label>
		<label>Both <input type="radio" name="searchtype" value="both" <?php echo ($pagename == "Home" || $_GET['searchtype'] == "both") ? "checked" : ""; ?>/></label>
	</div>
</form>