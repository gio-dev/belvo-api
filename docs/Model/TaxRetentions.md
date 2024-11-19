# TaxRetentions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Belvo&#x27;s unique identifier for the current item. | [optional] 
**link** | **string** | The &#x60;link.id&#x60; the data belongs to. | [optional] 
**collected_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp when the data point was collected. | 
**created_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp of when the data point was created in Belvo&#x27;s database. | [optional] 
**invoice_identification** | **string** | The fiscal institution&#x27;s unique ID for the invoice that the tax retention relates to. | 
**version** | **string** | The CFDI version of the tax retentions. | 
**code** | **int** | The tax retention code. For more information, see our [SAT Catalogs DevPortal article](https://developers.belvo.com/docs/sat-catalogs#retention-code). | 
**issued_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp of when the tax retention was issued. | 
**certified_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp of when the tax retention was certified. | 
**cancelled_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp of when the tax retention was canceled (if applicable). | 
**sender_id** | **string** | The fiscal ID of the invoice sender. | 
**sender_name** | **string** | The name of the invoice sender. | 
**receiver_nationality** | **string** | Whether the invoice receiver is a Mexican national or not. If the receiver is not considered a Mexican national, the retained taxes can be calculated differently. Possible values:   - &#x60;NATIONAL&#x60;   - &#x60;FOREIGN&#x60; | 
**receiver_id** | **string** | The fiscal ID of the invoice receiver. | 
**receiver_name** | **string** | The name of the invoice receiver. | 
**total_invoice_amount** | **float** | The total amount of the invoice that the tax retention relates to. | 
**total_exempt_amount** | **float** | Total amount that is exempt from taxation. | 
**total_retained_amount** | **float** | Total tax retained. | 
**total_taxable_amount** | **float** | The total amount that can be taxed. Calculated as &#x60;total_invoice_amount&#x60; - &#x60;total_exempt_amount&#x60;. | 
**retention_breakdown** | [**\Swagger\Client\Model\ApitaxretentionsRetentionBreakdown[]**](ApitaxretentionsRetentionBreakdown.md) | A breakdown of the retained taxes. | 
**xml** | **string** | The tax retention document in XML form. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

