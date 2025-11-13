<!DOCTYPE html>
<html>
<body>

<h2>Resultats del formulari</h2>

<?php
// Comprovem si s'han rebut dades pel mètode GET o POST
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo "<p><strong>Valors rebuts:</strong></p>";

    // Comprovem cada checkbox
    if (isset($_GET["vehicle1"])) {
        echo "Has seleccionat: " . htmlspecialchars($_GET["vehicle1"]) . "<br>";
    }
    if (isset($_GET["vehicle2"])) {
        echo "Has seleccionat: " . htmlspecialchars($_GET["vehicle2"]) . "<br>";
    }
    if (isset($_GET["vehicle3"])) {
        echo "Has seleccionat: " . htmlspecialchars($_GET["vehicle3"]) . "<br>";
    }

    // Si no s'ha seleccionat cap
    if (!isset($_GET["vehicle1"]) && !isset($_GET["vehicle2"]) && !isset($_GET["vehicle3"])) {
        echo "No has seleccionat cap vehicle.";
    }
} else {
    echo "No s'ha rebut cap dada.";
}
?>

</body>
</html>
