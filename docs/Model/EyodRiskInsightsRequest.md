# EyodRiskInsightsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **string** | Your unique ID for the user. | 
**reference_date** | [**\DateTime**](\DateTime.md) | The date from which you want Belvo to start performing the risk insights analysis, in &#x60;YYYY-MM-DD&#x60; format. If you do not specify a &#x60;reference_date&#x60;, we use the current date at the time of your request.  &gt; **Note:** &gt; &gt; We recommend you use a &#x60;reference_date&#x60; if you do not have an account balance for the past few days. &gt; &gt; For example, if the last account balance date that you have a value for was last week, set the &#x60;reference_date&#x60; to that date. The risk insights that you receive will be **relative** to the &#x60;reference_date&#x60;. | 
**transactions_language** | **string** | The ISO 639-1 code for the language of the transaction. For example:      - &#x60;es&#x60; for Spanish   - &#x60;pt&#x60; for Portugese | 
**transactions** | [**\Swagger\Client\Model\ApienrichriskinsightsTransactions[]**](ApienrichriskinsightsTransactions.md) | An array of transaction objects that you want analyzed for the risk insight analysis.   **Note:** Each object corresponds to one unique transaction and you can send through up to 10,000 transactions per request. | 
**accounts** | [**\Swagger\Client\Model\ApienrichriskinsightsAccounts[]**](ApienrichriskinsightsAccounts.md) | An array of account objects that the transactions are associated with.   Each transaction you provide in the &#x60;transactions&#x60; array must have an associated account. If you provide transactions without an associated account, we return an error.  **Note:** Each object corresponds to one unique account. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

