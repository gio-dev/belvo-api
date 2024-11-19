<?php
/**
 * RiskInsightsBalanceMetrics
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
 * RiskInsightsBalanceMetrics Class Doc Comment
 *
 * @category Class
 * @description Balance metrics calculated based on the user&#x27;s balances from checking and savings accounts.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RiskInsightsBalanceMetrics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RiskInsightsBalanceMetrics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'closing_balance' => 'float',
        'min_balance_3d' => 'float',
        'min_balance_1w' => 'float',
        'min_balance_1m' => 'float',
        'min_balance_3m' => 'float',
        'min_balance_6m' => 'float',
        'min_balance_12m' => 'float',
        'mean_balance_3d' => 'float',
        'mean_balance_1w' => 'float',
        'mean_balance_1m' => 'float',
        'mean_balance_3m' => 'float',
        'mean_balance_6m' => 'float',
        'mean_balance_12m' => 'float',
        'max_balance_3d' => 'float',
        'max_balance_1w' => 'float',
        'max_balance_1m' => 'float',
        'max_balance_3m' => 'float',
        'max_balance_6m' => 'float',
        'max_balance_12m' => 'float',
        'std_balance_3d' => 'float',
        'std_balance_1w' => 'float',
        'std_balance_1m' => 'float',
        'std_balance_3m' => 'float',
        'std_balance_6m' => 'float',
        'std_balance_12m' => 'float',
        'balance_trend_3d' => 'float',
        'balance_trend_1w' => 'float',
        'balance_trend_1m' => 'float',
        'balance_trend_3m' => 'float',
        'balance_trend_6m' => 'float',
        'balance_trend_12m' => 'float',
        'days_balance_below_0_3d' => 'int',
        'days_balance_below_0_1w' => 'int',
        'days_balance_below_0_1m' => 'int',
        'days_balance_below_0_3m' => 'int',
        'days_balance_below_0_6m' => 'int',
        'days_balance_below_0_12m' => 'int',
        'days_balance_below_mean_3d' => 'int',
        'days_balance_below_mean_1w' => 'int',
        'days_balance_below_mean_1m' => 'int',
        'days_balance_below_mean_3m' => 'int',
        'days_balance_below_mean_6m' => 'int',
        'days_balance_below_mean_12m' => 'int',
        'days_balance_below_x_3d' => 'int',
        'days_balance_below_x_1w' => 'int',
        'days_balance_below_x_1m' => 'int',
        'days_balance_below_x_3m' => 'int',
        'days_balance_below_x_6m' => 'int',
        'days_balance_below_x_12m' => 'int',
        'balance_threshold_x' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'closing_balance' => 'float',
        'min_balance_3d' => 'float',
        'min_balance_1w' => 'float',
        'min_balance_1m' => 'float',
        'min_balance_3m' => 'float',
        'min_balance_6m' => 'float',
        'min_balance_12m' => 'float',
        'mean_balance_3d' => 'float',
        'mean_balance_1w' => 'float',
        'mean_balance_1m' => 'float',
        'mean_balance_3m' => 'float',
        'mean_balance_6m' => 'float',
        'mean_balance_12m' => 'float',
        'max_balance_3d' => 'float',
        'max_balance_1w' => 'float',
        'max_balance_1m' => 'float',
        'max_balance_3m' => 'float',
        'max_balance_6m' => 'float',
        'max_balance_12m' => 'float',
        'std_balance_3d' => 'float',
        'std_balance_1w' => 'float',
        'std_balance_1m' => 'float',
        'std_balance_3m' => 'float',
        'std_balance_6m' => 'float',
        'std_balance_12m' => 'float',
        'balance_trend_3d' => 'float',
        'balance_trend_1w' => 'float',
        'balance_trend_1m' => 'float',
        'balance_trend_3m' => 'float',
        'balance_trend_6m' => 'float',
        'balance_trend_12m' => 'float',
        'days_balance_below_0_3d' => 'int32',
        'days_balance_below_0_1w' => 'int32',
        'days_balance_below_0_1m' => 'int32',
        'days_balance_below_0_3m' => 'int32',
        'days_balance_below_0_6m' => 'int32',
        'days_balance_below_0_12m' => 'int32',
        'days_balance_below_mean_3d' => 'int32',
        'days_balance_below_mean_1w' => 'int32',
        'days_balance_below_mean_1m' => 'int32',
        'days_balance_below_mean_3m' => 'int32',
        'days_balance_below_mean_6m' => 'int32',
        'days_balance_below_mean_12m' => 'int32',
        'days_balance_below_x_3d' => 'int32',
        'days_balance_below_x_1w' => 'int32',
        'days_balance_below_x_1m' => 'int32',
        'days_balance_below_x_3m' => 'int32',
        'days_balance_below_x_6m' => 'int32',
        'days_balance_below_x_12m' => 'int32',
        'balance_threshold_x' => 'float'
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
        'closing_balance' => 'closing_balance',
        'min_balance_3d' => 'min_balance_3d',
        'min_balance_1w' => 'min_balance_1w',
        'min_balance_1m' => 'min_balance_1m',
        'min_balance_3m' => 'min_balance_3m',
        'min_balance_6m' => 'min_balance_6m',
        'min_balance_12m' => 'min_balance_12m',
        'mean_balance_3d' => 'mean_balance_3d',
        'mean_balance_1w' => 'mean_balance_1w',
        'mean_balance_1m' => 'mean_balance_1m',
        'mean_balance_3m' => 'mean_balance_3m',
        'mean_balance_6m' => 'mean_balance_6m',
        'mean_balance_12m' => 'mean_balance_12m',
        'max_balance_3d' => 'max_balance_3d',
        'max_balance_1w' => 'max_balance_1w',
        'max_balance_1m' => 'max_balance_1m',
        'max_balance_3m' => 'max_balance_3m',
        'max_balance_6m' => 'max_balance_6m',
        'max_balance_12m' => 'max_balance_12m',
        'std_balance_3d' => 'std_balance_3d',
        'std_balance_1w' => 'std_balance_1w',
        'std_balance_1m' => 'std_balance_1m',
        'std_balance_3m' => 'std_balance_3m',
        'std_balance_6m' => 'std_balance_6m',
        'std_balance_12m' => 'std_balance_12m',
        'balance_trend_3d' => 'balance_trend_3d',
        'balance_trend_1w' => 'balance_trend_1w',
        'balance_trend_1m' => 'balance_trend_1m',
        'balance_trend_3m' => 'balance_trend_3m',
        'balance_trend_6m' => 'balance_trend_6m',
        'balance_trend_12m' => 'balance_trend_12m',
        'days_balance_below_0_3d' => 'days_balance_below_0_3d',
        'days_balance_below_0_1w' => 'days_balance_below_0_1w',
        'days_balance_below_0_1m' => 'days_balance_below_0_1m',
        'days_balance_below_0_3m' => 'days_balance_below_0_3m',
        'days_balance_below_0_6m' => 'days_balance_below_0_6m',
        'days_balance_below_0_12m' => 'days_balance_below_0_12m',
        'days_balance_below_mean_3d' => 'days_balance_below_mean_3d',
        'days_balance_below_mean_1w' => 'days_balance_below_mean_1w',
        'days_balance_below_mean_1m' => 'days_balance_below_mean_1m',
        'days_balance_below_mean_3m' => 'days_balance_below_mean_3m',
        'days_balance_below_mean_6m' => 'days_balance_below_mean_6m',
        'days_balance_below_mean_12m' => 'days_balance_below_mean_12m',
        'days_balance_below_x_3d' => 'days_balance_below_x_3d',
        'days_balance_below_x_1w' => 'days_balance_below_x_1w',
        'days_balance_below_x_1m' => 'days_balance_below_x_1m',
        'days_balance_below_x_3m' => 'days_balance_below_x_3m',
        'days_balance_below_x_6m' => 'days_balance_below_x_6m',
        'days_balance_below_x_12m' => 'days_balance_below_x_12m',
        'balance_threshold_x' => 'balance_threshold_x'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'closing_balance' => 'setClosingBalance',
        'min_balance_3d' => 'setMinBalance3d',
        'min_balance_1w' => 'setMinBalance1w',
        'min_balance_1m' => 'setMinBalance1m',
        'min_balance_3m' => 'setMinBalance3m',
        'min_balance_6m' => 'setMinBalance6m',
        'min_balance_12m' => 'setMinBalance12m',
        'mean_balance_3d' => 'setMeanBalance3d',
        'mean_balance_1w' => 'setMeanBalance1w',
        'mean_balance_1m' => 'setMeanBalance1m',
        'mean_balance_3m' => 'setMeanBalance3m',
        'mean_balance_6m' => 'setMeanBalance6m',
        'mean_balance_12m' => 'setMeanBalance12m',
        'max_balance_3d' => 'setMaxBalance3d',
        'max_balance_1w' => 'setMaxBalance1w',
        'max_balance_1m' => 'setMaxBalance1m',
        'max_balance_3m' => 'setMaxBalance3m',
        'max_balance_6m' => 'setMaxBalance6m',
        'max_balance_12m' => 'setMaxBalance12m',
        'std_balance_3d' => 'setStdBalance3d',
        'std_balance_1w' => 'setStdBalance1w',
        'std_balance_1m' => 'setStdBalance1m',
        'std_balance_3m' => 'setStdBalance3m',
        'std_balance_6m' => 'setStdBalance6m',
        'std_balance_12m' => 'setStdBalance12m',
        'balance_trend_3d' => 'setBalanceTrend3d',
        'balance_trend_1w' => 'setBalanceTrend1w',
        'balance_trend_1m' => 'setBalanceTrend1m',
        'balance_trend_3m' => 'setBalanceTrend3m',
        'balance_trend_6m' => 'setBalanceTrend6m',
        'balance_trend_12m' => 'setBalanceTrend12m',
        'days_balance_below_0_3d' => 'setDaysBalanceBelow03d',
        'days_balance_below_0_1w' => 'setDaysBalanceBelow01w',
        'days_balance_below_0_1m' => 'setDaysBalanceBelow01m',
        'days_balance_below_0_3m' => 'setDaysBalanceBelow03m',
        'days_balance_below_0_6m' => 'setDaysBalanceBelow06m',
        'days_balance_below_0_12m' => 'setDaysBalanceBelow012m',
        'days_balance_below_mean_3d' => 'setDaysBalanceBelowMean3d',
        'days_balance_below_mean_1w' => 'setDaysBalanceBelowMean1w',
        'days_balance_below_mean_1m' => 'setDaysBalanceBelowMean1m',
        'days_balance_below_mean_3m' => 'setDaysBalanceBelowMean3m',
        'days_balance_below_mean_6m' => 'setDaysBalanceBelowMean6m',
        'days_balance_below_mean_12m' => 'setDaysBalanceBelowMean12m',
        'days_balance_below_x_3d' => 'setDaysBalanceBelowX3d',
        'days_balance_below_x_1w' => 'setDaysBalanceBelowX1w',
        'days_balance_below_x_1m' => 'setDaysBalanceBelowX1m',
        'days_balance_below_x_3m' => 'setDaysBalanceBelowX3m',
        'days_balance_below_x_6m' => 'setDaysBalanceBelowX6m',
        'days_balance_below_x_12m' => 'setDaysBalanceBelowX12m',
        'balance_threshold_x' => 'setBalanceThresholdX'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'closing_balance' => 'getClosingBalance',
        'min_balance_3d' => 'getMinBalance3d',
        'min_balance_1w' => 'getMinBalance1w',
        'min_balance_1m' => 'getMinBalance1m',
        'min_balance_3m' => 'getMinBalance3m',
        'min_balance_6m' => 'getMinBalance6m',
        'min_balance_12m' => 'getMinBalance12m',
        'mean_balance_3d' => 'getMeanBalance3d',
        'mean_balance_1w' => 'getMeanBalance1w',
        'mean_balance_1m' => 'getMeanBalance1m',
        'mean_balance_3m' => 'getMeanBalance3m',
        'mean_balance_6m' => 'getMeanBalance6m',
        'mean_balance_12m' => 'getMeanBalance12m',
        'max_balance_3d' => 'getMaxBalance3d',
        'max_balance_1w' => 'getMaxBalance1w',
        'max_balance_1m' => 'getMaxBalance1m',
        'max_balance_3m' => 'getMaxBalance3m',
        'max_balance_6m' => 'getMaxBalance6m',
        'max_balance_12m' => 'getMaxBalance12m',
        'std_balance_3d' => 'getStdBalance3d',
        'std_balance_1w' => 'getStdBalance1w',
        'std_balance_1m' => 'getStdBalance1m',
        'std_balance_3m' => 'getStdBalance3m',
        'std_balance_6m' => 'getStdBalance6m',
        'std_balance_12m' => 'getStdBalance12m',
        'balance_trend_3d' => 'getBalanceTrend3d',
        'balance_trend_1w' => 'getBalanceTrend1w',
        'balance_trend_1m' => 'getBalanceTrend1m',
        'balance_trend_3m' => 'getBalanceTrend3m',
        'balance_trend_6m' => 'getBalanceTrend6m',
        'balance_trend_12m' => 'getBalanceTrend12m',
        'days_balance_below_0_3d' => 'getDaysBalanceBelow03d',
        'days_balance_below_0_1w' => 'getDaysBalanceBelow01w',
        'days_balance_below_0_1m' => 'getDaysBalanceBelow01m',
        'days_balance_below_0_3m' => 'getDaysBalanceBelow03m',
        'days_balance_below_0_6m' => 'getDaysBalanceBelow06m',
        'days_balance_below_0_12m' => 'getDaysBalanceBelow012m',
        'days_balance_below_mean_3d' => 'getDaysBalanceBelowMean3d',
        'days_balance_below_mean_1w' => 'getDaysBalanceBelowMean1w',
        'days_balance_below_mean_1m' => 'getDaysBalanceBelowMean1m',
        'days_balance_below_mean_3m' => 'getDaysBalanceBelowMean3m',
        'days_balance_below_mean_6m' => 'getDaysBalanceBelowMean6m',
        'days_balance_below_mean_12m' => 'getDaysBalanceBelowMean12m',
        'days_balance_below_x_3d' => 'getDaysBalanceBelowX3d',
        'days_balance_below_x_1w' => 'getDaysBalanceBelowX1w',
        'days_balance_below_x_1m' => 'getDaysBalanceBelowX1m',
        'days_balance_below_x_3m' => 'getDaysBalanceBelowX3m',
        'days_balance_below_x_6m' => 'getDaysBalanceBelowX6m',
        'days_balance_below_x_12m' => 'getDaysBalanceBelowX12m',
        'balance_threshold_x' => 'getBalanceThresholdX'
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
        $this->container['closing_balance'] = isset($data['closing_balance']) ? $data['closing_balance'] : null;
        $this->container['min_balance_3d'] = isset($data['min_balance_3d']) ? $data['min_balance_3d'] : null;
        $this->container['min_balance_1w'] = isset($data['min_balance_1w']) ? $data['min_balance_1w'] : null;
        $this->container['min_balance_1m'] = isset($data['min_balance_1m']) ? $data['min_balance_1m'] : null;
        $this->container['min_balance_3m'] = isset($data['min_balance_3m']) ? $data['min_balance_3m'] : null;
        $this->container['min_balance_6m'] = isset($data['min_balance_6m']) ? $data['min_balance_6m'] : null;
        $this->container['min_balance_12m'] = isset($data['min_balance_12m']) ? $data['min_balance_12m'] : null;
        $this->container['mean_balance_3d'] = isset($data['mean_balance_3d']) ? $data['mean_balance_3d'] : null;
        $this->container['mean_balance_1w'] = isset($data['mean_balance_1w']) ? $data['mean_balance_1w'] : null;
        $this->container['mean_balance_1m'] = isset($data['mean_balance_1m']) ? $data['mean_balance_1m'] : null;
        $this->container['mean_balance_3m'] = isset($data['mean_balance_3m']) ? $data['mean_balance_3m'] : null;
        $this->container['mean_balance_6m'] = isset($data['mean_balance_6m']) ? $data['mean_balance_6m'] : null;
        $this->container['mean_balance_12m'] = isset($data['mean_balance_12m']) ? $data['mean_balance_12m'] : null;
        $this->container['max_balance_3d'] = isset($data['max_balance_3d']) ? $data['max_balance_3d'] : null;
        $this->container['max_balance_1w'] = isset($data['max_balance_1w']) ? $data['max_balance_1w'] : null;
        $this->container['max_balance_1m'] = isset($data['max_balance_1m']) ? $data['max_balance_1m'] : null;
        $this->container['max_balance_3m'] = isset($data['max_balance_3m']) ? $data['max_balance_3m'] : null;
        $this->container['max_balance_6m'] = isset($data['max_balance_6m']) ? $data['max_balance_6m'] : null;
        $this->container['max_balance_12m'] = isset($data['max_balance_12m']) ? $data['max_balance_12m'] : null;
        $this->container['std_balance_3d'] = isset($data['std_balance_3d']) ? $data['std_balance_3d'] : null;
        $this->container['std_balance_1w'] = isset($data['std_balance_1w']) ? $data['std_balance_1w'] : null;
        $this->container['std_balance_1m'] = isset($data['std_balance_1m']) ? $data['std_balance_1m'] : null;
        $this->container['std_balance_3m'] = isset($data['std_balance_3m']) ? $data['std_balance_3m'] : null;
        $this->container['std_balance_6m'] = isset($data['std_balance_6m']) ? $data['std_balance_6m'] : null;
        $this->container['std_balance_12m'] = isset($data['std_balance_12m']) ? $data['std_balance_12m'] : null;
        $this->container['balance_trend_3d'] = isset($data['balance_trend_3d']) ? $data['balance_trend_3d'] : null;
        $this->container['balance_trend_1w'] = isset($data['balance_trend_1w']) ? $data['balance_trend_1w'] : null;
        $this->container['balance_trend_1m'] = isset($data['balance_trend_1m']) ? $data['balance_trend_1m'] : null;
        $this->container['balance_trend_3m'] = isset($data['balance_trend_3m']) ? $data['balance_trend_3m'] : null;
        $this->container['balance_trend_6m'] = isset($data['balance_trend_6m']) ? $data['balance_trend_6m'] : null;
        $this->container['balance_trend_12m'] = isset($data['balance_trend_12m']) ? $data['balance_trend_12m'] : null;
        $this->container['days_balance_below_0_3d'] = isset($data['days_balance_below_0_3d']) ? $data['days_balance_below_0_3d'] : null;
        $this->container['days_balance_below_0_1w'] = isset($data['days_balance_below_0_1w']) ? $data['days_balance_below_0_1w'] : null;
        $this->container['days_balance_below_0_1m'] = isset($data['days_balance_below_0_1m']) ? $data['days_balance_below_0_1m'] : null;
        $this->container['days_balance_below_0_3m'] = isset($data['days_balance_below_0_3m']) ? $data['days_balance_below_0_3m'] : null;
        $this->container['days_balance_below_0_6m'] = isset($data['days_balance_below_0_6m']) ? $data['days_balance_below_0_6m'] : null;
        $this->container['days_balance_below_0_12m'] = isset($data['days_balance_below_0_12m']) ? $data['days_balance_below_0_12m'] : null;
        $this->container['days_balance_below_mean_3d'] = isset($data['days_balance_below_mean_3d']) ? $data['days_balance_below_mean_3d'] : null;
        $this->container['days_balance_below_mean_1w'] = isset($data['days_balance_below_mean_1w']) ? $data['days_balance_below_mean_1w'] : null;
        $this->container['days_balance_below_mean_1m'] = isset($data['days_balance_below_mean_1m']) ? $data['days_balance_below_mean_1m'] : null;
        $this->container['days_balance_below_mean_3m'] = isset($data['days_balance_below_mean_3m']) ? $data['days_balance_below_mean_3m'] : null;
        $this->container['days_balance_below_mean_6m'] = isset($data['days_balance_below_mean_6m']) ? $data['days_balance_below_mean_6m'] : null;
        $this->container['days_balance_below_mean_12m'] = isset($data['days_balance_below_mean_12m']) ? $data['days_balance_below_mean_12m'] : null;
        $this->container['days_balance_below_x_3d'] = isset($data['days_balance_below_x_3d']) ? $data['days_balance_below_x_3d'] : null;
        $this->container['days_balance_below_x_1w'] = isset($data['days_balance_below_x_1w']) ? $data['days_balance_below_x_1w'] : null;
        $this->container['days_balance_below_x_1m'] = isset($data['days_balance_below_x_1m']) ? $data['days_balance_below_x_1m'] : null;
        $this->container['days_balance_below_x_3m'] = isset($data['days_balance_below_x_3m']) ? $data['days_balance_below_x_3m'] : null;
        $this->container['days_balance_below_x_6m'] = isset($data['days_balance_below_x_6m']) ? $data['days_balance_below_x_6m'] : null;
        $this->container['days_balance_below_x_12m'] = isset($data['days_balance_below_x_12m']) ? $data['days_balance_below_x_12m'] : null;
        $this->container['balance_threshold_x'] = isset($data['balance_threshold_x']) ? $data['balance_threshold_x'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['closing_balance'] === null) {
            $invalidProperties[] = "'closing_balance' can't be null";
        }
        if ($this->container['min_balance_3d'] === null) {
            $invalidProperties[] = "'min_balance_3d' can't be null";
        }
        if ($this->container['min_balance_1w'] === null) {
            $invalidProperties[] = "'min_balance_1w' can't be null";
        }
        if ($this->container['min_balance_1m'] === null) {
            $invalidProperties[] = "'min_balance_1m' can't be null";
        }
        if ($this->container['min_balance_3m'] === null) {
            $invalidProperties[] = "'min_balance_3m' can't be null";
        }
        if ($this->container['min_balance_6m'] === null) {
            $invalidProperties[] = "'min_balance_6m' can't be null";
        }
        if ($this->container['min_balance_12m'] === null) {
            $invalidProperties[] = "'min_balance_12m' can't be null";
        }
        if ($this->container['mean_balance_3d'] === null) {
            $invalidProperties[] = "'mean_balance_3d' can't be null";
        }
        if ($this->container['mean_balance_1w'] === null) {
            $invalidProperties[] = "'mean_balance_1w' can't be null";
        }
        if ($this->container['mean_balance_1m'] === null) {
            $invalidProperties[] = "'mean_balance_1m' can't be null";
        }
        if ($this->container['mean_balance_3m'] === null) {
            $invalidProperties[] = "'mean_balance_3m' can't be null";
        }
        if ($this->container['mean_balance_6m'] === null) {
            $invalidProperties[] = "'mean_balance_6m' can't be null";
        }
        if ($this->container['mean_balance_12m'] === null) {
            $invalidProperties[] = "'mean_balance_12m' can't be null";
        }
        if ($this->container['max_balance_3d'] === null) {
            $invalidProperties[] = "'max_balance_3d' can't be null";
        }
        if ($this->container['max_balance_1w'] === null) {
            $invalidProperties[] = "'max_balance_1w' can't be null";
        }
        if ($this->container['max_balance_1m'] === null) {
            $invalidProperties[] = "'max_balance_1m' can't be null";
        }
        if ($this->container['max_balance_3m'] === null) {
            $invalidProperties[] = "'max_balance_3m' can't be null";
        }
        if ($this->container['max_balance_6m'] === null) {
            $invalidProperties[] = "'max_balance_6m' can't be null";
        }
        if ($this->container['max_balance_12m'] === null) {
            $invalidProperties[] = "'max_balance_12m' can't be null";
        }
        if ($this->container['std_balance_3d'] === null) {
            $invalidProperties[] = "'std_balance_3d' can't be null";
        }
        if ($this->container['std_balance_1w'] === null) {
            $invalidProperties[] = "'std_balance_1w' can't be null";
        }
        if ($this->container['std_balance_1m'] === null) {
            $invalidProperties[] = "'std_balance_1m' can't be null";
        }
        if ($this->container['std_balance_3m'] === null) {
            $invalidProperties[] = "'std_balance_3m' can't be null";
        }
        if ($this->container['std_balance_6m'] === null) {
            $invalidProperties[] = "'std_balance_6m' can't be null";
        }
        if ($this->container['std_balance_12m'] === null) {
            $invalidProperties[] = "'std_balance_12m' can't be null";
        }
        if ($this->container['balance_trend_3d'] === null) {
            $invalidProperties[] = "'balance_trend_3d' can't be null";
        }
        if ($this->container['balance_trend_1w'] === null) {
            $invalidProperties[] = "'balance_trend_1w' can't be null";
        }
        if ($this->container['balance_trend_1m'] === null) {
            $invalidProperties[] = "'balance_trend_1m' can't be null";
        }
        if ($this->container['balance_trend_3m'] === null) {
            $invalidProperties[] = "'balance_trend_3m' can't be null";
        }
        if ($this->container['balance_trend_6m'] === null) {
            $invalidProperties[] = "'balance_trend_6m' can't be null";
        }
        if ($this->container['balance_trend_12m'] === null) {
            $invalidProperties[] = "'balance_trend_12m' can't be null";
        }
        if ($this->container['days_balance_below_0_3d'] === null) {
            $invalidProperties[] = "'days_balance_below_0_3d' can't be null";
        }
        if ($this->container['days_balance_below_0_1w'] === null) {
            $invalidProperties[] = "'days_balance_below_0_1w' can't be null";
        }
        if ($this->container['days_balance_below_0_1m'] === null) {
            $invalidProperties[] = "'days_balance_below_0_1m' can't be null";
        }
        if ($this->container['days_balance_below_0_3m'] === null) {
            $invalidProperties[] = "'days_balance_below_0_3m' can't be null";
        }
        if ($this->container['days_balance_below_0_6m'] === null) {
            $invalidProperties[] = "'days_balance_below_0_6m' can't be null";
        }
        if ($this->container['days_balance_below_0_12m'] === null) {
            $invalidProperties[] = "'days_balance_below_0_12m' can't be null";
        }
        if ($this->container['days_balance_below_mean_3d'] === null) {
            $invalidProperties[] = "'days_balance_below_mean_3d' can't be null";
        }
        if ($this->container['days_balance_below_mean_1w'] === null) {
            $invalidProperties[] = "'days_balance_below_mean_1w' can't be null";
        }
        if ($this->container['days_balance_below_mean_1m'] === null) {
            $invalidProperties[] = "'days_balance_below_mean_1m' can't be null";
        }
        if ($this->container['days_balance_below_mean_3m'] === null) {
            $invalidProperties[] = "'days_balance_below_mean_3m' can't be null";
        }
        if ($this->container['days_balance_below_mean_6m'] === null) {
            $invalidProperties[] = "'days_balance_below_mean_6m' can't be null";
        }
        if ($this->container['days_balance_below_mean_12m'] === null) {
            $invalidProperties[] = "'days_balance_below_mean_12m' can't be null";
        }
        if ($this->container['days_balance_below_x_3d'] === null) {
            $invalidProperties[] = "'days_balance_below_x_3d' can't be null";
        }
        if ($this->container['days_balance_below_x_1w'] === null) {
            $invalidProperties[] = "'days_balance_below_x_1w' can't be null";
        }
        if ($this->container['days_balance_below_x_1m'] === null) {
            $invalidProperties[] = "'days_balance_below_x_1m' can't be null";
        }
        if ($this->container['days_balance_below_x_3m'] === null) {
            $invalidProperties[] = "'days_balance_below_x_3m' can't be null";
        }
        if ($this->container['days_balance_below_x_6m'] === null) {
            $invalidProperties[] = "'days_balance_below_x_6m' can't be null";
        }
        if ($this->container['days_balance_below_x_12m'] === null) {
            $invalidProperties[] = "'days_balance_below_x_12m' can't be null";
        }
        if ($this->container['balance_threshold_x'] === null) {
            $invalidProperties[] = "'balance_threshold_x' can't be null";
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
     * Gets closing_balance
     *
     * @return float
     */
    public function getClosingBalance()
    {
        return $this->container['closing_balance'];
    }

    /**
     * Sets closing_balance
     *
     * @param float $closing_balance The balance of all the accounts at the `collected_at` time.
     *
     * @return $this
     */
    public function setClosingBalance($closing_balance)
    {
        $this->container['closing_balance'] = $closing_balance;

        return $this;
    }

    /**
     * Gets min_balance_3d
     *
     * @return float
     */
    public function getMinBalance3d()
    {
        return $this->container['min_balance_3d'];
    }

    /**
     * Sets min_balance_3d
     *
     * @param float $min_balance_3d The minimum balance in the last three days.
     *
     * @return $this
     */
    public function setMinBalance3d($min_balance_3d)
    {
        $this->container['min_balance_3d'] = $min_balance_3d;

        return $this;
    }

    /**
     * Gets min_balance_1w
     *
     * @return float
     */
    public function getMinBalance1w()
    {
        return $this->container['min_balance_1w'];
    }

    /**
     * Sets min_balance_1w
     *
     * @param float $min_balance_1w The minimum balance in the last week).
     *
     * @return $this
     */
    public function setMinBalance1w($min_balance_1w)
    {
        $this->container['min_balance_1w'] = $min_balance_1w;

        return $this;
    }

    /**
     * Gets min_balance_1m
     *
     * @return float
     */
    public function getMinBalance1m()
    {
        return $this->container['min_balance_1m'];
    }

    /**
     * Sets min_balance_1m
     *
     * @param float $min_balance_1m The minimum balance in the last month.
     *
     * @return $this
     */
    public function setMinBalance1m($min_balance_1m)
    {
        $this->container['min_balance_1m'] = $min_balance_1m;

        return $this;
    }

    /**
     * Gets min_balance_3m
     *
     * @return float
     */
    public function getMinBalance3m()
    {
        return $this->container['min_balance_3m'];
    }

    /**
     * Sets min_balance_3m
     *
     * @param float $min_balance_3m The minimum balance in the last three months.
     *
     * @return $this
     */
    public function setMinBalance3m($min_balance_3m)
    {
        $this->container['min_balance_3m'] = $min_balance_3m;

        return $this;
    }

    /**
     * Gets min_balance_6m
     *
     * @return float
     */
    public function getMinBalance6m()
    {
        return $this->container['min_balance_6m'];
    }

    /**
     * Sets min_balance_6m
     *
     * @param float $min_balance_6m The minimum balance in the six last months.
     *
     * @return $this
     */
    public function setMinBalance6m($min_balance_6m)
    {
        $this->container['min_balance_6m'] = $min_balance_6m;

        return $this;
    }

    /**
     * Gets min_balance_12m
     *
     * @return float
     */
    public function getMinBalance12m()
    {
        return $this->container['min_balance_12m'];
    }

    /**
     * Sets min_balance_12m
     *
     * @param float $min_balance_12m The minimum balance in the last twelve months.
     *
     * @return $this
     */
    public function setMinBalance12m($min_balance_12m)
    {
        $this->container['min_balance_12m'] = $min_balance_12m;

        return $this;
    }

    /**
     * Gets mean_balance_3d
     *
     * @return float
     */
    public function getMeanBalance3d()
    {
        return $this->container['mean_balance_3d'];
    }

    /**
     * Sets mean_balance_3d
     *
     * @param float $mean_balance_3d The mean balance in the last three days.
     *
     * @return $this
     */
    public function setMeanBalance3d($mean_balance_3d)
    {
        $this->container['mean_balance_3d'] = $mean_balance_3d;

        return $this;
    }

    /**
     * Gets mean_balance_1w
     *
     * @return float
     */
    public function getMeanBalance1w()
    {
        return $this->container['mean_balance_1w'];
    }

    /**
     * Sets mean_balance_1w
     *
     * @param float $mean_balance_1w The mean balance in the last week.
     *
     * @return $this
     */
    public function setMeanBalance1w($mean_balance_1w)
    {
        $this->container['mean_balance_1w'] = $mean_balance_1w;

        return $this;
    }

    /**
     * Gets mean_balance_1m
     *
     * @return float
     */
    public function getMeanBalance1m()
    {
        return $this->container['mean_balance_1m'];
    }

    /**
     * Sets mean_balance_1m
     *
     * @param float $mean_balance_1m The mean balance in the last month.
     *
     * @return $this
     */
    public function setMeanBalance1m($mean_balance_1m)
    {
        $this->container['mean_balance_1m'] = $mean_balance_1m;

        return $this;
    }

    /**
     * Gets mean_balance_3m
     *
     * @return float
     */
    public function getMeanBalance3m()
    {
        return $this->container['mean_balance_3m'];
    }

    /**
     * Sets mean_balance_3m
     *
     * @param float $mean_balance_3m The mean balance in the last three months.
     *
     * @return $this
     */
    public function setMeanBalance3m($mean_balance_3m)
    {
        $this->container['mean_balance_3m'] = $mean_balance_3m;

        return $this;
    }

    /**
     * Gets mean_balance_6m
     *
     * @return float
     */
    public function getMeanBalance6m()
    {
        return $this->container['mean_balance_6m'];
    }

    /**
     * Sets mean_balance_6m
     *
     * @param float $mean_balance_6m The mean balance in the last six months.
     *
     * @return $this
     */
    public function setMeanBalance6m($mean_balance_6m)
    {
        $this->container['mean_balance_6m'] = $mean_balance_6m;

        return $this;
    }

    /**
     * Gets mean_balance_12m
     *
     * @return float
     */
    public function getMeanBalance12m()
    {
        return $this->container['mean_balance_12m'];
    }

    /**
     * Sets mean_balance_12m
     *
     * @param float $mean_balance_12m The mean balance in the last twelve months.
     *
     * @return $this
     */
    public function setMeanBalance12m($mean_balance_12m)
    {
        $this->container['mean_balance_12m'] = $mean_balance_12m;

        return $this;
    }

    /**
     * Gets max_balance_3d
     *
     * @return float
     */
    public function getMaxBalance3d()
    {
        return $this->container['max_balance_3d'];
    }

    /**
     * Sets max_balance_3d
     *
     * @param float $max_balance_3d The maximum balance in the last three days.
     *
     * @return $this
     */
    public function setMaxBalance3d($max_balance_3d)
    {
        $this->container['max_balance_3d'] = $max_balance_3d;

        return $this;
    }

    /**
     * Gets max_balance_1w
     *
     * @return float
     */
    public function getMaxBalance1w()
    {
        return $this->container['max_balance_1w'];
    }

    /**
     * Sets max_balance_1w
     *
     * @param float $max_balance_1w The maximum balance in the last week.
     *
     * @return $this
     */
    public function setMaxBalance1w($max_balance_1w)
    {
        $this->container['max_balance_1w'] = $max_balance_1w;

        return $this;
    }

    /**
     * Gets max_balance_1m
     *
     * @return float
     */
    public function getMaxBalance1m()
    {
        return $this->container['max_balance_1m'];
    }

    /**
     * Sets max_balance_1m
     *
     * @param float $max_balance_1m The maximum balance in the last month.
     *
     * @return $this
     */
    public function setMaxBalance1m($max_balance_1m)
    {
        $this->container['max_balance_1m'] = $max_balance_1m;

        return $this;
    }

    /**
     * Gets max_balance_3m
     *
     * @return float
     */
    public function getMaxBalance3m()
    {
        return $this->container['max_balance_3m'];
    }

    /**
     * Sets max_balance_3m
     *
     * @param float $max_balance_3m The maximum balance in the last three months.
     *
     * @return $this
     */
    public function setMaxBalance3m($max_balance_3m)
    {
        $this->container['max_balance_3m'] = $max_balance_3m;

        return $this;
    }

    /**
     * Gets max_balance_6m
     *
     * @return float
     */
    public function getMaxBalance6m()
    {
        return $this->container['max_balance_6m'];
    }

    /**
     * Sets max_balance_6m
     *
     * @param float $max_balance_6m The maximum balance in the last six months.
     *
     * @return $this
     */
    public function setMaxBalance6m($max_balance_6m)
    {
        $this->container['max_balance_6m'] = $max_balance_6m;

        return $this;
    }

    /**
     * Gets max_balance_12m
     *
     * @return float
     */
    public function getMaxBalance12m()
    {
        return $this->container['max_balance_12m'];
    }

    /**
     * Sets max_balance_12m
     *
     * @param float $max_balance_12m The maximum balance in the last twelve months.
     *
     * @return $this
     */
    public function setMaxBalance12m($max_balance_12m)
    {
        $this->container['max_balance_12m'] = $max_balance_12m;

        return $this;
    }

    /**
     * Gets std_balance_3d
     *
     * @return float
     */
    public function getStdBalance3d()
    {
        return $this->container['std_balance_3d'];
    }

    /**
     * Sets std_balance_3d
     *
     * @param float $std_balance_3d The balance standard deviation in the last three days.
     *
     * @return $this
     */
    public function setStdBalance3d($std_balance_3d)
    {
        $this->container['std_balance_3d'] = $std_balance_3d;

        return $this;
    }

    /**
     * Gets std_balance_1w
     *
     * @return float
     */
    public function getStdBalance1w()
    {
        return $this->container['std_balance_1w'];
    }

    /**
     * Sets std_balance_1w
     *
     * @param float $std_balance_1w The balance standard deviation in the last week.
     *
     * @return $this
     */
    public function setStdBalance1w($std_balance_1w)
    {
        $this->container['std_balance_1w'] = $std_balance_1w;

        return $this;
    }

    /**
     * Gets std_balance_1m
     *
     * @return float
     */
    public function getStdBalance1m()
    {
        return $this->container['std_balance_1m'];
    }

    /**
     * Sets std_balance_1m
     *
     * @param float $std_balance_1m The balance standard deviation in the last month.
     *
     * @return $this
     */
    public function setStdBalance1m($std_balance_1m)
    {
        $this->container['std_balance_1m'] = $std_balance_1m;

        return $this;
    }

    /**
     * Gets std_balance_3m
     *
     * @return float
     */
    public function getStdBalance3m()
    {
        return $this->container['std_balance_3m'];
    }

    /**
     * Sets std_balance_3m
     *
     * @param float $std_balance_3m The balance standard deviation in the last three months.
     *
     * @return $this
     */
    public function setStdBalance3m($std_balance_3m)
    {
        $this->container['std_balance_3m'] = $std_balance_3m;

        return $this;
    }

    /**
     * Gets std_balance_6m
     *
     * @return float
     */
    public function getStdBalance6m()
    {
        return $this->container['std_balance_6m'];
    }

    /**
     * Sets std_balance_6m
     *
     * @param float $std_balance_6m The balance standard deviation in the last six months.
     *
     * @return $this
     */
    public function setStdBalance6m($std_balance_6m)
    {
        $this->container['std_balance_6m'] = $std_balance_6m;

        return $this;
    }

    /**
     * Gets std_balance_12m
     *
     * @return float
     */
    public function getStdBalance12m()
    {
        return $this->container['std_balance_12m'];
    }

    /**
     * Sets std_balance_12m
     *
     * @param float $std_balance_12m The balance standard deviation in the last twelve months.
     *
     * @return $this
     */
    public function setStdBalance12m($std_balance_12m)
    {
        $this->container['std_balance_12m'] = $std_balance_12m;

        return $this;
    }

    /**
     * Gets balance_trend_3d
     *
     * @return float
     */
    public function getBalanceTrend3d()
    {
        return $this->container['balance_trend_3d'];
    }

    /**
     * Sets balance_trend_3d
     *
     * @param float $balance_trend_3d The balance trend of the user in the last three days.
     *
     * @return $this
     */
    public function setBalanceTrend3d($balance_trend_3d)
    {
        $this->container['balance_trend_3d'] = $balance_trend_3d;

        return $this;
    }

    /**
     * Gets balance_trend_1w
     *
     * @return float
     */
    public function getBalanceTrend1w()
    {
        return $this->container['balance_trend_1w'];
    }

    /**
     * Sets balance_trend_1w
     *
     * @param float $balance_trend_1w The balance trend of the user in the last week.
     *
     * @return $this
     */
    public function setBalanceTrend1w($balance_trend_1w)
    {
        $this->container['balance_trend_1w'] = $balance_trend_1w;

        return $this;
    }

    /**
     * Gets balance_trend_1m
     *
     * @return float
     */
    public function getBalanceTrend1m()
    {
        return $this->container['balance_trend_1m'];
    }

    /**
     * Sets balance_trend_1m
     *
     * @param float $balance_trend_1m The balance trend of the user in the last month.
     *
     * @return $this
     */
    public function setBalanceTrend1m($balance_trend_1m)
    {
        $this->container['balance_trend_1m'] = $balance_trend_1m;

        return $this;
    }

    /**
     * Gets balance_trend_3m
     *
     * @return float
     */
    public function getBalanceTrend3m()
    {
        return $this->container['balance_trend_3m'];
    }

    /**
     * Sets balance_trend_3m
     *
     * @param float $balance_trend_3m The balance trend of the user in the last three months.
     *
     * @return $this
     */
    public function setBalanceTrend3m($balance_trend_3m)
    {
        $this->container['balance_trend_3m'] = $balance_trend_3m;

        return $this;
    }

    /**
     * Gets balance_trend_6m
     *
     * @return float
     */
    public function getBalanceTrend6m()
    {
        return $this->container['balance_trend_6m'];
    }

    /**
     * Sets balance_trend_6m
     *
     * @param float $balance_trend_6m The balance trend of the user in the last six months.
     *
     * @return $this
     */
    public function setBalanceTrend6m($balance_trend_6m)
    {
        $this->container['balance_trend_6m'] = $balance_trend_6m;

        return $this;
    }

    /**
     * Gets balance_trend_12m
     *
     * @return float
     */
    public function getBalanceTrend12m()
    {
        return $this->container['balance_trend_12m'];
    }

    /**
     * Sets balance_trend_12m
     *
     * @param float $balance_trend_12m The balance trend of the user in the last twelve months.
     *
     * @return $this
     */
    public function setBalanceTrend12m($balance_trend_12m)
    {
        $this->container['balance_trend_12m'] = $balance_trend_12m;

        return $this;
    }

    /**
     * Gets days_balance_below_0_3d
     *
     * @return int
     */
    public function getDaysBalanceBelow03d()
    {
        return $this->container['days_balance_below_0_3d'];
    }

    /**
     * Sets days_balance_below_0_3d
     *
     * @param int $days_balance_below_0_3d The number of days that the total balance of the account is less than or equal to 0 in the last three days.
     *
     * @return $this
     */
    public function setDaysBalanceBelow03d($days_balance_below_0_3d)
    {
        $this->container['days_balance_below_0_3d'] = $days_balance_below_0_3d;

        return $this;
    }

    /**
     * Gets days_balance_below_0_1w
     *
     * @return int
     */
    public function getDaysBalanceBelow01w()
    {
        return $this->container['days_balance_below_0_1w'];
    }

    /**
     * Sets days_balance_below_0_1w
     *
     * @param int $days_balance_below_0_1w The number of days that the total balance of the account is less than or equal to 0 in the last week.
     *
     * @return $this
     */
    public function setDaysBalanceBelow01w($days_balance_below_0_1w)
    {
        $this->container['days_balance_below_0_1w'] = $days_balance_below_0_1w;

        return $this;
    }

    /**
     * Gets days_balance_below_0_1m
     *
     * @return int
     */
    public function getDaysBalanceBelow01m()
    {
        return $this->container['days_balance_below_0_1m'];
    }

    /**
     * Sets days_balance_below_0_1m
     *
     * @param int $days_balance_below_0_1m The number of days that the total balance of the account is less than or equal to 0 in the last month.
     *
     * @return $this
     */
    public function setDaysBalanceBelow01m($days_balance_below_0_1m)
    {
        $this->container['days_balance_below_0_1m'] = $days_balance_below_0_1m;

        return $this;
    }

    /**
     * Gets days_balance_below_0_3m
     *
     * @return int
     */
    public function getDaysBalanceBelow03m()
    {
        return $this->container['days_balance_below_0_3m'];
    }

    /**
     * Sets days_balance_below_0_3m
     *
     * @param int $days_balance_below_0_3m The number of days that the total balance of the account is less than or equal to 0 in the last three months.
     *
     * @return $this
     */
    public function setDaysBalanceBelow03m($days_balance_below_0_3m)
    {
        $this->container['days_balance_below_0_3m'] = $days_balance_below_0_3m;

        return $this;
    }

    /**
     * Gets days_balance_below_0_6m
     *
     * @return int
     */
    public function getDaysBalanceBelow06m()
    {
        return $this->container['days_balance_below_0_6m'];
    }

    /**
     * Sets days_balance_below_0_6m
     *
     * @param int $days_balance_below_0_6m The number of days that the total balance of the account is less than or equal to 0 in the last six months.
     *
     * @return $this
     */
    public function setDaysBalanceBelow06m($days_balance_below_0_6m)
    {
        $this->container['days_balance_below_0_6m'] = $days_balance_below_0_6m;

        return $this;
    }

    /**
     * Gets days_balance_below_0_12m
     *
     * @return int
     */
    public function getDaysBalanceBelow012m()
    {
        return $this->container['days_balance_below_0_12m'];
    }

    /**
     * Sets days_balance_below_0_12m
     *
     * @param int $days_balance_below_0_12m The number of days that the total balance of the account is less than or equal to 0 in the last twelve months.
     *
     * @return $this
     */
    public function setDaysBalanceBelow012m($days_balance_below_0_12m)
    {
        $this->container['days_balance_below_0_12m'] = $days_balance_below_0_12m;

        return $this;
    }

    /**
     * Gets days_balance_below_mean_3d
     *
     * @return int
     */
    public function getDaysBalanceBelowMean3d()
    {
        return $this->container['days_balance_below_mean_3d'];
    }

    /**
     * Sets days_balance_below_mean_3d
     *
     * @param int $days_balance_below_mean_3d The number of days that the mean balance of the account is less than or equal to the amount specified in `mean_daily_balance_3d`.
     *
     * @return $this
     */
    public function setDaysBalanceBelowMean3d($days_balance_below_mean_3d)
    {
        $this->container['days_balance_below_mean_3d'] = $days_balance_below_mean_3d;

        return $this;
    }

    /**
     * Gets days_balance_below_mean_1w
     *
     * @return int
     */
    public function getDaysBalanceBelowMean1w()
    {
        return $this->container['days_balance_below_mean_1w'];
    }

    /**
     * Sets days_balance_below_mean_1w
     *
     * @param int $days_balance_below_mean_1w The number of days that the mean balance of the account is less than or equal to the amount specified in `mean_daily_balance_1w`.
     *
     * @return $this
     */
    public function setDaysBalanceBelowMean1w($days_balance_below_mean_1w)
    {
        $this->container['days_balance_below_mean_1w'] = $days_balance_below_mean_1w;

        return $this;
    }

    /**
     * Gets days_balance_below_mean_1m
     *
     * @return int
     */
    public function getDaysBalanceBelowMean1m()
    {
        return $this->container['days_balance_below_mean_1m'];
    }

    /**
     * Sets days_balance_below_mean_1m
     *
     * @param int $days_balance_below_mean_1m The number of days that the mean balance of the account is less than or equal to the amount specified in `mean_daily_balance_1m`.
     *
     * @return $this
     */
    public function setDaysBalanceBelowMean1m($days_balance_below_mean_1m)
    {
        $this->container['days_balance_below_mean_1m'] = $days_balance_below_mean_1m;

        return $this;
    }

    /**
     * Gets days_balance_below_mean_3m
     *
     * @return int
     */
    public function getDaysBalanceBelowMean3m()
    {
        return $this->container['days_balance_below_mean_3m'];
    }

    /**
     * Sets days_balance_below_mean_3m
     *
     * @param int $days_balance_below_mean_3m The number of days that the mean balance of the account is less than or equal to the amount specified in `mean_daily_balance_3m`.
     *
     * @return $this
     */
    public function setDaysBalanceBelowMean3m($days_balance_below_mean_3m)
    {
        $this->container['days_balance_below_mean_3m'] = $days_balance_below_mean_3m;

        return $this;
    }

    /**
     * Gets days_balance_below_mean_6m
     *
     * @return int
     */
    public function getDaysBalanceBelowMean6m()
    {
        return $this->container['days_balance_below_mean_6m'];
    }

    /**
     * Sets days_balance_below_mean_6m
     *
     * @param int $days_balance_below_mean_6m The number of days that the mean balance of the account is less than or equal to the amount specified in `mean_daily_balance_6m`.
     *
     * @return $this
     */
    public function setDaysBalanceBelowMean6m($days_balance_below_mean_6m)
    {
        $this->container['days_balance_below_mean_6m'] = $days_balance_below_mean_6m;

        return $this;
    }

    /**
     * Gets days_balance_below_mean_12m
     *
     * @return int
     */
    public function getDaysBalanceBelowMean12m()
    {
        return $this->container['days_balance_below_mean_12m'];
    }

    /**
     * Sets days_balance_below_mean_12m
     *
     * @param int $days_balance_below_mean_12m The number of days that the mean balance of the account is less than or equal to the amount specified in `mean_daily_balance_12m`.
     *
     * @return $this
     */
    public function setDaysBalanceBelowMean12m($days_balance_below_mean_12m)
    {
        $this->container['days_balance_below_mean_12m'] = $days_balance_below_mean_12m;

        return $this;
    }

    /**
     * Gets days_balance_below_x_3d
     *
     * @return int
     */
    public function getDaysBalanceBelowX3d()
    {
        return $this->container['days_balance_below_x_3d'];
    }

    /**
     * Sets days_balance_below_x_3d
     *
     * @param int $days_balance_below_x_3d The number of days that the total balance of the account is less than or equal to the amount specified in `balance_threshold_x` in the last three days.
     *
     * @return $this
     */
    public function setDaysBalanceBelowX3d($days_balance_below_x_3d)
    {
        $this->container['days_balance_below_x_3d'] = $days_balance_below_x_3d;

        return $this;
    }

    /**
     * Gets days_balance_below_x_1w
     *
     * @return int
     */
    public function getDaysBalanceBelowX1w()
    {
        return $this->container['days_balance_below_x_1w'];
    }

    /**
     * Sets days_balance_below_x_1w
     *
     * @param int $days_balance_below_x_1w The number of days that the total balance of the account is less than or equal to the amount specified in `balance_threshold_x` in the last week.
     *
     * @return $this
     */
    public function setDaysBalanceBelowX1w($days_balance_below_x_1w)
    {
        $this->container['days_balance_below_x_1w'] = $days_balance_below_x_1w;

        return $this;
    }

    /**
     * Gets days_balance_below_x_1m
     *
     * @return int
     */
    public function getDaysBalanceBelowX1m()
    {
        return $this->container['days_balance_below_x_1m'];
    }

    /**
     * Sets days_balance_below_x_1m
     *
     * @param int $days_balance_below_x_1m The number of days that the total balance of the account is less than or equal to the amount specified in `balance_threshold_x` in the last month.
     *
     * @return $this
     */
    public function setDaysBalanceBelowX1m($days_balance_below_x_1m)
    {
        $this->container['days_balance_below_x_1m'] = $days_balance_below_x_1m;

        return $this;
    }

    /**
     * Gets days_balance_below_x_3m
     *
     * @return int
     */
    public function getDaysBalanceBelowX3m()
    {
        return $this->container['days_balance_below_x_3m'];
    }

    /**
     * Sets days_balance_below_x_3m
     *
     * @param int $days_balance_below_x_3m The number of days that the total balance of the account is less than or equal to the amount specified in `balance_threshold_x` in the last three months.
     *
     * @return $this
     */
    public function setDaysBalanceBelowX3m($days_balance_below_x_3m)
    {
        $this->container['days_balance_below_x_3m'] = $days_balance_below_x_3m;

        return $this;
    }

    /**
     * Gets days_balance_below_x_6m
     *
     * @return int
     */
    public function getDaysBalanceBelowX6m()
    {
        return $this->container['days_balance_below_x_6m'];
    }

    /**
     * Sets days_balance_below_x_6m
     *
     * @param int $days_balance_below_x_6m The number of days that the total balance of the account is less than or equal to the amount specified in `balance_threshold_x` in the last six months.
     *
     * @return $this
     */
    public function setDaysBalanceBelowX6m($days_balance_below_x_6m)
    {
        $this->container['days_balance_below_x_6m'] = $days_balance_below_x_6m;

        return $this;
    }

    /**
     * Gets days_balance_below_x_12m
     *
     * @return int
     */
    public function getDaysBalanceBelowX12m()
    {
        return $this->container['days_balance_below_x_12m'];
    }

    /**
     * Sets days_balance_below_x_12m
     *
     * @param int $days_balance_below_x_12m The number of days that the total balance of the account is less than or equal to the amount specified in `balance_threshold_x` in the last twelve months.
     *
     * @return $this
     */
    public function setDaysBalanceBelowX12m($days_balance_below_x_12m)
    {
        $this->container['days_balance_below_x_12m'] = $days_balance_below_x_12m;

        return $this;
    }

    /**
     * Gets balance_threshold_x
     *
     * @return float
     */
    public function getBalanceThresholdX()
    {
        return $this->container['balance_threshold_x'];
    }

    /**
     * Sets balance_threshold_x
     *
     * @param float $balance_threshold_x The threshold used to compute `days_balance_below_x_period`. Please note, this is value is country specific (both in terms of the amount and the currency).
     *
     * @return $this
     */
    public function setBalanceThresholdX($balance_threshold_x)
    {
        $this->container['balance_threshold_x'] = $balance_threshold_x;

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
