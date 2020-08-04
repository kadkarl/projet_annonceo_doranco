     <?php use Sys\Session; ?>
     <?php $membreSession = Session::get("membreSession") ?>

     <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
         <div class="container">
             <a class="navbar-brand" href="<?= SITE_URL ?>">Annonceo</a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>

             <div class="collapse navbar-collapse" id="mainNavbar">
                 <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">
                         <a class="nav-link text-white" href="<?= SITE_URL ?>"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
                     </li>
                     <?php if (!$membreSession) : ?>
                         <li class="nav-item active">
                             <a class="nav-link text-white" href="<?= SITE_URL ?>/membre/register"><i class="fa fa-pencil" aria-hidden="true"></i> Déposer un annonce <span class="sr-only">(current)</span></a>
                         </li>
                     <?php endif; ?>
                 </ul>
                 <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                         <?php if ($membreSession) : ?>
                            <div class="btn-group dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-user" aria-hidden="true"></i> Bienvenue, <?= $membreSession->getPseudo() ?><span class="sr-only">(current)</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="<?= SITE_URL.'/app/dashboard' ?>"><i class="fa fa-home" aria-hidden="true"></i> Mes annonces</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= SITE_URL.'/membre/logout' ?>"><i class="fa fa-power-off" aria-hidden="true"></i> Quitter</a>
                                </div>
                            </div>
                         <?php else : ?>
                             <a class="nav-link text-white btn btn-secondary" href="<?= SITE_URL ?>/membre/login">
                                 <i class="fa fa-user" aria-hidden="true"></i> Membre <span class="sr-only">(current)</span>
                             </a>
                         <?php endif; ?>
                     </li>
                 </ul>
             </div>
         </div>
     </nav>