# OwnerBusinessOFDABrazil

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Belvo&#x27;s unique identifier for the current item. | 
**link** | **string** | The &#x60;link.id&#x60; the data belongs to. | 
**internal_identification** | **string** | The institution&#x27;s internal identifier for the owner. | 
**collected_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp when the data point was collected. | 
**created_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp of when the data point was created in Belvo&#x27;s database. | 
**company_name** | **string** | The full (official) name of the business, as provided by the institution.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**trade_name** | **string** | The trade name of the business. | 
**incorporation_date** | [**\DateTime**](\DateTime.md) | The date that the business was incorporated, in &#x60;YYYY-MM-DD&#x60; format.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**companies_id** | **string[]** | The institutions responsible for the creation and verification of the owner.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**document_id** | [**\Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilDocumentId**](OwnerIndividualOpenFinanceBrazilDocumentId.md) |  | 
**additional_documents** | [**\Swagger\Client\Model\OwnerBusinessOpenFinanceBrazilAdditionalDocuments[]**](OwnerBusinessOpenFinanceBrazilAdditionalDocuments.md) | Detailed information regarding additional documents provided to prove the business&#x27;s ID.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**email** | **string** | The account owner&#x27;s registered email address. | 
**emails** | [**\Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilEmails[]**](OwnerIndividualOpenFinanceBrazilEmails.md) | Additional list of emails the owner provided. | 
**address** | **string** | The accounts owners registered address. | 
**addresses** | [**\Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilAddresses[]**](OwnerIndividualOpenFinanceBrazilAddresses.md) | Detailed information regarding the owner&#x27;s addresses. | 
**phone_number** | **string** | The account owner&#x27;s registered phone number. | 
**phone_numbers** | [**\Swagger\Client\Model\OwnerIndividualOpenFinanceBrazilPhoneNumbers[]**](OwnerIndividualOpenFinanceBrazilPhoneNumbers.md) | Detailed information regarding the owner&#x27;s &#x60;phone_number&#x60;s. | 
**parties** | [**\Swagger\Client\Model\OwnerBusinessOpenFinanceBrazilParties[]**](OwnerBusinessOpenFinanceBrazilParties.md) | Detailed information regarding the parties allowed to act on the owner&#x27;s behalf.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**financial_profile** | [**\Swagger\Client\Model\OwnerBusinessOpenFinanceBrazilFinancialProfile**](OwnerBusinessOpenFinanceBrazilFinancialProfile.md) |  | 
**financial_relation** | [**\Swagger\Client\Model\OwnerBusinessOpenFinanceBrazilFinancialRelation**](OwnerBusinessOpenFinanceBrazilFinancialRelation.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

