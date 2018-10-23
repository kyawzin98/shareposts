<?php require APPROOT."/views/includes/header.php";?>
    <div class="jumbotron jumbotron-fluid">
         <div class="container text-center">
             <h1 class="display-3"> <?php echo $data['title']; ?></h1>
             <p class="lead"><?=$data['description'];?></p>
         </div>
    </div>
<?php require APPROOT."/views/includes/footer.php";?>
