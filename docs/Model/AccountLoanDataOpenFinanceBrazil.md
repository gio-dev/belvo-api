# AccountLoanDataOpenFinanceBrazil

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**collected_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp when the data point was collected. | 
**loan_code** | **string** | The country-specific standardized contract number.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**contract_amount** | **float** | The initial total loan amount when the contract was signed, calculated by the institution. This amount includes the principal + interest + taxes + fees. | 
**total_effective_cost** | **float** | The initial total effective cost of the loan. | [optional] 
**loan_type** | **string** | The type of the loan, according to the institution.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**outstanding_balance** | **float** | The amount remaining to pay in total, including interest. | 
**interest_rates** | [**\Swagger\Client\Model\AccountsOFDABrazilLoanDataInterestRates[]**](AccountsOFDABrazilLoanDataInterestRates.md) | Breakdown of the interest applied to the loan. With OF Brazil, we highly recommend using the information in &#x60;interest_rate_data&#x60; for in-depth information.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**fees** | [**\Swagger\Client\Model\AccountsOFDABrazilLoanDataFees[]**](AccountsOFDABrazilLoanDataFees.md) | Breakdown of the fees applied to the loan. | 
**contracted_charges** | [**\Swagger\Client\Model\AccountsOFDABrazilLoanDataContractedCharges[]**](AccountsOFDABrazilLoanDataContractedCharges.md) |  | [optional] 
**collaterals** | [**\Swagger\Client\Model\AccountsOFDABrazilLoanDataCollaterals[]**](AccountsOFDABrazilLoanDataCollaterals.md) | Details regarding any loan collaterals that the individual or business supplied. | 
**balloon_payments** | [**\Swagger\Client\Model\AccountsOFDABrazilLoanDataBalloonPayments[]**](AccountsOFDABrazilLoanDataBalloonPayments.md) | Detailed information regarding any balloon payments for the loan, if applicable. | 
**installments_contract_term_frequency** | **string** | The frequency of contracted installment payments, as defined when the contract was first signed. We return one of the following:    - &#x60;DAY&#x60;   - &#x60;WEEK&#x60;   - &#x60;MONTH&#x60;   - &#x60;YEAR&#x60;   - &#x60;NO_DEADLINE_REMAINING&#x60;   - &#x60;null&#x60; | 
**installment_frequency** | **string** | The frequency that the installments are paid. We return one of the following values:    - &#x60;IRREGULAR&#x60;   - &#x60;WEEKLY&#x60;   - &#x60;FORTNIGHTLY&#x60;   - &#x60;MONTHLY&#x60;   - &#x60;BIMONTHLY&#x60;   - &#x60;QUARTERLY&#x60;   - &#x60;BIANNUALLY&#x60;   - &#x60;ANNUALLY&#x60;   - &#x60;OTHER&#x60;    &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**installment_frequency_info** | **string** | Additional information regarding the &#x60;installment_frequency&#x60;. | 
**first_installment_due_date** | [**\DateTime**](\DateTime.md) | The date when the first installment of the loan is to be paid, in &#x60;YYYY-MM-DD&#x60; format. | 
**number_of_installments_total** | **int** | The total number of installments required to pay the loan. | 
**number_of_installments_outstanding** | **int** | The number of installments left to pay. | 
**number_of_installments_paid** | **int** | The number of installments already paid. | 
**number_of_installments_past_due** | **int** | The number of installments that are overdue. | 
**disbursement_dates** | **string[]** | An array of dates when the loan was disbursed. | 
**settlement_date** | **string** | The date that the loan was settled, in &#x60;YYYY-MM-DD&#x60; format. | 
**contract_start_date** | [**\DateTime**](\DateTime.md) | The date when the loan contract was signed, in &#x60;YYYY-MM-DD&#x60; format.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**contract_end_date** | [**\DateTime**](\DateTime.md) | The date when the loan is expected to be completed, in &#x60;YYYY-MM-DD&#x60; format. | 
**contract_remaining_frequency** | **string** | The frequency of the remaining contracted installment payments, as defined when the contract was first signed. We return one of the following: - &#x60;DAY&#x60; - &#x60;WEEK&#x60; - &#x60;MONTH&#x60; - &#x60;YEAR&#x60; - &#x60;NO_DEADLINE_REMAINING&#x60; - &#x60;null&#x60; | 
**contract_remaining_total** | **int** | The total number of installments remaining on the loan. | 
**amortization_schedule** | **string** | The loan amortization schedule.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**amortization_schedule_info** | **string** | Additional information regarding the &#x60;amortization_schedule&#x60;. | 
**consignee_id** | **string** | The ID of the consignee of the loan. | 
**contract_number** | **string** | The contract number of the loan, as given by the institution. | 
**monthly_payment** | **float** | **Note:** This field is not applicable for OF Brazil and will return null. | 
**principal** | **float** | **Note:** This field is not applicable for OF Brazil and will return null. | 
**payment_day** | **string** | **Note:** This field is not applicable for OF Brazil and will return null. | 
**outstanding_principal** | **float** | **Note:** This field is not applicable for OF Brazil and will return null. | 
**credit_limit** | **float** | **Note:** This field is not applicable for OF Brazil and will return null. | 
**last_period_balance** | **float** | **Note:** This field is not applicable for OF Brazil and will return null. | 
**interest_rate** | **float** | **Note:** This field is not applicable for OF Brazil and will return null. | 
**limit_day** | **string** | **Note:** This field is not applicable for OF Brazil and will return null. | 
**cutting_day** | **string** | **Note:** This field is not applicable for OF Brazil and will return null. | 
**cutting_date** | **string** | **Note:** This field is not applicable for OF Brazil and will return null. | 
**last_payment_date** | **string** | **Note:** This field is not applicable for OF Brazil and will return null. | 
**no_interest_payment** | **float** | **Note:** This field is not applicable for OF Brazil and will return null. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

