# AccountsOFDABrazilLoanDataContractedCharges

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of contracted charge. We return one of the following values:    - &#x60;LATE_PAYMENT_INTEREST_FEE&#x60;   - &#x60;LATE_PAYMENT_PENALTY_FEE&#x60;   - &#x60;DEFAULT_INTEREST_FEE&#x60;   - &#x60;LOAN_CONTRACT_TAX&#x60;   - &#x60;LATE_PAYMENT_TAX&#x60;   - &#x60;NO_CHARGE&#x60;   - &#x60;OTHER&#x60;    &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network if the &#x60;contracted_charges&#x60; field is available. | [optional] 
**info** | **string** | Additional information regarding the contracted charge. | [optional] 
**rate** | **float** | The percentage rate of the charge, calculated based on the amount of the loan. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

