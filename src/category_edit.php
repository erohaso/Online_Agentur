<?php

include 'include_database.php';

$sql = 'SELECT * FROM categories WHERE id = ' . mysqli_real_escape_string($link, $_GET['id']);

$result = mysqli_query($link, $sql);

$row = mysqli_fetch_assoc($result);

mysqli_close($link);

?><!doctype html>
<html lang="de">
  <head>
    <?php include 'include_head.php'; ?>
    <title>Kategorie erstellen - News-System</title>
  </head>
  <body>
    <?php include 'include_navigation.php'; ?>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1>Kategorie bearbeiten</h1>
                <form class="mt-4 mb-4" method="POST" action="category_edit_thanks.php?id=<?php echo $row['id'] ?>">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Kategorie aktualisieren</button>
                </form>
            </div>
        </div>
    </div>
    <?php include 'include_body_end.php'; ?>
  </body>
</html>