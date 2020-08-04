<?php require_once VIEWS_PATH . "layouts/header.php"; ?>

<?php require_once VIEWS_PATH . "layouts/navbar.php"; ?>

<div class="container">
    <div class="row my-5">
        <div class="col-10 mx-auto">
            <h3 class="my-5"><?= $title_page ?></h3>
            <form action="<?= SITE_URL ?>/profil/create" method="post" class="form my-3">
                <?php if ($error) : ?>
                    <div class="alert alert-dismissible alert-danger">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong><?= $error ?></strong>
                    </div>
                <?php endif; ?>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="civilite" value="mme" che>
                                <label class="form-check-label" for="inlineRadio1">Mme</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="civilite" value="mr">
                                <label class="form-check-label" for="inlineRadio2">Mr</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="civilite" value="mlle">
                                <label class="form-check-label" for="inlineRadio2">Mlle</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <input type="text" name="nom" placeholder="Nom" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <input type="text" name="prenom" placeholder="Prénom" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <input type="tel" name="telephone" placeholder="Téléphone" class="form-control" minlength="10" required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Valider</button>
            </form>
            <a href="<?= SITE_URL ?>membre/login">Déja membre ? se connecter ici</a>
        </div>
    </div>
</div>

<?php require_once VIEWS_PATH . "layouts/footer.php"; ?>