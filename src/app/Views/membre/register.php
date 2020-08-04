<?php require_once VIEWS_PATH . "layouts/header.php"; ?>

<?php require_once VIEWS_PATH . "layouts/navbar.php"; ?>

<div class="container">
    <div class="row my-5">
        <div class="col-6 mx-auto">
            <h3 class="my-5"><?= $title_page ?></h3>
            <form action="<?= SITE_URL ?>/membre/register" method="post" class="form my-3">
                <?php if($error): ?>
                <div class="alert alert-dismissible alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong><?= $error ?></strong>
                </div>
                <?php endif; ?>
                <div class="form-group">
                    <input type="text" name="pseudo" placeholder="Pseudo" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" minlength="6" placeholder="Mot de passe" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success">S'inscrire</button>
            </form>
            <a href="<?= SITE_URL ?>/membre/login">Déja membre ? se connecter ici</a>
        </div>
    </div>
</div>

<?php require_once VIEWS_PATH . "layouts/footer.php"; ?>