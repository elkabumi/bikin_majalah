<?php

function select(){
	$query = mysql_query("select * from gallery");
	return $query;
}

function read_id($id){
	$query = mysql_query("select *
			from gallery 
			where gallery_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}


function create($data){
	mysql_query("insert into gallery values(".$data.")");
}

function update($data, $id){
	mysql_query("update gallery set ".$data." where gallery_id = '$id'");
}

function delete($id){
	mysql_query("delete from gallery  where gallery_id = '$id'");
}


?>