# Swagger\Client\TaxReturnsApi

All URIs are relative to *https://sandbox.belvo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**destroyTaxReturn**](TaxReturnsApi.md#destroytaxreturn) | **DELETE** /api/tax-returns/{id}/ | Delete a tax return
[**detailTaxReturn**](TaxReturnsApi.md#detailtaxreturn) | **GET** /api/tax-returns/{id}/ | Get a tax return&#x27;s details
[**listTaxReturns**](TaxReturnsApi.md#listtaxreturns) | **GET** /api/tax-returns/ | List tax returns
[**retrieveTaxReturns**](TaxReturnsApi.md#retrievetaxreturns) | **POST** /api/tax-returns/ | Retrieve tax returns for a link

# **destroyTaxReturn**
> destroyTaxReturn($id)

Delete a tax return

Delete a specific tax return from your Belvo account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TaxReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the tax return you want to delete.

try {
    $apiInstance->destroyTaxReturn($id);
} catch (Exception $e) {
    echo 'Exception when calling TaxReturnsApi->destroyTaxReturn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the tax return you want to delete. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **detailTaxReturn**
> \Swagger\Client\Model\InlineResponse20043 detailTaxReturn($id, $omit, $fields)

Get a tax return's details

Get the details of a specific tax return.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TaxReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The `tax-return.id` you want to get detailed information about.
$omit = "omit_example"; // string | Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.
$fields = "fields_example"; // string | Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.

try {
    $result = $apiInstance->detailTaxReturn($id, $omit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxReturnsApi->detailTaxReturn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The &#x60;tax-return.id&#x60; you want to get detailed information about. |
 **omit** | **string**| Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]
 **fields** | **string**| Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20043**](../Model/InlineResponse20043.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTaxReturns**
> \Swagger\Client\Model\InlineResponse20042 listTaxReturns($link, $page_size, $page, $omit, $fields, $link__in, $id, $id__in, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range, $ejercicio, $ejercicio__lt, $ejercicio__lte, $ejercicio__gt, $ejercicio__gte, $ejercicio__range, $tipo_declaracion, $tipo_declaracion__in)

List tax returns

## ▶️ Usage   With the List Tax Returns method, you can:    1. List tax returns related to a specific `link.id` (using the `link` query parameter).   2. Get the details of a specific `tax-return.id` (using the `id` query parameter).   3. **[Not Recommended]** List all tax returns related to your Belvo account (without using any query parameters).    ## 📖 Pagination      This method returns a paginated response (default: 100 items per page). You can use the `page_size` query parameter to increase the number of items returned to a maximum of 1000 items. You can use the `page` query parameter to navigate through the results. For more details on how to navigate Belvo's paginated responses, see our <a href=\"https://developers.belvo.com/docs/belvo-pagination-tips\" target=\"_blank\">Pagination Tips</a> article.      ## 🔦 Filtering Responses      Please see the query list below for a list of fields that you can filter your responses by. For more information on how to use filters, see our <a href=\"https://developers.belvo.com/docs/searching-and-filtering\" target=\"_blank\">Filtering responses</a> article.    ## 🔔 Multiple Schemas    As a link can have both yearly and monthly tax returns, the response will include a mix of these two types of tax returns (and thus difference schemas).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TaxReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$link = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The `link.id` you want to filter by.  ℹ️ We highly recommend adding the `link.id` filter in order to improve your performance.
$page_size = 100; // int | Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000).
$page = 56; // int | A page number within the paginated result set.
$omit = "omit_example"; // string | Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.
$fields = "fields_example"; // string | Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.
$link__in = array("link__in_example"); // string[] | Return results only for these `link.id`s.
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Return information only for this resource `id`.
$id__in = array("id__in_example"); // string[] | Return information for these resource `id`s.
$created_at = new \DateTime("2013-10-20"); // \DateTime | Return items that were last updated in Belvo's database on this date (in `YYYY-MM-DD` format).
$created_at__gt = new \DateTime("2013-10-20"); // \DateTime | Return items that were last updated in Belvo's database after this date (in `YYYY-MM-DD` format).
$created_at__gte = new \DateTime("2013-10-20"); // \DateTime | Return items that were last updated in Belvo's database after or on this date (in `YYYY-MM-DD` format).
$created_at__lt = new \DateTime("2013-10-20"); // \DateTime | Return items that were last updated in Belvo's database before this date (in `YYYY-MM-DD` format).
$created_at__lte = new \DateTime("2013-10-20"); // \DateTime | Return items that were last updated in Belvo's database before or on this date (in `YYYY-MM-DD` format).
$created_at__range = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | Return accounts that were last updated in Belvo's database between two dates (in `YYYY-MM-DD` format).
$ejercicio = "ejercicio_example"; // string | Return tax returns for exactly this year (`YYYY`).
$ejercicio__lt = "ejercicio__lt_example"; // string | Return tax returns for before this year (`YYYY`).
$ejercicio__lte = "ejercicio__lte_example"; // string | Return tax returns for this year and earlier (`YYYY`).
$ejercicio__gt = "ejercicio__gt_example"; // string | Return tax returns for after this year (`YYYY`).
$ejercicio__gte = "ejercicio__gte_example"; // string | Return tax returns for this year or later (`YYYY`).
$ejercicio__range = array("ejercicio__range_example"); // string[] | Return tax returns for this range of years (`YYYY`).
$tipo_declaracion = "tipo_declaracion_example"; // string | Return tax returns with this declaration type.
$tipo_declaracion__in = array("tipo_declaracion__in_example"); // string[] | Return tax returns with these declaration types.

try {
    $result = $apiInstance->listTaxReturns($link, $page_size, $page, $omit, $fields, $link__in, $id, $id__in, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range, $ejercicio, $ejercicio__lt, $ejercicio__lte, $ejercicio__gt, $ejercicio__gte, $ejercicio__range, $tipo_declaracion, $tipo_declaracion__in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxReturnsApi->listTaxReturns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **link** | [**string**](../Model/.md)| The &#x60;link.id&#x60; you want to filter by.  ℹ️ We highly recommend adding the &#x60;link.id&#x60; filter in order to improve your performance. | [optional]
 **page_size** | **int**| Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). | [optional] [default to 100]
 **page** | **int**| A page number within the paginated result set. | [optional]
 **omit** | **string**| Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]
 **fields** | **string**| Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]
 **link__in** | [**string[]**](../Model/string.md)| Return results only for these &#x60;link.id&#x60;s. | [optional]
 **id** | [**string**](../Model/.md)| Return information only for this resource &#x60;id&#x60;. | [optional]
 **id__in** | [**string[]**](../Model/string.md)| Return information for these resource &#x60;id&#x60;s. | [optional]
 **created_at** | **\DateTime**| Return items that were last updated in Belvo&#x27;s database on this date (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **created_at__gt** | **\DateTime**| Return items that were last updated in Belvo&#x27;s database after this date (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **created_at__gte** | **\DateTime**| Return items that were last updated in Belvo&#x27;s database after or on this date (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **created_at__lt** | **\DateTime**| Return items that were last updated in Belvo&#x27;s database before this date (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **created_at__lte** | **\DateTime**| Return items that were last updated in Belvo&#x27;s database before or on this date (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **created_at__range** | [**\DateTime[]**](../Model/\DateTime.md)| Return accounts that were last updated in Belvo&#x27;s database between two dates (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **ejercicio** | **string**| Return tax returns for exactly this year (&#x60;YYYY&#x60;). | [optional]
 **ejercicio__lt** | **string**| Return tax returns for before this year (&#x60;YYYY&#x60;). | [optional]
 **ejercicio__lte** | **string**| Return tax returns for this year and earlier (&#x60;YYYY&#x60;). | [optional]
 **ejercicio__gt** | **string**| Return tax returns for after this year (&#x60;YYYY&#x60;). | [optional]
 **ejercicio__gte** | **string**| Return tax returns for this year or later (&#x60;YYYY&#x60;). | [optional]
 **ejercicio__range** | [**string[]**](../Model/string.md)| Return tax returns for this range of years (&#x60;YYYY&#x60;). | [optional]
 **tipo_declaracion** | **string**| Return tax returns with this declaration type. | [optional]
 **tipo_declaracion__in** | [**string[]**](../Model/string.md)| Return tax returns with these declaration types. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20042**](../Model/InlineResponse20042.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveTaxReturns**
> null[] retrieveTaxReturns($body, $omit, $fields)

Retrieve tax returns for a link

Retrieve tax return information for a specific fiscal link.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TaxReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ApiTaxreturnsBody(); // \Swagger\Client\Model\ApiTaxreturnsBody | 
$omit = "omit_example"; // string | Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.
$fields = "fields_example"; // string | Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.

try {
    $result = $apiInstance->retrieveTaxReturns($body, $omit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxReturnsApi->retrieveTaxReturns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ApiTaxreturnsBody**](../Model/ApiTaxreturnsBody.md)|  |
 **omit** | **string**| Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]
 **fields** | **string**| Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]

### Return type

**null[]**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

