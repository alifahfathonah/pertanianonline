
<!DOCTYPE HTML> 
<html> 
<head> 
<title>Pertanian</title> 

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> 
<base href="<?php echo base_url() ?>" />
<link href="assets/web/css/bootstrap.css" rel='stylesheet' type='text/css' /> 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<!-- Custom Theme files --> 
<link href="assets/web/css/style.css" rel='stylesheet' type='text/css' /> 
<link rel="stylesheet" href="assets/web/css/jquery.countdown.css" /> 
<!-- Custom Theme files --> 
<!--webfont--> 
<link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'> 
<script type="text/javascript" src="assets/web/js/jquery-1.11.1.min.js"></script> 
<!-- dropdown --> 
<script src="assets/web/js/jquery.easydropdown.js"></script> 
<!-- start menu --> 
<link href="assets/web/css/megamenu.css" rel="stylesheet" type="text/css" media="all" /> 
<script type="text/javascript" src="assets/web/js/megamenu.js"></script> 
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script> 
<script src="js/responsiveslides.min.js"></script> 
<script> 
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: false,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
</script> 
<script src="assets/web/js/jquery.countdown.js"></script> 
<script src="assets/web/js/script.js"></script> 
</head> 
<body> 
<div class="header_top"> 
  <div class="container"> 
  	<div class="header_top-box"> 
     <div class="header-top-left"> 
			  
   			 </div> 
			 <div class="cssmenu"> 
				<ul> 

					
					 

					<li><a href="index.php/web/login"><li i class="fa fa-instagram"></i></a></li> 
					
				</ul> 
			</div> 
			<div class="clearfix"></div> 
   </div> 
</div> 
</div> 
<div class="header_bottom"> 
	<div class="container"> 
	 <div class="header_bottom-box"> 
		<div class="header_bottom_left"> 
			<div class="logo"> 
				<h2>CV. PUSAKA TANI</h2>
			</div> 
			<ul class="clock"> 
				<i class="clock_icon"> </i> 
				<li class="clock_desc">Justo 24/h</li> 
			</ul> 
			<div class="clearfix"> </div> 
		</div> 
		<div class="header_bottom_right"> 
			<form method="post" action="index.php/web/cari">
			<div class="search"> 
			  <input type="text" name="keyword" value="  . . . . " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Cari Barang';}"> 
			  <input type="submit" value=""> 
	  		</div> 
	  		<ul class="bag"> 
	  		<a href="index.php/web/lelang"><i class="bag_left"> </i></a>
	  			<div class="clearfix"> </div> 
	  		</ul> 
	  		</form>
		</div> 
		<div class="clearfix"> </div> 
	</div> 
</div> 
</div> 
<div class="menu"> 
	<div class="container"> 
		<div class="menu_box"> 
	     <ul class="megamenu skyblue"> 
			<li class="active grid"><a class="color2" href="index.php">Home</a></li> 
			<li><a class="color8" href="index.php/web/hasil_tani">Hasil Pertanian</a></li> 
			<li><a class="color8" href="index.php/web/petunjuk">Petunjuk</a></li> 
			<li><a class="color8" href="index.php/web/ketentuan">About Us</a></li> 
			
			<li><a class="color8" href="index.php/web/kontak">Kontak</a></li> 
			<li><a class="color8" href="index.php/web/login">Login</a></li> 
							<div class="clearfix"> </div> 
		 </ul> 
	  </div> 
</div> 
</div> 
<?php echo $this->load->view($content) ?>

<div class="footer"> 
	<div class="container"> 
		<img src="assets/images/pay.png" class="img-responsive" alt=""/> 
		<ul class="footer_nav"> 
		 <li class="active grid"><a class="color2" href="index.php">Home</a></li> 
			<li><a class="color8" href="index.php/web/hasil_tani">Hasil Pertanian</a></li> 
			<li><a class="color8" href="index.php/web/petunjuk">Petunjuk</a></li> 
			<li><a class="color8" href="index.php/web/ketentuan">Syarat dan Ketentuan</a></li> 
			
			<li><a class="color8" href="index.php/web/kontak">Kontak</a></li> 
			<li><a class="color8" href="index.php/web/login">Login</a></li> 
		</ul> 
		<p class="copy">SyafriBAP&copy; 2019 </p> 
	</div> 
</div> 
</body> 
</html>		