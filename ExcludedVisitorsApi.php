<?php

class ExcludedVisitorsApi {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

  /**
	 * createExcludedVisitors
	 * Create excluded visitor.
   * visitorId, string: Visitor ID (required)

   * @return object
	 */

   public function createExcludedVisitors($visitorId) {

  		//parse inputs
  		$resourcePath = "/excludedVisitors/{visitorId}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "POST";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($visitorId != null) {
  			$resourcePath = str_replace("{" . "visitorId" . "}",
  			                            $this->apiClient->toPathValue($visitorId), $resourcePath);
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
	 * getExcludedVisitors
	 * Get all excluded visitors.
   * @return object
	 */

   public function getExcludedVisitors() {

  		//parse inputs
  		$resourcePath = "/excludedVisitors";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

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
	 * deleteExcludedVisitors
	 * Delete excluded visitor.
   * visitorId, string: Visitor ID (required)

   * @return object
	 */

   public function deleteExcludedVisitors($visitorId) {

  		//parse inputs
  		$resourcePath = "/excludedVisitors/{visitorId}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "DELETE";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($visitorId != null) {
  			$resourcePath = str_replace("{" . "visitorId" . "}",
  			                            $this->apiClient->toPathValue($visitorId), $resourcePath);
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

