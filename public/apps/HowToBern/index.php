<?php
binder::add(9, "", function ($reg, $res) {
  require 'Templates/home.php';
});

binder::addOnError(1, function ($req, $res) {
  echo "<h1>An Error occured - No page found 404</h1>";
});

