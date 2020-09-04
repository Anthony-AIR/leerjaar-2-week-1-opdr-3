<?php

require(ROOT . "model/functieModel.php");

function index(){
	render("home/index", array("birthday" => getAllBirth()));
}

function create(){
	render("home/create");
}

function store(){
	$inputName=$_POST["inputName"];
    $inputLastName=$_POST["inputLastName"];
    $inputBirthday=$_POST["inputBirthday"];
	createUser($inputName,$inputLastName,$inputBirthday);
	index();
}

function delete($id){
	render("home/delete", ["id" => $id]);
}

function destroy($id){
	deleteUser($id);
	index();
}