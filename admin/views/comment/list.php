
                <?php
                if(isset($_GET['did']) && $_GET['did'] == 1){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Sukses !</b>
               Simpan Berhasil
                </div>
           
                </section>
                <?php
                }else if(isset($_GET['did']) && $_GET['did'] == 2){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Sukses !</b>
               Edit Berhasil
                </div>
           
                </section>
                <?php
                }else if(isset($_GET['did']) && $_GET['did'] == 3){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Sukses !</b>
               Delete Berhasil
                </div>
           
                </section>
                <?php
                }else if(isset($_GET['did']) && $_GET['did'] == 4){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Sukses !</b>
               Delete Berhasil
                </div>
           
                </section>
                 <?php
                }else if(isset($_GET['did']) && $_GET['did'] == 4){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Sukses !</b>
               Comment Berhasil Ditampilkan
                </div>
           
                </section>
                <?php
                }else if(isset($_GET['did']) && $_GET['did'] == 5){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Sukses !</b>
               Comment Berhasil Tidak Ditampilkan
                </div>
           
                </section>
                <?php
                }
                ?>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            
                             <div class="title_page"> <?= $title ?></div>
                            
                            <div class="box">
                             
                                <div class="box-body2 table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                            <th width="5%">No</th>
                                                <th>Nama</th>
                                          		<th>View</th>
                                                <th>subject</th>
                                                <th>Status</th>
                                                 <th>Config</th>
                                                  
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                           $no = 1;
                                            while($row = mysql_fetch_array($query)){
                                            	switch($row['comment_type']){
													case '1':
														$type = 'Ditampilkan';
														$style ="";
													$link  = "
														
														<a href='javascript:void(0)' 
															onclick=".'"'."confirm_hide(".$row['comment_id'].",'comment.php?page=inactive&id=')".'"'."
                                                         class='btn btn-default' ><b>&Chi;</b></a>";
											        
													break;
													case '0':
														$type = 'Tidak DItampilkan';
														$style ="style='color:#F00'";
															$link  = "<a href='javascript:void(0)'
														 onclick=".'"'."confirm_tampil(".$row['comment_id'].",'comment.php?page=active&id=')".'"'."
														  class='btn btn-default' ><i class='fa fa-check'></i></a>";
                                                   		
													break;
												}
											?>
                                            <tr>
                                            <td <?=$style ?>><?= $no?></td>
                                               
                                              <td <?=$style ?>><?= $row['comment_name']?></td>
                                              <td <?=$style ?>><?= $row['commnet_email']?></td>
                                              <td <?=$style ?>> <?= $row['comment_subject']?></td>
                                              <td <?=$style ?>><b><?= $type?></b></td>
                                              <td style="text-align:center;" <?=$style ?>>
 
                
                                                    <?=	$link?>
                                           <a href="javascript:void(0)" onclick="confirm_delete(<?= $row['comment_id']; ?>,'comment.php?page=delete&id=')" class="btn btn-default" ><i class="fa fa-trash-o"></i></a>

                                                </td>
                                            </tr>
                                            <?php
											$no++;
                                            }
                                            ?>

                                           
                                          
                                        </tbody>
                                          <tfoot>
                                            <tr>
                                                <td colspan="10"><a href="<?= $add_button ?>" class="btn btn-success " >Add</a></td>
                                               
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->