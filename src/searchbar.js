
document.getElementById('toggleSearch').addEventListener('click', function(event) {
  event.preventDefault();
  document.getElementById('searchContainer').style.display = 'flex';
});

document.getElementById('closeSearch').addEventListener('click', function() {
  document.getElementById('searchContainer').style.display = 'none';
});



