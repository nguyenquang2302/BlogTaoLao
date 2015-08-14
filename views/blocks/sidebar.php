<?php
if(isset($_SESSION['cart']))
{
	$item=count($_SESSION['cart']);
}
else
{
	$item=0;
}
 ?>
<h3>Hello</h3>
<ul class="nav nav-tabs nav-stacked">
    <?php if ($logged = isLogged()): ?>
    <li><a href="#">Welcome <strong><?php echo $logged['name']; ?></strong></a></li>
    <?php else: ?>
    <li><a href="#">Khách</a></li> 
     <?php endif; ?>
      <li ><a onclick="cart_details();"><div id="result1">Giỏ hàng có :[ <?php echo $item ?> ] sản phẩm </div>  </a></li>
    <li><div style="border-top-right-radius: 4px;border-top-left-radius: 4px;border: 1px solid #ddd;" id ="cart_det" name="cart_det" ></div></li>
    <li><div style="border-top-right-radius: 4px;border-top-left-radius: 4px;border: 1px solid #ddd;"> <input type="button" onclick="save_cart()"  value="Đặt hàng" style="width:100%" /></div></li>
     <li><div style="border-top-right-radius: 4px;border-top-left-radius: 4px;border: 1px solid #ddd;"> <input type="button" onclick="delete_cart()"  value="Xóa Giỏ hàng" style="width:100%" /></div></li>
    <li><div style="border-top-right-radius: 4px;border-top-left-radius: 4px;border: 1px solid #ddd;" id ="info" name="info" ></div></li>   
</ul>

   <script language="javascript">
    function abc(id)
            {
              $.ajax({
                    url : '/Blogtaolao_mvc_/views/product/text.php',
                    type : 'get',
                    dataType : 'text',
                    data : { // Danh sách các thuộc tính sẽ gửi đi
                    number : id
                    },
                    success : function (result){
                        $('#result1').html(result);
                    }
                });
            }
    function delete_cart()
            {
              abc('clearall');
               cart_details();
            }
    function save_cart()
            {
              $.ajax({
                    url : '/Blogtaolao_mvc_/index.php?c=cart&m=add',
                    type : 'get',
                    dataType : 'text',
                 
                    success : function (result){
                        $('#info').html(result);
                    }
                });
              cart_details();
              abc('clear');
            }
    function cart_details()
            {
                $.ajax({
                    url : '/Blogtaolao_mvc_/index.php?c=product&m=cart',
                    type : 'get',
                    dataType : 'text',
                    success : function (result){
                        $('#cart_det').html(result);

                    }
                });
            }
        </script>
