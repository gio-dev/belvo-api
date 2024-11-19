# TaxAssessmentBusiness

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**net_income_taxable** | **float** | The net income on which tax can be applied. | 
**fortuitous_profit_tax** | **float** | The tax applied on your unexpected income (such as lottery wins or house sales). | 
**total_tax_on_taxable_net_income** | **float** | The calculated total tax that can be applied on the tax payer&#x27;s taxable income (total income - exemptions - deductions). | 
**net_income_tax** | **float** | After additional deductions that you can apply, this will be the net income tax. If no further deduction are identified, this value will be the same as &#x60;total_tax_on_taxable_net_income&#x60;. | 
**total_tax_due** | **float** | After further deductions, this is the final calculated tax that the taxpayer is required to pay. | 
**total_withholdings_for_the_taxable_year_to_be_declared** | **float** | How much the tax payer has already paid througout the fiscal year. | 
**total_balance_payable** | **float** | How much the tax payer is required to pay. | 
**total_balance_in_favor** | **float** | How much the tax payer is expected to receive. | 
**total_payment** | **float** | The total the tax payer is required to pay, taking into account deductions and fiscal credits. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

