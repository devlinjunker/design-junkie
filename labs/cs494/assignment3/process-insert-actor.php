<?php
    include("../../../settings.php");    

    $insert_actor = $db_connection->prepare("INSERT INTO `Actors` (`Name`, `Photo`, `PhotoType`) VALUES (:name, :photo, :type)");

    if( !empty($_POST) ){
        $form_ok = true;
        $errors = array();

        $actorname = $_POST["actor_name"];

        $errorinfo = $_FILES["actor_photo"]["error"];
        $filename = $_FILES["actor_photo"]["name"];
        $tmpfile = $_FILES["actor_photo"]["tmp_name"];
        $filesize = $_FILES["actor_photo"]["size"];
        $filetype = $_FILES["actor_photo"]["type"];


        if( empty( $actorname ) ){
            $form_ok = false;
            $errors[] = "You did not include a Name";
        }
        elseif( strlen( $actorname ) > 50 ){
            $form_ok = false;
            $errors[] = "Actor/Actress name must be less than 50 characters";
        }

        if( !empty($errorinfo) ){
            $formok = false;
            $errors[] = $errorinfo;
        }
        elseif( empty( $filename ) ){
            $form_ok = false;
            $errors[] = "Photo can not be Empty";
        }
        elseif( $filesize > 1048567 ){
            $form_ok = false;
            $errors[] = "Only photo's under 1MB can be uploaded";
        }
        elseif( $filetype != "image/jpeg" && $filetype != "image/gif" && $filetype != "image/png" ){
            $form_ok = false;
            $errors[] = "Only JPEG, PNG, and GIF image formats are accepted";
        }

        if( $form_ok ){
        
            $file_data = file_get_contents($tmpfile);

            try{
                $insert_result = $insert_actor->execute( array("name" => $actorname, "photo" => $file_data, "type" => $filetype) ); 

            }catch(PDOException $e){
                $form_ok = false;
                $errors[] = "Error Inserting: ".$e->getMessage();
            }
        }
       
        $return_data = array(
            'inserted_data' => array(
                'actor_name' => $actorname,
                'file_name' => $filename
            ),
            'form_ok' => $form_ok,
            'errors' => $errors
        );

        // set session variables  
        session_start();  
        $_SESSION['af_returndata'] = $return_data;  
        
        // redirect back to form 
        echo "<script> window.location.replace('$_SERVER[HTTP_REFERER]')</script>"; 

        
    }else{
  //      echo "<script> document.location.replace('$sitepath/labs/cs494/assignment3'); </script>";
    
    }

?>
