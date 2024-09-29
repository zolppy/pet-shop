<?php
require_once "core/request.php";

class ApplicationController
{
  public $request;

  public function __construct() { $this->request = new Request(); }

  public function view($file, $array = null)
  {
    if(!is_null($array))
    {
      foreach($array as $key => $value) { ${$key} = $value; }
    }

    ob_start();
    include "view/{$file}.php";
    ob_flush();
  }
}
?>