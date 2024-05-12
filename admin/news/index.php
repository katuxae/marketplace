<?php

include '/OSPanel/domains/marplct/app/controllers/news.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marketplace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/09c228de17.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/assets/css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Montserrat+Alternates&display=swap" rel="stylesheet">
</head>

<body>

    <?php include '/OSPanel/domains/marplct/app/include/header-admin.php'; ?>

    <div class="container">
        <?php include '/OSPanel/domains/marplct/app/include/sidebar-admin.php'; ?>

        <div class="products col-9">
            <div class="button row">
                <a href="/admin/news/create.php" class="col-3 btn btn-success">Add news</a>
                <span class="col-1"></span>
                <a href="/admin/news/index.php" class="col-3 btn btn-warning">Edit news</a>
            </div>
            <div class="row title-table">
                <h2>Управление новостями</h2>
                <div class="col-1">ID</div>
                <div class="col-4">Название</div>
                <div class="col-6">Управление</div>
            </div>
            <?php foreach ($news as $key => $news) : ?>
                <div class="row product">
                    <div class="id col-1"><?= $key + 1; ?></div>
                    <div class="title col-4"><?= $news['title']; ?></div>
                    <div class="red col-2"><a href="">edit</a></div>
                    <div class="del col-2"><a href="">delete</a></div>
                    <?php if ($news['status']) : ?>
                        <div class="status col-2"><a href="">draft</a></div>
                    <?php else : ?>
                        <div class="status col-2"><a href="">done</a></div>
                    <?php endif ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>





    <?php include '/OSPanel/domains/marplct/app/include/footer.php'; ?>
    <!--footer end-->

</body>

</html>