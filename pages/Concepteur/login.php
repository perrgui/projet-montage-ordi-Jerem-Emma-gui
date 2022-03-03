<?php
$pageTitle = "Login";

$errors = [];
if (isset($_POST['username'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    "SELECT * FROM `employe` 
        LEFT JOIN monteur ON monteur.Id_Employe = employe.Id_Employe 
        LEFT JOIN concepteur ON concepteur.Id_Employe = employe.Id_Employe 
    WHERE identifiant = '$username'";

    if (empty($password)) {
        $errors[] = 'Mot de passe vide';
    } elseif ($password != $defaultPassword) {
        $errors[] = 'Mot de passe erroné';
    }


    if (!empty($username)) {
        $errors[] = 'Username vide';
    }

    if (empty($errors)) {
        $_SESSION['username'] = $_POST['username'];
    }

    header('Location: ?page=concepteur&login=success');
}

?>

<?php

foreach ($errors as $error) {
?>
    <!-- Vous êtes bien déconnecté via Tailwind -->
<?php
}

?>

<form action="" method="post">

    <div class="mb-3">
        <label for="username" class="form-label">Identifiant</label>
        <input type="text" class="form-control" id="username" name="username">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">mot de passe</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Valider</button>
</form>