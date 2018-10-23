<?php require APPROOT."/views/includes/header.php";?>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card card-body bg-light mt-5">
                <?php flash('register_success')?>
                <h2>Login</h2>
                <p>fill out the form to login your account </p>
                <form action="<?=URLROOT?>users/login" method="post">
                    <div class="form-group">
                        <label for="email">Email : <sup>*</sup></label>
                        <input type="email" name="email" id="email" class="form-control form-control-lg
                        <?=(!empty($data['email_err'])) ? 'is-invalid' : '';?>" value="<?=$data['email'];?>"
                               placeholder="">
                        <span class="invalid-feedback"><?=$data['email_err'];?></span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password : <sup>*</sup></label>
                        <input type="password" name="password" id="password" class="form-control form-control-lg
                        <?=(!empty($data['password_err'])) ? 'is-invalid' : '';?>" value="<?=$data['password'];?>"
                               placeholder="">
                        <span class="invalid-feedback"><?=$data['password_err'];?></span>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-success btn-block">Login</button>
                        </div>
                        <div class="col">
                            <a href="<?=URLROOT;?>users/register" type="submit" class="btn btn-light btn-block">
                               No account? Register
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require APPROOT."/views/includes/footer.php";?>