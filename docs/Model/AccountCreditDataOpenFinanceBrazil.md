# AccountCreditDataOpenFinanceBrazil

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**collected_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp when the data point was collected. | 
**credit_limit** | **float** | The upper credit limit of the card.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**limits** | [**\Swagger\Client\Model\AccountsOFDABrazilCreditDataLimits[]**](AccountsOFDABrazilCreditDataLimits.md) |  | [optional] 
**cutting_date** | [**\DateTime**](\DateTime.md) | The date when the credit card&#x27;s bill is due. | [optional] 
**minimum_payment** | **float** | The minimum amount that the account owner needs to pay in the current credit period. | [optional] 
**network** | **string** | The credit network that the card is associated with. We return one of the following values:    - &#x60;VISA&#x60;   - &#x60;MASTERCARD&#x60;   - &#x60;AMERICAN_EXPRESS&#x60;   - &#x60;DINERS_CLUB&#x60;   - &#x60;HIPERCARD&#x60;   - &#x60;BANDEIRA_PROPRIA&#x60;   - &#x60;CHEQUE_ELETRONICO&#x60;   - &#x60;ELO&#x60;   - &#x60;OTHER&#x60;    &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | [optional] 
**network_additional_info** | **string** | Additional information about the credit card network. | [optional] 
**cards** | [**\Swagger\Client\Model\AccountsOFDABrazilCreditDataCards[]**](AccountsOFDABrazilCreditDataCards.md) | Details regarding the cards associated with the account. | [optional] 
**next_payment_date** | **string** | **Note:** This field is not applicable for OF Brazil and will return null. | [optional] 
**no_interest_payment** | **float** | **Note:** This field is not applicable for OF Brazil and will return null. | [optional] 
**interest_rate** | **float** | **Note:** This field is not applicable for OF Brazil and will return null. | [optional] 
**monthly_payment** | **float** | **Note:** This field is not applicable for OF Brazil and will return null. | [optional] 
**last_payment_date** | **string** | **Note:** This field is not applicable for OF Brazil and will return null. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

