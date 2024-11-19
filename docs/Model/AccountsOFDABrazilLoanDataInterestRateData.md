# AccountsOFDABrazilLoanDataInterestRateData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tax_type** | **string** | The type of interest rate tax. We return one of the following values:    - &#x60;NOMINAL&#x60;   - &#x60;EFFECTIVE&#x60;      &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**rate_type** | **string** | The type of interest rate. We return one of the following values:    - &#x60;SIMPLE&#x60;   - &#x60;COMPOUND&#x60;    &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**type** | **string** | The period that the interest is applied to the loan.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | [optional] 
**calculation_base** | **string** | The base calculation for the interest rate.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**reference_index_type** | **string** | The reference index rate. We return one of the following values:    - &#x60;WITHOUT_INDEX_TYPE&#x60;   - &#x60;PRE_FIXED&#x60;   - &#x60;POST_FIXED&#x60;   - &#x60;FLOATING&#x60;   - &#x60;INDEXED_PRICE&#x60;   - &#x60;RURAL_CREDIT&#x60;   - &#x60;OTHER_INDEX&#x60;    &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**reference_index_subtype** | **string** | The subtype of the reference index rate. | 
**reference_index_info** | **string** | Additional information regarding the reference index rate. | 
**pre_fixed_rate** | **float** | The pre-fixed percentage rate of the interest rate.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**post_fixed_rate** | **float** | The post-fixed percentage rate of the interest rate.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**additional_info** | **string** | Additional information regarding the interest rate. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

