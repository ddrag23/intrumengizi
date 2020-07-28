<?php include "header.php"; ?>
<?php include "navbar.php"; ?>
<div class="right_col" role="main">
    <?php if (!empty($src)) {
        include 'application/views/' . $src . '.php';
    } ?>
</div>
<?php include "footer.php"; ?>