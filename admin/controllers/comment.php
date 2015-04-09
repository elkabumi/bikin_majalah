<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/comment_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("Komentar");

$_SESSION['menu_active'] = 1;

switch ($page) {
	// Tampilan List awal
	case 'list':
		get_header($title);
		
		$query = select();
		$add_button = "comment.php?page=form";


		include '../views/comment/list.php';
		get_footer();
	break;
	
	// Form input dan edit
	case 'form':
		get_header();

		$close_button = "comment.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){
			
			$title = ucfirst("Form Edit Project");

			$row = read_id($id);
		
			$action = "comment.php?page=edit&id=$id";
		} else{
			
			$title = ucfirst("Form Input Project");

			//inisialisasi
			$row = new stdClass();
	
			$row->comment_name = false;
			$row->comment_description = false;
	
			$action = "comment.php?page=save";
		}

		include '../views/comment/form.php';
		get_footer();
	break;

	//Active
	case 'active':

		$id = get_isset($_GET['id']);	

		active($id);

		header('Location: comment.php?page=list&did=4');

	break;
	//Inactive
	case 'inactive':

		$id = get_isset($_GET['id']);	

		inactive($id);

		header('Location: comment.php?page=list&did=5');

	break;
	// Delete data
	case 'delete':

		$id = get_isset($_GET['id']);	

		delete($id);

		header('Location: comment.php?page=list&did=3');

	break;
}

?>