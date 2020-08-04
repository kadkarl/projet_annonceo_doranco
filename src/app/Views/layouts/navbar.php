     <?php

        use Sys\Session; ?>
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
                             <a class="nav-link text-white" href="<?= SITE_URL ?>/membre/login">
                                 <i class="fa fa-user" aria-hidden="true"></i> Bienvenue, <?= $membreSession->getPseudo() ?><span class="sr-only">(current)</span>
                             </a>
                         <?php else : ?>
                             <a class="nav-link text-white" href="<?= SITE_URL ?>/membre/login">
                                 <i class="fa fa-user" aria-hidden="true"></i> Membre <span class="sr-only">(current)</span>
                             </a>
                         <?php endif; ?>
                     </li>
                 </ul>
             </div>
         </div>
     </nav>