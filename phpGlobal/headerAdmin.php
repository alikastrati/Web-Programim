
<link rel="stylesheet" href="/Web-Programim/phpGlobal/headerUser-Styles.css">
<?php 
echo '<div class="navBar" id="navbar">
<nav>
  <div class="navLogo">
     <p><a href="/src/index.html">fl<span>oat</a></span></p>
     <div class="search-field">
      
     
      <a href="#" id="toggleSearch">&#9740;</a>
      <div class="search-bar-container" id="searchContainer">
        <input type="text" name="search-bar" id="searchBar" placeholder="Search">
        <button id="closeSearch">Close</button>
      </div>
     </div>
    
  </div>



  


     <div class="lists" id="myTopNav">
         
         
         <a href="/src/index.html" class="active">Home</a>
         <a href="/src/movies-page/movies.html">Movies</a>
         <a href="/src/tvshows-page/tvshows.html">TV Shows</a>

         <div class="dropdown">
            <button class="dropdown-btn">Account Name &#9662;</button>
            <div class="dropdown-menu" id="dropdownMenu">
                <a href="#">Dashboard</a>
                <a href="/Web-Programim/phpDatabase/logout.php">Log out</a>
            </div>
              
         </div>
        
        
        
         
         
 
  </div>



  <div class="hamburger">
     <span id="openHam" style="color: #FFFF;">&#9776</span>
     <span id="closeHam" style="color: #FFFF;">&#x2716;</span>
 
  </div>
</nav>

</div>'


?>