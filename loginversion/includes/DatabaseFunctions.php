<?php

##REUSABLE QUERY FUNCTION##

function query($pdo, $sql, $parameters = []) {
	$query = $pdo->prepare($sql);
	$query->execute($parameters);
	return $query;
}

##QUESTION FUNCTIONS##

function getJoke($pdo, $id) {
	$parameters = [':id' => $id];
	$query = query($pdo, 'SELECT * FROM question WHERE id = :id', $parameters);
	return $query->fetch();
}

function getPerson($pdo, $id) {
	$parameters = [':id' => $id];
	$query = query($pdo, 'SELECT * FROM person WHERE id = :id', $parameters);
	return $query->fetch();
}

function totalJokes($pdo) {
	$query = query($pdo, 'SELECT COUNT(*) FROM question');
	$row = $query->fetch();
	return $row[0];
}

function totalModules($pdo) {
	$query = query($pdo, 'SELECT COUNT(*) FROM module');
	$row = $query->fetch();
	return $row[0];
}

function totalPersons($pdo) {
	$query = query($pdo, 'SELECT COUNT(*) FROM person');
	$row = $query->fetch();
	return $row[0];
}

function allJokes($pdo) {
	$questions = query($pdo, 'SELECT question.id, questiontext, name, email, moduleName, image FROM question
	INNER JOIN person ON personid  = person.id
	INNER JOIN module ON moduleid = module.id');
	return $questions->fetchAll();
}

function allModules($pdo) {
	$modules = query($pdo, 'SELECT * FROM module');
	return $modules->fetchAll();
}

function allPersons($pdo) {
	$persons = query($pdo, 'SELECT * FROM person');
	return $persons->fetchAll();
}

function insertJoke($pdo, $questiontext, $personid, $moduleid) {
	$query = 'INSERT INTO question (questiontext, questiondate, personid, moduleid)
	VALUES (:questiontext, CURDATE(), :personid, :moduleid)';
	$parameters = [':questiontext' => $questiontext, ':personid' => $personid, ':moduleid' => $moduleid];
	query($pdo, $query, $parameters);
}

function insertModule($pdo, $moduleName) {
	$query = 'INSERT INTO module (moduleName)
	VALUES (:moduleName)';
	$parameters = [':moduleName' => $moduleName];
	query($pdo, $query, $parameters);
}

function insertImage($pdo, $submit) {
	$query = 'INSERT INTO images (image)
	VALUES (:submit)';
	$parameters = [':submit' => $submit];
	query($pdo, $query, $parameters);
}

function insertPerson($pdo, $name, $email) {
	$query = 'INSERT INTO person (name, email)
	VALUES (:name, :email)';
	$parameters = [':name' => $name, ':email' => $email];
	query($pdo, $query, $parameters);
}

function updateJoke($pdo, $questionId, $questiontext) {
	$query = 'UPDATE question SET questiontext = :questiontext WHERE id = :id';
	$parameters = [':questiontext' => $questiontext, ':id' => $questionId];
	query($pdo, $query, $parameters);
}

function updatePerson($pdo, $personId, $name) {
	$query = 'UPDATE person SET name = :name WHERE id = :id';
	$parameters = [':name' => $name, ':id' => $personId];
	query($pdo, $query, $parameters);
}

function deleteJoke($pdo, $id) {
	$parameters = [':id' => $id];
	query($pdo, 'DELETE FROM question WHERE id = :id', $parameters);
}

function deleteModule($pdo, $id) {
	$parameters = [':id' => $id];
	query($pdo, 'DELETE FROM module WHERE id = :id', $parameters);
}

function deletePerson($pdo, $id) {
	$parameters = [':id' => $id];
	query($pdo, 'DELETE FROM person WHERE id = :id', $parameters);
}

##AUTHOR FUNCTIONS##

function allAuthors($pdo) {
	$persons = query($pdo, 'SELECT * FROM person');
	return $persons->fetchAll();
}

##CATEGORY FUNCTIONS##

function allCategories($pdo) {
	$modules = query($pdo, 'SELECT * FROM module');
	return $modules->fetchAll();
}
