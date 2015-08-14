<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>BlogTaolao</title>
    <link rel="stylesheet" href="./styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/css/styles.css">
    <script type="text/javascript" src="./styles/js/jquery.js"></script>
    <script  type="text/javascript"  src ="./includes/ckeditor/sample.js"></script>
    <script  type="text/javascript"  src ="./includes/ckeditor/ckeditor.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/Blogtaolao_mvc_/styles/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="/Blogtaolao_mvc_/styles/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="/Blogtaolao_mvc_/styles/js/bootstrap.min.js"></script>
</head>
<body>
  <div class='container'>
    <div class='navbar navbar-inverse'>
      <div class='main_menu' style="height: auto; background:#111111">
        <ul class="nav">
            <li class="li"  ><a href="index.php">Blog Tào Lao</a></li>
            <li class="li" style ="text-align:center"  ><a href="index.php?c=product&m=blogplist">Sản phẩm đang bày bán</a></li>
            <?php 
            if(isLogged()) 
            {
                $aut=$_SESSION['logged']['aut'];
                if($aut =="admin")
                {
                    echo '<li class="li"  ><a href="index.php?c=post&m=list">Trang quản lý</a>

                    <ul >
                        <li><a href="index.php?c=post&m=list">Quản lí bài viết</a></li>
                        <li><a href="index.php?c=product&m=list">Quản lí sản phẩm</a></li>
                        <li><a href="index.php?c=cart&m=list">Quản lí đơn hàng</a></li>
                        <li><a href="">....</a></li>
                    </ul>

                </li>';
            }
            echo ' <li class="li" style ="text-align:center"  ><a href="index.php?c=cart&m=Ulist">Lịch sử đặt hàng</a></li>
            ';
            echo '<li class="active" style ="text-align:center"  ><a href="index.php?c=auth&m=logout">Đăng xuất</a></li>';

            ?>
            <?php
        }
        else
        {
            echo '<li class="active" style ="text-align:center"  ><a href="index.php?c=auth&m=login">Đăng nhập</a></li>';
            echo '<li class="active" style ="text-align:center"  ><a href="index.php?c=auth&m=register">Đăng kí</a></li>';
        }
        ?>            
    </ul>
    <div class="clear"></div>
</div>
</div>
<div id='content' class='row-fluid'>
    <div class='span3 sidebar'>
       <?php include ROOT . DS . 'views' . DS . 'blocks' . DS . 'sidebar.php'; ?>
   </div>
   <div class='span9 main'>
    <?php include ROOT . DS . 'views' . DS . $template_file; ?>
</div>

</div>
</div>
</body>
</html>
