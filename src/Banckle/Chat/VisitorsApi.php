<?php

namespace Banckle\Chat;

class VisitorsApi {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

  /**
	 * getBrowsingVisitors
	 * Get browsing visitor list.
   * @return object
	 */

   public function getBrowsingVisitors() {

  		//parse inputs
  		$resourcePath = "/visitors/browsing";
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
	 * getQueueVisitors
	 * Get queue visitor list.
   * @return object
	 */

   public function getQueueVisitors() {

  		//parse inputs
  		$resourcePath = "/visitors/queue";
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
	 * getWidgetVisitors
	 * Get queue visitor list by widget ID.
   * widgetId, string: Widget ID (required)

   * @return object
	 */

   public function getWidgetVisitors($widgetId) {

  		//parse inputs
  		$resourcePath = "/visitors/queue/{widgetId}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($widgetId != null) {
  			$resourcePath = str_replace("{" . "widgetId" . "}",
  			                            $this->apiClient->toPathValue($widgetId), $resourcePath);
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
	 * getVisitor
	 * Get visitor information.
   * visitorId, string: Visitor ID (required)

   * @return object
	 */

   public function getVisitor($visitorId) {

  		//parse inputs
  		$resourcePath = "/visitors/{visitorId}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
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
	 * updateVisitor
	 * Update visitor information.
   * visitorId, string: Visitor ID (required)

   * body, body: Visitor object that needs to be updated (required)

   * @return object
	 */

   public function updateVisitor($visitorId, $body) {

  		//parse inputs
  		$resourcePath = "/visitors/{visitorId}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "PUT";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($body != null) {
  		  $queryParams['body'] = $this->apiClient->toQueryValue($body);
  		}
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
	 * getVisitorFootprint
	 * Get visitor footprint.
   * visitorId, string: Visitor ID (required)

   * @return object
	 */

   public function getVisitorFootprint($visitorId) {

  		//parse inputs
  		$resourcePath = "/visitors/{visitorId}/footprint";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
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
	 * getVisitorChats
	 * Get visitor chats.
   * visitorId, string: Visitor ID (required)

   * @return object
	 */

   public function getVisitorChats($visitorId) {

  		//parse inputs
  		$resourcePath = "/visitors/{visitorId}/chats";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
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
	 * updateVisitorInvite
	 * Invite visitor.
   * visitorId, string: Visitor ID (required)

   * @return object
	 */

   public function updateVisitorInvite($visitorId) {

  		//parse inputs
  		$resourcePath = "/visitors/{visitorId}/invite";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "PUT";
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
	 * acceptVisitor
	 * Accept visitor request.
   * visitorId, string: Visitor ID (required)

   * @return object
	 */

   public function acceptVisitor($visitorId) {

  		//parse inputs
  		$resourcePath = "/visitors/{visitorId}/accept";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "PUT";
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
	 * getVisitorsSchema
	 * Get visitor schema.
   * @return object
	 */

   public function getVisitorsSchema() {

  		//parse inputs
  		$resourcePath = "/visitors/visitorSchema";
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
  

}

