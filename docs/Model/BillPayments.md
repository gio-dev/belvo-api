# BillPayments

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of payment. We return one of the following values:    - &#x60;INSTALLMENT&#x60;   - &#x60;FULL&#x60;   - &#x60;OTHER&#x60;   - &#x60;null&#x60; | [optional] 
**payment_date** | [**\DateTime**](\DateTime.md) | The date that the payment was made, in &#x60;YYYY-MM-DD&#x60; format. | [optional] 
**payment_mode** | **string** | The method in which the payment was made. We return one of the following values:    - &#x60;DIRECT_DEBIT&#x60;   - &#x60;BANK_SLIP&#x60;   - &#x60;SALARY_DEDUCTION&#x60;   - &#x60;PIX&#x60;   - &#x60;null&#x60; | [optional] 
**currency** | **string** | The three-letter currency code (ISO-4217). | [optional] 
**amount** | **float** | The amount of the payment. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

