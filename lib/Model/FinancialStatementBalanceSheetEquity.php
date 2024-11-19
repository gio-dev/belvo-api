<?php
/**
 * FinancialStatementBalanceSheetEquity
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
 * FinancialStatementBalanceSheetEquity Class Doc Comment
 *
 * @category Class
 * @description The equity of the company, representing the residual interest in the assets after deducting liabilities.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FinancialStatementBalanceSheetEquity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FinancialStatementBalanceSheetEquity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'stockholders_equity' => 'float',
        'retained_earnings' => 'float',
        'other_comprehensive_income' => 'float',
        'controlling_interest' => 'float',
        'non_controlling_interest' => 'float',
        'total' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'stockholders_equity' => 'float',
        'retained_earnings' => 'float',
        'other_comprehensive_income' => 'float',
        'controlling_interest' => 'float',
        'non_controlling_interest' => 'float',
        'total' => 'float'
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
        'stockholders_equity' => 'stockholders_equity',
        'retained_earnings' => 'retained_earnings',
        'other_comprehensive_income' => 'other_comprehensive_income',
        'controlling_interest' => 'controlling_interest',
        'non_controlling_interest' => 'non_controlling_interest',
        'total' => 'total'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'stockholders_equity' => 'setStockholdersEquity',
        'retained_earnings' => 'setRetainedEarnings',
        'other_comprehensive_income' => 'setOtherComprehensiveIncome',
        'controlling_interest' => 'setControllingInterest',
        'non_controlling_interest' => 'setNonControllingInterest',
        'total' => 'setTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'stockholders_equity' => 'getStockholdersEquity',
        'retained_earnings' => 'getRetainedEarnings',
        'other_comprehensive_income' => 'getOtherComprehensiveIncome',
        'controlling_interest' => 'getControllingInterest',
        'non_controlling_interest' => 'getNonControllingInterest',
        'total' => 'getTotal'
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
        $this->container['stockholders_equity'] = isset($data['stockholders_equity']) ? $data['stockholders_equity'] : null;
        $this->container['retained_earnings'] = isset($data['retained_earnings']) ? $data['retained_earnings'] : null;
        $this->container['other_comprehensive_income'] = isset($data['other_comprehensive_income']) ? $data['other_comprehensive_income'] : null;
        $this->container['controlling_interest'] = isset($data['controlling_interest']) ? $data['controlling_interest'] : null;
        $this->container['non_controlling_interest'] = isset($data['non_controlling_interest']) ? $data['non_controlling_interest'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['stockholders_equity'] === null) {
            $invalidProperties[] = "'stockholders_equity' can't be null";
        }
        if ($this->container['retained_earnings'] === null) {
            $invalidProperties[] = "'retained_earnings' can't be null";
        }
        if ($this->container['other_comprehensive_income'] === null) {
            $invalidProperties[] = "'other_comprehensive_income' can't be null";
        }
        if ($this->container['controlling_interest'] === null) {
            $invalidProperties[] = "'controlling_interest' can't be null";
        }
        if ($this->container['non_controlling_interest'] === null) {
            $invalidProperties[] = "'non_controlling_interest' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
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
     * Gets stockholders_equity
     *
     * @return float
     */
    public function getStockholdersEquity()
    {
        return $this->container['stockholders_equity'];
    }

    /**
     * Sets stockholders_equity
     *
     * @param float $stockholders_equity The total value of shares issued by the company, representing the ownership interest of shareholders in the business.
     *
     * @return $this
     */
    public function setStockholdersEquity($stockholders_equity)
    {
        $this->container['stockholders_equity'] = $stockholders_equity;

        return $this;
    }

    /**
     * Gets retained_earnings
     *
     * @return float
     */
    public function getRetainedEarnings()
    {
        return $this->container['retained_earnings'];
    }

    /**
     * Sets retained_earnings
     *
     * @param float $retained_earnings The accumulated profits or losses of the company that have not been distributed to shareholders as dividends.
     *
     * @return $this
     */
    public function setRetainedEarnings($retained_earnings)
    {
        $this->container['retained_earnings'] = $retained_earnings;

        return $this;
    }

    /**
     * Gets other_comprehensive_income
     *
     * @return float
     */
    public function getOtherComprehensiveIncome()
    {
        return $this->container['other_comprehensive_income'];
    }

    /**
     * Sets other_comprehensive_income
     *
     * @param float $other_comprehensive_income The gains or losses that are not included in net income but are reported directly in equity, such as unrealized gains on investments or foreign currency translation adjustments.
     *
     * @return $this
     */
    public function setOtherComprehensiveIncome($other_comprehensive_income)
    {
        $this->container['other_comprehensive_income'] = $other_comprehensive_income;

        return $this;
    }

    /**
     * Gets controlling_interest
     *
     * @return float
     */
    public function getControllingInterest()
    {
        return $this->container['controlling_interest'];
    }

    /**
     * Sets controlling_interest
     *
     * @param float $controlling_interest The ownership interest in the company held by the parent entity or majority shareholders, representing the controlling stake in the business.
     *
     * @return $this
     */
    public function setControllingInterest($controlling_interest)
    {
        $this->container['controlling_interest'] = $controlling_interest;

        return $this;
    }

    /**
     * Gets non_controlling_interest
     *
     * @return float
     */
    public function getNonControllingInterest()
    {
        return $this->container['non_controlling_interest'];
    }

    /**
     * Sets non_controlling_interest
     *
     * @param float $non_controlling_interest The ownership interest in the company held by minority shareholders, representing the non-controlling stake in the business.
     *
     * @return $this
     */
    public function setNonControllingInterest($non_controlling_interest)
    {
        $this->container['non_controlling_interest'] = $non_controlling_interest;

        return $this;
    }

    /**
     * Gets total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param float $total The sum of share capital, retained earnings, other comprehensive income, controlling interest, and non-controlling interest, representing the total equity of the company.
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

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
