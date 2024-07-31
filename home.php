<?php 
include 'admin/db_connect.php'; 
?>
<style>
#portfolio .img-fluid {
  width: 100%
}
</style>
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="">
        <h2 class="mb-3">Selamat Datang di <?php echo $_SESSION['setting_name']; ?></h2>
        <p class="mb-4">Temukan Dokter terbaik pilihanmu dan tentukkan jadwalnya!!</p>
        <a class="btn btn-primary js-scroll-trigger mb-4" href="index.php?page=doctors">Temukan Dokter</a>
      </div>

    </div>
  </div>
</header>
<section class="page-section" id="menu">

</section>
<div id="portfolio" class="container">
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="mb-4">Spesialisasi Medis</h2>
        <hr class="divider">

      </div>
    </div>
    <div class="row no-gutters g-3">
      <?php
                    $cats = $conn->query("SELECT * FROM medical_specialty order by id asc");
                                while($row=$cats->fetch_assoc()):
                    ?>
      <div class="col-lg-4 col-sm-6">
        <a class="portfolio-box" href="index.php?page=doctors&sid=<?php echo $row['id'] ?>">
          <img class="img-fluid" src="assets/img/<?php echo $row['img_path'] ?>" alt="" />
          <div class="portfolio-box-caption">
            <div class="project-name"><?php echo $row['name'] ?></div>
            <div class="project-category text-white">Temukan Dokter</div>
          </div>
        </a>
      </div>
      <?php endwhile; ?>

    </div>
  </div>
</div>
<script>
$('.view_prod').click(function() {
  uni_modal_right('Product', 'view_prod.php?id=' + $(this).attr('data-id'))
})
</script>