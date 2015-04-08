<!-- Content Header (Page header) -->
        
                 <?php
                if(isset($_GET['err']) && $_GET['err'] == 1){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-warning alert-dismissable">
                <i class="fa fa-warning"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Simpan gagal !</b>
               Isi data dengan lengkap dan benar
                </div>
           
                </section>
                <?php
                }
                ?>
  				
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                      
                        <!-- right column -->
                        <div class="col-md-12">
                            <!-- general form elements disabled -->

                          
                          <div class="title_page"> <?= $title ?></div>

                             <form class="cmxform" id="createForm" action="<?= $action?>" method="post" enctype="multipart/form-data" role="form">

                            <div class="box box-cokelat">
                                
                               
                                <div class="box-body">
                                    
                                     
                                        
                                        <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nama Project</label>
                                            <input required type="text" name="i_name" class="form-control" placeholder="Masukkan nama ..." value="<?= $row->project_name ?>"  title="Nama Tidak boleh kosong"/>
                                        </div>
										</div>
                                      
 								
 										<div class="col-md-12">
                                        <div class="form-group">
                                         <label>Keterangan</label>
                                        <textarea id="editor1" name="i_desc" rows="10" cols="80">
                                           <?=$row->project_desc?>
                                        </textarea> </div>
										
                                        <?php if($id != ''){?>
                                        <img src="../../img/project/<?=$row->project_photo?>"  width="150" height="150"/>
                                        <? } ?>
                                        <div class="form-group">
                                         <label>Images</label>
                                           <input type="file" name="i_img" id="i_img" />
                                        </div>
                                        </div>
                                        <div style="clear:both;"></div>
                                     
                                </div><!-- /.box-body -->
                                
                                  <div class="box-footer">
                                <input class="btn btn-success" type="submit" value="Save"/>
                                <a href="<?= $close_button?>" class="btn btn-success" >Close</a>
                             
                             </div>
                            
                            </div><!-- /.box -->
                       </form>
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
                	<script src="../js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="../js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        
		<script type="text/javascript">
            $(function() {
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('editor1');
                //bootstrap WYSIHTML5 - text editor
                $(".textarea").wysihtml5();
            });
        </script>
     