# TransactionCounterparty

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The transaction counterparty type. We return one of the following values:    - &#x60;INDIVIDUAL&#x60;   - &#x60;COMPANY&#x60;   - &#x60;null&#x60; | 
**document_number** | **string** | The document number of the representative.  **Note**:   For Brazil:   - When the &#x60;type&#x60; is &#x60;INDIVIDUAL&#x60;, this is the CPF number.   - When the &#x60;type&#x60; is &#x60;COMPANY&#x60;, this is the CNPJ number. | 
**clearing_code** | **string** | The banking clearing code. | 
**agency** | **string** | The branch code where the account was opened. | 
**check_digit** | **string** | The check digit of the account number, if applicable. | 
**number** | **string** | The account number of the product. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

