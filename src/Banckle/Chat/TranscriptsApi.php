<?php

namespace Banckle\Chat;

class TranscriptsApi {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

  /**
	 * searchTranscripts
	 * Search transcripts.
   * startTime, string: start time, in mm/dd/yyyy format (required)

   * endTime, string: end time, in mm/dd/yyyy format (required)

   * messageNumber, int: the most message number in result transcripts (required)

   * widgetId, string: widget id which transcripts belong to (required)

   * keywords, string: keywords in result transcripts (required)

   * @return object
	 */

   public function searchTranscripts($startTime, $endTime, $messageNumber, $widgetId, $keywords) {

  		//parse inputs
  		$resourcePath = "/transcripts?start={startTime}&end={endTime}&messages={messageNumber}&widget={widgetId}&keywords={keywords}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($startTime != null) {
  			$resourcePath = str_replace("{" . "startTime" . "}",
  			                            $this->apiClient->toPathValue($startTime), $resourcePath);
  		}
  		if($endTime != null) {
  			$resourcePath = str_replace("{" . "endTime" . "}",
  			                            $this->apiClient->toPathValue($endTime), $resourcePath);
  		}
  		if($messageNumber != null) {
  			$resourcePath = str_replace("{" . "messageNumber" . "}",
  			                            $this->apiClient->toPathValue($messageNumber), $resourcePath);
  		}
  		if($widgetId != null) {
  			$resourcePath = str_replace("{" . "widgetId" . "}",
  			                            $this->apiClient->toPathValue($widgetId), $resourcePath);
  		}
  		if($keywords != null) {
  			$resourcePath = str_replace("{" . "keywords" . "}",
  			                            $this->apiClient->toPathValue($keywords), $resourcePath);
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
	 * getTranscriptMessages
	 * Get transcript messages.
   * thread, string: transcript thread information (required)

   * @return object
	 */

   public function getTranscriptMessages($thread) {

  		//parse inputs
  		$resourcePath = "/transcripts/{thread}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($thread != null) {
  			$resourcePath = str_replace("{" . "thread" . "}",
  			                            $this->apiClient->toPathValue($thread), $resourcePath);
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
	 * deleteTranscript
	 * Delete transcript.
   * transcriptId, string: Transcript ID (required)

   * @return object
	 */

   public function deleteTranscript($transcriptId) {

  		//parse inputs
  		$resourcePath = "/transcripts/{transcriptId}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "DELETE";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($transcriptId != null) {
  			$resourcePath = str_replace("{" . "transcriptId" . "}",
  			                            $this->apiClient->toPathValue($transcriptId), $resourcePath);
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
	 * emailTranscripts
	 * Email transcripts.
   * recipient, string: To address in email (required)

   * subject, string: Subject information in email (required)

   * additionalMessage, int: additional message in email body except transcripts messages (required)

   * timezoneOffset, string: time zone offset applied in date information in message body (required)

   * threads, string: transcripts threads in email body, split in comma (required)

   * @return object
	 */

   public function emailTranscripts($recipient, $subject, $additionalMessage, $timezoneOffset, $threads) {

  		//parse inputs
  		$resourcePath = "/transcripts/email?recipient={recipient}&amp;subject={subject}&amp;additionalMessage={additionalMessage}&amp;timeZoneOffset={timezoneOffset}&amp;threads={threads}";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "PUT";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($recipient != null) {
  			$resourcePath = str_replace("{" . "recipient" . "}",
  			                            $this->apiClient->toPathValue($recipient), $resourcePath);
  		}
  		if($subject != null) {
  			$resourcePath = str_replace("{" . "subject" . "}",
  			                            $this->apiClient->toPathValue($subject), $resourcePath);
  		}
  		if($additionalMessage != null) {
  			$resourcePath = str_replace("{" . "additionalMessage" . "}",
  			                            $this->apiClient->toPathValue($additionalMessage), $resourcePath);
  		}
  		if($timezoneOffset != null) {
  			$resourcePath = str_replace("{" . "timezoneOffset" . "}",
  			                            $this->apiClient->toPathValue($timezoneOffset), $resourcePath);
  		}
  		if($threads != null) {
  			$resourcePath = str_replace("{" . "threads" . "}",
  			                            $this->apiClient->toPathValue($threads), $resourcePath);
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
	 * createTranscriptLink
	 * Create transcript permanent link.
   * thread, string: transcript thread information (required)

   * @return object
	 */

   public function createTranscriptLink($thread) {

  		//parse inputs
  		$resourcePath = "/transcripts/{thread}/link";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "POST";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($thread != null) {
  			$resourcePath = str_replace("{" . "thread" . "}",
  			                            $this->apiClient->toPathValue($thread), $resourcePath);
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
	 * deleteTranscriptLink
	 * Delete transcript permanent link.
   * thread, string: transcript thread information (required)

   * @return object
	 */

   public function deleteTranscriptLink($thread) {

  		//parse inputs
  		$resourcePath = "/transcripts/{thread}/link";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "DELETE";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($thread != null) {
  			$resourcePath = str_replace("{" . "thread" . "}",
  			                            $this->apiClient->toPathValue($thread), $resourcePath);
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
	 * getTranscriptLink
	 * GET transcript permanent link content.
   * thread, string: transcript thread information (required)

   * @return object
	 */

   public function getTranscriptLink($thread) {

  		//parse inputs
  		$resourcePath = "/transcripts/{thread}/link";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($thread != null) {
  			$resourcePath = str_replace("{" . "thread" . "}",
  			                            $this->apiClient->toPathValue($thread), $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);

		return $response;
      if(! $response){
          return null;
        }

  		/*$responseObject = $this->apiClient->deserialize($response,
  		                                                'string');
  		return $responseObject;*/

      }
  

}

