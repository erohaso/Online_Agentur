<?php

include 'include_database.php';

$sql = 'DELETE FROM customers WHERE id = "' . mysqli_real_escape_string($link, $_GET['id']) . '"';

$result = mysqli_query($link, $sql);

mysqli_close($link);

?><!doctype html>
<html lang="de">
  <head>
    <?php include 'include_head.php'; ?>
    <title>Kunde gelöscht - Online-Agentur</title>
  </head>
  <body>
    <?php include 'include_navigation.php'; ?>
    <div class="container mt-4">
        <h1>Kunde gelöscht</h1>
        <p>Der Kunde wurde erfolgreich gelöscht.</p>
        <a href="index.php" class="btn btn-primary">Zurück zur Übersicht</a>
    </div>
    <?php include 'include_body_end.php'; ?>
  </body>
</html>