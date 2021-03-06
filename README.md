# connectwise-schedule-php-client
ConnectWise Schedule API

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Package version: 3.0.0-beta
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.6.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```bash
composer require spinen/connectwise-schedule-php-client
```

Or modify your `composer.json` file:

```json
{
    "require": {
        "spinen/connectwise-schedule-php-client": "^3.0.0-beta"
    }
}
```

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/connectwise-schedule-php-client/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Schedule\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Schedule\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Schedule\Api\ScheduleEntriesApi();
$conditions = "conditions_example"; // string | 

try {
    $result = $api_instance->scheduleEntriesCountGet($conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleEntriesApi->scheduleEntriesCountGet: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ScheduleEntriesApi* | [**scheduleEntriesCountGet**](docs/Api/ScheduleEntriesApi.md#scheduleentriescountget) | **GET** /schedule/entries/count | 
*ScheduleEntriesApi* | [**scheduleEntriesGet**](docs/Api/ScheduleEntriesApi.md#scheduleentriesget) | **GET** /schedule/entries | 
*ScheduleEntriesApi* | [**scheduleEntriesIdDelete**](docs/Api/ScheduleEntriesApi.md#scheduleentriesiddelete) | **DELETE** /schedule/entries/{id} | 
*ScheduleEntriesApi* | [**scheduleEntriesIdGet**](docs/Api/ScheduleEntriesApi.md#scheduleentriesidget) | **GET** /schedule/entries/{id} | 
*ScheduleEntriesApi* | [**scheduleEntriesIdPatch**](docs/Api/ScheduleEntriesApi.md#scheduleentriesidpatch) | **PATCH** /schedule/entries/{id} | 
*ScheduleEntriesApi* | [**scheduleEntriesIdPut**](docs/Api/ScheduleEntriesApi.md#scheduleentriesidput) | **PUT** /schedule/entries/{id} | 
*ScheduleEntriesApi* | [**scheduleEntriesPost**](docs/Api/ScheduleEntriesApi.md#scheduleentriespost) | **POST** /schedule/entries | 
*ScheduleReminderTimesApi* | [**scheduleReminderTimesCountGet**](docs/Api/ScheduleReminderTimesApi.md#scheduleremindertimescountget) | **GET** /schedule/reminderTimes/count | 
*ScheduleReminderTimesApi* | [**scheduleReminderTimesGet**](docs/Api/ScheduleReminderTimesApi.md#scheduleremindertimesget) | **GET** /schedule/reminderTimes | 
*ScheduleReminderTimesApi* | [**scheduleReminderTimesIdGet**](docs/Api/ScheduleReminderTimesApi.md#scheduleremindertimesidget) | **GET** /schedule/reminderTimes/{id} | 
*ScheduleReminderTimesApi* | [**scheduleReminderTimesIdPatch**](docs/Api/ScheduleReminderTimesApi.md#scheduleremindertimesidpatch) | **PATCH** /schedule/reminderTimes/{id} | 
*ScheduleReminderTimesApi* | [**scheduleReminderTimesIdPut**](docs/Api/ScheduleReminderTimesApi.md#scheduleremindertimesidput) | **PUT** /schedule/reminderTimes/{id} | 
*ScheduleStatusesApi* | [**scheduleStatusesCountGet**](docs/Api/ScheduleStatusesApi.md#schedulestatusescountget) | **GET** /schedule/statuses/count | 
*ScheduleStatusesApi* | [**scheduleStatusesGet**](docs/Api/ScheduleStatusesApi.md#schedulestatusesget) | **GET** /schedule/statuses | 
*ScheduleStatusesApi* | [**scheduleStatusesIdDelete**](docs/Api/ScheduleStatusesApi.md#schedulestatusesiddelete) | **DELETE** /schedule/statuses/{id} | 
*ScheduleStatusesApi* | [**scheduleStatusesIdGet**](docs/Api/ScheduleStatusesApi.md#schedulestatusesidget) | **GET** /schedule/statuses/{id} | 
*ScheduleStatusesApi* | [**scheduleStatusesIdPatch**](docs/Api/ScheduleStatusesApi.md#schedulestatusesidpatch) | **PATCH** /schedule/statuses/{id} | 
*ScheduleStatusesApi* | [**scheduleStatusesIdPut**](docs/Api/ScheduleStatusesApi.md#schedulestatusesidput) | **PUT** /schedule/statuses/{id} | 
*ScheduleStatusesApi* | [**scheduleStatusesPost**](docs/Api/ScheduleStatusesApi.md#schedulestatusespost) | **POST** /schedule/statuses | 
*ScheduleTypesApi* | [**scheduleTypesCountGet**](docs/Api/ScheduleTypesApi.md#scheduletypescountget) | **GET** /schedule/types/count | 
*ScheduleTypesApi* | [**scheduleTypesGet**](docs/Api/ScheduleTypesApi.md#scheduletypesget) | **GET** /schedule/types | 
*ScheduleTypesApi* | [**scheduleTypesIdDelete**](docs/Api/ScheduleTypesApi.md#scheduletypesiddelete) | **DELETE** /schedule/types/{id} | 
*ScheduleTypesApi* | [**scheduleTypesIdGet**](docs/Api/ScheduleTypesApi.md#scheduletypesidget) | **GET** /schedule/types/{id} | 
*ScheduleTypesApi* | [**scheduleTypesIdPatch**](docs/Api/ScheduleTypesApi.md#scheduletypesidpatch) | **PATCH** /schedule/types/{id} | 
*ScheduleTypesApi* | [**scheduleTypesIdPut**](docs/Api/ScheduleTypesApi.md#scheduletypesidput) | **PUT** /schedule/types/{id} | 
*ScheduleTypesApi* | [**scheduleTypesPost**](docs/Api/ScheduleTypesApi.md#scheduletypespost) | **POST** /schedule/types | 


## Documentation For Models

 - [ChargeCodeReference](docs/Model/ChargeCodeReference.md)
 - [Count](docs/Model/Count.md)
 - [Error](docs/Model/Error.md)
 - [Guid](docs/Model/Guid.md)
 - [MemberReference](docs/Model/MemberReference.md)
 - [Metadata](docs/Model/Metadata.md)
 - [PatchOperation](docs/Model/PatchOperation.md)
 - [ReminderReference](docs/Model/ReminderReference.md)
 - [ScheduleEntry](docs/Model/ScheduleEntry.md)
 - [ScheduleReminderTime](docs/Model/ScheduleReminderTime.md)
 - [ScheduleSpanReference](docs/Model/ScheduleSpanReference.md)
 - [ScheduleStatus](docs/Model/ScheduleStatus.md)
 - [ScheduleStatusReference](docs/Model/ScheduleStatusReference.md)
 - [ScheduleType](docs/Model/ScheduleType.md)
 - [ScheduleTypeReference](docs/Model/ScheduleTypeReference.md)
 - [ServiceLocationReference](docs/Model/ServiceLocationReference.md)
 - [ValidationError](docs/Model/ValidationError.md)


## Documentation For Authorization


## BasicAuth

- **Type**: HTTP basic authentication

