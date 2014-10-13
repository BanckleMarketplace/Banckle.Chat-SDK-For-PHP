<?php

namespace Banckle\Chat;

class DepartmentsApi {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

  /**
	 * createDepartment
	 * Create a new department.
   * body, Departments: Department object that needs to be added (required)

   * @return object
	 */

   public function createDepartment($body) {

  		//parse inputs
  		$resourcePath = "/departments";
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
	 * updateDepartment
	 * Update a specific department.
   * departmentId, string: The department's id (required)

   * body, Departments: Department object that needs to be updated (required)

   * @return object
	 */

   public function updateDepartment($departmentId, $body) {

  		//parse inputs
  		$resourcePath = "/departments/{departmentId}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "PUT";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      /*if($departmentId != null) {
  		  $queryParams['departmentId'] = $this->apiClient->toQueryValue($departmentId);
  		}*/
		if($departmentId != null) {
  			$resourcePath = str_replace("{" . "departmentId" . "}",
  			                            $this->apiClient->toPathValue($departmentId), $resourcePath);
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
	 * getDepartments
	 * Get list of all the available departments.
   * @return object
	 */

   public function getDepartments() {

  		//parse inputs
  		$resourcePath = "/departments";
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
	 * getDepartment
	 * Get a specific department.
   * departmentId, string: The department's id (required)

   * @return object
	 */

   public function getDepartment($departmentId) {

  		//parse inputs
  		$resourcePath = "/departments/{departmentId}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($departmentId != null) {
  			$resourcePath = str_replace("{" . "departmentId" . "}",
  			                            $this->apiClient->toPathValue($departmentId), $resourcePath);
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
	 * deleteDepartment
	 * Delete a specific department.
   * departmentId, string: The department's id (required)

   * @return object
	 */

   public function deleteDepartment($departmentId) {

  		//parse inputs
  		$resourcePath = "/departments/{departmentId}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "DELETE";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($departmentId != null) {
  			$resourcePath = str_replace("{" . "departmentId" . "}",
  			                            $this->apiClient->toPathValue($departmentId), $resourcePath);
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

