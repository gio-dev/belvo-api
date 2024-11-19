# TaxReturnPersonalMonthly

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Belvo&#x27;s unique identifier for the current item. | [optional] 
**collected_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp when the data point was collected. | 
**created_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp of when the data point was created in Belvo&#x27;s database. | [optional] 
**informacion_general** | **object** | General information regarding the tax return (year, RFC, return type, person/company name, and so on). | 
**isr** | **object** | Information used to calculate the monthly provisional payments of the income tax. | 
**iva** | **object** | Information used to calculate the monthly provisional payments of the VAT tax. | 
**pdf** | **string** | Tax return PDF as a binary. | 
**receipt_pdf** | **string** | The acknowledgement receipt from the fiscal institution confirming that they received the tax return. | [optional] 
**type** | **string** | The type of tax return. Can be either monthly or annual. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

