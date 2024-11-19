# InvoicesPayrollSat

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**days** | **int** | The number of days covered by the payment. | 
**type** | **string** | The payroll type, as defined by the legal entity of the country.  - 🇲🇽 Mexico [SAT catalog reference article](https://developers.belvo.com/docs/sat-catalogs#payroll-type) | 
**amount** | **float** | The total amount of the payroll payment. | 
**version** | **string** | The version of the payroll object. | 
**date_from** | [**\DateTime**](\DateTime.md) | The start date of the payment period, in &#x60;YYYY-MM-DD&#x60; format. | 
**date_to** | [**\DateTime**](\DateTime.md) | The end date of the payment period, in &#x60;YYYY-MM-DD&#x60; format. | 
**collected_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp when the data point was collected. | [optional] 
**payment_date** | [**\DateTime**](\DateTime.md) | The payment date, in &#x60;YYYY-MM-DD&#x60; format. | 
**periodicity** | **string** | How often the payroll payment is made.  For Mexico&#x27;s SAT, we return one of the following values:    - &#x60;DAILY&#x60;   - &#x60;WEEKLY&#x60;   - &#x60;TENTH_DAY&#x60;   - &#x60;FOURTEENTH_DAY&#x60;   - &#x60;FIFTEENTH_DAY&#x60;   - &#x60;MONTHLY&#x60;   - &#x60;BIMONTHLY&#x60;   - &#x60;PER_TASK&#x60;   - &#x60;COMMISSION&#x60;   - &#x60;ONE_OFF&#x60;   - &#x60;OTHER_PERIODICITY&#x60; | [optional] 
**earnings_breakdown** | [**\Swagger\Client\Model\ApiinvoicesPayrollEarningsBreakdown[]**](ApiinvoicesPayrollEarningsBreakdown.md) | A breakdown of the earnings for the payroll payment. | [optional] 
**tax_deductions** | [**\Swagger\Client\Model\ApiinvoicesPayrollTaxDeductions[]**](ApiinvoicesPayrollTaxDeductions.md) | A breakdown of the tax deductions on the payroll payment. | [optional] 
**other_payments** | [**\Swagger\Client\Model\ApiinvoicesPayrollOtherPayments[]**](ApiinvoicesPayrollOtherPayments.md) | A breakdown of other payments for the payroll. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

