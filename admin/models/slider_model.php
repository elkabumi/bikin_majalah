<?php

function select(){
	$query = mysql_query("select * from slider");
	return $query;
}

function read_id($id){
	$query = mysql_query("select *
			from slider 
			where slider_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}


function create($data){
	mysql_query("insert into slider values(".$data.")");
}

function update($data, $id){
	mysql_query("update slider set ".$data." where slider_id = '$id'");
}

function delete($id){
	mysql_query("delete from slider  where slider_id = '$id'");
}


?>