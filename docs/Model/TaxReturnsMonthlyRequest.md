# TaxReturnsMonthlyRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**link** | **string** | The fiscal &#x60;link.id&#x60; you want specific tax return information for. | 
**attach_pdf** | **bool** | When this is set to &#x60;true&#x60;, you will receive the PDF as a binary string in the response. | [optional] [default to false]
**save_data** | **bool** | Indicates whether or not to persist the data in Belvo. By default, this is set to &#x60;true&#x60; and we return a 201 Created response.  When set to &#x60;false&#x60;, the data won&#x27;t be persisted and we return a 200 OK response. | [optional] [default to true]
**type** | **string** | The type of tax return to return. For monthly tax returns, this field must be set to &#x60;monthly&#x60;. | [default to 'monthly']
**date_from** | **string** | The starting date you want to get tax returns for, in &#x60;YYYY-MM-DD&#x60; format.   ⚠️ The value of &#x60;date_from&#x60; cannot be greater than &#x60;date_to&#x60;. | 
**date_to** | **string** | The date you want to stop getting tax returns for, in &#x60;YYYY-MM-DD&#x60; format.   ⚠️ The value of &#x60;date_to&#x60; cannot be greater than today&#x27;s date (in other words, no future dates). | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

