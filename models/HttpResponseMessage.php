<?php

class HttpResponseMessage {

  static $swaggerTypes = array(
      'Content' => 'String',
      'Headers' => 'String',
      'IsSuccessStatusCode' => 'bool',
      'ReasonPhrase' => 'String',
      'RequestMessage' => 'String',
      'StatusCode' => 'String',
      'Version' => 'String'

    );

  public $Content; // String
  public $Headers; // String
  public $IsSuccessStatusCode; // bool
  public $ReasonPhrase; // String
  public $RequestMessage; // String
  public $StatusCode; // String
  public $Version; // String
  }

