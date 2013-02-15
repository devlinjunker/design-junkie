<?php $pagename="CS494 Assignment3"; ?>
<?php include '../../../header.htm' ?>

<?php $scripts[] = "cs494.js"; ?>
<h2 id="pagetitle">CS494 - PHP and Databases - Devlin Junker
	<div id="searchwrapper">
		<?php 
			include("../../../php/searchform.php");
		?>
	</div>
</h2>

<section id="actor_form" >
<?php
    require("actor_form.php");
?>
</section>	

<section id="actor_container">
<h4>Actors in Database</h4>
    
    <table id="actor_table">
        <thead>
            <tr>
                <td>Name</td>
                <!--td>Webpage</td-->
            </tr>
        </thead>
        <tbody>
            <?php
                try{
                    $data = $db_connection->query("SELECT ActorID, Name, URL, URLName FROM Actors");
                    
                    if( $data->rowCount() ){
                    
                        foreach($data as $row){
                            print "<tr class='actor_info' data-actor-id='$row[ActorID]'><td class='actor_name' >$row[Name]</td><!--td><a href='$row[URL]'>$row[URLName]</a></td--></tr>";
                        }

                    }else{
                        //print "<tr><td class='no_data' colspan='2'>No-one has been entered into the Database yet :(</td></tr>";
                        print "<tr><td class='no_data' >No-one has been entered into the Database yet :(</td></tr>";
                    }

                }catch(PDOException $e){
                    echo "ERROR: ".$e->getMessage();
                }
            ?> 
        </tbody>
        <tfoot>
            <tr id="actor_photo">
                <!--td colspan='2'></td-->
                <td>
                    <img src="" class="hidden"/>
                </td>
            </tr>
        </tfoot>
    </table>

</section>

<?php include '../../../footer.htm' ?>
