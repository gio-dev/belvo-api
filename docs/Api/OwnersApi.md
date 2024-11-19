# Swagger\Client\OwnersApi

All URIs are relative to *https://sandbox.belvo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**destroyOwner**](OwnersApi.md#destroyowner) | **DELETE** /api/owners/{id}/ | Delete an owner
[**detailOwner**](OwnersApi.md#detailowner) | **GET** /api/owners/{id}/ | Get an owner&#x27;s details
[**listOwners**](OwnersApi.md#listowners) | **GET** /api/owners/ | List owners
[**patchOwners**](OwnersApi.md#patchowners) | **PATCH** /api/owners/ | Complete an owners request
[**retrieveOwners**](OwnersApi.md#retrieveowners) | **POST** /api/owners/ | Retrieve owners for a link

# **destroyOwner**
> destroyOwner($id)

Delete an owner

Delete a specific owner from your Belvo account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OwnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The `owner.id` that you want to delete.

try {
    $apiInstance->destroyOwner($id);
} catch (Exception $e) {
    echo 'Exception when calling OwnersApi->destroyOwner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The &#x60;owner.id&#x60; that you want to delete. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **detailOwner**
> \Swagger\Client\Model\InlineResponse20012 detailOwner($id, $omit, $fields)

Get an owner's details

Get the details of a specific owner.  > ℹ️ **Note**: This resource may return deprecated fields. Please check the response documentation for more information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OwnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The `owner.id` you want to get detailed information about.
$omit = "omit_example"; // string | Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.
$fields = "fields_example"; // string | Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.

try {
    $result = $apiInstance->detailOwner($id, $omit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OwnersApi->detailOwner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The &#x60;owner.id&#x60; you want to get detailed information about. |
 **omit** | **string**| Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]
 **fields** | **string**| Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOwners**
> \Swagger\Client\Model\InlineResponse20011 listOwners($link, $page_size, $page, $omit, $fields, $link__in, $id, $id__in, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range, $email, $display_name__icontains)

List owners

## ▶️ Usage  With the List Owners method, you can:  1. List owners related to a specific `link.id` (using the `link` query parameter). 2. Get the details of a specific `owners.id` (using the `id` query parameter). 3. **[Not Recommended]** List all owners related to your Belvo account (without using any query parameters).  ## 📖 Pagination  This method returns a paginated response (default: 100 items per page). You can use the `page_size` query parameter to increase the number of items returned to a maximum of 1000 items. You can use the `page` query parameter to navigate through the results. For more details on how to navigate Belvo's paginated responses, see our <a href=\"https://developers.belvo.com/docs/belvo-pagination-tips\" target=\"_blank\">Pagination Tips</a> article.  ## 🔦 Filtering Responses  Please see the query list below for a list of fields that you can filter your responses by. For more information on how to use filters, see our <a href=\"https://developers.belvo.com/docs/searching-and-filtering\" target=\"_blank\">Filtering responses</a> article.  ## 🚨 Deprecated Fields  This resource may return deprecated fields. In the response documentation you may see that a field has been marked as **deprecated**. This means that this field is no longer maintained by the Belvo team. You may still receive data for this field depending on the institution, however, you should not rely on this field.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OwnersApi(
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
$email = "email_example"; // string | Returns owners whose email address match your query.
$display_name__icontains = "display_name__icontains_example"; // string | Return owners whose full display name partially matches your query. For example, `mar` will return results for Mark, Maria, Neymar, Remarque, and so on.

try {
    $result = $apiInstance->listOwners($link, $page_size, $page, $omit, $fields, $link__in, $id, $id__in, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range, $email, $display_name__icontains);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OwnersApi->listOwners: ', $e->getMessage(), PHP_EOL;
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
 **email** | **string**| Returns owners whose email address match your query. | [optional]
 **display_name__icontains** | **string**| Return owners whose full display name partially matches your query. For example, &#x60;mar&#x60; will return results for Mark, Maria, Neymar, Remarque, and so on. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchOwners**
> null[] patchOwners($body, $omit, $fields)

Complete an owners request

Used to resume an Owner retrieve session that was paused because an MFA token was required by the institution.  > ℹ️ **Note**: This resource may return deprecated fields. Please check the response documentation for more information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OwnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ApiOwnersBody1(); // \Swagger\Client\Model\ApiOwnersBody1 | 
$omit = "omit_example"; // string | Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.
$fields = "fields_example"; // string | Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.

try {
    $result = $apiInstance->patchOwners($body, $omit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OwnersApi->patchOwners: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ApiOwnersBody1**](../Model/ApiOwnersBody1.md)|  |
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

# **retrieveOwners**
> null[] retrieveOwners($body, $omit, $fields)

Retrieve owners for a link

Retrieve owner information from a specific link.  > ℹ️ **Note**: This resource may return deprecated fields. Please check the response documentation for more information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OwnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ApiOwnersBody(); // \Swagger\Client\Model\ApiOwnersBody | 
$omit = "omit_example"; // string | Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.
$fields = "fields_example"; // string | Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.

try {
    $result = $apiInstance->retrieveOwners($body, $omit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OwnersApi->retrieveOwners: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ApiOwnersBody**](../Model/ApiOwnersBody.md)|  |
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

