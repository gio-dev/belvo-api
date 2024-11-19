# EmploymentRecordEmploymentStatusUpdates

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event** | **string** | The event that caused the change in employment status or salary.  For IMSS Mexico, we return one of the following values:      - &#x60;DISMISSED_RESIGNED&#x60;   - &#x60;SALARY_MODIFICATION&#x60;   - &#x60;HIRED&#x60;   - &#x60;VOLUNTARY_CONTRIBUTION&#x60;   - &#x60;ABSENCE&#x60;   - &#x60;SICK_LEAVE&#x60;  For ISSSTE Mexico, we return one of the following values:    - &#x60;NORMAL&#x60;   - &#x60;BDUTA_CERTIFICATE&#x60;   - &#x60;DYE_CERTIFICATE&#x60; | [optional] 
**base_salary** | **float** | The base salary of the individual, current as of the &#x60;update_date&#x60;.    - For IMSS Mexico, this value is calculated including the perks that the individual is entitled to throughout the year.   - For ISSSTE Mexico, this value is calculated excluding the individual&#x27;s perks. | [optional] 
**update_date** | [**\DateTime**](\DateTime.md) | The date that the employment event occurred, in &#x60;YYYY-MM-DD&#x60; format. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

