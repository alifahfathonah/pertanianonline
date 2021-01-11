<!-- Main content -->
	<!--<div class="main-content">
	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading clearfix">
						<h4 class="panel-title">TAMBAH DATA PETANI</h4>
						<ul class="panel-tool-options"> 
							<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
						</ul>
					</div>
					<div class="panel-body">
						 <form class="form-horizontal" action="admin/proses_edit_petani" method="POST">
						 <?php foreach ($data->result() as $key => $row) {
					}
					?>
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Nama</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="nama_petani" value="<?php echo $row->nama_petani ?>"> 
									<input type="hidden"  class="form-control" name="id_petani" value="<?php echo $row->id_petani ?>"> 
								</div> 
							</div>
							<div class="form-group"> 
								<label class="col-sm-2 control-label">Alamat</label> 
								<div class="col-sm-10"> 
								<textarea class="form-control" name="alamat"><?php echo $row->alamat ?></textarea>
								</div> 
							</div>

							<div class="form-group"> 
								<label class="col-sm-2 control-label">No Hp</label> 
								<div class="col-sm-10"> 
									<input type="text"  class="form-control" name="no_hp" value="<?php echo $row->no_hp ?>"> 
								</div> 
							</div>

							<div class="form-group"> 
								<label class="col-sm-2 control-label"></label> 
								<div class="col-sm-10"> 
							<button type="submit" class="btn btn-success">EDIT</button>
							<button type="reset" class="btn btn-danger">RESET</button>
									
								</div> 
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>-->
		