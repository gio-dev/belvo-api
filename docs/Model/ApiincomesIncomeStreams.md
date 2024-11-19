# ApiincomesIncomeStreams

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Unique ID for the bank account to be verified for income streams. | 
**income_type** | **string** | The type of income used in the calculations.  We return one of the following enum values:    - &#x60;SALARY&#x60;   - &#x60;GOVERNMENT&#x60;   - &#x60;INTEREST&#x60;   - &#x60;RENT&#x60;   - &#x60;RETIREMENT&#x60;   - &#x60;FREELANCE&#x60;   - &#x60;ALTERNATIVE_INCOME&#x60;   - &#x60;TRANSFER&#x60;   - &#x60;DEPOSIT&#x60;   - &#x60;UNKNOWN&#x60; | 
**frequency** | **string** | How often the income is received.  We return one of the following enum values:    - &#x60;MONTHLY&#x60; - For transactions that occur once per month.   - &#x60;FORTNIGHTLY&#x60; - For transactions that occur once every two weeks.   - &#x60;WEEKLY&#x60; - For transactions that occur once per week.   - &#x60;IRREGULAR&#x60; - For transactions that do not occur on a defined frequency pattern.   - &#x60;SINGLE&#x60; - For transactions that occur only once and do not repeat. | 
**monthly_average** | **float** | The average amount of income received from the source over &#x60;periods_with_income&#x60;. | 
**monthly_median** | **float** | The median amount of income received from the source over within a natural month. | [optional] 
**average_income_amount** | **float** | The average income transaction amount from the source. | 
**last_income_amount** | **float** | The amount of the most recent income received from the source. | 
**currency** | **string** | The three-letter currency code of the income. For example:    • 🇧🇷 BRL (Brazilian Real)   • 🇨🇴 COP (Colombian Peso)   • 🇲🇽 MXN (Mexican Peso) | 
**last_income_description** | **string** | The description of the most recent income from the stream. | 
**last_income_date** | [**\DateTime**](\DateTime.md) | The date when the most recent income from the stream was received, in &#x60;YYYY-MM-DD&#x60; format. | 
**stability** | **float** | The stability of the income based on its amount, with a range from 0 to 1, where 1 represents perfect stability.  **Note:** For transactions with &#x60;frequency&#x60;&#x3D;&#x60;SINGLE&#x60;, this value returns &#x60;null&#x60;. | 
**regularity** | **float** | The regularity of the income based in its frequency, with a range from 0 to 1, where 1 represents perfect regularity.  **Note:** For transactions with &#x60;frequency&#x60;&#x3D;&#x60;SINGLE&#x60;, this value returns &#x60;null&#x60;. | 
**trend** | **float** | The income trend during a period of time calculated between last income and first income received, where:   - a negative float means that the income trend is decreasing during the time period.   - a positive float means that the income trend is increasing during the time period.  **Note:** For transactions with &#x60;frequency&#x60;&#x3D;&#x60;SINGLE&#x60;, this value returns &#x60;null&#x60;. | 
**lookback_periods** | **int** | Number of period units (based on *rolling months*) used to generate insights and calculations.  **Note:** A *rolling month* is a period of 30 days. For example, 2023-01-15 to 2023-02-15. | 
**full_periods** | **int** | Number of period units (based on *rolling months*) with data to perform calculations.  **Note:** A *rolling month* is a period of 30 days. For example, 2023-01-15 to 2023-02-15. | 
**periods_with_income** | **int** | Number of period units (based on *rolling months*) with at least one income available.  **Note:** A *rolling month* is a period of 30 days. For example, 2023-01-15 to 2023-02-15. | 
**number_of_incomes** | **int** | Number of income transactions over the &#x60;lookback_periods&#x60;. | 
**confidence** | **string** | Belvo&#x27;s level of confidence for future incomes.  We return one of the following enum values:    - &#x60;HIGH&#x60;   - &#x60;MEDIUM&#x60;   - &#x60;LOW&#x60; | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

