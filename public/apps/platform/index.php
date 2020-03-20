<?php
require_once("binder/view.php");

binder::addOnError(1, function ($req, $res) {
  echo "<h1>An Error occured - No page found 404</h1>";
});

binder::add(1, "", function($req, $res){
  $view = new view("home");
  $view->title = "Home";
  $view->display();
});

binder::add(10, "gabriel\/", function($req, $res){
  $view = new view("gabriel");
  $view->title = "Bilder von Gabriel";
  $view->display();
});

binder::add(10, "sascha\/", function($req, $res){
  $view = new view("sascha");
  $view->title = "Bilder von Sascha";
  $view->display();
});

binder::add(10, "luca\/", function($req, $res){
  $view = new view("luca");
  $view->title = "Bilder von Luca";
  $view->display();
});

binder::add(10, "haiko\/", function($req, $res){
  $view = new view("haiko");
  $view->title = "Bilder von Haiko";
  $view->display();
});
