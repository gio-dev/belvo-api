# AccountsLoanData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**collected_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp when the data point was collected. | 
**contract_amount** | **float** | The initial total loan amount, calculated by the institution, when the contract was signed. This amount includes the principal + interest + taxes + fees. | [optional] 
**principal** | **float** | Total amount of the loan (the amount the user receives). | 
**loan_type** | **string** | The type of the loan, according to the institution. | [optional] 
**payment_day** | **string** | The day of the month by which the owner needs to pay the loan (&#x60;DD&#x60;). | [optional] 
**outstanding_principal** | **float** | Outstanding loan amount, that is, how much remains to pay on the principal (not including interest). | [optional] 
**outstanding_balance** | **float** | The amount remaining to pay in total, including interest. | 
**monthly_payment** | **float** | The recurrent monthly payment, if applicable. | 
**interest_rates** | [**\Swagger\Client\Model\AccountsStandardMultiRegionLoanDataInterestRates[]**](AccountsStandardMultiRegionLoanDataInterestRates.md) | Breakdown of the interest applied to the loan. | 
**fees** | [**\Swagger\Client\Model\AccountsStandardMultiRegionLoanDataFees[]**](AccountsStandardMultiRegionLoanDataFees.md) | Breakdown of the fees applied to the loan. | [optional] 
**number_of_installments_total** | **int** | The total number of installments required to pay the loan. | [optional] 
**number_of_installments_outstanding** | **int** | The number of installments left to pay. | [optional] 
**contract_start_date** | **string** | The date when the loan contract was signed , in &#x60;YYYY-MM-DD&#x60; format. | [optional] 
**contract_end_date** | [**\DateTime**](\DateTime.md) | The date when the loan is expected to be completed, in &#x60;YYYY-MM-DD&#x60; format. | [optional] 
**contract_number** | **string** | The contract number of the loan, as given by the institution. | [optional] 
**credit_limit** | **float** | *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.*  Please see &#x60;principal&#x60; instead. | [optional] 
**last_period_balance** | **float** | *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.*  Please see &#x60;outstanding_balance&#x60; instead. | [optional] 
**interest_rate** | **float** | *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.*  Please see the &#x60;interest_rates&#x60; object instead. | [optional] 
**limit_day** | **string** | *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.*  Please see &#x60;payment_day&#x60; instead. | [optional] 
**cutting_day** | **string** | *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.*  The closing day of the month for the loan. | [optional] 
**cutting_date** | **string** | *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.*  The closing date of the loan period, in &#x60;YYYY-MM-DD&#x60; format. | [optional] 
**last_payment_date** | **string** | *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.*  The date when the last loan payment was made, in &#x60;YYYY-MM-DD&#x60; format. | [optional] 
**next_payment_date** | **string** | *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.*  Please use &#x60;payment_day&#x60; instead, in &#x60;YYYY-MM-DD&#x60; format. | [optional] 
**no_interest_payment** | **float** | *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.*  The minimum amount required to pay to avoid generating interest. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

