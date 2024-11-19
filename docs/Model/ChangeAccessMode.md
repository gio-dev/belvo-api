# ChangeAccessMode

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_mode** | **string** | The type of link to create.  - Use &#x60;single&#x60; to do ad hoc one-time POST requests for accounts, owners, and transactions. - Use &#x60;recurrent&#x60; to have Belvo access information on a recurrent basis so you always have fresh account, owner, balance, and transaction data.  For more information, see our [Links](https://developers.belvo.com/docs/links-and-institutions#links) article. | [optional] [default to 'recurrent']
**fetch_resources** | **string[]** | An array of resources that you would like to receive a historical update for.  For banking institutions, you can select the following resources:   - &#x60;ACCOUNTS&#x60;   - &#x60;OWNERS&#x60;   - &#x60;TRANSACTIONS&#x60;   - &#x60;BILLS&#x60; (only for Brazil OFDA institutions)   - &#x60;INCOMES&#x60;   - &#x60;RECURRING_EXPENSES&#x60;   - &#x60;RISK_INSIGHTS&#x60;   For fiscal institutions, you can select the following resources:   - &#x60;FINANCIAL_STATEMENTS&#x60;   - &#x60;INVOICES&#x60;   - &#x60;TAX_COMPLIANCE_STATUS&#x60;   - &#x60;TAX_RETENTIONS&#x60;   - &#x60;TAX_RETURNS&#x60;   - &#x60;TAX_STATUS&#x60;  For employment institutions, you can select the following resources:   - &#x60;OWNERS&#x60;   - &#x60;EMPLOYMENT_RECORDS&#x60;(For Mexico&#x27;s IMSS only)   - &#x60;EMPLOYMENT_METRICS&#x60; (For Mexico&#x27;s IMSS only)   - &#x60;EMPLOYMENTS&#x60; (For Brazil&#x27;s INSS only) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

