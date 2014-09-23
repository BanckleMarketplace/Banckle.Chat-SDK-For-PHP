<?php

class PluginsApi {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

  /**
	 * getPlugins
	 * Get all plugins.
   * version, string: Console version (required)

   * @return object
	 */

   public function getPlugins($version) {

  		//parse inputs
  		$resourcePath = "/plugins/version/{version}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($version != null) {
  			$resourcePath = str_replace("{" . "version" . "}",
  			                            $this->apiClient->toPathValue($version), $resourcePath);
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
	 * activatePlugin
	 * Activate a plugin.
   * pluginId, string: Plugin's id to activate (required)

   * @return object
	 */

   public function activatePlugin($pluginId) {

  		//parse inputs
  		$resourcePath = "/plugins/{pluginId}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "POST";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($pluginId != null) {
  			$resourcePath = str_replace("{" . "pluginId" . "}",
  			                            $this->apiClient->toPathValue($pluginId), $resourcePath);
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
	 * deactivatePlugin
	 * Deactivate a plugin.
   * pluginId, string: Plugin's id to deactivate (required)

   * @return object
	 */

   public function deactivatePlugin($pluginId) {

  		//parse inputs
  		$resourcePath = "/plugins/{pluginId}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "DELETE";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($pluginId != null) {
  			$resourcePath = str_replace("{" . "pluginId" . "}",
  			                            $this->apiClient->toPathValue($pluginId), $resourcePath);
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
	 * getConfiguration
	 * Get plugin's configuration.
   * pluginId, string: Plugin's id (required)

   * @return object
	 */

   public function getConfiguration($pluginId) {

  		//parse inputs
  		$resourcePath = "/plugins/{pluginId}/config";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($pluginId != null) {
  			$resourcePath = str_replace("{" . "pluginId" . "}",
  			                            $this->apiClient->toPathValue($pluginId), $resourcePath);
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
	 * updateConfiguration
	 * Update plugin's configuration.
   * pluginId, string: Plugin's id (required)

   * @return object
	 */

   public function updateConfiguration($pluginId) {

  		//parse inputs
  		$resourcePath = "/plugins/{pluginId}/config";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "PUT";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($pluginId != null) {
  			$resourcePath = str_replace("{" . "pluginId" . "}",
  			                            $this->apiClient->toPathValue($pluginId), $resourcePath);
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
	 * likeCounter
	 * Increase plugin's like counter.
   * pluginId, string: Plugin's id (required)

   * @return object
	 */

   public function likeCounter($pluginId) {

  		//parse inputs
  		$resourcePath = "/plugins/{pluginId}/like";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "POST";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($pluginId != null) {
  			$resourcePath = str_replace("{" . "pluginId" . "}",
  			                            $this->apiClient->toPathValue($pluginId), $resourcePath);
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

