
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Example Render</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">La meva botiga</a>

                <div class="navbar-nav">
                    <a class="nav-link" href="<?= '/../index.php' ?>">Products</a>
                    <a class="nav-link" href="#">Categories</a>
                </div>
            </div>
        </nav>
    </header>
    <main><?= $content ?></main>
    <footer>
        <hr>
        <div class="container text-center">
                <p>Public layout · 2026</p>
        </div>
    </footer>
</body>

</html>