# FinancialStatement

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Belvo&#x27;s unique identifier for the current item. | 
**link** | **string** | The &#x60;link.id&#x60; the data belongs to. | 
**collected_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp when the data point was collected. | 
**created_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp of when the data point was created in Belvo&#x27;s database. | 
**error** | **string** | In cases where issues arise during the extraction of financial statements from the fiscal institution, the following error messages may be provided to explain the encountered issues:      - &#x60;Unable to validate if the user has an available financial statement for the specified year.&#x60;   - &#x60;No available financial statement found for the user for the specified year, preventing data extraction.&#x60;   - &#x60;Unable to verify if the user has *conceptos vigentes* for the specified year.&#x60;   - &#x60;The fiscal institution provided the financial statement in an unrecognized format.&#x60; | 
**year** | **string** | The year of the financial statement. | 
**currency** | **string** | The currency of the financial statement. | 
**balance_sheet** | [**\Swagger\Client\Model\ApifinancialstatementsBalanceSheet**](ApifinancialstatementsBalanceSheet.md) |  | 
**income_statement** | [**\Swagger\Client\Model\ApifinancialstatementsIncomeStatement**](ApifinancialstatementsIncomeStatement.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

