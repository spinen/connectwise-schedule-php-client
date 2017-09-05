<?php
/**
 * ScheduleTypesApi
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
 * ScheduleTypesApi Class Doc Comment
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Schedule
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ScheduleTypesApi
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
     * @return ScheduleTypesApi
     */
    public function setApiClient(\Spinen\ConnectWise\Clients\Schedule\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation scheduleTypesCountGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Schedule API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Schedule\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\Count
     */
    public function scheduleTypesCountGet($conditions = null)
    {
        list($response) = $this->scheduleTypesCountGetWithHttpInfo($conditions);
        return $response;
    }

    /**
     * Operation scheduleTypesCountGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Schedule API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Schedule\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\Count, HTTP status code, HTTP response headers (array of strings)
     */
    public function scheduleTypesCountGetWithHttpInfo($conditions = null)
    {
        // parse inputs
        $resourcePath = "/schedule/types/count";
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
                '/schedule/types/count'
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
     * Operation scheduleTypesGet
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
     * @return \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleType[]
     */
    public function scheduleTypesGet($conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        list($response) = $this->scheduleTypesGetWithHttpInfo($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
        return $response;
    }

    /**
     * Operation scheduleTypesGetWithHttpInfo
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
     * @return array of \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleType[], HTTP status code, HTTP response headers (array of strings)
     */
    public function scheduleTypesGetWithHttpInfo($conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        // parse inputs
        $resourcePath = "/schedule/types";
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
                '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleType[]',
                '/schedule/types'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleType[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleType[]', $e->getResponseHeaders());
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
     * Operation scheduleTypesIdDelete
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Schedule API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Schedule\ApiException on non-2xx response
     * @return void
     */
    public function scheduleTypesIdDelete($id)
    {
        list($response) = $this->scheduleTypesIdDeleteWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation scheduleTypesIdDeleteWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Schedule API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Schedule\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function scheduleTypesIdDeleteWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling scheduleTypesIdDelete');
        }
        // parse inputs
        $resourcePath = "/schedule/types/{id}";
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
                '/schedule/types/{id}'
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
     * Operation scheduleTypesIdGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Schedule API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Schedule\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleType
     */
    public function scheduleTypesIdGet($id)
    {
        list($response) = $this->scheduleTypesIdGetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation scheduleTypesIdGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Schedule API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\Schedule\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleType, HTTP status code, HTTP response headers (array of strings)
     */
    public function scheduleTypesIdGetWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling scheduleTypesIdGet');
        }
        // parse inputs
        $resourcePath = "/schedule/types/{id}";
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
                '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleType',
                '/schedule/types/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleType', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleType', $e->getResponseHeaders());
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
     * Operation scheduleTypesIdPatch
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Schedule API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Schedule\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleType
     */
    public function scheduleTypesIdPatch($id, $operations)
    {
        list($response) = $this->scheduleTypesIdPatchWithHttpInfo($id, $operations);
        return $response;
    }

    /**
     * Operation scheduleTypesIdPatchWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Schedule API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Schedule\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleType, HTTP status code, HTTP response headers (array of strings)
     */
    public function scheduleTypesIdPatchWithHttpInfo($id, $operations)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling scheduleTypesIdPatch');
        }
        // verify the required parameter 'operations' is set
        if ($operations === null) {
            throw new \InvalidArgumentException('Missing the required parameter $operations when calling scheduleTypesIdPatch');
        }
        // parse inputs
        $resourcePath = "/schedule/types/{id}";
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
                '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleType',
                '/schedule/types/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleType', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleType', $e->getResponseHeaders());
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
     * Operation scheduleTypesIdPut
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Schedule API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleType $schedule_type  (required)
     * @throws \Spinen\ConnectWise\Clients\Schedule\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleType
     */
    public function scheduleTypesIdPut($id, $schedule_type)
    {
        list($response) = $this->scheduleTypesIdPutWithHttpInfo($id, $schedule_type);
        return $response;
    }

    /**
     * Operation scheduleTypesIdPutWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Schedule API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleType $schedule_type  (required)
     * @throws \Spinen\ConnectWise\Clients\Schedule\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleType, HTTP status code, HTTP response headers (array of strings)
     */
    public function scheduleTypesIdPutWithHttpInfo($id, $schedule_type)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling scheduleTypesIdPut');
        }
        // verify the required parameter 'schedule_type' is set
        if ($schedule_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $schedule_type when calling scheduleTypesIdPut');
        }
        // parse inputs
        $resourcePath = "/schedule/types/{id}";
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
        if (isset($schedule_type)) {
            $_tempBody = $schedule_type;
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
                '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleType',
                '/schedule/types/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleType', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleType', $e->getResponseHeaders());
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
     * Operation scheduleTypesPost
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Schedule API generated by Swagger Code Generator.
     *
     * @param \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleType $schedule_type  (required)
     * @throws \Spinen\ConnectWise\Clients\Schedule\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleType
     */
    public function scheduleTypesPost($schedule_type)
    {
        list($response) = $this->scheduleTypesPostWithHttpInfo($schedule_type);
        return $response;
    }

    /**
     * Operation scheduleTypesPostWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Schedule API generated by Swagger Code Generator.
     *
     * @param \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleType $schedule_type  (required)
     * @throws \Spinen\ConnectWise\Clients\Schedule\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleType, HTTP status code, HTTP response headers (array of strings)
     */
    public function scheduleTypesPostWithHttpInfo($schedule_type)
    {
        // verify the required parameter 'schedule_type' is set
        if ($schedule_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $schedule_type when calling scheduleTypesPost');
        }
        // parse inputs
        $resourcePath = "/schedule/types";
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
        if (isset($schedule_type)) {
            $_tempBody = $schedule_type;
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
                '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleType',
                '/schedule/types'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleType', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Schedule\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleType', $e->getResponseHeaders());
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