# Swagger\Client\LinksApi

All URIs are relative to *https://sandbox.belvo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**destroyLink**](LinksApi.md#destroylink) | **DELETE** /api/links/{id}/ | Delete a link
[**detailLink**](LinksApi.md#detaillink) | **GET** /api/links/{id}/ | Get a link&#x27;s details
[**listLinks**](LinksApi.md#listlinks) | **GET** /api/links/ | List links
[**modifyLinkDataRetrieval**](LinksApi.md#modifylinkdataretrieval) | **PATCH** /api/links/{id}/ | Modify a link&#x27;s data retrieval
[**patchLinks**](LinksApi.md#patchlinks) | **PATCH** /api/links/ | Complete a links request
[**registerLink**](LinksApi.md#registerlink) | **POST** /api/links/ | Register a new link
[**updateLink**](LinksApi.md#updatelink) | **PUT** /api/links/{id}/ | Update a link&#x27;s credentials

# **destroyLink**
> destroyLink($id)

Delete a link

Delete a specific link and all associated accounts, transactions, and owners from your Belvo account.  # Deleting links in batches  To delete links in bulk, we recommend looping through the list of links you want to delete and making the delete request.    > 🚧 **Rate limiting and IP blocking**   >    > An important technical note for performing operations in batches is to take into consideration our rate-limiting: up to 80 requests every 30 seconds. If you exceed this limit, you run the risk of Belvo blocking your IP from making further requests.   >    > For more information, or if your IP address has been blocked, please contact our [support team](https://support.belvo.com/hc/en-us/requests/new).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The `link.id` that you want to delete.

try {
    $apiInstance->destroyLink($id);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->destroyLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The &#x60;link.id&#x60; that you want to delete. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **detailLink**
> \Swagger\Client\Model\InlineResponse201 detailLink($id)

Get a link's details

Get the details of a specific link.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The `link.id` you want to get detailed information about.

try {
    $result = $apiInstance->detailLink($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->detailLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The &#x60;link.id&#x60; you want to get detailed information about. |

### Return type

[**\Swagger\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listLinks**
> \Swagger\Client\Model\InlineResponse2002 listLinks($page_size, $page, $omit, $fields, $id, $id__in, $institution, $institution__in, $access_mode, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range, $created_by__not_in, $external_id, $external_id__in, $institution_user_id, $institution_user_id__in, $refresh_rate, $status, $status__in)

List links

## ▶️ Usage  With the List Links method, you can:  1. List all links elated to your Belvo account (without using any query parameters). 2. Get the details of a specific `link.id` (using the `id` query parameter).  ## 📖 Pagination  This method returns a paginated response (default: 100 items per page). You can use the `page_size` query parameter to increase the number of items returned to a maximum of 1000 items. You can use the `page` query parameter to navigate through the results. For more details on how to navigate Belvo's paginated responses, see our <a href=\"https://developers.belvo.com/docs/belvo-pagination-tips\" target=\"_blank\">Pagination Tips</a> article.  ## 🔦 Filtering Responses  Please see the query list below for a list of fields that you can filter your responses by. For more information on how to use filters, see our <a href=\"https://developers.belvo.com/docs/searching-and-filtering\" target=\"_blank\">Filtering responses</a> article.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 100; // int | Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000).
$page = 56; // int | A page number within the paginated result set.
$omit = "omit_example"; // string | Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.
$fields = "fields_example"; // string | Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Return information only for this resource `id`.
$id__in = array("id__in_example"); // string[] | Return information for these resource `id`s.
$institution = "institution_example"; // string | Return results only for this institution (use the Belvo-designated name, such as `erebor_mx_retail`).
$institution__in = array("institution__in_example"); // string[] | Return results only for these institutions (use the Belvo-designated names, such as `erebor_mx_retail` and `gringotts_mx_retail`).
$access_mode = "access_mode_example"; // string | Return links only with this access mode. Can be either `single` or `recurrent`.
$created_at = new \DateTime("2013-10-20"); // \DateTime | Return items that were last updated in Belvo's database on this date (in `YYYY-MM-DD` format).
$created_at__gt = new \DateTime("2013-10-20"); // \DateTime | Return items that were last updated in Belvo's database after this date (in `YYYY-MM-DD` format).
$created_at__gte = new \DateTime("2013-10-20"); // \DateTime | Return items that were last updated in Belvo's database after or on this date (in `YYYY-MM-DD` format).
$created_at__lt = new \DateTime("2013-10-20"); // \DateTime | Return items that were last updated in Belvo's database before this date (in `YYYY-MM-DD` format).
$created_at__lte = new \DateTime("2013-10-20"); // \DateTime | Return items that were last updated in Belvo's database before or on this date (in `YYYY-MM-DD` format).
$created_at__range = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | Return accounts that were last updated in Belvo's database between two dates (in `YYYY-MM-DD` format).
$created_by__not_in = array("created_by__not_in_example"); // string[] | Return links that were not created by these Belvo users.
$external_id = "external_id_example"; // string | Return links with this external ID.
$external_id__in = array("external_id__in_example"); // string[] | Return links with these external IDs.
$institution_user_id = "institution_user_id_example"; // string | Return links with this specific institution user ID.
$institution_user_id__in = array("institution_user_id__in_example"); // string[] | Return links with these institution user IDs.
$refresh_rate = "refresh_rate_example"; // string | Return links with this refresh rate. Choose between `6h`, `12h`, `24h`, `7d`, or `30d`.
$status = "status_example"; // string | Return links with this status. Choose between `valid`, `invalid`, `unconfirmed`, or `token_required`.
$status__in = array("status__in_example"); // string[] | Return links with these statuses. Choose between `valid`, `invalid`, `unconfirmed`, or `token_required`.

try {
    $result = $apiInstance->listLinks($page_size, $page, $omit, $fields, $id, $id__in, $institution, $institution__in, $access_mode, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range, $created_by__not_in, $external_id, $external_id__in, $institution_user_id, $institution_user_id__in, $refresh_rate, $status, $status__in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->listLinks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **int**| Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). | [optional] [default to 100]
 **page** | **int**| A page number within the paginated result set. | [optional]
 **omit** | **string**| Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]
 **fields** | **string**| Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]
 **id** | [**string**](../Model/.md)| Return information only for this resource &#x60;id&#x60;. | [optional]
 **id__in** | [**string[]**](../Model/string.md)| Return information for these resource &#x60;id&#x60;s. | [optional]
 **institution** | **string**| Return results only for this institution (use the Belvo-designated name, such as &#x60;erebor_mx_retail&#x60;). | [optional]
 **institution__in** | [**string[]**](../Model/string.md)| Return results only for these institutions (use the Belvo-designated names, such as &#x60;erebor_mx_retail&#x60; and &#x60;gringotts_mx_retail&#x60;). | [optional]
 **access_mode** | **string**| Return links only with this access mode. Can be either &#x60;single&#x60; or &#x60;recurrent&#x60;. | [optional]
 **created_at** | **\DateTime**| Return items that were last updated in Belvo&#x27;s database on this date (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **created_at__gt** | **\DateTime**| Return items that were last updated in Belvo&#x27;s database after this date (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **created_at__gte** | **\DateTime**| Return items that were last updated in Belvo&#x27;s database after or on this date (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **created_at__lt** | **\DateTime**| Return items that were last updated in Belvo&#x27;s database before this date (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **created_at__lte** | **\DateTime**| Return items that were last updated in Belvo&#x27;s database before or on this date (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **created_at__range** | [**\DateTime[]**](../Model/\DateTime.md)| Return accounts that were last updated in Belvo&#x27;s database between two dates (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **created_by__not_in** | [**string[]**](../Model/string.md)| Return links that were not created by these Belvo users. | [optional]
 **external_id** | **string**| Return links with this external ID. | [optional]
 **external_id__in** | [**string[]**](../Model/string.md)| Return links with these external IDs. | [optional]
 **institution_user_id** | **string**| Return links with this specific institution user ID. | [optional]
 **institution_user_id__in** | [**string[]**](../Model/string.md)| Return links with these institution user IDs. | [optional]
 **refresh_rate** | **string**| Return links with this refresh rate. Choose between &#x60;6h&#x60;, &#x60;12h&#x60;, &#x60;24h&#x60;, &#x60;7d&#x60;, or &#x60;30d&#x60;. | [optional]
 **status** | **string**| Return links with this status. Choose between &#x60;valid&#x60;, &#x60;invalid&#x60;, &#x60;unconfirmed&#x60;, or &#x60;token_required&#x60;. | [optional]
 **status__in** | [**string[]**](../Model/string.md)| Return links with these statuses. Choose between &#x60;valid&#x60;, &#x60;invalid&#x60;, &#x60;unconfirmed&#x60;, or &#x60;token_required&#x60;. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifyLinkDataRetrieval**
> \Swagger\Client\Model\InlineResponse201 modifyLinkDataRetrieval($body, $id)

Modify a link's data retrieval

Modify the data retrieval settings for a specific link. At present you can:    - Change a link's access mode from `single` to `recurrent` or from `recurrent` to `single`.   - Modify the historical resources you want to retrieve for the link (`fetch_resources`).  **Changing a link's `access_mode`**    When you change a link from `single` to `recurrent`, the next day a historical update of the core resources for the link is triggered (resulting in you receiving `historical_update` webhooks for the link). You are billed for these historical updates.  **Modifying `fetch_resources`**    If you only modify the `fetch_resources` for a link, this will not trigger a historical update. In order to trigger a historical update for the link, you must change the `access_mode` to `recurrent`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\LinksIdBody1(); // \Swagger\Client\Model\LinksIdBody1 | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The `link.id` you want to change the `access_mode` for.

try {
    $result = $apiInstance->modifyLinkDataRetrieval($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->modifyLinkDataRetrieval: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LinksIdBody1**](../Model/LinksIdBody1.md)|  |
 **id** | [**string**](../Model/.md)| The &#x60;link.id&#x60; you want to change the &#x60;access_mode&#x60; for. |

### Return type

[**\Swagger\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchLinks**
> \Swagger\Client\Model\InlineResponse201 patchLinks($body)

Complete a links request

Used to resume a Link register session that was paused because an MFA token was required by the institution.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ApiLinksBody1(); // \Swagger\Client\Model\ApiLinksBody1 | 

try {
    $result = $apiInstance->patchLinks($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->patchLinks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ApiLinksBody1**](../Model/ApiLinksBody1.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registerLink**
> \Swagger\Client\Model\InlineResponse201 registerLink($body)

Register a new link

## ▶️ Usage  Register a new link (a connection between your user and their institution) using the Belvo API.  > 👍 We really recommend using our <a href=\"https://developers.belvo.com/docs/connect-widget\" target=\"_blank\">Connect Widget</a> to handle link creation and link status updates.  To make things easier, we've included custom examples for the links you can create for each of our products. Just click on the type of link you want to create in the **Body Params** section below.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ApiLinksBody(); // \Swagger\Client\Model\ApiLinksBody | 

try {
    $result = $apiInstance->registerLink($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->registerLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ApiLinksBody**](../Model/ApiLinksBody.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLink**
> \Swagger\Client\Model\InlineResponse201 updateLink($body, $id)

Update a link's credentials

Update the credentials of a specific link. If the successfully updated link is a recurrent one, we automatically trigger an update of the link. If we find fresh data, you'll [receive historical update](https://developers.belvo.com/docs/webhooks) webhooks. <div style=\"background-color:#f4f6f8; border-left: 6px solid #4CAF50;padding: 12px;margin-left: 25px; border-radius: 4px; margin-right: 25px\"> <strong>Note: </strong> We recommend using our <a href=\"https://developers.belvo.com/docs/connect-widget\" target=\"_blank\">Connect Widget</a> to handle updating <code>invalid</code> or <code>token_required</code> links. </div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\LinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\LinksIdBody(); // \Swagger\Client\Model\LinksIdBody | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The `link.id` you want to update.

try {
    $result = $apiInstance->updateLink($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->updateLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LinksIdBody**](../Model/LinksIdBody.md)|  |
 **id** | [**string**](../Model/.md)| The &#x60;link.id&#x60; you want to update. |

### Return type

[**\Swagger\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

