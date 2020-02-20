<?php
binder::add(8, "myid\/", function($req, $res){
  echo "Hello! Your visitor id is <strong>" . $req->visitor->uid . "</strong>.<br>";
});

binder::add(5, "myid\/", function($req, $res){
  echo "Bye! Your visitor id is <strong>" . $req->visitor->uid . "</strong>.<br>";
});

binder::addOnError(1, function($req, $res){
  echo "<h1>An Error occured - No page found 404</h1>";
});