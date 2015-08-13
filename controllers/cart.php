<?php
function cart_add()
{
	$data = array();
	$datacartdetails= array();
	
	if(isset($_SESSION['logged']['id'])&&isset($_SESSION['cart']))
	{
		$data['user_id']=$_SESSION['logged']['id'];
		$now= date("Y-m-d");
		$data['cart_day']=$now;
		$cart_id=model('cart')->add($data);
		if($cart_id)
		{
			$items= $_SESSION['cart'];
			foreach ($items as $key => $value) 
			{
				$datacartdetails['cart_id']=$cart_id;
				$datacartdetails['product_id']=$key;
				$datacartdetails['cart_num']=$value;
				$a=model('cartdetail')->add($datacartdetails);		
			}
			unset($_SESSION['cart']);
			?>
			<script>
				alert("Đặt hàng thành công");
			</script>
			<?php
		}
	}
	else {
		if(!isset($_SESSION['logged']))
		{ 
			?>
			<script>
				alert("Bạn phải đăng nhập để đặt hàng!");
			</script>
			<?php 
		}
		else
		{	
			?>
			<script>
				alert("Giỏ hàng đang trống!");
			</script>
			<?php
		}
	}
	
}
function cart_list()
{
	$data = array();
	if(!isLogged())
	{
		redirect('/blogtaolao_MVC_/index.php?c=auth&m=login');
	}
	$aut=$_SESSION['logged']['aut'];
	if($aut !="admin")
	{
		redirect('/blogtaolao_MVC_/index.php?c=auth&m=login');
	}
	$data['carts'] = model('cart')->getall();
	$data['template_file'] = 'cart/cartlist.php';
	render('layout.php', $data);
}
?>