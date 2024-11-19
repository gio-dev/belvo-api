# RiskInsightsBalanceMetrics

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**closing_balance** | **float** | The balance of all the accounts at the &#x60;collected_at&#x60; time. | 
**min_balance_3d** | **float** | The minimum balance in the last three days. | 
**min_balance_1w** | **float** | The minimum balance in the last week). | 
**min_balance_1m** | **float** | The minimum balance in the last month. | 
**min_balance_3m** | **float** | The minimum balance in the last three months. | 
**min_balance_6m** | **float** | The minimum balance in the six last months. | 
**min_balance_12m** | **float** | The minimum balance in the last twelve months. | 
**mean_balance_3d** | **float** | The mean balance in the last three days. | 
**mean_balance_1w** | **float** | The mean balance in the last week. | 
**mean_balance_1m** | **float** | The mean balance in the last month. | 
**mean_balance_3m** | **float** | The mean balance in the last three months. | 
**mean_balance_6m** | **float** | The mean balance in the last six months. | 
**mean_balance_12m** | **float** | The mean balance in the last twelve months. | 
**max_balance_3d** | **float** | The maximum balance in the last three days. | 
**max_balance_1w** | **float** | The maximum balance in the last week. | 
**max_balance_1m** | **float** | The maximum balance in the last month. | 
**max_balance_3m** | **float** | The maximum balance in the last three months. | 
**max_balance_6m** | **float** | The maximum balance in the last six months. | 
**max_balance_12m** | **float** | The maximum balance in the last twelve months. | 
**std_balance_3d** | **float** | The balance standard deviation in the last three days. | 
**std_balance_1w** | **float** | The balance standard deviation in the last week. | 
**std_balance_1m** | **float** | The balance standard deviation in the last month. | 
**std_balance_3m** | **float** | The balance standard deviation in the last three months. | 
**std_balance_6m** | **float** | The balance standard deviation in the last six months. | 
**std_balance_12m** | **float** | The balance standard deviation in the last twelve months. | 
**balance_trend_3d** | **float** | The balance trend of the user in the last three days. | 
**balance_trend_1w** | **float** | The balance trend of the user in the last week. | 
**balance_trend_1m** | **float** | The balance trend of the user in the last month. | 
**balance_trend_3m** | **float** | The balance trend of the user in the last three months. | 
**balance_trend_6m** | **float** | The balance trend of the user in the last six months. | 
**balance_trend_12m** | **float** | The balance trend of the user in the last twelve months. | 
**days_balance_below_0_3d** | **int** | The number of days that the total balance of the account is less than or equal to 0 in the last three days. | 
**days_balance_below_0_1w** | **int** | The number of days that the total balance of the account is less than or equal to 0 in the last week. | 
**days_balance_below_0_1m** | **int** | The number of days that the total balance of the account is less than or equal to 0 in the last month. | 
**days_balance_below_0_3m** | **int** | The number of days that the total balance of the account is less than or equal to 0 in the last three months. | 
**days_balance_below_0_6m** | **int** | The number of days that the total balance of the account is less than or equal to 0 in the last six months. | 
**days_balance_below_0_12m** | **int** | The number of days that the total balance of the account is less than or equal to 0 in the last twelve months. | 
**days_balance_below_mean_3d** | **int** | The number of days that the mean balance of the account is less than or equal to the amount specified in &#x60;mean_daily_balance_3d&#x60;. | 
**days_balance_below_mean_1w** | **int** | The number of days that the mean balance of the account is less than or equal to the amount specified in &#x60;mean_daily_balance_1w&#x60;. | 
**days_balance_below_mean_1m** | **int** | The number of days that the mean balance of the account is less than or equal to the amount specified in &#x60;mean_daily_balance_1m&#x60;. | 
**days_balance_below_mean_3m** | **int** | The number of days that the mean balance of the account is less than or equal to the amount specified in &#x60;mean_daily_balance_3m&#x60;. | 
**days_balance_below_mean_6m** | **int** | The number of days that the mean balance of the account is less than or equal to the amount specified in &#x60;mean_daily_balance_6m&#x60;. | 
**days_balance_below_mean_12m** | **int** | The number of days that the mean balance of the account is less than or equal to the amount specified in &#x60;mean_daily_balance_12m&#x60;. | 
**days_balance_below_x_3d** | **int** | The number of days that the total balance of the account is less than or equal to the amount specified in &#x60;balance_threshold_x&#x60; in the last three days. | 
**days_balance_below_x_1w** | **int** | The number of days that the total balance of the account is less than or equal to the amount specified in &#x60;balance_threshold_x&#x60; in the last week. | 
**days_balance_below_x_1m** | **int** | The number of days that the total balance of the account is less than or equal to the amount specified in &#x60;balance_threshold_x&#x60; in the last month. | 
**days_balance_below_x_3m** | **int** | The number of days that the total balance of the account is less than or equal to the amount specified in &#x60;balance_threshold_x&#x60; in the last three months. | 
**days_balance_below_x_6m** | **int** | The number of days that the total balance of the account is less than or equal to the amount specified in &#x60;balance_threshold_x&#x60; in the last six months. | 
**days_balance_below_x_12m** | **int** | The number of days that the total balance of the account is less than or equal to the amount specified in &#x60;balance_threshold_x&#x60; in the last twelve months. | 
**balance_threshold_x** | **float** | The threshold used to compute &#x60;days_balance_below_x_period&#x60;. Please note, this is value is country specific (both in terms of the amount and the currency). | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

