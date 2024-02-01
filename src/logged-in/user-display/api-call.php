<?php
$apiKey = '9a23cb65445bdb0713ad45e54d8b7096';
$trendingURL = "https://api.themoviedb.org/3/trending/movie/week?api_key={$apiKey}";


if (!isset($_SESSION['trendingMovies'])) {
    
    $response = file_get_contents($trendingURL);


    $data = json_decode($response, true);


    if (isset($data['results']) && !empty($data['results'])) {
        $_SESSION['trendingMovies'] = $data['results'];
    } else {
        echo 'Failed to retrieve data!';
    }
}

$trendingMovies = isset($_SESSION['trendingMovies']) ? $_SESSION['trendingMovies'] : [];

// LIMIT NR OF MOVIES TO DISPLAy
$moviesToDisplay = array_slice($trendingMovies, 0, 5);

// OUTPUT 
if (!empty($moviesToDisplay)) {
    echo '<div class="imgContainer">';
    echo '<div class="img-slider">';

    
    foreach ($moviesToDisplay as $movie) {
        
        $videoURL = "https://api.themoviedb.org/3/movie/{$movie['id']}/videos?api_key=9a23cb65445bdb0713ad45e54d8b7096";
        $videoResponse = file_get_contents($videoURL);
        $videoData = json_decode($videoResponse, true);

        echo '<div class="slide active">';
        echo '<img loading="lazy" src="https://image.tmdb.org/t/p/w500' . $movie['poster_path'] . '" alt="' . $movie['title'] . '">';
        echo '<div class="info">';
        echo '<h2>' . $movie['title'] . '</h2>';
        echo '<p>' . $movie['overview'] . '</p>';
        echo '<div class="buttons">';

        if (isset($videoData['results']) && !empty($videoData['results'])) {
            $videoKey = $videoData['results'][0]['key'];
            echo '<button><a href="https://www.youtube.com/watch?v=' . $videoKey . '">Watch Trailer</a></button>';
        } else {
            echo '<button>Trailer not available</button>';
        }

        echo '<button id="watchBtn">Add to Watch List</button>';

        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

    echo '</div>';
    echo '<div class="navigation">';
    echo '<div class="btn" id="prevBtn"><</div>';
    echo '<div class="btn" id="nextBtn">></div>';
    echo '</div>';
    echo '</div>';
} else {
    echo 'Failed to retrieve trending movies data!';
}
?>
