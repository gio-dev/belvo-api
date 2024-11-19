<?php
/**
 * AccountLoanDataInterestRateDataOpenFinanceBrazil
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
 * AccountLoanDataInterestRateDataOpenFinanceBrazil Class Doc Comment
 *
 * @category Class
 * @description Detailed information regarding the interest rate.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountLoanDataInterestRateDataOpenFinanceBrazil implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountLoanDataInterestRateDataOpenFinanceBrazil';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tax_type' => 'string',
        'rate_type' => 'string',
        'type' => 'string',
        'calculation_base' => 'string',
        'reference_index_type' => 'string',
        'reference_index_subtype' => 'string',
        'reference_index_info' => 'string',
        'pre_fixed_rate' => 'float',
        'post_fixed_rate' => 'float',
        'additional_info' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tax_type' => null,
        'rate_type' => null,
        'type' => null,
        'calculation_base' => null,
        'reference_index_type' => null,
        'reference_index_subtype' => null,
        'reference_index_info' => null,
        'pre_fixed_rate' => 'float',
        'post_fixed_rate' => 'float',
        'additional_info' => null
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
        'tax_type' => 'tax_type',
        'rate_type' => 'rate_type',
        'type' => 'type',
        'calculation_base' => 'calculation_base',
        'reference_index_type' => 'reference_index_type',
        'reference_index_subtype' => 'reference_index_subtype',
        'reference_index_info' => 'reference_index_info',
        'pre_fixed_rate' => 'pre_fixed_rate',
        'post_fixed_rate' => 'post_fixed_rate',
        'additional_info' => 'additional_info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tax_type' => 'setTaxType',
        'rate_type' => 'setRateType',
        'type' => 'setType',
        'calculation_base' => 'setCalculationBase',
        'reference_index_type' => 'setReferenceIndexType',
        'reference_index_subtype' => 'setReferenceIndexSubtype',
        'reference_index_info' => 'setReferenceIndexInfo',
        'pre_fixed_rate' => 'setPreFixedRate',
        'post_fixed_rate' => 'setPostFixedRate',
        'additional_info' => 'setAdditionalInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tax_type' => 'getTaxType',
        'rate_type' => 'getRateType',
        'type' => 'getType',
        'calculation_base' => 'getCalculationBase',
        'reference_index_type' => 'getReferenceIndexType',
        'reference_index_subtype' => 'getReferenceIndexSubtype',
        'reference_index_info' => 'getReferenceIndexInfo',
        'pre_fixed_rate' => 'getPreFixedRate',
        'post_fixed_rate' => 'getPostFixedRate',
        'additional_info' => 'getAdditionalInfo'
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

    const TAX_TYPE_NOMINAL = 'NOMINAL';
    const TAX_TYPE_EFFECTIVE = 'EFFECTIVE';
    const RATE_TYPE_SIMPLE = 'SIMPLE';
    const RATE_TYPE_COMPOUND = 'COMPOUND';
    const TYPE_MONTHLY = 'MONTHLY';
    const TYPE_YEARLY = 'YEARLY';
    const REFERENCE_INDEX_TYPE_WITHOUT_INDEX_TYPE = 'WITHOUT_INDEX_TYPE';
    const REFERENCE_INDEX_TYPE_PRE_FIXED = 'PRE_FIXED';
    const REFERENCE_INDEX_TYPE_POST_FIXED = 'POST_FIXED';
    const REFERENCE_INDEX_TYPE_FLOATING = 'FLOATING';
    const REFERENCE_INDEX_TYPE_INDEXED_PRICE = 'INDEXED_PRICE';
    const REFERENCE_INDEX_TYPE_RURAL_CREDIT = 'RURAL_CREDIT';
    const REFERENCE_INDEX_TYPE_OTHER_INDEX = 'OTHER_INDEX';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTaxTypeAllowableValues()
    {
        return [
            self::TAX_TYPE_NOMINAL,
            self::TAX_TYPE_EFFECTIVE,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRateTypeAllowableValues()
    {
        return [
            self::RATE_TYPE_SIMPLE,
            self::RATE_TYPE_COMPOUND,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_MONTHLY,
            self::TYPE_YEARLY,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReferenceIndexTypeAllowableValues()
    {
        return [
            self::REFERENCE_INDEX_TYPE_WITHOUT_INDEX_TYPE,
            self::REFERENCE_INDEX_TYPE_PRE_FIXED,
            self::REFERENCE_INDEX_TYPE_POST_FIXED,
            self::REFERENCE_INDEX_TYPE_FLOATING,
            self::REFERENCE_INDEX_TYPE_INDEXED_PRICE,
            self::REFERENCE_INDEX_TYPE_RURAL_CREDIT,
            self::REFERENCE_INDEX_TYPE_OTHER_INDEX,
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
        $this->container['tax_type'] = isset($data['tax_type']) ? $data['tax_type'] : null;
        $this->container['rate_type'] = isset($data['rate_type']) ? $data['rate_type'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['calculation_base'] = isset($data['calculation_base']) ? $data['calculation_base'] : null;
        $this->container['reference_index_type'] = isset($data['reference_index_type']) ? $data['reference_index_type'] : null;
        $this->container['reference_index_subtype'] = isset($data['reference_index_subtype']) ? $data['reference_index_subtype'] : null;
        $this->container['reference_index_info'] = isset($data['reference_index_info']) ? $data['reference_index_info'] : null;
        $this->container['pre_fixed_rate'] = isset($data['pre_fixed_rate']) ? $data['pre_fixed_rate'] : null;
        $this->container['post_fixed_rate'] = isset($data['post_fixed_rate']) ? $data['post_fixed_rate'] : null;
        $this->container['additional_info'] = isset($data['additional_info']) ? $data['additional_info'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['tax_type'] === null) {
            $invalidProperties[] = "'tax_type' can't be null";
        }
        $allowedValues = $this->getTaxTypeAllowableValues();
        if (!is_null($this->container['tax_type']) && !in_array($this->container['tax_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'tax_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['rate_type'] === null) {
            $invalidProperties[] = "'rate_type' can't be null";
        }
        $allowedValues = $this->getRateTypeAllowableValues();
        if (!is_null($this->container['rate_type']) && !in_array($this->container['rate_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'rate_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['calculation_base'] === null) {
            $invalidProperties[] = "'calculation_base' can't be null";
        }
        if ($this->container['reference_index_type'] === null) {
            $invalidProperties[] = "'reference_index_type' can't be null";
        }
        $allowedValues = $this->getReferenceIndexTypeAllowableValues();
        if (!is_null($this->container['reference_index_type']) && !in_array($this->container['reference_index_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'reference_index_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['reference_index_subtype'] === null) {
            $invalidProperties[] = "'reference_index_subtype' can't be null";
        }
        if ($this->container['reference_index_info'] === null) {
            $invalidProperties[] = "'reference_index_info' can't be null";
        }
        if ($this->container['pre_fixed_rate'] === null) {
            $invalidProperties[] = "'pre_fixed_rate' can't be null";
        }
        if ($this->container['post_fixed_rate'] === null) {
            $invalidProperties[] = "'post_fixed_rate' can't be null";
        }
        if ($this->container['additional_info'] === null) {
            $invalidProperties[] = "'additional_info' can't be null";
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
     * Gets tax_type
     *
     * @return string
     */
    public function getTaxType()
    {
        return $this->container['tax_type'];
    }

    /**
     * Sets tax_type
     *
     * @param string $tax_type The type of interest rate tax. We return one of the following values:    - `NOMINAL`   - `EFFECTIVE`      > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setTaxType($tax_type)
    {
        $allowedValues = $this->getTaxTypeAllowableValues();
        if (!in_array($tax_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'tax_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tax_type'] = $tax_type;

        return $this;
    }

    /**
     * Gets rate_type
     *
     * @return string
     */
    public function getRateType()
    {
        return $this->container['rate_type'];
    }

    /**
     * Sets rate_type
     *
     * @param string $rate_type The type of interest rate. We return one of the following values:    - `SIMPLE`   - `COMPOUND`    > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setRateType($rate_type)
    {
        $allowedValues = $this->getRateTypeAllowableValues();
        if (!in_array($rate_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'rate_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['rate_type'] = $rate_type;

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
     * @param string $type The period that the interest is applied to the loan.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
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
     * Gets calculation_base
     *
     * @return string
     */
    public function getCalculationBase()
    {
        return $this->container['calculation_base'];
    }

    /**
     * Sets calculation_base
     *
     * @param string $calculation_base The base calculation for the interest rate.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setCalculationBase($calculation_base)
    {
        $this->container['calculation_base'] = $calculation_base;

        return $this;
    }

    /**
     * Gets reference_index_type
     *
     * @return string
     */
    public function getReferenceIndexType()
    {
        return $this->container['reference_index_type'];
    }

    /**
     * Sets reference_index_type
     *
     * @param string $reference_index_type The reference index rate. We return one of the following values:    - `WITHOUT_INDEX_TYPE`   - `PRE_FIXED`   - `POST_FIXED`   - `FLOATING`   - `INDEXED_PRICE`   - `RURAL_CREDIT`   - `OTHER_INDEX`    > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setReferenceIndexType($reference_index_type)
    {
        $allowedValues = $this->getReferenceIndexTypeAllowableValues();
        if (!in_array($reference_index_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'reference_index_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reference_index_type'] = $reference_index_type;

        return $this;
    }

    /**
     * Gets reference_index_subtype
     *
     * @return string
     */
    public function getReferenceIndexSubtype()
    {
        return $this->container['reference_index_subtype'];
    }

    /**
     * Sets reference_index_subtype
     *
     * @param string $reference_index_subtype The subtype of the reference index rate.
     *
     * @return $this
     */
    public function setReferenceIndexSubtype($reference_index_subtype)
    {
        $this->container['reference_index_subtype'] = $reference_index_subtype;

        return $this;
    }

    /**
     * Gets reference_index_info
     *
     * @return string
     */
    public function getReferenceIndexInfo()
    {
        return $this->container['reference_index_info'];
    }

    /**
     * Sets reference_index_info
     *
     * @param string $reference_index_info Additional information regarding the reference index rate.
     *
     * @return $this
     */
    public function setReferenceIndexInfo($reference_index_info)
    {
        $this->container['reference_index_info'] = $reference_index_info;

        return $this;
    }

    /**
     * Gets pre_fixed_rate
     *
     * @return float
     */
    public function getPreFixedRate()
    {
        return $this->container['pre_fixed_rate'];
    }

    /**
     * Sets pre_fixed_rate
     *
     * @param float $pre_fixed_rate The pre-fixed percentage rate of the interest rate.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setPreFixedRate($pre_fixed_rate)
    {
        $this->container['pre_fixed_rate'] = $pre_fixed_rate;

        return $this;
    }

    /**
     * Gets post_fixed_rate
     *
     * @return float
     */
    public function getPostFixedRate()
    {
        return $this->container['post_fixed_rate'];
    }

    /**
     * Sets post_fixed_rate
     *
     * @param float $post_fixed_rate The post-fixed percentage rate of the interest rate.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setPostFixedRate($post_fixed_rate)
    {
        $this->container['post_fixed_rate'] = $post_fixed_rate;

        return $this;
    }

    /**
     * Gets additional_info
     *
     * @return string
     */
    public function getAdditionalInfo()
    {
        return $this->container['additional_info'];
    }

    /**
     * Sets additional_info
     *
     * @param string $additional_info Additional information regarding the interest rate.
     *
     * @return $this
     */
    public function setAdditionalInfo($additional_info)
    {
        $this->container['additional_info'] = $additional_info;

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
