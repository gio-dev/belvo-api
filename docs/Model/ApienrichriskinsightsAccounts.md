# ApienrichriskinsightsAccounts

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Your unique ID for the user&#x27;s account. | 
**category** | **string** | The category of the bank account. Can be either:    - &#x60;CHECKING_ACCOUNT&#x60;   - &#x60;CREDIT_CARD&#x60;   - &#x60;LOAN_ACCOUNT&#x60;   - &#x60;SAVINGS_ACCOUNT&#x60; | 
**institution** | **string** | The institution where the account is registered.   **Note:** This is the name that you use in your system to identify the institution. For example Erebor Brasil Retail. | 
**balance** | **float** | The balance of the account. | 
**balance_date** | [**\DateTime**](\DateTime.md) | The date that the &#x60;balance&#x60; amount was retrieved, in &#x60;YYYY-MM-DD&#x60; format.  **Note:** For each account you wish to have analyzed, try to provide the same date when the balance was available. | 
**balance_currency** | **string** | The three-letter currency code of the &#x60;balance&#x60;. For example:    • 🇧🇷 BRL (Brazilian Real)   • 🇨🇴 COP (Colombian Peso)   • 🇲🇽 MXN (Mexican Peso)  **Note:** Ensure that the currency of the account and the transactions associated with it are the same. For example, if the currency of the account is &#x60;MXN&#x60;, then all the transactions associated with that account should also be in &#x60;MXN&#x60;. | 
**overdraft** | **float** | The arranged overdraft limit of the account (optional). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

