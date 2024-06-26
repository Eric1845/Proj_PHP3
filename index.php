<?php
  require_once("templates/header.php");

  require_once("dao/MovieDAO.php");

  // DAO dos filmes
  $movieDao = new MovieDAO($conn, $BASE_URL);

  $latestMovies = $movieDao->getLatestMovies();

  $actionMovies = $movieDao->getMoviesByCategory("Ação");

  $comedyMovies = $movieDao->getMoviesByCategory("Comédia");

  $thrillerMovies = $movieDao->getMoviesByCategory("Suspense");

  $horrorMovies = $movieDao->getMoviesByCategory("Terror");

?>
  <div id="main-container" class="container-fluid">
   <h2 class="section-title">Filmes novos</h2>
   <p class="section-description">Veja as críticas dos últimos filmes adicionados no
   Movie Star</p>
      <div class="movies-container">
        <?php foreach($latestMovies as $movie): ?>
        <?php require("templates/movie_card.php"); ?>
      <?php endforeach; ?>
      <?php if(count($latestMovies) === 0): ?>
        <p class="empty-list">Ainda não há filmes cadastrados!</p>
      <?php endif; ?>   
    </div>
    <h2 class="section-title">Ação</h2>
    <p class="section_container">Veja os melhores filmes de ação</p>
    <div class="movies-container">
    <?php foreach($actionMovies as $movie): ?>
        <?php require("templates/movie_card.php"); ?>
      <?php endforeach; ?>
    <?php if(count($actionMovies) === 0): ?>
        <p class="empty-list">Ainda não há filmes de ação cadastrados!</p>
      <?php endif; ?>   

    </div>
    <h2 class="section-title">Comédia</h2>
    <p class="section_container">Veja os melhores filmes de comédia</p>
    <div class="movies-container">
    <?php foreach($comedyMovies as $movie): ?>
        <?php require("templates/movie_card.php"); ?>
      <?php endforeach; ?>
    <?php if(count($comedyMovies) === 0): ?>
        <p class="empty-list">Ainda não há filmes de comedia cadastrados!</p>
      <?php endif; ?>   
    </div>
    <h2 class="section-title">Suspense</h2>
    <p class="section_container">Veja os melhores filmes de suspense</p>
    <div class="movies-container">
    <?php foreach($thrillerMovies as $movie): ?>
        <?php require("templates/movie_card.php"); ?>
      <?php endforeach; ?>
    <?php if(count($thrillerMovies) === 0): ?>
        <p class="empty-list">Ainda não há filmes de suspense cadastrados!</p>
      <?php endif; ?>   
    </div>
    </div>
    <h2 class="section-title">Terror</h2>
    <p class="section_container">Veja os melhores filmes de Terror</p>
    <div class="movies-container">
    <?php foreach($horrorMovies as $movie): ?>
        <?php require("templates/movie_card.php"); ?>
      <?php endforeach; ?>
    <?php if(count($horrorMovies) === 0): ?>
        <p class="empty-list">Ainda não há filmes de terror cadastrados!</p>
      <?php endif; ?>   
    </div>
    </div>
<?php
  require_once("templates/footer.php");
?>