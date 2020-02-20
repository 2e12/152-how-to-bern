<?php
require_once("binder/view.php");


binder::add(10, "test\/", function($req, $res){
  $view = new view("main");
  $view->content = "Hello! Your visitor id is <strong>" . $req->visitor->uid . "</strong>.<br>";
  $view->title = "Hello World";
  $view->display();
});

