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
                                            <label>Nama Slider</label>
                                            <input required type="text" name="i_name" class="form-control" placeholder="Masukkan nama ..." value="<?= $row->slider_name ?>"  title="Nama Tidak boleh kosong"/>
                                        </div>
 
                                         <div class="form-group">
                                            <label>Keterangan</label>
                                             <textarea class="form-control" name="i_description" rows="3" placeholder="Masukkan keterangan ..."><?= $row->slider_desc ?></textarea>
                                    <textarea id="editor1" name="editor1" rows="10" cols="80">
                                            This is my textarea to be replaced with CKEditor.
                                        </textarea>
                                        </div>
										
                                        <?php if($id != ''){?>
                                        <img src="../../img/slider/<?=$row->slider_photo?>"  width="150" height="150"/>
                                        <? } else{
										
										}?>
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