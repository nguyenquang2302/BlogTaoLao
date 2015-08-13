<?php
function abort($msg)
{
   ?>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <script>
       alert("<?php echo $msg; ?>") ;

       window.history.back();
   </script>
   <?php   
}
// danh sách theo bài viết p:/s chưa lấy tên bài
function comment_list() 
{
	$data = array();
	// kiểm tra login
  if(!isLogged())
  {
      redirect('/blogtaolao_MVC_/index.php?c=auth&m=login');
  }
  $aut=$_SESSION['logged']['aut'];
  if($aut !="admin")
  {
    redirect('/blogtaolao_MVC_/index.php?c=auth&m=login');
  }
    // bắt dữ id bài viết cần chỉnh sửa
  $CurrentPost = empty($_GET['id']) ? null : strtolower($_GET['id']);
  $post_title = model('post')->getOneBy($CurrentPost,'Post_id');
  if(!model('post')->check_true($CurrentPost,'Post_id'))
  {
    $msg="Bài viết không tồn tại!!";
    abort($msg);
}
else
{
     	// lấy danh sách comment của 1 bài viết!
  $data['comments'] = model('comment')->getBy($CurrentPost,'Post_id');
        // lưu bài viết đã chỉnh sửa
  $data['template_file'] = 'comment/list.php';
  render('layout.php', $data);
}

}
function comment_delete()
{
    $data = array();
    // kiểm tra login
  if(!isLogged())
  {
      redirect('/blogtaolao_MVC_/index.php?c=auth&m=login');
  }
  $aut=$_SESSION['logged']['aut'];
  if($aut !="admin")
  {
    redirect('/blogtaolao_MVC_/index.php?c=auth&m=login');
  }
    // bắt dữ id bài viết cần chỉnh sửa
   $Currentcomment = empty($_GET['id']) ? null : strtolower($_GET['id']);
    // kiểm tra xem bài viết có tồn tại không!
   if(!model('comment')->check_true($Currentcomment,'id'))
   {
    $msg="Comment không tồn tại !!!";
    abort($msg);
}
if (model('comment')->delete($Currentcomment)>=1)
{
    $msg="Xóa comment thành công!!!";
    abort($msg);
}
else
{
    $msg="Không thể xóa comment !!!";
    abort($msg);
}

}
?>