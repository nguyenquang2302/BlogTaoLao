  <?php 
  if(isset($products[0]))
  {
    $p=$products[0];
    ?>
    <div class="product_title"  >
      <a href="#" title="<?php echo $p['product_name']?>"> <?php echo substr($p['product_name'],0,10) ?> <?php if ( strlen($p['product_name']) >10) {  ?> ...<?php } ?>
      </a>
    </div>
    <div class="product_image">  <img style="width:80%" src="<?php echo $p['product_image'] ?>" ></div>

    <div class="product_price"> Giá:<?php echo $p['product_price'] ?></div>

    <input title="Thêm vào Giỏ Hàng" name="imageField" id="cart_click" onclick="abc(<?php echo $p['product_id']; ?>);" type="image" img src="/Blogtaolao_mvc_/images/css/cart.gif" align="center" />     
    <div>
      <?php echo $p['product_ucontent'] ?> </div>
    <?php
  }?>
  
