# Swagger\Client\TransactionsApi

All URIs are relative to *https://sandbox.belvo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**destroyTransaction**](TransactionsApi.md#destroytransaction) | **DELETE** /api/transactions/{id}/ | Delete a transaction
[**detailTransaction**](TransactionsApi.md#detailtransaction) | **GET** /api/transactions/{id}/ | Get a transaction&#x27;s details
[**listTransactions**](TransactionsApi.md#listtransactions) | **GET** /api/transactions/ | List transactions
[**patchTransactions**](TransactionsApi.md#patchtransactions) | **PATCH** /api/transactions/ | Complete a transactions request
[**retrieveTransactions**](TransactionsApi.md#retrievetransactions) | **POST** /api/transactions/ | Retrieve transactions for a link

# **destroyTransaction**
> destroyTransaction($id)

Delete a transaction

Delete a specific transaction from your Belvo account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The `transaction.id` that you want to delete.

try {
    $apiInstance->destroyTransaction($id);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->destroyTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The &#x60;transaction.id&#x60; that you want to delete. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **detailTransaction**
> \Swagger\Client\Model\InlineResponse2008 detailTransaction($id, $omit, $fields)

Get a transaction's details

Get the details of a specific transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The `transaction.id` you want to get detailed information about.
$omit = "omit_example"; // string | Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.
$fields = "fields_example"; // string | Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.

try {
    $result = $apiInstance->detailTransaction($id, $omit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->detailTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The &#x60;transaction.id&#x60; you want to get detailed information about. |
 **omit** | **string**| Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]
 **fields** | **string**| Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTransactions**
> \Swagger\Client\Model\InlineResponse2007 listTransactions($link, $page_size, $page, $omit, $fields, $link__in, $account, $account__in, $account__balance__available, $account__balance__available__lt, $account__balance__available__lte, $account__balance__available__gt, $account__balance__available__gte, $account__balance__available__range, $account__balance__current, $account__balance__current__gt, $account__balance__current__gte, $account__balance__current__lt, $account__balance__current__lte, $account__balance__current__range, $account_type, $account_type__in, $accounting_date, $accounting_date__gt, $accounting_date__gte, $accounting_date__lt, $accounting_date__lte, $accounting_date__range, $amount, $amount__gt, $amount__gte, $amount__lt, $amount__lte, $amount__range, $collected_at, $collected_at__gt, $collected_at__gte, $collected_at__lt, $collected_at__lte, $collected_at__range, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range, $currency, $currency__in, $credit_card_data__bill_name__in, $reference, $reference__in, $status, $status__in, $type, $type__in, $value_date, $value_date__gt, $value_date__gte, $value_date__lt, $value_date__lte, $value_date__range)

List transactions

## ▶️ Usage  With the List Transactions method, you can:  1. **[Required]** List transactions related to a specific `link.id` (using the `link` query parameter). 2. Filter the returned transactions using query parameters (see the Filtering responses section below). 3. Get the details of a specific `transaction.id` (using the `id` query parameter along with the `link` query parameter).  ## 📖 Pagination  This method returns a paginated response (default: 100 items per page). You can use the `page_size` query parameter to increase the number of items returned to a maximum of 1000 items. You can use the `page` query parameter to navigate through the results. For more details on how to navigate Belvo's paginated responses, see our <a href=\"https://developers.belvo.com/docs/belvo-pagination-tips\" target=\"_blank\">Pagination Tips</a> article.  ## 🔦 Filtering Responses  Please see the query list below for a list of fields that you can filter your responses by. For more information on how to use filters, see our <a href=\"https://developers.belvo.com/docs/searching-and-filtering\" target=\"_blank\">Filtering responses</a> article.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionsApi(
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
$link__in = array("link__in_example"); // string[] | Return results only for these `link.id`s.
$account = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The `account.id` you want to filter by.  ℹ️ We highly recommend adding either the `link.id` or the `account.id` filters in order to improve your performance.
$account__in = array("account__in_example"); // string[] | Return results only for these `account.id`s.
$account__balance__available = 1.2; // float | Return transactions that have a `account.balance.available` matching exactly this value.
$account__balance__available__lt = 1.2; // float | Return transactions that have a `account.balance.available` less than this value.
$account__balance__available__lte = 1.2; // float | Return transactions that have a `account.balance.available` less than or equal to this value.
$account__balance__available__gt = 1.2; // float | Return transactions that have a `account.balance.available` more than this value.
$account__balance__available__gte = 1.2; // float | Return transactions that have a `account.balance.available` more than or equal to this value.
$account__balance__available__range = array(3.4); // float[] | Return transactions that have a `account.balance.available` within a range of two values.
$account__balance__current = 1.2; // float | Return transactions that have a `account.balance.current` matching exactly this value.
$account__balance__current__gt = 1.2; // float | Return transactions that have a `account.balance.current` greater than this value.
$account__balance__current__gte = 1.2; // float | Return transactions that have a `account.balance.current` greater than or equal to this value.
$account__balance__current__lt = 1.2; // float | Return transactions that have a `account.balance.current` less than this value.
$account__balance__current__lte = 1.2; // float | Return transactions that have a `account.balance.current` less than or equal to this value.
$account__balance__current__range = array(3.4); // float[] | Return transactions that have a `account.balance.current` within a range of two values.
$account_type = "account_type_example"; // string | Return information only for transactions matching this account type, as designated by the institution.
$account_type__in = array("account_type__in_example"); // string[] | Return information only for transactions matching these account types, as designated by the institution.
$accounting_date = new \DateTime("2013-10-20"); // \DateTime | Return transactions that were processed by the institution on exactly this date (`YYYY-MM-DD`).
$accounting_date__gt = new \DateTime("2013-10-20"); // \DateTime | Return transactions that were processed by the institution after this date (`YYYY-MM-DD`).
$accounting_date__gte = new \DateTime("2013-10-20"); // \DateTime | Return transactions that were processed by the institution on this date (`YYYY-MM-DD`) or later.
$accounting_date__lt = new \DateTime("2013-10-20"); // \DateTime | Return transactions that were processed by the institution before this date (`YYYY-MM-DD`).
$accounting_date__lte = new \DateTime("2013-10-20"); // \DateTime | Return transactions that were processed by the institution on this date (`YYYY-MM-DD`) or earlier.
$accounting_date__range = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | Return transactions that were processed by the institution in this date range (`YYYY-MM-DD`).
$amount = 1.2; // float | Return results only for this value.
$amount__gt = 1.2; // float | Return results only for more than this amount.
$amount__gte = 1.2; // float | Return results only for and more than this amount.
$amount__lt = 1.2; // float | Return results only for less than this amount.
$amount__lte = 1.2; // float | Return results only for this amount or less.
$amount__range = array(3.4); // float[] | Return results between this amount range.
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
$currency = "currency_example"; // string | Return results that hold finances or balances in only this three-letter currency code.
$currency__in = array("currency__in_example"); // string[] | Return results that have funds or balances in one of these three-letter currency codes.
$credit_card_data__bill_name__in = array("credit_card_data__bill_name__in_example"); // string[] | Return transactions for one of these bill names.
$reference = "reference_example"; // string | Returns transactions with this institution-assigned reference number.
$reference__in = array("reference__in_example"); // string[] | Returns transactions with these institution-assigned reference numbers.
$status = "status_example"; // string | Return transactions with this status. Can be either `PENDING`, `PROCESSED`, or `UNCATEGORIZED`.
$status__in = array("status__in_example"); // string[] | Return transactions with these statuses. Can be either `PENDING`, `PROCESSED`, or `UNCATEGORIZED`.
$type = "type_example"; // string | Return transactions with this type. Can be either `INFLOW` or `OUTFLOW`.
$type__in = array("type__in_example"); // string[] | Return transactions with this types. Can be either `INFLOW` or `OUTFLOW`.
$value_date = new \DateTime("2013-10-20"); // \DateTime | Return results for exactly this date (`YYYY-MM-DD`).
$value_date__gt = new \DateTime("2013-10-20"); // \DateTime | Return results that occurred after this date (`YYYY-MM-DD`).
$value_date__gte = new \DateTime("2013-10-20"); // \DateTime | Return results for this date (`YYYY-MM-DD`) or later.
$value_date__lt = new \DateTime("2013-10-20"); // \DateTime | Return results for before this date (`YYYY-MM-DD`).
$value_date__lte = new \DateTime("2013-10-20"); // \DateTime | Return results for this date (`YYYY-MM-DD`) or earlier.
$value_date__range = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[] | Return results for this date (`YYYY-MM-DD`) range.

try {
    $result = $apiInstance->listTransactions($link, $page_size, $page, $omit, $fields, $link__in, $account, $account__in, $account__balance__available, $account__balance__available__lt, $account__balance__available__lte, $account__balance__available__gt, $account__balance__available__gte, $account__balance__available__range, $account__balance__current, $account__balance__current__gt, $account__balance__current__gte, $account__balance__current__lt, $account__balance__current__lte, $account__balance__current__range, $account_type, $account_type__in, $accounting_date, $accounting_date__gt, $accounting_date__gte, $accounting_date__lt, $accounting_date__lte, $accounting_date__range, $amount, $amount__gt, $amount__gte, $amount__lt, $amount__lte, $amount__range, $collected_at, $collected_at__gt, $collected_at__gte, $collected_at__lt, $collected_at__lte, $collected_at__range, $created_at, $created_at__gt, $created_at__gte, $created_at__lt, $created_at__lte, $created_at__range, $currency, $currency__in, $credit_card_data__bill_name__in, $reference, $reference__in, $status, $status__in, $type, $type__in, $value_date, $value_date__gt, $value_date__gte, $value_date__lt, $value_date__lte, $value_date__range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->listTransactions: ', $e->getMessage(), PHP_EOL;
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
 **link__in** | [**string[]**](../Model/string.md)| Return results only for these &#x60;link.id&#x60;s. | [optional]
 **account** | [**string**](../Model/.md)| The &#x60;account.id&#x60; you want to filter by.  ℹ️ We highly recommend adding either the &#x60;link.id&#x60; or the &#x60;account.id&#x60; filters in order to improve your performance. | [optional]
 **account__in** | [**string[]**](../Model/string.md)| Return results only for these &#x60;account.id&#x60;s. | [optional]
 **account__balance__available** | **float**| Return transactions that have a &#x60;account.balance.available&#x60; matching exactly this value. | [optional]
 **account__balance__available__lt** | **float**| Return transactions that have a &#x60;account.balance.available&#x60; less than this value. | [optional]
 **account__balance__available__lte** | **float**| Return transactions that have a &#x60;account.balance.available&#x60; less than or equal to this value. | [optional]
 **account__balance__available__gt** | **float**| Return transactions that have a &#x60;account.balance.available&#x60; more than this value. | [optional]
 **account__balance__available__gte** | **float**| Return transactions that have a &#x60;account.balance.available&#x60; more than or equal to this value. | [optional]
 **account__balance__available__range** | [**float[]**](../Model/float.md)| Return transactions that have a &#x60;account.balance.available&#x60; within a range of two values. | [optional]
 **account__balance__current** | **float**| Return transactions that have a &#x60;account.balance.current&#x60; matching exactly this value. | [optional]
 **account__balance__current__gt** | **float**| Return transactions that have a &#x60;account.balance.current&#x60; greater than this value. | [optional]
 **account__balance__current__gte** | **float**| Return transactions that have a &#x60;account.balance.current&#x60; greater than or equal to this value. | [optional]
 **account__balance__current__lt** | **float**| Return transactions that have a &#x60;account.balance.current&#x60; less than this value. | [optional]
 **account__balance__current__lte** | **float**| Return transactions that have a &#x60;account.balance.current&#x60; less than or equal to this value. | [optional]
 **account__balance__current__range** | [**float[]**](../Model/float.md)| Return transactions that have a &#x60;account.balance.current&#x60; within a range of two values. | [optional]
 **account_type** | **string**| Return information only for transactions matching this account type, as designated by the institution. | [optional]
 **account_type__in** | [**string[]**](../Model/string.md)| Return information only for transactions matching these account types, as designated by the institution. | [optional]
 **accounting_date** | **\DateTime**| Return transactions that were processed by the institution on exactly this date (&#x60;YYYY-MM-DD&#x60;). | [optional]
 **accounting_date__gt** | **\DateTime**| Return transactions that were processed by the institution after this date (&#x60;YYYY-MM-DD&#x60;). | [optional]
 **accounting_date__gte** | **\DateTime**| Return transactions that were processed by the institution on this date (&#x60;YYYY-MM-DD&#x60;) or later. | [optional]
 **accounting_date__lt** | **\DateTime**| Return transactions that were processed by the institution before this date (&#x60;YYYY-MM-DD&#x60;). | [optional]
 **accounting_date__lte** | **\DateTime**| Return transactions that were processed by the institution on this date (&#x60;YYYY-MM-DD&#x60;) or earlier. | [optional]
 **accounting_date__range** | [**\DateTime[]**](../Model/\DateTime.md)| Return transactions that were processed by the institution in this date range (&#x60;YYYY-MM-DD&#x60;). | [optional]
 **amount** | **float**| Return results only for this value. | [optional]
 **amount__gt** | **float**| Return results only for more than this amount. | [optional]
 **amount__gte** | **float**| Return results only for and more than this amount. | [optional]
 **amount__lt** | **float**| Return results only for less than this amount. | [optional]
 **amount__lte** | **float**| Return results only for this amount or less. | [optional]
 **amount__range** | [**float[]**](../Model/float.md)| Return results between this amount range. | [optional]
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
 **currency** | **string**| Return results that hold finances or balances in only this three-letter currency code. | [optional]
 **currency__in** | [**string[]**](../Model/string.md)| Return results that have funds or balances in one of these three-letter currency codes. | [optional]
 **credit_card_data__bill_name__in** | [**string[]**](../Model/string.md)| Return transactions for one of these bill names. | [optional]
 **reference** | **string**| Returns transactions with this institution-assigned reference number. | [optional]
 **reference__in** | [**string[]**](../Model/string.md)| Returns transactions with these institution-assigned reference numbers. | [optional]
 **status** | **string**| Return transactions with this status. Can be either &#x60;PENDING&#x60;, &#x60;PROCESSED&#x60;, or &#x60;UNCATEGORIZED&#x60;. | [optional]
 **status__in** | [**string[]**](../Model/string.md)| Return transactions with these statuses. Can be either &#x60;PENDING&#x60;, &#x60;PROCESSED&#x60;, or &#x60;UNCATEGORIZED&#x60;. | [optional]
 **type** | **string**| Return transactions with this type. Can be either &#x60;INFLOW&#x60; or &#x60;OUTFLOW&#x60;. | [optional]
 **type__in** | [**string[]**](../Model/string.md)| Return transactions with this types. Can be either &#x60;INFLOW&#x60; or &#x60;OUTFLOW&#x60;. | [optional]
 **value_date** | **\DateTime**| Return results for exactly this date (&#x60;YYYY-MM-DD&#x60;). | [optional]
 **value_date__gt** | **\DateTime**| Return results that occurred after this date (&#x60;YYYY-MM-DD&#x60;). | [optional]
 **value_date__gte** | **\DateTime**| Return results for this date (&#x60;YYYY-MM-DD&#x60;) or later. | [optional]
 **value_date__lt** | **\DateTime**| Return results for before this date (&#x60;YYYY-MM-DD&#x60;). | [optional]
 **value_date__lte** | **\DateTime**| Return results for this date (&#x60;YYYY-MM-DD&#x60;) or earlier. | [optional]
 **value_date__range** | [**\DateTime[]**](../Model/\DateTime.md)| Return results for this date (&#x60;YYYY-MM-DD&#x60;) range. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchTransactions**
> null[] patchTransactions($body, $omit, $fields)

Complete a transactions request

Used to resume a Transaction retrieve session that was paused because an MFA token was required by the institution.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ApiTransactionsBody1(); // \Swagger\Client\Model\ApiTransactionsBody1 | 
$omit = "omit_example"; // string | Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.
$fields = "fields_example"; // string | Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.

try {
    $result = $apiInstance->patchTransactions($body, $omit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->patchTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ApiTransactionsBody1**](../Model/ApiTransactionsBody1.md)|  |
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

# **retrieveTransactions**
> null[] retrieveTransactions($body, $x_belvo_request_mode, $omit, $fields)

Retrieve transactions for a link

Retrieve transactions for one or more accounts from a specific link. <div style=\"background-color:#f4f6f8; border-left: 6px solid #0663F9;padding: 12px;margin-left: 25px; border-radius: 4px; margin-right: 25px\"> <strong>Info: </strong> When retrieving transactions, it is important to understand that the available transaction data ranges depend on each institution. <br><br> If you try to access older information than what we can access, we will return all the data we can read within that date range. For example, if you request transactions for the last year and we can only access the last six months, we will return the information corresponding to these six months of data. </div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ApiTransactionsBody(); // \Swagger\Client\Model\ApiTransactionsBody | 
$x_belvo_request_mode = "x_belvo_request_mode_example"; // string | Recommended header parameter to make your POST request asynchronous (thus preventing timeouts and improving your data flow).  When you make an asynchronous request, Belvo responds with a `202 - Accepted` payload, including the `request_id`. Once we have retrieved the requested information, you will receive a webhook with the link and request IDs.
$omit = "omit_example"; // string | Omit certain fields from being returned in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.
$fields = "fields_example"; // string | Return only the specified fields in the response. For more information, see our [Filtering responses](https://developers.belvo.com/docs/searching-and-filtering) DevPortal article.

try {
    $result = $apiInstance->retrieveTransactions($body, $x_belvo_request_mode, $omit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->retrieveTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ApiTransactionsBody**](../Model/ApiTransactionsBody.md)|  |
 **x_belvo_request_mode** | **string**| Recommended header parameter to make your POST request asynchronous (thus preventing timeouts and improving your data flow).  When you make an asynchronous request, Belvo responds with a &#x60;202 - Accepted&#x60; payload, including the &#x60;request_id&#x60;. Once we have retrieved the requested information, you will receive a webhook with the link and request IDs. | [optional]
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

