<?php
class request{
  function __construct(){
    $this->path = "";
    $this->visitor = new visitor();
    if(isset($_GET["path"])){
      $this->path = $_GET["path"];
    }
  }
}