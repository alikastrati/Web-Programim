<?php 
session_start();

require_once 'APIRequest.php';

$apiKeyU = '9a23cb65445bdb0713ad45e54d8b7096';
$apiRequest = new APIRequest($apiKeyU);

$trendingMovies = $apiRequest->getTrendingMovies();

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" >
    <title>Home Page</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  

    <!-- FONTSs -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jolly-Lodger">
</head>
<body>  
    
      
    <!--HEADER PHP-->
    <?php include '/xampp/htdocs/Web-Programim/phpGlobal/header.php';?>
    
 
   
      
    <!-- MAIN HEADER (MOVIES , TRENDING SECTION) -->
    <div class="header-home">
  
      
      
      <div class="imgContainer">
        <div class="img-slider">

        <?php $sliderMovies = $apiRequest->getSliderMovies(); ?>
         
          <div class="navigation">
            <div class="btn" id="prevBtn"><</div>
            <div class="btn" id="nextBtn">></div>
          </div>

        
  
  
        </div>
      </div>
       <!-- MAIN HEADER (MOVIES , TRENDING SECTION) -->

    </div>











  <!-- TOP 100 SECTION START -->


  <!-- TOP 100 SECTION START -->
<div class="top100">
  <p id="paragraph">Trending</p>
  <div class="maincontainer">
  <div class="container">
    <?php foreach ($trendingMovies as $movie) : ?>
      <div class="top100-img">
        <a href="/Web-Programim/src/movie-description/movie.php?type=movie&id=<?= $movie['id'] ?>">
          <img src="https://image.tmdb.org/t/p/w500<?= $movie['poster_path'] ?>" alt="<?= $movie['title'] ?>">
        </a>
        <h2><?= $movie['title'] ?></h2>
      </div>
    <?php endforeach; ?>
  </div>
  </div>
  
</div>
<!-- TOP 100 SECTION END -->
  


   
    <!-- REVIEWS SECTION START -->

    <div class="reviews">
      
      
      <div class="container">
        
        <div class="poster-review">
          <img src="/Web-Programim/src/imgs/icons/barbie-transparent.png" alt="barbie">
        </div>

        


        <div class="review-container">
          <!-- NAV BAR START -->
          <div class="reviewNavContainer">
            <div class="nav-review">
              <a href="">New Reviews</a>
            </div>
          </div>
  
          
  
       
          <!-- NAV BAR END -->
  
        
  
          
          <div class="reviewBoxContainer">
          <?php
                require_once '/xampp/htdocs/Web-Programim/phpDatabase/Database.php';
                require_once '/xampp/htdocs/Web-Programim/phpDatabase/Review.php';
                require_once '/xampp/htdocs/Web-Programim/phpDatabase/User.php';

                $db = new Database();
                $review = new Review($db);
                $user = new User($db);


                // Get user reviews
                $userReviews = $review->getAllReviews(10);


                // Display user reviews
                foreach ($userReviews as $userReview) {
                    echo '<div class="reviewBox">';
                    echo '<div class="account-nav">';
                    echo '<img src="/src/imgs/icons/account-pfp.jpg" alt="pfp" style="height: 30px;">';
                    
                    // Display the username
                    echo '<p id="account" style="display: inline;">' . $userReview['username']  . '</p>';
                    
                    echo '</div>';
                    echo '<div class="review-bottom">';
                    echo '<p id="reviewText">' . $userReview['comment'] . '</p>';
                    echo '<button><i class="fa fa-thumbs-up"></i></button>';
                    echo '<button><i class="fa fa-thumbs-down"></i></button>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
    
  
          </div>
        </div>
        
        
      </div>
    </div>




    
      <!-- JOIN US SECTION -->

      <div class="join-section">
        <div class="container">
          <div class="info-joinUs">
            <h2>Join <span style="display: inline; font-family: 'Kanit';">Us</span></h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab, quibusdam?</p>
            <a href="/register-login/RegistationForm.html">Register Now!</a>
          </div>


          <div class="list-join">
            <ul class="inner-join-list">
              <li>Keep Track of your favorite Movies/TV Shows</li>
              <li>Get news about your favorite Actors and Actresses </li>
              <li>Find your new favorite Movie/TV Show</li>
            </ul>

          </div>


        </div>
      </div>
  









    <!-- MOVIE/TV SHOWS NEWS  -->
    <?php
// Assuming you have a method in your Database class to execute SELECT queries
$result = $db->getDBConnection()->query("SELECT * FROM news");

if ($result->num_rows > 0) {
    echo '<div class="news">';
    echo '<div class="container">';
    while ($row = $result->fetch_assoc()) {
        echo '<div class="news-holder">';
        echo '<img src="' . $row["image_path"] . '" alt="' . $row["title"] . '">';
        echo '<div class="image-text-right">';
        echo '<h3>' . $row["title"] . '</h3>';
        echo '<p>' . $row["content"] . '</p>';
        echo '</div>';
        echo '</div>';
    }
    echo '</div>';
    echo '</div>';
} else {
    echo '<p>No news available.</p>';
}
?>





    <!--FOOTER PHP-->
    <?php include '/xampp/htdocs/Web-Programim/phpGlobal/footer.php';?>

  



  <!-- SEARCH BAR -->
  <script src="/Web-Programim/jsGlobal/searchbar.js"></script>


  
    <!-- Hamburger Menu Script-->
    <script src="/Web-Programim/jsGlobal/hamburger-menu.js"></script>

        <!-- DISPLAY  ACCOUNT -->
    <script src="/Web-Programim/jsGlobal/displayacc.js"></script>


  

  <!-- IMAGE SLIDER  -->
  <script type="text/javascript">
    var slides = document.querySelectorAll('.slide');
    var nextBtn = document.getElementById('nextBtn');
    var prevBtn = document.getElementById('prevBtn');
    let currentSlide = 0;


    // Current Slide
    function showSlide(n) {
      slides.forEach((slide) => {
        slide.classList.remove('active');
      });

      currentSlide += n;

      if (currentSlide >= slides.length) {
        currentSlide = 0;
      }   
      else if (currentSlide < 0) {
        currentSlide = slides.length - 1;
      }

      slides[currentSlide].classList.add('active');
    }

    function nextSlide() {
      showSlide(1);
    }

    function prevSlide() {
      showSlide(-1);
    }

  // Start the automatic sliding
    var repeatInterval = setInterval(nextSlide, 8000);

  // Add event listeners to buttons
    nextBtn.addEventListener('click', () => {
      clearInterval(repeatInterval); 
      nextSlide();
      repeatInterval = setInterval(nextSlide, 3000); 
    });

    prevBtn.addEventListener('click', () => {
      clearInterval(repeatInterval); 
      prevSlide();
      repeatInterval = setInterval(nextSlide, 3000);
    });

  </script>




   


  


    
    



</body>

</html>