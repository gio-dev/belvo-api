# AccountsCreditData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**credit_limit** | **float** | The maximum amount of credit the owner can receive. | 
**collected_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp when the data point was collected. | 
**cutting_date** | **string** | The closing date of the credit period, in &#x60;YYYY-MM-DD&#x60; format. | 
**next_payment_date** | **string** | The due date for the next payment , in &#x60;YYYY-MM-DD&#x60; format. | 
**minimum_payment** | **float** | The minimum amount to be paid on the &#x60;next_payment_date&#x60;. | 
**no_interest_payment** | **float** | The minimum amount required to pay to avoid generating interest. | 
**interest_rate** | **float** | The annualized interest rate of the credit. | 
**monthly_payment** | **float** | *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.*  *The recurrent monthly payment, if applicable.* | [optional] 
**last_payment_date** | **string** | *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.*   *The date when the last credit payment was made, in &#x60;YYYY-MM-DD&#x60; format.* | [optional] 
**last_period_balance** | **string** | *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.*   *The balance remaining after the &#x60;last_payment_date&#x60;.* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

