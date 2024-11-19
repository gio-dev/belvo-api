# Swagger\Client\AccountsApi

All URIs are relative to *https://sandbox.belvo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**destroyAccount**](AccountsApi.md#destroyaccount) | **DELETE** /api/accounts/{id}/ | Delete an account
[**detailAccount**](AccountsApi.md#detailaccount) | **GET** /api/accounts/{id}/ | Get an account&#x27;s details
[**listAccounts**](AccountsApi.md#listaccounts) | **GET** /api/accounts/ | List accounts
[**patchAccounts**](AccountsApi.md#patchaccounts) | **PATCH** /api/accounts/ | Complete an accounts request
[**retrieveAccounts**](AccountsApi.md#retrieveaccounts) | **POST** /api/accounts/ | Retrieve accounts for a link

# **destroyAccount**
> destroyAccount($id)

Delete an account

Delete a specific account from your Belvo account.  > ℹ️ **Note**: When you delete an account, all the associated transactions and owner information for that account are also removed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The `account.id` you want to delete.

try {
    $apiInstance->destroyAccount($id);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->destroyAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The &#x60;account.id&#x60; you want to delete. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **detailAccount**
> \Swagger\Client\Model\InlineResponse2006 detailAccount($id, $omit, $fields)

Get an account's details

Get the details of a specific account.  > ℹ️ **Note**: This resource may return deprecated fields. Please check the response documentation for more information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The `account.id` you want to get detailed information about.
$omit = "omit_example"; // string | Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.
$fields = "fields_example"; // string | Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.

try {
    $result = $apiInstance->detailAccount($id, $omit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->detailAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The &#x60;account.id&#x60; you want to get detailed information about. |
 **omit** | **string**| Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]
 **fields** | **string**| Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAccounts**
> \Swagger\Client\Model\InlineResponse2005 listAccounts($link, $page_size, $page, $omit, $fields, $link__in, $balance__available, $balance__available__lt, $balance__available__lte, $balance__available__gt, $balance__available__gte, $balance__available__range, $balance__current, $balance__current__lt, $balance__current__lte, $balance__current__gt, $balance__current__gte, $balance__current__range, $category, $category__in, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range, $currency, $currency__in, $id, $id__in, $institution, $institution__in, $name, $name__icontains, $number, $number__in, $public_identification_name, $public_identification_value, $type)

List accounts

## ▶️ Usage  With the List Accounts method, you can:      1. List accounts related to a specific `link.id` (using the `link` query parameter).   2. Get the details of a specific `account.id` (using the `id` query parameter).   3. **[Not Recommended]** List all accounts related to your Belvo account (without using any query parameters).  ## 🔦 Filtering Responses  Please see the query list below for a list of fields that you can filter your responses by. For more information on how to use filters, see our <a href=\"https://developers.belvo.com/docs/searching-and-filtering\" target=\"_blank\">Filtering responses</a> article.  ## 📖 Pagination  This method returns a paginated response (default: 100 items per page). You can use the `page_size` query parameter to increase the number of items returned to a maximum of 1000 items. You can use the `page` query parameter to navigate through the results. For more details on how to navigate Belvo's paginated responses, see our <a href=\"https://developers.belvo.com/docs/belvo-pagination-tips\" target=\"_blank\">Pagination Tips</a> article.      ## 🚨 Deprecated Fields  This resource may return deprecated fields. In the response documentation you may see that a field has been marked as **deprecated**. This means that this field is no longer maintained by the Belvo team. You may still receive data for this field depending on the institution, however, you should not rely on this field.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\AccountsApi(
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
$balance__available = 1.2; // float | Return accounts that have a `balance.available` matching exactly this value.
$balance__available__lt = 1.2; // float | Return accounts that have a `balance.available` less than this value.
$balance__available__lte = 1.2; // float | Return accounts that have a `balance.available` less than or equal to this value.
$balance__available__gt = 1.2; // float | Return accounts that have a `balance.available` greater than this value.
$balance__available__gte = 1.2; // float | Return accounts that have a `balance.available` greater than or equal to this value.
$balance__available__range = array(3.4); // float[] | Return accounts that have a `balance.available` within a range of two values.
$balance__current = 1.2; // float | Return accounts that have a `balance.current` matching exactly this value.
$balance__current__lt = 1.2; // float | Return accounts that have a `balance.current` less than this value.
$balance__current__lte = 1.2; // float | Return accounts that have a `balance.available` less than or equal to this value.
$balance__current__gt = 1.2; // float | Return accounts that have a `balance.current` greater than this value.
$balance__current__gte = 1.2; // float | Return accounts that have a `balance.available` greater than or equal to this value.
$balance__current__range = array(3.4); // float[] | Return accounts that have a `balance.current` within a range of two values.
$category = "category_example"; // string | Return accounts only for the given category (for example, `CHECKING_ACCOUNT` and `SAVINGS_ACCOUNT`).
$category__in = array("category__in_example"); // string[] | Return accounts only for the given categories (for example, `CHECKING_ACCOUNT` and `SAVINGS_ACCOUNT`).
$created_at = new \DateTime("2013-10-20"); // \DateTime | Return items that were last updated in Belvo's database on this date (in `YYYY-MM-DD` format).
$created_at__gt = new \DateTime("2013-10-20"); // \DateTime | Return items that were last updated in Belvo's database after this date (in `YYYY-MM-DD` format).
$created_at__gte = new \DateTime("2013-10-20"); // \DateTime | Return items that were last updated in Belvo's database after or on this date (in `YYYY-MM-DD` format).
$created_at__lt = new \DateTime("2013-10-20"); // \DateTime | Return items that were last updated in Belvo's database before this date (in `YYYY-MM-DD` format).
$created_at__lte = new \DateTime("2013-10-20"); // \DateTime | Return items that were last updated in Belvo's database before or on this date (in `YYYY-MM-DD` format).
$created_at__range = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | Return accounts that were last updated in Belvo's database between two dates (in `YYYY-MM-DD` format).
$currency = "currency_example"; // string | Return results that hold finances or balances in only this three-letter currency code.
$currency__in = array("currency__in_example"); // string[] | Return results that have funds or balances in one of these three-letter currency codes.
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Return information only for this resource `id`.
$id__in = array("id__in_example"); // string[] | Return information for these resource `id`s.
$institution = "institution_example"; // string | Return results only for this institution (use the Belvo-designated name, such as `erebor_mx_retail`).
$institution__in = array("institution__in_example"); // string[] | Return results only for these institutions (use the Belvo-designated names, such as `erebor_mx_retail` and `gringotts_mx_retail`).
$name = "name_example"; // string | Return accounts with exactly this internal (specified by the institution) name.
$name__icontains = "name__icontains_example"; // string | Return accounts partially matching this internal (specified by the institution) name.
$number = "number_example"; // string | Return information only for this account number (as specified by the institution).
$number__in = array("number__in_example"); // string[] | Return information for these account numbers (as specified by the institution).
$public_identification_name = "public_identification_name_example"; // string | Return information only for this type of account ID. For example, CLABE accounts.
$public_identification_value = "public_identification_value_example"; // string | Return information only for this account ID. For example, the account number for a CLABE account.
$type = "type_example"; // string | Return information only for accounts matching this account type, as designated by the institution.

try {
    $result = $apiInstance->listAccounts($link, $page_size, $page, $omit, $fields, $link__in, $balance__available, $balance__available__lt, $balance__available__lte, $balance__available__gt, $balance__available__gte, $balance__available__range, $balance__current, $balance__current__lt, $balance__current__lte, $balance__current__gt, $balance__current__gte, $balance__current__range, $category, $category__in, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range, $currency, $currency__in, $id, $id__in, $institution, $institution__in, $name, $name__icontains, $number, $number__in, $public_identification_name, $public_identification_value, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->listAccounts: ', $e->getMessage(), PHP_EOL;
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
 **balance__available** | **float**| Return accounts that have a &#x60;balance.available&#x60; matching exactly this value. | [optional]
 **balance__available__lt** | **float**| Return accounts that have a &#x60;balance.available&#x60; less than this value. | [optional]
 **balance__available__lte** | **float**| Return accounts that have a &#x60;balance.available&#x60; less than or equal to this value. | [optional]
 **balance__available__gt** | **float**| Return accounts that have a &#x60;balance.available&#x60; greater than this value. | [optional]
 **balance__available__gte** | **float**| Return accounts that have a &#x60;balance.available&#x60; greater than or equal to this value. | [optional]
 **balance__available__range** | [**float[]**](../Model/float.md)| Return accounts that have a &#x60;balance.available&#x60; within a range of two values. | [optional]
 **balance__current** | **float**| Return accounts that have a &#x60;balance.current&#x60; matching exactly this value. | [optional]
 **balance__current__lt** | **float**| Return accounts that have a &#x60;balance.current&#x60; less than this value. | [optional]
 **balance__current__lte** | **float**| Return accounts that have a &#x60;balance.available&#x60; less than or equal to this value. | [optional]
 **balance__current__gt** | **float**| Return accounts that have a &#x60;balance.current&#x60; greater than this value. | [optional]
 **balance__current__gte** | **float**| Return accounts that have a &#x60;balance.available&#x60; greater than or equal to this value. | [optional]
 **balance__current__range** | [**float[]**](../Model/float.md)| Return accounts that have a &#x60;balance.current&#x60; within a range of two values. | [optional]
 **category** | **string**| Return accounts only for the given category (for example, &#x60;CHECKING_ACCOUNT&#x60; and &#x60;SAVINGS_ACCOUNT&#x60;). | [optional]
 **category__in** | [**string[]**](../Model/string.md)| Return accounts only for the given categories (for example, &#x60;CHECKING_ACCOUNT&#x60; and &#x60;SAVINGS_ACCOUNT&#x60;). | [optional]
 **created_at** | **\DateTime**| Return items that were last updated in Belvo&#x27;s database on this date (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **created_at__gt** | **\DateTime**| Return items that were last updated in Belvo&#x27;s database after this date (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **created_at__gte** | **\DateTime**| Return items that were last updated in Belvo&#x27;s database after or on this date (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **created_at__lt** | **\DateTime**| Return items that were last updated in Belvo&#x27;s database before this date (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **created_at__lte** | **\DateTime**| Return items that were last updated in Belvo&#x27;s database before or on this date (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **created_at__range** | [**\DateTime[]**](../Model/\DateTime.md)| Return accounts that were last updated in Belvo&#x27;s database between two dates (in &#x60;YYYY-MM-DD&#x60; format). | [optional]
 **currency** | **string**| Return results that hold finances or balances in only this three-letter currency code. | [optional]
 **currency__in** | [**string[]**](../Model/string.md)| Return results that have funds or balances in one of these three-letter currency codes. | [optional]
 **id** | [**string**](../Model/.md)| Return information only for this resource &#x60;id&#x60;. | [optional]
 **id__in** | [**string[]**](../Model/string.md)| Return information for these resource &#x60;id&#x60;s. | [optional]
 **institution** | **string**| Return results only for this institution (use the Belvo-designated name, such as &#x60;erebor_mx_retail&#x60;). | [optional]
 **institution__in** | [**string[]**](../Model/string.md)| Return results only for these institutions (use the Belvo-designated names, such as &#x60;erebor_mx_retail&#x60; and &#x60;gringotts_mx_retail&#x60;). | [optional]
 **name** | **string**| Return accounts with exactly this internal (specified by the institution) name. | [optional]
 **name__icontains** | **string**| Return accounts partially matching this internal (specified by the institution) name. | [optional]
 **number** | **string**| Return information only for this account number (as specified by the institution). | [optional]
 **number__in** | [**string[]**](../Model/string.md)| Return information for these account numbers (as specified by the institution). | [optional]
 **public_identification_name** | **string**| Return information only for this type of account ID. For example, CLABE accounts. | [optional]
 **public_identification_value** | **string**| Return information only for this account ID. For example, the account number for a CLABE account. | [optional]
 **type** | **string**| Return information only for accounts matching this account type, as designated by the institution. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchAccounts**
> null[] patchAccounts($body, $omit, $fields)

Complete an accounts request

Used to resume an Account retrieve session that was paused because an MFA token was required by the institution.  > ℹ️ **Note**: This resource may return deprecated fields. Please check the response documentation for more information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ApiAccountsBody1(); // \Swagger\Client\Model\ApiAccountsBody1 | 
$omit = "omit_example"; // string | Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.
$fields = "fields_example"; // string | Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.

try {
    $result = $apiInstance->patchAccounts($body, $omit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->patchAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ApiAccountsBody1**](../Model/ApiAccountsBody1.md)|  |
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

# **retrieveAccounts**
> null[] retrieveAccounts($body, $omit, $fields)

Retrieve accounts for a link

Retrieve accounts from an existing link.  > ℹ️ **Note**: This resource may return deprecated fields. Please check the response documentation for more information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ApiAccountsBody(); // \Swagger\Client\Model\ApiAccountsBody | 
$omit = "omit_example"; // string | Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.
$fields = "fields_example"; // string | Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.

try {
    $result = $apiInstance->retrieveAccounts($body, $omit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->retrieveAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ApiAccountsBody**](../Model/ApiAccountsBody.md)|  |
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

