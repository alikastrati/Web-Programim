<?php 
session_start();

require_once('/xampp/htdocs/Web-Programim/phpDatabase/Database.php');
require_once('/xampp/htdocs/Web-Programim/phpDatabase/User.php');
require_once('/xampp/htdocs/Web-Programim/phpDatabase/Movies.php'); 

$db = new Database();
$conn = $db->getDBConnection();

$user = new User($db); 
$movies = new Movies($db);
$allMovies = $movies->getAllMovies();

?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link rel="stylesheet" href="global-styles.css">
        <link rel="stylesheet" href="user-dashboard-styles.css">
    </head>
    <body>
        
        <div class="mainContainer">

            <!-- LEFT PANEL  -->
       <?php
            include('global-dashboard.php');
       ?>






            <!-- RIGHT PANNEL  -->
            <div class="right-panel">
                <div class="tableContainer">
                    <h2>Manage Movies/TV Shows</h2>    
                    
                    
                    <table class="greyGridTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Image URL</th>
                            <th>Commands</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($allMovies as $movie) : ?>
                            <tr>
                                <td><?= $movie['id'] ?></td>
                                <td><?= $movie['title'] ?></td>
                                <td><?= $movie['image_url'] ?></td>
                                <td>
                                    <form method="POST" action="\Web-Programim\src\logged-in\phpScripts\delete-movie.php">
                                        <input type="hidden" name="movie_id" value="<?= $movie['id'] ?>">
                                        <button type="submit" name="deleteButton" id="deleteButton">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                  
                </div>
                

                
            </div>
        </div>


    </body>
    </html>