<?php if($posts !=null)
{
?>
<h2 >Chi tiết bài viết</h2>
    
    <div style="color:red; font-size: 200%;">
        <?php echo $posts[0]['Title']; ?>
    </div>
    <br>
    <div style="font-weight:bold; font-size: 150% ">
        <p><?php echo $posts[0]['Ucontent']; ?></p>
    </div>
    </br>
    <div>
        <?php echo $posts[0]['Content']; ?>
    </div>
    <hr/>
    <div >
    <div style="font-weight:bold; font-size: 150%" >
      Có thể bạn quan tâm?
    </div>
    <?php
       foreach (explode(', ', $posts[0]['Tag']) as $tag)
       {
        ?>
        <div style="float:left"> <a href="/blogtaolao_MVC_/index.php?c=post&m=ListTag&Tag=<?php echo $tag ?>"< > <?php  echo $tag; ?>, &nbsp</a>   </div>
        <?php
         
       }
       
    ?>
    </div>
    </br>
    <hr/>
    <div style="font-weight:bold; font-size: 150%">Thêm Comment</div>
    <hr/>
    
    <!--add commnet -->
   <form id="frmpost" class="form-horizontal" method="post">
          <div class="control-group">
            <label class="control-label" for="inputName"  > Tên người comment: </label>
            <div class="controls">
              <input type="text" id="inputName" placeholder="Nhập Tên" name="Name" style="width:675px" />
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inputTag"> Comment </label>
            <div class="controls">
              <textarea name="Content" id="Content" placeholder="Nội dung" class="ckeditor">
              </textarea>
            </div>
          </div>
          <div>
            <input type="hidden" id="id" value="<?php echo $posts[0]['Post_id']; ?>" name="Post_id"/>
          </div>
          <div class="control-group">
            <div class="controls">
              <button type="submit" class="btn btn-primary">Comment</button>
            </div>
          </div>
    </form>
    <hr/>
    <div style="font-weight:bold; font-size: 150%">Danh Sách comment</div>

    <hr/>
    <?php
    foreach ($comments as $p):
        ?>
    <div style="color:blue;font-size: 150%">
     <?php echo $p['Name']; ?>
    </div>
    <div style="width:100% ;height:30px ;background-color:Gainsboro;" >
     <?php echo $p['Content']; ?>
    </div>
     <hr/>
    <?php        
        endforeach;
        
        if(empty($comments))
        {
    ?>
        <div style="color:green;font-size:125%">Chưa có comment nào!!!</div>
<?php }} ?>
<script>
    $('#frmpost').submit(function() {
        if ($('#inputName').val() =="") {
            if (!alert("Không được để trống tiêu đề")) {
                $('#inputTitle').focus();
                return false;
            }
        }
        if ($('#Content').val() =="") {
            if (!alert("Không được để trống nội dung")) {
                $('#inputContent').focus();
                return false;
            }
        }
        return true;
    });
</script>
