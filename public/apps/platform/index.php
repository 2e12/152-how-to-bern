<?php
binder::addOnError(1, function ($req, $res) {
  echo "<h1>An Error occured - No page found 404</h1>";
});

binder::add(10, "home\/", function($req, $res){
  $view = new view("home");
  $view->title = "How to Bern | Your Guide to the capital of Bern";
  $view->display();
});

binder::add(10, "gabriel\/", function($req, $res){
  $view = new view("gabriel");
  $view->title = "How to Bern | Your Guide to the capital of Bern";
  $view->display();
});

binder::add(10, "sascha\/", function($req, $res){
  $view = new view("sascha");
  $view->title = "How to Bern | Your Guide to the capital of Bern";
  $view->display();
});

binder::add(10, "luca\/", function($req, $res){
  $view = new view("luca");
  $view->title = "How to Bern | Your Guide to the capital of Bern";
  $view->display();
});

binder::add(10, "haiko\/", function($req, $res){
  $view = new view("haiko");
  $view->title = "How to Bern | Your Guide to the capital of Bern";
  $view->display();
});