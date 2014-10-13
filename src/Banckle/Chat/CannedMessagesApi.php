<?php

namespace Banckle\Chat;

class CannedMessagesApi {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

  /**
	 * createMessage
	 * Create a new message.
   * body, body: Message object that needs to be added (required)

   * @return object
	 */

   public function createMessage($body) {

  		//parse inputs
  		$resourcePath = "/cannedMessages";
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
	 * updateMessage
	 * Update a specific message.
   * messageId, string: The message id (required)

   * body, body: Message object that needs to be updated (required)

   * @return object
	 */

   public function updateMessage($messageId, $body) {

  		//parse inputs
  		$resourcePath = "/cannedMessages/{messageId}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "PUT";
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
	 * getMessages
	 * Get list of all the available messages.
   * @return object
	 */

   public function getMessages() {

  		//parse inputs
  		$resourcePath = "/cannedMessages";
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
	 * getMessage
	 * Get a specific message.
   * messageId, string: The message id (required)

   * @return object
	 */

   public function getMessage($messageId) {

  		//parse inputs
  		$resourcePath = "/cannedMessages/{messageId}";
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
	 * deleteMessage
	 * Delete a specific message.
   * messageId, string: The message id (required)

   * @return object
	 */

   public function deleteMessage($messageId) {

  		//parse inputs
  		$resourcePath = "/cannedMessages/{messageId}";
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

