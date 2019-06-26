<head>
  <!--Meta Tags Start-->
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
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="">
  <meta name="apple-mobile-web-app-title" content="">
  <meta name="theme-color" content="#" />
  <!--Meta Tags End-->
  <!--Preload Start-->
  <link rel="preload" href="../manifest.json" as="script">
  <link rel="preload" href="//code.jquery.com/jquery-3.4.1.min.js" as="script">
  <?php
    $path = $_SERVER['REQUEST_URI'];

    if (strlen(str_replace('/', '', $path)) == 0 || strpos($path, 'home') !== false) : ?>
      <!--TODO: CSS prefix in production must be changed to "../css/dist/"-->
      <link rel="preload" href="../css/home.css" as="style">
      <!--TODO: JS prefix in production must be changed to "../js/frontend/dist/"-->
      <link rel="preload" href="../js/frontend/home.js" as="script">
  <?php endif; ?>
  <link rel="preload" href="../js/frontend/refresh.js" as="script">
  <link rel="preload" href="../js/frontend/install.js" as="script">
  <!--Preload End-->
  <!--CSS Start-->
  <?php
    if (strlen(str_replace('/', '', $path)) == 0 || strpos($path, 'home') !== false) : ?>
      <!--TODO: Prefixes in production must be changed to "../css/dist/"-->
      <link rel="stylesheet dns-prefetch" href="../css/home.css">
  <?php endif; ?>
  <!--CSS End-->
  <link rel="icon dns-prefetch" type="image/png" href="../favicon.png">
  <!--TODO: Must be 152x152 px PNG-->
  <link rel="apple-touch-icon dns-prefetch" href="../img/">
  <link rel="manifest dns-prefetch" href="../manifest.json">
</head>
