<?php


// Replace 'YOUR_API_KEY' with your actual TMDb API key
$apiKey = '9a23cb65445bdb0713ad45e54d8b7096';

// Fetch a list of popular movies from TMDb API
$apiUrl = "https://api.themoviedb.org/3/trending/movie/week?api_key=9a23cb65445bdb0713ad45e54d8b7096";
$response = file_get_contents($apiUrl);
$movies = json_decode($response, true)['results'];



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="movies-styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <!-- FONTSs -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jolly-Lodger">
</head>
<body>
    
    <!-- HEADER PHP  -->
    <?php include '/xampp/htdocs/Web-Programim/phpGlobal/header.php';?>
    

      
      <div class="mainContainer">
        <div class="leftSection">
            <div class="container">
                <div class="genres">
                    <h3>Genre</h3>
                    <div class="genre-list">
                        <ul class="listUnordered">
                            <li><a class="genre-link" data-genre="28">Action</a></li>
                            <li><a class="genre-link" data-genre="14">Fantasy</a></li>
                            <li><a class="genre-link" data-genre="53">Thriller</a></li>
                            <li><a class="genre-link" data-genre="35">Comedy</a></li>
                            <li><a class="genre-link" data-genre="18">Drama</a></li>
                            <li><a class="genre-link" data-genre="878">Sci-fi</a></li>
                            <li><a class="genre-link" data-genre="27">Horror</a></li>
                        </ul>
                    </div>
                </div>
    
    
    
                <div class="filters">
                    <h3>Filter</h3>
                    <form action="">
                        <div class="filter-box">
                            <input type="radio" value="option1">
                            <label for="#">Everything</label>
                        </div>
                        
                        <div class="filter-box">
                            <input type="radio" value="id2">
                            <label for="#">New Movies</label>
                        </div>
        
    
                        <div class="filter-box">
                            <input type="radio" value="option5">
                            <label for="#">Top Rated</label>
                        </div>
    
                        <div class="filter-box">
                            <input type="radio" value="option6">
                            <label for="#">Popular</label>
                        </div>
        
                    </form>
                    
    
                    <div class="release-dates">
                        <div class="allReleases">
                            
                            <input type="checkbox" name="" id="">
                            <label for="#">Search all Releases?</label>
                        </div>
    
                        <div class="dates">
                            <div class="from">
                                <label for="">From</label>
                                <input type="date" name="" id="">
                            </div>
    
                            <div class="to">
                                <label for="">To</label>
                                <input type="date" name="" id="">
                            </div>


                            
                        </div>
                    </div>
                </div>
    
    
                
            </div>
          </div>






    
          <div class="movies-list">
                <div class="container">
                  <div class="images-row">
                    <?php foreach($movies as $movie) : ?>
                      <div class="img" data-genre="<?= implode(', ', $movie['genre_ids']) ?>">
                        <a href="/Web-Programim/src/movie-description/movie.php?type=movie&id=<?= $movie['id'] ?>">
                            <img src="https://image.tmdb.org/t/p/w500<?= $movie['poster_path'] ?>" alt="<?= $movie['title'] ?>">
                        </a>
                        <p style="width:220px;"><?= $movie['title'] ?></p>
                        <div class="overlay">
                        <button class="add-to-watchlist" title="Add to Watchlist">+</button>

                    </div>
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>
        </div>
        
      </div>









         <!--Footer-->
         <?php include '/xampp/htdocs/Web-Programim/phpGlobal/footer.php';?>



      
     <!-- SEARCH BAR -->
  <script src="/Web-Programim/jsGlobal/searchbar.js"></script>


  
    <!-- Hamburger Menu Script-->
    <script src="/Web-Programim/jsGlobal/hamburger-menu.js"></script>



   <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Get all genre links
            var genreLinks = document.querySelectorAll('.genre-link');

            // Get all movie elements
            var movieElements = document.querySelectorAll('.img');

            // Add click event listener to each genre link
            genreLinks.forEach(function (link) {
                link.addEventListener('click', function (event) {
                    // Prevent default link behavior
                    event.preventDefault();

                    // Get the selected genre
                    var selectedGenre = link.getAttribute('data-genre');

                    // Show/hide movies based on the selected genre
                    movieElements.forEach(function (movie) {
                        var movieGenres = movie.getAttribute('data-genre');
                        if (movieGenres.includes(selectedGenre)) {
                            movie.style.display = 'block';
                        } else {
                            movie.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>