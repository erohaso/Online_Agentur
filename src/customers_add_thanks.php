<?php

include 'include_database.php';

if (empty($_POST['status'])) {
  $status = 0;
} else {
  $status = 1;
}

$sql = 'INSERT INTO 
  customers 
SET 
name       = "' . mysqli_real_escape_string($link, $_POST['name']) . '",
  rechtsform  = "' . mysqli_real_escape_string($link, $_POST['rechtsform']) . '",
  unterzeile        = "' . mysqli_real_escape_string($link, $_POST['unterzeile']) . '",
  kurztext        = "' . mysqli_real_escape_string($link, $_POST['kurztext']) . '",
  profil        = "' . mysqli_real_escape_string($link, $_POST['profil']) . '",
  kategorie = ' . mysqli_real_escape_string($link, $_POST['kategorie']) . ',
  status      = ' . mysqli_real_escape_string($link, $status);

$result = mysqli_query($link, $sql) or die(mysqli_error($link));

mysqli_close($link);

?><!doctype html>
<html lang="de">
  <head>
    <?php include 'include_head.php'; ?>
    <title>Kunde erstellt - Online Agentur</title>
  </head>
  <body>
    <?php include 'include_navigation.php'; ?>
    <div class="container mt-4">
        <h1>Kunde erstellt</h1>
        <p>Die Kunde wurde erfolgreich erstellt.</p>
        <a href="index.php" class="btn btn-primary">Zurück zur Übersicht</a>
    </div>
    <?php include 'include_body_end.php'; ?>
  </body>
</html>