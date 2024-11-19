# InlineResponse20039

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Belvo&#x27;s unique identifier for the current item. | [optional] 
**collected_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp when the data point was collected. | 
**created_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp of when the data point was created in Belvo&#x27;s database. | [optional] 
**internal_identification** | **string** | The institution’s internal identification number for the document. | [optional] 
**pdf** | **string** | Tax compliance status PDF as a binary. | 
**rfc** | **string** | The account holder&#x27;s RFC (Registro Federal de Contribuyentes) number. | [optional] 
**outcome** | **string** | Indicates whether the taxpayer is complying to all their tax obligations (&#x60;POSITIVE&#x60;), if they are not (&#x60;NEGATIVE&#x60;), or have none to comply to (&#x60;NO_OBLIGATIONS&#x60;). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

