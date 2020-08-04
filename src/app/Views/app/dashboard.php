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

            <?php if (!$annonces) : ?>

                <h3 class="text-center">Tu n'as pas d'annonce !</h3>

            <?php else : ?>

                <table class="table table-striped table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Titre</th>
                            <th>Prix</th>
                            <th>Date création</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($annonces as $a) : ?>
                            <tr>
                                <td><?= $a->titre ?></td>
                                <td><?= $a->prix ?></td>
                                <td><?= $a->date_creation ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            <?php endif; ?>

        </div>
    </div>
</div>