# Swagger\Client\BillsApi

All URIs are relative to *https://sandbox.belvo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**destroyBills**](BillsApi.md#destroybills) | **DELETE** /api/bills/{id}/ | Delete a bill
[**detailBills**](BillsApi.md#detailbills) | **GET** /api/bills/{id}/ | Get a bill&#x27;s details
[**listBills**](BillsApi.md#listbills) | **GET** /api/bills/ | List bills
[**retrieveBills**](BillsApi.md#retrievebills) | **POST** /api/bills/ | Retrieve bills for a link

# **destroyBills**
> destroyBills($id)

Delete a bill

Delete a specific bill from your Belvo account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The `bill.id` that you want to delete.

try {
    $apiInstance->destroyBills($id);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->destroyBills: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The &#x60;bill.id&#x60; that you want to delete. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **detailBills**
> \Swagger\Client\Model\InlineResponse20010 detailBills($id, $omit, $fields)

Get a bill's details

Get the details of a specific bill.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The `bill.id` you want to get detailed information about.
$omit = "omit_example"; // string | Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.
$fields = "fields_example"; // string | Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.

try {
    $result = $apiInstance->detailBills($id, $omit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->detailBills: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The &#x60;bill.id&#x60; you want to get detailed information about. |
 **omit** | **string**| Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]
 **fields** | **string**| Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listBills**
> \Swagger\Client\Model\Bills listBills($link, $page_size, $page, $omit, $fields, $id, $id__in, $account, $account__in, $due_date, $due_date__gt, $due_date__gte, $due_date__lt, $due_date__lte, $due_date__range, $collected_at__gt, $collected_at__gte, $collected_at__lt, $collected_at__lte, $collected_at__range, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range)

List bills

## ▶️ Usage  With the List Bills method, you can:  1. **[Required]** List bills related to a specific link.id (using the `link` query parameter). 2. Filter the returned bills using query parameters (see the Filtering responses section below). 3. Get the details of a specific bill.id (using the `id` query parameter).  ## 📖 Pagination  This method returns a paginated response (default: 100 items per page). You can use the `page_size` query parameter to increase the number of items returned to a maximum of 1000 items. You can use the `page` query parameter to navigate through the results. For more details on how to navigate Belvo's paginated responses, see our <a href=\"https://developers.belvo.com/docs/belvo-pagination-tips\" target=\"_blank\">Pagination Tips</a> article.  ## 🔦 Filtering Responses  Please see the query list below for a list of fields that you can filter your responses by. For more information on how to use filters, see our <a href=\"https://developers.belvo.com/docs/searching-and-filtering\" target=\"_blank\">Filtering responses</a> article.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$link = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The `link.id` you want to filter by.
$page_size = 100; // int | Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000).
$page = 56; // int | A page number within the paginated result set.
$omit = "omit_example"; // string | Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.
$fields = "fields_example"; // string | Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Return information only for this resource `id`.
$id__in = array("id__in_example"); // string[] | Return information for these resource `id`s.
$account = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The `account.id` you want to filter by.  ℹ️ We highly recommend adding either the `link.id` or the `account.id` filters in order to improve your performance.
$account__in = array("account__in_example"); // string[] | Return results only for these `account.id`s.
$due_date = new \DateTime("2013-10-20"); // \DateTime | Return items thathave a `due_date` on this date (`YYYY-MM-DD`).
$due_date__gt = new \DateTime("2013-10-20"); // \DateTime | Return items that have a `due_date` after this date (`YYYY-MM-DD`).
$due_date__gte = new \DateTime("2013-10-20"); // \DateTime | Return items that have a `due_date` on or after this date (`YYYY-MM-DD`).
$due_date__lt = new \DateTime("2013-10-20"); // \DateTime | Return items that have a `due_date` before this date (`YYYY-MM-DD`).
$due_date__lte = new \DateTime("2013-10-20"); // \DateTime | Return items that have a `due_date` before or on this date (`YYYY-MM-DD`).
$due_date__range = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | Return items that have a `due_date` between two dates (`YYYY-MM-DD`).
$collected_at__gt = "collected_at__gt_example"; // string | Return items that were retrieved from the institution after this date (`YYYY-MM-DD` or full `ISO-8601` timestamp).
$collected_at__gte = "collected_at__gte_example"; // string | Return items that were retrieved from the institution after or on this date (`YYYY-MM-DD` or full `ISO-8601` timestamp).
$collected_at__lt = "collected_at__lt_example"; // string | Return items that were retrieved from the institution before this date (`YYYY-MM-DD` or full `ISO-8601` timestamp).
$collected_at__lte = "collected_at__lte_example"; // string | Return items that were retrieved from the institution before or on this date (`YYYY-MM-DD` or full `ISO-8601` timestamp).
$collected_at__range = array("collected_at__range_example"); // string[] | Return items that were retrieved from the institution between two dates (`YYYY-MM-DD` or full `ISO-8601` timestamp).
$created_at = new \DateTime("2013-10-20"); // \DateTime | Return items that were last updated in Belvo's database on this date (in `YYYY-MM-DD` format).
$created_at__gt = new \DateTime("2013-10-20"); // \DateTime | Return items that were last updated in Belvo's database after this date (in `YYYY-MM-DD` format).
$created_at__gte = new \DateTime("2013-10-20"); // \DateTime | Return items that were last updated in Belvo's database after or on this date (in `YYYY-MM-DD` format).
$created_at__lt = new \DateTime("2013-10-20"); // \DateTime | Return items that were last updated in Belvo's database before this date (in `YYYY-MM-DD` format).
$created_at__lte = new \DateTime("2013-10-20"); // \DateTime | Return items that were last updated in Belvo's database before or on this date (in `YYYY-MM-DD` format).
$created_at__range = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | Return accounts that were last updated in Belvo's database between two dates (in `YYYY-MM-DD` format).

try {
    $result = $apiInstance->listBills($link, $page_size, $page, $omit, $fields, $id, $id__in, $account, $account__in, $due_date, $due_date__gt, $due_date__gte, $due_date__lt, $due_date__lte, $due_date__range, $collected_at__gt, $collected_at__gte, $collected_at__lt, $collected_at__lte, $collected_at__range, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->listBills: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **link** | [**string**](../Model/.md)| The &#x60;link.id&#x60; you want to filter by. |
 **page_size** | **int**| Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). | [optional] [default to 100]
 **page** | **int**| A page number within the paginated result set. | [optional]
 **omit** | **string**| Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]
 **fields** | **string**| Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]
 **id** | [**string**](../Model/.md)| Return information only for this resource &#x60;id&#x60;. | [optional]
 **id__in** | [**string[]**](../Model/string.md)| Return information for these resource &#x60;id&#x60;s. | [optional]
 **account** | [**string**](../Model/.md)| The &#x60;account.id&#x60; you want to filter by.  ℹ️ We highly recommend adding either the &#x60;link.id&#x60; or the &#x60;account.id&#x60; filters in order to improve your performance. | [optional]
 **account__in** | [**string[]**](../Model/string.md)| Return results only for these &#x60;account.id&#x60;s. | [optional]
 **due_date** | **\DateTime**| Return items thathave a &#x60;due_date&#x60; on this date (&#x60;YYYY-MM-DD&#x60;). | [optional]
 **due_date__gt** | **\DateTime**| Return items that have a &#x60;due_date&#x60; after this date (&#x60;YYYY-MM-DD&#x60;). | [optional]
 **due_date__gte** | **\DateTime**| Return items that have a &#x60;due_date&#x60; on or after this date (&#x60;YYYY-MM-DD&#x60;). | [optional]
 **due_date__lt** | **\DateTime**| Return items that have a &#x60;due_date&#x60; before this date (&#x60;YYYY-MM-DD&#x60;). | [optional]
 **due_date__lte** | **\DateTime**| Return items that have a &#x60;due_date&#x60; before or on this date (&#x60;YYYY-MM-DD&#x60;). | [optional]
 **due_date__range** | [**\DateTime[]**](../Model/\DateTime.md)| Return items that have a &#x60;due_date&#x60; between two dates (&#x60;YYYY-MM-DD&#x60;). | [optional]
 **collected_at__gt** | **string**| Return items that were retrieved from the institution after this date (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). | [optional]
 **collected_at__gte** | **string**| Return items that were retrieved from the institution after or on this date (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). | [optional]
 **collected_at__lt** | **string**| Return items that were retrieved from the institution before this date (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). | [optional]
 **collected_at__lte** | **string**| Return items that were retrieved from the institution before or on this date (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). | [optional]
 **collected_at__range** | [**string[]**](../Model/string.md)| Return items that were retrieved from the institution between two dates (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). | [optional]
 **created_at** | **\DateTime**| Return items that were last updated in Belvo&#x27;s database on this date (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **created_at__gt** | **\DateTime**| Return items that were last updated in Belvo&#x27;s database after this date (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **created_at__gte** | **\DateTime**| Return items that were last updated in Belvo&#x27;s database after or on this date (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **created_at__lt** | **\DateTime**| Return items that were last updated in Belvo&#x27;s database before this date (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **created_at__lte** | **\DateTime**| Return items that were last updated in Belvo&#x27;s database before or on this date (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **created_at__range** | [**\DateTime[]**](../Model/\DateTime.md)| Return accounts that were last updated in Belvo&#x27;s database between two dates (in &#x60;YYYY-MM-DD&#x60; format). | [optional]

### Return type

[**\Swagger\Client\Model\Bills**](../Model/Bills.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveBills**
> \Swagger\Client\Model\InlineResponse2009[] retrieveBills($body, $omit, $fields)

Retrieve bills for a link

Retrieve bills from one or more accounts for a specific link within a specified date range.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ApiBillsBody(); // \Swagger\Client\Model\ApiBillsBody | 
$omit = "omit_example"; // string | Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.
$fields = "fields_example"; // string | Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.

try {
    $result = $apiInstance->retrieveBills($body, $omit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->retrieveBills: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ApiBillsBody**](../Model/ApiBillsBody.md)|  |
 **omit** | **string**| Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]
 **fields** | **string**| Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2009[]**](../Model/InlineResponse2009.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

