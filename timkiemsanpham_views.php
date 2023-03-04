<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>frontend/timkiemsanpham.css">
	<script src="<?php echo base_url();?>jquery/jquery-3.6.0.js"></script>
</head>

<body>
	
	<div class="container">
		<div class="a1">
			<form action="<?php echo base_url() ?>index.php/sanpham/timkiemsanpham"method="post">
				<input type="text" name="timkiemsanphamtheoten"placeholder="Tìm kiếm sản phẩm...">
				<input type="submit" name="submit"value="Tìm">
			</form>
		</div>
		<span class="fa fa-close"></span>
	</div>
</body>
<script type="text/javascript">
	$('.fa-close').click(function(){
		$('.container').removeClass('a2');
		$(".contact ul li:first-child").show();
	})
</script>
</html>