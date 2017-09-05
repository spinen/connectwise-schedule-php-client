# ScheduleEntry

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**object_id** | **int** |  | [optional] 
**name** | **string** |  | [optional] 
**member** | [**\Spinen\ConnectWise\Clients\Schedule\Model\MemberReference**](MemberReference.md) | Activity schedule requires a member | [optional] 
**where** | [**\Spinen\ConnectWise\Clients\Schedule\Model\ServiceLocationReference**](ServiceLocationReference.md) |  | [optional] 
**date_start** | [**\DateTime**](\DateTime.md) |  | [optional] 
**date_end** | [**\DateTime**](\DateTime.md) |  | [optional] 
**reminder** | [**\Spinen\ConnectWise\Clients\Schedule\Model\ReminderReference**](ReminderReference.md) |  | [optional] 
**status** | [**\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleStatusReference**](ScheduleStatusReference.md) |  | [optional] 
**type** | [**\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleTypeReference**](ScheduleTypeReference.md) |  | 
**span** | [**\Spinen\ConnectWise\Clients\Schedule\Model\ScheduleSpanReference**](ScheduleSpanReference.md) |  | [optional] 
**done_flag** | **bool** |  | [optional] 
**acknowledged_flag** | **bool** |  | [optional] 
**owner_flag** | **bool** |  | [optional] 
**allow_schedule_conflicts_flag** | **bool** |  | [optional] 
**add_member_to_project_flag** | **bool** |  | [optional] 
**project_role_id** | **int** |  | [optional] 
**mobile_guid** | [**\Spinen\ConnectWise\Clients\Schedule\Model\Guid**](Guid.md) |  | [optional] 
**close_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**hours** | **double** |  | [optional] 
**_info** | [**\Spinen\ConnectWise\Clients\Schedule\Model\Metadata**](Metadata.md) | Metadata of the entity | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


