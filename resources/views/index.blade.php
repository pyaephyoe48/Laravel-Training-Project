<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Article List</title>
</head>

<body>
    <h1>PHP Article List</h1>
    <ul>
        <?php foreach ($articles as $article) : ?>
            <li><?php echo $article['title'] ?></li>
        <?php endforeach ?>
    </ul>

    <h1>Blade Article List</h1>
    <ul>
        @foreach($articles as $article)
        <li>{{ $article['title'] }}</li>
        @endforeach
    </ul>


</body>

</html>