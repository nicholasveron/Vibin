<?php

$lochead = "./"; //set kepala directory
if ($page != "home" && $page != "profile" && $page != "login") {
  $lochead = "../";
}
?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="google" content="notranslate">
<link rel="apple-touch-icon" sizes="57x57" href="<?= $lochead ?>miscellaneous/assets/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?= $lochead ?>miscellaneous/assets/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?= $lochead ?>miscellaneous/assets/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?= $lochead ?>miscellaneous/assets/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?= $lochead ?>miscellaneous/assets/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?= $lochead ?>miscellaneous/assets/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?= $lochead ?>miscellaneous/assets/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?= $lochead ?>miscellaneous/assets/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?= $lochead ?>miscellaneous/assets/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?= $lochead ?>miscellaneous/assets/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?= $lochead ?>miscellaneous/assets/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?= $lochead ?>miscellaneous/assets/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?= $lochead ?>miscellaneous/assets/favicon-16x16.png">
<link rel="manifest" href="<?= $lochead ?>miscellaneous/assets/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?= $lochead ?>miscellaneous/assets/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">