<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Ajax Dischi</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <?php include 'db/database.php' ?>
        
        <main>
            <div class="container">

                <?php 
                foreach ($albums as $album) { ?>
                    <div class="album">
                        <img src="<?= $album['poster']?>">
                        <div class="details">
                            <h3><?= $album["title"] ?></h3>
                            <h4><?= $album["author"] ?></h4>
                            <h5><?= $album["genre"] ?></h5>
                            <h6><?= $album["year"] ?></h6>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </main>
        
    </body>
</html>