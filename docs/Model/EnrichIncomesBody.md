# EnrichIncomesBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**language** | **string** | Two-letter ISO 639-1 code for the language of the transaction. | 
**transactions** | [**\Swagger\Client\Model\ApienrichincomesTransactions[]**](ApienrichincomesTransactions.md) | An array of transaction objects that you want enriched.   **Note:** Each object corresponds to one, unique transaction and you can send through up to 10,000 transactions per request. | 
**date_from** | **string** | The date from which you want to start getting incomes for, in &#x60;YYYY-MM-DD&#x60; format, within the last 365 days. When you use this parameter, you must also send &#x60;date_to&#x60;.   ⚠️ The value of &#x60;date_from&#x60; cannot be greater than &#x60;date_to&#x60;. | [optional] 
**date_to** | **string** | The date you want to stop getting incomes for, in &#x60;YYYY-MM-DD&#x60; format, within the last 365 days. When you use this parameter, you must also send &#x60;date_from&#x60;.   ⚠️ The value of &#x60;date_to&#x60; cannot be greater than today&#x27;s date (in other words, no future dates). | [optional] 
**allowed_income_types** | **string[]** | The categories of the incomes you want to get information for. | [optional] 
**minimum_confidence_level** | **string** | The minimum confidence level of the incomes you want to get information for.  You can send through one of the following values:    - &#x60;HIGH&#x60;   - &#x60;MEDIUM&#x60;   - &#x60;LOW&#x60; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

