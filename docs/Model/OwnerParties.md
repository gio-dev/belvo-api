# OwnerParties

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**person_type** | **string** | The type of person that is an ownership party of the account. We return one of the following values:    - &#x60;INDIVIDUAL&#x60;   - &#x60;COMPANY&#x60; | 
**type** | **string** | The access type that the &#x60;person_type&#x60; has to the account. We return one of the following values:  - &#x60;MEMBER&#x60; indicates that the &#x60;person_type&#x60; has read access to the account. - &#x60;ADMINISTRATOR&#x60; indicates that the &#x60;person_type&#x60; can perform all actions for the account (including transfers). | 
**display_name** | **string** | The full name of the individual, as provided by the institution. Only applicable if the &#x60;person_type&#x60; is &#x60;INDIVIDUAL&#x60;. | 
**social_name** | **string** | The social name of the individual, as generally accepted by the country. Only applicable if the &#x60;person_type&#x60; is &#x60;INDIVIDUAL&#x60;. | 
**company_name** | **string** | The full (official) name of the business. Only applicable if the &#x60;person_type&#x60; is &#x60;COMPANY&#x60;. | [optional] 
**trade_name** | **string** | The trade name of the business. Only applicable if the &#x60;person_type&#x60; is &#x60;COMPANY&#x60;. | 
**start_date** | [**\DateTime**](\DateTime.md) | The date that the party was added to the account, in &#x60;YYYY-MM-DD&#x60; format. | 
**percentage_type** | **float** | The party&#x27;s equity interest. | 
**document_type** | **string** | The type of ID document the party provided when being added to the account. We return one of the following values:    - &#x60;CPF&#x60;   - &#x60;CNPJ&#x60;   - &#x60;OTHER_TRAVEL_DOCUMENT&#x60;   - &#x60;PASSPORT&#x60; | 
**document_number** | **string** | The ID document&#x27;s number.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**document_issue_date** | [**\DateTime**](\DateTime.md) | The date the the ID document was issued, in &#x60;YYYY-MM-DD&#x60; format. | 
**document_expiration_date** | [**\DateTime**](\DateTime.md) | The date the the ID document expires, in &#x60;YYYY-MM-DD&#x60; format. | 
**document_country** | **string** | The three-letter country code that issued the document (in ISO-3166 Alpha 3 format). | 
**document_additional_info** | **string** | Additional information regarding the document. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

