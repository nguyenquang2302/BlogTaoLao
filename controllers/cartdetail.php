<?php
function cartdetail_list()
 {
    $data = array();
    if(!isLogged())
      {
        redirect('/blogtaolao_MVC_/index.php?c=auth&m=login');
      }
      $cart_id = empty($_GET['number']) ? '0' : strtolower($_GET['number']);
     $data['cartdetails'] = model('cartdetail')->getbykey($cart_id);
     $data['template_file'] = 'cart/cartdetails.php';
     render('/cart/cartdetails.php', $data);
}
?>