# InlineResponse20029

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Belvo&#x27;s unique identifier for the current item. | 
**link** | **string** | The &#x60;link.id&#x60; the data belongs to. | 
**collected_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp when the data point was collected. | 
**created_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp of when the data point was created in Belvo&#x27;s database. | 
**updated_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp of when the employment metrics calculation was last updated. | 
**reference_date** | [**\DateTime**](\DateTime.md) | The reference_date your provided in your request. If you didn&#x27;t provide one, this field will return &#x60;null&#x60;, indicating that the calculations are performed up until the date of the request.  **Note:** All calculations are relative to this date. | 
**age** | **int** | The age of the individual. | 
**current_status** | **string** | Indicates the employment status of the individual. We return one of the following responses:      - &#x60;EMPLOYED&#x60;   - &#x60;RETIRED&#x60;   - &#x60;UNEMPLOYED&#x60;   - &#x60;null&#x60; | 
**current_employer_count** | **int** | The number of employers the individual has right now. | 
**base_salary_last** | **float** | The user&#x27;s latest base salary. If &#x60;current_status&#x60; is &#x60;EMPLOYED&#x60;, this is the user&#x27;s current base salary. | 
**weeks_employed_last_job** | **float** | The number of weeks the user was employed in their last job. If &#x60;current_status&#x60; is &#x60;EMPLOYED&#x60;, then this field indicates the number of weeks the user has been employed with his current job. | 
**weeks_since_last_job** | **float** | The number of weeks since their last job. If the value of this field is &#x60;0&#x60;, this indicates that the user is currently employed. | 
**weeks_employed_total** | **float** | The total number of weeks the user has been employed, according to the institution.  &gt; **Note:** &gt; &gt; In the case that the user is employed at two or more places at the same time, we still calculate those weeks as one week. For example, if a user has three concurrent jobs for a month, this is calculated as 4 weeks. | 
**weeks_with_multiple_employers** | **float** | The number of the weeks that the individual has had more than one employer at the same time. | 
**employer_count** | **int** | The total number of employers the user has had. Useful to indicate employment stability over the course of their lifetime. | 
**unique_employer_count** | **int** | The number of unique employers that the individual has had.  &gt; **Note:** &gt; &gt; If the user left one company and returned, for example, six months later to the same company, this is counted as one employer. | 
**employers_per_year** | **float** | Number of employers per year. Useful to indicate employment stability over the course of a year.  &gt; **Note:** &gt; &gt; If the user left one company and returned, for example, six months later to the same company, this is counted as one employer. | 
**weeks_between_jobs** | **float** | The total number of weeks the individual was unemployed. | 
**max_weeks_between_jobs** | **float** | The maximum number of weeks that the individual was unemployed. | 
**increases_last_job** | **int** | The total number of salary increases the user had in their last job. If &#x60;current_status&#x60; is &#x60;EMPLOYED&#x60;, this refers to the user&#x27;s current job.  &gt; **Note:** &gt; &gt; For all salary increases or decreases, we only take into account those where the change in salary is greater than 2%. | 
**decreases_last_job** | **int** | The total number of salary increases the user had in their last job. If &#x60;current_status&#x60; is &#x60;EMPLOYED&#x60;, this refers to the user&#x27;s current job. | 
**increases_after_change** | **int** | The total number of salary increases between the individual&#x27;s penultimate job and the last (or current) job. | 
**decreases_after_change** | **int** | The total number of salary decreases between the individual&#x27;s penultimate job and the last (or current) job. | 
**increases_overall** | **int** | The total number of salary increases throughout the individual&#x27;s working career. | 
**decreases_overall** | **int** | The total number of salary decreases throughout the individual&#x27;s working career. | 
**increases_1y** | **int** | The total number of salary increases throughout the individual&#x27;s last year (YTD). | 
**decreases_1y** | **int** | The total number of salary decreases throughout the individual&#x27;s last year (YTD). | 
**increases_3y** | **int** | The total number of salary increases throughout the individual&#x27;s last three years.  &gt; **Note:** &gt; &gt;  If the individual&#x27;s working career is less than three years, we return &#x60;null&#x60;. | 
**decreases_3y** | **int** | The total number of salary decreases throughout the individual&#x27;s last three years.  &gt; **Note:** &gt; &gt;  If the individual&#x27;s working career is less than three years, we return &#x60;null&#x60;. | 
**increases_5y** | **int** | The total number of salary increases throughout the individual&#x27;s last five years.  &gt; **Note:** &gt; &gt;  If the individual&#x27;s working career is less than five years, we return &#x60;null&#x60;. | 
**decreases_5y** | **int** | The total number of salary decreases throughout the individual&#x27;s last five years.  &gt; **Note:** &gt; &gt;  If the individual&#x27;s working career is less than five years, we return &#x60;null&#x60;. | 
**yearly_change_1y** | **float** | The individual&#x27;s salary percentage change for the last year (YTD). | 
**yearly_change_3y** | **float** | The individual&#x27;s salary percentage change for the last three years.  &gt; **Note:** &gt; &gt;  If the individual&#x27;s working career is less than three years, we return &#x60;null&#x60;. | 
**yearly_change_5y** | **float** | The individual&#x27;s salary percentage change for the last five years.  &gt; **Note:** &gt; &gt;  If the individual&#x27;s working career is less than five years, we return &#x60;null&#x60;. | 
**min_monthly_salary_1y** | **float** | The individual&#x27;s minimum monthly salary for the last year. | 
**min_monthly_salary_3y** | **float** | The individual&#x27;s minimum monthly salary for the last three years. | 
**min_monthly_salary_5y** | **float** | The individual&#x27;s minimum monthly salary for the last five years. | 
**average_monthly_salary_1y** | **float** | The individual&#x27;s average monthly salary for the last year. | 
**average_monthly_salary_3y** | **float** | The individual&#x27;s average monthly salary for the last three years. | 
**average_monthly_salary_5y** | **float** | The individual&#x27;s average monthly salary for the last five years. | 
**max_monthly_salary_1y** | **float** | The individual&#x27;s maximum monthly salary for the last year. | 
**max_monthly_salary_3y** | **float** | The individual&#x27;s maximum monthly salary for the last three years. | 
**max_monthly_salary_5y** | **float** | The individual&#x27;s maximum monthly salary for the last five years. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

