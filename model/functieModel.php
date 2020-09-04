<?php
    function getAllBirth(){
        $db = openDatabaseConnection();
	    $statement = $db->prepare("SELECT * FROM verjaardagen");
	    $statement->execute();
	    $db = null;
        return $statement->fetchAll();
    }
?>