<?php
/**
 * ApifinancialstatementsBalanceSheet
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
 * ApifinancialstatementsBalanceSheet Class Doc Comment
 *
 * @category Class
 * @description The balance sheet detailing the company&#x27;s assets, liabilities, and equity for the given year.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApifinancialstatementsBalanceSheet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'apifinancialstatements_balance_sheet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'current_assets' => '\Swagger\Client\Model\ApifinancialstatementsBalanceSheetCurrentAssets',
        'non_current_assets' => '\Swagger\Client\Model\ApifinancialstatementsBalanceSheetNonCurrentAssets',
        'current_liabilities' => '\Swagger\Client\Model\ApifinancialstatementsBalanceSheetCurrentLiabilities',
        'non_current_liabilities' => '\Swagger\Client\Model\ApifinancialstatementsBalanceSheetNonCurrentLiabilities',
        'equity' => '\Swagger\Client\Model\ApifinancialstatementsBalanceSheetEquity'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'current_assets' => null,
        'non_current_assets' => null,
        'current_liabilities' => null,
        'non_current_liabilities' => null,
        'equity' => null
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
        'current_assets' => 'current_assets',
        'non_current_assets' => 'non_current_assets',
        'current_liabilities' => 'current_liabilities',
        'non_current_liabilities' => 'non_current_liabilities',
        'equity' => 'equity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'current_assets' => 'setCurrentAssets',
        'non_current_assets' => 'setNonCurrentAssets',
        'current_liabilities' => 'setCurrentLiabilities',
        'non_current_liabilities' => 'setNonCurrentLiabilities',
        'equity' => 'setEquity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'current_assets' => 'getCurrentAssets',
        'non_current_assets' => 'getNonCurrentAssets',
        'current_liabilities' => 'getCurrentLiabilities',
        'non_current_liabilities' => 'getNonCurrentLiabilities',
        'equity' => 'getEquity'
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
        $this->container['current_assets'] = isset($data['current_assets']) ? $data['current_assets'] : null;
        $this->container['non_current_assets'] = isset($data['non_current_assets']) ? $data['non_current_assets'] : null;
        $this->container['current_liabilities'] = isset($data['current_liabilities']) ? $data['current_liabilities'] : null;
        $this->container['non_current_liabilities'] = isset($data['non_current_liabilities']) ? $data['non_current_liabilities'] : null;
        $this->container['equity'] = isset($data['equity']) ? $data['equity'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets current_assets
     *
     * @return \Swagger\Client\Model\ApifinancialstatementsBalanceSheetCurrentAssets
     */
    public function getCurrentAssets()
    {
        return $this->container['current_assets'];
    }

    /**
     * Sets current_assets
     *
     * @param \Swagger\Client\Model\ApifinancialstatementsBalanceSheetCurrentAssets $current_assets current_assets
     *
     * @return $this
     */
    public function setCurrentAssets($current_assets)
    {
        $this->container['current_assets'] = $current_assets;

        return $this;
    }

    /**
     * Gets non_current_assets
     *
     * @return \Swagger\Client\Model\ApifinancialstatementsBalanceSheetNonCurrentAssets
     */
    public function getNonCurrentAssets()
    {
        return $this->container['non_current_assets'];
    }

    /**
     * Sets non_current_assets
     *
     * @param \Swagger\Client\Model\ApifinancialstatementsBalanceSheetNonCurrentAssets $non_current_assets non_current_assets
     *
     * @return $this
     */
    public function setNonCurrentAssets($non_current_assets)
    {
        $this->container['non_current_assets'] = $non_current_assets;

        return $this;
    }

    /**
     * Gets current_liabilities
     *
     * @return \Swagger\Client\Model\ApifinancialstatementsBalanceSheetCurrentLiabilities
     */
    public function getCurrentLiabilities()
    {
        return $this->container['current_liabilities'];
    }

    /**
     * Sets current_liabilities
     *
     * @param \Swagger\Client\Model\ApifinancialstatementsBalanceSheetCurrentLiabilities $current_liabilities current_liabilities
     *
     * @return $this
     */
    public function setCurrentLiabilities($current_liabilities)
    {
        $this->container['current_liabilities'] = $current_liabilities;

        return $this;
    }

    /**
     * Gets non_current_liabilities
     *
     * @return \Swagger\Client\Model\ApifinancialstatementsBalanceSheetNonCurrentLiabilities
     */
    public function getNonCurrentLiabilities()
    {
        return $this->container['non_current_liabilities'];
    }

    /**
     * Sets non_current_liabilities
     *
     * @param \Swagger\Client\Model\ApifinancialstatementsBalanceSheetNonCurrentLiabilities $non_current_liabilities non_current_liabilities
     *
     * @return $this
     */
    public function setNonCurrentLiabilities($non_current_liabilities)
    {
        $this->container['non_current_liabilities'] = $non_current_liabilities;

        return $this;
    }

    /**
     * Gets equity
     *
     * @return \Swagger\Client\Model\ApifinancialstatementsBalanceSheetEquity
     */
    public function getEquity()
    {
        return $this->container['equity'];
    }

    /**
     * Sets equity
     *
     * @param \Swagger\Client\Model\ApifinancialstatementsBalanceSheetEquity $equity equity
     *
     * @return $this
     */
    public function setEquity($equity)
    {
        $this->container['equity'] = $equity;

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
