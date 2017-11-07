<?php

require_once 'system/init.php';
include 'includes/head.php';
include 'includes/nav.php';
$sql="SELECT * FROM events where event_name=sepetuka ";
$featured=$db->query($sql); 
?>
<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>#</th>
      <th>product</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Total</th>
      <th>Remove item</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    	<?php while($product = mysqli_fetch_assoc($featured)):?>
      <th scope="row"></th>
      <td><?php echo $product['event_name']; ?></td>
      <td></td>
      <td></td>
      
      <td></td>
      <td></td>
    </tr>
    
  </tbody>
</table>


<?php
include 'includes/footer.php';
  ?>