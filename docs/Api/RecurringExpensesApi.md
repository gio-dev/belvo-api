# Swagger\Client\RecurringExpensesApi

All URIs are relative to *https://sandbox.belvo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**destroyRecurringExpense**](RecurringExpensesApi.md#destroyrecurringexpense) | **DELETE** /api/recurring-expenses/{id}/ | Delete a recurring expense
[**detailRecurringExpense**](RecurringExpensesApi.md#detailrecurringexpense) | **GET** /api/recurring-expenses/{id}/ | Get a recurring expense&#x27;s details
[**listRecurringExpenses**](RecurringExpensesApi.md#listrecurringexpenses) | **GET** /api/recurring-expenses/ | List recurring expenses
[**patchRecurringExpenses**](RecurringExpensesApi.md#patchrecurringexpenses) | **PATCH** /api/recurring-expenses/ | Complete a recurring expenses request
[**recurringExpensesEYOD**](RecurringExpensesApi.md#recurringexpenseseyod) | **POST** /api/enrich/recurring-expenses/ | Retrieve Recurring Expenses
[**retrieveRecurringExpenses**](RecurringExpensesApi.md#retrieverecurringexpenses) | **POST** /api/recurring-expenses/ | Retrieve recurring expenses for a link

# **destroyRecurringExpense**
> destroyRecurringExpense($id)

Delete a recurring expense

Delete a specific recurring expense from your Belvo account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\RecurringExpensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The `recurring-expenses.id` that you want to delete

try {
    $apiInstance->destroyRecurringExpense($id);
} catch (Exception $e) {
    echo 'Exception when calling RecurringExpensesApi->destroyRecurringExpense: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The &#x60;recurring-expenses.id&#x60; that you want to delete |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **detailRecurringExpense**
> \Swagger\Client\Model\InlineResponse20024[] detailRecurringExpense($id, $omit, $fields)

Get a recurring expense's details

Get the details of a specific recurring expense.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\RecurringExpensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The `recurring-expenses.id` you want to get detailed information about.
$omit = "omit_example"; // string | Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.
$fields = "fields_example"; // string | Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.

try {
    $result = $apiInstance->detailRecurringExpense($id, $omit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringExpensesApi->detailRecurringExpense: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The &#x60;recurring-expenses.id&#x60; you want to get detailed information about. |
 **omit** | **string**| Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]
 **fields** | **string**| Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20024[]**](../Model/InlineResponse20024.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listRecurringExpenses**
> \Swagger\Client\Model\InlineResponse20023 listRecurringExpenses($link, $page_size, $page, $omit, $fields, $link__in, $account, $account__in, $id, $id__in)

List recurring expenses

## ▶️ Usage  With the List Recurring Expenses method, you can:  1. List recurring expenses related to a specific `link.id` (using the `link` query parameter). 2. Get the details of a specific `recurring-expense.id` (using the `id` query parameter). 3. **[Not Recommended]** List all recurring expenses related to your Belvo account (without using any query parameters).  ## 📖 Pagination  This method returns a paginated response (default: 100 items per page). You can use the `page_size` query parameter to increase the number of items returned to a maximum of 1000 items. You can use the `page` query parameter to navigate through the results. For more details on how to navigate Belvo's paginated responses, see our <a href=\"https://developers.belvo.com/docs/belvo-pagination-tips\" target=\"_blank\">Pagination Tips</a> article.  ## 🔦 Filtering Responses  Please see the query list below for a list of fields that you can filter your responses by. For more information on how to use filters, see our <a href=\"https://developers.belvo.com/docs/searching-and-filtering\" target=\"_blank\">Filtering responses</a> article.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\RecurringExpensesApi(
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
$account = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The `account.id` you want to filter by.  ℹ️ We highly recommend adding either the `link.id` or the `account.id` filters in order to improve your performance.
$account__in = array("account__in_example"); // string[] | Return results only for these `account.id`s.
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Return information only for this resource `id`.
$id__in = array("id__in_example"); // string[] | Return information for these resource `id`s.

try {
    $result = $apiInstance->listRecurringExpenses($link, $page_size, $page, $omit, $fields, $link__in, $account, $account__in, $id, $id__in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringExpensesApi->listRecurringExpenses: ', $e->getMessage(), PHP_EOL;
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
 **account** | [**string**](../Model/.md)| The &#x60;account.id&#x60; you want to filter by.  ℹ️ We highly recommend adding either the &#x60;link.id&#x60; or the &#x60;account.id&#x60; filters in order to improve your performance. | [optional]
 **account__in** | [**string[]**](../Model/string.md)| Return results only for these &#x60;account.id&#x60;s. | [optional]
 **id** | [**string**](../Model/.md)| Return information only for this resource &#x60;id&#x60;. | [optional]
 **id__in** | [**string[]**](../Model/string.md)| Return information for these resource &#x60;id&#x60;s. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchRecurringExpenses**
> \Swagger\Client\Model\InlineResponse20024[] patchRecurringExpenses($body, $omit, $fields)

Complete a recurring expenses request

Used to resume an Recurring Expenses retrieve session that was paused because an MFA token was required by the institution.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\RecurringExpensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ApiRecurringexpensesBody1(); // \Swagger\Client\Model\ApiRecurringexpensesBody1 | 
$omit = "omit_example"; // string | Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.
$fields = "fields_example"; // string | Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.

try {
    $result = $apiInstance->patchRecurringExpenses($body, $omit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringExpensesApi->patchRecurringExpenses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ApiRecurringexpensesBody1**](../Model/ApiRecurringexpensesBody1.md)|  |
 **omit** | **string**| Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]
 **fields** | **string**| Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20024[]**](../Model/InlineResponse20024.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recurringExpensesEYOD**
> \Swagger\Client\Model\InlineResponse20033[] recurringExpensesEYOD($body)

Retrieve Recurring Expenses

Send through your raw transaction data and receive identified recurring expenses.   <div style=\"background-color:#f4f6f8; border-left: 6px solid #5bc0de;padding: 12px;margin-left: 25px; border-radius: 4px; margin-right: 25px\">  <strong>Note: </strong> Belvo can process up to 10,000 unique transactions per request.  </div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\RecurringExpensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\EnrichRecurringexpensesBody(); // \Swagger\Client\Model\EnrichRecurringexpensesBody | 

try {
    $result = $apiInstance->recurringExpensesEYOD($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringExpensesApi->recurringExpensesEYOD: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnrichRecurringexpensesBody**](../Model/EnrichRecurringexpensesBody.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse20033[]**](../Model/InlineResponse20033.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveRecurringExpenses**
> \Swagger\Client\Model\InlineResponse20024[] retrieveRecurringExpenses($body, $omit, $fields)

Retrieve recurring expenses for a link

Retrieve recurring expense insights for <b>checking and savings accounts</b> from a specific link. You can receive insights for a period of up to 365 days, depending on the transaction history available for each [bank](https://developers.belvo.com/docs/institution).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\RecurringExpensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ApiRecurringexpensesBody(); // \Swagger\Client\Model\ApiRecurringexpensesBody | 
$omit = "omit_example"; // string | Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.
$fields = "fields_example"; // string | Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.

try {
    $result = $apiInstance->retrieveRecurringExpenses($body, $omit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringExpensesApi->retrieveRecurringExpenses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ApiRecurringexpensesBody**](../Model/ApiRecurringexpensesBody.md)|  |
 **omit** | **string**| Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]
 **fields** | **string**| Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20024[]**](../Model/InlineResponse20024.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

