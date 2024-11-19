# AccountLoanDataInterestRateOpenFinanceBrazil

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the type of interest rate applied to the loan.  **Note:** For OFDA Brazil, we recommend you use the &#x60;interest_date_data.tax_type&#x60; parameter. | 
**type** | **string** | The period that the interest is applied to the loan.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**value** | **float** | The interest rate (in percent or currency value).  **Note:** For OFDA Brazil, we recommend you use the &#x60;interest_date_data.pre_fixed_rate&#x60; and &#x60;interest_date_data.post_fixed_rate&#x60;parameter. | 
**interest_rate_data** | [**\Swagger\Client\Model\AccountsOFDABrazilLoanDataInterestRateData**](AccountsOFDABrazilLoanDataInterestRateData.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

