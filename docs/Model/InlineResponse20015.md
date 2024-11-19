# InlineResponse20015

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Belvo&#x27;s unique identifier for the current item. | [optional] 
**link** | **string** | The &#x60;link.id&#x60; the data belongs to. | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp of when the data point was created in Belvo&#x27;s database. | [optional] 
**collected_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp when the data point was collected. | [optional] 
**report_date** | [**\DateTime**](\DateTime.md) | The date when the employment record report was generated, in &#x60;YYYY-MM-DD&#x60; format. | [optional] 
**internal_identification** | **string** | Unique ID for user according to the institution. For IMSS and ISSSTE Mexico, this is the CURP. | [optional] 
**personal_data** | [**\Swagger\Client\Model\ApiemploymentrecordsPersonalData**](ApiemploymentrecordsPersonalData.md) |  | [optional] 
**social_security_summary** | [**\Swagger\Client\Model\ApiemploymentrecordsSocialSecuritySummary**](ApiemploymentrecordsSocialSecuritySummary.md) |  | [optional] 
**employment_records** | [**\Swagger\Client\Model\ApiemploymentrecordsEmploymentRecords[]**](ApiemploymentrecordsEmploymentRecords.md) | Details regarding the individual&#x27;s employment history. | [optional] 
**employment_scores** | [**\Swagger\Client\Model\ApiemploymentrecordsEmploymentScores[]**](ApiemploymentrecordsEmploymentScores.md) | An array of &#x60;employment_record&#x60; scores. Each score provides an insight into employability and income generation potential in a given period.  &gt; **Note 1**: This field is only available for links created with Mexico&#x27;s IMSS. For other institutions, this field will return &#x60;null&#x60;.  &gt; **Note 2**: This field will return &#x60;null&#x60; for employment records retrieved before 16-04-2024. For employment records generated before 16-04-2024, you&#x27;ll need to make a new POST request to retrieve employment records to calculate the scores. | [optional] 
**files** | [**\Swagger\Client\Model\ApiemploymentrecordsFiles[]**](ApiemploymentrecordsFiles.md) | Additional PDF binary files relating to the individual&#x27;s employment. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

