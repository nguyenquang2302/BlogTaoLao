<h3>Thêm bài viết mới</h3>
<form id="frmpost" class="form-horizontal" method="post" action="" enctype="multipart/form-data" >
  <div class="control-group">

    <label class="control-label" for="inputName">Tên tiêu đề: </label>
    <div class="controls">
      <input type="text" required id="inputTitle" placeholder="Tên tiêu đề" name="Title" style="width:100%" />
    </div>
  </div>
    <div class="control-group">
    <label class="control-label"  for="inputImage">File Hình </label>
    <div class="controls">
    <td> <input type="file"  required name="image" id="image" /> </td>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label"  for="inputTag">Tag </label>
    <div class="controls">
      <input type="text" id="inputTag" placeholder="Mỗi tag ngăn cách nhau bởi dấu ',' và khoảng trắng " name="Tag" style="width:100%" />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label"   for="inputTag" >Tóm tắt</label>
    <div class="controls">
    <textarea rows="100%" cols="100%" required name="UContent" placeholder="Tóm tắt" class="ckeditor"></textarea>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label"  for="inputcontent">Nội dung</label>
    <div class="controls">
    <textarea rows="100%" cols="100%" required name="Content" placeholder="Nội dung" class="ckeditor">
</textarea>
</div>
  </div>
  <br/>
  <div class="control-group" >
    <div class="controls">
      <button type="submit" class="btn btn-primary">Thêm bài viết</button>
      <a href="index.php?c=post&m=list; ?>" class="btn btn-primary">Trở lại danh sách</a>
    </div>
  </div>
</form>
<script>
CKEDITOR.replace('Content');
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