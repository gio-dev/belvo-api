# Swagger\Client\EmploymentsBrazilApi

All URIs are relative to *https://sandbox.belvo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**destroyEmploymentBrazil**](EmploymentsBrazilApi.md#destroyemploymentbrazil) | **DELETE** /api/br/employments/{id}/ | Delete an employment
[**detailEmploymentBrazil**](EmploymentsBrazilApi.md#detailemploymentbrazil) | **GET** /api/br/employments/{id}/ | Get an employment&#x27;s details
[**listEmploymentsBrazil**](EmploymentsBrazilApi.md#listemploymentsbrazil) | **GET** /api/br/employments/ | List employments
[**retrieveEmploymentsBrazil**](EmploymentsBrazilApi.md#retrieveemploymentsbrazil) | **POST** /api/br/employments/ | Retrieve employments for a link

# **destroyEmploymentBrazil**
> destroyEmploymentBrazil($id)

Delete an employment

Delete a specific employment from your Belvo account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\EmploymentsBrazilApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The `employment.id` that you want to delete.

try {
    $apiInstance->destroyEmploymentBrazil($id);
} catch (Exception $e) {
    echo 'Exception when calling EmploymentsBrazilApi->destroyEmploymentBrazil: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The &#x60;employment.id&#x60; that you want to delete. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **detailEmploymentBrazil**
> \Swagger\Client\Model\InlineResponse20017 detailEmploymentBrazil($id, $omit, $fields)

Get an employment's details

Get the details of a specific employment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\EmploymentsBrazilApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The `employment.id` you want to get detailed information about.
$omit = "omit_example"; // string | Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.
$fields = "fields_example"; // string | Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.

try {
    $result = $apiInstance->detailEmploymentBrazil($id, $omit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmploymentsBrazilApi->detailEmploymentBrazil: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The &#x60;employment.id&#x60; you want to get detailed information about. |
 **omit** | **string**| Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]
 **fields** | **string**| Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listEmploymentsBrazil**
> \Swagger\Client\Model\Employments listEmploymentsBrazil($link, $page_size, $page, $id, $id__in, $link__in, $omit, $fields, $start_date, $start_date__gt, $start_date__gte, $start_date__lt, $start_date__lte, $start_date__range, $end_date, $end_date__gt, $end_date__gte, $end_date__lt, $end_date__lte, $end_date__range, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range)

List employments

## ▶️ Usage  With the List Employments method, you can:  1. **[Required]** List employments related to a specific `link.id` (using the `link` query parameter). 2. Get the details of a specific `employment.id` (using the `id` query parameter).  ## 📖 Pagination  This method returns a paginated response (default: 100 items per page). You can use the `page_size` query parameter to increase the number of items returned to a maximum of 1000 items. You can use the `page` query parameter to navigate through the results. For more details on how to navigate Belvo's paginated responses, see our <a href=\"https://developers.belvo.com/docs/belvo-pagination-tips\" target=\"_blank\">Pagination Tips</a> article.  ## 🔦 Filtering Responses  Please see the query list below for a list of fields that you can filter your responses by. For more information on how to use filters, see our <a href=\"https://developers.belvo.com/docs/searching-and-filtering\" target=\"_blank\">Filtering responses</a> article.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\EmploymentsBrazilApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$link = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The `link.id` you want to filter by.
$page_size = 100; // int | Indicates how many results to return per page. By default we return 100 results per page.   ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000).
$page = 56; // int | A page number within the paginated result set.
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Return information only for this resource `id`.
$id__in = array("id__in_example"); // string[] | Return information for these resource `id`s.
$link__in = array("link__in_example"); // string[] | Return results only for these `link.id`s.
$omit = "omit_example"; // string | Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.
$fields = "fields_example"; // string | Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.
$start_date = new \DateTime("2013-10-20"); // \DateTime | Return employments that started on this date, in `YYYY-MM-DD` format.
$start_date__gt = new \DateTime("2013-10-20"); // \DateTime | Return employments that started after this date, in `YYYY-MM-DD` format.
$start_date__gte = new \DateTime("2013-10-20"); // \DateTime | Return employments that started on or after this date, in `YYYY-MM-DD` format.
$start_date__lt = new \DateTime("2013-10-20"); // \DateTime | Return employments that started before this date, in `YYYY-MM-DD` format.
$start_date__lte = new \DateTime("2013-10-20"); // \DateTime | Return employments that started on or before this date, in `YYYY-MM-DD` format.
$start_date__range = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | Return employments that started within these two dates, in `YYYY-MM-DD,YYYY-MM-DD` format.
$end_date = new \DateTime("2013-10-20"); // \DateTime | Return employments that finished on this date, in `YYYY-MM-DD` format.
$end_date__gt = new \DateTime("2013-10-20"); // \DateTime | Return employments that finished after this date, in `YYYY-MM-DD` format.
$end_date__gte = new \DateTime("2013-10-20"); // \DateTime | Return employments that finished on or after this date, in `YYYY-MM-DD` format.
$end_date__lt = new \DateTime("2013-10-20"); // \DateTime | Return employments that finished before this date, in `YYYY-MM-DD` format.
$end_date__lte = new \DateTime("2013-10-20"); // \DateTime | Return employments that finished on or before this date, in `YYYY-MM-DD` format.
$end_date__range = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | Return employments that finished within these two dates, in `YYYY-MM-DD,YYYY-MM-DD` format.
$created_at = new \DateTime("2013-10-20"); // \DateTime | Return items that were last updated in Belvo's database on this date (in `YYYY-MM-DD` format).
$created_at__gt = new \DateTime("2013-10-20"); // \DateTime | Return items that were last updated in Belvo's database after this date (in `YYYY-MM-DD` format).
$created_at__gte = new \DateTime("2013-10-20"); // \DateTime | Return items that were last updated in Belvo's database after or on this date (in `YYYY-MM-DD` format).
$created_at__lt = new \DateTime("2013-10-20"); // \DateTime | Return items that were last updated in Belvo's database before this date (in `YYYY-MM-DD` format).
$created_at__lte = new \DateTime("2013-10-20"); // \DateTime | Return items that were last updated in Belvo's database before or on this date (in `YYYY-MM-DD` format).
$created_at__range = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | Return accounts that were last updated in Belvo's database between two dates (in `YYYY-MM-DD` format).

try {
    $result = $apiInstance->listEmploymentsBrazil($link, $page_size, $page, $id, $id__in, $link__in, $omit, $fields, $start_date, $start_date__gt, $start_date__gte, $start_date__lt, $start_date__lte, $start_date__range, $end_date, $end_date__gt, $end_date__gte, $end_date__lt, $end_date__lte, $end_date__range, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmploymentsBrazilApi->listEmploymentsBrazil: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **link** | [**string**](../Model/.md)| The &#x60;link.id&#x60; you want to filter by. |
 **page_size** | **int**| Indicates how many results to return per page. By default we return 100 results per page.   ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). | [optional] [default to 100]
 **page** | **int**| A page number within the paginated result set. | [optional]
 **id** | [**string**](../Model/.md)| Return information only for this resource &#x60;id&#x60;. | [optional]
 **id__in** | [**string[]**](../Model/string.md)| Return information for these resource &#x60;id&#x60;s. | [optional]
 **link__in** | [**string[]**](../Model/string.md)| Return results only for these &#x60;link.id&#x60;s. | [optional]
 **omit** | **string**| Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]
 **fields** | **string**| Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]
 **start_date** | **\DateTime**| Return employments that started on this date, in &#x60;YYYY-MM-DD&#x60; format. | [optional]
 **start_date__gt** | **\DateTime**| Return employments that started after this date, in &#x60;YYYY-MM-DD&#x60; format. | [optional]
 **start_date__gte** | **\DateTime**| Return employments that started on or after this date, in &#x60;YYYY-MM-DD&#x60; format. | [optional]
 **start_date__lt** | **\DateTime**| Return employments that started before this date, in &#x60;YYYY-MM-DD&#x60; format. | [optional]
 **start_date__lte** | **\DateTime**| Return employments that started on or before this date, in &#x60;YYYY-MM-DD&#x60; format. | [optional]
 **start_date__range** | [**\DateTime[]**](../Model/\DateTime.md)| Return employments that started within these two dates, in &#x60;YYYY-MM-DD,YYYY-MM-DD&#x60; format. | [optional]
 **end_date** | **\DateTime**| Return employments that finished on this date, in &#x60;YYYY-MM-DD&#x60; format. | [optional]
 **end_date__gt** | **\DateTime**| Return employments that finished after this date, in &#x60;YYYY-MM-DD&#x60; format. | [optional]
 **end_date__gte** | **\DateTime**| Return employments that finished on or after this date, in &#x60;YYYY-MM-DD&#x60; format. | [optional]
 **end_date__lt** | **\DateTime**| Return employments that finished before this date, in &#x60;YYYY-MM-DD&#x60; format. | [optional]
 **end_date__lte** | **\DateTime**| Return employments that finished on or before this date, in &#x60;YYYY-MM-DD&#x60; format. | [optional]
 **end_date__range** | [**\DateTime[]**](../Model/\DateTime.md)| Return employments that finished within these two dates, in &#x60;YYYY-MM-DD,YYYY-MM-DD&#x60; format. | [optional]
 **created_at** | **\DateTime**| Return items that were last updated in Belvo&#x27;s database on this date (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **created_at__gt** | **\DateTime**| Return items that were last updated in Belvo&#x27;s database after this date (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **created_at__gte** | **\DateTime**| Return items that were last updated in Belvo&#x27;s database after or on this date (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **created_at__lt** | **\DateTime**| Return items that were last updated in Belvo&#x27;s database before this date (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **created_at__lte** | **\DateTime**| Return items that were last updated in Belvo&#x27;s database before or on this date (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **created_at__range** | [**\DateTime[]**](../Model/\DateTime.md)| Return accounts that were last updated in Belvo&#x27;s database between two dates (in &#x60;YYYY-MM-DD&#x60; format). | [optional]

### Return type

[**\Swagger\Client\Model\Employments**](../Model/Employments.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveEmploymentsBrazil**
> \Swagger\Client\Model\InlineResponse20016[] retrieveEmploymentsBrazil($body, $x_belvo_request_mode, $omit, $fields)

Retrieve employments for a link

Retrieve employments from an existing link.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\EmploymentsBrazilApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\BrEmploymentsBody(); // \Swagger\Client\Model\BrEmploymentsBody | 
$x_belvo_request_mode = "x_belvo_request_mode_example"; // string | Recommended header parameter to make your POST request asynchronous (thus preventing timeouts and improving your data flow).  When you make an asynchronous request, Belvo responds with a `202 - Accepted` payload, including the `request_id`. Once we have retrieved the requested information, you will receive a webhook with the link and request IDs.
$omit = "omit_example"; // string | Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.
$fields = "fields_example"; // string | Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.

try {
    $result = $apiInstance->retrieveEmploymentsBrazil($body, $x_belvo_request_mode, $omit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmploymentsBrazilApi->retrieveEmploymentsBrazil: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BrEmploymentsBody**](../Model/BrEmploymentsBody.md)|  |
 **x_belvo_request_mode** | **string**| Recommended header parameter to make your POST request asynchronous (thus preventing timeouts and improving your data flow).  When you make an asynchronous request, Belvo responds with a &#x60;202 - Accepted&#x60; payload, including the &#x60;request_id&#x60;. Once we have retrieved the requested information, you will receive a webhook with the link and request IDs. | [optional]
 **omit** | **string**| Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]
 **fields** | **string**| Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20016[]**](../Model/InlineResponse20016.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

