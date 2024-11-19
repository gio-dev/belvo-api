# InlineResponse2009

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Belvo&#x27;s unique identifier for the current item. | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp of when the data point was created in Belvo&#x27;s database. | [optional] 
**collected_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp when the data point was collected. | [optional] 
**account** | [**\Swagger\Client\Model\AccountsOFDABrazil**](AccountsOFDABrazil.md) |  | [optional] 
**internal_identification** | **string** | The institution&#x27;s internal identifier for the bill. | [optional] 
**bill_name** | **string** | The title of the monthly credit card bill the transaction belongs to. The format of the returned value is institution specific, however, some common examples are:  - diciembre-2021 - dec-2021 - dec-21  &gt; **Note**: This field is only returned for &#x27;closed&#x27; bills (meaning the billing period has ended and the bill has been emitted). If the billing period is still ongoing, we return &#x60;null&#x60;. | [optional] 
**due_date** | [**\DateTime**](\DateTime.md) | The date that the bill is to be paid, in &#x60;YYYY-MM-DD&#x60; format. | [optional] 
**currency** | **string** | The three-letter currency code (ISO-4217). | [optional] 
**total_amount** | **float** | The total amount of the bill. | [optional] 
**minimum_amount** | **float** | The minimum amount to pay. | [optional] 
**is_installment** | **bool** | Boolean to indicate whether this bill can be paid in installments. | [optional] 
**finance_charges** | [**\Swagger\Client\Model\ApibillsFinanceCharges[]**](ApibillsFinanceCharges.md) |  | [optional] 
**payments** | [**\Swagger\Client\Model\ApibillsPayments[]**](ApibillsPayments.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

