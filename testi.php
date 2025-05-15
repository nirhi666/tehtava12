<?php
$fp = fsockopen("172.19.129.5", 3306, $errno, $errstr, 5);
if (!$fp) {
    echo "❌ Yhteys epäonnistui: $errstr ($errno)<br>\n";
} else {
    echo "✅ Yhteys saatiin auki!";
    fclose($fp);
}
?>
