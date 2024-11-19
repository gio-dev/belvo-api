<?php
/**
 * InlineResponse20032
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
 * InlineResponse20032 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20032 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_32';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'user_id' => 'string',
        'assets_metrics' => '\Swagger\Client\Model\ApiriskinsightsAssetsMetrics',
        'balances_metrics' => '\Swagger\Client\Model\ApiriskinsightsBalancesMetrics',
        'transactions_metrics' => '\Swagger\Client\Model\ApiriskinsightsTransactionsMetrics',
        'cashflow_metrics' => '\Swagger\Client\Model\ApiriskinsightsCashflowMetrics',
        'category_metrics' => '\Swagger\Client\Model\ApiriskinsightsCategoryMetrics[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'user_id' => 'uuid',
        'assets_metrics' => null,
        'balances_metrics' => null,
        'transactions_metrics' => null,
        'cashflow_metrics' => null,
        'category_metrics' => null
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
        'user_id' => 'user_id',
        'assets_metrics' => 'assets_metrics',
        'balances_metrics' => 'balances_metrics',
        'transactions_metrics' => 'transactions_metrics',
        'cashflow_metrics' => 'cashflow_metrics',
        'category_metrics' => 'category_metrics'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_id' => 'setUserId',
        'assets_metrics' => 'setAssetsMetrics',
        'balances_metrics' => 'setBalancesMetrics',
        'transactions_metrics' => 'setTransactionsMetrics',
        'cashflow_metrics' => 'setCashflowMetrics',
        'category_metrics' => 'setCategoryMetrics'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_id' => 'getUserId',
        'assets_metrics' => 'getAssetsMetrics',
        'balances_metrics' => 'getBalancesMetrics',
        'transactions_metrics' => 'getTransactionsMetrics',
        'cashflow_metrics' => 'getCashflowMetrics',
        'category_metrics' => 'getCategoryMetrics'
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
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['assets_metrics'] = isset($data['assets_metrics']) ? $data['assets_metrics'] : null;
        $this->container['balances_metrics'] = isset($data['balances_metrics']) ? $data['balances_metrics'] : null;
        $this->container['transactions_metrics'] = isset($data['transactions_metrics']) ? $data['transactions_metrics'] : null;
        $this->container['cashflow_metrics'] = isset($data['cashflow_metrics']) ? $data['cashflow_metrics'] : null;
        $this->container['category_metrics'] = isset($data['category_metrics']) ? $data['category_metrics'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
        }
        if ($this->container['assets_metrics'] === null) {
            $invalidProperties[] = "'assets_metrics' can't be null";
        }
        if ($this->container['balances_metrics'] === null) {
            $invalidProperties[] = "'balances_metrics' can't be null";
        }
        if ($this->container['transactions_metrics'] === null) {
            $invalidProperties[] = "'transactions_metrics' can't be null";
        }
        if ($this->container['cashflow_metrics'] === null) {
            $invalidProperties[] = "'cashflow_metrics' can't be null";
        }
        if ($this->container['category_metrics'] === null) {
            $invalidProperties[] = "'category_metrics' can't be null";
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
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id The unique ID your provided for the user.
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets assets_metrics
     *
     * @return \Swagger\Client\Model\ApiriskinsightsAssetsMetrics
     */
    public function getAssetsMetrics()
    {
        return $this->container['assets_metrics'];
    }

    /**
     * Sets assets_metrics
     *
     * @param \Swagger\Client\Model\ApiriskinsightsAssetsMetrics $assets_metrics assets_metrics
     *
     * @return $this
     */
    public function setAssetsMetrics($assets_metrics)
    {
        $this->container['assets_metrics'] = $assets_metrics;

        return $this;
    }

    /**
     * Gets balances_metrics
     *
     * @return \Swagger\Client\Model\ApiriskinsightsBalancesMetrics
     */
    public function getBalancesMetrics()
    {
        return $this->container['balances_metrics'];
    }

    /**
     * Sets balances_metrics
     *
     * @param \Swagger\Client\Model\ApiriskinsightsBalancesMetrics $balances_metrics balances_metrics
     *
     * @return $this
     */
    public function setBalancesMetrics($balances_metrics)
    {
        $this->container['balances_metrics'] = $balances_metrics;

        return $this;
    }

    /**
     * Gets transactions_metrics
     *
     * @return \Swagger\Client\Model\ApiriskinsightsTransactionsMetrics
     */
    public function getTransactionsMetrics()
    {
        return $this->container['transactions_metrics'];
    }

    /**
     * Sets transactions_metrics
     *
     * @param \Swagger\Client\Model\ApiriskinsightsTransactionsMetrics $transactions_metrics transactions_metrics
     *
     * @return $this
     */
    public function setTransactionsMetrics($transactions_metrics)
    {
        $this->container['transactions_metrics'] = $transactions_metrics;

        return $this;
    }

    /**
     * Gets cashflow_metrics
     *
     * @return \Swagger\Client\Model\ApiriskinsightsCashflowMetrics
     */
    public function getCashflowMetrics()
    {
        return $this->container['cashflow_metrics'];
    }

    /**
     * Sets cashflow_metrics
     *
     * @param \Swagger\Client\Model\ApiriskinsightsCashflowMetrics $cashflow_metrics cashflow_metrics
     *
     * @return $this
     */
    public function setCashflowMetrics($cashflow_metrics)
    {
        $this->container['cashflow_metrics'] = $cashflow_metrics;

        return $this;
    }

    /**
     * Gets category_metrics
     *
     * @return \Swagger\Client\Model\ApiriskinsightsCategoryMetrics[]
     */
    public function getCategoryMetrics()
    {
        return $this->container['category_metrics'];
    }

    /**
     * Sets category_metrics
     *
     * @param \Swagger\Client\Model\ApiriskinsightsCategoryMetrics[] $category_metrics An array of aggregate metrics regarding the transaction categories and subcategories that Belvo has identified within the user's transaction history.  In the array, Belvo only returns categories that have been identified.
     *
     * @return $this
     */
    public function setCategoryMetrics($category_metrics)
    {
        $this->container['category_metrics'] = $category_metrics;

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
