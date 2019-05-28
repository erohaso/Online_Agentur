<!doctype html>
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
                <h1>Kategorie erstellen</h1>
                <form class="mt-4 mb-4" method="POST" action="category_add_thanks.php">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <button type="submit" class="btn btn-primary">Kategorie erstellen</button>
                </form>
            </div>
        </div>
    </div>
    <?php include 'include_body_end.php'; ?>
  </body>
</html>