# AccountBalanceOpenFinanceBrazil

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**current** | **float** | The current balance is calculated differently according to the type of account.   - **💰 Checking and saving accounts**:   The user&#x27;s account balance at the &#x60;collected_at&#x60; timestamp.  - **💳 Credit cards**:   The amount the user has spent in the current card billing period (see &#x60;credit_data.cutting_date&#x60; for information on when the current billing period finishes).  - **🏡 Loan accounts**:   The amount remaining to pay on the users&#x27;s loan. | 
**available** | **float** | The balance that the account owner can use.  - **💰 Checking and saving accounts**:   The available balance may be different to the &#x60;current&#x60; balance due to pending transactions.  - **💳 Credit cards**:   The credit amount the user still has available for the current period. The amount is calculated as &#x60;credit_data.credit_limit&#x60; minus &#x60;balance.current&#x60;.  - **🏡 Loan accounts**:   The present value required to pay off the loan, as provided by the institution.   **Note:** If the institution does not provide this value, we return &#x60;null&#x60;. | [optional] 
**blocked** | **float** | The amount that is currently blocked due to pending transactions.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network if the &#x60;balances&#x60; field is available. | [optional] 
**automatically_invested** | **float** | The amount that is automatically invested (as agreed upon with the institution).  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network if the &#x60;balances&#x60; field is available. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

