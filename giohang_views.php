<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>frontend/giohang.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/font-awesome/css/font-awesome.min.css">
	<script src="<?php echo base_url();?>/jquery/jquery-3.6.0.js"></script>
</head>

<body>
	<?php 
	//nếu khách hàng chưa đăng nhập thì không thể truy nhập vào trang giỏ hàng
	if((isset($_SESSION['taikhoankhachhang']))&&(isset($_SESSION['matkhaukhachhang']))){ 
}else{
	echo "<script>alert('bạn cần đăng nhập để vào giỏ hàng!')</script>";
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
			<li><a >CỬA HÀNG<span class="fa fa-chevron-down rotate"></span></a>	
				<ul>
					<?php foreach ($tatca[0]['danhmuc'] as $value){ ?>
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
				<li>
					<a href="<?php echo base_url().'index.php/loginCustomer/logout' ?>">
						<span class="fa fa-sign-out"></span>
					</a>
				</li>
					<?php }
					else{ ?>
					<li>
						<a href="<?php echo base_url().'index.php/loginCustomer' ?>">
					<span class="fa fa-sign-in"></span>
					</a></li>
					<?php } ?>
			</ul>
		</div>
	</div>

<!-- code chi tiết giỏ hàng -->
<div class="noidung">
	<div class="left">
		<form action="<?php echo base_url() ?>index.php/sanpham/update_soluong"method="post">
		<table>
			<thead>
				<tr>
					<td>SẢN PHẨM</td>
					<td>IMG</td>
					<td>ĐƠN GIÁ</td>
					<td>SỐ LƯỢNG</td>
					<td>TỔNG TIỀN</td>
					<td>THỜI GIAN</td>
					<td>TRẠNG THÁI</td>
				</tr>
			</thead>
			<tbody>
				<?php 
				//khai báo 1 biến toàn cục để lưu tổng tiền
				$tongtien=0;
				 ?>
				<?php foreach ($tatca[1]['dulieu'] as $value){ ?>
				<tr>
					<td><?php echo $value['nameProduct'] ?></td>
					<td><img src="<?php echo base_url().'image/'.$value['img'] ?>" alt=""></td>
					<td><?php echo $value['price'] ?></td>
					<input type="hidden" name="idsanpham[]"value="<?php echo $value['idproduct'] ?>">
					<td><input type="number"value="<?php echo $value['amount'] ?>"name="soluongmoi[]"></td>
					<td><?php echo $value['amount']*$value['price'].' VND' ?></td>
					<td>
					<small>
					<?php 
					// d là ngày với 2 chữ số,m là tháng có 2 chữ số,Y là năm có 4 chữ số
					//H là định dạng giờ 24 tiếng có 2 chữ số,i là phút,s là giây
					//echo date('d-m-Y H-i-s',$value['ngaythemvaogiohang'])
					echo $value['dateadd'];
					 ?>
					</small>
					</td>
					<td><a href="<?php echo base_url().'index.php/sanpham/xoasanphamtronggiohang/'.$value['idproduct'] ?>">Xóa</a></td>
				</tr>
				<?php $tongtien+=$value['amount']*$value['price']; ?>
				<?php } ?>
			</tbody>
		</table>
		<div class="update">
			<a href="<?php echo base_url().'index.php/sanpham/tatcasanpham';?>"><span class="fa fa-arrow-left">Trở lại</span></a>
			<input type="submit" name="submit"value="Cập nhật giỏ hàng">
		</div>
	</form>
	</div>
	<div class="right">
		<h3>THỐNG KÊ GIỎ HÀNG</h3>
		<div class="n">
			<span>Tổng tiền cần thanh toán</span>
			<span><?php echo $tongtien.' VND' ?></span>
		</div>
		<div class="feeship">
			<span>Giao hàng</span>
			<div class="n1">
				<span>Giao hàng miễn phí</span>
				<span>Đây chỉ là ước tính.Giá sẽ cập nhật trong quá trình thanh toán.</span>
			</div>
		</div>
		<div class="sum">
			<span>Tổng</span>
			<span><?php echo $tongtien.' VND' ?></span>
		</div>
		<a href="<?php echo base_url().'index.php/sanpham/thanhtoanoffline' ?>">TIẾN HÀNH THANH TOÁN</a>
	</div>
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
	<script type="text/javascript">
	</script>
</body>
</html>