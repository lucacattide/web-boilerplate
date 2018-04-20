<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta property="og:url" content="" />
<meta property="og:type" content="" />
<meta property="og:title" content="" />
<meta property="og:description" content="" />
<meta property="og:image" content="" />
<meta property="og:audio" content="" />
<meta property="og:video" content="" />
<meta property="og:locale" content="it_IT" />
<meta property="og:locale:alternate" content="" />
<meta property="og:type" content="" />
<meta property="og:site_name" content="" />
<!--Fine Meta Tags-->
<!--Inizio Preload-->
<link rel="preload" href="../css/dist/main.css" as="style">
<link rel="preload" href="//code.jquery.com/jquery-3.3.1.min.js" as="script">
<?php 
  $path = $_SERVER['REQUEST_URI'];

  if (strlen(str_replace('/', '', $path)) == 0 || strpos($path, 'home') !== false) : ?>
    <link rel="preload" href="../css/dist/home.css" as="style">
    <link rel="preload" href="home.js" as="script">
<?php endif; ?>
<!--Fine Preload-->
<!--Inizio Importazione Stili-->
<?php
  if (strlen(str_replace('/', '', $path)) == 0 || strpos($path, 'home') !== false) : ?>
    <link rel="stylesheet dns-prefetch" href="../css/dist/home.css">
<?php endif; ?>
<!--Fine Importazione Stili-->
<link rel="icon dns-prefetch" type="image/png" href="../favicon.png">