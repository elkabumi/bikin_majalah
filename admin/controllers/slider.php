<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/slider_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("Slider");

$_SESSION['menu_active'] = 1;

switch ($page) {
	// Tampilan List awal
	case 'list':
		get_header($title);
		
		$query = select();
		$add_button = "slider.php?page=form";


		include '../views/slider/list.php';
		get_footer();
	break;
	
	// Form input dan edit
	case 'form':
		get_header();

		$close_button = "slider.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){
			
			$title = ucfirst("Form Edit Slider");

			$row = read_id($id);
		
			$action = "slider.php?page=edit&id=$id";
		} else{
			
			$title = ucfirst("Form Input Slider");

			//inisialisasi
			$row = new stdClass();
	
			$row->slider_name = false;
			$row->slider_description = false;
	
			$action = "slider.php?page=save";
		}

		include '../views/slider/form.php';
		get_footer();
	break;

	// simpan data
	case 'save':
	
	

		extract($_POST);
		$i_name = get_isset($i_name);
		$i_description = get_isset($i_description);
		$date =date('Y-m-d');
		
		$path2 = "../../img/slider/";
		$i_img_tmp = $_FILES['i_img']['tmp_name'];
		$i_img = ($_FILES['i_img']['name']) ? $_FILES['i_img']['name'] : "";
	
		$data = "'', 
					'$i_name', 
					'$date$i_img', 
					'$i_description'
			";
			
			//echo $data;

			create($data);
			if($i_img){
				move_uploaded_file($i_img_tmp, $path2.$date.$i_img);
			}

			header('Location: slider.php?page=list&did=1');
		
	break;


	// Edit data
	case 'edit':

		$id = get_isset($_GET['id']);	
		
		extract($_POST);

		$i_name = get_isset($i_name);
		$i_description = get_isset($i_description);
		$path2 = "../../img/slider/";
		$date =date('Y-m-d');
		$i_img_tmp = $_FILES['i_img']['tmp_name'];
		$i_img = ($_FILES['i_img']['name']) ? $_FILES['i_img']['name'] : "";
		if($i_img){
							$data = " slider_name = '$i_name', 
						 		slider_desc  = '$i_description',
						 		slider_photo  = '$date$i_img'";
		}else{
							$data = " slider_name = '$i_name', 
								slider_desc = '$i_description'
						";
		}
			
		update($data, $id);
		if($i_img){
					move_uploaded_file($i_img_tmp, $path2.$date.$i_img);
		}
		header('Location: slider.php?page=list&did=2');

	break;

	// Delete data
	case 'delete':

		$id = get_isset($_GET['id']);	

		delete($id);

		header('Location: slider.php?page=list&did=3');

	break;
}

?>