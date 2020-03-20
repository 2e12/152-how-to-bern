<?php
class response{
  private $statuscode = 200;
  private $response = "";
  
  public function getResponse(): string{
    return $response;
  }
  
  public function setResponse(string $res){
    $this->response = $res;
  }
  
  public function getStatuscode(): int{
    return $statuscode;
  }
  
  public function setStatuscode(int $code){
    $this->statuscode = $code;
  }
  
  private function generateHeader(){
    http_response_code($this->statuscode);
  }
  
  public function show(){
    generateHeader();
    echo $response;
  }
  
}