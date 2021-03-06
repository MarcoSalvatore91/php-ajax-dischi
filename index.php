<?php

include 'api/data/discs.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Dischi</title>
</head>

<body>

    <header>

        <img src="img/unnamed.png" alt="logo">

    </header>

    <main>
        <section>
            <div class="section-discs row">
                <?php foreach ($database as $discs) : ?>
                    <div class="discs col-2">
                        <img src="<?= $discs['poster'] ?>" alt="<?= $discs['title'] ?>">
                        <div class="info">
                            <h5 class="text-white"><?= $discs['title'] ?></h5>
                            <span class="grey"><?= $discs['author'] ?></span><br>
                            <span class="grey"><?= $discs['year'] ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <footer></footer>

</body>

</html>