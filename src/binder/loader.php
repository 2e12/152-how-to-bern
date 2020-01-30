<?php
require_once("binder.php");
require_once("request.php");
require_once("visitor.php");
require_once("response.php");
session_start();
$request = new request();
$response = new response();

$path = ROOT . "/apps/";
$files = scandir($path);
foreach($files as $file) {
  if(is_dir($path . $file) && !($file === "." || $file === "..")){
    if(file_exists($path . $file . "/index.php")){
      require_once($path . $file . "/index.php");
    }
  }
}

binder::getByUri($request->path, $request, $response);