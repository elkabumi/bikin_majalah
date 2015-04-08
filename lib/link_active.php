<?php
$page = (isset($_GET['page'])) ? $_GET['page'] : "home";
	switch ($page) {
	 
	
	case 'home':
		$_SESSION['menu_active'] = 1;
	
	break;

	case 'project':
		$_SESSION['menu_active'] = 2;
		
	break;

	case 'about':
		$_SESSION['menu_active'] = 3;
	break;
	
	case 'contact':
		$_SESSION['menu_active'] = 4;
	break;
	case 'why_magazine':
		$_SESSION['menu_active'] = 5;
	break;
}

?>