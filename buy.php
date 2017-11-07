<?php

require_once 'system/init.php';
include 'includes/head.php';
include 'includes/nav.php';
$id = $_GET['page'];
$sql="SELECT * FROM events where event_name='$id' ";
$featured=$db->query($sql);    
if (isset($_GET['submit'])) {
	$er=$_GET['qty1'];
	$er1=$_GET['qty2'];
	if(qty1==0){
header("Location:../trolley.php?qty=$er1");
	}
}
?>
<div class="container">	
		<div class="jumbotron jumbotron-fluid">
			 
<div class="container">
	<?php while($product = mysqli_fetch_assoc($featured)):?>
    <h1 class="display-3"><?php echo $product['event_name'].$product['date'] ; ?></h1>
     <h1 class="display-3"><?php echo $product['pic']; ?></h1>
    <p class="lead"><?php echo $product['narration']; ?></p>
  </div>

    
</div>
	</div>
	<form action="trolley.php" method="GET">
		<table class="table">
  <thead>
    <tr>
      <th>Type of ticket</th>
      <th>Price</th>
      <th>Quantity</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Standard</th>
      <td><?php echo $product['standard_price']; ?></td>
      <td><input type="text" name="qty1"></td>
     
    </tr>
    <tr>
      <th scope="row">VIP</th>
      <td><?php echo $product['vip_price']; ?></td>
      <td><input type="text" name="qty2"></td>
    </tr>
  </tbody>
</table>
<?php endwhile; ?>
<button type="button" class="btn btn-sm btn-success" name="submit">Add to trolley</button>
</form>
<?php
	
		


	
	
  include 'includes/footer.php';
  ?>