# AccountsOFDABrazilCreditDataLimits

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**identification_number** | **string** | The credit card number.  **Note:** Often, this is just the last four digit of the credit card.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**credit_limit** | **float** | The limit of the credit card. | 
**used_amount** | **float** | The amount used. | 
**available_amount** | **float** | The amount still available.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**is_limit_flexible** | **bool** | Boolean to indicate if the &#x60;credit_limit&#x60; is flexible.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**type** | **string** | The type of limit. We return one of the following values:    - &#x60;TOTAL_LIMIT&#x60;   - &#x60;MODAL_LIMIT&#x60;    &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**consolidation_type** | **string** | Indicates whether or not the credit limit is consolidated or individual.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**line_name** | **string** | The credit limit line name. | 
**line_name_additional_info** | **string** | Additional information about the line name. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

