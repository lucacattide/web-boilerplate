<!-- respond.js per IE8 -->
<!--[if lt IE 9]>
  <script src="js/lib/respond.min.js"></script>
<![endif]-->
<script src="//code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<?php 
  $path = $_SERVER['REQUEST_URI'];

  if (strlen(str_replace('/', '', $path)) == 0 || strpos($path, 'home') !== false) : ?>
    <script async defer src="home.js"></script>
<?php endif; ?>
<!--Inizio Rich Snippets-->
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "http://",
  "logo": "http:///themes/stack/img/logo.png",
  "contactPoint": [{
    "@type": "ContactPoint",
    "telephone": "+39-02-35-99-7654",
    "contactType": "customer support",
    "areaServed": [
      "IT"
    ],
    "availableLanguage": {
      "@type": "Language",
      "name": ["Italian"]
    }
  }],
  "name": ""
}, {
  "@context": "http://schema.org",
  "@type": "",
  "name": "",
  "url": "http://",
  "image": "http:///themes/stack/img/logo.png",
  "@id": "http://",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "",
    "addressLocality": "",
    "addressRegion": "",
    "postalCode": "",
    "addressCountry": "IT"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": ,
    "longitude":
  },
  "telephone": "+39-"
}, {
  "@context": "http://schema.org",
  "@type": "WebSite",
  "name": "",
  "url": "http://"
}
</script>
<!--Fine Rich Snippets-->
