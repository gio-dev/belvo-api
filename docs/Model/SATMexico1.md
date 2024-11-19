# SATMexico1

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Belvo&#x27;s unique identifier for the current item. | 
**link** | **string** | The &#x60;link.id&#x60; the data belongs to. | 
**collected_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp when the data point was collected. | 
**created_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp of when the data point was created in Belvo&#x27;s database. | 
**place_and_date_of_issuance** | **string** | The place and date of that the tax status was issued. | 
**official_name** | **string** | The name of the person or business. | 
**id_cif** | **string** | The taxpayer&#x27;s *Cédula de Identificación Fiscal* (CIF) ID. | 
**tax_payer_information** | [**\Swagger\Client\Model\TaxStatusSatTaxPayerInformation**](TaxStatusSatTaxPayerInformation.md) |  | 
**address** | [**\Swagger\Client\Model\TaxStatusSatAddress**](TaxStatusSatAddress.md) |  | 
**economic_activity** | [**\Swagger\Client\Model\TaxStatusSatEconomicActivity[]**](TaxStatusSatEconomicActivity.md) | A list of economic activity objects. | 
**regimes** | [**\Swagger\Client\Model\TaxStatusSatRegimes[]**](TaxStatusSatRegimes.md) | A list of regimen objects. | 
**obligations** | [**\Swagger\Client\Model\TaxStatusSatObligations[]**](TaxStatusSatObligations.md) | Details regarding a business&#x27;s obligations.  ℹ️ For non-business accounts, this field will return empty. | 
**digital_stamp** | **string** | The validation certificate of the document. | 
**digital_stamp_chain** | **string** | A data chain containing the basic structure of a fiscal digital check. For Mexico, this is the *Comprobante Fiscal Digital por Internet* (CFDI). | 
**pdf** | **string** | Tax status PDF as a binary string. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

