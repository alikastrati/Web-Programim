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
                <img src="/src/imgs/movies/Oppenheimer-movie.jpg" alt="">
            </div>

            <div class="movie-details">
                <div class="movie-title">
                    <h2>Oppenheimer</h2>
                    <p>(2023) * Thriller, Drama</p>
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
                            <a href="#" class="trailer">Play Trailer</a>
                        </li>
                    </ul>
                </div>



                <div class="movie-description">
                    <h3>Overview</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, molestiae eos soluta maxime numquam quisquam quasi cum omnis, praesentium, facere ex voluptate cupiditate eaque commodi harum deserunt eligendi nobis a delectus accusamus rerum? Impedit mollitia, nihil sed neque adipisci quia soluta vero aliquam delectus dolorum at excepturi, dignissimos blanditiis repellat.</p>
                </div>

                <h3>Credits</h3>
                <div class="credits">
                    <p>Producer 1</p>
                    <p>Producer 1</p>
                    <p>Producer 1</p>
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

<script src="/src/searchbar.js"></script>
</body>
</html>