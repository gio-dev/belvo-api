# EyodIncomeVerificationBodyRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_id** | **string** | Your unique ID for the income. | 
**account_holder_type** | **string** | The type of account holder. Can be:    - &#x60;INDIVIDUAL&#x60; | 
**account_holder_id** | **string** | Your unique ID for the account holder, in UUID format. | 
**account_id** | **string** | Your unique ID for the account where the transaction occurred. | 
**account_category** | **string** | The type of account.  Can be either:   - &#x60;CHECKING_ACCOUNT&#x60;   - &#x60;SAVINGS_ACCOUNT&#x60; | 
**value_date** | [**\DateTime**](\DateTime.md) | The date when the income transaction occurred, in &#x60;YYYY-MM-DD&#x60; format. | 
**description** | **string** | The description of the income. | 
**type** | **string** | The direction of the transaction:    - &#x60;INFLOW&#x60; indicates money coming into the account. | 
**amount** | **float** | The income amount. | 
**currency** | **string** | The three-letter currency code of the income. For example:    • 🇧🇷 BRL (Brazilian Real)   • 🇨🇴 COP (Colombian Peso)   • 🇲🇽 MXN (Mexican Peso) | 
**institution** | **string** | The institution where the account is registered.   **Note:** This is the name that you use in your system to identify the institution. For example Erebor Retail Brasil Retail. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

