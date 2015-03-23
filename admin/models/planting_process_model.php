<?php

function select(){
	$query = mysql_query("select a.*, b.land_area, c.varieties_name, d.planting_distance_model_name, e.seed_name, f.location_name
		from planting_processes a 
		join lands b on b.land_id = a.land_id
		join varieties c on c.varieties_id = a.varieties_id
		join planting_distance_models d on d.planting_distance_model_id = a.planting_distance_model_id
		join seeds e on e.seed_id = a.seed_id
		join locations f on f.location_id = b.location_id
		order by planting_process_id
		");
	return $query;
}

function select_land(){
	$query = mysql_query("select a.*, b.location_name from lands a 
																	join locations b on b.location_id = a.location_id
																	order by land_id");
	return $query;
}

function select_varieties(){
	$query = mysql_query("select * from varieties order by varieties_id");
	return $query;
}

function select_planting_distance_model(){
	$query = mysql_query("select * from planting_distance_models order by planting_distance_model_id");
	return $query;
}

function select_seed(){
	$query = mysql_query("select * from seeds order by seed_id");
	return $query;
}

function read_id($id){
	$query = mysql_query("select a.*, b.land_area, c.varieties_name, d.planting_distance_model_name, e.seed_name
		from planting_processes a 
		join lands b on b.land_id = a.land_id
		join varieties c on c.varieties_id = a.varieties_id
		join planting_distance_models d on d.planting_distance_model_id = a.planting_distance_model_id
		join seeds e on e.seed_id = a.seed_id
		where planting_process_id = '$id'
		");
	$result = mysql_fetch_object($query);
	return $result;
}


function create($data){
	mysql_query("insert into planting_processes values(".$data.")");
}

function update($data, $id){
	mysql_query("update planting_processes set ".$data." where planting_process_id = '$id'");
}

function delete($id){
	mysql_query("delete from planting_processes  where planting_process_id = '$id'");
}


?>