<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="og:url" property="og:url" content="" />
<meta name="og:type" property="og:type" content="" />
<meta name="og:title" property="og:title" content="" />
<meta name="og:description" property="og:description" content="" />
<meta name="og:image" property="og:image" content="" />
<meta name="og:audio" property="og:audio" content="" />
<meta name="og:video" property="og:video" content="" />
<meta name="og:locale" property="og:locale" content="it_IT" />
<meta name="og:locale:alternate" property="og:locale:alternate" content="" />
<meta name="og:site_name" property="og:site_name" content="" />
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