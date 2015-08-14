  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
function abort($msg)
{
 ?>
 <script>
     alert("<?php echo $msg; ?>") 
     window.history.back();
 </script>
 <?php   
}
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
function cart_Ulist()
{
	$data = array();
	if(!isset($_SESSION['logged']['id']))
	{
		redirect('/blogtaolao_MVC_/index.php?c=auth&m=login');
	}
	$key = $_SESSION['logged']['id'];

	$data['carts'] = model('cart')->getallbyU($key);
	$data['template_file'] = 'cart\Ucartlist.php';
	render('layout.php', $data);
}

function cart_list()
{
	$data = array();
	if(!isLogged())
      {
        redirect('/blogtaolao_MVC_/index.php?c=auth&m=login');
      }
	else
	{
		$data['carts'] = model('cart')->getall();
		$data['template_file'] = 'cart/cartlist.php';
		render('layout.php', $data);
	}
}

function cart_delete()
{
	$data = array();
// kiểm tra login
		checkaut();
// bắt dữ id bài viết cần chỉnh sửa

	$currentcart = empty($_GET['id']) ? null : strtolower($_GET['id']);
	$del=(model('cartdetail')->delete($currentcart));
	if(!model('cart')->check_true($currentcart,'cart_id'))
	{
		$msg="Giỏ hàng không tồn tại!!!";
		abort($msg); 
		die();
	}
	if (model('cart')->delete($currentcart)>=1)
	{
		$msg="Xóa giỏ hàng thành công!!!";
		abort($msg); 
		die();
	}
	else
	{
		$msg="Không thể xóa giỏ hàng!!!";
		abort($msg);
		die();
	}
	cart_list();
}
function cart_delivery()
{
	$data = array();
// kiểm tra login
	checkaut();
// bắt dữ id bài viết cần chỉnh sửa

	$currentcart = empty($_GET['id']) ? null : strtolower($_GET['id']);
	$del=(model('cartdetail')->delete($currentcart));
	if(!model('cart')->check_true($currentcart,'cart_id'))
	{
		$msg="Giỏ hàng không tồn tại!!!";
		abort($msg); 
	
	}
	$data['cart_delivery']= $currentcart;
	if (model('cart')->delivery($data,$currentcart)>=1)
	{
		$msg="Thanh toán thành công giỏ hàng!!!";
		abort($msg); 	
	}
	else
	{
		$msg="Không thể thanh toán giỏ hàng!!!";
		abort($msg); 	
	}
}
?>