        <link href="<?php echo base_url()?>template/AdminLTE/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url()?>template/AdminLTE/css/AdminLTE.css" rel="stylesheet" type="text/css" />
<div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Data Product</h3>
                                </div><!-- /.box-header -->
                                
                                <?php
                                echo anchor('admin/product/post','Input Product',array('class'=>'btn btn-primary btn-sm'))
                                ?>

                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Produk</th>
                                                <th>Harga</th>
                                                <th>Kategori</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php
                                        	$no = 1;
                                        	foreach ($record as $r){
                                        		echo"<tr>
                                        			<td width='10'>$no</td>
                                        			<td>$r->nama_product</td>
                                                    <td>$r->harga</td>
                                                    <td>$r->nama_kategori</td>
                                        	
                                        			<td width='10'>".anchor("admin/product/edit/".$r->product_id,"<span class='glyphicon glyphicon-tags' aria-hidden='true'></span>",array('title'=>'edit data'))."</td>
                                                     <td width='10'>".anchor("admin/product/delete/".$r->product_id,"<span class='glyphicon glyphicon-trash' aria-hidden='true'></span>",array('title'=>'delete data'))."</td>
                                        			</tr>";
                                        			$no++;
                                        		}
                                        		?>

                                        
                                        </tbody>


                                            
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            
        <script src="<?php echo base_url()?>template/AdminLTE/js/jquery.min.js"></script>
        <script src="<?php echo base_url()?>template/AdminLTE/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>template/AdminLTE/js/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="<?php echo base_url()?>template/AdminLTE/js/raphael-min.js"></script>       
        <!-- DATA TABES SCRIPT -->
        <script src="<?php echo base_url()?>template/AdminLTE/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>template/AdminLTE/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url()?>template/AdminLTE/js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url()?>template/AdminLTE/js/AdminLTE/demo.js" type="text/javascript"></script>
        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>