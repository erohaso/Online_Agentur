<?php 

include 'include_database.php';

$sql = 'SELECT * FROM customers WHERE id = ' . mysqli_real_escape_string($link, $_GET['id']);

$result = mysqli_query($link, $sql);

$row = mysqli_fetch_assoc($result);

$sql = 'SELECT * FROM categories';

$result = mysqli_query($link, $sql);

mysqli_close($link);

?><!doctype html>
<html lang="de">
  <head>
    <?php include 'include_head.php'; ?>
    <title>Kunden bearbeiten - News-System</title>
  </head>
  <body>
    <?php include 'include_navigation.php'; ?>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1>Kunden bearbeiten</h1>
                <form class="mt-4 mb-4" method="POST" action="customers_edit_thanks.php?id=<?php echo $row['id'] ?>">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="title" name="name" value="<?php echo $row['name'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="rechtsform">Rechtsform</label>
                        <input type="text" class="form-control" id="title" name="rechtsform" value="<?php echo $row['rechtsform'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="unterzeile">Unterzeile</label>
                        <input type="text" class="form-control" id="title" name="unterzeile" value="<?php echo $row['unterzeile'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="kurztext">Kurztext</label>
                        <input type="text" class="form-control" id="title" name="kurztext" value="<?php echo $row['kurztext'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="profil">Profil</label>
                        <textarea class="form-control" id="text" rows="6" name="profil"><?php echo $row['profil'] ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="category_id">Kategorie</label>
                        <select class="form-control" name="kategorie" required>
                            <option value="">Bitte wählen</option>
                            <?php while ($rowCat = mysqli_fetch_assoc($result)) { ?>
                            <option value="<?php echo $rowCat['id']; ?>"<?php if ($rowCat['id'] == $row['category_id']) { ?> selected<?php } ?>><?php echo $rowCat['name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="status" name="status" value="1"<?php if ($row['status'] == 1) { ?> checked<?php } ?>>
                        <label class="form-check-label" for="status">Aktiviert</label>
                    </div>
                    <button type="submit" class="btn btn-primary">News aktualisieren</button>
                </form>
            </div>
        </div>
    </div>
    <?php include 'include_body_end.php'; ?>
  </body>
</html>