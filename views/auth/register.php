<h3>Đăng nhập hệ thống</h3>
<?php if (isset($error)): ?>
  <div class="alert alert-error">
    <?php echo $error; ?>
  </div>
<?php endif; ?>
<form class="form-horizontal" method="post" action="">
  <div class="control-group">
    <label class="control-label" for="inputEmail">Email</label>
    <div class="controls">
      <input type="text" id="inputEmail" placeholder="Email" name="email" required />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Tên</label>
    <div class="controls">
      <input type="text" id="name" placeholder="name" name="name" required />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Mật khẩu</label>
    <div class="controls">
      <input type="password" id="inputPassword" placeholder="Password" name="password" required />
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-success" onclick="checkEmail();">register</button>
    </div>
  </div>
</form>
<script type="text/javascript"> 
  function checkEmail() 
  {
   var email = document.getElementById('inputEmail'); 
   var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
   if (!filter.test(email.value)) 
   {
    alert('Email không hợp lệ! email có dạng \nabc@*.'); 
    return false;
  } 
  else
  { 
    return true;
  }
}
</script>