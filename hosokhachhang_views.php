<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>frontend/hosokhachhang.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/font-awesome/css/font-awesome.min.css">
	<script src="<?php echo base_url();?>/jquery/jquery-3.6.0.js"></script>
</head>

<body>
	
	<?php 
	    //kiểm tra đã có session: $this->session->set_userdata('idhosokhachhang',$dulieu[0]['idkhachhang']); 
		//nếu đã đăng nhập thì có session này còn chưa đăng nhập thì cần đăng nhập để truy nhập hồ sơ khách hàng
		if(isset($_SESSION['idhosokhachhang'])){ 

		}
		else{
			echo "<script>alert('bạn cần đăng nhập để mở hồ sơ!')</script>";
			redirect('loginCustomer','refresh');
		}
	 ?>
	<?php include "timkiemsanpham_views.php" ?>
	<!-- code header -->
	<div class="header">
		<div class="logo"></div>
		<div class="menu">

		<ul>
			
			<li><a href="<?php echo base_url().'index.php/sanpham'; ?>">TRANG CHỦ</a></li>
			<li><a href="<?php echo base_url(); ?>index.php/sanpham/gioithieu">GIỚI THIỆU</a></li>
			<li><a>CỬA HÀNG<span class="fa fa-chevron-down rotate"></span></a>
					
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

	<!-- code nội dung hồ sơ -->

	<div class="dulieu">
		<?php foreach ($dulieu[1]['hoso'] as $value){ ?>
		<h3>Thông tin khách hàng</h3>
		<table >
			<tr>
				<td>Id khách hàng</td>
				<td><?php echo $value['idcustomer'] ?></td>
			</tr>
			<tr>
				<td>Tên khách hàng</td>
				<td><?php echo $value['nameCustomer'] ?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><?php echo $value['email'] ?></td>
			</tr>
			<tr>
				<td>Quốc gia</td>
				<td><?php echo $value['nation'] ?></td>
			</tr>
			<tr>
				<td>Địa chỉ</td>
				<td><?php echo $value['address'] ?></td>
			</tr>
			<tr>
				<td>Số điện thoại</td>
				<td><?php echo $value['phoneNumber'] ?></td>
			</tr>
			<tr>
				<td>Mật khẩu</td>
				<td><?php echo $value['password'] ?></td>
			</tr>
		</table>
		<a href="<?php echo base_url().'index.php/loginCustomer/laydulieuhoso/'.$value['idcustomer']; ?>"><button>Cập nhật hồ sơ</button></a>
			<?php } ?>
	</div>


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