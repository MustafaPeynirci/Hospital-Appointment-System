<?php
$baglanti = new mysqli("localhost", "root", "", "randevu");

if ($baglanti->connect_errno > 0) {
    die("<b>Bağlantı Hatası:</b> " . $baglanti->connect_error);
}

$baglanti->set_charset("utf8");

// $sorgu = $baglanti->query("SELECT * FROM card_content");

// $cikti = $sorgu->fetch_array();

// $id=$cikti["id"];
// $title=$cikti["title"];
// $content=$cikti["content"];

// $sorgu->close();
// $baglanti->close();
?>

