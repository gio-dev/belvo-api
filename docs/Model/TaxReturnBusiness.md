# TaxReturnBusiness

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Belvo&#x27;s unique identifier for the current item. | 
**collected_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp when the data point was collected. | 
**created_at** | [**\DateTime**](\DateTime.md) | The ISO-8601 timestamp of when the data point was created in Belvo&#x27;s database. | 
**informacion_general** | **object** | General information regarding the tax return (year, RFC, return type, person/company name, and so on). | 
**datos_adicionales** | **object** | Additional data regarding the tax return. | 
**estado_resultados** | **object** | Detailed information about the legal entity&#x27;s yearly profit and loss.  &gt; **Note**: For tax returns submitted for the 2022 tax year and later, this field will return null as it is no longer a required field when submitting your tax return. | 
**estado_posicion_financiera_balance** | **object** | Details regarding balance sheet of the legal entity.  &gt; **Note**: For tax returns submitted for the 2022 tax year and later, this field will return null as it is no longer a required field when submitting your tax return. | 
**conciliacion_entre_resultado_contable_fiscal** | **object** | Details regarding the accounting reconciliation.  &gt; **Note**: For tax returns submitted for the 2022 tax year and later, this field will return null as it is no longer a required field when submitting your tax return. | 
**deducciones_autorizadas** | **object** | Details regarding the legal entity&#x27;s deductions. | 
**cifras_cierre_ejercicio** | **object** | Details regarding key numbers at the end of the fiscal exercise. | 
**determinacion_del_impuesto_sobre_la_renta** | **object** | Details regarding the final tax return. | 
**dividendos_o_utilidades_distribuidos** | **object** | Details regarding distributed dividends. | 
**detalle_pago_r1_isr_personas_morales** | **object** | Details of the tax payment. | 
**ingressos** | **object** | &gt; **Note**: Only applicable for tax return filed on or after 2022. For tax returns filed before 2022, this field will return &#x60;null&#x60;.  Details regarding the total amounts earned in the fiscal year. | [optional] 
**determinacion** | **object** | &gt; **Note**: Only applicable for tax return filed on or after 2022. For tax returns filed before 2022, this field will return &#x60;null&#x60;.  Details regarding the tax due or tax credit. | [optional] 
**pdf** | **string** | Tax return PDF as a binary. | 
**receipt_pdf** | **string** | The acknowledgement receipt from the fiscal institution confirming that they received the tax return. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

