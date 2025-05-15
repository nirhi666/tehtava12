<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Lisää työntekijä</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Lisää työntekijä</h2>

<form action="lisaa.php" method="post">
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
