# Swagger\Client\InvoicesApi

All URIs are relative to *https://sandbox.belvo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**destroyInvoice**](InvoicesApi.md#destroyinvoice) | **DELETE** /api/invoices/{id}/ | Delete an invoice
[**detailInvoice**](InvoicesApi.md#detailinvoice) | **GET** /api/invoices/{id}/ | Get an invoice&#x27;s details
[**listInvoices**](InvoicesApi.md#listinvoices) | **GET** /api/invoices/ | List invoices
[**patchInvoices**](InvoicesApi.md#patchinvoices) | **PATCH** /api/invoices/ | Complete an invoices request
[**retrieveInvoices**](InvoicesApi.md#retrieveinvoices) | **POST** /api/invoices/ | Retrieve invoices for a link

# **destroyInvoice**
> destroyInvoice($id)

Delete an invoice

Delete a specific invoice from your Belvo account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The `invoice.id` that you want to delete.

try {
    $apiInstance->destroyInvoice($id);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->destroyInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The &#x60;invoice.id&#x60; that you want to delete. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **detailInvoice**
> \Swagger\Client\Model\SATMexico1 detailInvoice($id, $omit, $fields)

Get an invoice's details

Get the details of a specific invoice.  > ℹ️ **Note**: This resource may return deprecated fields. Please check the response documentation for more information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The `invoice.id` you want to get detailed information about.
$omit = "omit_example"; // string | Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.
$fields = "fields_example"; // string | Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.

try {
    $result = $apiInstance->detailInvoice($id, $omit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->detailInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The &#x60;invoice.id&#x60; you want to get detailed information about. |
 **omit** | **string**| Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]
 **fields** | **string**| Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]

### Return type

[**\Swagger\Client\Model\SATMexico1**](../Model/SATMexico1.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listInvoices**
> \Swagger\Client\Model\InlineResponse20037 listInvoices($link, $page, $page_size, $link__in, $omit, $fields, $id, $id__in, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range, $invoice_date, $invoice_date__lt, $invoice_date__lte, $invoice_date__gt, $invoice_date__gte, $invoice_date__range, $invoice_identification, $invoice_identification__in, $status, $status__in, $type, $type__in, $total_amount, $total_amount__lt, $total_amount__lte, $total_amount__gt, $total_amount__gte, $total_amount__range)

List invoices

## ▶️ Usage  With the List Invoices method, you can:  1. List invoices related to a specific `link.id` (using the `link` query parameter). 2. Get the details of a specific `invoice.id` (using the `id` query parameter). 3. **[Not Recommended]** List all invoices related to your Belvo account (without using any query parameters).  ## 📖 Pagination  This method returns a paginated response (default: 100 items per page). You can use the `page_size` query parameter to increase the number of items returned to a maximum of 1000 items. You can use the `page` query parameter to navigate through the results. For more details on how to navigate Belvo's paginated responses, see our <a href=\"https://developers.belvo.com/docs/belvo-pagination-tips\" target=\"_blank\">Pagination Tips</a> article.  ## 🔦 Filtering Responses  Please see the query list below for a list of fields that you can filter your responses by. For more information on how to use filters, see our <a href=\"https://developers.belvo.com/docs/searching-and-filtering\" target=\"_blank\">Filtering responses</a> article.  ## 🚨 Deprecated Fields  This resource may return deprecated fields. In the response documentation you may see that a field has been marked as **deprecated**. This means that this field is no longer maintained by the Belvo team. You may still receive data for this field depending on the institution, however, you should not rely on this field.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$link = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The `link.id` you want to filter by.  ℹ️ We highly recommend adding the `link.id` filter in order to improve your performance.
$page = 56; // int | A page number within the paginated result set.
$page_size = 100; // int | Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000).
$link__in = array("link__in_example"); // string[] | Return results only for these `link.id`s.
$omit = "omit_example"; // string | Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.
$fields = "fields_example"; // string | Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Return information only for this resource `id`.
$id__in = array("id__in_example"); // string[] | Return information for these resource `id`s.
$created_at = new \DateTime("2013-10-20"); // \DateTime | Return items that were last updated in Belvo's database on this date (in `YYYY-MM-DD` format).
$created_at__gt = new \DateTime("2013-10-20"); // \DateTime | Return items that were last updated in Belvo's database after this date (in `YYYY-MM-DD` format).
$created_at__gte = new \DateTime("2013-10-20"); // \DateTime | Return items that were last updated in Belvo's database after or on this date (in `YYYY-MM-DD` format).
$created_at__lt = new \DateTime("2013-10-20"); // \DateTime | Return items that were last updated in Belvo's database before this date (in `YYYY-MM-DD` format).
$created_at__lte = new \DateTime("2013-10-20"); // \DateTime | Return items that were last updated in Belvo's database before or on this date (in `YYYY-MM-DD` format).
$created_at__range = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | Return accounts that were last updated in Belvo's database between two dates (in `YYYY-MM-DD` format).
$invoice_date = new \DateTime("2013-10-20"); // \DateTime | Return invoices issued exactly on this date (`YYYY-MM-DD`).
$invoice_date__lt = new \DateTime("2013-10-20"); // \DateTime | Return balances issued before this date (`YYYY-MM-DD`).
$invoice_date__lte = new \DateTime("2013-10-20"); // \DateTime | Return balances issued on this date or earlier (`YYYY-MM-DD`).
$invoice_date__gt = new \DateTime("2013-10-20"); // \DateTime | Return invoices issued after this date (`YYYY-MM-DD`).
$invoice_date__gte = new \DateTime("2013-10-20"); // \DateTime | Return invoices issued on this date or later (`YYYY-MM-DD`)
$invoice_date__range = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | Return invoices issued within this date range (`YYYY-MM-DD`).
$invoice_identification = "invoice_identification_example"; // string | Return an invoice with this ID (as provided by the insitution).
$invoice_identification__in = array("invoice_identification__in_example"); // string[] | Return invoices with these IDs (as provided by the institution).
$status = "status_example"; // string | Return invoices with this status. Can be either `Vigente` (valid) or `Cancelado` (cancelled).
$status__in = array("status__in_example"); // string[] | Return invoices with these statuses. Can be either `Vigente` (valid) or `Cancelado` (cancelled).
$type = "type_example"; // string | Return invoices of this type. Can be either `OUTFLOW` or `INFLOW`.
$type__in = array("type__in_example"); // string[] | Return invoices of these types. Can be either `OUTFLOW` or `INFLOW`.
$total_amount = 1.2; // float | Return invoices matching exactly this value.
$total_amount__lt = 1.2; // float | Return invoices less than this value.
$total_amount__lte = 1.2; // float | Return invoices less than or equal to this value.
$total_amount__gt = 1.2; // float | Return invoices greater than this value.
$total_amount__gte = 1.2; // float | Return invoices greater than or equal to this value.
$total_amount__range = array(3.4); // float[] | Return invoices between these two values.

try {
    $result = $apiInstance->listInvoices($link, $page, $page_size, $link__in, $omit, $fields, $id, $id__in, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range, $invoice_date, $invoice_date__lt, $invoice_date__lte, $invoice_date__gt, $invoice_date__gte, $invoice_date__range, $invoice_identification, $invoice_identification__in, $status, $status__in, $type, $type__in, $total_amount, $total_amount__lt, $total_amount__lte, $total_amount__gt, $total_amount__gte, $total_amount__range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->listInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **link** | [**string**](../Model/.md)| The &#x60;link.id&#x60; you want to filter by.  ℹ️ We highly recommend adding the &#x60;link.id&#x60; filter in order to improve your performance. | [optional]
 **page** | **int**| A page number within the paginated result set. | [optional]
 **page_size** | **int**| Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). | [optional] [default to 100]
 **link__in** | [**string[]**](../Model/string.md)| Return results only for these &#x60;link.id&#x60;s. | [optional]
 **omit** | **string**| Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]
 **fields** | **string**| Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]
 **id** | [**string**](../Model/.md)| Return information only for this resource &#x60;id&#x60;. | [optional]
 **id__in** | [**string[]**](../Model/string.md)| Return information for these resource &#x60;id&#x60;s. | [optional]
 **created_at** | **\DateTime**| Return items that were last updated in Belvo&#x27;s database on this date (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **created_at__gt** | **\DateTime**| Return items that were last updated in Belvo&#x27;s database after this date (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **created_at__gte** | **\DateTime**| Return items that were last updated in Belvo&#x27;s database after or on this date (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **created_at__lt** | **\DateTime**| Return items that were last updated in Belvo&#x27;s database before this date (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **created_at__lte** | **\DateTime**| Return items that were last updated in Belvo&#x27;s database before or on this date (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **created_at__range** | [**\DateTime[]**](../Model/\DateTime.md)| Return accounts that were last updated in Belvo&#x27;s database between two dates (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **invoice_date** | **\DateTime**| Return invoices issued exactly on this date (&#x60;YYYY-MM-DD&#x60;). | [optional]
 **invoice_date__lt** | **\DateTime**| Return balances issued before this date (&#x60;YYYY-MM-DD&#x60;). | [optional]
 **invoice_date__lte** | **\DateTime**| Return balances issued on this date or earlier (&#x60;YYYY-MM-DD&#x60;). | [optional]
 **invoice_date__gt** | **\DateTime**| Return invoices issued after this date (&#x60;YYYY-MM-DD&#x60;). | [optional]
 **invoice_date__gte** | **\DateTime**| Return invoices issued on this date or later (&#x60;YYYY-MM-DD&#x60;) | [optional]
 **invoice_date__range** | [**\DateTime[]**](../Model/\DateTime.md)| Return invoices issued within this date range (&#x60;YYYY-MM-DD&#x60;). | [optional]
 **invoice_identification** | **string**| Return an invoice with this ID (as provided by the insitution). | [optional]
 **invoice_identification__in** | [**string[]**](../Model/string.md)| Return invoices with these IDs (as provided by the institution). | [optional]
 **status** | **string**| Return invoices with this status. Can be either &#x60;Vigente&#x60; (valid) or &#x60;Cancelado&#x60; (cancelled). | [optional]
 **status__in** | [**string[]**](../Model/string.md)| Return invoices with these statuses. Can be either &#x60;Vigente&#x60; (valid) or &#x60;Cancelado&#x60; (cancelled). | [optional]
 **type** | **string**| Return invoices of this type. Can be either &#x60;OUTFLOW&#x60; or &#x60;INFLOW&#x60;. | [optional]
 **type__in** | [**string[]**](../Model/string.md)| Return invoices of these types. Can be either &#x60;OUTFLOW&#x60; or &#x60;INFLOW&#x60;. | [optional]
 **total_amount** | **float**| Return invoices matching exactly this value. | [optional]
 **total_amount__lt** | **float**| Return invoices less than this value. | [optional]
 **total_amount__lte** | **float**| Return invoices less than or equal to this value. | [optional]
 **total_amount__gt** | **float**| Return invoices greater than this value. | [optional]
 **total_amount__gte** | **float**| Return invoices greater than or equal to this value. | [optional]
 **total_amount__range** | [**float[]**](../Model/float.md)| Return invoices between these two values. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchInvoices**
> \Swagger\Client\Model\SATMexico[] patchInvoices($body, $omit, $fields)

Complete an invoices request

Used to resume an Invoice retrieve session that was paused because an MFA token was required by the institution.  > ℹ️ **Note**: This resource may return deprecated fields. Please check the response documentation for more information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ApiInvoicesBody1(); // \Swagger\Client\Model\ApiInvoicesBody1 | 
$omit = "omit_example"; // string | Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.
$fields = "fields_example"; // string | Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.

try {
    $result = $apiInstance->patchInvoices($body, $omit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->patchInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ApiInvoicesBody1**](../Model/ApiInvoicesBody1.md)|  |
 **omit** | **string**| Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]
 **fields** | **string**| Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]

### Return type

[**\Swagger\Client\Model\SATMexico[]**](../Model/SATMexico.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveInvoices**
> \Swagger\Client\Model\SATMexico[] retrieveInvoices($body, $x_belvo_request_mode, $omit, $fields)

Retrieve invoices for a link

Retrieve invoice information from a specific fiscal link. <div style=\"background-color:#f4f6f8; border-left: 6px solid #0663F9;padding: 12px;margin-left: 25px; border-radius: 4px; margin-right: 25px\"> <strong>Info: </strong> You can ask for up to <b>one</b> year (365 days) of invoices per request. If you need invoices for more than one year, just make another request. </div> ℹ️ **Note**: This resource may return deprecated fields. Please check the response documentation for more information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ApiInvoicesBody(); // \Swagger\Client\Model\ApiInvoicesBody | 
$x_belvo_request_mode = "x_belvo_request_mode_example"; // string | Recommended header parameter to make your POST request asynchronous (thus preventing timeouts and improving your data flow).  When you make an asynchronous request, Belvo responds with a `202 - Accepted` payload, including the `request_id`. Once we have retrieved the requested information, you will receive a webhook with the link and request IDs.
$omit = "omit_example"; // string | Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.
$fields = "fields_example"; // string | Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.

try {
    $result = $apiInstance->retrieveInvoices($body, $x_belvo_request_mode, $omit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->retrieveInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ApiInvoicesBody**](../Model/ApiInvoicesBody.md)|  |
 **x_belvo_request_mode** | **string**| Recommended header parameter to make your POST request asynchronous (thus preventing timeouts and improving your data flow).  When you make an asynchronous request, Belvo responds with a &#x60;202 - Accepted&#x60; payload, including the &#x60;request_id&#x60;. Once we have retrieved the requested information, you will receive a webhook with the link and request IDs. | [optional]
 **omit** | **string**| Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]
 **fields** | **string**| Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]

### Return type

[**\Swagger\Client\Model\SATMexico[]**](../Model/SATMexico.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

