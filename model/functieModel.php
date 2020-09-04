<?php
    function getAllBirth(){
        $db = openDatabaseConnection();
	    $statement = $db->prepare("SELECT * FROM verjaardagen");
	    $statement->execute();
	    $db = null;
        return $statement->fetchAll();
    }

    function createUser($inputName,$inputLastName,$inputBirthday){
        $db = openDatabaseConnection();
	    $statement = $db->prepare("INSERT INTO verjaardagen (name, lastName, geboorteDatum) VALUES (:inputName, :inputLastName, :inputBirthday)");
        $statement->bindParam(":name" , $inputName);
        $statement->bindParam(":lastName" , $inputLastName);
        $statement->bindParam(":geboorteDatum" , $inputBirthday);
        $statement->execute();
    }

    function deleteUser($id){
        $conn = openDatabaseConnection();
	    $statement = $conn->prepare("DELETE FROM verjaardagen WHERE id = :id ");
	    $statement->bindParam(":id",$id);
        $statement->execute();
    }
?>