<?php

$apiKey = '9a23cb65445bdb0713ad45e54d8b7096';

$apiUrl = "https://api.themoviedb.org/3/tv/popular?api_key={$apiKey}";
$response = file_get_contents($apiUrl);
$tvShows = json_decode($response, true)['results'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="tvshow-style.css">
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
                <?php foreach ($tvShows as $tvshow) : ?>
                     <div class="img" data-genre-ids="<?= implode(',', $tvshow['genre_ids']) ?>">
                         <img src="https://image.tmdb.org/t/p/w500<?= $tvshow['poster_path'] ?>" alt="<?= $tvshow['name'] ?>">
                         <p class="movie-title" style="width:220px;"><?= $tvshow['name'] ?></p>
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



      
         <!-- SEARCH BAR  -->
    <script src="/Web-Programim/src/searchbar.js"></script>


    <!-- HAMBURGER MENU  -->
    <script src="/Web-Programim/src/hamburger-menu.js"></script>



    <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get all genre links
        var genreLinks = document.querySelectorAll('.genre-link');

        // Get all TV show elements
        var tvShowElements = document.querySelectorAll('.img');

        // Add click event listener to each genre link
        genreLinks.forEach(function (link) {
            link.addEventListener('click', function (event) {
                // Prevent default link behavior
                event.preventDefault();

                // Get the selected genre
                var selectedGenre = link.getAttribute('data-genre');

                // Show/hide TV shows based on the selected genre
                tvShowElements.forEach(function (tvShow) {
                    var tvShowGenres = tvShow.getAttribute('data-genre-ids');
                    if (tvShowGenres.includes(selectedGenre)) {
                        tvShow.style.display = 'block';
                    } else {
                        tvShow.style.display = 'none';
                    }
                });
            });
        });
    });
</script>

</body>
</html>