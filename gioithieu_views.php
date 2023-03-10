<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>frontend/gioithieu.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>font-awesome/css/font-awesome.min.css">
	<script src="<?php echo base_url();?>/jquery/jquery-3.6.0.js"></script>
</head>
<style type="text/css">
	.back {
    width: 100%;
    height: calc(100% - 330px);
    background-image: url(../../image/gioithieu.png);
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}
.back1 {
    width: 100%;
    height: 70%;
    background: #d9c5c5c2;
    position: absolute;
    left: 0;
    bottom: 0;
    z-index: 1;
}
.k1 {
    width: 330px;
    height: 235px;
    font-size: 20px;
    font-family: segoe ui light;
    font-weight: bold;
    background: #ececec;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-radius: 30px;
    position: absolute;
    top: 20px;
    left: 70px;
    padding: 0px 10px;
}
.back1 .k1 b {
    color: #25691A;
}
.k1>p {
    font-size: 15px;
}
.k2 {
    width: 200px;
    height: 200px;
    background-image: url(../../image/back3.png);
    position: absolute;
    z-index: 2;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    background-size: cover;
}
.k3 {
    width: 130px;
    height: 130px;
    background-image: url(../../image/logo1.png);
    background-size: cover;
    position: absolute;
    right: 245px;
    top: -40px;
}
.k4 {
    width: 160px;
    height: 170px;
    background-image: url(../../image/bangkhen.png);
    position: absolute;
    right: 110px;
    bottom: 10px;
    background-size: contain;
    background-repeat: no-repeat;
}
.k5 {
    width: 285px;
    height: 2px;
    background: #25A910;
    position: absolute;
    left: 57%;
    top: 26%;
    transform: rotate(343deg);
}
</style>
<body>
	
	<?php include "timkiemsanpham_views.php" ?>
	<!-- code header -->
	<div class="header">
	<div class="logo"></div>
		<div class="menu">

		<ul>
			<li><a href="<?php echo base_url().'index.php/sanpham';?>">TRANG CH???</a></li>
			<li><a class='color1'>GI???I THI???U</a></li>
			<li><a>C???A H??NG<span class="fa fa-chevron-down rotate"></span></a>	
				<ul>
					<?php foreach ($danhmuc as $value){
						?>
					<li><a href="<?php echo base_url().'index.php/sanpham/sanphamtheoiddanhmuc/'.$value['id'] ?>">
						<?php echo $value['categoryName']; ?>
					</a></li>
					<?php } ?>
				</ul>
			</li>
			<li><a href="<?php echo base_url().'index.php/sanpham/tatcasanpham';?>">S???N PH???M</a></li>
			<li><a href="<?php echo base_url().'index.php/sanpham/blog';?>">KI???N TH???C</a></li>
		</ul>
		</div>
		<div class="contact">
			<ul>
				<li><a><span class="fa fa-search"></span></a></li>
				<li><a href="<?php echo base_url().'index.php/loginCustomer/hoso' ?>"><span class="fa fa-user"></span></a></li>
				<li><a href="<?php echo base_url().'index.php/sanpham/laydulieugiohang' ?>"><span class="fa fa-cart-plus"></span></a></li>
				<?php if((isset($_SESSION['taikhoankhachhang']))&&(isset($_SESSION['matkhaukhachhang']))){ ?>
				<li><a href="<?php echo base_url().'index.php/loginCustomer/logout' ?>">
					<span class="fa fa-sign-out"></span>
				</a></li>
					<?php }
					else{ ?>
					<li><a href="<?php echo base_url().'index.php/loginCustomer' ?>">
					<span class="fa fa-sign-in"></span>
					</a></li>
					<?php } ?>
			</ul>
		</div>
	</div>

<!-- code n???i dung -->
<div class="back">
	<div class="back1">
		<div class="k1">
				<b>????I N??T V??? C??NG TY</b>
				<p>Tr???i qua h??n 10 n??m h??nh th??nh v?? ph??t tri???n C??ng ty TNHH Th???c Ph???m S???ch Th????ng M???i T&P (Fresh Foods) ???? c?? nh???ng b?????c ph??t tri???n kh??ng ng???ng trong vi???c cung c???p c??c s???n ph???m th???c ph???m s???ch nh???p kh???u ?????n t???n tay ng?????i ti??u d??ng v???i c??c nh??m s???n ph???m ch??nh:- Th???t b?? ??c, M???- Th???t c???u ??c- C?? h???i Nauy- Gia v??? H??n Qu???c, Nh???t B???n - Tr??i c??y nh???p kh???u</p>
		</div>
		<div class="k2">
			
		</div>
		<div class="k3">
			
		</div>
		<div class="k4">
			
		</div>
		<div class="k5"></div>
	</div>
</div>

<!-- code footer -->
	<div class="footer">
		<div class="box1">
			<img src="http://mauweb.monamedia.net/happytrade/wp-content/uploads/2019/05/mona.png" alt="">
			<span>319 C16 L?? Th?????ng Ki???t, Ph?????ng 15, Qu???n 11, Tp.HCM</span>
			<span>demonhunterg@gmail.com</span>
		</div>
		<div class="box2">
			<h3>MENU</h3>
			<ul>
				<li><a href="">Trang ch???</a></li>
				<li><a href="">Gi???i thi???u</a></li>
				<li><a href="">C???a h??ng</a></li>
				<li><a href="">Ki???n th???c</a></li>
			</ul>

		</div>
		<div class="box3">
			<h3>S???N PH???M</h3>
			<ul>
				<li><a href="">Rau c???</a></li>
				<li><a href="">Tr??i c??y</a></li>
				<li><a href="">????? u???ng</a></li>
				<li><a href="">????? kh??</a></li>
			</ul>

		</div>
	</div>
	<div class="menu_footer">
		<div class="copyright-footer">
        ?? B???n quy???n thu???c v???. Thi???t k??? website <img src="https://mona-media.com/logo.png" style="width:20px;vertical-align:sub;"></div>
	</div>
	<script src="<?php echo base_url();?>frontend/1.js"></script>
	
</body>
</html>