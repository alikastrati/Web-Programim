<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" >
    <title>Home Page</title>
    <link rel="stylesheet" href="user-styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  

    <!-- FONTSs -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jolly-Lodger">
</head>
<body>  
    
      
      <!-- NAVBAR -->
      <?php include '/xampp/htdocs/Web-Programim/phpGlobal/headerAdmin.php';?>
    
 
   
      
    <!-- MAIN HEADER (MOVIES , TRENDING SECTION) -->
    <div class="header-home">
    
    
     
      
      
      <div class="imgContainer">
        <div class="img-slider">

          <div class="slide active">
            <img src="/src/imgs/nav/kung-fu-panda-2-ep-dreamworks-animation.jpg" alt="movie1">
            <div class="info">
              <h2>Kung Fu Panda</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est itaque similique atque ipsum sint.</p>
              <div class="buttons">
                <button><a href="https://www.youtube.com/watch?v=NRc-ze7Wrxw">Watch Trailer</a></button>
                <button id="watchBtn">Add to Watch List</button>
              </div>
            </div>
          </div>
  
  
          <div class="slide">
            <img src="/src/imgs/nav/SV2_mpp0420.1010_RT_sb_v1-copy.jpg" alt="movie2">
            <div class="info">
              <h2>Spiderman Accross The SpiderVerse</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est itaque similique atque ipsum sint.</p>
              <div class="buttons">
                <button><a href="https://www.youtube.com/watch?v=cqGjhVJWtEg&pp=ygUqc3BpZGVyIG1hbiBhY3Jvc3MgdGhlIHNwaWRlciB2ZXJzZSB0cmFpbGVy">Watch Trailer</a></button>
                <button id="watchBtn">Add to Watch List</button>
              </div>

            </div>
          </div>

          <div class="slide">
            <img src="https://res.cloudinary.com/ybmedia/image/upload/c_crop,h_748,w_1332,x_3,y_132/c_fill,f_auto,h_900,q_auto,w_1600/v1/m/b/d/bdc65a884c00ef4c925cadba059e7bc08a30b39c/20-facts-might-know-guardians-galaxy.jpg" alt="">
            <div class="info">
              <h2>Guardians of The Galaxy</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est itaque similique atque ipsum sint.</p>
              <div class="buttons">
                <button><a href="https://www.youtube.com/watch?v=u3V5KDHRQvk&pp=ygUhZ3VhcmRpYW5zIG9mIHRoZSBnYWxheHkgMyB0cmFpbGVy">Watch Trailer</a></button>
                <button id="watchBtn">Add to Watch List</button>
              </div>

            </div>
          </div>


          <div class="slide">
            <img src="https://www.hollywoodreporter.com/wp-content/uploads/2022/12/Cillian-Murphy-Oppenheimer-Still-Publicity-H-2022.jpg?w=1296" alt="movie3">
            <div class="info">
              <h2>Oppenheimer</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est itaque similique atque ipsum sint.</p>
              <div class="buttons">
                <button><a href="https://www.youtube.com/watch?v=uYPbbksJxIg&pp=ygUTb3BwZW5oZWltZXIgdHJhaWxlcg%3D%3D">Watch Trailer</a></button>
                <button id="watchBtn">Add to Watch List</button>
              </div>

            </div>
          </div>


          <div class="slide">
            <img src="https://cdn.mos.cms.futurecdn.net/v7d9BmddPkF6QBqLdkuhK7.jpg" alt="movie4">
            <div class="info">
              <h2>Asteroid City</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est itaque similique atque ipsum sint.</p>
              <div class="buttons">
                <button><a href="https://www.youtube.com/watch?v=9FXCSXuGTF4&pp=ygUQYXN0ZXJvaWQgdHJhaWxlcg%3D%3D">Watch Trailer</a></button>
                <button id="watchBtn">Add to Watch List</button>
              </div>

            </div>
          </div>

          <div class="navigation">
            <div class="btn" id="prevBtn">&#8678;</div>
            <div class="btn" id="nextBtn">&#8680;</div>
          </div>
  
  
  
        </div>
      </div>
       <!-- MAIN HEADER (MOVIES , TRENDING SECTION) -->

    </div>











  <!-- TOP 100 SECTION START -->
  
    <div class="top100">
      <p id="paragraph">Top 100 IMDb</p>
      <div class="container">
        <div class="top100-img">
          <a href=""><img src="/src/imgs/movies/Oppenheimer-movie.jpg" alt="Oppenheimer"></a>
          <h2>Oppenheimer</h2>
        </div>


        <div class="top100-img">
          <a href=""><img src="/src/imgs/movies/black-panther-web.jpg" alt="Black Panther"></a>
          <h2>Black Panther</h2>
        </div>


        <div class="top100-img">
          <a href=""><img src="/src/imgs/movies/KillersFlowerMoon_Poster_2023.jpg" alt="Killers of the Flowermoon"></a>
          <h2>Killers of the Flowermoon</h2>
        </div>

        <div class="top100-img">
          <a href=""><img src="/src/imgs/movies/Elemental-Fandango-Character-Poster.jpg" alt="Elemental"></a>
          <h2>Elemental</h2>
        </div>


        <div class="top100-img">
          <a href="/src/movie-description/movie.html"><img src="/src/imgs/movies/71KPOvu-hOL._AC_UF894,1000_QL80_.jpg" alt="The Joker"></a>
          <h2>The Joker</h2>
        </div>

        <div class="top100-img">
          <a href=""><img src="/src/imgs/movies/everything_everywhere_all_at_once.avif" alt="Everything Everywhere all at Once"></a>
          <h2>Everything Everywhere all at Once</h2>
        </div>

        <div class="top100-img">
          <a href=""><img src="/src/imgs/movies/spiderman-709x1024.webp" alt="Accross the Spider-Verse"></a>
          <h2>Accross the Spider-Verse</h2>
        </div>  

        <div class="top100-img">
          <a href=""><img src="/src/imgs/movies/batman.jpg" alt="The Batman"></a> 
          <h2>The Batman</h2>
        </div>
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



    <!-- FOOTER PHP  -->
    <?php include '/xampp/htdocs/Web-Programim/phpGlobal/footer.php';?>
    

  





<!-- DISPLAY  ACCOUNT -->
<script>
    document.addEventListener('DOMContentLoaded', function(){
    var dropdownBtn = document.querySelector('.dropdown-btn');
    var dropdownMenu = document.querySelector('.dropdown-menu');

    dropdownBtn.addEventListener('click', function() {
        dropdownMenu.style.display = (dropdownMenu.style.display === 'block') ? 'none' : 'block';
    });

    document.addEventListener('click', function (event) {
        if (!event.target.matches('.dropdown-btn')) {
            dropdownMenu.style.display = 'none';
        }
    });
});
</script>




 <!-- SEARCH BAR -->
 <script src="/Web-Programim/jsGlobal/searchbar.js"></script>


  
<!-- Hamburger Menu Script-->
<script src="/Web-Programim/jsGlobal/hamburger-menu.js"></script>

  

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
    var repeatInterval = setInterval(nextSlide, 3000);

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