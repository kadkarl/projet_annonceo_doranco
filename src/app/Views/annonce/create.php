<?php require_once VIEWS_PATH . "layouts/header.php"; ?>

<?php require_once VIEWS_PATH . "layouts/navbar.php"; ?>

<div class="container">
    <div class="row my-5">
        <div class="col-12 mx-auto">
            <h3 class="text-center"><?= $title_page ?></h3>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-6 mx-auto">
            <form action="<?= SITE_URL ?>/annonce/create" method="post" class="mb-5">
                <div class="form-group">
                    <label>Catégorie</label>
                    <select name="id_categorie" class="form-control">
                        <option value="">Catégorie...</option>
                        <?php foreach ($categories as $cat) : ?>
                            <option value="<?= $cat->id_categorie ?>"><?= $cat->titre ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Titre de l'annonce</label>
                    <input type="text" class="form-control" name="titre" placeholder="Ex: Ordinateur portable" required>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" cols="30" rows="10" class="form-control" placeholder="Petite description..." required></textarea>
                </div>
                <div class="form-group">
                    <label>Votre adresse</label>
                    <input type="text" class="form-control" name="adresse" placeholder="Ex: 1 rue victor hugo" required>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label>Votre code postal</label>
                            <input type="text" class="form-control" maxlength="5" name="cp" placeholder="Ex: 75001" required>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="form-group">
                            <label>Votre ville</label>
                            <input type="text" class="form-control" name="ville" placeholder="Ex: Paris" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <select name="pays" class="form-control">
                        <option value="France" selected="selected">France </option>
                        <option value="Belgique">Belgique </option>
                        <option value="Luxembourg">Luxembourg </option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Prix</label>
                    <input type="text" name="prix" class="form-control" placeholder="Ex: 200 (sans le €)" required>
                </div>
                <button type="submit" class="btn btn-success">Valider</button>
            </form>
        </div>
    </div>
</div>

<?php require_once VIEWS_PATH . "layouts/footer.php"; ?>