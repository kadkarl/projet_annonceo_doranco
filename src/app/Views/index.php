<?php require_once VIEWS_PATH . "layouts/header.php"; ?>

<?php require_once VIEWS_PATH . "layouts/navbar.php"; ?>

<div class="container">
    <div class="row my-5">
        <div class="col-6 mx-auto">
            <form action="<?= SITE_URL ?>/home/search" method="post" class="form">
                <div class="row">
                    <div class="col-10">
                        <div class="form-group">
                            <input type="text" name="motcle" class="form-control" placeholder="Recherche...">
                        </div>
                    </div>
                    <div class="col-2">
                        <input type="submit" class="btn btn-primary btn-block" value="Go">
                    </div>
                </div>
                <div class="form-group">
                    <select name="id_categorie" class="form-control">
                        <option value="">Catégorie...</option>
                        <?php foreach ($categories as $cat) : ?>
                            <option value="<?= $cat->id_categorie ?>"><?= $cat->titre ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </form>
        </div>
    </div>

    <?php foreach ($annonces as $a) : ?>

        <div class="row my-5">
            <div class="col-8 mx-auto">
                <div class="row">
                    <div class="col-6">
                        <img src="<?= SITE_URL ?>/public/assets/img/annonce_defaut.png" class="img-fluid" alt="Annonceo">
                    </div>
                    <div class="col-6">
                        <h4 class="text-left mb-5"><?= ucfirst($a->getTitre()) ?></h4>
                        <p class="my-5">
                            <?= ucfirst($a->getDescription()) ?>
                        </p>
                        <h5 class="text-info"><?= $a->getPrix() ?> €</h5>
                        <a href="<?= SITE_URL .'/annonce/detail/'.$a->getId_annonce() ?>" class="btn btn-success my-3">Voir</a>
                    </div>
                </div>
            </div>
        </div>
        <hr>

    <?php endforeach; ?>

</div>

<?php require_once VIEWS_PATH . "layouts/footer.php"; ?>