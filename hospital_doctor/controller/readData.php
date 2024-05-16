<?php 

require_once ('../model/model.php');

function fetchAllUsers(){
	//echo 'success';
	return showAllUsers();

}

function fetchAllPatient(){
	//echo 'success';
	return showAllPatient();

}



function fetchPatientPending(){
	//echo 'success';
	return showPatientPending();

}

function fetchUsers($username){
	return showUsers($username);

}

function fetchHistory(){
	//echo 'success';
	return showHistory();

}


function fetchHistoryAccepted(){
	//echo 'success';
	return showHistoryAccepted();

}


function fetchUsersByEmail($email){
	return showUsersByEmail($email);

}



?>