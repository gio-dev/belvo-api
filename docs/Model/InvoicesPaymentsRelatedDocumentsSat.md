# InvoicesPaymentsRelatedDocumentsSat

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invoice_identification** | **string** | The fiscal institution&#x27;s unique ID for the related deferred invoice. | 
**currency** | **string** | The currency of the related invoice. For example:      - 🇧🇷 BRL (Brazilian Real) - 🇨🇴 COP (Colombian Peso) - 🇲🇽 MXN (Mexican Peso)      Please note that other currencies other than in the list above may be returned. | 
**payment_method** | **string** | The payment method of the related invoice. | 
**partiality_number** | **int** | The payment installment number. | [optional] 
**previous_balance** | **float** | The invoice amount before the payment. | 
**amount_paid** | **float** | The amount paid in this installment. | 
**outstanding_balance** | **float** | The amount remaining to be paid. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

