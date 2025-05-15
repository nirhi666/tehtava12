<?php
// Suora yhteys koulun palvelimelle
define("HOST", "localhost");
define("USERNAME", "tievi23_marko");
define("PASSWORD", "tievi23_mysql");
define("DBNAME", "tievi23_marko");
define("DSN", "mysql:host=" . HOST . ";dbname=" . DBNAME . ";charset=utf8");

try {
    $connection = new PDO(DSN, USERNAME, PASSWORD);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
    die("❌ Yhteyttä ei saatu muodostettua: " . $error->getMessage());
}
?>




