<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>frontend/loginCustomer.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/font-awesome/css/font-awesome.min.css">
	<script src="<?php echo base_url();?>/jquery/jquery-3.6.0.js"></script>
</head>

<body>
	
	<?php 
		if(isset($_SESSION['dangnhapkhongthanhcong'])){
			//sau khi kiểm tra thì cần xóa session
			$this->session->unset_userdata('dangnhapkhongthanhcong');
			echo "<script>alert('chưa điền tài khoản hoặc mật khẩu!')</script>";
			redirect('loginCustomer','refresh');
			
		}
		
	 ?>

<!-- code form đăng nhập cho khách hàng -->

<div class="giaodien">
	<div class="khoi">
		<h3>ĐĂNG NHẬP</h3>
		<form action="<?php echo base_url() ?>index.php/loginCustomer/kiemtradangnhap"method="post">
			<label>Tên tài khoản hoặc địa chỉ email</label><br>
			<input type="text"name="taikhoan"><br>
			<label>Mật khẩu</label><br>
			<input type="password"name="matkhau"><br>
			<input type="submit"name="submit" value="Đăng nhập">
			<a href="<?php echo base_url().'index.php/loginCustomer/formdangkitaikhoan' ?>">Đăng kí tài khoản</a>
		</form>
	</div>
</div>


	<script type="text/javascript">
		
	</script>
	
</body>
</html>