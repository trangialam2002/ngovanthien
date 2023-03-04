<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>frontend/tatcasanpham.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>font-awesome/css/font-awesome.min.css">
	<script src="<?php echo base_url();?>jquery/jquery-3.6.0.js"></script>
</head>
<style>
	.top {
    display: flex;
    justify-content: space-around;
    margin-bottom: 20px;
}

.top>select {
    font-size: 20px;
    font-family: segoe ui light;
    font-weight: bold;
    border-radius: 5px;
    border: 2px solid;
}

.top>select>option {
    font-weight: bold;
}
    .container {
    width: 100%;
    height: 100%;
    position: fixed;
    background: #e0e1e2a1;
     visibility: hidden; 
    z-index: -1;
}
</style>
<?php 
	$uri=$_SERVER['REQUEST_URI'];
	//echo $uri;
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
			<li><a >CỬA HÀNG<span class="fa fa-chevron-down rotate"></span></a>
					
				<ul>
					<?php foreach ($dulieu[0]['danhmuc'] as $value){ ?>
						
					<li><a href="<?php echo base_url().'index.php/sanpham/sanphamtheoiddanhmuc/'.$value['id'] ?>">
						<?php echo $value['categoryName']; ?>
					</a></li>	
					<?php } ?>

				</ul>
			</li>
			<li><a class='color1'>SẢN PHẨM</a></li>
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
<!-- code hiển thị tất cả sản phẩm trong bảng sản phẩm-->
<div class="noidung">
	<div class="left">
		<div class="phanloaigia">
			<h4>Hiển thị sản phẩm theo giá</h4>
			<form action="http://localhost/khachhang/index.php/sanpham/tatcasanpham"method="post">
			<select name="phanloai">
				<option value='1'
				<?php if($this->session->userdata('giatriphanloai')==1){echo 'selected';} ?>
				>10000-15000 VND</option>
				<option value='2'
				<?php if($this->session->userdata('giatriphanloai')==2){echo 'selected';} ?>
				>20000-30000 VND</option>
				<option value='3'
				<?php if($this->session->userdata('giatriphanloai')==3){echo 'selected';} ?>
				>50000-100000 VND</option>
				<option value='4'
				<?php if($this->session->userdata('giatriphanloai')==4){echo 'selected';} ?>	
				>200000-500000 VND</option>
				<option value='5'
				<?php if($this->session->userdata('giatriphanloai')==5){echo 'selected';} ?>
				>1000000-2000000 VND</option>
			</select>
			<input type="submit" name="submit_gia"value="Phân Loại">
			</form>
		</div>
	</div>
	<div class="right">
		<div class="top">
			<p>Hiển thị <?php echo $this->session->userdata('vitrisanpham')+1; ?>-<?php echo count($dulieu[1]['tatca'])+$this->session->userdata('vitrisanpham'); ?> trong <?php echo $this->session->userdata('tongsanpham'); ?> kết quả</p>
			<select name="sapxep" onchange="window.location.href='<?php echo base_url().'index.php/sanpham/tatcasanpham' ?>?tieuchi='+$(this).val()">
				<option value="1"
				<?php if($this->session->userdata('giatrisapxep')==1){echo 'selected';} ?>
				>Thứ tự mặc định</option>
				<option value="2"
				<?php if($this->session->userdata('giatrisapxep')==2){echo 'selected';} ?>
				>Thứ tự tên giảm dần</option>
				<option <?php if($this->session->userdata('giatrisapxep')==3){echo 'selected';} ?>
				value="3">Thứ tự giá tăng dần</option>
				<option <?php if($this->session->userdata('giatrisapxep')==4){echo 'selected';} ?>
				value="4">Thứ tự giá giảm dần</option>
			</select>
		</div>
		<div class="items">
		<?php foreach ($dulieu[1]['tatca'] as $value){ ?>
			
			<div class="item">
			<a href="<?php echo base_url().'index.php/sanpham/chitietsanpham/'.$value['idproduct'] ?>"><img src="<?php echo base_url().'image/'.$value['img']; ?>" alt=""></a>
			<a href="<?php echo base_url().'index.php/sanpham/chitietsanpham/'.$value['idproduct'] ?>"><p><?php echo $value['nameProduct']; ?></p></a>
			<span><?php echo $value['price']; ?></span>
		    </div>

		<?php } ?>
		
		</div>
	</div>
</div>

<!-- code phân trang -->
<div class="phantrang">
	<ul>
		<?php 
			if(strlen($tranghientai)!=1){
			$tranghientai=1;
		}
		 ?>
		 <?php if($tranghientai>1){ ?>
		<li><a href="<?php echo base_url().'index.php/sanpham/page1/';?><?php echo $tranghientai-1; ?>"><span class="fa fa-long-arrow-left"></span></a></li>
		<?php } ?>
		<?php for($i=1;$i<=$dulieu[2]['sotrang'];$i++){
		if($i==$tranghientai){ ?>
			<li style="background-color: orange;"><a><?php echo $i; ?></a></li>	
		<?php } else{ ?>

		<li><a href="<?php echo base_url().'index.php/sanpham/page1/'.$i; ?>"><?php echo $i; ?></a></li>
		
		<?php }} ?>
		<?php if($tranghientai<$dulieu[2]['sotrang']){ ?>
		<li><a href="<?php echo base_url().'index.php/sanpham/page1/';?><?php echo $tranghientai+1; ?>"><span class="fa fa-long-arrow-right"></span></a></li>
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