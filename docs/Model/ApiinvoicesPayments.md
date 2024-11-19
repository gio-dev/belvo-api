# ApiinvoicesPayments

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | [**\DateTime**](\DateTime.md) | ISO-8601 timestamp when the payment was made. | 
**payment_type** | **string** | Payment type code used for this invoice, as defined by the country&#x27;s legal entity.  - 🇲🇽 Mexico [SAT catalog reference article](https://developers.belvo.com/docs/sat-catalogs#payment-type) | 
**currency** | **string** | The currency of the payment. For example:  - 🇧🇷 BRL (Brazilian Real) - 🇨🇴 COP (Colombian Peso) - 🇲🇽 MXN (Mexican Peso)  Please note that other currencies other than in the list above may be returned. | 
**exchange_rate** | **string** | The &#x60;currency&#x60; to MXN currency exchange rate when the payment was made. | 
**amount** | **float** | The invoice amount, in the currency of the original invoice. | 
**operation_number** | **string** | The fiscal institution&#x27;s internal identifier for the operation. | 
**beneficiary_rfc** | **string** | The fiscal ID of the payment beneficiary. | [optional] 
**beneficiary_account_number** | **string** | The bank account number of the payment beneficiary. | 
**payer_rfc** | **string** | The fiscal ID of the payment issuer. | 
**payer_account_number** | **string** | The bank account number of the payment issuer. | 
**payer_bank_name** | **string** | The banking institution that was used by the payment issuer. | 
**related_documents** | [**\Swagger\Client\Model\ApiinvoicesRelatedDocuments[]**](ApiinvoicesRelatedDocuments.md) | A list of all the related deferred invoices affected by the payment. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

