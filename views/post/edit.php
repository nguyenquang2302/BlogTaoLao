<?php if($posts !=null)
{
?>
<h3>Sửa bài viết!</h3>
<form id="frmpost" class="form-horizontal" method="post" action="" enctype="multipart/form-data">
  <div class="control-group">
    <label class="control-label" for="inputName">Tên tiêu đề: </label>
    <div class="controls">
      <input type="text" id="inputTitle" placeholder="Tên tiêu đề" name="Title" style="width:675px"  value="<?php echo $posts[0]['Title'] ?>" />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputImage">Link Hình </label>
    <div class="controls">
      
      <input type="file" name="image" id="image" />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputTag">Tag </label>
    <div class="controls">
      <input type="text" id="inputTag" placeholder="Mỗi tag ngăn cách nhau bởi dấu ',' và khoảng trắng " name="Tag"  value="<?php echo $posts[0]['Tag'] ?>" style="width:675px"  />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputTag" > Tóm tắt  </label>
    <div class="controls">
    <textarea rows="4" cols="50" name="Ucontent" placeholder="Tóm tắt" class="ckeditor"  >
      <?php echo $posts[0]['Ucontent'] ?>
    </textarea>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputcontent" > Nội dung</label>
    <div class="controls">
      <textarea rows="4" cols="50" name="Content" placeholder="Nội dung" class="ckeditor"  >
      <?php echo $posts[0]['Content'] ?>
      </textarea>
     
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-primary">Lưu bài viết</button>
      <a href="index.php?c=post&m=list" class="btn btn-primary">Trở lại danh sách</a>
    </div>
  </div>
</form>

<script>

    $('#frmpost').submit(function() {
        if ($('#inputTitle').val() =="") {
            if (!alert("Không được để trống tiêu đề")) {
                $('#inputTitle').focus();
                return false;
            }
        }
        if ($('#inputContent').val() =="") {
            if (!alert("Không được để trống nội dung")) {
                $('#inputContent').focus();
                return false;
            }
        }
        return true;
    });
</script>
<?php } ?>