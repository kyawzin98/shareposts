<?php require APPROOT . "/views/includes/header.php"; ?>
    <a href="<?=URLROOT;?>posts" class="btn btn-light">
        <i class="fa fa-backward"></i> Back
    </a>

    <h1 class="mt-3"><?=$data['post']->title;?></h1>

    <div class="bg-secondary text-white p-2 mb-3">
        Written by <?=$data['user']->name;?> on <?=$data['post']->created_at;?>
    </div>

    <p><?=$data['post']->body;?></p>

    <?php if ($data['post']->user_id == $_SESSION['user_id']) : ?>
    <hr>
    <a href="<?=URLROOT;?>posts/edit/<?=$data['post']->id;?>" class="btn btn-dark">
        <i class="fa fa-edit"></i> Edit
    </a>

    <form action="<?= URLROOT; ?>posts/delete/<?= $data['post']->id; ?>" method="post" class="float-right">
        <button type="submit" class="btn btn-danger"><i class="fa fa-trash-alt"></i> Delete</button>
    </form>
    <?php endif; ?>
<?php require APPROOT . "/views/includes/footer.php"; ?>