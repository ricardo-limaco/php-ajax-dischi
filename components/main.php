<?php 
require_once __DIR__ . "/../data/data.php";
?>




<div class="container py-5">
  <div class="row justify-content-between gy-4">

    <?php 
    foreach ($albums as $disc) {
    
    ?>
    <div class="_card-container">
      <img class="_card-img" src="<?php echo $disc['poster']?>" alt="">
      <h4 class="_card-title"><?php echo $disc['title']?></h4>
      <h5 class="_card-author"><?php echo $disc['author']?></h5>
      <p class="_card-year"><?php echo $disc['year']?></p>
    </div>
    <?php } ?>

  </div>
</div>

