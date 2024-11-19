<?php
/**
 * AccountsOFDABrazilCreditDataLimits
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
 * AccountsOFDABrazilCreditDataLimits Class Doc Comment
 *
 * @category Class
 * @description Detailed information regarding the credit limits for the credit cards.  &gt; **Non-nullable:** A value must be returned by Brazil&#x27;s open finance network.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountsOFDABrazilCreditDataLimits implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Accounts OFDA Brazil_credit_data_limits';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'identification_number' => 'string',
        'credit_limit' => 'float',
        'used_amount' => 'float',
        'available_amount' => 'float',
        'is_limit_flexible' => 'bool',
        'type' => 'string',
        'consolidation_type' => 'string',
        'line_name' => 'string',
        'line_name_additional_info' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'identification_number' => null,
        'credit_limit' => 'float',
        'used_amount' => 'float',
        'available_amount' => 'float',
        'is_limit_flexible' => null,
        'type' => null,
        'consolidation_type' => null,
        'line_name' => null,
        'line_name_additional_info' => null
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
        'identification_number' => 'identification_number',
        'credit_limit' => 'credit_limit',
        'used_amount' => 'used_amount',
        'available_amount' => 'available_amount',
        'is_limit_flexible' => 'is_limit_flexible',
        'type' => 'type',
        'consolidation_type' => 'consolidation_type',
        'line_name' => 'line_name',
        'line_name_additional_info' => 'line_name_additional_info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'identification_number' => 'setIdentificationNumber',
        'credit_limit' => 'setCreditLimit',
        'used_amount' => 'setUsedAmount',
        'available_amount' => 'setAvailableAmount',
        'is_limit_flexible' => 'setIsLimitFlexible',
        'type' => 'setType',
        'consolidation_type' => 'setConsolidationType',
        'line_name' => 'setLineName',
        'line_name_additional_info' => 'setLineNameAdditionalInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'identification_number' => 'getIdentificationNumber',
        'credit_limit' => 'getCreditLimit',
        'used_amount' => 'getUsedAmount',
        'available_amount' => 'getAvailableAmount',
        'is_limit_flexible' => 'getIsLimitFlexible',
        'type' => 'getType',
        'consolidation_type' => 'getConsolidationType',
        'line_name' => 'getLineName',
        'line_name_additional_info' => 'getLineNameAdditionalInfo'
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

    const TYPE_TOTAL_LIMIT = 'TOTAL_LIMIT';
    const TYPE_MODAL_LIMIT = 'MODAL_LIMIT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_TOTAL_LIMIT,
            self::TYPE_MODAL_LIMIT,
        ];
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
        $this->container['identification_number'] = isset($data['identification_number']) ? $data['identification_number'] : null;
        $this->container['credit_limit'] = isset($data['credit_limit']) ? $data['credit_limit'] : null;
        $this->container['used_amount'] = isset($data['used_amount']) ? $data['used_amount'] : null;
        $this->container['available_amount'] = isset($data['available_amount']) ? $data['available_amount'] : null;
        $this->container['is_limit_flexible'] = isset($data['is_limit_flexible']) ? $data['is_limit_flexible'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['consolidation_type'] = isset($data['consolidation_type']) ? $data['consolidation_type'] : null;
        $this->container['line_name'] = isset($data['line_name']) ? $data['line_name'] : null;
        $this->container['line_name_additional_info'] = isset($data['line_name_additional_info']) ? $data['line_name_additional_info'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['identification_number'] === null) {
            $invalidProperties[] = "'identification_number' can't be null";
        }
        if ($this->container['credit_limit'] === null) {
            $invalidProperties[] = "'credit_limit' can't be null";
        }
        if ($this->container['used_amount'] === null) {
            $invalidProperties[] = "'used_amount' can't be null";
        }
        if ($this->container['available_amount'] === null) {
            $invalidProperties[] = "'available_amount' can't be null";
        }
        if ($this->container['is_limit_flexible'] === null) {
            $invalidProperties[] = "'is_limit_flexible' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['consolidation_type'] === null) {
            $invalidProperties[] = "'consolidation_type' can't be null";
        }
        if ($this->container['line_name'] === null) {
            $invalidProperties[] = "'line_name' can't be null";
        }
        if ($this->container['line_name_additional_info'] === null) {
            $invalidProperties[] = "'line_name_additional_info' can't be null";
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
     * Gets identification_number
     *
     * @return string
     */
    public function getIdentificationNumber()
    {
        return $this->container['identification_number'];
    }

    /**
     * Sets identification_number
     *
     * @param string $identification_number The credit card number.  **Note:** Often, this is just the last four digit of the credit card.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setIdentificationNumber($identification_number)
    {
        $this->container['identification_number'] = $identification_number;

        return $this;
    }

    /**
     * Gets credit_limit
     *
     * @return float
     */
    public function getCreditLimit()
    {
        return $this->container['credit_limit'];
    }

    /**
     * Sets credit_limit
     *
     * @param float $credit_limit The limit of the credit card.
     *
     * @return $this
     */
    public function setCreditLimit($credit_limit)
    {
        $this->container['credit_limit'] = $credit_limit;

        return $this;
    }

    /**
     * Gets used_amount
     *
     * @return float
     */
    public function getUsedAmount()
    {
        return $this->container['used_amount'];
    }

    /**
     * Sets used_amount
     *
     * @param float $used_amount The amount used.
     *
     * @return $this
     */
    public function setUsedAmount($used_amount)
    {
        $this->container['used_amount'] = $used_amount;

        return $this;
    }

    /**
     * Gets available_amount
     *
     * @return float
     */
    public function getAvailableAmount()
    {
        return $this->container['available_amount'];
    }

    /**
     * Sets available_amount
     *
     * @param float $available_amount The amount still available.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setAvailableAmount($available_amount)
    {
        $this->container['available_amount'] = $available_amount;

        return $this;
    }

    /**
     * Gets is_limit_flexible
     *
     * @return bool
     */
    public function getIsLimitFlexible()
    {
        return $this->container['is_limit_flexible'];
    }

    /**
     * Sets is_limit_flexible
     *
     * @param bool $is_limit_flexible Boolean to indicate if the `credit_limit` is flexible.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setIsLimitFlexible($is_limit_flexible)
    {
        $this->container['is_limit_flexible'] = $is_limit_flexible;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The type of limit. We return one of the following values:    - `TOTAL_LIMIT`   - `MODAL_LIMIT`    > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets consolidation_type
     *
     * @return string
     */
    public function getConsolidationType()
    {
        return $this->container['consolidation_type'];
    }

    /**
     * Sets consolidation_type
     *
     * @param string $consolidation_type Indicates whether or not the credit limit is consolidated or individual.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setConsolidationType($consolidation_type)
    {
        $this->container['consolidation_type'] = $consolidation_type;

        return $this;
    }

    /**
     * Gets line_name
     *
     * @return string
     */
    public function getLineName()
    {
        return $this->container['line_name'];
    }

    /**
     * Sets line_name
     *
     * @param string $line_name The credit limit line name.
     *
     * @return $this
     */
    public function setLineName($line_name)
    {
        $this->container['line_name'] = $line_name;

        return $this;
    }

    /**
     * Gets line_name_additional_info
     *
     * @return string
     */
    public function getLineNameAdditionalInfo()
    {
        return $this->container['line_name_additional_info'];
    }

    /**
     * Sets line_name_additional_info
     *
     * @param string $line_name_additional_info Additional information about the line name.
     *
     * @return $this
     */
    public function setLineNameAdditionalInfo($line_name_additional_info)
    {
        $this->container['line_name_additional_info'] = $line_name_additional_info;

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
