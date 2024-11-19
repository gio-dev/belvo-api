<?php
/**
 * RiskInsightsAssetMetrics
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
 * RiskInsightsAssetMetrics Class Doc Comment
 *
 * @category Class
 * @description Aggregate details regarding the assets used in the risk insight analysis. For asset metrics, we only consider checking and savings accounts.   &gt; Asset metrics can provide a snapshot of your user&#x27;s wealth and liquid assets, indicating how they manage their wealth and their current financial status.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RiskInsightsAssetMetrics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RiskInsightsAssetMetrics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'institutions' => 'string[]',
        'num_assets_accounts' => 'int',
        'num_checking_accounts' => 'int',
        'num_savings_accounts' => 'int',
        'checking_accounts_balance' => 'float',
        'savings_accounts_balance' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'institutions' => null,
        'num_assets_accounts' => 'int32',
        'num_checking_accounts' => 'int32',
        'num_savings_accounts' => 'int32',
        'checking_accounts_balance' => 'float',
        'savings_accounts_balance' => 'float'
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
        'institutions' => 'institutions',
        'num_assets_accounts' => 'num_assets_accounts',
        'num_checking_accounts' => 'num_checking_accounts',
        'num_savings_accounts' => 'num_savings_accounts',
        'checking_accounts_balance' => 'checking_accounts_balance',
        'savings_accounts_balance' => 'savings_accounts_balance'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'institutions' => 'setInstitutions',
        'num_assets_accounts' => 'setNumAssetsAccounts',
        'num_checking_accounts' => 'setNumCheckingAccounts',
        'num_savings_accounts' => 'setNumSavingsAccounts',
        'checking_accounts_balance' => 'setCheckingAccountsBalance',
        'savings_accounts_balance' => 'setSavingsAccountsBalance'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'institutions' => 'getInstitutions',
        'num_assets_accounts' => 'getNumAssetsAccounts',
        'num_checking_accounts' => 'getNumCheckingAccounts',
        'num_savings_accounts' => 'getNumSavingsAccounts',
        'checking_accounts_balance' => 'getCheckingAccountsBalance',
        'savings_accounts_balance' => 'getSavingsAccountsBalance'
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
        $this->container['institutions'] = isset($data['institutions']) ? $data['institutions'] : null;
        $this->container['num_assets_accounts'] = isset($data['num_assets_accounts']) ? $data['num_assets_accounts'] : null;
        $this->container['num_checking_accounts'] = isset($data['num_checking_accounts']) ? $data['num_checking_accounts'] : null;
        $this->container['num_savings_accounts'] = isset($data['num_savings_accounts']) ? $data['num_savings_accounts'] : null;
        $this->container['checking_accounts_balance'] = isset($data['checking_accounts_balance']) ? $data['checking_accounts_balance'] : null;
        $this->container['savings_accounts_balance'] = isset($data['savings_accounts_balance']) ? $data['savings_accounts_balance'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['institutions'] === null) {
            $invalidProperties[] = "'institutions' can't be null";
        }
        if ($this->container['num_checking_accounts'] === null) {
            $invalidProperties[] = "'num_checking_accounts' can't be null";
        }
        if ($this->container['num_savings_accounts'] === null) {
            $invalidProperties[] = "'num_savings_accounts' can't be null";
        }
        if ($this->container['checking_accounts_balance'] === null) {
            $invalidProperties[] = "'checking_accounts_balance' can't be null";
        }
        if ($this->container['savings_accounts_balance'] === null) {
            $invalidProperties[] = "'savings_accounts_balance' can't be null";
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
     * Gets institutions
     *
     * @return string[]
     */
    public function getInstitutions()
    {
        return $this->container['institutions'];
    }

    /**
     * Sets institutions
     *
     * @param string[] $institutions An array of institutions from which account information was retrieved for the user.   > **Note**: For most use cases, this array will only return one item.
     *
     * @return $this
     */
    public function setInstitutions($institutions)
    {
        $this->container['institutions'] = $institutions;

        return $this;
    }

    /**
     * Gets num_assets_accounts
     *
     * @return int
     */
    public function getNumAssetsAccounts()
    {
        return $this->container['num_assets_accounts'];
    }

    /**
     * Sets num_assets_accounts
     *
     * @param int $num_assets_accounts The total number of accounts found for the user.
     *
     * @return $this
     */
    public function setNumAssetsAccounts($num_assets_accounts)
    {
        $this->container['num_assets_accounts'] = $num_assets_accounts;

        return $this;
    }

    /**
     * Gets num_checking_accounts
     *
     * @return int
     */
    public function getNumCheckingAccounts()
    {
        return $this->container['num_checking_accounts'];
    }

    /**
     * Sets num_checking_accounts
     *
     * @param int $num_checking_accounts The total number of checking accounts found for the user.
     *
     * @return $this
     */
    public function setNumCheckingAccounts($num_checking_accounts)
    {
        $this->container['num_checking_accounts'] = $num_checking_accounts;

        return $this;
    }

    /**
     * Gets num_savings_accounts
     *
     * @return int
     */
    public function getNumSavingsAccounts()
    {
        return $this->container['num_savings_accounts'];
    }

    /**
     * Sets num_savings_accounts
     *
     * @param int $num_savings_accounts The total number of savings accounts found for the user.
     *
     * @return $this
     */
    public function setNumSavingsAccounts($num_savings_accounts)
    {
        $this->container['num_savings_accounts'] = $num_savings_accounts;

        return $this;
    }

    /**
     * Gets checking_accounts_balance
     *
     * @return float
     */
    public function getCheckingAccountsBalance()
    {
        return $this->container['checking_accounts_balance'];
    }

    /**
     * Sets checking_accounts_balance
     *
     * @param float $checking_accounts_balance The total closing balance of all checking accounts.
     *
     * @return $this
     */
    public function setCheckingAccountsBalance($checking_accounts_balance)
    {
        $this->container['checking_accounts_balance'] = $checking_accounts_balance;

        return $this;
    }

    /**
     * Gets savings_accounts_balance
     *
     * @return float
     */
    public function getSavingsAccountsBalance()
    {
        return $this->container['savings_accounts_balance'];
    }

    /**
     * Sets savings_accounts_balance
     *
     * @param float $savings_accounts_balance The total closing balance of all savings accounts.
     *
     * @return $this
     */
    public function setSavingsAccountsBalance($savings_accounts_balance)
    {
        $this->container['savings_accounts_balance'] = $savings_accounts_balance;

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
