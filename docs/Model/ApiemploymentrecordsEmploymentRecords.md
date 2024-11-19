# ApiemploymentrecordsEmploymentRecords

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**collected_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp when the data point was collected. | [optional] 
**employer** | **string** | The official name of the employer.  &gt;**Note**: For ISSSTE Mexico, this is the official name of the entity along with the entity that is responsible for managing the employee&#x27;s information, separated by a semicolon (&#x60;;&#x60;). For example: SECRETARIA DE EDUCACION PUBLICA (SEP);SECRETARIA DE EDUCACION PUBLICA (SEP). | [optional] 
**employer_id** | **string** | The official ID of the employer, according to the country.  &gt;**Note**: For ISSSTE Mexico, this value will return &#x60;null&#x60;. | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | Date when employment started, in &#x60;YYYY-MM-DD&#x60; format. | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | Date when employment finished, in &#x60;YYYY-MM-DD&#x60; format.  &gt;**Note**: This field will return &#x60;null&#x60; for the user&#x27;s current employment. | [optional] 
**weeks_employed** | **int** | Number of weeks that the individual was employed. | [optional] 
**state** | **string** | In what geographical state the individual was employed, according to the country.  &gt;**Note**: For ISSSTE Mexico, this value will return &#x60;null&#x60;. | [optional] 
**most_recent_base_salary** | **float** | The most recent base salary the individual earned.  - For IMSS Mexico, this value is calculated including the perks that the individual is entitled to throughout the year. - For ISSSTE Mexico, this value is calculated dividing &#x60;monthly_salary&#x60; by 30 (days), and excludes the individual&#x27;s perks. | [optional] 
**monthly_salary** | **float** | The monthly salary of the individual, including any additional perks.  - For IMSS Mexico, this value is calculated including the perks that the individual is entitled to throughout the year. - For ISSSTE Mexico, this value is calculated excluding perks. | [optional] 
**currency** | **string** | The three-letter currency code in which the salary is paid. | [optional] 
**employment_status_updates** | [**\Swagger\Client\Model\ApiemploymentrecordsEmploymentStatusUpdates[]**](ApiemploymentrecordsEmploymentStatusUpdates.md) | Details regarding any employment changes of the individual. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

