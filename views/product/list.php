<h3>Quản lí sản phẩm </h3>
<p>
    <a href="index.php?c=product&m=add" class="btn btn-primary">Thêm sản phẩm</a>
</p>
<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Giá</th>
        <th> Mô tả ngắn</th>
        <th>#</th>
        <th>#</th>
    </tr>
    <?php
        $i = 0;
        $total = 0;
        foreach ($products as $p):
        $i++;
    ?>
    <tr>
        <td><?php echo $i;  ?> </td>
        <td id="aaa"> <?php echo $p['product_name']; ?> </td>
        <td> <img src=" <?php echo $p['product_image']; ?>"/></td>
        <td class="text-right"> <?php echo $p['product_price']; ?> </td>
        <td> <?php echo $p['product_ucontent'] ?> </td>
        <td  > <a href="index.php?c=product&m=edit&id=<?php echo $p['product_id']; ?>" class="btn btn-primary" > Sửa </a></td>
        <td  ><a href="index.php?c=product&m=delete&id=<?php echo $p['product_id']; ?>" class="btn btn-primary" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm ?');" > Xóa</a> </td>
        
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
        <td colspan="4" class="text-center"><strong> Chưa có sản phẩm nào được rao bán :v</strong></td>
    </tr>
    <?php endif; ?>
</table>
