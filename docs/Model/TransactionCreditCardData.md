# TransactionCreditCardData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**collected_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp when the data point was collected. | [optional] 
**bill_name** | **string** | The title of the monthly credit card bill the transaction belongs to. The format of the returned value is institution specific, however, some common examples are:  - diciembre-2021 - dec-2021 - dec-21 | [optional] 
**bill_status** | **string** | The status of the bill that the transaction appears on. Can be one of:    - &#x60;PAID&#x60;: The bill has been paid in full.   - &#x60;CLOSED&#x60;: The bill has been closed by the institution.   - &#x60;OPEN&#x60;: The bill is currently open. (Note: This is the main bill that Belvo retrieves balance data from).   - &#x60;FUTURE&#x60;: The bill is pending.   - &#x60;null&#x60;: No bill status was identified.    ℹ️ Note: Some banks consider CLOSED as PAID. | [optional] 
**bill_amount** | **float** | The aggregate bill amount, as of &#x60;collected_at&#x60;. | [optional] 
**previous_bill_total** | **string** | The total amount of the previous month&#x27;s bill, if available. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

