<?php include_once __DIR__ . '/db/data.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
<header>
    <i class="fab fa-spotify"></i> 
</header>
<main class="p-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xxl-5 g-3">
            <?php foreach ($arr_disc as $disc) { ?>
                <div class="col">
                    <div class="card-disc p-3 text-center">
                        <div class=" container-poster">
                            <img src="<?= $disc['poster'] ?>" alt="<?= $disc['title'] ?>" class="img-fluid">
                        </div>
                        <h2 class="fs-3 m-3"><?= $disc['title'] ?></h2>
                        <h3 class="fs-5 m-0"><?= $disc['author'] ?></h3>
                        <p class="fs-6 m-0"><?= $disc['year'] ?></p>
                    </div>
                </div>
            <?php } ?>    
        </div>
    </div>
</main>
</body>
</html>