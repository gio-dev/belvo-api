# TaxDeclarationBusiness

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Belvo&#x27;s unique identifier for the current item. | 
**link** | **string** | The &#x60;link.id&#x60; the data belongs to. | 
**collected_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp when the data point was collected. | 
**created_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp of when the data point was created in Belvo&#x27;s database. | 
**document_information** | [**\Swagger\Client\Model\TaxDeclarationBusinessDocumentInformation**](TaxDeclarationBusinessDocumentInformation.md) |  | 
**tax_payer_information** | [**\Swagger\Client\Model\TaxDeclarationBusinessTaxPayerInformation**](TaxDeclarationBusinessTaxPayerInformation.md) |  | 
**equity_statement** | [**\Swagger\Client\Model\TaxDeclarationBusinessEquityStatement**](TaxDeclarationBusinessEquityStatement.md) |  | 
**annual_income_statement** | [**\Swagger\Client\Model\TaxDeclarationBusinessAnnualIncomeStatement**](TaxDeclarationBusinessAnnualIncomeStatement.md) |  | 
**annual_costs_and_deductions_statement** | [**\Swagger\Client\Model\TaxDeclarationBusinessAnnualCostsAndDeductionsStatement**](TaxDeclarationBusinessAnnualCostsAndDeductionsStatement.md) |  | 
**tax_assessment** | [**\Swagger\Client\Model\TaxDeclarationBusinessTaxAssessment**](TaxDeclarationBusinessTaxAssessment.md) |  | 
**date_issued** | [**\DateTime**](\DateTime.md) | The date the tax declaration was issued by the fiscal institution. | 
**pdf** | **string** | The PDF of the tax declaration, as a binary string. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

