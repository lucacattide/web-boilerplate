<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
<!--Fine Meta Tags-->
<!--Inizio Preload-->
<link rel="preload" href="../css/dist/main.css" as="style">
<link rel="preload" href="//code.jquery.com/jquery-3.3.1.min.js" as="script"></script>
<link rel="preload" href="bundle.js" as="script"></script>
<?php 
  $path = $_SERVER['REQUEST_URI'];

  if (strpos($path, 'home') !== false || strpos($path, '/') !== false) : ?> 
    <link rel="preload" href="../css/dist/home.css" as="style">
    <link rel="preload" href="//cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js" as="script">
    <link rel="preload" href="home.js" as="script">
<?php endif; ?>
<!--Fine Preload-->
<!--Inizio Importazione Stili--> 
<link rel="stylesheet dns-prefetch" href="../css/dist/main.css">
<link rel="stylesheet dns-prefetch" href="../css/dist/home.css">
<!--Fine Importazione Stili-->
<link rel="icon dns-prefetch" type="image/png" href="../favicon.png">