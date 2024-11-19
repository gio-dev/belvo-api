# InstitutionsPaginatedResponseResults

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the institution as designated by Belvo. | [optional] 
**name** | **string** | The name of the institution, as designated by Belvo.  Please see our [Institutions](https://developers.belvo.com/docs/institution) DevPortal article for a detailed list of institution names. | [optional] 
**type** | **string** | The type of institution. We return one of the following values:    - &#x60;bank&#x60;   - &#x60;fiscal&#x60;   - &#x60;employment&#x60; | [optional] 
**website** | **string** | The URL of the institution&#x27;s website. | [optional] 
**display_name** | **string** | The customer-facing name of the institution. | [optional] 
**country_codes** | **string[]** | The country codes where the institution is available, for example: - 🇧🇷 BR (Brazil) - 🇨🇴 CO (Colombia) - 🇲🇽 MX (Mexico) | [optional] 
**primary_color** | **string** | The primary color on the institution&#x27;s website. | [optional] 
**logo** | **string** | The URL of the institution&#x27;s logo. | [optional] 
**icon_logo** | **string** | The URL of the institution&#x27;s icon logo. | [optional] 
**text_logo** | **string** | The URL of the institution&#x27;s text logo. | [optional] 
**form_fields** | [**\Swagger\Client\Model\InstitutionFormFields[]**](InstitutionFormFields.md) |  | [optional] 
**features** | [**\Swagger\Client\Model\InstitutionFeatures[]**](InstitutionFeatures.md) | The features that the institution supports. If the institution has no special features, then Belvo returns an empty array.  Here is a list of the available features: - &#x60;token_required&#x60; indicates that the institution may require a token during link creation or when making any other requests. | [optional] 
**resources** | **string[]** | A list of Belvo resources that you can use with the institution. This list includes one or more of the following resources:    - &#x60;ACCOUNTS&#x60;   - &#x60;BALANCES&#x60;   - &#x60;EMPLOYMENT_RECORDS&#x60;   - &#x60;INCOMES&#x60;   - &#x60;INVOICES&#x60;   - &#x60;OWNERS&#x60;   - &#x60;RECURRING_EXPENSES&#x60;   - &#x60;RISK_INSIGHTS&#x60;   - &#x60;TRANSACTIONS&#x60;   - &#x60;TAX_COMPLIANCE_STATUS&#x60;   - &#x60;TAX_DECLARATIONS&#x60;   - &#x60;TAX_RETENTIONS&#x60;   - &#x60;TAX_RETURNS&#x60;   - &#x60;TAX_STATUS&#x60; | [optional] 
**integration_type** | **string** | The type of technology used to access the institution. We return one of the following values:  - &#x60;credentials&#x60;: Uses Belvo&#x27;s scraping technology, combined with user credentials, to perform requests. - &#x60;openfinance&#x60;: Uses the bank&#x27;s open finance API to perform requests. | [optional] 
**status** | **string** | Indicates whether Belvo&#x27;s integration with the institution is currently active (&#x60;healthy&#x60;) or undergoing maintenance (&#x60;down&#x60;). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

