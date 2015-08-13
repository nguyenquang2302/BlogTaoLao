  <?php
  if(isset($_SESSION['cart']))
  { 
    $item=  $_SESSION['cart'];
    $i=1;
    echo '<table border="1px" style="width:100%">';
    echo '<tr> <td>STT</td>';
    echo '<td>Tên</td>';
    echo '<td> Số lượng</td>';
    echo '<td> Đơn giá</td>';
    echo '<td> Tổng tiền</td>';
    echo '<td>Xóa</td>';
    echo '</tr>';
    $tongtien=0;
    foreach($item as $key=>$value)
    { 
        if($value==0)
        {
            unset($_SESSION['cart'][$key]);
        }

        foreach($products as $p)
        {

            if($p['product_id']==$key&&$value!=0)
            {
                $tongtien=$tongtien+$p['product_price']*$value;
                echo '<tr> <td>';
                echo $i++;
                echo '</td>';
                echo '<td>';
                echo $p['product_name'];
                echo '</td><td>';
                echo $value;
                echo '</td>';
                echo '<td>';
                echo $p['product_price'];
                echo '</td>';
                echo '<td>';
                echo $p['product_price']*$value;
                echo '</td>';
                echo '<td>';
                echo '<div></<div>';
                echo '</td>';
                echo '</tr>';
            }
        }

    }
    echo '<tr> <td colspan="4" style ="text-align:right">';
    echo 'Tổng tiền : '; 
    echo '</td><td colspan="2">';
    echo $tongtien;
    echo '</td> </tr> ';
    echo '</table>';
}
?>