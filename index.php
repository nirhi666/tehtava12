
<?php
// Versiohallinta: Tämä tiedosto on osa tehtävä12-projektia (nirhi666/GitHub) <?php
// Tämä koodi toimii – älä koske ilman kahvia ☕
// © Marko Korpikoski 2025 – tehtävä12 / GitHub: nirhi666

// ...loput koodista...

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Lisää työntekijä</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
require 'tietokantayhteys.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kayttajatunnus = trim($_POST['kayttajatunnus']);
    $salasana = trim($_POST['salasana']);
    $nimi = trim($_POST['nimi']);

    $sql = "INSERT INTO tyontekija (kayttajatunnus, salasana, nimi)
            VALUES (:kayttajatunnus, :salasana, :nimi)";

    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':kayttajatunnus', $kayttajatunnus);
    $stmt->bindParam(':salasana', $salasana);
    $stmt->bindParam(':nimi', $nimi);

    if ($stmt->execute()) {
        echo '<div class="onnistui">✅ Työntekijä lisätty onnistuneesti!</div>';
    } else {
        echo '<div class="epaonnistui">❌ Virhe lisättäessä työntekijää.</div>';
    }
}
?>

<!-- Lomake näkyy aina -->
<h2>Lisää työntekijä</h2>

<form action="index.php" method="post">
    <label for="kayttajatunnus">Käyttäjätunnus:</label>
    <input type="text" name="kayttajatunnus" required>

    <label for="salasana">Salasana:</label>
    <input type="password" name="salasana" required>

    <label for="nimi">Nimi:</label>
    <input type="text" name="nimi">

    <button type="submit">Lisää työntekijä</button>
</form>

</body>
</html>



