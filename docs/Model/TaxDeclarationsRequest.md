# TaxDeclarationsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**link** | **string** | The fiscal &#x60;link.id&#x60; you want specific tax declaration information for. | 
**year_from** | **string** | The starting year you want to get tax declaration for, in &#x60;YYYY&#x60; format. | 
**year_to** | **string** | The year you want to stop getting tax declaration for, in &#x60;YYYY&#x60; format. | 
**attach_pdf** | **bool** | When this is set to &#x60;true&#x60;, you will receive the PDF as a binary string in the response. | [optional] [default to false]
**save_data** | **bool** | Indicates whether or not to persist the data in Belvo. By default, this is set to &#x60;true&#x60; and we return a 201 Created response.  When set to &#x60;false&#x60;, the data won&#x27;t be persisted and we return a 200 OK response. | [optional] [default to true]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

