
<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Đơn giá</th>
        <th>Số lượng</th>
        <th> Thành tiền </th>
      
    </tr>
    <?php
        $i = 0;
        $total = 0;
        foreach ($cartdetails as $c):
        $i++;
    $total = $total +$c['cart_num']*$c['product_price'];
    ?>
    <tr>
        <td><?php echo $i;  ?> </td>
        <td><?php echo $c['product_name']  ?></td>
        <td> <img src="<?php echo $c['product_image'] ?> " /> </td>
        <td><?php echo $c['product_price']  ?></td>
        <td><?php echo $c['cart_num']  ?></td>
        <td><?php echo $c['cart_num']*$c['product_price']  ?></td>
    <?php        
        endforeach;
        if ($i):
    ?>
    <tr>
        <td colspan="4"><strong>Tổng</strong></td>
        <td colspan="2"><?php echo $total ?> </td>
    </tr>
    <?php else: ?>
    <tr>
        <td colspan="6" class="text-center"><strong> Đơn hàng trống :v</strong></td>
    </tr>
    <?php endif; ?>
</table>
 <div class="modal fade" style="clear:both" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">

      <div class="mod">
        <button type="button"  class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Chi tiết giỏ hàng</h4>
        <div id="gh">
        </div>
      </div>
      </div>
      </div>
