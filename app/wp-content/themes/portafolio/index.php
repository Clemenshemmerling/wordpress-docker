<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo(title); ?></title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="<? php bloginfo(stylesheet_url); ?>">
  </head>
  <body>
    <h1><?php bloginfo(name); ?></h1>
    <p><?php bloginfo(description); ?></p>
    <p><?php bloginfo(url); ?></p>
    <p><?php bloginfo(language); ?></p>
    <p><?php bloginfo(stylesheet_url); ?></p>
    <p><?php bloginfo(stylesheet_directory); ?></p>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/jquery-ui.js"></script>
    <script src="js/vendor/vue.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
