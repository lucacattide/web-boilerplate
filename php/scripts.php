<!-- respond.js per IE8 -->
<!--[if lt IE 9]>
  <script src="js/lib/respond.min.js"></script>
<![endif]-->
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<?php 
  $path = $_SERVER['REQUEST_URI'];

  if (strpos($path, 'home') !== false || strpos($path, '/') !== false) : ?> 
    <script async defer src="home.js"></script>
<?php endif; ?>
