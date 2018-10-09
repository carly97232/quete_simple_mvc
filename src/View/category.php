<!doctype html>
<html lang="fr">
<head>MVC3</head>


<!-- affichage des items récupérés par la requête SQL -->
<body>
<section>
    <h1>Categories</h1>
    <ul>
        <?php foreach ($categories as $category) : ?>
            <li><?= $category['title'] ?></li>
        <?php endforeach ?>
    </ul>
</section>
</body>
</html>