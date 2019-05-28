<?php

include 'include_database.php';

$sql = 'UPDATE categories 
SET name = "' .  mysqli_real_escape_string($link, $_POST['name']) . '"
WHERE id = "' . mysqli_real_escape_string($link, $_GET['id']) . '"';

$result = mysqli_query($link, $sql);

mysqli_close($link);

?><!doctype html>
<html lang="de">
  <head>
    <?php include 'include_head.php'; ?>
    <title>Kategorie aktualisiert - News-System</title>
  </head>
  <body>
    <?php include 'include_navigation.php'; ?>
    <div class="container mt-4">
        <h1>Kategorie aktualisiert</h1>
        <p>Die Kategorie wurde erfolgreich aktualisiert.</p>
        <a href="categories.php" class="btn btn-primary">Zurück zur Übersicht</a>
    </div>
    <?php include 'include_body_end.php'; ?>
  </body>
</html>