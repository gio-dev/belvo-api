# OwnerBusinessFinancialProfileInformedRevenue

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**frequency** | **string** | Indicates how often the business declares their revenue. We return one of the following values:      - &#x60;DAILY&#x60;   - &#x60;WEEKLY&#x60;   - &#x60;FORTNIGHTLY&#x60;   - &#x60;MONTHLY&#x60;   - &#x60;BIMONTHLY&#x60;   - &#x60;QUARTERLY&#x60;   - &#x60;BIANNUALLY&#x60;   - &#x60;ANNUALLY&#x60;   - &#x60;OTHERS&#x60;   - &#x60;null&#x60; | 
**frequency_additional_info** | **string** | Additional information regarding the frequency. | 
**amount** | **float** | The reported revenue of the business.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network if the &#x60;informed_revenue&#x60; field is available. | 
**currency** | **string** | The three-letter currency code (ISO-4217).  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network if the &#x60;informed_revenue&#x60; field is available. | 
**year** | **int** | The year when revenue was last declared.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network if the &#x60;informed_revenue&#x60; field is available. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

