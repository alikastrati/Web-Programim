<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TV Shows</title>
    <link rel="stylesheet" href="tvshows-styles.css">
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
                            <label for="#">New TV Shows</label>
                        </div>
        
                        <div class="filter-box">
                            <input type="radio" value="option4">
                            <label for="#">TV Shows I Haven't Seen</label>
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
                        <a href="/src/movie-description/movie.html"><img src="/src/imgs/tv-shows/36719412-a1e3-4b7f-8ce7-f4c3b8bc83b0.jpg" alt=""></a>
                        <p>Snowfall</p>
                    </div>


                    <div class="img">
                        <a href="#"><img src="/src/imgs/tv-shows/71kCAk7HGdL._AC_UF350,350_QL50_.jpg" alt=""></a>
                        <p>Game of Thrones</p>
                    </div>


                    <div class="img">
                        <a href="#"><img src="/src/imgs/tv-shows/main-qimg-221c73af36cacd8e32e6d447f669da9e-lq.jpg" alt=""></a>
                        <p>The Big Bang Theory</p>
                    </div>


                    <div class="img">
                        <a href="#"><img src="/src/imgs/tv-shows/mL2463_1024x1024.webp" alt=""></a>
                        <p>The Chi</p>
                    </div>



                    <div class="img">
                        <a href="#"><img src="/src/imgs/tv-shows/QGM6_1_c34d7d64-85a1-412d-ad5f-18e2b38ee366.jpg" alt=""></a>
                        <p>The Queens Gambit</p>
                    </div>


                    <div class="img">
                        <a href="#"><img src="/src/imgs/tv-shows/watchmen_ver3.webp" alt=""></a>
                        <p>Watchmen</p>
                    </div>


                    <div class="img">
                        <a href="#"><img src="/src/imgs/tv-shows/71keldYuW+L.jpg" alt=""></a>
                        <p>Breaking Bad</p>
                    </div>

                    <div class="img">
                        <a href="#"><img src="/src/imgs/tv-shows/s-l1600.jpg" alt=""></a>
                        <p>The Boys</p>
                    </div>

                    <div class="img">
                        <a href="#"><img src="/src/imgs/tv-shows/bloodhounds.jpg" alt=""></a>
                        <p>Bloodhounds</p>
                    </div>

                    <div class="img">
                        <a href="#"><img src="/src/imgs/tv-shows/invincible.webp" alt=""></a>
                        <p>Invincible</p>
                    </div>
                </div>
            </div>
          </div>
        
      </div>




         <!--FOOTER PHP-->
         <?php include '/xampp/htdocs/Web-Programim/phpGlobal/footer.php';?>




    <!-- SEARCH BAR  -->
    <script src="/Web-Programim/src/searchbar.js"></script>


    <!-- HAMBURGER MENU  -->
    <script src="/Web-Programim/src/hamburger-menu.js"></script>
</body>
</html>