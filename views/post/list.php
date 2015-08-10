
<h3>Quản lý bài viết</h3>
<p>
    <a href="index.php?c=post&m=add" class="btn btn-primary">Bài viết mới!</a>
</p>
<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Tiêu đề</th>
        <th>Tag</th>
        <th>Tóm tắt</th>
        <th>nội dung</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <?php
        $i = 0;
        $total = 0;
        foreach ($posts as $p):
        $i++;
    ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $p['Title']; ?></td>
        <td><?php echo $p['Tag']; ?></td>
        <td><?php echo $p['Ucontent']; ?></td>         
       <td width="50%"><?php echo $p['Content']; ?></td>
          <td><p>
    <a href="index.php?c=comment&m=list&id=<?php echo $p['Post_id']; ?>" class="btn btn-primary">Danh sách comment</a>
</p>
        </td>
       <td><p>

    <a href="index.php?c=post&m=edit&id=<?php echo $p['Post_id']; ?>" class="btn btn-primary">Sửa bài viết</a>
</p>
        </td>
       <td>
           <p>
    <a href="index.php?c=post&m=delete&id=<?php echo $p['Post_id']; ?>" class="btn btn-primary" onclick="return confirm('Bạ có chắc chắn muốn xóa bài viết ?');" >Xóa bài viết</a>
</p>
       </td>
    </tr>
    <?php        
        endforeach;
        if ($i):
    ?>
    <tr>
        <td colspan="8"><strong>end!</strong></td>
    </tr>
    <?php else: ?>
    <tr>
        <td colspan="8" class="text-center"><strong>Chưa có bài viết nào!!!</strong></td>
    </tr>
    <?php endif; ?>
</table>
