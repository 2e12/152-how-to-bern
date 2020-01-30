<?php
binder::add(8, "myid\/", function($req, $res){
  echo "Hello! Your visitor id is <strong>" . $req->visitor->uid . "</strong>.<br>";
});

binder::add(5, "myid\/", function($req, $res){
  echo "Bye! Your visitor id is <strong>" . $req->visitor->uid . "</strong>.<br>";
});

binder::addGlobal(1, function($req, $res){
  echo "Hei<br>";
});

binder::addOnError(1, function($req, $res){
  echo "Nothing to see<br>";
});