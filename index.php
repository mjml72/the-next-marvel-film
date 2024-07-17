<?php
    require_once './fetchData.php';
    require_once './Nextfilm.php';

    $data = fetchData();
    $film = new NextFilm($data->title, $data->days_until, $data->release_date,
            $data->type, $data->following_production->title, $data->poster_url);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>The next Marvel Film</title>
</head>
<body>
    <div class="container">
        <div class="film-container">
            <h3>When is the next Marvel film?</h3>
            
            <h5><?php echo $film->title;?> releases in <?php echo $film->days;?> days!</h5>
            
            <p>Release Date: <?php echo $film->release;?></p>
            <p>Procuction type: <?php echo $film->type?></p>
            <p>Next production: <?php echo $film->following_production;?></p>
            
            <img src="<?php echo $film->poster;?>" alt="Film Poster of <?php echo $film->title?>">
        </div>
    </div>
</body>
</html>




