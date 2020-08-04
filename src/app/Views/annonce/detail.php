<?php require_once VIEWS_PATH . "layouts/header.php"; ?>

<?php require_once VIEWS_PATH . "layouts/navbar.php"; ?>

<div class="container">
    <div class="row my-5">
        <div class="col-12 mx-auto">
            <h3 class="text-center"><i class="fa fa-list" aria-hidden="true"></i> <?= $title_page ?></h3>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-8 mx-auto">
            <div class="row">
                <div class="col-6">
                    <img src="<?= SITE_URL ?>/public/assets/img/annonce_defaut.png" class="img-fluid" alt="Annonceo">
                </div>
                <div class="col-6">
                    <h4 class="text-left mb-5"><?= ucfirst($annonce->getTitre()) ?></h4>
                    <p class="my-5">
                        <?= ucfirst($annonce->getDescription()) ?>
                    </p>
                    <h5 class="text-info"><?= $annonce->getPrix() ?> €</h5>
                    <h6 class="my-3"><i class="fa fa-user" aria-hidden="true"></i> <?= $profil->getPrenom() ?></h6>
                    <h6 class="my-3 text-info"><i class="fa fa-phone" aria-hidden="true"></i> <?= $profil->getTelephone() ?></h6>
                    <a href="<?= SITE_URL ?>"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Retour aux annonces</a>
                </div>
            </div>
        </div>
    </div>
</div>