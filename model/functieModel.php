<?php
    function getAllBirth(){
        $conn = openDatabaseConnection();
	    $statement = $conn->prepare("SELECT * FROM verjaardagen");
	    $statement->execute();
	    $conn = null;
        return $statement->fetchAll();
    }

    function getBirthById($id){
        $conn = openDatabaseConnection();
	    $statement = $conn->prepare("SELECT * FROM verjaardagen WHERE id = :id");
        $statement->bindParam(":id", $id);
        $statement->execute();
	    $conn = null;
        return $statement->fetchAll();
    }

    function createUser($name,$lastName,$geboorteDatum){
        $conn = openDatabaseConnection();
	    $statement = $conn->prepare("INSERT INTO verjaardagen (name, lastName, geboorteDatum) VALUES (:name, :lastName, :geboorteDatum)");
        $statement->bindParam(":name" , $name);
        $statement->bindParam(":lastName" , $lastName);
        $statement->bindParam(":geboorteDatum" , $geboorteDatum);
        $statement->execute();
    }

    function updateUser($data, $id){
        $conn=openDatabaseConnection();
        $statement = $conn->prepare("UPDATE verjaardagen SET name = :name,  lastName = :lastName, geboorteDatum = :geboorteDatum WHERE id = :id");
        $statement->bindParam(":id", $id);
        $statement->bindParam(":name" , $data["name"]);
        $statement->bindParam(":lastName" , $data["lastName"]);
        $statement->bindParam(":geboorteDatum" , $data["geboorteDatum"]);
        $statement->execute();
    }

    function deleteUser($id){
        $conn = openDatabaseConnection();
	    $statement = $conn->prepare("DELETE FROM verjaardagen WHERE id = :id ");
	    $statement->bindParam(":id",$id);
        $statement->execute();
    }
?>