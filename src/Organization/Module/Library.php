<?php

namespace Organization\Module;

class Library
{
  protected $method;

  public function __construct() {
    $this->method = 'GET';
  }

  public function jsonData($inData = null)
  {
    $data = (object)array(
      'error' => false,
      'message' => 'Test response.',
      'code' => 200
    );
    return json_encode($data);
  }

  public function testApi()
  {
    http_response_code($data->code);
    header('Contnet-type: application/json; charset=utf-8');
    echo $this->jsonData();
  }
}