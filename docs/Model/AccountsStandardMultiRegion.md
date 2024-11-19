# AccountsStandardMultiRegion

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Belvo&#x27;s unique identifier for the current item. | [optional] 
**link** | **string** | The &#x60;link.id&#x60; the data belongs to. | [optional] 
**institution** | [**\Swagger\Client\Model\AccountsOFDABrazilInstitution**](AccountsOFDABrazilInstitution.md) |  | [optional] 
**collected_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp when the data point was collected. | 
**created_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp of when the data point was created in Belvo&#x27;s database. | [optional] 
**category** | **string** | The type of account. We return one of the following enum values:   - &#x60;CHECKING_ACCOUNT&#x60;   - &#x60;CREDIT_CARD&#x60;   - &#x60;INVESTMENT_ACCOUNT&#x60;   - &#x60;LOAN_ACCOUNT&#x60;   - &#x60;PENSION_FUND_ACCOUNT&#x60;   - &#x60;SAVINGS_ACCOUNT&#x60;   - &#x60;UNCATEGORIZED&#x60;   - &#x60;null&#x60; | 
**balance_type** | **string** | Indicates whether this account is either an &#x60;ASSET&#x60; or a &#x60;LIABILITY&#x60;. You can consider the balance of an &#x60;ASSET&#x60; as being positive, while the balance of a &#x60;LIABILITY&#x60; as negative. | 
**type** | **string** | The account type, as designated by the institution. | 
**name** | **string** | The account name, as given by the institution. | 
**number** | **string** | The account number, as designated by the institution. | 
**balance** | [**\Swagger\Client\Model\AccountsStandardMultiRegionBalance**](AccountsStandardMultiRegionBalance.md) |  | 
**currency** | **string** | The currency of the account. For example: - 🇧🇷 BRL (Brazilian Real) - 🇨🇴 COP (Colombian Peso) - 🇲🇽 MXN (Mexican Peso)   Please note that other currencies other than in the list above may be returned. | 
**public_identification_name** | **string** | The public name for the type of identification. For example: &#x60;\&quot;CLABE\&quot;&#x60;.  ℹ️ For 🇧🇷 Brazilian savings and checking accounts, this field will be &#x60;AGENCY/ACCOUNT&#x60;. | 
**public_identification_value** | **string** | The value for the &#x60;public_identification_name&#x60;.  ℹ️ For 🇧🇷 Brazilian savings and checking accounts, this field will be the agency and bank account number, separated by a slash. For example: &#x60;0444/45722-0&#x60;. | 
**last_accessed_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp of Belvo&#x27;s most recent successful access to the institution for the given link. | 
**credit_data** | [**\Swagger\Client\Model\AccountsStandardMultiRegionCreditData**](AccountsStandardMultiRegionCreditData.md) |  | 
**loan_data** | [**\Swagger\Client\Model\AccountsStandardMultiRegionLoanData**](AccountsStandardMultiRegionLoanData.md) |  | 
**funds_data** | [**\Swagger\Client\Model\AccountsStandardMultiRegionFundsData[]**](AccountsStandardMultiRegionFundsData.md) | One or more funds that contribute to the the pension account. | [optional] 
**bank_product_id** | **string** | *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.*  *The institution&#x27;s product ID for the account type.* | [optional] 
**internal_identification** | **string** | *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.*  *The institution&#x27;s internal identification for the account.* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

