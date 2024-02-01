document.addEventListener('DOMContentLoaded', function () {
    // Get all genre links
    var genreLinks = document.querySelectorAll('.genre-link');

    // Get all movie elements
    var showElements = document.querySelectorAll('.img');

    // Add click event listener to each genre link
    genreLinks.forEach(function (link) {
        link.addEventListener('click', function (event) {
            // Prevent default link behavior
            event.preventDefault();

            // Get the selected genre
            var selectedGenre = link.getAttribute('data-genre');

            // Show/hide TV shows based on the selected genre
            showElements.forEach(function (show) {
                var showGenres = show.getAttribute('data-genre-ids').split(',').map(Number);
                if (showGenres.includes(parseInt(selectedGenre))) {
                    show.style.display = 'block';
                } else {
                    show.style.display = 'none';
                }
            });
        });
    });
});