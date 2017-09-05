<?php
/**
 * ScheduleStatusesApi
 * PHP version 5
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Schedule
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Schedule API
 *
 * ConnectWise Schedule API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: platform@connectwise.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Api;

use \Spinen\ConnectWise\Clients\Schedule\ApiClient;
use \Spinen\ConnectWise\Clients\Schedule\ApiException;
use \Spinen\ConnectWise\Clients\Schedule\Configuration;
use \Spinen\ConnectWise\Clients\Schedule\ObjectSerializer;

/**
 * ScheduleStatusesApi Class Doc Comment
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Schedule
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ScheduleStatusesApi
{
    /**
     * API Client
     *
     * @var \Spinen\ConnectWise\Clients\Schedule\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Spinen\ConnectWise\Clients\Schedule\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Spinen\ConnectWise\Clients\Schedule\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Spinen\ConnectWise\Clients\Schedule\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Spinen\ConnectWise\Clients\Schedule\ApiClient $apiClient set the API client
     *
     * @return ScheduleStatusesApi
     */
    public function setApiClient(\Spinen\ConnectWise\Clients\Schedule\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation scheduleStatusesCountGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Schedule API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Schedule\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\Count
     */
    public function scheduleStatusesCountGet($conditions = null)
    {
        list($response) = $this->scheduleStatusesCountGetWithHttpInfo($conditions);
        return $response;
    }

    /**
     * Operation scheduleStatusesCountGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Schedule API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Schedule\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\Count, HTTP status code, HTTP response headers (array of strings)
     */
    public function scheduleStatusesCountGetWithHttpInfo($conditions = null)
    {
        // parse inputs
        $resourcePath = "/schedule/statuses/count";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($conditions !== null) {
            $queryParams['conditions'] = $this->apiClient->getSerializer()->toQueryValue($conditions);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\Count',
                '/schedule/statuses/count'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\Count', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\Count', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation scheduleStatusesGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Schedule API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @throws \Spinen\ConnectWise\Clients\Schedule\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleStatus[]
     */
    public function scheduleStatusesGet($conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        list($response) = $this->scheduleStatusesGetWithHttpInfo($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
        return $response;
    }

    /**
     * Operation scheduleStatusesGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Schedule API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @throws \Spinen\ConnectWise\Clients\Schedule\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleStatus[], HTTP status code, HTTP response headers (array of strings)
     */
    public function scheduleStatusesGetWithHttpInfo($conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        // parse inputs
        $resourcePath = "/schedule/statuses";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($conditions !== null) {
            $queryParams['conditions'] = $this->apiClient->getSerializer()->toQueryValue($conditions);
        }
        // query params
        if ($order_by !== null) {
            $queryParams['orderBy'] = $this->apiClient->getSerializer()->toQueryValue($order_by);
        }
        // query params
        if ($childconditions !== null) {
            $queryParams['childconditions'] = $this->apiClient->getSerializer()->toQueryValue($childconditions);
        }
        // query params
        if ($customfieldconditions !== null) {
            $queryParams['customfieldconditions'] = $this->apiClient->getSerializer()->toQueryValue($customfieldconditions);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['pageSize'] = $this->apiClient->getSerializer()->toQueryValue($page_size);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleStatus[]',
                '/schedule/statuses'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleStatus[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleStatus[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation scheduleStatusesIdDelete
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Schedule API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Schedule\ApiException on non-2xx response
     * @return void
     */
    public function scheduleStatusesIdDelete($id)
    {
        list($response) = $this->scheduleStatusesIdDeleteWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation scheduleStatusesIdDeleteWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Schedule API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Schedule\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function scheduleStatusesIdDeleteWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling scheduleStatusesIdDelete');
        }
        // parse inputs
        $resourcePath = "/schedule/statuses/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/schedule/statuses/{id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation scheduleStatusesIdGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Schedule API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Schedule\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleStatus
     */
    public function scheduleStatusesIdGet($id)
    {
        list($response) = $this->scheduleStatusesIdGetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation scheduleStatusesIdGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Schedule API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Schedule\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleStatus, HTTP status code, HTTP response headers (array of strings)
     */
    public function scheduleStatusesIdGetWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling scheduleStatusesIdGet');
        }
        // parse inputs
        $resourcePath = "/schedule/statuses/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleStatus',
                '/schedule/statuses/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleStatus', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleStatus', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation scheduleStatusesIdPatch
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Schedule API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Schedule\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleStatus
     */
    public function scheduleStatusesIdPatch($id, $operations)
    {
        list($response) = $this->scheduleStatusesIdPatchWithHttpInfo($id, $operations);
        return $response;
    }

    /**
     * Operation scheduleStatusesIdPatchWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Schedule API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Schedule\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleStatus, HTTP status code, HTTP response headers (array of strings)
     */
    public function scheduleStatusesIdPatchWithHttpInfo($id, $operations)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling scheduleStatusesIdPatch');
        }
        // verify the required parameter 'operations' is set
        if ($operations === null) {
            throw new \InvalidArgumentException('Missing the required parameter $operations when calling scheduleStatusesIdPatch');
        }
        // parse inputs
        $resourcePath = "/schedule/statuses/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($operations)) {
            $_tempBody = $operations;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleStatus',
                '/schedule/statuses/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleStatus', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleStatus', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation scheduleStatusesIdPut
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Schedule API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleStatus $schedule_status  (required)
     * @throws \Spinen\ConnectWise\Clients\Schedule\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleStatus
     */
    public function scheduleStatusesIdPut($id, $schedule_status)
    {
        list($response) = $this->scheduleStatusesIdPutWithHttpInfo($id, $schedule_status);
        return $response;
    }

    /**
     * Operation scheduleStatusesIdPutWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Schedule API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleStatus $schedule_status  (required)
     * @throws \Spinen\ConnectWise\Clients\Schedule\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleStatus, HTTP status code, HTTP response headers (array of strings)
     */
    public function scheduleStatusesIdPutWithHttpInfo($id, $schedule_status)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling scheduleStatusesIdPut');
        }
        // verify the required parameter 'schedule_status' is set
        if ($schedule_status === null) {
            throw new \InvalidArgumentException('Missing the required parameter $schedule_status when calling scheduleStatusesIdPut');
        }
        // parse inputs
        $resourcePath = "/schedule/statuses/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($schedule_status)) {
            $_tempBody = $schedule_status;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleStatus',
                '/schedule/statuses/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleStatus', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleStatus', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation scheduleStatusesPost
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Schedule API generated by Swagger Code Generator.
     *
     * @param \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleStatus $schedule_status  (required)
     * @throws \Spinen\ConnectWise\Clients\Schedule\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleStatus
     */
    public function scheduleStatusesPost($schedule_status)
    {
        list($response) = $this->scheduleStatusesPostWithHttpInfo($schedule_status);
        return $response;
    }

    /**
     * Operation scheduleStatusesPostWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Schedule API generated by Swagger Code Generator.
     *
     * @param \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleStatus $schedule_status  (required)
     * @throws \Spinen\ConnectWise\Clients\Schedule\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleStatus, HTTP status code, HTTP response headers (array of strings)
     */
    public function scheduleStatusesPostWithHttpInfo($schedule_status)
    {
        // verify the required parameter 'schedule_status' is set
        if ($schedule_status === null) {
            throw new \InvalidArgumentException('Missing the required parameter $schedule_status when calling scheduleStatusesPost');
        }
        // parse inputs
        $resourcePath = "/schedule/statuses";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($schedule_status)) {
            $_tempBody = $schedule_status;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleStatus',
                '/schedule/statuses'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleStatus', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleStatus', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
