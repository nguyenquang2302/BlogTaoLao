

<?php

session_start();
// Thiết lập font chữ UTF8 để khỏi bị lỗi font
// Kiểm tra có dữ liệu không
$number = isset($_GET['number']) ? (int)$_GET['number'] : "clear";
if($number == "clear")
  {
    echo ' Giỏ hàng có :[ 0 ] sản phẩm';
    die();
  }
$number = isset($_GET['number']) ? (int)$_GET['number'] : false;

if(!$number)
{
     ?>
     <script type="text/javascript">
       alert('Bạn tính hacker à!!!' ); 

     </script>
     <?php

}
else if($number>0)
{
  if(isset($_SESSION['cart'][$number]))
    {
     $_SESSION['cart'][$number]=$_SESSION['cart'][$number]+1;
    }
    else
    {
      $_SESSION['cart'][$number]=1;  
    }
      echo ' Giỏ hàng có :[ '.count($_SESSION['cart']).' ]'.' sản phẩm';
    ?>

    <script type="text/javascript">
       alert('Thêm vào giỏ thành công' ); 
       $.ajax({
                    url : '/Blogtaolao_mvc_/index.php?c=product&m=cart',
                    type : 'get',
                    dataType : 'text',
                    success : function (result){
                        $('#cart_det').html(result);
                    }
                });
    </script>
     <?php
}

?>