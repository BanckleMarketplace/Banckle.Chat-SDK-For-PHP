<?php

namespace Banckle\Chat;

class OfflineMessagesApi {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

  /**
	 * getOfflineMessages
	 * Get list of offline messages.
   * @return object
	 */

   public function getOfflineMessages() {

  		//parse inputs
  		$resourcePath = "/offlineMessages";
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
	 * getOfflineMessage
	 * Get a specific offline message.
   * messageId, string: The message id (required)

   * @return object
	 */

   public function getOfflineMessage($messageId) {

  		//parse inputs
  		$resourcePath = "/offlineMessages/{messageId}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($messageId != null) {
  			$resourcePath = str_replace("{" . "messageId" . "}",
  			                            $this->apiClient->toPathValue($messageId), $resourcePath);
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
	 * deleteOfflineMessage
	 * Delete a specific offline message.
   * messageId, string: The message id (required)

   * @return object
	 */

   public function deleteOfflineMessage($messageId) {

  		//parse inputs
  		$resourcePath = "/offlineMessages/{messageId}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "DELETE";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($messageId != null) {
  			$resourcePath = str_replace("{" . "messageId" . "}",
  			                            $this->apiClient->toPathValue($messageId), $resourcePath);
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

