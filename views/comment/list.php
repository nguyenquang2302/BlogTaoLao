<?php 
    if( $comments !=null) 
    { 
    ?>
    <h3>Quản lí comment của bài viết!
    </h3>
    <table class="table table-bordered" >
    <tr>
    <td colspan="4" style="text-align:center" > 
        </td>
         <?php
             echo 'Comment của bài viết có tiêu đề :  '.$comments[0]['Title'];
            
        ?>
    </td>
    </tr>
        <tr>
            <th>#</th>
            <th style="text-align:center">Tên :</th>
            <th style="text-align:center">Nội dung</th>
            <th></th>
        </tr>
        <?php
            $i = 0;
            $total = 0;
            foreach ($comments as $p):
            $i++;
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $p['Name']; ?></td>      
           <td width="50%"><?php echo $p['Content']; ?></td>
           <td style="text-align:center"><p>
        <a href="index.php?c=comment&m=delete&id=<?php echo $p['id']; ?>" class="btn btn-primary" onclick="return confirm('Bạ có chắc chắn muốn xóa comment ?');">Xóa comment</a>
    </p>
            </td>
        </tr>
        <?php        
            endforeach;
            if ($i):
        ?>
        <tr>
            <td colspan="4"><strong>End!</strong></td>
        </tr>
        <?php else: ?>
        <tr>
            <td colspan="4" class="text-center"><strong>Chưa có comment nào!!!</strong></td>
        </tr>
        <?php endif; ?>
    </table>
    <?php 
    } 
    else
    {
    ?>
    <table class="table table-bordered" >
    <tr><td style="text-align:center"> Bài viết Chưa có comment nào !!! </td></tr>
    <tr><td style="text-align:center"> <a href="index.php?c=post&m=list" class="btn btn-primary">Trở lại danh sách bài viết !!! </td></tr>  
    </table>

<?php } ?>