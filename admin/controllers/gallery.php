<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/gallery_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("Project");

$_SESSION['menu_active'] = 1;

switch ($page) {
	// Tampilan List awal
	case 'list':
		get_header($title);
		
		$query = select();
		$add_button = "gallery.php?page=form";


		include '../views/gallery/list.php';
		get_footer();
	break;
	
	// Form input dan edit
	case 'form':
		get_header();

		$close_button = "gallery.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){
			
			$title = ucfirst("Form Edit Gallery");

			$row = read_id($id);
		
			$action = "gallery.php?page=edit&id=$id";
		} else{
			
			$title = ucfirst("Form Input Gallery");

			//inisialisasi
			$row = new stdClass();
	
			$row->gallery_name = false;
	
			$action = "gallery.php?page=save";
		}

		include '../views/gallery/form.php';
		get_footer();
	break;

	// simpan data
	case 'save':
	
	

		extract($_POST);
		$i_name = get_isset($i_name);
		$date =date('Y-m-d');
		
		$path2 = "../../img/gallery/";
		$i_img_tmp = $_FILES['i_img']['tmp_name'];
		$i_img = ($_FILES['i_img']['name']) ? $_FILES['i_img']['name'] : "";
	
		$data = "'', 
					'$i_name', 
					'$date$i_img'
			";
			
			//echo $data;

			create($data);
			if($i_img){
				move_uploaded_file($i_img_tmp, $path2.$date.$i_img);
			}

			header('Location: gallery.php?page=list&did=1');
		
	break;


	// Edit data
	case 'edit':

		$id = get_isset($_GET['id']);	
		
		extract($_POST);

		$i_name = get_isset($i_name);
		$path2 = "../../img/gallery/";
		$date =date('Y-m-d');
		$i_img_tmp = $_FILES['i_img']['tmp_name'];
		$i_img = ($_FILES['i_img']['name']) ? $_FILES['i_img']['name'] : "";
		if($i_img){
							$data = " gallery_name = '$i_name',	
										gallery_photo  = '$date$i_img'";
		}else{
							$data = " gallery_name = '$i_name'
						";
		}
			
		update($data, $id);
		if($i_img){
					move_uploaded_file($i_img_tmp, $path2.$date.$i_img);
		}
		header('Location: gallery.php?page=list&did=2');

	break;

	// Delete data
	case 'delete':

		$id = get_isset($_GET['id']);	

		delete($id);

		header('Location: gallery.php?page=list&did=3');

	break;
}

?>