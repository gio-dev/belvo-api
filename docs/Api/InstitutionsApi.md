# Swagger\Client\InstitutionsApi

All URIs are relative to *https://sandbox.belvo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**detailInstitution**](InstitutionsApi.md#detailinstitution) | **GET** /api/institutions/{id}/ | Get an institution&#x27;s details
[**listInstitutions**](InstitutionsApi.md#listinstitutions) | **GET** /api/institutions/ | List institutions

# **detailInstitution**
> \Swagger\Client\Model\InlineResponse2001 detailInstitution($id)

Get an institution's details

Get the details of a specific institution.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\InstitutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The `institution.id` you want to get detailed information about.

try {
    $result = $apiInstance->detailInstitution($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstitutionsApi->detailInstitution: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The &#x60;institution.id&#x60; you want to get detailed information about. |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listInstitutions**
> \Swagger\Client\Model\InlineResponse200 listInstitutions($page_size, $page, $display_name, $country_code, $country_code__in, $resources__allin, $name, $name__in, $status, $status__in, $type, $type__in, $website)

List institutions

## ▶️ Usage  With the List Institutions Declarations method, you can:  1. List all institutions Belvo has available.  ## 📖 Pagination  This method returns a paginated response (default: 100 items per page). You can use the `page_size` query parameter to increase the number of items returned to a maximum of 1000 items. You can use the `page` query parameter to navigate through the results. For more details on how to navigate Belvo's paginated responses, see our <a href=\"https://developers.belvo.com/docs/belvo-pagination-tips\" target=\"_blank\">Pagination Tips</a> article.  ## 🔦 Filtering Responses  Please see the query list below for a list of fields that you can filter your responses by. For more information on how to use filters, see our <a href=\"https://developers.belvo.com/docs/searching-and-filtering\" target=\"_blank\">Filtering responses</a> article.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\InstitutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 100; // int | Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000).
$page = 56; // int | A page number within the paginated result set.
$display_name = "display_name_example"; // string | Return institutions that partially match this display name.
$country_code = "country_code_example"; // string | Return institutions only for this two-letter country code.
$country_code__in = array("country_code__in_example"); // string[] | Return institutions only for these two-letter country codes.
$resources__allin = array("resources__allin_example"); // string[] | Return institutions that support these resources.
$name = "name_example"; // string | Return an institution with this Belvo-designated name.
$name__in = array("name__in_example"); // string[] | Return institutions with one or more of these Belvo-designated names.
$status = "status_example"; // string | Return institutions with the given status. You can choose between `healthy` or `down`.
$status__in = array("status__in_example"); // string[] | Return institutions with one of the given statuses. You can choose between `healthy` or `down`.
$type = "type_example"; // string | Return institutions of this type. You can choose between `bank`, `fiscal`, or `employment`.
$type__in = array("type__in_example"); // string[] | Return institutions of one of these types. You can choose between `bank`, `fiscal`, or `employment`.
$website = "website_example"; // string | Return institutions with this website URL.

try {
    $result = $apiInstance->listInstitutions($page_size, $page, $display_name, $country_code, $country_code__in, $resources__allin, $name, $name__in, $status, $status__in, $type, $type__in, $website);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstitutionsApi->listInstitutions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **int**| Indicates how many results to return per page. By default we return 100 results per page.  ℹ️ The minimum number of results returned per page is 1 and the maximum is 1000. If you enter a value greater than 1000, our API will default to the maximum value (1000). | [optional] [default to 100]
 **page** | **int**| A page number within the paginated result set. | [optional]
 **display_name** | **string**| Return institutions that partially match this display name. | [optional]
 **country_code** | **string**| Return institutions only for this two-letter country code. | [optional]
 **country_code__in** | [**string[]**](../Model/string.md)| Return institutions only for these two-letter country codes. | [optional]
 **resources__allin** | [**string[]**](../Model/string.md)| Return institutions that support these resources. | [optional]
 **name** | **string**| Return an institution with this Belvo-designated name. | [optional]
 **name__in** | [**string[]**](../Model/string.md)| Return institutions with one or more of these Belvo-designated names. | [optional]
 **status** | **string**| Return institutions with the given status. You can choose between &#x60;healthy&#x60; or &#x60;down&#x60;. | [optional]
 **status__in** | [**string[]**](../Model/string.md)| Return institutions with one of the given statuses. You can choose between &#x60;healthy&#x60; or &#x60;down&#x60;. | [optional]
 **type** | **string**| Return institutions of this type. You can choose between &#x60;bank&#x60;, &#x60;fiscal&#x60;, or &#x60;employment&#x60;. | [optional]
 **type__in** | [**string[]**](../Model/string.md)| Return institutions of one of these types. You can choose between &#x60;bank&#x60;, &#x60;fiscal&#x60;, or &#x60;employment&#x60;. | [optional]
 **website** | **string**| Return institutions with this website URL. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

