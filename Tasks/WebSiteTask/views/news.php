<!doctype html>
<html lang="bg">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Технологични новини</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container mt-4">
    <h3 class="text-center mb-4 bg-primary text-white p-2">Tech News</h3>
    <div class="row g-4">
        <?php foreach ($news as $article): ?>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="<?= $article->urlToImage ?: 'https://via.placeholder.com/300x200?text=No+Image' ?>" class="card-img-top" alt="News Image">
                    <div class="card-body d-flex flex-column">
                        <h6 class="card-title"><?= $article->title ?></h6>
                        <p class="card-text">Source: <?= $article->source ?></p>
                        <a href="<?= $article->url ?>" class="btn btn-primary mt-auto" target="_blank">Read More</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

</body>

</html>