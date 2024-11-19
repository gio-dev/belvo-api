# RecurringExpenses

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Belvo&#x27;s unique identifier for the current item. | [optional] 
**account** | [**\Swagger\Client\Model\AccountsStandardMultiRegion**](AccountsStandardMultiRegion.md) |  | 
**name** | **string** | The name for the recurring expense.  ℹ️ **Note**: This information is taken from the description section of a transaction and then normalized to provide you with an easy-to-read name. As such, sometimes the name will reflect the merchant the payment is made to (for example, Netflix.com), while for other recurring expenses, this could be something like \&quot;Monthly payment to John\&quot;. | 
**transactions** | [**\Swagger\Client\Model\ApirecurringexpensesTransactions[]**](ApirecurringexpensesTransactions.md) | An array of minified transaction objects used to evaluate the recurring expense. If no transactions were found, we return an empty array. | 
**frequency** | **string** | The frequency at which this recurring expense occurs.   ℹ️ **Note:** Belvo only identifies &#x60;MONTHLY&#x60; frequencies. | [default to 'MONTHLY']
**average_transaction_amount** | **float** | The average transaction amount of the recurring expense. | 
**median_transaction_amount** | **float** | The median transaction amount of the recurring expense. | 
**days_since_last_transaction** | **int** | Number of days since the last recurring expense occurred.  Based on the frequency, you can infer how many days until the next charge will occur. | 
**category** | **string** | The transaction category for the recurring expense. For more information on the available categories, please see our [Transaction categorization documentation](https://developers.belvo.com/docs/banking#categorizing-transactions).  - &#x60;Online Platforms &amp; Leisure&#x60; (Netflix, Spotify, Gym Memberships) - &#x60;Bills &amp; Utilities&#x60; (electricity, telephone, internet) - &#x60;Credits &amp; Loans&#x60; (credit card cash advances, student loan, watercraft lease) - &#x60;Insurance&#x60; (home, car, and health &amp; life insurance) - &#x60;Transport &amp; Travel&#x60; (Uber trip, airbnb, parking) - &#x60;Taxes&#x60; (service fee, donation, court taxes) | 
**payment_type** | **string** | The type of recurring expense. We return one of the following values:    - &#x60;SUBSCRIPTION&#x60;   - &#x60;REGULAR&#x60; | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

