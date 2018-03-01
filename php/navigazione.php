<?php 
  // Controllo Pagina
  if (isset($_GET['pag'])) {
    $pag = $_GET['pag']; 
  } else { 
    $pag = '';  
  }
  
  // Caricamento Pagina
  switch($pag) {
    case '':
      include('home.php');

      break;
    default:
      include('home.php');
  }
?>
