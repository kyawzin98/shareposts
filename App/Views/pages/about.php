<?php require APPROOT."/views/includes/header.php";?>
<h1 class="mt-3"> <?php echo $data['title']; ?></h1>
<p class="lead"><?=$data['description'];?></p>
<p class="lead">Version : <strong><?=APPVERSION;?></strong></p>
<?php require APPROOT."/views/includes/footer.php";?>