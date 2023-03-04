<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>frontend/sanpham.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/font-awesome/css/font-awesome.min.css">
	<script src="<?php echo base_url();?>/jquery/jquery-3.6.0.js"></script>
</head>

<?php 
	$uri=$_SERVER['REQUEST_URI'];
	$arr=explode('/',$uri);
	$tranghientai=end($arr);

 ?>
<body>
	<?php include "timkiemsanpham_views.php" ?>
	<!-- code header -->
	<div class="header">
		<div class="logo"></div>
		<div class="menu">

		<ul>
			
			<li><a href="<?php echo base_url().'index.php/sanpham'; ?>">TRANG CHỦ</a></li>
			<li><a href="<?php echo base_url(); ?>index.php/sanpham/gioithieu">GIỚI THIỆU</a></li>
			<li><a class='color1'>CỬA HÀNG<span class="fa fa-chevron-down rotate"></span></a>
					
				<ul>
					<?php foreach ($dulieu[0]['danhmuc'] as $value){ ?>
						
					<li><a href="<?php echo base_url().'index.php/sanpham/sanphamtheoiddanhmuc/'.$value['id'] ?>">
						<?php echo $value['categoryName']; ?>
					</a></li>	
					<?php } ?>
				</ul>
			</li>
			<li><a href="<?php echo base_url().'index.php/sanpham/tatcasanpham';?>">SẢN PHẨM</a></li>
			<li><a href="<?php echo base_url().'index.php/sanpham/blog';?>">KIẾN THỨC</a></li>
		</ul>
		</div>
		<div class="contact">
			<ul>
				<li><a ><span class="fa fa-search"></span></a></li>
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
<!-- code nội dung sản phẩm theo danh mục -->
<div class="noidung">
	<?php foreach ($dulieu[1]['sanphamtheoiddanhmuc'] as $value){ ?>
		
    <div class="item">
    	<a href="<?php echo base_url().'index.php/sanpham/chitietsanpham/'.$value['idproduct'] ?>">
    	<img src="<?php echo base_url().'image/'.$value['img']; ?>" alt=""></a>
    	<a href="<?php echo base_url().'index.php/sanpham/chitietsanpham/'.$value['idproduct'] ?>">
    	<p><?php echo $value['nameProduct']; ?></p></a>
    	<span><?php echo $value['price']; ?></span>
    </div>
	<?php } ?>
</div>
	
<!-- code phân trang -->
<div class="phantrang">
	<ul>
		<?php if($tranghientai>$dulieu[2]['sotrang']){
			$tranghientai=1;
		 } ?> 
		 <?php if($tranghientai>1){ ?>
		<li><a href="<?php echo base_url().'index.php/sanpham/page/'?><?php echo $tranghientai-1; ?> "><span class="fa fa-long-arrow-left"></span></a></li>
		<?php } ?>
		<?php for($i=1;$i<=$dulieu[2]['sotrang'];$i++){ 
		
		 if($i==$tranghientai){
		?>
		<li style="background-color: orange;"><a ><?php echo $i; ?></a></li>
		<?php }
			else{
			?>
		<li>
		<a href="<?php echo base_url().'index.php/sanpham/page/'.$i; ?>">
			<?php echo $i; ?>
		</a>
		</li>
		<?php }} ?>

		<?php if($tranghientai < $dulieu[2]['sotrang']){ ?>
		<li><a href="<?php echo base_url().'index.php/sanpham/page/'?><?php echo $tranghientai+1 ?> "><span class="fa fa-long-arrow-right"></a></li>
			<?php } ?>
	</ul>
</div>
<!-- code footer -->
	<div class="footer">
		<div class="box1">
			<img src="http://mauweb.monamedia.net/happytrade/wp-content/uploads/2019/05/mona.png" alt="">
			<span>319 C16 Lý Thường Kiệt, Phường 15, Quận 11, Tp.HCM</span>
			<span>demonhunterg@gmail.com</span>
		</div>
		<div class="box2">
			<h3>MENU</h3>
			<ul>
				<li><a href="">Trang chủ</a></li>
				<li><a href="">Giới thiệu</a></li>
				<li><a href="">Cửa hàng</a></li>
				<li><a href="">Kiến thức</a></li>
			</ul>

		</div>
		<div class="box3">
			<h3>SẢN PHẨM</h3>
			<ul>
				<li><a href="">Rau củ</a></li>
				<li><a href="">Trái cây</a></li>
				<li><a href="">Đồ uống</a></li>
				<li><a href="">Đồ khô</a></li>
			</ul>

		</div>
	</div>
	<div class="menu_footer">
		<div class="copyright-footer">
        © Bản quyền thuộc về. Thiết kế website <img src="https://mona-media.com/logo.png" style="width:20px;vertical-align:sub;"></div>
	</div>
	<script src="<?php echo base_url().'frontend/' ?>sanpham.js"></script>
	
</body>
</html>