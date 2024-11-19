# RequestTimeout

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | A unique error code (&#x60;request_timeout&#x60;) that allows you to classify and handle the error programmatically.   ℹ️ Check our DevPortal for more information on how to handle &lt;a href&#x3D;\&quot;https://developers.belvo.com/docs/belvo-api-errors#408-request_timeout\&quot; target&#x3D;\&quot;_blank\&quot;&gt;408 request_timeout errors&lt;/a&gt;. | [optional] 
**message** | **string** | A short description of the error.    For &#x60;request_timeout&#x60; errors, the description is:      - &#x60;The request timed out, you can retry asking for less data by changing your query parameters&#x60;. | [optional] 
**request_id** | **string** | A 32-character unique ID of the request (matching a regex pattern of: &#x60;[a-f0-9]{32}&#x60;). Provide this ID when contacting the Belvo support team to accelerate investigations. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

