# ApiEmploymentmetricsBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**link** | **string** | The &#x60;link.id&#x60; you want to retrieve employment metrics for. | 
**reference_date** | [**\DateTime**](\DateTime.md) | The date until which you want the employment metrics to be calculated, in &#x60;YYYY-MM-DD&#x60; format. For example, if you do not want to calculate employment metrics for all of 2023, the add &#x60;2022-12-31&#x60; as the &#x60;reference_date&#x60;.  If you do not provide a &#x60;reference_date&#x60;, we perform calcualtions up until the date you make the request.  **Note:** All calculations will be relative to this date. | [optional] 
**save_data** | **bool** | Indicates whether or not to persist the data in Belvo. By default, this is set to &#x60;true&#x60; and we return a 201 Created response.  When set to &#x60;false&#x60;, the data won&#x27;t be persisted and we return a 200 OK response. | [optional] [default to true]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

