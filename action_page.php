<?php
// action_page.php

// Comprova si s'ha enviat el formulari amb el mètode POST o GET
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['fname']);
    $email = htmlspecialchars($_POST['email']);
} else {
    $name = htmlspecialchars($_GET['fname'] ?? '');
    $email = htmlspecialchars($_GET['email'] ?? '');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Action Page</title>
</head>
<body>

<h2>Resultat del formulari</h2>
<p>Nom: <?php echo $name; ?></p>
<p>Correu electrònic: <?php echo $email; ?></p>

</body>
</html>
