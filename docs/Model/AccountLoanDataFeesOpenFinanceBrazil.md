# AccountLoanDataFeesOpenFinanceBrazil

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | **Note:** This field is not applicable for OF Brazil and will return null. | 
**value** | **float** | The total value of the fee. Same currency as the loan. | 
**name** | **string** | The fee name.   &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network if the &#x60;fees&#x60; field is available. | 
**code** | **string** | The fee code.   &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network if the &#x60;fees&#x60; field is available. | 
**fee_charge_type** | **string** | Indicates the type of charge. We return one of the following values:    - &#x60;SINGLE&#x60;   - &#x60;PER_INSTALLMENT&#x60;     &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network if the &#x60;fees&#x60; field is available. | 
**fee_charge** | **string** | Billing method, as agreed upon with the institution. We return one of the following values:    - &#x60;MINIMUM&#x60;   - &#x60;MAXIMUM&#x60;   - &#x60;FIXED&#x60;   - &#x60;PERCENTAGE&#x60;     &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network if the &#x60;fees&#x60; field is available. | 
**rate** | **float** | The percentage rate of the fee. Required when &#x60;fee_charge&#x60; is set to &#x60;PERCENTAGE&#x60;. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

