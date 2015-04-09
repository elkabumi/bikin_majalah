<?php

function select(){
	$query = mysql_query("select * from comment");
	return $query;
}

function read_id($id){
	$query = mysql_query("select *
			from comment 
			where comment_id  = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}


function create($data){
	mysql_query("insert into comment values(".$data.")");
}

function update($data, $id){
	mysql_query("update comment set ".$data." where comment_id  = '$id'");
}

function delete($id){
	mysql_query("delete from comment  where comment_id  = '$id'");
}
function active($id){
	mysql_query("UPDATE comment SET comment_type  = '1'  where comment_id  = '$id'");
}
function inactive($id){
	mysql_query("UPDATE comment SET comment_type  = '0'  where comment_id  = '$id'");
}
?>