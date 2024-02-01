<?php

if (isset($_GET['id'])) {
  $movieId = $_GET['id'];

  $movieDetailsURL = "https://api.themoviedb.org/3/movie/{$movieId}?api_key=9a23cb65445bdb0713ad45e54d8b7096";
  $response = file_get_contents($movieDetailsURL);
  $movieDetails = json_decode($response, true);

  $title = $movieDetails['title'];
  $description = $movieDetails['overview'];
  $genres = $movieDetails['genres']; 
  $voteCount = $movieDetails['vote_count'];
  $originCountry = $movieDetails['original_language'];
  $posterPath = $movieDetails['poster_path'];
  $voteAverage = $movieDetails['vote_average'];
  

  // Extracting genre names from the genres array
  $genreNames = array_map(function($genre) {
      return $genre['name'];
  }, $genres);

  $genresString = implode(', ', $genreNames);

  // Fetch trailer videos
  $videosURL = "https://api.themoviedb.org/3/movie/{$movieId}/videos?api_key=9a23cb65445bdb0713ad45e54d8b7096";
  $videosResponse = file_get_contents($videosURL);
  $videosData = json_decode($videosResponse, true);

  $trailers = [];

  // Filter for trailers only
  foreach ($videosData['results'] as $video) {
      if ($video['type'] === 'Trailer') {
          $trailers[] = $video;
      }
  }
} else {
  echo 'Failed!';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="movieStyles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    
    <!-- FONTSs -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jolly-Lodger">
</head>
<body>

    <!-- HEADER PHP  -->
    <?php include '/xampp/htdocs/Web-Programim/phpGlobal/header.php';?>




      <div class="movie">
        <div class="container">
            <div class="poster">
                <img src="https://image.tmdb.org/t/p/w500<?= $posterPath ?>" alt="<?= $title ?>">
            </div>

            <div class="movie-details">
                <div class="movie-title">
                    <h2><?= $title ?></h2>
                    <p><?= $genresString ?></p>
                </div>


                
                <div class="movie-buttons">
                    <ul class="button-list">
                        <li> 
                            <a href="">&#43;</a>
                        </li>


                        <li> 
                            <a href="">&#9829;</a>
                        </li>


                        <li> 
                            <a href="">&#x1F516;</a>
                        </li>


                        <li>
            <?php
            if (!empty($trailers)) {
                $firstTrailerKey = $trailers[0]['key'];
                echo "<a href='https://www.youtube.com/watch?v={$firstTrailerKey}' class='trailer' target='_blank'>Play Trailer</a>";
            } else {
                echo "<span>No trailers available</span>";
            }
            ?>
        </li>
                    </ul>
                </div>



                <div class="movie-description">
                    <h3>Overview</h3>
                    <p><?= $description ?></p>
                </div>

                <h3>More Info</h3>
                <div class="credits">
                    <p>Average Rating : <?= $voteAverage ?></p>
                    <p>Vote Count : <?= $voteCount ?></p>
                    <p>Language : <?= $originCountry ?></p>
                </div>
            </div>
          </div>
        </div>



        <div class="reviews">
      

            <div class="container">
              <!-- NAV BAR START -->
              <div class="reviewNavContainer">
                <div class="nav-review">
                  <a href="">New Reviews</a>
                  <a href="">Top Reviews</a>
                </div>
              </div>
      
           
              <!-- NAV BAR END -->
              <div class="reviewBoxContainer">
                <div class="reviewBox">
                  <div class="account-nav">
                    <img src="/src/imgs/icons/account-pfp.jpg" alt="pfp" style="height: 30px;">
                    <p id='account' style="display: inline;">Account Name</p>
                  </div>
        
                  <div class="review-bottom">
                    <p>Lorem ipsum dolor sit.</p>
                    <button><i class="fa fa-thumbs-up"></i></button>
                    <button><i class="fa fa-thumbs-down"></i></button>
                  </div>
                </div>
        
        
        
                <div class="reviewBox">
                  <div class="account-nav">
                    <img src="/src/imgs/icons/account-pfp.jpg" alt="pfp" style="height: 30px;">
                    <p id='account' style="display: inline;">Account Name</p>
                  </div>
        
                  <div class="review-bottom">
                    <p id="reviewText">Lorem ipsum dolor sit.</p>
                    <button><i class="fa fa-thumbs-up"></i></button>
                    <button><i class="fa fa-thumbs-down"></i></button>
                  </div>
                </div>
      
      
      
      
                <div class="reviewBox">
                  <div class="account-nav">
                    <img src="/src/imgs/icons/account-pfp.jpg" alt="pfp" style="height: 30px;">
                    <p id='account' style="display: inline;">Account Name</p>
                  </div>
        
                  <div class="review-bottom">
                    <p id="reviewText">Lorem ipsum dolor sit.</p>
                    <button><i class="fa fa-thumbs-up"></i></button>
                    <button><i class="fa fa-thumbs-down"></i></button>
                  </div>
                </div>
      
      
      
      
                <div class="reviewBox">
                  <div class="account-nav">
                    <img src="/src/imgs/icons/account-pfp.jpg" alt="pfp" style="height: 30px;">
                    <p id='account' style="display: inline;">Account Name</p>
                  </div>
        
                  <div class="review-bottom">
                    <p id="reviewText">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, nostrum!</p>
                    <button><i class="fa fa-thumbs-up"></i></button>
                    <button><i class="fa fa-thumbs-down"></i></button>
                  </div>
                </div>


                <div class="reviewBox">
                  <div class="account-nav">
                    <img src="/src/imgs/icons/account-pfp.jpg" alt="pfp" style="height: 30px;">
                    <p id='account' style="display: inline;">Account Name</p>
                  </div>
        
                  <div class="review-bottom">
                    <p id="reviewText">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, nostrum!</p>
                    <button><i class="fa fa-thumbs-up"></i></button>
                    <button><i class="fa fa-thumbs-down"></i></button>
                  </div>
                </div>


                <div class="reviewBox">
                  <div class="account-nav">
                    <img src="/src/imgs/icons/account-pfp.jpg" alt="pfp" style="height: 30px;">
                    <p id='account' style="display: inline;">Account Name</p>
                  </div>
        
                  <div class="review-bottom">
                    <p id="reviewText">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, nostrum!</p>
                    <button><i class="fa fa-thumbs-up"></i></button>
                    <button><i class="fa fa-thumbs-down"></i></button>
                  </div>
                </div>
        
              </div>
              
            </div>
          </div>





        <!--FOOTER PHP-->
        <?php include '/xampp/htdocs/Web-Programim/phpGlobal/footer.php';?>

     <!-- SEARCH BAR -->
  <script src="/Web-Programim/jsGlobal/searchbar.js"></script>


  
<!-- Hamburger Menu Script-->
<script src="/Web-Programim/jsGlobal/hamburger-menu.js"></script>
</body>
</html>