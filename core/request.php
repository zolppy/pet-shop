<?php
class Request
{
  protected $request;

  public function __construct() { $this->request = $_REQUEST; }

  public function __get($name)
  {
    return isset($this->request[$name]) ? $this->request[$name] : false;
  }
}
?>