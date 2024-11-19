<?php
/**
 * EnrichIncomesBody
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
 * EnrichIncomesBody Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnrichIncomesBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'enrich_incomes_body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'language' => 'string',
        'transactions' => '\Swagger\Client\Model\ApienrichincomesTransactions[]',
        'date_from' => 'string',
        'date_to' => 'string',
        'allowed_income_types' => 'string[]',
        'minimum_confidence_level' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'language' => null,
        'transactions' => null,
        'date_from' => null,
        'date_to' => null,
        'allowed_income_types' => null,
        'minimum_confidence_level' => null
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
        'language' => 'language',
        'transactions' => 'transactions',
        'date_from' => 'date_from',
        'date_to' => 'date_to',
        'allowed_income_types' => 'allowed_income_types',
        'minimum_confidence_level' => 'minimum_confidence_level'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'language' => 'setLanguage',
        'transactions' => 'setTransactions',
        'date_from' => 'setDateFrom',
        'date_to' => 'setDateTo',
        'allowed_income_types' => 'setAllowedIncomeTypes',
        'minimum_confidence_level' => 'setMinimumConfidenceLevel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'language' => 'getLanguage',
        'transactions' => 'getTransactions',
        'date_from' => 'getDateFrom',
        'date_to' => 'getDateTo',
        'allowed_income_types' => 'getAllowedIncomeTypes',
        'minimum_confidence_level' => 'getMinimumConfidenceLevel'
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

    const ALLOWED_INCOME_TYPES_SALARY = 'SALARY';
    const ALLOWED_INCOME_TYPES_GOVERNMENT = 'GOVERNMENT';
    const ALLOWED_INCOME_TYPES_INTEREST = 'INTEREST';
    const ALLOWED_INCOME_TYPES_RENT = 'RENT';
    const ALLOWED_INCOME_TYPES_RETIREMENT = 'RETIREMENT';
    const ALLOWED_INCOME_TYPES_FREELANCE = 'FREELANCE';
    const ALLOWED_INCOME_TYPES_ALTERNATIVE_INCOME = 'ALTERNATIVE_INCOME';
    const ALLOWED_INCOME_TYPES_TRANSFER = 'TRANSFER';
    const ALLOWED_INCOME_TYPES_DEPOSIT = 'DEPOSIT';
    const ALLOWED_INCOME_TYPES_UNKNOWN = 'UNKNOWN';
    const MINIMUM_CONFIDENCE_LEVEL_HIGH = 'HIGH';
    const MINIMUM_CONFIDENCE_LEVEL_MEDIUM = 'MEDIUM';
    const MINIMUM_CONFIDENCE_LEVEL_LOW = 'LOW';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAllowedIncomeTypesAllowableValues()
    {
        return [
            self::ALLOWED_INCOME_TYPES_SALARY,
            self::ALLOWED_INCOME_TYPES_GOVERNMENT,
            self::ALLOWED_INCOME_TYPES_INTEREST,
            self::ALLOWED_INCOME_TYPES_RENT,
            self::ALLOWED_INCOME_TYPES_RETIREMENT,
            self::ALLOWED_INCOME_TYPES_FREELANCE,
            self::ALLOWED_INCOME_TYPES_ALTERNATIVE_INCOME,
            self::ALLOWED_INCOME_TYPES_TRANSFER,
            self::ALLOWED_INCOME_TYPES_DEPOSIT,
            self::ALLOWED_INCOME_TYPES_UNKNOWN,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMinimumConfidenceLevelAllowableValues()
    {
        return [
            self::MINIMUM_CONFIDENCE_LEVEL_HIGH
            self::MINIMUM_CONFIDENCE_LEVEL_MEDIUM
            self::MINIMUM_CONFIDENCE_LEVEL_LOW
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
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['transactions'] = isset($data['transactions']) ? $data['transactions'] : null;
        $this->container['date_from'] = isset($data['date_from']) ? $data['date_from'] : null;
        $this->container['date_to'] = isset($data['date_to']) ? $data['date_to'] : null;
        $this->container['allowed_income_types'] = isset($data['allowed_income_types']) ? $data['allowed_income_types'] : null;
        $this->container['minimum_confidence_level'] = isset($data['minimum_confidence_level']) ? $data['minimum_confidence_level'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        if ($this->container['transactions'] === null) {
            $invalidProperties[] = "'transactions' can't be null";
        }
        $allowedValues = $this->getMinimumConfidenceLevelAllowableValues();
        if (!is_null($this->container['minimum_confidence_level']) && !in_array($this->container['minimum_confidence_level'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'minimum_confidence_level', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language Two-letter ISO 639-1 code for the language of the transaction.
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets transactions
     *
     * @return \Swagger\Client\Model\ApienrichincomesTransactions[]
     */
    public function getTransactions()
    {
        return $this->container['transactions'];
    }

    /**
     * Sets transactions
     *
     * @param \Swagger\Client\Model\ApienrichincomesTransactions[] $transactions An array of transaction objects that you want enriched.   **Note:** Each object corresponds to one, unique transaction and you can send through up to 10,000 transactions per request.
     *
     * @return $this
     */
    public function setTransactions($transactions)
    {
        $this->container['transactions'] = $transactions;

        return $this;
    }

    /**
     * Gets date_from
     *
     * @return string
     */
    public function getDateFrom()
    {
        return $this->container['date_from'];
    }

    /**
     * Sets date_from
     *
     * @param string $date_from The date from which you want to start getting incomes for, in `YYYY-MM-DD` format, within the last 365 days. When you use this parameter, you must also send `date_to`.   ⚠️ The value of `date_from` cannot be greater than `date_to`.
     *
     * @return $this
     */
    public function setDateFrom($date_from)
    {
        $this->container['date_from'] = $date_from;

        return $this;
    }

    /**
     * Gets date_to
     *
     * @return string
     */
    public function getDateTo()
    {
        return $this->container['date_to'];
    }

    /**
     * Sets date_to
     *
     * @param string $date_to The date you want to stop getting incomes for, in `YYYY-MM-DD` format, within the last 365 days. When you use this parameter, you must also send `date_from`.   ⚠️ The value of `date_to` cannot be greater than today's date (in other words, no future dates).
     *
     * @return $this
     */
    public function setDateTo($date_to)
    {
        $this->container['date_to'] = $date_to;

        return $this;
    }

    /**
     * Gets allowed_income_types
     *
     * @return string[]
     */
    public function getAllowedIncomeTypes()
    {
        return $this->container['allowed_income_types'];
    }

    /**
     * Sets allowed_income_types
     *
     * @param string[] $allowed_income_types The categories of the incomes you want to get information for.
     *
     * @return $this
     */
    public function setAllowedIncomeTypes($allowed_income_types)
    {
        $allowedValues = $this->getAllowedIncomeTypesAllowableValues();
        if (!is_null($allowed_income_types) && array_diff($allowed_income_types, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'allowed_income_types', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['allowed_income_types'] = $allowed_income_types;

        return $this;
    }

    /**
     * Gets minimum_confidence_level
     *
     * @return string
     */
    public function getMinimumConfidenceLevel()
    {
        return $this->container['minimum_confidence_level'];
    }

    /**
     * Sets minimum_confidence_level
     *
     * @param string $minimum_confidence_level The minimum confidence level of the incomes you want to get information for.  You can send through one of the following values:    - `HIGH`   - `MEDIUM`   - `LOW`
     *
     * @return $this
     */
    public function setMinimumConfidenceLevel($minimum_confidence_level)
    {
        $allowedValues = $this->getMinimumConfidenceLevelAllowableValues();
        if (!is_null($minimum_confidence_level) && !in_array($minimum_confidence_level, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'minimum_confidence_level', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['minimum_confidence_level'] = $minimum_confidence_level;

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
