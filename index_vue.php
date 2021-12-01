<?php 
?>

<!DOCTYPE html>
<html lang="en">
<?php include_once "components/pageHead.php" ?>

<body>
  <!-- Header -->
  <?php include_once "components/header.php" ?>

  <!-- Main -->
  <main id="app">
    <div class="container py-5">
      <div class="row justify-content-between gy-4">

        <!-- Card -->
        <div class="_card-container" v-for="disc, i in listAlbum" key="i">
          <img class="_card-img" :src="disc.poster" :alt="disc.title">
          <h4 class="_card-title">{{ disc.title }}</h4>
          <h5 class="_card-author">{{ disc.author }}</h5>
          <p class="_card-year">{{ disc.year}}</p>
        </div>

      </div>
    </div>
  </main>

  <script src="mainVue.js"></script>
</body>
</html>