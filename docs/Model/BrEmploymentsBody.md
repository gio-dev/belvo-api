# BrEmploymentsBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**link** | **string** | The &#x60;link.id&#x60; that you want to get information for. | 
**date_from** | **string** | The date from which you want to start getting employment information for, in &#x60;YYYY-MM-DD&#x60; format.   ⚠️ The value of &#x60;date_from&#x60; cannot be greater than &#x60;date_to&#x60;. | [optional] 
**date_to** | **string** | The date you want to stop getting employment information for, in &#x60;YYYY-MM-DD&#x60; format.   ⚠️ The value of &#x60;date_to&#x60; cannot be greater than today&#x27;s date (in other words, no future dates). | [optional] 
**save_data** | **bool** | Indicates whether or not to persist the data in Belvo. By default, this is set to &#x60;true&#x60; and we return a 201 Created response.  When set to &#x60;false&#x60;, the data won&#x27;t be persisted and we return a 200 OK response. | [optional] [default to true]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

