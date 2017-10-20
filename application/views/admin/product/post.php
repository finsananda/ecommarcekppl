        <link href="<?php echo base_url()?>template/AdminLTE/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url()?>template/AdminLTE/css/AdminLTE.css" rel="stylesheet" type="text/css" /> 
<!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Product</h3>
                                    <p> Product LTEshop </p>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <?php
                                echo form_open('admin/product/post');
                                ?>
                                <form role="form">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Nama Product</label>
                                            <input type="text" class="form-control" placeholder="Nama Product" name="nama_product">
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input type="text" class="form-control" placeholder="Harga" name="harga">
                                        </div>
                                         <div class="form-group">
                                            <label>Kategori</label>
                                            <select name="kategori" class="form-control">
                                             
                                                <?php
                                                foreach ($product as $k){
                                                    echo "<option value='$k->product_id'>$k->nama_product</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                        <?php
                                        echo anchor('admin/product','Kembali',array('class'=>'btn btn-primary'));
                                        ?>
                                    </div>
                                </form>
                            </div><!-- /.box -->