# OwnerBusinessFinancialRelationProducts

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The additional products the business has at the institution. We return one of the following values:    - &#x60;SAVINGS_ACCOUNT&#x60;   - &#x60;CHECKING_ACCOUNT&#x60;   - &#x60;null&#x60; | 
**subtype** | **string** | The subtype of the product that the business has at the institution.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network if the &#x60;products&#x60; field is available. | 
**agency** | **string** | The branch code where the product was opened. | 
**clearing_code** | **string** | The banking clearing code for the product.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network if the &#x60;products&#x60; field is available. | 
**number** | **string** | The account number of the product.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network if the &#x60;products&#x60; field is available. | 
**check_digit** | **string** | The check digit of the product&#x27;s number.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network if the &#x60;products&#x60; field is available. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

