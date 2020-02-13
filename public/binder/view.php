<?php
class view{
  private $file;
  private $properties = array();

  function __construct($file){
    $this->file = preg_replace("/[^A-Za-z0-9]/",'', $file);
  }

  public function __set($key, $value){
      if (!isset($this->properties[$key])) {
          $this->properties[$key] = $value;
      }
  }

  public function display(){
      extract($this->properties);
      include("template/" . $this->file . ".php");
  }

  public function __get($key){
      return $this->properties[$key];
  }
}
?>
