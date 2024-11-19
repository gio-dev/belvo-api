# ApiinvoicesWarnings

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | The warning code. Can be one of:    - &#x60;sat_xml_limit_reached&#x60;   - &#x60;sat_service_unavailable&#x60;   - &#x60;null&#x60; | 
**message** | **string** | The description of the warning.  The message will depend on the warning code:  &#x60;sat_xml_limit_reached&#x60;&lt;br&gt; The daily limit for XML downloads set by SAT was reached so this invoice might be missing data. Please check https://tinyurl.com/yydzhy5d for more information on this error.  &#x60;sat_service_unavailable&#x60; &lt;br&gt; Downloading invoices details is not available. The SAT portal raised a 503 error. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

