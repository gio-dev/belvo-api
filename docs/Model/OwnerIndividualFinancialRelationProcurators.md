# OwnerIndividualFinancialRelationProcurators

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of representative that can access and make changes to the account. We return one of the following values:    - &#x60;LEGAL_REPRESENTATIVE&#x60;   - &#x60;ATTORNEY&#x60;   - &#x60;null&#x60; | 
**civil_name** | **string** | The representatives&#x27;s full name.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network if the &#x60;procurators&#x60; field is available. | 
**social_name** | **string** | The person&#x27;s social name. | 
**document_number** | **string** | The document number of the representative.  **Note**: For individuals, this is Brazil&#x27;s CPF number. For businesses, this is Brazil&#x27;s CNPJ number.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network if the &#x60;procurators&#x60; field is available. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

