<h3>Quản lí sản phẩm </h3>
<p>
    <a href="index.php?c=product&m=add" class="btn btn-primary">Thêm sản phẩm</a>
</p>
<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Tên khách hàng</th>
        <th>Email</th>
        <th>Tình trạng</th>
        <th>Ngày đặt</th>
        <th>Chi tiết</th>
        <th></th>
        <th></th>
    </tr>
    <?php
        $i = 0;
        $total = 0;
        foreach ($carts as $c):
        $i++;
    ?>
    <tr >
        <td ><?php echo $i;  ?> </td>
        <td><?php echo $c['name']; ?> </td>
         <td><?php echo $c['email']; ?> </td>
        <?php isset($rows) ? $rows : false; ?>
        <td><?php  echo (($c['cart_delivery']>0) ? 'Đã thanh toán' : 'Chưa thanh toán') ?></td>
        <td><?php echo  $c['cart_day'] ?></td>
        <td style=" text-align:center">
            <button type="button" onclick="giohang(<?php echo $c['cart_id']; ?>)"class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal">Xem
            </button>
             <div class="modal fade" style="clear:both" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">

      <div class="mod">
        <button type="button"  class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Chi tiết giỏ hàng của khách hàng </h4>
        <div id="gh">
        </div>
      </div>
      </div>
      </div>
        </td>
        <td > <input class="btn btn-danger btn-lg" type="button" value="Thanh toán" /></td>
         <td style=" text-align:center"> <input class="btn btn-danger btn-lg" type="button" value="Xóa" /></td>
    </tr>
    <?php        
        endforeach;
        if ($i):
    ?>
    <tr>
        <td colspan="7"><strong>end!</strong></td>
        
    </tr>
    <?php else: ?>
    <tr>
        <td colspan="7" class="text-center"><strong> Chưa có sản phẩm nào được rao bán :v</strong></td>
    </tr>
    <?php endif; ?>
</table>

<script type="text/javascript">
    function giohang(cart_id)
            {
            $.ajax({
                    url : '/blogtaolao_MVC_/index.php?c=cartdetail&m=list',
                    type : 'get',
                    dataType : 'text',
                    data : { // Danh sách các thuộc tính sẽ gửi đi
                    number : cart_id
                    },
                    success : function (result){
                        $('#gh').html(result);
                    }

                });
            }
</script>