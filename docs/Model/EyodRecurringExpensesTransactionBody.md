# EyodRecurringExpensesTransactionBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_id** | **string** | Your unique ID for the transaction. | 
**account_holder_type** | **string** | The type of account holder.  Can be either:    - &#x60;INDIVIDUAL&#x60;   - &#x60;BUSINESS&#x60; | 
**account_holder_id** | **string** | Your unique ID for the account holder. | 
**account_id** | **string** | Your unique ID for the account where the transaction occurred. | 
**account_category** | **string** | The type of account.  Can be either:   - &#x60;CHECKING_ACCOUNT&#x60;   - &#x60;CREDIT_CARD&#x60;   - &#x60;LOAN_ACCOUNT&#x60;   - &#x60;SAVINGS_ACCOUNT&#x60; | 
**value_date** | [**\DateTime**](\DateTime.md) | The date when the transaction occurred, in &#x60;YYYY-MM-DD&#x60; format. | 
**description** | **string** | The description of the transaction. | 
**type** | **string** | The direction of the transaction.  Can be either:    - &#x60;INFLOW&#x60; indicates a received transaction.   - &#x60;OUTFLOW&#x60; indicates a sent transaction. | 
**amount** | **float** | The transaction amount. | 
**currency** | **string** | The currency of the account, in ISO-4217 format. For example: - 🇧🇷 BRL (Brazilian Real) - 🇨🇴 COP (Colombian Peso) - 🇲🇽 MXN (Mexican Peso) | 
**institution** | **string** | The institution where the account is registered.   &gt;**Note:** This is the name that you use in your system to identify an institution. | 
**mcc** | **int** | The four-digit ISO 18245 Merchant Category Code (MCC). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

