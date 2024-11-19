# InvoiceDetailSat

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The description of the invoice item (an invoice can have one or more items). | 
**product_identification** | **string** | The identification code of the product or the service, as defined by the legal entity in the country. - 🇲🇽 [Mexico](http://200.57.3.89/Pys/catPyS.aspx) | 
**quantity** | **float** | The quantity of this invoice item. | 
**unit_code** | **string** | The unit of measure, as defined by the legal entity in the country.  - 🇲🇽 Mexico [SAT catalog reference](https://developers.belvo.com/docs/sat-catalogs#unit-code) | 
**unit_description** | **string** | The description of the item, as defined by the legal entity in the country. - 🇲🇽 Mexico [SAT catalog reference](https://developers.belvo.com/docs/sat-catalogs#unit-code) | 
**unit_amount** | **float** | The price of one a singular item. | 
**tax_type** | **string** | The item&#x27;s tax type. | [optional] 
**pre_tax_amount** | **float** | The total price for this item before tax is applied (&#x60;quantity&#x60; x &#x60;unit_amount&#x60;). | 
**tax_percentage** | **float** | The tax percentage to apply. | 
**tax_amount** | **float** | The amount of tax for this invoice item (&#x60;pre_tax_amount&#x60; x &#x60;tax_percentage&#x60;). | 
**total_amount** | **float** | The total price for this invoice item (&#x60;pre_tax_amount&#x60; + &#x60;tax_amount&#x60;). | 
**retained_taxes** | [**\Swagger\Client\Model\ApiinvoicesRetainedTaxes[]**](ApiinvoicesRetainedTaxes.md) | The retained tax on the invoice item. | [optional] 
**collected_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp when the data point was collected. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

