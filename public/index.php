<?php
// Entête HTML ce require permet de charger toutes les balises d'en-tête de la page HTML
require_once('../resource/header.php');
// Fonctions de bases
require_once('../resource/function.php');
$errors = [];
// Gestion des formulaires
if (formIsSubmit('signin_form')) {
  // Traitement du formulaire de connexion
}
if (formIsSubmit('signup_form')) {
  // Traitement du formulaire d'inscription
}
?>

<div class="container form-signin">
  <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Se connecter</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="signup-tab" data-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="false">S'inscrire</a>
    </li>
  </ul>

  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
      <form method="post">
        <input type="hidden" name="signin_form" value="1"/>
        <label for="email" class="sr-only">Adresse Email</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Adresse email" required autofocus>
        <label for="password" class="sr-only">Mot de passe</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Mot de passe" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me">Se souvenir
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
      </form>
    </div>

    <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
      <form method="post">
        <input type="hidden" name="signup_form" value="1"/>
        <label for="email" class="sr-only">Adresse Email</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Adresse email" required autofocus>
        <label for="password" class="sr-only">Mot de passe</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Mot de passe" required>
        <label for="confirmPassword" class="sr-only">Confirmez</label>
        <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Confirmez le mot de passe" required>
        <label for="nom" class="sr-only">Nom</label>
        <input type="password" id="nom" name="nom" class="form-control" placeholder="Nom" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Inscription</button>
      </form>
    </div>
</div> <!-- /container -->

<?php
// Fin du HTML
require_once('../resource/footer.php');