# Swagger\Client\EmploymentRecordsMexicoApi

All URIs are relative to *https://sandbox.belvo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**destroyEmploymentRecord**](EmploymentRecordsMexicoApi.md#destroyemploymentrecord) | **DELETE** /api/employment-records/{id}/ | Delete an employment record
[**detailEmploymentRecord**](EmploymentRecordsMexicoApi.md#detailemploymentrecord) | **GET** /api/employment-records/{id}/ | Get an employment record&#x27;s details
[**listEmploymentRecords**](EmploymentRecordsMexicoApi.md#listemploymentrecords) | **GET** /api/employment-records/ | List employment records
[**retrieveEmploymentRecordDetails**](EmploymentRecordsMexicoApi.md#retrieveemploymentrecorddetails) | **POST** /api/employment-records/ | Retrieve employment record details

# **destroyEmploymentRecord**
> destroyEmploymentRecord($id)

Delete an employment record

Delete a specific employment record from your Belvo account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\EmploymentRecordsMexicoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The `employment-record.id` that you want to delete.

try {
    $apiInstance->destroyEmploymentRecord($id);
} catch (Exception $e) {
    echo 'Exception when calling EmploymentRecordsMexicoApi->destroyEmploymentRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The &#x60;employment-record.id&#x60; that you want to delete. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **detailEmploymentRecord**
> \Swagger\Client\Model\InlineResponse20015 detailEmploymentRecord($id, $omit, $fields)

Get an employment record's details

Get the details of a specific employment record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\EmploymentRecordsMexicoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The `employment-record.id` you want to get detailed information about.
$omit = "omit_example"; // string | Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.
$fields = "fields_example"; // string | Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.

try {
    $result = $apiInstance->detailEmploymentRecord($id, $omit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmploymentRecordsMexicoApi->detailEmploymentRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The &#x60;employment-record.id&#x60; you want to get detailed information about. |
 **omit** | **string**| Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]
 **fields** | **string**| Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listEmploymentRecords**
> \Swagger\Client\Model\InlineResponse20013 listEmploymentRecords($link, $page_size, $page, $omit, $fields, $id, $id__in, $link__in, $internal_identification, $internal_identification__in, $collected_at, $collected_at__gt, $collected_at__gte, $collected_at__lt, $collected_at__lte, $collected_at__range, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range)

List employment records

## ▶️ Usage  With the List Employment Records method, you can:  1. List employment records related to a specific `link.id` (using the `link` query parameter). 2. Get the details of a specific `employment-record.id` (using the `id` query parameter). 3. **[Not Recommended]** List all employment records related to your Belvo account (without using any query parameters).  ## 📖 Pagination  This method returns a paginated response (default: 100 items per page). You can use the `page_size` query parameter to increase the number of items returned to a maximum of 1000 items. You can use the `page` query parameter to navigate through the results. For more details on how to navigate Belvo's paginated responses, see our <a href=\"https://developers.belvo.com/docs/belvo-pagination-tips\" target=\"_blank\">Pagination Tips</a> article.  ## 🔦 Filtering Responses  Please see the query list below for a list of fields that you can filter your responses by. For more information on how to use filters, see our <a href=\"https://developers.belvo.com/docs/searching-and-filtering\" target=\"_blank\">Filtering responses</a> article.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\EmploymentRecordsMexicoApi(
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
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Return information only for this resource `id`.
$id__in = array("id__in_example"); // string[] | Return information for these resource `id`s.
$link__in = array("link__in_example"); // string[] | Return results only for these `link.id`s.
$internal_identification = "internal_identification_example"; // string | The `internal_identification` you want to filter by.
$internal_identification__in = array("internal_identification__in_example"); // string[] | One or more `internal_identification`s you want to filter by.
$collected_at = "collected_at_example"; // string | Return items that were retrieved from the institution on this date (`YYYY-MM-DD` or full `ISO-8601` timestamp).
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
    $result = $apiInstance->listEmploymentRecords($link, $page_size, $page, $omit, $fields, $id, $id__in, $link__in, $internal_identification, $internal_identification__in, $collected_at, $collected_at__gt, $collected_at__gte, $collected_at__lt, $collected_at__lte, $collected_at__range, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmploymentRecordsMexicoApi->listEmploymentRecords: ', $e->getMessage(), PHP_EOL;
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
 **id** | [**string**](../Model/.md)| Return information only for this resource &#x60;id&#x60;. | [optional]
 **id__in** | [**string[]**](../Model/string.md)| Return information for these resource &#x60;id&#x60;s. | [optional]
 **link__in** | [**string[]**](../Model/string.md)| Return results only for these &#x60;link.id&#x60;s. | [optional]
 **internal_identification** | **string**| The &#x60;internal_identification&#x60; you want to filter by. | [optional]
 **internal_identification__in** | [**string[]**](../Model/string.md)| One or more &#x60;internal_identification&#x60;s you want to filter by. | [optional]
 **collected_at** | **string**| Return items that were retrieved from the institution on this date (&#x60;YYYY-MM-DD&#x60; or full &#x60;ISO-8601&#x60; timestamp). | [optional]
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

[**\Swagger\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveEmploymentRecordDetails**
> \Swagger\Client\Model\InlineResponse20014[] retrieveEmploymentRecordDetails($body, $x_belvo_request_mode, $omit, $fields)

Retrieve employment record details

Retrieve employment record details for an individual.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\EmploymentRecordsMexicoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ApiEmploymentrecordsBody(); // \Swagger\Client\Model\ApiEmploymentrecordsBody | 
$x_belvo_request_mode = "x_belvo_request_mode_example"; // string | Recommended header parameter to make your POST request asynchronous (thus preventing timeouts and improving your data flow).  When you make an asynchronous request, Belvo responds with a `202 - Accepted` payload, including the `request_id`. Once we have retrieved the requested information, you will receive a webhook with the link and request IDs.
$omit = "omit_example"; // string | Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.
$fields = "fields_example"; // string | Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.

try {
    $result = $apiInstance->retrieveEmploymentRecordDetails($body, $x_belvo_request_mode, $omit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmploymentRecordsMexicoApi->retrieveEmploymentRecordDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ApiEmploymentrecordsBody**](../Model/ApiEmploymentrecordsBody.md)|  |
 **x_belvo_request_mode** | **string**| Recommended header parameter to make your POST request asynchronous (thus preventing timeouts and improving your data flow).  When you make an asynchronous request, Belvo responds with a &#x60;202 - Accepted&#x60; payload, including the &#x60;request_id&#x60;. Once we have retrieved the requested information, you will receive a webhook with the link and request IDs. | [optional]
 **omit** | **string**| Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]
 **fields** | **string**| Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20014[]**](../Model/InlineResponse20014.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

