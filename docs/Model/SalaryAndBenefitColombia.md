# SalaryAndBenefitColombia

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**month** | **string** | The month the salary and benefits were paid, in &#x60;YYYY-MM&#x60; format. | [optional] 
**gross_amount** | **float** | The total gross amount of the person&#x27;s salary before deductions. | [optional] 
**net_amount** | **float** | The net amount of the person&#x27;s salary after deductions (social security contributions, tax, and so on). | [optional] 
**employment_type** | **string** | The contract type the employee has with the employer. | [optional] 
**employment_type_additional_info** | **string** | Additional information about the &#x60;employment_type&#x60;. | [optional] 
**parafiscal_contribution** | **bool** | Indicates whether the person needs to make additional contributions to healthcare, welfare, or tax regimes. | [optional] 
**salary_comprehensive** | **bool** | Indicates whether the salary includes all mandatory legal benfits and bonuses. | [optional] 
**salary_type** | **string** | Indicates what kind of salary the person retrieves. Can be either &#x60;FIXED&#x60; or &#x60;VARIABLE&#x60;. | [optional] 
**pension_fund_name** | **string** | The name of the pension fund that the person contributes to. | [optional] 
**healthcare_provider_name** | **string** | The name of the healthcare provider that the person contributes to. | [optional] 
**status_changes** | **string[]** | An array of strings that indicate why the salary may be different from regular payments. Can be any of the following:    - &#x60;FIRST_MONTH&#x60; -  Indicates whether the person starting working for the employer in this month.   - &#x60;FINAL_MONTH&#x60; -  Indicates whether the person stopped working for the employer in this month.   - &#x60;ON_LEAVE&#x60; -  Indicates whether the person is on parental (or other) leave in this month.   - &#x60;RETIREMENT_MONTH&#x60; -  Indicates whether the person went on retirement after this month.   - &#x60;ON_VACATION&#x60; -  Indicates whether the person is on vacation in this month.   - &#x60;PERMANENT_SALARY_CHANGE&#x60; -  Indicates whether the person received a permanent change in salary this month.   - &#x60;TEMPORARY_SALARY_CHANGE&#x60; -  Indicates whether the person received an adhoc change in salary this month. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

