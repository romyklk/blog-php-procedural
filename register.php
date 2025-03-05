<?php
require_once 'partials/_header.php';

/* 

Faire le traitement du formulaire

- Tous les champs sont obligatoires

- le nom et le prénom doivent avoir au moins une 2 caractères

- l'email doit être valide

- Afficher le message d'erreur si le formulaire n'est pas valide(sous le champ concerné)

- Faites en sorte de ne pas vider le formulaire si le formulaire n'est pas valide





//TODO

1- Envoi du mail de confirmation(avec les informations de l'utilisateur)

2- Utilisation de la session pour afficher le message de confirmation

3- Ajout des champs adresse, telephone, ville, code postal

4- Ajout des champs date de naissance

5- le téléphone doit être valide et contenir 10 chiffres

7- Le code postal doit être valide et contenir 5 chiffres

8- La date de naissance doit être valide et inférieure à la date actuelle

9- Ajouter un champ description qui sera optionnel

10- Ajouter un champ image qui va contenir un photo de profil

NB: Faites en sorte que le formulaire soit valide si tous les champs sont remplis avant d'envoyer le mail de confirmation et l'insertion dans la base de données.Puis redirigez vers la page de connexion
*/

$fname = '';
$lname = '';
$email = '';
$civilite = '';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $fname = $_POST['firstname'] ?? '';
    $lname = $_POST['lastname'] ?? '';
    $email = $_POST['email'] ?? '';
    $civilite = $_POST['civilite'] ?? '';



    if (empty($fname) || empty($lname) || empty($email) || empty($civilite)) {
        $errors['error'] = 'Formulaire invalide';
    }

    if (strlen($fname) < 2) {
        $errors['fname'] = 'Le prénom doit contenir au moins 2 caractères';
    } else if (strlen($fname) > 50) {
        $errors['fname'] = 'Le prénom doit contenir 50 caractères maximum';
    } else {
        $fname = htmlspecialchars(trim($fname));
    }
}

?>

<!-- Main Content -->
<main class="container-fluid my-4">
    <div class="row">
        <div class="col-md-8 m-auto">
            <h1 class="display-4 fw-normal">Inscription</h1>

            <?php if (isset($errors['error'])) : ?>

                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Alert! </strong>
                    <?php echo $errors['error']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <form action="" method="post" class="mt-4">
                <div class="mb-3">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="civilite" value="M" id="male">
                        <label class="form-check-label" for="male"><i class="fas fa-male"></i> Monsieur</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="civilite" value="F" id="female">
                        <label class="form-check-label" for="female"><i class="fas fa-female"></i> Madame</label>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control" name="firstname" placeholder="Prénom"
                            value="<?= $fname ?>"
                            >

                        </div>
                        <small class="text-danger mt-1">
                            <?= $errors['fname'] ?? '' ?>
                        </small>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control" name="lastname" placeholder="Nom">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> S'inscrire</button>
            </form>
        </div>
</main>


<?php
require_once 'partials/_footer.php';
?>