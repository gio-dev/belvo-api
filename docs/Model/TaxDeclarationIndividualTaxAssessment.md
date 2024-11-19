# TaxDeclarationIndividualTaxAssessment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fortuitous_profit_tax** | **float** | The tax applied on your unexpected income (such as lottery wins or house sales). | 
**total_tax_on_taxable_net_income** | **float** | The calculated total tax that can be applied on the tax payer&#x27;s taxable income (total income - exemptions - deductions). | 
**net_income_tax** | **float** | After additional deductions that you can apply, this will be the net income tax. If not further deduction are identified, this value will be the same as &#x60;total_tax_on_taxable_net_income&#x60;. | 
**total_tax_due** | **float** | After further deductions, this is the final calculated tax that the taxpayer is required to pay. | 
**previous_year_balance** | **float** | Only applicable for DIAN.   The amount the tax payer has as a \&quot;credit\&quot; fromt he previous year (this is equal to the &#x60;balance_refundable&#x60;) of the previous year. | 
**total_withheld_tax** | **float** | The total tax already withheld in the current fiscal year. | 
**balance_payable** | **float** | How much the tax payer is required to pay. | 
**balance_refundable** | **float** | How much the tax payer is expected to receive. For DIAN, this will count as credit for the next fiscal year (see &#x60;previous_year_balance&#x60;). | 
**total_payment** | **float** | The total the tax payer is required to pay, taking into account deductions and fiscal credits. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

