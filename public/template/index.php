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

binder::add(10, "home\/", function($req, $res){
  $view = new view("index");
  $view->content = "Hello! Your visitor id is <strong>" . $req->visitor->uid . "</strong>.<br>";
  $view->title = "How to Bern | Your Guide to the capital of Bern";
  $view->display();
});

binder::add(10, "gabriel\/", function($req, $res){
  $view = new view("gabriel");
  $view->content = "Hello! Your visitor id is <strong>" . $req->visitor->uid . "</strong>.<br>";
  $view->title = "How to Bern | Your Guide to the capital of Bern";
  $view->display();
});

binder::add(10, "sascha\/", function($req, $res){
  $view = new view("sascha");
  $view->content = "Hello! Your visitor id is <strong>" . $req->visitor->uid . "</strong>.<br>";
  $view->title = "How to Bern | Your Guide to the capital of Bern";
  $view->display();
});

binder::add(10, "luca\/", function($req, $res){
  $view = new view("luca");
  $view->content = "Hello! Your visitor id is <strong>" . $req->visitor->uid . "</strong>.<br>";
  $view->title = "How to Bern | Your Guide to the capital of Bern";
  $view->display();
});

binder::add(10, "haiko\/", function($req, $res){
  $view = new view("haiko");
  $view->content = "Hello! Your visitor id is <strong>" . $req->visitor->uid . "</strong>.<br>";
  $view->title = "How to Bern | Your Guide to the capital of Bern";
  $view->display();
});