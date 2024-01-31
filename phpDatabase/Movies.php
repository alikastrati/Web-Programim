<?php 
class Movies {
    private $mov;

    public function __construct($mov) {
        $this->mov = $mov;
    }


    public function addMovie($movieId, $title, $imageUrl) {
        $sql = "INSERT INTO movies (tmdb_id, title, imageUrl) VALUES (?,?,?)";
        $stmt = $this->mov->getDBConnection()->prepare($sql);
        $stmt->bind_param("iss", $movieId, $title, $imageUrl);

        if($stmt->execute()) {
            return true;
        } else {
            return false;
        }


        $stmt->close();
    }



    public function updateMovie($movies) {
    
        foreach($movies as $movie) {
            $tmdbMovieId = $movie['id'];
            $title = $movie['title'];
            $imageUrl = $movie['poster_path'];
    
    
            $sql = "INSERT INTO movies (tmdb_id, title, image_url) VALUES (?, ? , ?) ON DUPLICATE KEY UPDATE title = VALUES(title),image_url = VALUES(image_url)";
            $stmt = $this->mov->getDBConnection()->prepare($sql);
            $stmt->bind_param("iss",$tmdbMovieId, $title, $imageUrl,); 
            $stmt->execute();
    
            $stmt->close();
            
        }
    
        
        $this->mov->closeConnection();
    
    }
}



?>