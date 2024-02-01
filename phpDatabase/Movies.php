<?php 
class Movies {
    private $mov;

    public function __construct($mov) {
        $this->mov = $mov;
    }


    public function addMovie($movieId, $title, $imageUrl) {


        if ($this->movieExists($movieId)) {
            echo "Movie already exists: $title\n";
            return true; 
        }

        $sql = "INSERT INTO movies (tmdb_id, title, image_url) VALUES (?,?,?)";
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


    private function movieExists($movieId) {
        $sql = "SELECT COUNT(*) AS count FROM movies WHERE tmdb_id = ?";
        $stmt = $this->mov->getDBConnection()->prepare($sql);
        $stmt->bind_param("i", $movieId);
        $stmt->execute();
        
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        
        return $row['count'] > 0;
    }
}



?>