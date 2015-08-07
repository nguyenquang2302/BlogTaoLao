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
</head>
<body>
  <div class='container'>
    <div class='navbar navbar-inverse'>
      <div class='navbar-inner nav-collapse' style="height: auto;">
        <ul class="nav">
            <li class="active"  ><a href="index.php">Blog Tào Lao</a></li>
            <?php 
            if(isLogged()) 
            {
                echo '<li class="active" style "text-align:center"  ><a href="index.php?c=post&m=list">Trang quản lý</a></li>';
                echo '<li class="active" style "text-align:center"  ><a href="index.php?c=auth&m=logout">Đăng xuất</a></li>';
                ?>
                <?php
            }
            else
                echo '<li class="active" style "text-align:center"  ><a href="index.php?c=auth&m=login">Login</a></li>';
              ?>
        </ul>
      </div>
    </div>
    <div id='content' class='row-fluid'>
        <div class='span9 main'>
            <?php include ROOT . DS . 'views' . DS . $template_file; ?>
        </div>
        <div class='span3 sidebar'>
         <?php include ROOT . DS . 'views' . DS . 'blocks' . DS . 'sidebar.php'; ?>
        </div>
    </div>
   </div>
</body>
</html>