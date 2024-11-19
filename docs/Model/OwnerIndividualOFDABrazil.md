# OwnerIndividualOFDABrazil

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Belvo&#x27;s unique identifier for the current item. | 
**link** | **string** | The &#x60;link.id&#x60; the data belongs to. | 
**internal_identification** | **string** | The institution&#x27;s internal identifier for the owner. | 
**collected_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp when the data point was collected. | 
**created_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp of when the data point was created in Belvo&#x27;s database. | 
**display_name** | **string** | The full name of the individual, as provided by the institution.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**social_name** | **string** | The social name of the individual, as generally accepted by the country. | 
**birth_date** | [**\DateTime**](\DateTime.md) | The individual&#x27;s date of birth, in &#x60;YYYY-MM-DD&#x60; format.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**marital_status** | **string** | The individual&#x27;s marital status. We return one of the following values:    - &#x60;SINGLE&#x60;   - &#x60;MARRIED&#x60;   - &#x60;WIDOWED&#x60;   - &#x60;SEPARATED&#x60;   - &#x60;DIVORCED&#x60;   - &#x60;CIVIL_UNION&#x60;   - &#x60;OTHER&#x60; | 
**marital_status_additional_info** | **string** | Additional information about the individual&#x27;s marital status. | 
**gender** | **string** | The individual&#x27;s gender. We return on of the following values:    - &#x60;FEMALE&#x60;   - &#x60;MALE&#x60;   - &#x60;OTHER&#x60; | 
**companies_id** | **string[]** | The institutions responsible for the creation and verification of the owner.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**is_local_resident** | **bool** | Boolean to indicate if the individual is a local resident of the country.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**document_id** | [**\Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilDocumentId**](OwnerIndividualOpenFinanceBrazilDocumentId.md) |  | 
**additional_documents** | [**\Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilAdditionalDocuments[]**](OwnerIndividualOpenFinanceBrazilAdditionalDocuments.md) | Detailed information regarding additional documents provided to prove the individuals ID.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**nationalities** | [**\Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilNationalities[]**](OwnerIndividualOpenFinanceBrazilNationalities.md) | Detailed information regarding the individual&#x27;s nationalities.  Only required to be returned when &#x60;is_local_resident&#x60; is set to &#x60;false&#x60;. | 
**email** | **string** | The account owner&#x27;s registered email address.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**emails** | [**\Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilEmails[]**](OwnerIndividualOpenFinanceBrazilEmails.md) | Additional list of emails the owner provided.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**address** | **string** | The account owner&#x27;s registered address.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**addresses** | [**\Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilAddresses[]**](OwnerIndividualOpenFinanceBrazilAddresses.md) | Detailed information regarding the owner&#x27;s addresses.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**phone_number** | **string** | The account owner&#x27;s registered phone number.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**phone_numbers** | [**\Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilPhoneNumbers[]**](OwnerIndividualOpenFinanceBrazilPhoneNumbers.md) | Detailed information regarding the owner&#x27;s phone numbers.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**filiations** | [**\Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilFiliations[]**](OwnerIndividualOpenFinanceBrazilFiliations.md) | Information regarding any familial relationships of the individual.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**financial_profile** | [**\Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilFinancialProfile**](OwnerIndividualOpenFinanceBrazilFinancialProfile.md) |  | 
**financial_relation** | [**\Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilFinancialRelation**](OwnerIndividualOpenFinanceBrazilFinancialRelation.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

