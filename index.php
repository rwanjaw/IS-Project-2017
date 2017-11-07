<?php

require_once 'system/init.php';
include 'includes/head.php';
include 'includes/nav.php';
include 'includes/headers.php';
$sql="SELECT * FROM events ";
$featured=$db->query($sql);
?>


<div class="container">
<div class="container-fluid">
<!--main events-->
<div class="col-md-2">
  
</div>
<div class="col-md-8">
    <div class="row">
<?php while ($product = mysqli_fetch_assoc($featured)) : ?>     
  <div class="col-md-3">
        <h4><?= $product['event_name']; ?></h4>
        <img src="#" class="img-thumb" alt="<?= $product['event_name']; ?>" class="img-thumb">
        <p class="list-price text-danger">standard price <s><?= $product['standard_price']; ?></s></p>
        <p class="price">Vip price: <?= $product['vip_price']; ?></p>
        <a href="buy.php?page=<?= $product['event_name']; ?>"><button type="button" class="btn btn-sm btn-success" >Details</button></a>
      

    </div>
  <?php endwhile; ?>
  </div>
  </div>

<div class="col-md-2">
  
</div>
</div>
</div>
<?php
  include 'includes/footer.php';
  ?>