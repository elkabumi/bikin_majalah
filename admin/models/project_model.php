<?php

function select(){
	$query = mysql_query("select * from project");
	return $query;
}

function read_id($id){
	$query = mysql_query("select *
			from project 
			where project_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}


function create($data){
	mysql_query("insert into project values(".$data.")");
}

function update($data, $id){
	mysql_query("update project set ".$data." where project_id = '$id'");
}

function delete($id){
	mysql_query("delete from project  where project_id = '$id'");
}


?>