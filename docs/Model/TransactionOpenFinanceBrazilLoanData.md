# TransactionOpenFinanceBrazilLoanData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_detached** | **bool** | Boolean to indicate whether or not this loan payment was part of the original payment schedule.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**installment_id** | **string** | The institution&#x27;s unique ID for this payment installment. | [optional] 
**fees** | [**\Swagger\Client\Model\TransactionLoanDataOpenFinanceBrazilFees[]**](TransactionLoanDataOpenFinanceBrazilFees.md) | Details regarding the fees associated with this payment. Only applicable when &#x60;is_detached&#x60; &#x3D; &#x60;true&#x60;. | 
**charges** | [**\Swagger\Client\Model\TransactionLoanDataOpenFinanceBrazilCharges[]**](TransactionLoanDataOpenFinanceBrazilCharges.md) | Details regarding the charges associated with this payment. Only applicable when &#x60;is_detached&#x60; &#x3D; &#x60;true&#x60;. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

