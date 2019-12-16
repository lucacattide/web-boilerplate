<!--JS Start-->
<!-- respond.js for IE8 -->
<!--[if lt IE 9]>
  <script src="/js/frontend/lib/respond.min.js"></script>
<![endif]-->
<script src="//code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>
<?php
  $path = $_SERVER['REQUEST_URI'];

  if (strlen(str_replace('/', '', $path)) == 0 || strpos($path, 'home') !== false) : ?>
    <!--TODO: Prefix in production must be changed to "../js/frontend/dist/"-->
    <script async defer src="../js/frontend/home.js"></script>
<?php endif; ?>
<script async defer type="module" src="../js/frontend/refresh.js"></script>
<script async defer src="../js/frontend/install.js"></script>
<!--JS End-->
<!--Rich Snippets Start-->
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@graph": [{
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
  }]
}
</script>
<!--Rich Snippets End-->
