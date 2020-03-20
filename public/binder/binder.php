<?php
class binder{ 
      
  private static $uris = array();
  private static $globals = array();
  private static $notfound = array();
  
  public static function addOnError(int $priority, callable $function){
    self::$notfound[] = array($priority, $function);
  }
  
  public static function getOnError(request $request, response $response){
    foreach (self::$notfound as &$value){
      $value[1]($request, $response);
      break;
    } 
  }
  
  public static function addGlobal(int $priority, callable $function){
    self::$globals[] = array($priority, $function);
  }
      
  public static function add(int $priority, string $uriRegEx, callable $function){
    self::$uris[] = array($priority, "/" . $uriRegEx . "/", $function);
  }
  
  public static function getGlobals(request $request, response $response){
    foreach (self::$globals as &$value){
      $value[1]($request, $response);
    } 
  }
  
  public static function getByUri(string $uri, request $request, response $response){
    self::sortFunctions();
    self::getGlobals($request, $response);
    $found = false;
    foreach (self::$uris as &$value) {
      if(preg_match($value[1], $uri)){
        $value[2]($request, $response);
        $found = true;
        break;
      }
    }
    if(!$found){
      self::getOnError($request, $response);
    }
  }
  
  private static function sortFunctions(){
    array_multisort (array_column(self::$uris, 0), SORT_DESC, self::$uris);
    array_multisort (array_column(self::$globals, 0), SORT_DESC, self::$globals);
    array_multisort (array_column(self::$notfound, 0), SORT_DESC, self::$notfound);
  }
} 
