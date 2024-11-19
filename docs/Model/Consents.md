# Consents

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Belvo&#x27;s unique identifier for the current item. | [optional] 
**display_name** | **string** | The full name of the individual that initiated the consent, as provided by the institution. | [optional] 
**document_number** | **string** | The document number (CPF) of the individual. | [optional] 
**belvo_institution_name** | **string** | Belvo&#x27;s name for the open finance institution that the consent is related to. | [optional] 
**expired_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp when the consent will expire. | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp of when the data point was created in Belvo&#x27;s database. | [optional] 
**status** | **string** | The status of the consent in the open finance network. Can be either:    - &#x60;AUTHORISED&#x60;: The consent is still valid for use until the &#x60;expired_at&#x60; date.   - &#x60;AWAITING_AUTHORISATION_CONFIRMATION&#x60;: The user must confirm within their institution.   - &#x60;AWAITING_AUTHORISATION&#x60;: The user has been redirected to their institution to grant consent.   - &#x60;REJECTED&#x60;: The user has not granted consent within their institution.   - &#x60;EXPIRED&#x60;: The consent has expired as of the &#x60;expired_at&#x60; date.   - &#x60;null&#x60; | [optional] 
**permissions** | [**\Swagger\Client\Model\ConsentsPermissions**](ConsentsPermissions.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

