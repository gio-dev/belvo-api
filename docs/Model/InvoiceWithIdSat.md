# InvoiceWithIdSat

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Belvo&#x27;s unique identifier for the current item. | [optional] 
**link** | **string** | The &#x60;link.id&#x60; the data belongs to. | [optional] 
**collected_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp when the data point was collected. | 
**created_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp of when the data point was created in Belvo&#x27;s database. | [optional] 
**invoice_identification** | **string** | The fiscal institution&#x27;s unique ID for the invoice. | 
**invoice_date** | **string** | The date of the invoice, in &#x60;YYYY-MM-DD&#x60; format. | 
**status** | **string** | The status of the invoice. Can be either *Vigente* (valid) or *Cancelado* (cancelled). | 
**invoice_type** | **string** | The fiscal institution&#x27;s classification of the invoice.  For Mexico&#x27;s SAT, we return one of the following values:    - &#x60;Egreso&#x60;   - &#x60;Ingreso&#x60;   - &#x60;Nómina&#x60;   - &#x60;Pago&#x60;   - &#x60;Traslado&#x60; | 
**type** | **string** | The direction of the invoice (from the perspective of the Link owner). - &#x60;OUTFLOW&#x60; indicates a sent invoice. - &#x60;INFLOW&#x60; indicates a received invoice. | 
**sender_id** | **string** | The fiscal ID of the invoice sender | 
**sender_name** | **string** | The name of the invoice sender. | 
**sender_tax_fraud_status** | **string** | Indicates whether or not the sender is on SAT&#x27;s tax fraud list for having submitted incorrect data, having outstanding payments, or having conducted business that is in violation of the fiscal institution&#x27;s regulations.&lt;br&gt;&lt;br&gt;  SAT updates the tax fraud list every three months. &lt;br&gt;&lt;br&gt;  For more information regarding the reason&#x27;s a taxpayer can be put on the tax fraud list, please see [Article 69](http://omawww.sat.gob.mx/cifras_sat/Paginas/datos/vinculo.html?page&#x3D;ListCompleta69.html) and [Article 69-B](http://omawww.sat.gob.mx/cifras_sat/Paginas/datos/vinculo.html?page&#x3D;ListCompleta69B.html) of Mexico&#x27;s Código Fiscal de la Federación. &lt;br&gt;&lt;br&gt;  Possible statuses are:  - &#x60;INVESTIGATING&#x60; &lt;br&gt; The fiscal institution has identified irregularities and open an investigation regarding the taxpayer. &lt;br&gt; - &#x60;DISMISSED&#x60; &lt;br&gt; The fiscal institution has investigated the taxpayer and declared them innocent. &lt;br&gt; - &#x60;CONFIRMED&#x60; &lt;br&gt; The fiscal institution has confirmed that the taxpayer is guilty. &lt;br&gt; - &#x60;OVERTURNED&#x60; &lt;br&gt; The fiscal institution has reassessed a previously confirmed taxpayer and, based on new evidence, has taken the taxpayer off the tax fraud list. &lt;br&gt; - &#x60;NO_TAX_FRAUD_STATUS&#x60; &lt;br&gt; The receiver or sender is not found in the list (in other words, they are complying with the fiscal institution&#x27;s regulations). | [optional] 
**receiver_id** | **string** | The fiscal ID of the invoice receiver. | 
**receiver_name** | **string** | The name of the invoice receiver. | 
**receiver_tax_fraud_status** | **string** | Indicates whether or not the receiver is on SAT&#x27;s tax fraud list for having submitted incorrect data, having outstanding payments, or having conducted business that is in violation of the fiscal institution&#x27;s regulations.&lt;br&gt;&lt;br&gt;  SAT updates the tax fraud list every three months. &lt;br&gt;&lt;br&gt;  For more information regarding the reason&#x27;s a taxpayer can be put on the tax fraud list, please see [Article 69](http://omawww.sat.gob.mx/cifras_sat/Paginas/datos/vinculo.html?page&#x3D;ListCompleta69.html) and [Article 69-B](http://omawww.sat.gob.mx/cifras_sat/Paginas/datos/vinculo.html?page&#x3D;ListCompleta69B.html) of Mexico&#x27;s Código Fiscal de la Federación. &lt;br&gt;&lt;br&gt;  Possible statuses are:  - &#x60;INVESTIGATING&#x60; &lt;br&gt; The fiscal institution has identified irregularities and open an investigation regarding the taxpayer. &lt;br&gt; - &#x60;DISMISSED&#x60; &lt;br&gt; The fiscal institution has investigated the taxpayer and declared them innocent. &lt;br&gt; - &#x60;CONFIRMED&#x60; &lt;br&gt; The fiscal institution has confirmed that the taxpayer is guilty. &lt;br&gt; - &#x60;OVERTURNED&#x60; &lt;br&gt; The fiscal institution has reassessed a previously confirmed taxpayer and, based on new evidence, has taken the taxpayer off the tax fraud list. &lt;br&gt; - &#x60;NO_TAX_FRAUD_STATUS&#x60; &lt;br&gt; The receiver or sender is not found in the list (in other words, they are complying with the fiscal institution&#x27;s regulations). | [optional] 
**cancelation_status** | **string** | If the invoice is cancelled, this field indicates the status of the cancellation. | 
**cancelation_update_date** | [**\DateTime**](\DateTime.md) | The date of the invoice cancelation, in &#x60;YYYY-MM-DD&#x60; format. | 
**certification_date** | [**\DateTime**](\DateTime.md) | The date of the fiscal certification, in &#x60;YYYY-MM-DD&#x60; format. | 
**certification_authority** | **string** | The fiscal ID of the certification provider. | 
**payment_type** | **string** | The payment type code used for this invoice, as defined by the country legal entity.  - 🇲🇽 Mexico [SAT catalog reference article](https://developers.belvo.com/docs/sat-catalogs#payment-type) | 
**payment_type_description** | **string** | *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.* | 
**payment_method** | **string** | The payment method code used for this invoice, as defined by the legal entity of the country.  - 🇲🇽 Mexico [SAT catalog reference article](https://developers.belvo.com/docs/sat-catalogs#payment-method). For Mexico, we return &#x60;PUE&#x60;, &#x60;PPD&#x60;, or &#x60;null&#x60;. | [optional] 
**payment_method_description** | **string** | *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.*  *The description of the payment method used for this invoice.* | [optional] 
**usage** | **string** | The invoice&#x27;s usage code, as defined by the legal entity of the country.   - 🇲🇽 Mexico [SAT catalog reference article](https://developers.belvo.com/docs/sat-catalogs#usage) | [optional] 
**version** | **string** | The CFDI version of the invoice. | [optional] 
**place_of_issue** | **string** | The postcode of where the invoice was issued. | [optional] 
**invoice_details** | [**\Swagger\Client\Model\ApiinvoicesInvoiceDetails[]**](ApiinvoicesInvoiceDetails.md) | A list of descriptions for each item (purchased product or service provided) in the invoice. | 
**currency** | **string** | The currency of the invoice. For example:    - 🇧🇷 BRL (Brazilian Real)  - 🇨🇴 COP (Colombian Peso)  - 🇲🇽 MXN (Mexican Peso)  - 🇺🇸 USD (United States Dollar) | 
**subtotal_amount** | **float** | The pretax amount of this invoice (sum of each item&#x27;s &#x60;pre_tax_amount&#x60;). | 
**exchange_rate** | **float** | The exchange rate used in this invoice for the currency. | 
**tax_amount** | **float** | The amount of tax for this invoice (sum of each item&#x27;s &#x60;tax_amount&#x60;). | 
**discount_amount** | **float** | The total amount discounted in this invoice. | 
**total_amount** | **float** | The total amount of the invoice (&#x60;subtotal_amount&#x60; + &#x60;tax_amount&#x60; - &#x60;discount_amount&#x60;) | 
**payments** | [**\Swagger\Client\Model\ApiinvoicesPayments[]**](ApiinvoicesPayments.md) | A list detailing all the invoice payments. | 
**payroll** | [**\Swagger\Client\Model\ApiinvoicesPayroll**](ApiinvoicesPayroll.md) |  | 
**folio** | **string** | The internal control number that the taxpayer assigns to the invoice. | [optional] 
**xml** | **string** | XML of the invoice document. | [optional] 
**warnings** | [**\Swagger\Client\Model\ApiinvoicesWarnings**](ApiinvoicesWarnings.md) |  | [optional] 
**sender_blacklist_status** | **string** | *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.* Please use &#x60;sender_tax_fraud_status&#x60; instead. | [optional] 
**receiver_blacklist_status** | **string** | *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.* Please use &#x60;receiver_tax_fraud_status&#x60; instead. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

