<?
    include("../../../settings.php");
    
    try{
        $retrieve_statement = $db_connection -> prepare("SELECT `Photo`, `PhotoType` FROM `Actors` WHERE `ActorID` = :id");
    }catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }

    $actor_id = ( array_key_exists('id', $_REQUEST) ? $_REQUEST['id'] : 0 );

    if( $actor_id <= 0 || !is_numeric($actor_id) ){
        echo "Error: Invalid Actor Id";
    }else{
        try{
        
            $retrieve_statement->execute( array("id" => $actor_id) );

            if( $retrieve_statement->rowCount() == 1 ){
                $row = $retrieve_statement->fetch();

                header("Content-type: $row[PhotoType]");

                echo $row['Photo'];
            }

        }catch(PDOException $e){
            echo "Error: ".$e->getMessage();
        }

    }

?>
