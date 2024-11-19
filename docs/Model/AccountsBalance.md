# AccountsBalance

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**current** | **float** | The current balance is calculated differently according to the type of account.   - **💰 Checking and saving accounts**:   The user&#x27;s account balance at the &#x60;collected_at&#x60; timestamp.  - **💳 Credit cards**:   The amount the user has spent in the current card billing period (see &#x60;credit_data.cutting_date&#x60; for information on when the current billing period finishes).  - **🏡 Loan accounts**:   The amount remaining to pay on the users&#x27;s loan. | 
**available** | **float** | The balance that the account owner can use.  - **💰 Checking and saving accounts**:   The available balance may be different to the &#x60;current&#x60; balance due to pending transactions.  - **💳 Credit cards**:   The credit amount the user still has available for the current period. The &#x60;available&#x60; balance may be different to the &#x60;current&#x60; balance due to pending transactions or future instalments.  - **🏡 Loan accounts**:   The present value required to pay off the loan, as provided by the institution.   **Note:** If the institution does not provide this value, we return &#x60;null&#x60;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

