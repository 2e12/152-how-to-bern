<?php
class view{
  private $file;
  private $properties = array();

  function __construct($file){
    $this->$file = $file;
  }

  public function __set($key, $value){
      if (!isset($this->properties[$key])) {
          $this->properties[$key] = $value;
      }
  }

  public function display(){
      extract($this->properties);
  }

  public function __get($key){
      return $this->properties[$key];
  }
}
?>
