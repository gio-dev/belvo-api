# ApiemploymentrecordsPersonalDataEntitlements

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entitled_to_health_insurance** | **bool** | Indicates whether or not the individual is entitled to health insurance. | [optional] 
**entitled_to_company_benefits** | **bool** | Indicates whether or not the individual is entitled to company benefits. | [optional] 
**valid_until** | [**\DateTime**](\DateTime.md) | Date until when the individual is covered by health insurance and/or company benefits. If &#x60;null&#x60; the employee is currently working and no end date is required. | [optional] 
**status** | **string** | Indicates the employment status of the individual. We return one of the following responses:      - &#x60;EMPLOYED&#x60;   - &#x60;RETIRED&#x60;   - &#x60;UNEMPLOYED&#x60;   - &#x60;null&#x60; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

