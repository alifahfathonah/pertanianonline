<!-- Main content -->
	<div class="main-content">
	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading clearfix">
						<h4 class="panel-title">TAMBAH EDIT BARANG</h4>
						<ul class="panel-tool-options"> 
							<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
						</ul>
					</div>
					<div class="panel-body">
						 <form class="form-horizontal" action="admin/proses_edit_barang" method="POST">
							<!--<div class="form-group"> 
								<label class="col-sm-2 control-label">Nama Petani</label> 
								<div class="col-sm-10"> 
								<select class="form-control" name="id_petani">
									<?php 
										$q=$this->db->query("SELECT * FROM tbl_petani");
										foreach ($q->result() as $key => $v) {
											?>
												<option value="<?php echo $v->id_petani ?>"><?php echo $v->nama_petani ?></option>
											<?php
										}
									 ?>
								</select>
								</div> 
							</div> -->
<?php foreach ($data->result() as $key => $row) {
					}
					?>
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Nama barang</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="nama_barang" value="<?php echo $row->nama_barang ?>"> 
									<input type="hidden"  class="form-control" name="id_barang" value="<?php echo $row->id_barang ?>"> 
								</div> 
							</div>

							<div class="form-group"> 
								<label class="col-sm-2 control-label">Harga</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="harga" value="<?php echo $row->harga ?>"> 
								</div> 
							</div>

							<div class="form-group"> 
								<label class="col-sm-2 control-label">Jenis</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="jenis" value="<?php echo $row->jenis ?>"> 
								</div> 
							</div>
							<div class="form-group"> 
								<label class="col-sm-2 control-label"></label> 
								<div class="col-sm-10"> 
								<textarea class="form-control" name="keterangan"><?php echo $row->keterangan ?></textarea>
								</div> 
							</div>

							<div class="form-group"> 
								<label class="col-sm-2 control-label"></label> 
								<div class="col-sm-10"> 
							<button type="submit" class="btn btn-success">SAVE</button>
							<button type="reset" class="btn btn-danger">RESET</button>
									
								</div> 
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		