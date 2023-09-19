<?php
  require_once __DIR__ . '/models/Movie.php';
  $movies = json_decode(file_get_contents('./db/db-movies.json')); 

  //$movie1 = New Movie('Titolo', 'Genere', 'Descrizione', 'Inglese', '10-12-2012');
?>


<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <!-- CUSTOM STYLE SHEET FILE LINK -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- THIRD PARTY LIBRARIES -->
    <!-- BOOTSTRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- FONTAWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- STANDARD FAVICON TO AVOID CONSOLE ERRORS ON FIREFOX -->
    <link rel="icon"type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
    <!-- VUE CDN -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- LUXON CDN -->
    <script src="https://cdn.jsdelivr.net/npm/luxon@3.3.0/build/global/luxon.min.js"></script>
    <!-- AXIOS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  </head>
  <body>
    <div class="container text-center mt-5">
      <h1 class="mb-3 fw-bold">Movies</h1>
      <div class="row w-100 d-flex justify-content-between g-3">
        <?php
          foreach ($movies as $movie){?>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card h-100">
                <img src="<?php echo $movie->poster ?>" class="card-img-top" alt="<?php echo $movie->title ?>" title="<?php echo $movie->title ?>">
                <div class="card-body">
                  <p class="card-text"><?php echo $movie->genre ?></p>
                  <p class="card-text"><?php echo $movie->originalLang ?></p>
                  <p class="card-text"><?php echo $movie->releaseDate?></p>
                  <p class="card-text fw-bold fs-2"><?php echo $movie->title ?></p>
                  <p class="card-text"><?php echo $movie->description ?></p>
                </div>
              </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </body>
  <script src="./js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>