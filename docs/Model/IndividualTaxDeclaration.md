# IndividualTaxDeclaration

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Belvo&#x27;s unique identifier for the current item. | 
**link** | **string** | The &#x60;link.id&#x60; the data belongs to. | 
**collected_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp when the data point was collected. | 
**created_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp of when the data point was created in Belvo&#x27;s database. | 
**document_information** | [**\Swagger\Client\Model\TaxDeclarationIndividualDocumentInformation**](TaxDeclarationIndividualDocumentInformation.md) |  | 
**tax_payer_information** | [**\Swagger\Client\Model\TaxDeclarationIndividualTaxPayerInformation**](TaxDeclarationIndividualTaxPayerInformation.md) |  | 
**equity_statement** | [**\Swagger\Client\Model\TaxDeclarationIndividualEquityStatement**](TaxDeclarationIndividualEquityStatement.md) |  | 
**annual_income_statement** | [**\Swagger\Client\Model\TaxDeclarationIndividualAnnualIncomeStatement**](TaxDeclarationIndividualAnnualIncomeStatement.md) |  | 
**pension_income_statement** | [**\Swagger\Client\Model\TaxDeclarationIndividualPensionIncomeStatement**](TaxDeclarationIndividualPensionIncomeStatement.md) |  | 
**tax_assessment** | [**\Swagger\Client\Model\TaxDeclarationIndividualTaxAssessment**](TaxDeclarationIndividualTaxAssessment.md) |  | 
**date_issued** | [**\DateTime**](\DateTime.md) | The date the tax declaration was issued by the fiscal institution. | 
**pdf** | **string** | The PDF of the tax declaration, as a binary string. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

