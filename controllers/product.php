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
function product_blogplist()
{
	$data = array();
    //kiểm tra login -> admin
	$data['products'] = model('product')->All();
	$data['template_file'] = 'product/blogplist.php';
	render('layout.php', $data);
}
function product_detail()
{
	$data['products'] = array();
	if(isset($_GET['number']))
	{
		$key =$_GET['number'];
	    $data['products'] = model('product')->getOneBy($key);
		$data['template_file'] = 'product/detail.php';
		render('product/detail.php', $data);
	}
}
function product_cart()
{
	$data['products'] = array();
    $data['products'] = model('product')->all();
	$data['template_file'] = 'product/blogplist.php';
	render('blocks/layout.php', $data);
}
function product_add()
{
	$data = array();
	checkaut();
// kiểm tra login
	if (isPostRequest()) 
	{
		$postData = postData();

		if(is_uploaded_file($_FILES['product_image']['tmp_name']))
		{   
	// lấy id cao nhất của product rồi+1 -> đặt tên cho image k bị trùng
			$id = model('product')->TopID()['product_id']+1;	
			$FileName = $_FILES['product_image']['name'];
			$pos = strrpos($FileName, ".");
			$FileExtension = substr($FileName,$pos);
			$images = "../BlogTaolao_MVC_/images/product_$id" . $FileExtension;      
			if(move_uploaded_file($_FILES['product_image']['tmp_name'],$images))
			{
		// tạo data image cho file hình
				$postData['product_image']=$images;
			}     
			else
			{
				$msg="Không thể up hình!!";
				abort($msg); 
			}

		} 
		if (model('product')->add($postData) )
		{
			redirect('/blogtaolao_MVC_/index.php?c=product&m=list');

		}
		else
		{
			$msg="Thêm sản phẩm thất bại!!!";
			abort($msg); 

		}
	}
//render
	$data['template_file'] = 'product/add.php';
	render('layout.php', $data);

}

function product_list() 
{

	$data = array();
//kiểm tra login -> pq admin
    checkaut();
	$data['products'] = model('product')->All();
	$data['template_file'] = 'product/list.php';
	render('layout.php', $data);
}
function product_edit()
{
	$data = array();
// kiểm tra login
	checkaut();
// bắt dữ id bài viết cần chỉnh sửa
//
	$Currentproduct = empty($_GET['id']) ? null : strtolower($_GET['id']);
	if(!model('product')->check_true($Currentproduct,'product_id'))
	{
		$msg="sản phẩm không tồn tại!!";
		abort($msg); 
	}
	$data['products'] = model('product')->getOneBy($Currentproduct,'product_id');
// lưu bài viết đã chỉnh sửa
	if (isPostRequest()) 
	{
		$recheck=false;
		$postData = postData();   	
		if(is_uploaded_file($_FILES['product_image']['tmp_name']))
		{   
	// lấy id cao nhất của product rồi+1 -> đặt tên cho image k bị trùng
			$id =$Currentproduct;	
	//
			$FileName = $_FILES['product_image']['name'];
			$pos = strrpos($FileName, ".");
			$FileExtension = substr($FileName,$pos);
			$images = "../BlogTaolao_MVC_/images/product_$id" . $FileExtension;      
			if(move_uploaded_file($_FILES['product_image']['tmp_name'],$images))
			{
		// tạo data image cho file hình
				$postData['product_image']=$images;
				$recheck=true;
			}     
			else
			{
				$msg="Không thể up hình!!";
				abort($msg); 
			}
		} 
		if (model('product')->update($postData,$Currentproduct)>=1 )
		{
			redirect('/blogtaolao_MVC_/index.php?c=product&m=list');
		}
		elseif ($recheck==true) 
		{
			redirect('/blogtaolao_MVC_/index.php?c=product&m=list');
		}

	}
	$data['template_file'] = 'product/edit.php';
	render('layout.php', $data);
}
function product_delete()
{
	$data = array();
// kiểm tra login
	checkaut();
// bắt dữ id bài viết cần chỉnh sửa
	$Currentproduct = empty($_GET['id']) ? null : strtolower($_GET['id']);
	if(!model('product')->check_true($Currentproduct,'product_id'))
	{
		$msg="sản phẩm không tồn tại!!";
		abort($msg); 
	}
	$data['products'] = model('product')->getOneBy($Currentproduct,'product_id');
	if (model('product')->delete($Currentproduct)>=1)
	{
		$msg="Xóa sản phẩm thành công!!!";
		abort($msg);
	}
	else
	{
		$msg="Không thể xóa sản phẩm!!!";
		abort($msg);
	}
	product_list();
}
	?>