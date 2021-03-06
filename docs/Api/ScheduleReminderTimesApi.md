# Spinen\ConnectWise\Clients\Schedule\ScheduleReminderTimesApi
Spinen&#39;s PHP ConnectWise Client for Schedule API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**scheduleReminderTimesCountGet**](ScheduleReminderTimesApi.md#scheduleReminderTimesCountGet) | **GET** /schedule/reminderTimes/count | 
[**scheduleReminderTimesGet**](ScheduleReminderTimesApi.md#scheduleReminderTimesGet) | **GET** /schedule/reminderTimes | 
[**scheduleReminderTimesIdGet**](ScheduleReminderTimesApi.md#scheduleReminderTimesIdGet) | **GET** /schedule/reminderTimes/{id} | 
[**scheduleReminderTimesIdPatch**](ScheduleReminderTimesApi.md#scheduleReminderTimesIdPatch) | **PATCH** /schedule/reminderTimes/{id} | 
[**scheduleReminderTimesIdPut**](ScheduleReminderTimesApi.md#scheduleReminderTimesIdPut) | **PUT** /schedule/reminderTimes/{id} | 


# **scheduleReminderTimesCountGet**
> \Spinen\ConnectWise\Clients\Schedule\Model\Count scheduleReminderTimesCountGet($conditions)



Get Reminder Time Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Schedule\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Schedule\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Schedule\Api\ScheduleReminderTimesApi();
$conditions = "conditions_example"; // string | 

try {
    $result = $api_instance->scheduleReminderTimesCountGet($conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleReminderTimesApi->scheduleReminderTimesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conditions** | **string**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Schedule\Model\Count**](../Model/Count.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scheduleReminderTimesGet**
> \Spinen\ConnectWise\Clients\Schedule\Model\ScheduleReminderTime[] scheduleReminderTimesGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get Reminder Time

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Schedule\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Schedule\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Schedule\Api\ScheduleReminderTimesApi();
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->scheduleReminderTimesGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleReminderTimesApi->scheduleReminderTimesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conditions** | **string**|  | [optional]
 **order_by** | **string**|  | [optional]
 **childconditions** | **string**|  | [optional]
 **customfieldconditions** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleReminderTime[]**](../Model/ScheduleReminderTime.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scheduleReminderTimesIdGet**
> \Spinen\ConnectWise\Clients\Schedule\Model\ScheduleReminderTime scheduleReminderTimesIdGet($id)



Get Reminder Time By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Schedule\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Schedule\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Schedule\Api\ScheduleReminderTimesApi();
$id = 56; // int | 

try {
    $result = $api_instance->scheduleReminderTimesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleReminderTimesApi->scheduleReminderTimesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleReminderTime**](../Model/ScheduleReminderTime.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scheduleReminderTimesIdPatch**
> \Spinen\ConnectWise\Clients\Schedule\Model\ScheduleReminderTime scheduleReminderTimesIdPatch($id, $operations)



Update Reminder Time

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Schedule\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Schedule\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Schedule\Api\ScheduleReminderTimesApi();
$id = 56; // int | 
$operations = array(new PatchOperation()); // \Spinen\ConnectWise\Clients\Schedule\Model\PatchOperation[] | 

try {
    $result = $api_instance->scheduleReminderTimesIdPatch($id, $operations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleReminderTimesApi->scheduleReminderTimesIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **operations** | [**\Spinen\ConnectWise\Clients\Schedule\Model\PatchOperation[]**](../Model/PatchOperation.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleReminderTime**](../Model/ScheduleReminderTime.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scheduleReminderTimesIdPut**
> \Spinen\ConnectWise\Clients\Schedule\Model\ScheduleReminderTime scheduleReminderTimesIdPut($id, $reminder_time)



Replace Reminder Time

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Schedule\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Schedule\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Schedule\Api\ScheduleReminderTimesApi();
$id = 56; // int | 
$reminder_time = new \Spinen\ConnectWise\Clients\Schedule\Model\ScheduleReminderTime(); // \Spinen\ConnectWise\Clients\Schedule\Model\ScheduleReminderTime | 

try {
    $result = $api_instance->scheduleReminderTimesIdPut($id, $reminder_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleReminderTimesApi->scheduleReminderTimesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **reminder_time** | [**\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleReminderTime**](../Model/\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleReminderTime.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleReminderTime**](../Model/ScheduleReminderTime.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

