# TaxStatusSatTaxPayerInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rfc** | **string** | The tax payers&#x27;s identification number (For Mexico, this is the RFC). | 
**curp** | **string** | The tax payers&#x27;s *Clave Única de Registro de Población* (CURP) number. | [optional] 
**name** | **string** | The tax payers&#x27;s first name. | [optional] 
**first_last_name** | **string** | The tax payers&#x27;s first last name. | [optional] 
**second_last_name** | **string** | The tax payers&#x27;s second last name. | [optional] 
**start_operations_date** | [**\DateTime**](\DateTime.md) | Date when the tax payer commenced taxable commercial activities, in &#x60;YYYY-MM-DD&#x60; format. | 
**status_padron** | **string** | Status of the taxpayer in the Federal Register of Taxpayers (RFC). Can be &#x60;ACTIVO&#x60; or &#x60;INACTIVO&#x60;. | 
**last_status_change_date** | [**\DateTime**](\DateTime.md) | Date when &#x60;status_padron&#x60; was most recently updated, in &#x60;YYYY-MM-DD&#x60; format. | 
**commercial_name** | **string** | The name of the business designated for consumers and the general public.  **Note**: Only applicable for businesses. | [optional] 
**social_name** | **string** | The unique and exclusive name within the national territory that companies receive for legal or administrative purposes.  **Note**: Only applicable for businesses. | [optional] 
**email** | **string** | Contact email address for the tax payer. | [optional] 
**phone** | **string** | Contact phone number for the tax payer. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

