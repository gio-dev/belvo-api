# UnauthorizedError

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | A unique error code (&#x60;authentication_failed&#x60;) that allows you to classify and handle the error programmatically.   ℹ️ Check our DevPortal for more information on how to handle &lt;a href&#x3D;\&quot;https://developers.belvo.com/docs/belvo-api-errors#401-authentication_failed\&quot; target&#x3D;\&quot;_blank\&quot;&gt;401 authentication_failed errors&lt;/a&gt;. | [optional] 
**message** | **string** | A short description of the error.    For &#x60;authentication_failed&#x60; errors, the description is:    - &#x60;Invalid Secret Keys&#x60;. | [optional] 
**request_id** | **string** | A 32-character unique ID of the request (matching a regex pattern of: &#x60;[a-f0-9]{32}&#x60;). Provide this ID when contacting the Belvo support team to accelerate investigations. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

