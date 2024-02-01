<?php 

$trendingURL = 'https://api.themoviedb.org/3/trending/movie/week?api_key=9a23cb65445bdb0713ad45e54d8b7096';


// GET API REQUEST (file_get_contents)
$response = file_get_contents($trendingURL);


// DECODE JSON 

$data = json_decode($response, true);


$trendingMovies = [];
// OUTPUT 
if(isset($data['results']) && !empty($data['results'])) {
    $trendingMovies = $data['results'];
}
else {
    echo 'Failed to retrieve data!';
}


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

        
        <?php include 'api-call.php';?>
         
          <div class="navigation">
            <div class="btn" id="prevBtn"><</div>
            <div class="btn" id="nextBtn">></div>
          </div>

        
  
  
        </div>
      </div>
       <!-- MAIN HEADER (MOVIES , TRENDING SECTION) -->

    </div>











  <!-- TOP 100 SECTION START -->


  <div class="top100">
  <p id="paragraph">Trending</p>
  <div class="container">
    <?php foreach ($trendingMovies as $movie) : ?>
      <div class="top100-img">
        <a href=""><img src="https://image.tmdb.org/t/p/w500<?= $movie['poster_path'] ?>" alt="<?= $movie['title'] ?>"></a>
        <h2><?= $movie['title'] ?></h2>
      </div>
    <?php endforeach; ?>
  </div>
</div>
  
    <!-- TOP 100 SECTION END -->


   
    <!-- REVIEWS SECTION START -->

    <div class="reviews">
      
      
      <div class="container">
        
        <div class="poster-review">
          <img src="/src/imgs/icons/barbie-transparent.png" alt="barbie">
        </div>

        


        <div class="review-container">
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
    
    <div class="news">
      <div class="container">
        <div class="left-side-news">
        
          <img src="/src/imgs/news/1246139840.webp" alt="news1">
          <div class="image-text">
            <h3>News 1</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio perferendis quia amet doloribus fugiat dolores, repudiandae voluptates omnis nemo velit architecto eveniet commodi beatae quibusdam modi officiis laudantium temporibus cum delectus. Quos vitae voluptates pariatur facilis! Cupiditate neque ullam quasi!</p>
          </div>  
        </div>

        <div class="right-side-news">
          <div class="news-holder">

            <img src="/src/imgs/news/799E0673-DA74-4903-AD0D-47F0B828B74A.jpeg" alt="news2">
            <div class="image-text-right">
              <h3>News 2</h3>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis, aperiam.</p>
            </div>  
          </div>


          <div class="news-holder">
            
            <img src="/src/imgs/news/actor_roundtable_bts_a.webp" alt="news3">
            <div class="image-text-right">
              <h3>News 3</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores, optio.</p>
            </div>  
          </div>


          <div class="news-holder">
            
            <img src="/src/imgs/news/Andrew-Garfield-Zendaya1.jpg" alt="news4">
            <div class="image-text-right">
              <h3>News 4</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, beatae!</p>
            </div>  
          </div>

        </div>
      </div>
    </div>





    <!--FOOTER PHP-->
    <?php include '/xampp/htdocs/Web-Programim/phpGlobal/footer.php';?>

  



  <!-- SEARCH BAR -->
  <script src="searchbar.js"></script>


  
    <!-- Hamburger Menu Script-->
    <script src="hamburger-menu.js"></script>


  

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