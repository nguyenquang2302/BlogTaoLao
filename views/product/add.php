
<h3>Thêm sản phẩm !!!</h3>
<form id="frmpost" class="form-horizontal" method="post" action="" enctype="multipart/form-data" >
  <div>
    <div class="control-group">
      <label class="control-label" for="inputName" >Tên sản phẩm: </label>
      <div class="controls">
        <input type="text" id="inputName" required placeholder="Tên sản phẩm" name="product_name" style="width:100%" />
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="inputImage">File Hình </label>
      <div class="controls">
        <td> <input type="file" name="product_image" id="product_image" /> </td>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="input_prince">Giá tiền </label>
      <div class="controls">
      <input type="number" id="product_price" placeholder="Nhập số tiền" required name="product_price" style="width:100%" />
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="inputUcontent" >Tóm tắt</label>
      <div class="controls">
        <textarea rows="100%" cols="100%" name="product_ucontent" id="product_ucontent" placeholder="Tóm tắt" class="ckeditor"></textarea>
      </div>
    </div>
  </div>
  <br/>
  <div class="control-group" >
    <div class="controls">
      <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
      <a href="index.php?c=post&m=list; ?>" class="btn btn-primary ">Trở lại danh sách</a>
    </div>
  </div>
</form>
<script>
CKEDITOR.replace('product_ucontent');
    $('#frmpost').submit(function() {
        if ($('#inputName').val() =="") {
            if (!alert("Không được để trống tên sản phẩm!!!")) {
                $('#inputName').focus();
                return false;
            }
        }
        
        return true;
    });
</script>