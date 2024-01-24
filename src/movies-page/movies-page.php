
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
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Fantasy</a></li>
                            <li><a href="#">Thriller</a></li>
                            <li><a href="#">Comedy</a></li>
                            <li><a href="#">Drama</a></li>
                            <li><a href="#">Sci-fi</a></li>
                            <li><a href="#">Horror</a></li>
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
                            <input type="radio" value="option4">
                            <label for="#">Movies I Haven't Seen</label>
                        </div>
    
                        <div class="filter-box">
                            <input type="radio" value="option5">
                            <label for="#">Ongoing</label>
                        </div>
    
                        <div class="filter-box">
                            <input type="radio" value="option6">
                            <label for="#">Finished</label>
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
                    <div class="img">
                        <a href="/src/movie-description/movie.html"><img src="/xampp/htdocs/Web-Programim/src/imgs/movies/Oppenheimer-movie.jpg" alt=""></a>
                        <p>Oppenheimer</p>
                    </div>


                    <div class="img">
                        <a href="#"><img src="/src/imgs/movies/4-4113_star_wars_movie_poster_rey_ma.jpg" alt=""></a>
                        <p>Star Wars: The Last Jedi</p>
                    </div>


                    <div class="img">
                        <a href="#"><img src="/src/imgs/movies/1131w-rLty9dwhGG4.webp" alt=""></a>
                        <p>Wood</p>
                    </div>


                    <div class="img">
                        <a href="#"><img src="/src/imgs/movies/71KPOvu-hOL._AC_UF894,1000_QL80_.jpg" alt=""></a>
                        <p>The Joker</p>
                    </div>



                    <div class="img">
                        <a href="#"><img src="/src/imgs/movies/black-panther-web.jpg" alt=""></a>
                        <p>Black Panther</p>
                    </div>


                    <div class="img">
                        <a href="#"><img src="/src/imgs/movies/Elemental-Fandango-Character-Poster.jpg" alt=""></a>
                        <p>Elemental</p>
                    </div>


                    <div class="img">
                        <a href="#"><img src="/src/imgs/movies/images.jpg" alt=""></a>
                        <p>1917</p>
                    </div>

                    <div class="img">
                        <a href="#"><img src="/src/imgs/movies/KillersFlowerMoon_Poster_2023.jpg" alt=""></a>
                        <p>Killers of the FlowerMoon</p>
                    </div>

                    <div class="img">
                        <a href="#"><img src="/src/imgs/movies/spiderman-709x1024.webp" alt=""></a>
                        <p>Accross the Spider-verse</p>
                    </div>

                    <div class="img">
                        <a href="#"><img src="/src/imgs/movies/barbie.png" alt=""></a>
                        <p>Barbie</p>
                    </div>
                </div>
            </div>
          </div>
        
      </div>









         <!--Footer-->
         <?php include '/xampp/htdocs/Web-Programim/phpGlobal/footer.php';?>



      
         <!-- SEARCH BAR  -->
    <script src="/Web-Programim/src/searchbar.js"></script>
</body>
</html>