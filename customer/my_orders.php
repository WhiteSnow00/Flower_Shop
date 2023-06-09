
<center><!-- center Starts -->

<h1>Đơn hàng của tôi</h1>

<p class="lead"> Thông tin về các đơn hàng của bạn.</p>

<p class="text-muted" >

Nếu có câu hỏi gì hãy <a href="../contact.php" > liên lạc chúng tôi</a> , dịch vụ của chúng tôi sẽ hỗ trợ bạn 24/7.

</p>

</center><!-- center Ends -->

<hr>

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover" ><!-- table table-bordered table-hover Starts -->

<thead><!-- thead Starts -->

<tr>

<th>Mã hàng</th>
<th>Giá trị</th>
<th>Số hóa đơn</th>
<th>Số lượng</th>
<th>Kích cỡ</th>
<th>Ngày đặt hàng</th>
<th>Đã thanh toán?</th>
<th>Trạng thái</th>

</tr>

</thead><!-- thead Ends -->

<tbody><!--- tbody Starts --->

<?php

$customer_session = $_SESSION['customer_email'];

$get_customer = "select * from customers where customer_email='$customer_session'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];

$get_orders = "select * from customer_orders where customer_id='$customer_id'";

$run_orders = mysqli_query($con,$get_orders);

$i = 0;    //ordernumber

while($row_orders = mysqli_fetch_array($run_orders)){

$order_id = $row_orders['order_id'];

$due_amount = $row_orders['due_amount'];

$invoice_no = $row_orders['invoice_no'];

$qty = $row_orders['qty'];

$size = $row_orders['size'];

$order_date = substr($row_orders['order_date'],0,11);

$order_status = $row_orders['order_status'];

$i++;

if($order_status=='pending'){

$order_status = "Chưa thanh toán";

}
else{

$order_status = "Đã thanh toán";

}

?>

<tr><!-- tr Starts -->

<th><?php echo $i; ?></th>

<td>$<?php echo $due_amount; ?></td>

<td><?php echo $invoice_no; ?></td>

<td><?php echo $qty; ?></td>

<td><?php echo $size; ?></td>

<td><?php echo $order_date; ?></td>

<td><?php echo $order_status; ?></td>

<td>
<a href="confirm.php?order_id=<?php echo $order_id; ?>" target="blank" class="btn btn-primary btn-sm" > Confirm Payment </a>
</td>

</tr><!-- tr Ends -->

<?php } ?>

</tbody><!--- tbody Ends --->

</table><!-- table table-bordered table-hover Ends -->

</div><!-- table-responsive Ends -->
