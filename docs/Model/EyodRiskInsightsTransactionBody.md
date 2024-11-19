# EyodRiskInsightsTransactionBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_id** | **string** | Your unique ID for the transaction. | 
**account_id** | **string** | Your unique ID for the account where the transaction occurred.  **Note:** You must provide the details of this account in the &#x60;accounts&#x60; array of the Risk Insights request. Otherwise, we return an error. | 
**value_date** | [**\DateTime**](\DateTime.md) | The date when the transaction occurred, in &#x60;YYYY-MM-DD&#x60; format.  **Note:** Transactions that occur after the &#x60;reference_date&#x60; are not considered in the risk insight analysis. | 
**status** | **string** | The status of the transaction. Can be one of the following values:    - &#x60;PENDING&#x60;   - &#x60;PROCESSED&#x60;   - &#x60;UNCATEGORIZED&#x60;  **Note:** If you do not provide a transaction &#x60;status&#x60;, by default we set it to &#x60;PROCESSED&#x60;. | [optional] 
**type** | **string** | The direction of the transaction:    - &#x60;INFLOW&#x60; indicates money coming into the account. - &#x60;OUTFLOW&#x60; indicates money leaving the account. | 
**amount** | **float** | The transaction amount. | 
**currency** | **string** | The three-letter currency code of the transaction. For example:    • 🇧🇷 BRL (Brazilian Real)   • 🇨🇴 COP (Colombian Peso)   • 🇲🇽 MXN (Mexican Peso)  **Note:** Ensure that the currency of the transaction and the account associated with it are the same. For example, if the currency of the account is &#x60;MXN&#x60;, then all the transactions associated with that account should also be in &#x60;MXN&#x60;. | 
**description** | **string** | The description of the transaction. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

