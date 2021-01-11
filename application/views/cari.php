<style type="text/css">
	
table, tr, th, td {
		border-collapse: collapse; /*untuk membuat garis table tipis*/
		border: 1px solid #98BF21;
		font-weight: bold;
		font-family: georgia;
		width: 1100px;

	}
	th{
		background-color:#A7C942;
		border-bottom:3px solid #98BF21;
	}
	th, td{
		padding: 5px;
	}
	
	tr:nth-child(odd){
		background-color:#EAF2D3;
	}
	tr:nth-child(even){
		background-color:#D0DFA5; 
	}
	tr:hover{
		background-color:#ffffff;
		cursor: pointer; 
	}
	th.a{
		color: white;
		float: left;
		
	}
</style>

<div class="men"> 
	<div class="container"> 
	    <div class="register"> 
			   <div class="col-md-14 login-left"> 
			  	 <h3>SEMUA BARANG YANG DI JUAL</h3> 
				<table class="table table-striped table-bordered table-hover dataTables-example" >
									<thead>
										<tr>
											<th>No</th>
											<th>Gambar</th>
											<th>Nama Petani</th>
											<th>Barang</th>
											<th>Harga</th>
											<th>Jenis</th>
											<th>Pilihan</th>
										</tr>
									</thead>
									<?php $no=1; foreach ($data->result() as $key => $value) {
										?>
									<tbody>
										<tr class="gradeX">
											<td><?php echo $no++ ?></td>
											<td>
												<?php 
													  $image = array(
                                              'src' => 'assets/foto_barang/'.($value->gambar),
                                              'class' => 'photo',
                                              'width' => '90',
                                              'height' => '50',
                                              'rel' => 'lightbox',
                                            ); echo img($image); ?>
												
											</td>
											<td><?php echo $value->nama_petani ?></td>
											<td><?php echo $value->nama_barang ?></td>
											<td><?php echo $value->harga ?></td>
											<td><?php echo $value->jenis ?></td>
											<td>
												<a href="index.php/web/detail_barang/<?php echo $value->id_barang ?>" class="btn btn-success">Pesan</a>
											</td>
										</tr>
										
									</tbody>

									<?php
									} 
									?>

								</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	 
<script type="text/javascript">
function confirm_modal(delete_url)
{
	$('#modal_delete').modal('show', {backdrop: 'static'});
	document.getElementById('delete_link').setAttribute('href' , delete_url);
}
</script>
