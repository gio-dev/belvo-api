# OwnerIndividualDocumentIds

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of ID document. We return one of the following values:    - &#x60;DRIVERS_LICENSE&#x60;   - &#x60;PASSPORT&#x60;   - &#x60;ID_CARD&#x60;   - &#x60;FISCAL_ID&#x60;   - &#x60;FOREIGNER_REGISTRATION_CARD&#x60;   - &#x60;OTHER&#x60;   - &#x60;null&#x60; | 
**type_additional_info** | **string** | Additional information regarding the document type.  &gt; Note: For Business ID documents, this field must return a value from Brazil&#x27;s open finance network. | 
**number** | **string** | The ID document&#x27;s number.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**check_digit** | **string** | The check digit of the ID document.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**issue_date** | [**\DateTime**](\DateTime.md) | The date the the ID document was issued, in &#x60;YYYY-MM-DD&#x60; format. | 
**expiration_date** | [**\DateTime**](\DateTime.md) | The date the the ID document expires, in &#x60;YYYY-MM-DD&#x60; format. | 
**country_of_issuance** | **string** | The three-letter country code that issued the document (in ISO-3166 Alpha 3 format).  This field must be returned when the &#x60;type&#x60; is &#x60;PASSPORT&#x60;. | 
**additional_info** | **string** | Additional information about the ID document. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

