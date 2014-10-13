<?php

namespace Banckle\Chat;

class OperatorsApi {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

  /**
	 * getOperators
	 * Get list of all operators.
   * @return object
	 */

   public function getOperators($online) {

  		//parse inputs
  		$resourcePath = "/operators?online={online}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';
	  
	  if($online != null) {
  			$resourcePath = str_replace("{" . "online" . "}",
  			                            $this->apiClient->toPathValue($online), $resourcePath);
  		}
		
      //make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'object');
  		return $responseObject;

      }
  /**
	 * getOperator
	 * Get a specific operator.
   * operatorId, string: The operator id (required)

   * @return object
	 */

   public function getOperator($operatorId) {

  		//parse inputs
  		$resourcePath = "/operators/{operatorId}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($operatorId != null) {
  			$resourcePath = str_replace("{" . "operatorId" . "}",
  			                            $this->apiClient->toPathValue($operatorId), $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'object');
  		return $responseObject;

      }
  

}

