<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>frontend/thanhtoangiohang.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/font-awesome/css/font-awesome.min.css">
	<script src="<?php echo base_url();?>/jquery/jquery-3.6.0.js"></script>
</head>

<body>

	<?php include "timkiemsanpham_views.php" ?>
	<!-- code header -->
	<div class="header">
		<div class="logo"></div>
		<div class="menu">

		<ul>
			
			<li><a href="<?php echo base_url().'index.php/sanpham'; ?>">TRANG CHỦ</a></li>
			<li><a href="">GIỚI THIỆU</a></li>
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
			<li><a href="">KIẾN THỨC</a></li>
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

	<!-- code nội dung đơn đặt hàng gồm danh sách sản phẩm và dữ liệu khách hàng -->
	<form action="<?php echo base_url().'index.php/sanpham/thanhtoan1' ?>"method="post">
	<div class="listProduct">
		<div class="left">
		<table>
			<thead>
				<tr>
					<td>STT</td>
					<td>SẢN PHẨM</td>
					<td>ĐƠN GIÁ</td>
					<td>SỐ LƯỢNG</td>
					<td>THÀNH TIỀN</td>
					<td>THỜI GIAN</td>
					
				</tr>
			</thead>
			<tbody>
				<?php $sum=0;$i=0; ?>
					<?php foreach ($dulieu[1]['giohang'] as $value){ 
						$sum+=$value['price']*$value['amount'];
						$i++;
					?>

				<tr>
					<td><?php echo $i; ?></td>
					<input type="hidden" name="idsanpham[]"value="<?php echo $value['idproduct'] ?>">
					<td><?php echo $value['nameProduct'] ?></td>
					<td><?php echo $value['price'] ?></td>
					<td><?php echo $value['amount'] ?></td>
					<td><?php echo $value['price']*$value['amount'] ?></td>
					<td>
					<small>
					<?php echo $value['dateadd']; ?>
					</small>
					</td>
					
				</tr>
					<?php } ?>
			</tbody>
			
				
		</table>
			 <h5>Tổng Tiền: <?php echo $sum." VND" ?></h5>
		<div class="update">
			<a href="<?php echo base_url().'index.php/sanpham/laydulieugiohang';?>"><span class="fa fa-arrow-left">Trở lại</span></a>
		</div>
	
	</div>
	

	<div class="dulieu">
		<h3>Thông tin khách hàng</h3>
		<table >
		<?php foreach ($dulieu[2]['hoso'] as $value){ ?>
			
		
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
			<?php } ?>
		</table>
		
			
	</div>
</div>
	<input type="submit"name="submit"value="Thanh toán">
	</form>
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