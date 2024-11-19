# AccountsOFDABrazil

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Belvo&#x27;s unique identifier for the current item. | 
**link** | **string** | The &#x60;link.id&#x60; the data belongs to. | 
**institution** | [**\Swagger\Client\Model\AccountsOFDABrazilInstitution**](AccountsOFDABrazilInstitution.md) |  | 
**collected_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp when the data point was collected. | 
**created_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp of when the data point was created in Belvo&#x27;s database. | 
**last_accessed_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp of Belvo&#x27;s most recent successful access to the institution for the given link. | 
**category** | **string** | The type of account. We return one of the following enum values:   - &#x60;ADVANCE_DEPOSIT_ACCOUNT&#x60;   - &#x60;CHECKING_ACCOUNT&#x60;   - &#x60;CREDIT_CARD&#x60;   - &#x60;FINANCING_ACCOUNT&#x60;   - &#x60;INVESTMENT_ACCOUNT&#x60;   - &#x60;INVOICE_FINANCING_ACCOUNT&#x60;   - &#x60;LOAN_ACCOUNT&#x60;   - &#x60;PENSION_FUND_ACCOUNT&#x60;   - &#x60;SAVINGS_ACCOUNT&#x60;   - &#x60;UNCATEGORIZED&#x60; | 
**balance_type** | **string** | Indicates whether this account is either an &#x60;ASSET&#x60; or a &#x60;LIABILITY&#x60;. You can consider the balance of an &#x60;ASSET&#x60; as being positive, while the balance of a &#x60;LIABILITY&#x60; as negative. | 
**overdraft** | [**\Swagger\Client\Model\AccountsOFDABrazilOverdraft**](AccountsOFDABrazilOverdraft.md) |  | [optional] 
**type** | **string** | The account type, as designated by the institution.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**subtype** | **string** | The account subtype, as designated by the institution.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**name** | **string** | The account name, as given by the institution. | 
**number** | **string** | The account number, as designated by the institution. | 
**agency** | **string** | The branch code where the product was opened. | 
**check_digit** | **string** | The check digit of the product&#x27;s number, if applicable. | 
**balance** | [**\Swagger\Client\Model\AccountsOFDABrazilBalance**](AccountsOFDABrazilBalance.md) |  | 
**currency** | **string** | The three-letter currency code (ISO-4217).  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network if the &#x60;balances&#x60; field is available. | 
**public_identification_name** | **string** | The public name for the type of identification. For 🇧🇷 Brazilian savings and checking accounts, this field will be &#x60;AGENCY/ACCOUNT&#x60;. | 
**public_identification_value** | **string** | The value for the &#x60;public_identification_name&#x60;.  For 🇧🇷 OFDA Brazilian savings and checking accounts, this field will be the agency and bank account number, separated by a slash. For example: &#x60;0444/45722-0&#x60;.  For 🇧🇷 OFDA Brazilian credit card accounts, we will return a string of concatenated credit card numbers associated with the account. For example: \&quot;8763,9076,5522\&quot; | 
**internal_identification** | **string** | The institution&#x27;s internal identification for the account.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network if the &#x60;balances&#x60; field is available. | 
**credit_data** | [**\Swagger\Client\Model\AccountsOFDABrazilCreditData**](AccountsOFDABrazilCreditData.md) |  | 
**loan_data** | [**\Swagger\Client\Model\AccountsOFDABrazilLoanData**](AccountsOFDABrazilLoanData.md) |  | 
**funds_data** | **string** | **Note:** This field is not applicable for OF Brazil and will return null. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

