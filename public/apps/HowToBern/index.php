<?php
binder::add(1, "", function ($reg, $res) {
  require 'Templates/home.php';
});

binder::add(8, "sascha\/", function ($reg, $res) {
  require 'Templates/Sascha/index.php';
});

binder::addOnError(1, function ($req, $res) {
  echo "<h1>An Error occured - No page found 404</h1>";
});

