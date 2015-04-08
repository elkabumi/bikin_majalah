
<?
include'lib/link_active.php';

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Bikin Majalah</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<!--slider-->
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</head>
<body>
<div class="header">	
	<div class="header-top">
		<div class="wrap">
				<div class="logo">
				<a href="index.php"><img src="images/logo.png" alt=""></a>
				</div>
				</div>
				<div class="search_box">
				<!--<form>
				   <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
			    </form>-->
			</div>
			<div class="clear"></div> 
	    </div>
    </div>
	<div class="header-bottom">
		 <div class="wrap"> 
			 <div id='cssmenu'>
				<ul>
				   	<li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 1){?> class="active" <?php } ?>><a href='index.php?page=home'><span>Home</span></a></li>
				  	<li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 3){?> class="active" <?php } ?>><a href='index.php?page=about'><span>Tentang Kami</span></a></li>
				 	<li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 5){?> class="active" <?php } ?>><a href='index.php?page=why_magazine'><span>Why Magazine ?</span></a></li>
				
				    <li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 2){?> class="active" <?php } ?>><a href='index.php?page=project'><span>Klien Kami</span></a></li>
						 
				  	 <li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 4){?> class="active" <?php } ?>><a href='index.php?page=contact'><span>Kontak</span></a></li>
				    <div class="clear"></div> 
				</ul>
			  </div>
		 </div>
    </div>	
</div>

<?php
      function MyInclude($file) {
        if(file_exists($file)) {
           require_once($file);
        } else {
            throw(new Exception('Halaman tidak ditemukan'));
			
        }
    }
          $page = (isset($_GET['page'])) ? $_GET['page'] : null;

						  if($page){
							  try{
						  	MyInclude('page/'.$page.".php");
										  		}
									catch(Exception $e){
										echo "<div class=\"judul\">".$e->getMessage()."</div>";
										
										}
						  } else {
						  		require_once("page/home.php");	
		}					
	?>
<div class="footer-bottom">
 	<div class="wrap">
 		<div class="copy">
			<p> © 2015 All rights Reserved | Design by <a href="http://bikinmajalah.com">BikinMajalah.com</a></p>
		</div>
 	</div>
 </div>
</body>
</html>