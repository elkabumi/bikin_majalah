
     <div class="content-top">
			<div class="wrap">
				<div class="section group">
				<?php
					$query_client=mysql_query("SELECT * FROM project");
					while($row_client=mysql_fetch_object($query_client)){
					$row_client->project_desc=strip_tags(substr($row_client->project_desc,0,200));
					$row_client->project_desc = substr($row_client->project_desc,0,strrpos($row_client->project_desc," "));
					

				?>
                <div class="col_1_of_4 span_1_of_4">
					    <a class="fancybox" href="img/project/<?=$row_client->project_photo?>" data-fancybox-group="gallery" title="<?=$row_client->project_name?>">
                        <img src="img/project/<?=$row_client->project_photo?>" alt="">
                        <span> </span></a>
					    <div class="caption">
                            <h4><?=$row_client->project_name?></h4>
                            <p>
                            <?=$row_client->project_desc?>
                           </p>
                            <a href="#" class="btn">read more</a>
                        </div>
				</div>
			<?php } ?>
				<div class="clear"></div> 
			</div>
			
				
			</div>
		</div>
	