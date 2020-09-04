<?php

require(ROOT . "model/functieModel.php");

function index(){
	render("home/index", array("birthday" => getAllBirth()));
}

function create(){
	render("home/create");
}

function store(){
	$name=$_POST["name"];
    $lastName=$_POST["lastName"];
    $geboorteDatum=$_POST["geboorteDatum"];
	createUser($name,$lastName,$geboorteDatum);
	index();
}

function delete($id){
	render("home/delete", ["id" => $id]);
}

function destroy($id){
	deleteUser($id);
	index();
}

function update($id){
	render("home/update", array("birthday" => getBirthById($id)));
}

function edit($id){
	updateUser($_POST, $id);
	index();
}