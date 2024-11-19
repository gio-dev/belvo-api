# InlineResponse20031

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_holder_id** | **string** | The unique &#x60;account_holder_id&#x60; the account belongs to, as you provided in the Income Verification request. | 
**income_streams** | [**\Swagger\Client\Model\ApiincomesIncomeStreams[]**](ApiincomesIncomeStreams.md) | An array of enriched income stream objects. | 
**income_source_type** | **string** | The type of source we generate income insights from. We return one of the following enum values:    - &#x60;BANK&#x60; | 
**first_transaction_date** | [**\DateTime**](\DateTime.md) | The date when the first transaction occurred, in &#x60;YYYY-MM-DD&#x60; format. | 
**last_transaction_date** | [**\DateTime**](\DateTime.md) | The date when when the last transaction occurred, in &#x60;YYYY-MM-DD&#x60; format. | 
**number_of_income_streams** | **int** | Number of total income streams analized. | 
**monthly_average** | **float** | Average amount of income received per month across all the accounts for the specific user. | 
**monthly_average_regular** | **float** | Average amount of regular income (with a frequency of &#x60;MONTHLY&#x60;, &#x60;FORTNIGHTLY&#x60;, or &#x60;WEEKLY&#x60;) received per month for the specific user. | 
**monthly_average_irregular** | **float** | Average amount of irregular income (with a frequency of &#x60;SINGLE&#x60; or &#x60;IRREGULAR&#x60;) received per month for the specific user. | 
**monthly_average_low_confidence** | **float** | Average amount of income received per month for the specific user with &#x60;LOW&#x60; confidence. | 
**monthly_average_medium_confidence** | **float** | Average amount of income received per month for the specific user with &#x60;MEDIUM&#x60; confidence. | 
**monthly_average_high_confidence** | **float** | Average amount of income received per month for the specific user with &#x60;HIGH&#x60; confidence. | 
**total_income_amount** | **float** | Total amount of all income received for the specific user. | 
**total_regular_income_amount** | **float** | Total amount of regular income (with a frequency of &#x60;MONTHLY&#x60;, &#x60;FORTNIGHTLY&#x60;, &#x60;WEEKLY&#x60;) for the specific user. | 
**total_irregular_income_amount** | **float** | Total amount of irregular income (with a frequency of &#x60;SINGLE&#x60; or &#x60;IRREGULAR&#x60;) for the specific user. | [optional] 
**total_low_confidence** | **float** | Total amount of income for the specific user with &#x60;LOW&#x60; confidence. | 
**total_medium_confidence** | **float** | Total amount of income for the specific user with &#x60;MEDIUM&#x60; confidence. | 
**total_high_confidence** | **float** | Total amount of income for the specific user with &#x60;HIGH&#x60; confidence. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

