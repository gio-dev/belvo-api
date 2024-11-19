# TransactionCreditCardDataOpenFinanceBrazil

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**collected_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp when the data point was collected. | 
**bill_name** | **string** | The title of the monthly credit card bill the transaction belongs to. The format of the returned value is institution specific, however, some common examples are:  - diciembre-2021 - dec-2021 - dec-21  &gt; **Note**: This field is only returned for &#x27;closed&#x27; bills (meaning the billing period has ended and the bill has been emitted). If the billing period is still ongoing, we return &#x60;null&#x60;. | 
**bill_due_date** | [**\DateTime**](\DateTime.md) | The date that the bill is due to be paid, in &#x60;YYYY-MM-DD&#x60; format.  &gt; **Note**: This field is only returned for &#x27;closed&#x27; bills (meaning the billing period has ended and the bill has been emitted). If the billing period is still ongoing, we return &#x60;null&#x60;. | [optional] 
**bill_internal_identification** | **string** | The institution&#x27;s internal identifier for the bill.  &gt; **Note**: This field is only returned for &#x27;closed&#x27; bills (meaning the billing period has ended and the bill has been emitted). If the billing period is still ongoing, we return &#x60;null&#x60;. | [optional] 
**bill_status** | **string** | **Note:** This field is not applicable for OFDA Brazil and will return &#x60;null&#x60;. | 
**previous_bill_total** | **string** | **Note:** This field is not applicable for OFDA Brazil and will return &#x60;null&#x60;. | 
**bill_amount** | **float** | The bill amount, as of &#x60;collected_at&#x60;. For more information, see &#x60;credit_card_bill&#x60;. | 
**card_number** | **string** | The credit card number.  **Note:** Often, this is just the last four digit of the credit card.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**fee_type** | **string** | The fee that can be charged for a card transaction. We return one of the following values:    - &#x60;ANNUAL_FEE&#x60;   - &#x60;NATIONAL_WITHDRAWAL&#x60;   - &#x60;INTERNATIONAL_WITHDRAWAL&#x60;   - &#x60;EMERGENCY_CREDIT_EVALUATION_FEE&#x60;   - &#x60;DUPLICATE_ISSUANCE_FEE&#x60;   - &#x60;PAYMENT_FEE&#x60;   - &#x60;SMS_FEE&#x60;   - &#x60;OTHERS&#x60;   - &#x60;null&#x60; | 
**fee_type_additional_info** | **string** | Additional information regarding the fee. | 
**credits_type** | **string** | Other types of credit that have been contracted on the card. We return one of the following values:    - &#x60;REVOLVING_CREDIT&#x60;   - &#x60;BILL_INSTALLMENT_PAYMENT&#x60;   - &#x60;LOAN&#x60;   - &#x60;OTHERS&#x60;   - &#x60;null&#x60; | 
**credits_type_additional_info** | **string** | Additional information regarding the credit type. | 
**installment_identifier** | **string** | An identifier for the installment, according to the institution.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**number_of_installments** | **int** | The total number of installments for the card transaction, if applicable. | 
**credit_card_bill** | [**\Swagger\Client\Model\TransactionCreditCardDataOpenFinanceBrazilCreditCardBill**](TransactionCreditCardDataOpenFinanceBrazilCreditCardBill.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

