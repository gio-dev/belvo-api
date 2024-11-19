<?php
/**
 * ApiriskinsightsCashflowMetrics
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Belvo API Docs
 *
 * # Introduction  Belvo is an open banking API for Latin America that allows companies to access banking and fiscal information in a secure as well as agile way.  Through our API, you can access:   - **Bank information** such as account information, real-time balance, historical transactions, and account owner identification.  - **Fiscal information** such as received and sent invoices and tax returns.   <img src=\"https://files.readme.io/acf27d3-belvo_pipes.png\" alt=\"fiscal-endpoints\">   In this API reference you'll find all the information you need about each  endpoint and resource.   <div style=\"background-color:#f4f6f8; border-left: 6px solid #4CAF50;padding: 12px;margin-left: 25px; border-radius: 4px; margin-right: 25px\">  <strong>Tip: </strong> Make sure that you also check out our Developer Portal for guides on <a href=\"https://developers.belvo.com/docs/get-started-in-5-minutes\" target=\"_blank\">how to get started</a>, using our <a href=\"https://developers.belvo.com/docs/test-in-sandbox\" target=\"_blank\">Sandbox environment</a>, as well as how to <a href=\"https://developers.belvo.com/docs/connect-widget\" target=\"_blank\">integrate the widget</a> or use our <a href=\"https://developers.belvo.com/docs/quickstart-application\" target=\"_blank\">quickstart application</a>.  </div>   ## Environment  We currently offer three environments: sandbox, development, and production.   When using our SDKs, make sure to use the **Alias** (and not the Base URL).   | Environment | Purpose | Access | |-----------|-------|-------| | **Sandbox** | The [Sandbox environment](https://developers.belvo.com/docs/test-in-sandbox) is dedicated for your testing and development phases. In this environment, you can create links without real credentials and you can pull test data from all endpoints. **⚠️The sandbox environment is refreshed frequently and your test data can be updated or deleted.** | Base URL (cURL): https://sandbox.belvo.com/ <br><br>Alias (SDKs): sandbox| | **Production** | The Production environment is dedicated for live applications with real connections to institutions. In this environment, you will need real credentials to create links and you will pull real data from the institutions.| Base URL (cURL): https://api.belvo.com/ <br><br>Alias (SDKs): production|   For each environment, you'll need to [generate separate API keys](https://developers.belvo.com/docs/get-your-belvo-api-keys).   ## Response codes   We use the following HTTP status code in the response depending on the success or failure:   | Status Code | Description | |-----------|-------| | `200` | ✅ **Success** - The content is available in the response body. | | `201` | ✅ **Success** - The content was created successfully on Belvo. | | `204` | ✅ **Success** - No content to return. | | `400` | ❌ **Bad Request Error** - Request returned an error, detail in content.| | `401` | ❌ **Unauthorized** - The Belvo credentials provided are not valid.| | `404` | ❌ **Not Found** - The resource you try to access cannot be found.| | `405` | ❌ **Method Not Allowed** - The HTTP method you are using is not accepted for this resource.| | `408` | ❌ **Request Timeout** - The request timed out and was terminated by the server.| | `428` | ❌ **MFA Token Required** - MFA token was required by the institution to connect. | | `500` | ❌ **Internal Server Error** - The detail of the error is available in the response body.|   ## Error handling   ### Error messages   Belvo API errors are returned in JSON format. For example, an error might look like this:   ```json  [     {       \"request_id\": \"a6e1c493d7a29d91aed4338e6fcf077d\",       \"message\": \"This field is required.\",       \"code\": \"required\",       \"field\": \"link\"     } ]  ```   Typically, an error response will have the following parameters:  - `request_id`: a unique ID for the request, you should share it with the Belvo support team for investigations.  - `message`: human-readable description of the error.  - `code`: a unique code for the error. Check the table below to see how to handle each error code.  - `field` *(optional)*: The specific field in the request body that has an issue.    ### Request identifier  When you need help with a specific error, add the request identifier (`request_id`) in your message to the Belvo support team. This will speed up investigations and get you back up and running in no time at all.   ### Error codes and troubleshooting   For a full list of errors and how to troubleshoot them, please see our dedicated [Error handling articles](https://developers.belvo.com/docs/integration-overview#error-handling) in our DevPortal.    ### Retry policy   Please see our recommended [retry policies](https://developers.belvo.com/docs/integration-overview#error-retry-policy) in the DevPortal.
 *
 * OpenAPI spec version: 1.176.0
 * Contact: support@belvo.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.64
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ApiriskinsightsCashflowMetrics Class Doc Comment
 *
 * @category Class
 * @description Aggregate metrics calculated based on the user&#x27;s transactions from checking, savings, credit, and loan accounts. However, internal transfers (transfers between accounts belonging to the same link) are not used in the calculation.   &gt; ℹ️ **Note** &gt; &gt; If there is not enough transactional data for a given period, we return &#x60;null&#x60;. For example, if the account has only been open for 15 days (or you have only provided data for just 15 days), we return values for &#x60;_3d&#x60;, &#x60;_1w&#x60;, and &#x60;_1m&#x60;, however for &#x60;_3m&#x60; we will return &#x60;null&#x60; as there is no data for months two and three.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApiriskinsightsCashflowMetrics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'apiriskinsights_cashflow_metrics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'max_positive_3d' => 'float',
        'max_positive_1w' => 'float',
        'max_positive_1m' => 'float',
        'max_positive_3m' => 'float',
        'max_positive_6m' => 'float',
        'max_positive_12m' => 'float',
        'max_negative_3d' => 'float',
        'max_negative_1w' => 'float',
        'max_negative_1m' => 'float',
        'max_negative_3m' => 'float',
        'max_negative_6m' => 'float',
        'max_negative_12m' => 'float',
        'mean_positive_3d' => 'float',
        'mean_positive_1w' => 'float',
        'mean_positive_1m' => 'float',
        'mean_positive_3m' => 'float',
        'mean_positive_6m' => 'float',
        'mean_positive_12m' => 'float',
        'mean_negative_3d' => 'float',
        'mean_negative_1w' => 'float',
        'mean_negative_1m' => 'float',
        'mean_negative_3m' => 'float',
        'mean_negative_6m' => 'float',
        'mean_negative_12m' => 'float',
        'sum_positive_3d' => 'float',
        'sum_positive_1w' => 'float',
        'sum_positive_1m' => 'float',
        'sum_positive_3m' => 'float',
        'sum_positive_6m' => 'float',
        'sum_positive_12m' => 'float',
        'sum_positive_trend_3d' => 'float',
        'sum_positive_trend_1w' => 'float',
        'sum_positive_trend_1m' => 'float',
        'sum_positive_trend_3m' => 'float',
        'sum_positive_trend_6m' => 'float',
        'sum_positive_trend_12m' => 'float',
        'sum_negative_3d' => 'float',
        'sum_negative_1w' => 'float',
        'sum_negative_1m' => 'float',
        'sum_negative_3m' => 'float',
        'sum_negative_6m' => 'float',
        'sum_negative_12m' => 'float',
        'sum_negative_trend_3d' => 'float',
        'sum_negative_trend_1w' => 'float',
        'sum_negative_trend_1m' => 'float',
        'sum_negative_trend_3m' => 'float',
        'sum_negative_trend_6m' => 'float',
        'sum_negative_trend_12m' => 'float',
        'positive_to_negative_ratio_3d' => 'float',
        'positive_to_negative_ratio_1w' => 'float',
        'positive_to_negative_ratio_1m' => 'float',
        'positive_to_negative_ratio_3m' => 'float',
        'positive_to_negative_ratio_6m' => 'float',
        'positive_to_negative_ratio_12m' => 'float',
        'net_cashflow_3d' => 'float',
        'net_cashflow_1w' => 'float',
        'net_cashflow_1m' => 'float',
        'net_cashflow_3m' => 'float',
        'net_cashflow_6m' => 'float',
        'net_cashflow_12m' => 'float',
        'net_cashflow_trend_3d' => 'float',
        'net_cashflow_trend_1w' => 'float',
        'net_cashflow_trend_1m' => 'float',
        'net_cashflow_trend_3m' => 'float',
        'net_cashflow_trend_6m' => 'float',
        'net_cashflow_trend_12m' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'max_positive_3d' => 'float',
        'max_positive_1w' => 'float',
        'max_positive_1m' => 'float',
        'max_positive_3m' => 'float',
        'max_positive_6m' => 'float',
        'max_positive_12m' => 'float',
        'max_negative_3d' => 'float',
        'max_negative_1w' => 'float',
        'max_negative_1m' => 'float',
        'max_negative_3m' => 'float',
        'max_negative_6m' => 'float',
        'max_negative_12m' => 'float',
        'mean_positive_3d' => 'float',
        'mean_positive_1w' => 'float',
        'mean_positive_1m' => 'float',
        'mean_positive_3m' => 'float',
        'mean_positive_6m' => 'float',
        'mean_positive_12m' => 'float',
        'mean_negative_3d' => 'float',
        'mean_negative_1w' => 'float',
        'mean_negative_1m' => 'float',
        'mean_negative_3m' => 'float',
        'mean_negative_6m' => 'float',
        'mean_negative_12m' => 'float',
        'sum_positive_3d' => 'float',
        'sum_positive_1w' => 'float',
        'sum_positive_1m' => 'float',
        'sum_positive_3m' => 'float',
        'sum_positive_6m' => 'float',
        'sum_positive_12m' => 'float',
        'sum_positive_trend_3d' => 'float',
        'sum_positive_trend_1w' => 'float',
        'sum_positive_trend_1m' => 'float',
        'sum_positive_trend_3m' => 'float',
        'sum_positive_trend_6m' => 'float',
        'sum_positive_trend_12m' => 'float',
        'sum_negative_3d' => 'float',
        'sum_negative_1w' => 'float',
        'sum_negative_1m' => 'float',
        'sum_negative_3m' => 'float',
        'sum_negative_6m' => 'float',
        'sum_negative_12m' => 'float',
        'sum_negative_trend_3d' => 'float',
        'sum_negative_trend_1w' => 'float',
        'sum_negative_trend_1m' => 'float',
        'sum_negative_trend_3m' => 'float',
        'sum_negative_trend_6m' => 'float',
        'sum_negative_trend_12m' => 'float',
        'positive_to_negative_ratio_3d' => 'float',
        'positive_to_negative_ratio_1w' => 'float',
        'positive_to_negative_ratio_1m' => 'float',
        'positive_to_negative_ratio_3m' => 'float',
        'positive_to_negative_ratio_6m' => 'float',
        'positive_to_negative_ratio_12m' => 'float',
        'net_cashflow_3d' => 'float',
        'net_cashflow_1w' => 'float',
        'net_cashflow_1m' => 'float',
        'net_cashflow_3m' => 'float',
        'net_cashflow_6m' => 'float',
        'net_cashflow_12m' => 'float',
        'net_cashflow_trend_3d' => 'float',
        'net_cashflow_trend_1w' => 'float',
        'net_cashflow_trend_1m' => 'float',
        'net_cashflow_trend_3m' => 'float',
        'net_cashflow_trend_6m' => 'float',
        'net_cashflow_trend_12m' => 'float'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'max_positive_3d' => 'max_positive_3d',
        'max_positive_1w' => 'max_positive_1w',
        'max_positive_1m' => 'max_positive_1m',
        'max_positive_3m' => 'max_positive_3m',
        'max_positive_6m' => 'max_positive_6m',
        'max_positive_12m' => 'max_positive_12m',
        'max_negative_3d' => 'max_negative_3d',
        'max_negative_1w' => 'max_negative_1w',
        'max_negative_1m' => 'max_negative_1m',
        'max_negative_3m' => 'max_negative_3m',
        'max_negative_6m' => 'max_negative_6m',
        'max_negative_12m' => 'max_negative_12m',
        'mean_positive_3d' => 'mean_positive_3d',
        'mean_positive_1w' => 'mean_positive_1w',
        'mean_positive_1m' => 'mean_positive_1m',
        'mean_positive_3m' => 'mean_positive_3m',
        'mean_positive_6m' => 'mean_positive_6m',
        'mean_positive_12m' => 'mean_positive_12m',
        'mean_negative_3d' => 'mean_negative_3d',
        'mean_negative_1w' => 'mean_negative_1w',
        'mean_negative_1m' => 'mean_negative_1m',
        'mean_negative_3m' => 'mean_negative_3m',
        'mean_negative_6m' => 'mean_negative_6m',
        'mean_negative_12m' => 'mean_negative_12m',
        'sum_positive_3d' => 'sum_positive_3d',
        'sum_positive_1w' => 'sum_positive_1w',
        'sum_positive_1m' => 'sum_positive_1m',
        'sum_positive_3m' => 'sum_positive_3m',
        'sum_positive_6m' => 'sum_positive_6m',
        'sum_positive_12m' => 'sum_positive_12m',
        'sum_positive_trend_3d' => 'sum_positive_trend_3d',
        'sum_positive_trend_1w' => 'sum_positive_trend_1w',
        'sum_positive_trend_1m' => 'sum_positive_trend_1m',
        'sum_positive_trend_3m' => 'sum_positive_trend_3m',
        'sum_positive_trend_6m' => 'sum_positive_trend_6m',
        'sum_positive_trend_12m' => 'sum_positive_trend_12m',
        'sum_negative_3d' => 'sum_negative_3d',
        'sum_negative_1w' => 'sum_negative_1w',
        'sum_negative_1m' => 'sum_negative_1m',
        'sum_negative_3m' => 'sum_negative_3m',
        'sum_negative_6m' => 'sum_negative_6m',
        'sum_negative_12m' => 'sum_negative_12m',
        'sum_negative_trend_3d' => 'sum_negative_trend_3d',
        'sum_negative_trend_1w' => 'sum_negative_trend_1w',
        'sum_negative_trend_1m' => 'sum_negative_trend_1m',
        'sum_negative_trend_3m' => 'sum_negative_trend_3m',
        'sum_negative_trend_6m' => 'sum_negative_trend_6m',
        'sum_negative_trend_12m' => 'sum_negative_trend_12m',
        'positive_to_negative_ratio_3d' => 'positive_to_negative_ratio_3d',
        'positive_to_negative_ratio_1w' => 'positive_to_negative_ratio_1w',
        'positive_to_negative_ratio_1m' => 'positive_to_negative_ratio_1m',
        'positive_to_negative_ratio_3m' => 'positive_to_negative_ratio_3m',
        'positive_to_negative_ratio_6m' => 'positive_to_negative_ratio_6m',
        'positive_to_negative_ratio_12m' => 'positive_to_negative_ratio_12m',
        'net_cashflow_3d' => 'net_cashflow_3d',
        'net_cashflow_1w' => 'net_cashflow_1w',
        'net_cashflow_1m' => 'net_cashflow_1m',
        'net_cashflow_3m' => 'net_cashflow_3m',
        'net_cashflow_6m' => 'net_cashflow_6m',
        'net_cashflow_12m' => 'net_cashflow_12m',
        'net_cashflow_trend_3d' => 'net_cashflow_trend_3d',
        'net_cashflow_trend_1w' => 'net_cashflow_trend_1w',
        'net_cashflow_trend_1m' => 'net_cashflow_trend_1m',
        'net_cashflow_trend_3m' => 'net_cashflow_trend_3m',
        'net_cashflow_trend_6m' => 'net_cashflow_trend_6m',
        'net_cashflow_trend_12m' => 'net_cashflow_trend_12m'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'max_positive_3d' => 'setMaxPositive3d',
        'max_positive_1w' => 'setMaxPositive1w',
        'max_positive_1m' => 'setMaxPositive1m',
        'max_positive_3m' => 'setMaxPositive3m',
        'max_positive_6m' => 'setMaxPositive6m',
        'max_positive_12m' => 'setMaxPositive12m',
        'max_negative_3d' => 'setMaxNegative3d',
        'max_negative_1w' => 'setMaxNegative1w',
        'max_negative_1m' => 'setMaxNegative1m',
        'max_negative_3m' => 'setMaxNegative3m',
        'max_negative_6m' => 'setMaxNegative6m',
        'max_negative_12m' => 'setMaxNegative12m',
        'mean_positive_3d' => 'setMeanPositive3d',
        'mean_positive_1w' => 'setMeanPositive1w',
        'mean_positive_1m' => 'setMeanPositive1m',
        'mean_positive_3m' => 'setMeanPositive3m',
        'mean_positive_6m' => 'setMeanPositive6m',
        'mean_positive_12m' => 'setMeanPositive12m',
        'mean_negative_3d' => 'setMeanNegative3d',
        'mean_negative_1w' => 'setMeanNegative1w',
        'mean_negative_1m' => 'setMeanNegative1m',
        'mean_negative_3m' => 'setMeanNegative3m',
        'mean_negative_6m' => 'setMeanNegative6m',
        'mean_negative_12m' => 'setMeanNegative12m',
        'sum_positive_3d' => 'setSumPositive3d',
        'sum_positive_1w' => 'setSumPositive1w',
        'sum_positive_1m' => 'setSumPositive1m',
        'sum_positive_3m' => 'setSumPositive3m',
        'sum_positive_6m' => 'setSumPositive6m',
        'sum_positive_12m' => 'setSumPositive12m',
        'sum_positive_trend_3d' => 'setSumPositiveTrend3d',
        'sum_positive_trend_1w' => 'setSumPositiveTrend1w',
        'sum_positive_trend_1m' => 'setSumPositiveTrend1m',
        'sum_positive_trend_3m' => 'setSumPositiveTrend3m',
        'sum_positive_trend_6m' => 'setSumPositiveTrend6m',
        'sum_positive_trend_12m' => 'setSumPositiveTrend12m',
        'sum_negative_3d' => 'setSumNegative3d',
        'sum_negative_1w' => 'setSumNegative1w',
        'sum_negative_1m' => 'setSumNegative1m',
        'sum_negative_3m' => 'setSumNegative3m',
        'sum_negative_6m' => 'setSumNegative6m',
        'sum_negative_12m' => 'setSumNegative12m',
        'sum_negative_trend_3d' => 'setSumNegativeTrend3d',
        'sum_negative_trend_1w' => 'setSumNegativeTrend1w',
        'sum_negative_trend_1m' => 'setSumNegativeTrend1m',
        'sum_negative_trend_3m' => 'setSumNegativeTrend3m',
        'sum_negative_trend_6m' => 'setSumNegativeTrend6m',
        'sum_negative_trend_12m' => 'setSumNegativeTrend12m',
        'positive_to_negative_ratio_3d' => 'setPositiveToNegativeRatio3d',
        'positive_to_negative_ratio_1w' => 'setPositiveToNegativeRatio1w',
        'positive_to_negative_ratio_1m' => 'setPositiveToNegativeRatio1m',
        'positive_to_negative_ratio_3m' => 'setPositiveToNegativeRatio3m',
        'positive_to_negative_ratio_6m' => 'setPositiveToNegativeRatio6m',
        'positive_to_negative_ratio_12m' => 'setPositiveToNegativeRatio12m',
        'net_cashflow_3d' => 'setNetCashflow3d',
        'net_cashflow_1w' => 'setNetCashflow1w',
        'net_cashflow_1m' => 'setNetCashflow1m',
        'net_cashflow_3m' => 'setNetCashflow3m',
        'net_cashflow_6m' => 'setNetCashflow6m',
        'net_cashflow_12m' => 'setNetCashflow12m',
        'net_cashflow_trend_3d' => 'setNetCashflowTrend3d',
        'net_cashflow_trend_1w' => 'setNetCashflowTrend1w',
        'net_cashflow_trend_1m' => 'setNetCashflowTrend1m',
        'net_cashflow_trend_3m' => 'setNetCashflowTrend3m',
        'net_cashflow_trend_6m' => 'setNetCashflowTrend6m',
        'net_cashflow_trend_12m' => 'setNetCashflowTrend12m'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'max_positive_3d' => 'getMaxPositive3d',
        'max_positive_1w' => 'getMaxPositive1w',
        'max_positive_1m' => 'getMaxPositive1m',
        'max_positive_3m' => 'getMaxPositive3m',
        'max_positive_6m' => 'getMaxPositive6m',
        'max_positive_12m' => 'getMaxPositive12m',
        'max_negative_3d' => 'getMaxNegative3d',
        'max_negative_1w' => 'getMaxNegative1w',
        'max_negative_1m' => 'getMaxNegative1m',
        'max_negative_3m' => 'getMaxNegative3m',
        'max_negative_6m' => 'getMaxNegative6m',
        'max_negative_12m' => 'getMaxNegative12m',
        'mean_positive_3d' => 'getMeanPositive3d',
        'mean_positive_1w' => 'getMeanPositive1w',
        'mean_positive_1m' => 'getMeanPositive1m',
        'mean_positive_3m' => 'getMeanPositive3m',
        'mean_positive_6m' => 'getMeanPositive6m',
        'mean_positive_12m' => 'getMeanPositive12m',
        'mean_negative_3d' => 'getMeanNegative3d',
        'mean_negative_1w' => 'getMeanNegative1w',
        'mean_negative_1m' => 'getMeanNegative1m',
        'mean_negative_3m' => 'getMeanNegative3m',
        'mean_negative_6m' => 'getMeanNegative6m',
        'mean_negative_12m' => 'getMeanNegative12m',
        'sum_positive_3d' => 'getSumPositive3d',
        'sum_positive_1w' => 'getSumPositive1w',
        'sum_positive_1m' => 'getSumPositive1m',
        'sum_positive_3m' => 'getSumPositive3m',
        'sum_positive_6m' => 'getSumPositive6m',
        'sum_positive_12m' => 'getSumPositive12m',
        'sum_positive_trend_3d' => 'getSumPositiveTrend3d',
        'sum_positive_trend_1w' => 'getSumPositiveTrend1w',
        'sum_positive_trend_1m' => 'getSumPositiveTrend1m',
        'sum_positive_trend_3m' => 'getSumPositiveTrend3m',
        'sum_positive_trend_6m' => 'getSumPositiveTrend6m',
        'sum_positive_trend_12m' => 'getSumPositiveTrend12m',
        'sum_negative_3d' => 'getSumNegative3d',
        'sum_negative_1w' => 'getSumNegative1w',
        'sum_negative_1m' => 'getSumNegative1m',
        'sum_negative_3m' => 'getSumNegative3m',
        'sum_negative_6m' => 'getSumNegative6m',
        'sum_negative_12m' => 'getSumNegative12m',
        'sum_negative_trend_3d' => 'getSumNegativeTrend3d',
        'sum_negative_trend_1w' => 'getSumNegativeTrend1w',
        'sum_negative_trend_1m' => 'getSumNegativeTrend1m',
        'sum_negative_trend_3m' => 'getSumNegativeTrend3m',
        'sum_negative_trend_6m' => 'getSumNegativeTrend6m',
        'sum_negative_trend_12m' => 'getSumNegativeTrend12m',
        'positive_to_negative_ratio_3d' => 'getPositiveToNegativeRatio3d',
        'positive_to_negative_ratio_1w' => 'getPositiveToNegativeRatio1w',
        'positive_to_negative_ratio_1m' => 'getPositiveToNegativeRatio1m',
        'positive_to_negative_ratio_3m' => 'getPositiveToNegativeRatio3m',
        'positive_to_negative_ratio_6m' => 'getPositiveToNegativeRatio6m',
        'positive_to_negative_ratio_12m' => 'getPositiveToNegativeRatio12m',
        'net_cashflow_3d' => 'getNetCashflow3d',
        'net_cashflow_1w' => 'getNetCashflow1w',
        'net_cashflow_1m' => 'getNetCashflow1m',
        'net_cashflow_3m' => 'getNetCashflow3m',
        'net_cashflow_6m' => 'getNetCashflow6m',
        'net_cashflow_12m' => 'getNetCashflow12m',
        'net_cashflow_trend_3d' => 'getNetCashflowTrend3d',
        'net_cashflow_trend_1w' => 'getNetCashflowTrend1w',
        'net_cashflow_trend_1m' => 'getNetCashflowTrend1m',
        'net_cashflow_trend_3m' => 'getNetCashflowTrend3m',
        'net_cashflow_trend_6m' => 'getNetCashflowTrend6m',
        'net_cashflow_trend_12m' => 'getNetCashflowTrend12m'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['max_positive_3d'] = isset($data['max_positive_3d']) ? $data['max_positive_3d'] : null;
        $this->container['max_positive_1w'] = isset($data['max_positive_1w']) ? $data['max_positive_1w'] : null;
        $this->container['max_positive_1m'] = isset($data['max_positive_1m']) ? $data['max_positive_1m'] : null;
        $this->container['max_positive_3m'] = isset($data['max_positive_3m']) ? $data['max_positive_3m'] : null;
        $this->container['max_positive_6m'] = isset($data['max_positive_6m']) ? $data['max_positive_6m'] : null;
        $this->container['max_positive_12m'] = isset($data['max_positive_12m']) ? $data['max_positive_12m'] : null;
        $this->container['max_negative_3d'] = isset($data['max_negative_3d']) ? $data['max_negative_3d'] : null;
        $this->container['max_negative_1w'] = isset($data['max_negative_1w']) ? $data['max_negative_1w'] : null;
        $this->container['max_negative_1m'] = isset($data['max_negative_1m']) ? $data['max_negative_1m'] : null;
        $this->container['max_negative_3m'] = isset($data['max_negative_3m']) ? $data['max_negative_3m'] : null;
        $this->container['max_negative_6m'] = isset($data['max_negative_6m']) ? $data['max_negative_6m'] : null;
        $this->container['max_negative_12m'] = isset($data['max_negative_12m']) ? $data['max_negative_12m'] : null;
        $this->container['mean_positive_3d'] = isset($data['mean_positive_3d']) ? $data['mean_positive_3d'] : null;
        $this->container['mean_positive_1w'] = isset($data['mean_positive_1w']) ? $data['mean_positive_1w'] : null;
        $this->container['mean_positive_1m'] = isset($data['mean_positive_1m']) ? $data['mean_positive_1m'] : null;
        $this->container['mean_positive_3m'] = isset($data['mean_positive_3m']) ? $data['mean_positive_3m'] : null;
        $this->container['mean_positive_6m'] = isset($data['mean_positive_6m']) ? $data['mean_positive_6m'] : null;
        $this->container['mean_positive_12m'] = isset($data['mean_positive_12m']) ? $data['mean_positive_12m'] : null;
        $this->container['mean_negative_3d'] = isset($data['mean_negative_3d']) ? $data['mean_negative_3d'] : null;
        $this->container['mean_negative_1w'] = isset($data['mean_negative_1w']) ? $data['mean_negative_1w'] : null;
        $this->container['mean_negative_1m'] = isset($data['mean_negative_1m']) ? $data['mean_negative_1m'] : null;
        $this->container['mean_negative_3m'] = isset($data['mean_negative_3m']) ? $data['mean_negative_3m'] : null;
        $this->container['mean_negative_6m'] = isset($data['mean_negative_6m']) ? $data['mean_negative_6m'] : null;
        $this->container['mean_negative_12m'] = isset($data['mean_negative_12m']) ? $data['mean_negative_12m'] : null;
        $this->container['sum_positive_3d'] = isset($data['sum_positive_3d']) ? $data['sum_positive_3d'] : null;
        $this->container['sum_positive_1w'] = isset($data['sum_positive_1w']) ? $data['sum_positive_1w'] : null;
        $this->container['sum_positive_1m'] = isset($data['sum_positive_1m']) ? $data['sum_positive_1m'] : null;
        $this->container['sum_positive_3m'] = isset($data['sum_positive_3m']) ? $data['sum_positive_3m'] : null;
        $this->container['sum_positive_6m'] = isset($data['sum_positive_6m']) ? $data['sum_positive_6m'] : null;
        $this->container['sum_positive_12m'] = isset($data['sum_positive_12m']) ? $data['sum_positive_12m'] : null;
        $this->container['sum_positive_trend_3d'] = isset($data['sum_positive_trend_3d']) ? $data['sum_positive_trend_3d'] : null;
        $this->container['sum_positive_trend_1w'] = isset($data['sum_positive_trend_1w']) ? $data['sum_positive_trend_1w'] : null;
        $this->container['sum_positive_trend_1m'] = isset($data['sum_positive_trend_1m']) ? $data['sum_positive_trend_1m'] : null;
        $this->container['sum_positive_trend_3m'] = isset($data['sum_positive_trend_3m']) ? $data['sum_positive_trend_3m'] : null;
        $this->container['sum_positive_trend_6m'] = isset($data['sum_positive_trend_6m']) ? $data['sum_positive_trend_6m'] : null;
        $this->container['sum_positive_trend_12m'] = isset($data['sum_positive_trend_12m']) ? $data['sum_positive_trend_12m'] : null;
        $this->container['sum_negative_3d'] = isset($data['sum_negative_3d']) ? $data['sum_negative_3d'] : null;
        $this->container['sum_negative_1w'] = isset($data['sum_negative_1w']) ? $data['sum_negative_1w'] : null;
        $this->container['sum_negative_1m'] = isset($data['sum_negative_1m']) ? $data['sum_negative_1m'] : null;
        $this->container['sum_negative_3m'] = isset($data['sum_negative_3m']) ? $data['sum_negative_3m'] : null;
        $this->container['sum_negative_6m'] = isset($data['sum_negative_6m']) ? $data['sum_negative_6m'] : null;
        $this->container['sum_negative_12m'] = isset($data['sum_negative_12m']) ? $data['sum_negative_12m'] : null;
        $this->container['sum_negative_trend_3d'] = isset($data['sum_negative_trend_3d']) ? $data['sum_negative_trend_3d'] : null;
        $this->container['sum_negative_trend_1w'] = isset($data['sum_negative_trend_1w']) ? $data['sum_negative_trend_1w'] : null;
        $this->container['sum_negative_trend_1m'] = isset($data['sum_negative_trend_1m']) ? $data['sum_negative_trend_1m'] : null;
        $this->container['sum_negative_trend_3m'] = isset($data['sum_negative_trend_3m']) ? $data['sum_negative_trend_3m'] : null;
        $this->container['sum_negative_trend_6m'] = isset($data['sum_negative_trend_6m']) ? $data['sum_negative_trend_6m'] : null;
        $this->container['sum_negative_trend_12m'] = isset($data['sum_negative_trend_12m']) ? $data['sum_negative_trend_12m'] : null;
        $this->container['positive_to_negative_ratio_3d'] = isset($data['positive_to_negative_ratio_3d']) ? $data['positive_to_negative_ratio_3d'] : null;
        $this->container['positive_to_negative_ratio_1w'] = isset($data['positive_to_negative_ratio_1w']) ? $data['positive_to_negative_ratio_1w'] : null;
        $this->container['positive_to_negative_ratio_1m'] = isset($data['positive_to_negative_ratio_1m']) ? $data['positive_to_negative_ratio_1m'] : null;
        $this->container['positive_to_negative_ratio_3m'] = isset($data['positive_to_negative_ratio_3m']) ? $data['positive_to_negative_ratio_3m'] : null;
        $this->container['positive_to_negative_ratio_6m'] = isset($data['positive_to_negative_ratio_6m']) ? $data['positive_to_negative_ratio_6m'] : null;
        $this->container['positive_to_negative_ratio_12m'] = isset($data['positive_to_negative_ratio_12m']) ? $data['positive_to_negative_ratio_12m'] : null;
        $this->container['net_cashflow_3d'] = isset($data['net_cashflow_3d']) ? $data['net_cashflow_3d'] : null;
        $this->container['net_cashflow_1w'] = isset($data['net_cashflow_1w']) ? $data['net_cashflow_1w'] : null;
        $this->container['net_cashflow_1m'] = isset($data['net_cashflow_1m']) ? $data['net_cashflow_1m'] : null;
        $this->container['net_cashflow_3m'] = isset($data['net_cashflow_3m']) ? $data['net_cashflow_3m'] : null;
        $this->container['net_cashflow_6m'] = isset($data['net_cashflow_6m']) ? $data['net_cashflow_6m'] : null;
        $this->container['net_cashflow_12m'] = isset($data['net_cashflow_12m']) ? $data['net_cashflow_12m'] : null;
        $this->container['net_cashflow_trend_3d'] = isset($data['net_cashflow_trend_3d']) ? $data['net_cashflow_trend_3d'] : null;
        $this->container['net_cashflow_trend_1w'] = isset($data['net_cashflow_trend_1w']) ? $data['net_cashflow_trend_1w'] : null;
        $this->container['net_cashflow_trend_1m'] = isset($data['net_cashflow_trend_1m']) ? $data['net_cashflow_trend_1m'] : null;
        $this->container['net_cashflow_trend_3m'] = isset($data['net_cashflow_trend_3m']) ? $data['net_cashflow_trend_3m'] : null;
        $this->container['net_cashflow_trend_6m'] = isset($data['net_cashflow_trend_6m']) ? $data['net_cashflow_trend_6m'] : null;
        $this->container['net_cashflow_trend_12m'] = isset($data['net_cashflow_trend_12m']) ? $data['net_cashflow_trend_12m'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['max_positive_3d'] === null) {
            $invalidProperties[] = "'max_positive_3d' can't be null";
        }
        if ($this->container['max_positive_1w'] === null) {
            $invalidProperties[] = "'max_positive_1w' can't be null";
        }
        if ($this->container['max_positive_1m'] === null) {
            $invalidProperties[] = "'max_positive_1m' can't be null";
        }
        if ($this->container['max_positive_3m'] === null) {
            $invalidProperties[] = "'max_positive_3m' can't be null";
        }
        if ($this->container['max_positive_6m'] === null) {
            $invalidProperties[] = "'max_positive_6m' can't be null";
        }
        if ($this->container['max_positive_12m'] === null) {
            $invalidProperties[] = "'max_positive_12m' can't be null";
        }
        if ($this->container['max_negative_3d'] === null) {
            $invalidProperties[] = "'max_negative_3d' can't be null";
        }
        if ($this->container['max_negative_1w'] === null) {
            $invalidProperties[] = "'max_negative_1w' can't be null";
        }
        if ($this->container['max_negative_1m'] === null) {
            $invalidProperties[] = "'max_negative_1m' can't be null";
        }
        if ($this->container['max_negative_3m'] === null) {
            $invalidProperties[] = "'max_negative_3m' can't be null";
        }
        if ($this->container['max_negative_6m'] === null) {
            $invalidProperties[] = "'max_negative_6m' can't be null";
        }
        if ($this->container['max_negative_12m'] === null) {
            $invalidProperties[] = "'max_negative_12m' can't be null";
        }
        if ($this->container['mean_positive_3d'] === null) {
            $invalidProperties[] = "'mean_positive_3d' can't be null";
        }
        if ($this->container['mean_positive_1w'] === null) {
            $invalidProperties[] = "'mean_positive_1w' can't be null";
        }
        if ($this->container['mean_positive_1m'] === null) {
            $invalidProperties[] = "'mean_positive_1m' can't be null";
        }
        if ($this->container['mean_positive_3m'] === null) {
            $invalidProperties[] = "'mean_positive_3m' can't be null";
        }
        if ($this->container['mean_positive_6m'] === null) {
            $invalidProperties[] = "'mean_positive_6m' can't be null";
        }
        if ($this->container['mean_positive_12m'] === null) {
            $invalidProperties[] = "'mean_positive_12m' can't be null";
        }
        if ($this->container['mean_negative_3d'] === null) {
            $invalidProperties[] = "'mean_negative_3d' can't be null";
        }
        if ($this->container['mean_negative_1w'] === null) {
            $invalidProperties[] = "'mean_negative_1w' can't be null";
        }
        if ($this->container['mean_negative_1m'] === null) {
            $invalidProperties[] = "'mean_negative_1m' can't be null";
        }
        if ($this->container['mean_negative_3m'] === null) {
            $invalidProperties[] = "'mean_negative_3m' can't be null";
        }
        if ($this->container['mean_negative_6m'] === null) {
            $invalidProperties[] = "'mean_negative_6m' can't be null";
        }
        if ($this->container['mean_negative_12m'] === null) {
            $invalidProperties[] = "'mean_negative_12m' can't be null";
        }
        if ($this->container['sum_positive_3d'] === null) {
            $invalidProperties[] = "'sum_positive_3d' can't be null";
        }
        if ($this->container['sum_positive_1w'] === null) {
            $invalidProperties[] = "'sum_positive_1w' can't be null";
        }
        if ($this->container['sum_positive_1m'] === null) {
            $invalidProperties[] = "'sum_positive_1m' can't be null";
        }
        if ($this->container['sum_positive_3m'] === null) {
            $invalidProperties[] = "'sum_positive_3m' can't be null";
        }
        if ($this->container['sum_positive_6m'] === null) {
            $invalidProperties[] = "'sum_positive_6m' can't be null";
        }
        if ($this->container['sum_positive_12m'] === null) {
            $invalidProperties[] = "'sum_positive_12m' can't be null";
        }
        if ($this->container['sum_positive_trend_3d'] === null) {
            $invalidProperties[] = "'sum_positive_trend_3d' can't be null";
        }
        if ($this->container['sum_positive_trend_1w'] === null) {
            $invalidProperties[] = "'sum_positive_trend_1w' can't be null";
        }
        if ($this->container['sum_positive_trend_1m'] === null) {
            $invalidProperties[] = "'sum_positive_trend_1m' can't be null";
        }
        if ($this->container['sum_positive_trend_3m'] === null) {
            $invalidProperties[] = "'sum_positive_trend_3m' can't be null";
        }
        if ($this->container['sum_positive_trend_6m'] === null) {
            $invalidProperties[] = "'sum_positive_trend_6m' can't be null";
        }
        if ($this->container['sum_positive_trend_12m'] === null) {
            $invalidProperties[] = "'sum_positive_trend_12m' can't be null";
        }
        if ($this->container['sum_negative_3d'] === null) {
            $invalidProperties[] = "'sum_negative_3d' can't be null";
        }
        if ($this->container['sum_negative_1w'] === null) {
            $invalidProperties[] = "'sum_negative_1w' can't be null";
        }
        if ($this->container['sum_negative_1m'] === null) {
            $invalidProperties[] = "'sum_negative_1m' can't be null";
        }
        if ($this->container['sum_negative_3m'] === null) {
            $invalidProperties[] = "'sum_negative_3m' can't be null";
        }
        if ($this->container['sum_negative_6m'] === null) {
            $invalidProperties[] = "'sum_negative_6m' can't be null";
        }
        if ($this->container['sum_negative_12m'] === null) {
            $invalidProperties[] = "'sum_negative_12m' can't be null";
        }
        if ($this->container['sum_negative_trend_3d'] === null) {
            $invalidProperties[] = "'sum_negative_trend_3d' can't be null";
        }
        if ($this->container['sum_negative_trend_1w'] === null) {
            $invalidProperties[] = "'sum_negative_trend_1w' can't be null";
        }
        if ($this->container['sum_negative_trend_1m'] === null) {
            $invalidProperties[] = "'sum_negative_trend_1m' can't be null";
        }
        if ($this->container['sum_negative_trend_3m'] === null) {
            $invalidProperties[] = "'sum_negative_trend_3m' can't be null";
        }
        if ($this->container['sum_negative_trend_6m'] === null) {
            $invalidProperties[] = "'sum_negative_trend_6m' can't be null";
        }
        if ($this->container['sum_negative_trend_12m'] === null) {
            $invalidProperties[] = "'sum_negative_trend_12m' can't be null";
        }
        if ($this->container['positive_to_negative_ratio_3d'] === null) {
            $invalidProperties[] = "'positive_to_negative_ratio_3d' can't be null";
        }
        if ($this->container['positive_to_negative_ratio_1w'] === null) {
            $invalidProperties[] = "'positive_to_negative_ratio_1w' can't be null";
        }
        if ($this->container['positive_to_negative_ratio_1m'] === null) {
            $invalidProperties[] = "'positive_to_negative_ratio_1m' can't be null";
        }
        if ($this->container['positive_to_negative_ratio_3m'] === null) {
            $invalidProperties[] = "'positive_to_negative_ratio_3m' can't be null";
        }
        if ($this->container['positive_to_negative_ratio_6m'] === null) {
            $invalidProperties[] = "'positive_to_negative_ratio_6m' can't be null";
        }
        if ($this->container['positive_to_negative_ratio_12m'] === null) {
            $invalidProperties[] = "'positive_to_negative_ratio_12m' can't be null";
        }
        if ($this->container['net_cashflow_3d'] === null) {
            $invalidProperties[] = "'net_cashflow_3d' can't be null";
        }
        if ($this->container['net_cashflow_1w'] === null) {
            $invalidProperties[] = "'net_cashflow_1w' can't be null";
        }
        if ($this->container['net_cashflow_1m'] === null) {
            $invalidProperties[] = "'net_cashflow_1m' can't be null";
        }
        if ($this->container['net_cashflow_3m'] === null) {
            $invalidProperties[] = "'net_cashflow_3m' can't be null";
        }
        if ($this->container['net_cashflow_6m'] === null) {
            $invalidProperties[] = "'net_cashflow_6m' can't be null";
        }
        if ($this->container['net_cashflow_12m'] === null) {
            $invalidProperties[] = "'net_cashflow_12m' can't be null";
        }
        if ($this->container['net_cashflow_trend_3d'] === null) {
            $invalidProperties[] = "'net_cashflow_trend_3d' can't be null";
        }
        if ($this->container['net_cashflow_trend_1w'] === null) {
            $invalidProperties[] = "'net_cashflow_trend_1w' can't be null";
        }
        if ($this->container['net_cashflow_trend_1m'] === null) {
            $invalidProperties[] = "'net_cashflow_trend_1m' can't be null";
        }
        if ($this->container['net_cashflow_trend_3m'] === null) {
            $invalidProperties[] = "'net_cashflow_trend_3m' can't be null";
        }
        if ($this->container['net_cashflow_trend_6m'] === null) {
            $invalidProperties[] = "'net_cashflow_trend_6m' can't be null";
        }
        if ($this->container['net_cashflow_trend_12m'] === null) {
            $invalidProperties[] = "'net_cashflow_trend_12m' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets max_positive_3d
     *
     * @return float
     */
    public function getMaxPositive3d()
    {
        return $this->container['max_positive_3d'];
    }

    /**
     * Sets max_positive_3d
     *
     * @param float $max_positive_3d The highest value of positive cash flow transactions in the last three days.
     *
     * @return $this
     */
    public function setMaxPositive3d($max_positive_3d)
    {
        $this->container['max_positive_3d'] = $max_positive_3d;

        return $this;
    }

    /**
     * Gets max_positive_1w
     *
     * @return float
     */
    public function getMaxPositive1w()
    {
        return $this->container['max_positive_1w'];
    }

    /**
     * Sets max_positive_1w
     *
     * @param float $max_positive_1w The highest value of positive cash flow transactions the last week.
     *
     * @return $this
     */
    public function setMaxPositive1w($max_positive_1w)
    {
        $this->container['max_positive_1w'] = $max_positive_1w;

        return $this;
    }

    /**
     * Gets max_positive_1m
     *
     * @return float
     */
    public function getMaxPositive1m()
    {
        return $this->container['max_positive_1m'];
    }

    /**
     * Sets max_positive_1m
     *
     * @param float $max_positive_1m The highest value of positive cash flow transactions the last month.
     *
     * @return $this
     */
    public function setMaxPositive1m($max_positive_1m)
    {
        $this->container['max_positive_1m'] = $max_positive_1m;

        return $this;
    }

    /**
     * Gets max_positive_3m
     *
     * @return float
     */
    public function getMaxPositive3m()
    {
        return $this->container['max_positive_3m'];
    }

    /**
     * Sets max_positive_3m
     *
     * @param float $max_positive_3m The highest value of positive cash flow transactions the last three months.
     *
     * @return $this
     */
    public function setMaxPositive3m($max_positive_3m)
    {
        $this->container['max_positive_3m'] = $max_positive_3m;

        return $this;
    }

    /**
     * Gets max_positive_6m
     *
     * @return float
     */
    public function getMaxPositive6m()
    {
        return $this->container['max_positive_6m'];
    }

    /**
     * Sets max_positive_6m
     *
     * @param float $max_positive_6m The highest value of positive cash flow transactions the last six months.
     *
     * @return $this
     */
    public function setMaxPositive6m($max_positive_6m)
    {
        $this->container['max_positive_6m'] = $max_positive_6m;

        return $this;
    }

    /**
     * Gets max_positive_12m
     *
     * @return float
     */
    public function getMaxPositive12m()
    {
        return $this->container['max_positive_12m'];
    }

    /**
     * Sets max_positive_12m
     *
     * @param float $max_positive_12m The highest value of positive cash flow transactions the last twelve months.
     *
     * @return $this
     */
    public function setMaxPositive12m($max_positive_12m)
    {
        $this->container['max_positive_12m'] = $max_positive_12m;

        return $this;
    }

    /**
     * Gets max_negative_3d
     *
     * @return float
     */
    public function getMaxNegative3d()
    {
        return $this->container['max_negative_3d'];
    }

    /**
     * Sets max_negative_3d
     *
     * @param float $max_negative_3d The highest value of negative cash flow transactions in the last three days.
     *
     * @return $this
     */
    public function setMaxNegative3d($max_negative_3d)
    {
        $this->container['max_negative_3d'] = $max_negative_3d;

        return $this;
    }

    /**
     * Gets max_negative_1w
     *
     * @return float
     */
    public function getMaxNegative1w()
    {
        return $this->container['max_negative_1w'];
    }

    /**
     * Sets max_negative_1w
     *
     * @param float $max_negative_1w The highest value of negative cash flow transactions in the last week.
     *
     * @return $this
     */
    public function setMaxNegative1w($max_negative_1w)
    {
        $this->container['max_negative_1w'] = $max_negative_1w;

        return $this;
    }

    /**
     * Gets max_negative_1m
     *
     * @return float
     */
    public function getMaxNegative1m()
    {
        return $this->container['max_negative_1m'];
    }

    /**
     * Sets max_negative_1m
     *
     * @param float $max_negative_1m The highest value of negative cash flow transactions in the last month.
     *
     * @return $this
     */
    public function setMaxNegative1m($max_negative_1m)
    {
        $this->container['max_negative_1m'] = $max_negative_1m;

        return $this;
    }

    /**
     * Gets max_negative_3m
     *
     * @return float
     */
    public function getMaxNegative3m()
    {
        return $this->container['max_negative_3m'];
    }

    /**
     * Sets max_negative_3m
     *
     * @param float $max_negative_3m The highest value of negative cash flow transactions in the last three months.
     *
     * @return $this
     */
    public function setMaxNegative3m($max_negative_3m)
    {
        $this->container['max_negative_3m'] = $max_negative_3m;

        return $this;
    }

    /**
     * Gets max_negative_6m
     *
     * @return float
     */
    public function getMaxNegative6m()
    {
        return $this->container['max_negative_6m'];
    }

    /**
     * Sets max_negative_6m
     *
     * @param float $max_negative_6m The highest value of negative cash flow transactions in the last six months.
     *
     * @return $this
     */
    public function setMaxNegative6m($max_negative_6m)
    {
        $this->container['max_negative_6m'] = $max_negative_6m;

        return $this;
    }

    /**
     * Gets max_negative_12m
     *
     * @return float
     */
    public function getMaxNegative12m()
    {
        return $this->container['max_negative_12m'];
    }

    /**
     * Sets max_negative_12m
     *
     * @param float $max_negative_12m The highest value of negative cash flow transactions in the last twelve months.
     *
     * @return $this
     */
    public function setMaxNegative12m($max_negative_12m)
    {
        $this->container['max_negative_12m'] = $max_negative_12m;

        return $this;
    }

    /**
     * Gets mean_positive_3d
     *
     * @return float
     */
    public function getMeanPositive3d()
    {
        return $this->container['mean_positive_3d'];
    }

    /**
     * Sets mean_positive_3d
     *
     * @param float $mean_positive_3d The mean value of the positive cash flow transactions in the last three days.
     *
     * @return $this
     */
    public function setMeanPositive3d($mean_positive_3d)
    {
        $this->container['mean_positive_3d'] = $mean_positive_3d;

        return $this;
    }

    /**
     * Gets mean_positive_1w
     *
     * @return float
     */
    public function getMeanPositive1w()
    {
        return $this->container['mean_positive_1w'];
    }

    /**
     * Sets mean_positive_1w
     *
     * @param float $mean_positive_1w The mean value of the positive cash flow transactions in the last week.
     *
     * @return $this
     */
    public function setMeanPositive1w($mean_positive_1w)
    {
        $this->container['mean_positive_1w'] = $mean_positive_1w;

        return $this;
    }

    /**
     * Gets mean_positive_1m
     *
     * @return float
     */
    public function getMeanPositive1m()
    {
        return $this->container['mean_positive_1m'];
    }

    /**
     * Sets mean_positive_1m
     *
     * @param float $mean_positive_1m The mean value of the positive cash flow transactions in the last month.
     *
     * @return $this
     */
    public function setMeanPositive1m($mean_positive_1m)
    {
        $this->container['mean_positive_1m'] = $mean_positive_1m;

        return $this;
    }

    /**
     * Gets mean_positive_3m
     *
     * @return float
     */
    public function getMeanPositive3m()
    {
        return $this->container['mean_positive_3m'];
    }

    /**
     * Sets mean_positive_3m
     *
     * @param float $mean_positive_3m The mean value of the positive cash flow transactions in the last three months.
     *
     * @return $this
     */
    public function setMeanPositive3m($mean_positive_3m)
    {
        $this->container['mean_positive_3m'] = $mean_positive_3m;

        return $this;
    }

    /**
     * Gets mean_positive_6m
     *
     * @return float
     */
    public function getMeanPositive6m()
    {
        return $this->container['mean_positive_6m'];
    }

    /**
     * Sets mean_positive_6m
     *
     * @param float $mean_positive_6m The mean value of the positive cash flow transactions in the last six months.
     *
     * @return $this
     */
    public function setMeanPositive6m($mean_positive_6m)
    {
        $this->container['mean_positive_6m'] = $mean_positive_6m;

        return $this;
    }

    /**
     * Gets mean_positive_12m
     *
     * @return float
     */
    public function getMeanPositive12m()
    {
        return $this->container['mean_positive_12m'];
    }

    /**
     * Sets mean_positive_12m
     *
     * @param float $mean_positive_12m The mean value of the positive cash flow transactions in the last twelve months.
     *
     * @return $this
     */
    public function setMeanPositive12m($mean_positive_12m)
    {
        $this->container['mean_positive_12m'] = $mean_positive_12m;

        return $this;
    }

    /**
     * Gets mean_negative_3d
     *
     * @return float
     */
    public function getMeanNegative3d()
    {
        return $this->container['mean_negative_3d'];
    }

    /**
     * Sets mean_negative_3d
     *
     * @param float $mean_negative_3d The mean value of the negative cash flow transactions in the last three days.
     *
     * @return $this
     */
    public function setMeanNegative3d($mean_negative_3d)
    {
        $this->container['mean_negative_3d'] = $mean_negative_3d;

        return $this;
    }

    /**
     * Gets mean_negative_1w
     *
     * @return float
     */
    public function getMeanNegative1w()
    {
        return $this->container['mean_negative_1w'];
    }

    /**
     * Sets mean_negative_1w
     *
     * @param float $mean_negative_1w The mean value of the negative cash flow transactions in the last week.
     *
     * @return $this
     */
    public function setMeanNegative1w($mean_negative_1w)
    {
        $this->container['mean_negative_1w'] = $mean_negative_1w;

        return $this;
    }

    /**
     * Gets mean_negative_1m
     *
     * @return float
     */
    public function getMeanNegative1m()
    {
        return $this->container['mean_negative_1m'];
    }

    /**
     * Sets mean_negative_1m
     *
     * @param float $mean_negative_1m The mean value of the negative cash flow transactions in the last month.
     *
     * @return $this
     */
    public function setMeanNegative1m($mean_negative_1m)
    {
        $this->container['mean_negative_1m'] = $mean_negative_1m;

        return $this;
    }

    /**
     * Gets mean_negative_3m
     *
     * @return float
     */
    public function getMeanNegative3m()
    {
        return $this->container['mean_negative_3m'];
    }

    /**
     * Sets mean_negative_3m
     *
     * @param float $mean_negative_3m The mean value of the negative cash flow transactions in the last three months.
     *
     * @return $this
     */
    public function setMeanNegative3m($mean_negative_3m)
    {
        $this->container['mean_negative_3m'] = $mean_negative_3m;

        return $this;
    }

    /**
     * Gets mean_negative_6m
     *
     * @return float
     */
    public function getMeanNegative6m()
    {
        return $this->container['mean_negative_6m'];
    }

    /**
     * Sets mean_negative_6m
     *
     * @param float $mean_negative_6m The mean value of the negative cash flow transactions in the last six months.
     *
     * @return $this
     */
    public function setMeanNegative6m($mean_negative_6m)
    {
        $this->container['mean_negative_6m'] = $mean_negative_6m;

        return $this;
    }

    /**
     * Gets mean_negative_12m
     *
     * @return float
     */
    public function getMeanNegative12m()
    {
        return $this->container['mean_negative_12m'];
    }

    /**
     * Sets mean_negative_12m
     *
     * @param float $mean_negative_12m The mean value of the negative cash flow transactions in the last twelve months.
     *
     * @return $this
     */
    public function setMeanNegative12m($mean_negative_12m)
    {
        $this->container['mean_negative_12m'] = $mean_negative_12m;

        return $this;
    }

    /**
     * Gets sum_positive_3d
     *
     * @return float
     */
    public function getSumPositive3d()
    {
        return $this->container['sum_positive_3d'];
    }

    /**
     * Sets sum_positive_3d
     *
     * @param float $sum_positive_3d The sum total of all transactions leading to a positive cash flow in the last three days.
     *
     * @return $this
     */
    public function setSumPositive3d($sum_positive_3d)
    {
        $this->container['sum_positive_3d'] = $sum_positive_3d;

        return $this;
    }

    /**
     * Gets sum_positive_1w
     *
     * @return float
     */
    public function getSumPositive1w()
    {
        return $this->container['sum_positive_1w'];
    }

    /**
     * Sets sum_positive_1w
     *
     * @param float $sum_positive_1w The sum total of all transactions leading to a positive cash flow in the last week.
     *
     * @return $this
     */
    public function setSumPositive1w($sum_positive_1w)
    {
        $this->container['sum_positive_1w'] = $sum_positive_1w;

        return $this;
    }

    /**
     * Gets sum_positive_1m
     *
     * @return float
     */
    public function getSumPositive1m()
    {
        return $this->container['sum_positive_1m'];
    }

    /**
     * Sets sum_positive_1m
     *
     * @param float $sum_positive_1m The sum total of all transactions leading to a positive cash flow in the last month.
     *
     * @return $this
     */
    public function setSumPositive1m($sum_positive_1m)
    {
        $this->container['sum_positive_1m'] = $sum_positive_1m;

        return $this;
    }

    /**
     * Gets sum_positive_3m
     *
     * @return float
     */
    public function getSumPositive3m()
    {
        return $this->container['sum_positive_3m'];
    }

    /**
     * Sets sum_positive_3m
     *
     * @param float $sum_positive_3m The sum total of all transactions leading to a positive cash flow in the last three months.
     *
     * @return $this
     */
    public function setSumPositive3m($sum_positive_3m)
    {
        $this->container['sum_positive_3m'] = $sum_positive_3m;

        return $this;
    }

    /**
     * Gets sum_positive_6m
     *
     * @return float
     */
    public function getSumPositive6m()
    {
        return $this->container['sum_positive_6m'];
    }

    /**
     * Sets sum_positive_6m
     *
     * @param float $sum_positive_6m The sum total of all transactions leading to a positive cash flow in the last six months.
     *
     * @return $this
     */
    public function setSumPositive6m($sum_positive_6m)
    {
        $this->container['sum_positive_6m'] = $sum_positive_6m;

        return $this;
    }

    /**
     * Gets sum_positive_12m
     *
     * @return float
     */
    public function getSumPositive12m()
    {
        return $this->container['sum_positive_12m'];
    }

    /**
     * Sets sum_positive_12m
     *
     * @param float $sum_positive_12m The sum total of all transactions leading to a positive cash flow in the last twelve months.
     *
     * @return $this
     */
    public function setSumPositive12m($sum_positive_12m)
    {
        $this->container['sum_positive_12m'] = $sum_positive_12m;

        return $this;
    }

    /**
     * Gets sum_positive_trend_3d
     *
     * @return float
     */
    public function getSumPositiveTrend3d()
    {
        return $this->container['sum_positive_trend_3d'];
    }

    /**
     * Sets sum_positive_trend_3d
     *
     * @param float $sum_positive_trend_3d The positive cash flow trend based on the sum of all positive transactions in the last three days.
     *
     * @return $this
     */
    public function setSumPositiveTrend3d($sum_positive_trend_3d)
    {
        $this->container['sum_positive_trend_3d'] = $sum_positive_trend_3d;

        return $this;
    }

    /**
     * Gets sum_positive_trend_1w
     *
     * @return float
     */
    public function getSumPositiveTrend1w()
    {
        return $this->container['sum_positive_trend_1w'];
    }

    /**
     * Sets sum_positive_trend_1w
     *
     * @param float $sum_positive_trend_1w The positive cash flow trend based on the sum of all positive transactions in the last week.
     *
     * @return $this
     */
    public function setSumPositiveTrend1w($sum_positive_trend_1w)
    {
        $this->container['sum_positive_trend_1w'] = $sum_positive_trend_1w;

        return $this;
    }

    /**
     * Gets sum_positive_trend_1m
     *
     * @return float
     */
    public function getSumPositiveTrend1m()
    {
        return $this->container['sum_positive_trend_1m'];
    }

    /**
     * Sets sum_positive_trend_1m
     *
     * @param float $sum_positive_trend_1m The positive cash flow trend based on the sum of all positive transactions in the last month.
     *
     * @return $this
     */
    public function setSumPositiveTrend1m($sum_positive_trend_1m)
    {
        $this->container['sum_positive_trend_1m'] = $sum_positive_trend_1m;

        return $this;
    }

    /**
     * Gets sum_positive_trend_3m
     *
     * @return float
     */
    public function getSumPositiveTrend3m()
    {
        return $this->container['sum_positive_trend_3m'];
    }

    /**
     * Sets sum_positive_trend_3m
     *
     * @param float $sum_positive_trend_3m The positive cash flow trend based on the sum of all positive transactions in the last three months.
     *
     * @return $this
     */
    public function setSumPositiveTrend3m($sum_positive_trend_3m)
    {
        $this->container['sum_positive_trend_3m'] = $sum_positive_trend_3m;

        return $this;
    }

    /**
     * Gets sum_positive_trend_6m
     *
     * @return float
     */
    public function getSumPositiveTrend6m()
    {
        return $this->container['sum_positive_trend_6m'];
    }

    /**
     * Sets sum_positive_trend_6m
     *
     * @param float $sum_positive_trend_6m The positive cash flow trend based on the sum of all positive transactions in the last six months.
     *
     * @return $this
     */
    public function setSumPositiveTrend6m($sum_positive_trend_6m)
    {
        $this->container['sum_positive_trend_6m'] = $sum_positive_trend_6m;

        return $this;
    }

    /**
     * Gets sum_positive_trend_12m
     *
     * @return float
     */
    public function getSumPositiveTrend12m()
    {
        return $this->container['sum_positive_trend_12m'];
    }

    /**
     * Sets sum_positive_trend_12m
     *
     * @param float $sum_positive_trend_12m The positive cash flow trend based on the sum of all positive transactions in the last twelve months.
     *
     * @return $this
     */
    public function setSumPositiveTrend12m($sum_positive_trend_12m)
    {
        $this->container['sum_positive_trend_12m'] = $sum_positive_trend_12m;

        return $this;
    }

    /**
     * Gets sum_negative_3d
     *
     * @return float
     */
    public function getSumNegative3d()
    {
        return $this->container['sum_negative_3d'];
    }

    /**
     * Sets sum_negative_3d
     *
     * @param float $sum_negative_3d The sum total of all transactions leading to a negative cash flow in the last three days.
     *
     * @return $this
     */
    public function setSumNegative3d($sum_negative_3d)
    {
        $this->container['sum_negative_3d'] = $sum_negative_3d;

        return $this;
    }

    /**
     * Gets sum_negative_1w
     *
     * @return float
     */
    public function getSumNegative1w()
    {
        return $this->container['sum_negative_1w'];
    }

    /**
     * Sets sum_negative_1w
     *
     * @param float $sum_negative_1w The sum total of all transactions leading to a negative cash flow in the last week.
     *
     * @return $this
     */
    public function setSumNegative1w($sum_negative_1w)
    {
        $this->container['sum_negative_1w'] = $sum_negative_1w;

        return $this;
    }

    /**
     * Gets sum_negative_1m
     *
     * @return float
     */
    public function getSumNegative1m()
    {
        return $this->container['sum_negative_1m'];
    }

    /**
     * Sets sum_negative_1m
     *
     * @param float $sum_negative_1m The sum total of all transactions leading to a negative cash flow in the last month.
     *
     * @return $this
     */
    public function setSumNegative1m($sum_negative_1m)
    {
        $this->container['sum_negative_1m'] = $sum_negative_1m;

        return $this;
    }

    /**
     * Gets sum_negative_3m
     *
     * @return float
     */
    public function getSumNegative3m()
    {
        return $this->container['sum_negative_3m'];
    }

    /**
     * Sets sum_negative_3m
     *
     * @param float $sum_negative_3m The sum total of all transactions leading to a negative cash flow in the last three months.
     *
     * @return $this
     */
    public function setSumNegative3m($sum_negative_3m)
    {
        $this->container['sum_negative_3m'] = $sum_negative_3m;

        return $this;
    }

    /**
     * Gets sum_negative_6m
     *
     * @return float
     */
    public function getSumNegative6m()
    {
        return $this->container['sum_negative_6m'];
    }

    /**
     * Sets sum_negative_6m
     *
     * @param float $sum_negative_6m The sum total of all transactions leading to a negative cash flow in the last six months.
     *
     * @return $this
     */
    public function setSumNegative6m($sum_negative_6m)
    {
        $this->container['sum_negative_6m'] = $sum_negative_6m;

        return $this;
    }

    /**
     * Gets sum_negative_12m
     *
     * @return float
     */
    public function getSumNegative12m()
    {
        return $this->container['sum_negative_12m'];
    }

    /**
     * Sets sum_negative_12m
     *
     * @param float $sum_negative_12m The sum total of all transactions leading to a negative cash flow in the last twelve months.
     *
     * @return $this
     */
    public function setSumNegative12m($sum_negative_12m)
    {
        $this->container['sum_negative_12m'] = $sum_negative_12m;

        return $this;
    }

    /**
     * Gets sum_negative_trend_3d
     *
     * @return float
     */
    public function getSumNegativeTrend3d()
    {
        return $this->container['sum_negative_trend_3d'];
    }

    /**
     * Sets sum_negative_trend_3d
     *
     * @param float $sum_negative_trend_3d The negative cash flow trend based on the sum of all negative transactions in the last three days.
     *
     * @return $this
     */
    public function setSumNegativeTrend3d($sum_negative_trend_3d)
    {
        $this->container['sum_negative_trend_3d'] = $sum_negative_trend_3d;

        return $this;
    }

    /**
     * Gets sum_negative_trend_1w
     *
     * @return float
     */
    public function getSumNegativeTrend1w()
    {
        return $this->container['sum_negative_trend_1w'];
    }

    /**
     * Sets sum_negative_trend_1w
     *
     * @param float $sum_negative_trend_1w The negative cash flow trend based on the sum of all negative transactions in the last week.
     *
     * @return $this
     */
    public function setSumNegativeTrend1w($sum_negative_trend_1w)
    {
        $this->container['sum_negative_trend_1w'] = $sum_negative_trend_1w;

        return $this;
    }

    /**
     * Gets sum_negative_trend_1m
     *
     * @return float
     */
    public function getSumNegativeTrend1m()
    {
        return $this->container['sum_negative_trend_1m'];
    }

    /**
     * Sets sum_negative_trend_1m
     *
     * @param float $sum_negative_trend_1m The negative cash flow trend based on the sum of all negative transactions in the last month.
     *
     * @return $this
     */
    public function setSumNegativeTrend1m($sum_negative_trend_1m)
    {
        $this->container['sum_negative_trend_1m'] = $sum_negative_trend_1m;

        return $this;
    }

    /**
     * Gets sum_negative_trend_3m
     *
     * @return float
     */
    public function getSumNegativeTrend3m()
    {
        return $this->container['sum_negative_trend_3m'];
    }

    /**
     * Sets sum_negative_trend_3m
     *
     * @param float $sum_negative_trend_3m The negative cash flow trend based on the sum of all negative transactions in the last three months.
     *
     * @return $this
     */
    public function setSumNegativeTrend3m($sum_negative_trend_3m)
    {
        $this->container['sum_negative_trend_3m'] = $sum_negative_trend_3m;

        return $this;
    }

    /**
     * Gets sum_negative_trend_6m
     *
     * @return float
     */
    public function getSumNegativeTrend6m()
    {
        return $this->container['sum_negative_trend_6m'];
    }

    /**
     * Sets sum_negative_trend_6m
     *
     * @param float $sum_negative_trend_6m The negative cash flow trend based on the sum of all negative transactions in the last six months.
     *
     * @return $this
     */
    public function setSumNegativeTrend6m($sum_negative_trend_6m)
    {
        $this->container['sum_negative_trend_6m'] = $sum_negative_trend_6m;

        return $this;
    }

    /**
     * Gets sum_negative_trend_12m
     *
     * @return float
     */
    public function getSumNegativeTrend12m()
    {
        return $this->container['sum_negative_trend_12m'];
    }

    /**
     * Sets sum_negative_trend_12m
     *
     * @param float $sum_negative_trend_12m The negative cash flow trend based on the sum of all negative transactions in the last twelve months.
     *
     * @return $this
     */
    public function setSumNegativeTrend12m($sum_negative_trend_12m)
    {
        $this->container['sum_negative_trend_12m'] = $sum_negative_trend_12m;

        return $this;
    }

    /**
     * Gets positive_to_negative_ratio_3d
     *
     * @return float
     */
    public function getPositiveToNegativeRatio3d()
    {
        return $this->container['positive_to_negative_ratio_3d'];
    }

    /**
     * Sets positive_to_negative_ratio_3d
     *
     * @param float $positive_to_negative_ratio_3d The ratio between sum_positive / sum_negative  in the last three days.  ℹ️ If the ratio is greater than `1`, it means that the user has more income than outgoing, indicating that they spend less than they earn.  **Note**: In the case that there have been no outgoing transactions, the value will be `null`.
     *
     * @return $this
     */
    public function setPositiveToNegativeRatio3d($positive_to_negative_ratio_3d)
    {
        $this->container['positive_to_negative_ratio_3d'] = $positive_to_negative_ratio_3d;

        return $this;
    }

    /**
     * Gets positive_to_negative_ratio_1w
     *
     * @return float
     */
    public function getPositiveToNegativeRatio1w()
    {
        return $this->container['positive_to_negative_ratio_1w'];
    }

    /**
     * Sets positive_to_negative_ratio_1w
     *
     * @param float $positive_to_negative_ratio_1w The ratio between sum_positive / sum_negative  in the last week.  ℹ️ If the ratio is greater than `1`, it means that the user has more income than outgoing, indicating that they spend less than they earn.  **Note**: In the case that there have been no outgoing transactions, the value will be `null`.
     *
     * @return $this
     */
    public function setPositiveToNegativeRatio1w($positive_to_negative_ratio_1w)
    {
        $this->container['positive_to_negative_ratio_1w'] = $positive_to_negative_ratio_1w;

        return $this;
    }

    /**
     * Gets positive_to_negative_ratio_1m
     *
     * @return float
     */
    public function getPositiveToNegativeRatio1m()
    {
        return $this->container['positive_to_negative_ratio_1m'];
    }

    /**
     * Sets positive_to_negative_ratio_1m
     *
     * @param float $positive_to_negative_ratio_1m The ratio between sum_positive / sum_negative  in the last month.  ℹ️ If the ratio is greater than `1`, it means that the user has more income than outgoing, indicating that they spend less than they earn.  **Note**: In the case that there have been no outgoing transactions, the value will be `null`.
     *
     * @return $this
     */
    public function setPositiveToNegativeRatio1m($positive_to_negative_ratio_1m)
    {
        $this->container['positive_to_negative_ratio_1m'] = $positive_to_negative_ratio_1m;

        return $this;
    }

    /**
     * Gets positive_to_negative_ratio_3m
     *
     * @return float
     */
    public function getPositiveToNegativeRatio3m()
    {
        return $this->container['positive_to_negative_ratio_3m'];
    }

    /**
     * Sets positive_to_negative_ratio_3m
     *
     * @param float $positive_to_negative_ratio_3m The ratio between sum_positive / sum_negative  in the last three months.  ℹ️ If the ratio is greater than `1`, it means that the user has more income than outgoing, indicating that they spend less than they earn.  **Note**: In the case that there have been no outgoing transactions, the value will be `null`.
     *
     * @return $this
     */
    public function setPositiveToNegativeRatio3m($positive_to_negative_ratio_3m)
    {
        $this->container['positive_to_negative_ratio_3m'] = $positive_to_negative_ratio_3m;

        return $this;
    }

    /**
     * Gets positive_to_negative_ratio_6m
     *
     * @return float
     */
    public function getPositiveToNegativeRatio6m()
    {
        return $this->container['positive_to_negative_ratio_6m'];
    }

    /**
     * Sets positive_to_negative_ratio_6m
     *
     * @param float $positive_to_negative_ratio_6m The ratio between sum_positive / sum_negative  in the last six months.  ℹ️ If the ratio is greater than `1`, it means that the user has more income than outgoing, indicating that they spend less than they earn.  **Note**: In the case that there have been no outgoing transactions, the value will be `null`.
     *
     * @return $this
     */
    public function setPositiveToNegativeRatio6m($positive_to_negative_ratio_6m)
    {
        $this->container['positive_to_negative_ratio_6m'] = $positive_to_negative_ratio_6m;

        return $this;
    }

    /**
     * Gets positive_to_negative_ratio_12m
     *
     * @return float
     */
    public function getPositiveToNegativeRatio12m()
    {
        return $this->container['positive_to_negative_ratio_12m'];
    }

    /**
     * Sets positive_to_negative_ratio_12m
     *
     * @param float $positive_to_negative_ratio_12m The ratio between sum_positive / sum_negative  in the last twelve months.  ℹ️ If the ratio is greater than `1`, it means that the user has more income than outgoing, indicating that they spend less than they earn.  **Note**: In the case that there have been no outgoing transactions, the value will be `null`.
     *
     * @return $this
     */
    public function setPositiveToNegativeRatio12m($positive_to_negative_ratio_12m)
    {
        $this->container['positive_to_negative_ratio_12m'] = $positive_to_negative_ratio_12m;

        return $this;
    }

    /**
     * Gets net_cashflow_3d
     *
     * @return float
     */
    public function getNetCashflow3d()
    {
        return $this->container['net_cashflow_3d'];
    }

    /**
     * Sets net_cashflow_3d
     *
     * @param float $net_cashflow_3d The net cash flow in the last three days.
     *
     * @return $this
     */
    public function setNetCashflow3d($net_cashflow_3d)
    {
        $this->container['net_cashflow_3d'] = $net_cashflow_3d;

        return $this;
    }

    /**
     * Gets net_cashflow_1w
     *
     * @return float
     */
    public function getNetCashflow1w()
    {
        return $this->container['net_cashflow_1w'];
    }

    /**
     * Sets net_cashflow_1w
     *
     * @param float $net_cashflow_1w The net cash flow in the last week.
     *
     * @return $this
     */
    public function setNetCashflow1w($net_cashflow_1w)
    {
        $this->container['net_cashflow_1w'] = $net_cashflow_1w;

        return $this;
    }

    /**
     * Gets net_cashflow_1m
     *
     * @return float
     */
    public function getNetCashflow1m()
    {
        return $this->container['net_cashflow_1m'];
    }

    /**
     * Sets net_cashflow_1m
     *
     * @param float $net_cashflow_1m The net cash flow in the last month.
     *
     * @return $this
     */
    public function setNetCashflow1m($net_cashflow_1m)
    {
        $this->container['net_cashflow_1m'] = $net_cashflow_1m;

        return $this;
    }

    /**
     * Gets net_cashflow_3m
     *
     * @return float
     */
    public function getNetCashflow3m()
    {
        return $this->container['net_cashflow_3m'];
    }

    /**
     * Sets net_cashflow_3m
     *
     * @param float $net_cashflow_3m The net cash flow in the last three months.
     *
     * @return $this
     */
    public function setNetCashflow3m($net_cashflow_3m)
    {
        $this->container['net_cashflow_3m'] = $net_cashflow_3m;

        return $this;
    }

    /**
     * Gets net_cashflow_6m
     *
     * @return float
     */
    public function getNetCashflow6m()
    {
        return $this->container['net_cashflow_6m'];
    }

    /**
     * Sets net_cashflow_6m
     *
     * @param float $net_cashflow_6m The net cash flow in the last six months.
     *
     * @return $this
     */
    public function setNetCashflow6m($net_cashflow_6m)
    {
        $this->container['net_cashflow_6m'] = $net_cashflow_6m;

        return $this;
    }

    /**
     * Gets net_cashflow_12m
     *
     * @return float
     */
    public function getNetCashflow12m()
    {
        return $this->container['net_cashflow_12m'];
    }

    /**
     * Sets net_cashflow_12m
     *
     * @param float $net_cashflow_12m The net cash flow in the last twelve months.
     *
     * @return $this
     */
    public function setNetCashflow12m($net_cashflow_12m)
    {
        $this->container['net_cashflow_12m'] = $net_cashflow_12m;

        return $this;
    }

    /**
     * Gets net_cashflow_trend_3d
     *
     * @return float
     */
    public function getNetCashflowTrend3d()
    {
        return $this->container['net_cashflow_trend_3d'];
    }

    /**
     * Sets net_cashflow_trend_3d
     *
     * @param float $net_cashflow_trend_3d The net cash flow trend in the last three days months.
     *
     * @return $this
     */
    public function setNetCashflowTrend3d($net_cashflow_trend_3d)
    {
        $this->container['net_cashflow_trend_3d'] = $net_cashflow_trend_3d;

        return $this;
    }

    /**
     * Gets net_cashflow_trend_1w
     *
     * @return float
     */
    public function getNetCashflowTrend1w()
    {
        return $this->container['net_cashflow_trend_1w'];
    }

    /**
     * Sets net_cashflow_trend_1w
     *
     * @param float $net_cashflow_trend_1w The net cash flow trend in the last week.
     *
     * @return $this
     */
    public function setNetCashflowTrend1w($net_cashflow_trend_1w)
    {
        $this->container['net_cashflow_trend_1w'] = $net_cashflow_trend_1w;

        return $this;
    }

    /**
     * Gets net_cashflow_trend_1m
     *
     * @return float
     */
    public function getNetCashflowTrend1m()
    {
        return $this->container['net_cashflow_trend_1m'];
    }

    /**
     * Sets net_cashflow_trend_1m
     *
     * @param float $net_cashflow_trend_1m The net cash flow trend in the last month.
     *
     * @return $this
     */
    public function setNetCashflowTrend1m($net_cashflow_trend_1m)
    {
        $this->container['net_cashflow_trend_1m'] = $net_cashflow_trend_1m;

        return $this;
    }

    /**
     * Gets net_cashflow_trend_3m
     *
     * @return float
     */
    public function getNetCashflowTrend3m()
    {
        return $this->container['net_cashflow_trend_3m'];
    }

    /**
     * Sets net_cashflow_trend_3m
     *
     * @param float $net_cashflow_trend_3m The net cash flow trend in the last three months.
     *
     * @return $this
     */
    public function setNetCashflowTrend3m($net_cashflow_trend_3m)
    {
        $this->container['net_cashflow_trend_3m'] = $net_cashflow_trend_3m;

        return $this;
    }

    /**
     * Gets net_cashflow_trend_6m
     *
     * @return float
     */
    public function getNetCashflowTrend6m()
    {
        return $this->container['net_cashflow_trend_6m'];
    }

    /**
     * Sets net_cashflow_trend_6m
     *
     * @param float $net_cashflow_trend_6m The net cash flow trend in the last six months.
     *
     * @return $this
     */
    public function setNetCashflowTrend6m($net_cashflow_trend_6m)
    {
        $this->container['net_cashflow_trend_6m'] = $net_cashflow_trend_6m;

        return $this;
    }

    /**
     * Gets net_cashflow_trend_12m
     *
     * @return float
     */
    public function getNetCashflowTrend12m()
    {
        return $this->container['net_cashflow_trend_12m'];
    }

    /**
     * Sets net_cashflow_trend_12m
     *
     * @param float $net_cashflow_trend_12m The net cash flow trend in the last twelve months.
     *
     * @return $this
     */
    public function setNetCashflowTrend12m($net_cashflow_trend_12m)
    {
        $this->container['net_cashflow_trend_12m'] = $net_cashflow_trend_12m;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
