# RiskInsights

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Belvo&#x27;s unique identifier for the current item. | 
**link** | **string** | The &#x60;link.id&#x60; the data belongs to. | 
**created_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp of when the data point was created in Belvo&#x27;s database. | 
**accounts** | **string[]** | An array of Belvo-generated account numbers (UUIDs) that were used during the risk insights analysis. If no accounts were found, we return an empty array. | 
**assets_metrics** | [**\Swagger\Client\Model\ApiriskinsightsAssetsMetrics**](ApiriskinsightsAssetsMetrics.md) |  | 
**credit_cards_metrics** | [**\Swagger\Client\Model\ApiriskinsightsCreditCardsMetrics**](ApiriskinsightsCreditCardsMetrics.md) |  | 
**loans_metrics** | [**\Swagger\Client\Model\ApiriskinsightsLoansMetrics**](ApiriskinsightsLoansMetrics.md) |  | 
**balances_metrics** | [**\Swagger\Client\Model\ApiriskinsightsBalancesMetrics**](ApiriskinsightsBalancesMetrics.md) |  | 
**transactions_metrics** | [**\Swagger\Client\Model\ApiriskinsightsTransactionsMetrics**](ApiriskinsightsTransactionsMetrics.md) |  | 
**cashflow_metrics** | [**\Swagger\Client\Model\ApiriskinsightsCashflowMetrics**](ApiriskinsightsCashflowMetrics.md) |  | 
**category_metrics** | [**\Swagger\Client\Model\ApiriskinsightsCategoryMetrics[]**](ApiriskinsightsCategoryMetrics.md) | An array of aggregate metrics regarding the transaction categories and subcategories that Belvo has identified within the user&#x27;s transaction history.  In the array, Belvo only returns categories that have been identified. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

