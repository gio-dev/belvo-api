# TokenRequiredResponseTokenGenerationData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**instructions** | **string** | Instructions for token generation. | [optional] 
**type** | **string** | Type of the data to generate the token (QR code, numeric challenge). | [optional] 
**value** | **string** | Value to use to generate the token. | [optional] 
**expects_user_input** | **bool** | Indicates whether the user needs to provide input in order to complete the authentication.  When set to &#x60;false&#x60;, your user may need to:  - confirm the login on another device - scan a QR code  You will still need to make a PATCH call to complete the request. | [optional] [default to true]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

