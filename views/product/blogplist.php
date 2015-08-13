<h3 class="center_title_bar">Sản phẩm của cửa hàng</h3>
<div>
  <?php
  $i = 0;
  $total = 0;
  foreach ($products as $p):
    $i++;
  if($i%4!=0)
  {
   ?>
   <div class="product_box"  style="border-radius:10px">
    <div class="top_product_box" style="float:left"></div>
    <div style="float :left" class="center_product_box">
      <?php 
    }
    else 
    {
      ?>
      <div class="product_box">
        <div class="top_product_box"></div>
        <div class="center_product_box" >
          <?php
        }  
        ?>  
        <div < class="product_title"  ><a href="#" title="<?php echo $p['product_name']?>">   <?php echo substr($p['product_name'],0,10) ?> <?php if ( strlen($p['product_name']) >10) {  ?> ...<?php } ?></a></div>
        <div class="product_image">  <img style="width:80%" src="<?php echo $p['product_image'] ?>" ></div>
        <div class="product_price"> Giá:<?php echo $p['product_price'] ?></div>
        <input title="Thêm vào Giỏ Hàng" name="imageField" id="cart_click" onclick="abc(<?php echo $p['product_id']; ?>);" type="image" img src="/Blogtaolao_mvc_/images/css/cart.gif" align="center" />       
        <a  href="" class="produce_details" >Chi tiết</a> 
        <div class="bottom_product_box"  ></div>
      </div>
    </div>
    
    <?php
    endforeach; ?>  
  </div>      
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
        </script>