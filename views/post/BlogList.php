
<h3>Danh sách các bài viết  !!!</h3>
    <?php
        $i = 0;
        foreach ($posts as $p):
        $i++;
    ?>
    <div style="color:red; font-size: 200%;">
        <?php echo $p['Title']; ?>
    </div>
    <br/>
    <div>
        <?php echo $p['Tag']; ?>
        <?php
    ?>
         <a href="index.php?c=post&m=Blogdetail&id=<?php echo $p['Post_id'];  ?>" style="font-size: 200%;" >Xem chi tiết</a> 
    </div>
    <hr/>
    <?php        
        endforeach;
        if ($i):
    ?>
    <?php else: ?>
    <div> Chưa có bài viết</div>
    <?php endif; ?>

