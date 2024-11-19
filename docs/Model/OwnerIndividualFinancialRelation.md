# OwnerIndividualFinancialRelation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_date** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp when the financial relationship between the individual and the institution started.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**product_services** | **string[]** | A list of products that the individual has with the institution.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network. | 
**product_services_additional_info** | **string** | Additional information regarding the products that the individual has. | 
**procurators** | [**\Swagger\Client\Model\OwnerIndividualFinancialRelationProcurators[]**](OwnerIndividualFinancialRelationProcurators.md) | Information regarding any individuals or companies that can act on behalf of the owner. | 
**products** | [**\Swagger\Client\Model\OwnerIndividualFinancialRelationProducts[]**](OwnerIndividualFinancialRelationProducts.md) | Details regarding any additional products that the individual has with the institution. | 
**salary_portability_requests** | [**\Swagger\Client\Model\OwnerIndividualFinancialRelationSalaryPortabilityRequests[]**](OwnerIndividualFinancialRelationSalaryPortabilityRequests.md) | Details regarding any salary portability requests that the individual has made with the institution.  A salary portability is a request to transfer the individual&#x27;s salary from their employer&#x27;s &#x27;payroll&#x27; bank account to another bank account.  &gt; 📘  &gt; &gt; Please note that the receiving bank account cannot terminate a salary portability (or be informed that it has been termnated). Only the employer&#x27;s payroll bank is able to provide this information. As such, the portabilities listed here may not be up-to-date. | [optional] 
**payroll_accounts** | [**\Swagger\Client\Model\OwnerIndividualFinancialRelationPayrollAccounts[]**](OwnerIndividualFinancialRelationPayrollAccounts.md) | Details regarding any payroll bank accounts that are associated with the individual. That is, each time the indivudal has a new employer that they receive a salary from, it should be listed here.  &gt; 📘 &gt; &gt; Past employers may not close the payroll account for the indiviual. As such, the payroll accounts listed here may not be up-to-date. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

