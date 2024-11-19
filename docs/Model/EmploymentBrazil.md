# EmploymentBrazil

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Belvo&#x27;s unique identifier for the current item. | 
**link** | **string** | The &#x60;link.id&#x60; the data belongs to. | 
**created_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp of when the data point was created in Belvo&#x27;s database. | 
**collected_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp when the data point was collected. | 
**start_date** | [**\DateTime**](\DateTime.md) | The employee&#x27;s start date at the employer, in &#x60;YYYY-MM-DD&#x60; format. | 
**end_date** | [**\DateTime**](\DateTime.md) | The employee&#x27;s end date at the employer, in &#x60;YYYY-MM-DD&#x60; format. If &#x60;null&#x60;, the employee is still working at the employer. | 
**employer_data** | [**\Swagger\Client\Model\ApibremploymentsEmployerData**](ApibremploymentsEmployerData.md) |  | 
**occupations** | [**\Swagger\Client\Model\ApibremploymentsOccupations[]**](ApibremploymentsOccupations.md) | The employee&#x27;s occupations at the employer. | 
**salaries** | [**\Swagger\Client\Model\ApibremploymentsSalaries[]**](ApibremploymentsSalaries.md) | The salaries the employee received from the employer. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

