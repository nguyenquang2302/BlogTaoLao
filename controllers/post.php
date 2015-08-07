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
// cli
// List
function post_BlogList() {
    $data = array();   
    $data['posts'] = model('post')->getAll();
    $data['template_file'] = 'post/BlogList.php';
    render('layout.php', $data);
}

//detail
function post_BlogDetail()
{
    $CurrentPost = empty($_GET['id']) ? null : strtolower($_GET['id']);
     if(!model('post')->check_true($CurrentPost,'Post_id'))
     {
        $msg="Bài viết không tồn tại!!";
        abort($msg); 
     }   
    //add comment
    if (isPostRequest()) 
    {
        $postData = postData();   
        if (!model('comment')->add($postData) )
        {
            $msg="Bài viết không tồn tại!!";
            abort($msg); 
        }
    }
    //
    $data['posts'] = model('post')->getOneBy($CurrentPost,'Post_id');
    $data['comments']= model('comment')->getbykey($CurrentPost,'Post_id');
    // render
    $data['template_file'] = 'post/BlogDetail.php';
    render('layout.php', $data);

}
// admin
function post_list() {
    $data = array();
    if(!isLogged())
    {
         redirect('/blogtaolao_MVC_/index.php?c=auth&m=login');
    }
    $data['posts'] = model('post')->getAll();
    $data['template_file'] = 'post/list.php';
    render('layout.php', $data);
}

function post_add() {
    $data = array();
    if(!isLogged())
    {
    	 redirect('/blogtaolao_MVC_/index.php?c=auth&m=login');
    }
    if (isPostRequest()) 
    {
        $postData = postData();
        $currentUser = isLogged();

        if (model('post')->add($postData) )
        {
            redirect('/blogtaolao_MVC_/index.php?c=post&m=list');
        
        }
    }
    $data['template_file'] = 'post/add.php';
    render('layout.php', $data);
}

function post_edit()
{
	$data = array();
	// kiểm tra login
	 if(!isLogged())
    {
    	 redirect('/blogtaolao_MVC_/index.php?c=auth&m=login');
    }
    // bắt dữ id bài viết cần chỉnh sửa
	$CurrentPost = empty($_GET['id']) ? null : strtolower($_GET['id']);
	 if(!model('post')->check_true($CurrentPost,'Post_id'))
	 {
        $msg="Bài viết không tồn tại!!";
	 	abort($msg); 
            
	 }
     
    	 $data['posts'] = model('post')->getOneBy($CurrentPost,'Post_id');

        // lưu bài viết đã chỉnh sửa
         if (isPostRequest()) 
        {
            $postData = postData();
            $currentUser = isLogged();
            if (model('post')->update($postData,$CurrentPost)>=1 )
            {
                redirect('/blogtaolao_MVC_/index.php?c=post&m=list');
            }
        }
        $data['template_file'] = 'post/edit.php';
        render('layout.php', $data);
}
function post_delete()
{
    $data = array();
    // kiểm tra login
     if(!isLogged())
    {
         redirect('/blogtaolao_MVC_/index.php?c=auth&m=login');
    }
    // bắt dữ id bài viết cần chỉnh sửa
    $CurrentPost = empty($_GET['id']) ? null : strtolower($_GET['id']);
    // kiểm tra xem bài viết có tồn tại không!
     if(!model('post')->check_true($CurrentPost,'Post_id'))
     {
        $msg="Bài viết không tồn tại ";
        abort($msg);
     }
     $data['posts'] = model('post')->getOneBy($CurrentPost,'Post_id');
        if (model('post')->delete($CurrentPost)>=1)
        {
            $msg="Xóa bài viết thành công!!!";
            abort($msg);
        }
        else
        {
            $msg="Không thể xóa bài viết!!!";
            abort($msg);
        }
        post_list();

}
?>