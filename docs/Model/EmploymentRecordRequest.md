# EmploymentRecordRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**link** | **string** | The &#x60;link.id&#x60; you want to retrieve employment records for. | 
**attach_pdf** | **bool** | When set to &#x60;true&#x60;, you will receive the PDF in binary format in the response. | [optional] [default to false]
**save_data** | **bool** | Indicates whether or not to persist the data in Belvo. By default, this is set to &#x60;true&#x60; and we return a 201 Created response.  When set to &#x60;false&#x60;, the data won&#x27;t be persisted and we return a 200 OK response. | [optional] [default to true]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

