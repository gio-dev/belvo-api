# TaxReturnPersonal

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Belvo&#x27;s unique identifier for the current item. | [optional] 
**link** | **string** | The &#x60;link.id&#x60; the data belongs to. | [optional] 
**collected_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp when the data point was collected. | 
**created_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp of when the data point was created in Belvo&#x27;s database. | [optional] 
**informacion_general** | **object** | General information on the tax return (year, RFC, return type, person/company name, and so on). | 
**sueldos_salarios** | **object** | Details regarding the income information together combined with withheld taxes. | 
**servicios_profesionales** | **object** | Details regarding the income and tax information from professional services provided. | 
**deducciones_personales** | **object** | List of all personal tax deductions. | 
**determinacion_impuesto** | **object** | Details regarding the final tax return. | 
**retenciones** | **object** | Details on the already withheld taxes. | 
**dividendos** | **object** | Details regarding dividends. | 
**datos_informativos** | **object** | Extra informative data on the tax return. | [optional] 
**pdf** | **string** | Tax return PDF as a binary. | 
**receipt_pdf** | **string** | The acknowledgement receipt from the fiscal institution confirming that they received the tax return. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

