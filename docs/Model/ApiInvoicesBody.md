# ApiInvoicesBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**link** | **string** | The fiscal &#x60;link.id&#x60; to use. | 
**date_from** | **string** | The date from which you want to start getting invoices for, in &#x60;YYYY-MM-DD&#x60; format.  ⚠️ The value of &#x60;date_from&#x60; cannot be greater than &#x60;date_to&#x60;. | 
**date_to** | **string** | The date you want to stop getting invoices for, in &#x60;YYYY-MM-DD&#x60; format.  ⚠️ The number of days between &#x60;date_from&#x60; and &#x60;date_to&#x60; cannot be over 365.  ⚠️ The value of &#x60;date_to&#x60; cannot be greater than today&#x27;s date (in other words, no future dates). | 
**type** | **string** | The direction of the invoice (from the perspective of the Link owner). - &#x60;OUTFLOW&#x60; indicates a sent invoice. - &#x60;INFLOW&#x60; indicates a received invoice. | 
**attach_xml** | **bool** | When set to &#x60;true&#x60;, you will receive the XML invoice in the response. | [optional] [default to false]
**save_data** | **bool** | Indicates whether or not to persist the data in Belvo. By default, this is set to &#x60;true&#x60; and we return a 201 Created response.  When set to &#x60;false&#x60;, the data won&#x27;t be persisted and we return a 200 OK response. | [optional] [default to true]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

