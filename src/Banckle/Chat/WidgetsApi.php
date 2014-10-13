<?php

namespace Banckle\Chat;

class WidgetsApi {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

  /**
	 * createWidget
	 * Create a new widget.
   * body, body: Widget object that needs to be added (required)

   * @return object
	 */

   public function createWidget($body) {

  		//parse inputs
  		$resourcePath = "/widgets";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "POST";
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
	 * updateWidget
	 * Update a specific widget.
   * widgetId, string: The widget's id (required)

   * body, body: Widget object that needs to be updated (required)

   * @return object
	 */

   public function updateWidget($widgetId, $body) {

  		//parse inputs
  		$resourcePath = "/widgets/{widgetId}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "PUT";
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
	 * getWidgets
	 * Get list of all the available widgets.
   * @return object
	 */

   public function getWidgets() {

  		//parse inputs
  		$resourcePath = "/widgets";
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
	 * getWidget
	 * Get a specific widget.
   * widgetId, string: The widget's id (required)

   * @return object
	 */

   public function getWidget($widgetId) {

  		//parse inputs
  		$resourcePath = "/widgets/{widgetId}";
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
	 * deleteWidget
	 * Delete a specific widget.
   * widgetId, string: The widget's id (required)

   * @return object
	 */

   public function deleteWidget($widgetId) {

  		//parse inputs
  		$resourcePath = "/widgets/{widgetId}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "DELETE";
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
  

}

