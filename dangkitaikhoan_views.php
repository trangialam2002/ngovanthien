<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>frontend/dangkitaikhoan.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/font-awesome/css/font-awesome.min.css">
	<script src="<?php echo base_url();?>/jquery/jquery-3.6.0.js"></script>
</head>

<body>
	<?php 
	if(isset($_SESSION['dangkikhongthanhcong'])){
			//sau khi kiểm tra thì cần xóa session
			$this->session->unset_userdata('dangkikhongthanhcong');
			echo "<script>alert('thông tin không được để trống!')</script>";
			redirect('loginCustomer/formdangkitaikhoan','refresh');
			
		}
		if(isset($_SESSION['dangkithanhcong'])){
			//sau khi kiểm tra thì cần xóa session
			$this->session->unset_userdata('dangkithanhcong');
			echo "<script>alert('đăng kí thành công!')</script>";
			redirect('loginCustomer','refresh');
		}
	 ?>

<!-- code form đăng kí cho khách hàng -->

<div class="giaodien">
	<div class="khoi">
		<h3>ĐĂNG KÝ</h3>
		<form action="<?php echo base_url().'index.php/loginCustomer/dangkitaikhoan' ?>"method="post">
			<label>Nhập tên khách hàng</label>
			<input type="text"name="ten"><br>
			<label>Nhập email</label>
			<input type="email"name="email"><br>
			<label>Chọn quốc gia</label>
			<select name="quocgia">
				<option value="1">Việt Nam</option>
				<option value="2">Đà lạt</option>
				<option value="3">Nghệ an</option>
			</select><br><br>
			<label>Nhập địa chỉ</label>
			<input type="text" name="diachi"><br>
			<label>Nhập số điện thoại</label>
			<input type="text" name="sodienthoai"><br>
			<label>Nhập mật khẩu</label>
			<input type="password" name="matkhau"><br>
			<input type="submit"name="submit" value="Đăng kí">
		</form>
	</div>
</div>


	<script type="text/javascript">
		
	</script>
	
</body>
</html>