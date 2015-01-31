<!DOCTYPE html>
<!--[if IEMobile 7]><html class="iem7" <?php print $html_attributes; ?>><![endif]-->
<!--[if lte IE 6]><html class="lt-ie9 lt-ie8 lt-ie7" <?php print $html_attributes; ?>><![endif]-->
<!--[if (IE 7)&(!IEMobile)]><html class="lt-ie9 lt-ie8" <?php print $html_attributes; ?>><![endif]-->
<!--[if IE 8]><html class="lt-ie9" <?php print $html_attributes; ?>><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html <?php print $html_attributes . $rdf_namespaces; ?>><!--<![endif]-->

<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php if ($default_mobile_metatags): ?>
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width">
  <?php endif; ?>
  <link rel="apple-touch-icon" sizes="57x57" href="sites/all/themes/wwv/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="114x114" href="sites/all/themes/wwv/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="72x72" href="sites/all/themes/wwv/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="144x144" href="sites/all/themes/wwv/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="60x60" href="sites/all/themes/wwv/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="120x120" href="sites/all/themes/wwv/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="76x76" href="sites/all/themes/wwv/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="152x152" href="sites/all/themes/wwv/favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="sites/all/themes/wwv/favicons/apple-touch-icon-180x180.png">
  <link rel="shortcut icon" href="sites/all/themes/wwv/favicons/favicon.ico">
  <link rel="icon" type="image/png" href="sites/all/themes/wwv/favicons/favicon-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="sites/all/themes/wwv/favicons/favicon-160x160.png" sizes="160x160">
  <link rel="icon" type="image/png" href="sites/all/themes/wwv/favicons/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="sites/all/themes/wwv/favicons/favicon-16x16.png" sizes="16x16">
  <link rel="icon" type="image/png" href="sites/all/themes/wwv/favicons/favicon-32x32.png" sizes="32x32">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-TileImage" content="sites/all/themes/wwv/favicons/mstile-144x144.png">
  <meta name="msapplication-config" content="sites/all/themes/wwv/favicons/browserconfig.xml">
  <meta http-equiv="cleartype" content="on">
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <?php print $page; ?>
</body>
</html>
