<?php require_once VIEWS_PATH . "layouts/header.php"; ?>

<?php require_once VIEWS_PATH . "layouts/navbar.php"; ?>

<div class="container">
    <div class="row my-5">
        <div class="col-6 mx-auto">
            <h3 class="my-5"><?= $title_page ?></h3>
            <form action="<?= SITE_URL ?>/membre/login" method="post" class="form my-3">
                <?php if($error): ?>
                <div class="alert alert-dismissible alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
                </div>
                <?php endif; ?>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Mot de passe" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success"><i class="fa fa-lock" aria-hidden="true"></i> Se connecter</button>
            </form>
            <a href="<?= SITE_URL ?>/membre/register">Pas encore membre ? créer un compte ici</a>
        </div>
    </div>
</div>

<?php require_once VIEWS_PATH . "layouts/footer.php"; ?>