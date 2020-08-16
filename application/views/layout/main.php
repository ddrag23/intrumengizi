<?php include "header.php"; ?>
<?php include "navbar.php"; ?>
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3><?= $title;?></h3>
      </div>
    </div>
        <?php if (!empty($src)) {
            include 'application/views/' . $src . '.php';
        } ?>
  </div>
</div>
<?php include "footer.php"; ?>
