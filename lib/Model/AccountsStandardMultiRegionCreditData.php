<?php
/**
 * AccountsStandardMultiRegionCreditData
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
 * AccountsStandardMultiRegionCreditData Class Doc Comment
 *
 * @category Class
 * @description The credit options associated with this account.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountsStandardMultiRegionCreditData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Accounts Standard MultiRegion_credit_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'credit_limit' => 'float',
        'collected_at' => '\DateTime',
        'cutting_date' => 'string',
        'next_payment_date' => 'string',
        'minimum_payment' => 'float',
        'no_interest_payment' => 'float',
        'interest_rate' => 'float',
        'monthly_payment' => 'float',
        'last_payment_date' => 'string',
        'last_period_balance' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'credit_limit' => 'float',
        'collected_at' => 'date-time',
        'cutting_date' => null,
        'next_payment_date' => null,
        'minimum_payment' => 'float',
        'no_interest_payment' => 'float',
        'interest_rate' => 'float',
        'monthly_payment' => null,
        'last_payment_date' => null,
        'last_period_balance' => null
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
        'credit_limit' => 'credit_limit',
        'collected_at' => 'collected_at',
        'cutting_date' => 'cutting_date',
        'next_payment_date' => 'next_payment_date',
        'minimum_payment' => 'minimum_payment',
        'no_interest_payment' => 'no_interest_payment',
        'interest_rate' => 'interest_rate',
        'monthly_payment' => 'monthly_payment',
        'last_payment_date' => 'last_payment_date',
        'last_period_balance' => 'last_period_balance'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'credit_limit' => 'setCreditLimit',
        'collected_at' => 'setCollectedAt',
        'cutting_date' => 'setCuttingDate',
        'next_payment_date' => 'setNextPaymentDate',
        'minimum_payment' => 'setMinimumPayment',
        'no_interest_payment' => 'setNoInterestPayment',
        'interest_rate' => 'setInterestRate',
        'monthly_payment' => 'setMonthlyPayment',
        'last_payment_date' => 'setLastPaymentDate',
        'last_period_balance' => 'setLastPeriodBalance'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'credit_limit' => 'getCreditLimit',
        'collected_at' => 'getCollectedAt',
        'cutting_date' => 'getCuttingDate',
        'next_payment_date' => 'getNextPaymentDate',
        'minimum_payment' => 'getMinimumPayment',
        'no_interest_payment' => 'getNoInterestPayment',
        'interest_rate' => 'getInterestRate',
        'monthly_payment' => 'getMonthlyPayment',
        'last_payment_date' => 'getLastPaymentDate',
        'last_period_balance' => 'getLastPeriodBalance'
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
        $this->container['credit_limit'] = isset($data['credit_limit']) ? $data['credit_limit'] : null;
        $this->container['collected_at'] = isset($data['collected_at']) ? $data['collected_at'] : null;
        $this->container['cutting_date'] = isset($data['cutting_date']) ? $data['cutting_date'] : null;
        $this->container['next_payment_date'] = isset($data['next_payment_date']) ? $data['next_payment_date'] : null;
        $this->container['minimum_payment'] = isset($data['minimum_payment']) ? $data['minimum_payment'] : null;
        $this->container['no_interest_payment'] = isset($data['no_interest_payment']) ? $data['no_interest_payment'] : null;
        $this->container['interest_rate'] = isset($data['interest_rate']) ? $data['interest_rate'] : null;
        $this->container['monthly_payment'] = isset($data['monthly_payment']) ? $data['monthly_payment'] : null;
        $this->container['last_payment_date'] = isset($data['last_payment_date']) ? $data['last_payment_date'] : null;
        $this->container['last_period_balance'] = isset($data['last_period_balance']) ? $data['last_period_balance'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['credit_limit'] === null) {
            $invalidProperties[] = "'credit_limit' can't be null";
        }
        if ($this->container['collected_at'] === null) {
            $invalidProperties[] = "'collected_at' can't be null";
        }
        if ($this->container['cutting_date'] === null) {
            $invalidProperties[] = "'cutting_date' can't be null";
        }
        if ($this->container['next_payment_date'] === null) {
            $invalidProperties[] = "'next_payment_date' can't be null";
        }
        if ($this->container['minimum_payment'] === null) {
            $invalidProperties[] = "'minimum_payment' can't be null";
        }
        if ($this->container['no_interest_payment'] === null) {
            $invalidProperties[] = "'no_interest_payment' can't be null";
        }
        if ($this->container['interest_rate'] === null) {
            $invalidProperties[] = "'interest_rate' can't be null";
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
     * @param float $credit_limit The maximum amount of credit the owner can receive.
     *
     * @return $this
     */
    public function setCreditLimit($credit_limit)
    {
        $this->container['credit_limit'] = $credit_limit;

        return $this;
    }

    /**
     * Gets collected_at
     *
     * @return \DateTime
     */
    public function getCollectedAt()
    {
        return $this->container['collected_at'];
    }

    /**
     * Sets collected_at
     *
     * @param \DateTime $collected_at The ISO-8601 timestamp when the data point was collected.
     *
     * @return $this
     */
    public function setCollectedAt($collected_at)
    {
        $this->container['collected_at'] = $collected_at;

        return $this;
    }

    /**
     * Gets cutting_date
     *
     * @return string
     */
    public function getCuttingDate()
    {
        return $this->container['cutting_date'];
    }

    /**
     * Sets cutting_date
     *
     * @param string $cutting_date The closing date of the credit period, in `YYYY-MM-DD` format.
     *
     * @return $this
     */
    public function setCuttingDate($cutting_date)
    {
        $this->container['cutting_date'] = $cutting_date;

        return $this;
    }

    /**
     * Gets next_payment_date
     *
     * @return string
     */
    public function getNextPaymentDate()
    {
        return $this->container['next_payment_date'];
    }

    /**
     * Sets next_payment_date
     *
     * @param string $next_payment_date The due date for the next payment , in `YYYY-MM-DD` format.
     *
     * @return $this
     */
    public function setNextPaymentDate($next_payment_date)
    {
        $this->container['next_payment_date'] = $next_payment_date;

        return $this;
    }

    /**
     * Gets minimum_payment
     *
     * @return float
     */
    public function getMinimumPayment()
    {
        return $this->container['minimum_payment'];
    }

    /**
     * Sets minimum_payment
     *
     * @param float $minimum_payment The minimum amount to be paid on the `next_payment_date`.
     *
     * @return $this
     */
    public function setMinimumPayment($minimum_payment)
    {
        $this->container['minimum_payment'] = $minimum_payment;

        return $this;
    }

    /**
     * Gets no_interest_payment
     *
     * @return float
     */
    public function getNoInterestPayment()
    {
        return $this->container['no_interest_payment'];
    }

    /**
     * Sets no_interest_payment
     *
     * @param float $no_interest_payment The minimum amount required to pay to avoid generating interest.
     *
     * @return $this
     */
    public function setNoInterestPayment($no_interest_payment)
    {
        $this->container['no_interest_payment'] = $no_interest_payment;

        return $this;
    }

    /**
     * Gets interest_rate
     *
     * @return float
     */
    public function getInterestRate()
    {
        return $this->container['interest_rate'];
    }

    /**
     * Sets interest_rate
     *
     * @param float $interest_rate The annualized interest rate of the credit.
     *
     * @return $this
     */
    public function setInterestRate($interest_rate)
    {
        $this->container['interest_rate'] = $interest_rate;

        return $this;
    }

    /**
     * Gets monthly_payment
     *
     * @return float
     */
    public function getMonthlyPayment()
    {
        return $this->container['monthly_payment'];
    }

    /**
     * Sets monthly_payment
     *
     * @param float $monthly_payment *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.*  *The recurrent monthly payment, if applicable.*
     *
     * @return $this
     */
    public function setMonthlyPayment($monthly_payment)
    {
        $this->container['monthly_payment'] = $monthly_payment;

        return $this;
    }

    /**
     * Gets last_payment_date
     *
     * @return string
     */
    public function getLastPaymentDate()
    {
        return $this->container['last_payment_date'];
    }

    /**
     * Sets last_payment_date
     *
     * @param string $last_payment_date *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.*   *The date when the last credit payment was made, in `YYYY-MM-DD` format.*
     *
     * @return $this
     */
    public function setLastPaymentDate($last_payment_date)
    {
        $this->container['last_payment_date'] = $last_payment_date;

        return $this;
    }

    /**
     * Gets last_period_balance
     *
     * @return string
     */
    public function getLastPeriodBalance()
    {
        return $this->container['last_period_balance'];
    }

    /**
     * Sets last_period_balance
     *
     * @param string $last_period_balance *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.*   *The balance remaining after the `last_payment_date`.*
     *
     * @return $this
     */
    public function setLastPeriodBalance($last_period_balance)
    {
        $this->container['last_period_balance'] = $last_period_balance;

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
