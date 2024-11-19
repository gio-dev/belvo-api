# Swagger\Client\IncomeVerificationApi

All URIs are relative to *https://sandbox.belvo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**verifyIncome**](IncomeVerificationApi.md#verifyincome) | **POST** /api/enrich/incomes/ | Verify incomes

# **verifyIncome**
> \Swagger\Client\Model\InlineResponse20031[] verifyIncome($body)

Verify incomes

Send through your raw data and receive enriched information for each of your user's income streams.   <div style=\"background-color:#f4f6f8; border-left: 6px solid #5bc0de;padding: 12px;margin-left: 25px; border-radius: 4px; margin-right: 25px\">  <strong>Note: </strong> Belvo can process up to 10,000 unique transactions per request.  </div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\IncomeVerificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\EnrichIncomesBody(); // \Swagger\Client\Model\EnrichIncomesBody | 

try {
    $result = $apiInstance->verifyIncome($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncomeVerificationApi->verifyIncome: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnrichIncomesBody**](../Model/EnrichIncomesBody.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse20031[]**](../Model/InlineResponse20031.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

