

<div class="men"> 
	<div class="container"> 
	    <div class="register"> 
			   <div class="col-md-6 login-left"> 
			  	 <h3>DETAIL GAMBAR BARANG </h3> 
				 	
				 	<?php foreach ($data->result() as $row) {
				 		
                                         $image = array(
                                              'src' => 'assets/foto_barang/'.($row->gambar),
                                              'class' => 'photo',
                                              'width' => '450',
                                              'height' => '350',
                                              'rel' => 'lightbox',
                                            ); echo img($image); ?>
			   </div> 
			   <div class="col-md-6 login-right"> 
			  	<h3>Rincian Barang yang di jual</h3> 
					<b>
					<p>Nama Barang 	: <?php echo $row->nama_barang ?></p>
					<p>Harga 		: Rp . <?php echo number_format($row->harga,2) ?> </p>
					<p>Jenis 		:  <?php echo $row->jenis ?> </p>
					<p>Keterangan 	:  <?php echo $row->keterangan ?> </p>

					<a  class="btn btn-success"><i class="icon-shopping-cart icon-large"></i>&nbsp;PESAN</a>

			   </div>	
			   <div class="clearfix"> </div> 
		</div> 
	 				 		<?php
				 	} ?>

				 	<hr/>


			  	
				 	

	<hr/>
			   </div> 
			   </div> 
</div> 


