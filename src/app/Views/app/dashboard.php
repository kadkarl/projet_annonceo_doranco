<?php require_once VIEWS_PATH . "layouts/header.php"; ?>

<?php require_once VIEWS_PATH . "layouts/navbar.php"; ?>

<div class="container">
    <div class="row my-5">
        <div class="col-12 mx-auto">
            <a href="<?= SITE_URL ?>/annonce/create" class="btn btn-success pull-right"><i class="fa fa-pencil" aria-hidden="true"></i> Déposer une annonce</a>
            <h3><?= $title_page ?></h3>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-12">

            <?php if (!$mesannonces) : ?>

                <h3 class="text-center">Tu n'as pas d'annonce !</h3>

            <?php else : ?>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Titre</th>
                            <th>Prix</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mesannonces as $a) : ?>
                            <tr>
                                <td><img src="<?= SITE_URL ?>/public/assets/img/annonce_defaut.png" style="max-width: 50px" class="img-fluid"></td>
                                <td><?= $a->getTitre() ?></td>
                                <td><?= $a->getPrix() ?></td>
                                <td><?= $a->getDate_enregistrement() ?></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="<?= SITE_URL ?>/annonce/detail/<?= $a->getId_annonce() ?>" class="btn btn-info">
                                            <i class=" fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                        <a href="<?= SITE_URL ?>/annonce/delete/<?= $a->getId_annonce() ?>" class="btn btn-danger" onclick="return confirm('Supprimer cette annonce ?')">
                                            <i class=" fa fa-trash-o" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            <?php endif; ?>

        </div>
    </div>
</div>