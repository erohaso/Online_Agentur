<?php 

include 'include_database.php';

$sql = 'SELECT * FROM categories';

$result = mysqli_query($link, $sql);

mysqli_close($link);

?><!doctype html>
<html lang="de">
  <head>
    <?php include 'include_head.php'; ?>
    <title>Kategorien - News-System</title>
  </head>
  <body>
    <?php include 'include_navigation.php'; ?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm">
                <h1>Kategorien</h1>
            </div>
            <div class="col-sm mt-3">
                <a href="category_add.php" class="btn btn-primary float-right">Kategorie erstellen</a>
            </div>
        </div>
        <table class="table table-striped mt-3">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col"><div class="float-right">Aktionen</div></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <th scope="row"><?php echo $row['id']; ?></th>
                    <td><?php echo $row['name']; ?></td>
                    <td>
                        <div class="float-right">
                            <a class="btn btn-secondary btn-sm" href="category_edit.php?id=<?php echo $row['id']; ?>" role="button">Bearbeiten</a>
                            <a class="btn btn-danger btn-sm" href="category_delete.php?id=<?php echo $row['id']; ?>" role="button">Löschen</a>
                        </div>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php include 'include_body_end.php'; ?>
  </body>
</html>