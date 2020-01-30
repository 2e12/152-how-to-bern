<?php
class visitor{
  function __construct($uid = null){
    //uid
    if($uid !== null){
      $this->uid = $uid; // unique id
    }else{
      if(isset($_SESSION["visitor_inf"])){
        $this->uid = $_SESSION["visitor_inf"]["uid"];
      }else{
        $this->uid = uniqid("usr", true);
        $_SESSION["visitor_inf"] = array("uid" => $this->uid);
      }
    }
  }
}