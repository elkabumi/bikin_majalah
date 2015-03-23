  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    
<ul class="nav navbar-nav">
		        <li<?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 1){?> class="active" <?php } ?>><a href="index.php">Home</a></li>
		        <li<?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 2){ ?> class="active" <?php }?>><a href="index.php?page=technology">Tips & Trick</a></li>
		        <li<?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 3){ ?> class="active" <?php }?>><a href="index.php?page=about">News</a></li>
		        <li<?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 4){ ?> class="active" <?php }?>><a href="index.php?page=contact">Members</a></li>
				<li<?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 3){ ?> class="active" <?php }?>><a href="index.php?page=about">About</a></li>
		        <li<?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 4){ ?> class="active" <?php }?>><a href="index.php?page=contact">Contact</a></li>

</ul>
 </div><!-- /.navbar-collapse -->
