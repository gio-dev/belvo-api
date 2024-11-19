# EmploymentRecordScore

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**score** | **int** | A score between 300 and 900 that provides an insight into employability and income generation potential.  - A low score (closer to 300) could indicate lower predicted employability and income generation potential, suggesting potential challenges in securing employment or achieving higher income levels in the future. - A high score (closer to 900) could suggest a greater likelihood of securing employment and generating higher income levels.  The score can return &#x60;null&#x60; if the individual has no employment history. | [optional] 
**period** | **int** | The number of months (in the future) that the score is calculated for.  For example, a period of &#x60;6&#x60; indicates that the score is calculated for the next &#x60;6&#x60; months.  &gt; **Note**: At present Belvo calculates the score for 3, 6, and 12 months. | [optional] 
**version** | **string** | The version of our employment score model used to perform the calculation. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

