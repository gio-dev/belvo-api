<?php
/**
 * InvoicesPayrollSat
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
 * InvoicesPayrollSat Class Doc Comment
 *
 * @category Class
 * @description Details regarding the payroll payment. Only applicable for payroll invoices.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InvoicesPayrollSat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InvoicesPayrollSat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'days' => 'int',
        'type' => 'string',
        'amount' => 'float',
        'version' => 'string',
        'date_from' => '\DateTime',
        'date_to' => '\DateTime',
        'collected_at' => '\DateTime',
        'payment_date' => '\DateTime',
        'periodicity' => 'string',
        'earnings_breakdown' => '\Swagger\Client\Model\ApiinvoicesPayrollEarningsBreakdown[]',
        'tax_deductions' => '\Swagger\Client\Model\ApiinvoicesPayrollTaxDeductions[]',
        'other_payments' => '\Swagger\Client\Model\ApiinvoicesPayrollOtherPayments[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'days' => 'int32',
        'type' => null,
        'amount' => 'float',
        'version' => null,
        'date_from' => 'date',
        'date_to' => 'date',
        'collected_at' => 'date-time',
        'payment_date' => 'date',
        'periodicity' => null,
        'earnings_breakdown' => null,
        'tax_deductions' => null,
        'other_payments' => null
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
        'days' => 'days',
        'type' => 'type',
        'amount' => 'amount',
        'version' => 'version',
        'date_from' => 'date_from',
        'date_to' => 'date_to',
        'collected_at' => 'collected_at',
        'payment_date' => 'payment_date',
        'periodicity' => 'periodicity',
        'earnings_breakdown' => 'earnings_breakdown',
        'tax_deductions' => 'tax_deductions',
        'other_payments' => 'other_payments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'days' => 'setDays',
        'type' => 'setType',
        'amount' => 'setAmount',
        'version' => 'setVersion',
        'date_from' => 'setDateFrom',
        'date_to' => 'setDateTo',
        'collected_at' => 'setCollectedAt',
        'payment_date' => 'setPaymentDate',
        'periodicity' => 'setPeriodicity',
        'earnings_breakdown' => 'setEarningsBreakdown',
        'tax_deductions' => 'setTaxDeductions',
        'other_payments' => 'setOtherPayments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'days' => 'getDays',
        'type' => 'getType',
        'amount' => 'getAmount',
        'version' => 'getVersion',
        'date_from' => 'getDateFrom',
        'date_to' => 'getDateTo',
        'collected_at' => 'getCollectedAt',
        'payment_date' => 'getPaymentDate',
        'periodicity' => 'getPeriodicity',
        'earnings_breakdown' => 'getEarningsBreakdown',
        'tax_deductions' => 'getTaxDeductions',
        'other_payments' => 'getOtherPayments'
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

    const PERIODICITY_DAILY = 'DAILY';
    const PERIODICITY_WEEKLY = 'WEEKLY';
    const PERIODICITY_TENTH_DAY = 'TENTH_DAY';
    const PERIODICITY_FOURTEENTH_DAY = 'FOURTEENTH_DAY';
    const PERIODICITY_FIFTEENTH_DAY = 'FIFTEENTH_DAY';
    const PERIODICITY_MONTHLY = 'MONTHLY';
    const PERIODICITY_BIMONTHLY = 'BIMONTHLY';
    const PERIODICITY_PER_TASK = 'PER_TASK';
    const PERIODICITY_COMMISSION = 'COMMISSION';
    const PERIODICITY_ONE_OFF = 'ONE_OFF';
    const PERIODICITY_OTHER_PERIODICITY = 'OTHER_PERIODICITY';
    const PERIODICITY_NULL = 'null';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPeriodicityAllowableValues()
    {
        return [
            self::PERIODICITY_DAILY,
            self::PERIODICITY_WEEKLY,
            self::PERIODICITY_TENTH_DAY,
            self::PERIODICITY_FOURTEENTH_DAY,
            self::PERIODICITY_FIFTEENTH_DAY,
            self::PERIODICITY_MONTHLY,
            self::PERIODICITY_BIMONTHLY,
            self::PERIODICITY_PER_TASK,
            self::PERIODICITY_COMMISSION,
            self::PERIODICITY_ONE_OFF,
            self::PERIODICITY_OTHER_PERIODICITY,
            self::PERIODICITY_NULL,
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
        $this->container['days'] = isset($data['days']) ? $data['days'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['date_from'] = isset($data['date_from']) ? $data['date_from'] : null;
        $this->container['date_to'] = isset($data['date_to']) ? $data['date_to'] : null;
        $this->container['collected_at'] = isset($data['collected_at']) ? $data['collected_at'] : null;
        $this->container['payment_date'] = isset($data['payment_date']) ? $data['payment_date'] : null;
        $this->container['periodicity'] = isset($data['periodicity']) ? $data['periodicity'] : null;
        $this->container['earnings_breakdown'] = isset($data['earnings_breakdown']) ? $data['earnings_breakdown'] : null;
        $this->container['tax_deductions'] = isset($data['tax_deductions']) ? $data['tax_deductions'] : null;
        $this->container['other_payments'] = isset($data['other_payments']) ? $data['other_payments'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['days'] === null) {
            $invalidProperties[] = "'days' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['date_from'] === null) {
            $invalidProperties[] = "'date_from' can't be null";
        }
        if ($this->container['date_to'] === null) {
            $invalidProperties[] = "'date_to' can't be null";
        }
        if ($this->container['payment_date'] === null) {
            $invalidProperties[] = "'payment_date' can't be null";
        }
        $allowedValues = $this->getPeriodicityAllowableValues();
        if (!is_null($this->container['periodicity']) && !in_array($this->container['periodicity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'periodicity', must be one of '%s'",
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
     * Gets days
     *
     * @return int
     */
    public function getDays()
    {
        return $this->container['days'];
    }

    /**
     * Sets days
     *
     * @param int $days The number of days covered by the payment.
     *
     * @return $this
     */
    public function setDays($days)
    {
        $this->container['days'] = $days;

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
     * @param string $type The payroll type, as defined by the legal entity of the country.  - 🇲🇽 Mexico [SAT catalog reference article](https://developers.belvo.com/docs/sat-catalogs#payroll-type)
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount The total amount of the payroll payment.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version The version of the payroll object.
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets date_from
     *
     * @return \DateTime
     */
    public function getDateFrom()
    {
        return $this->container['date_from'];
    }

    /**
     * Sets date_from
     *
     * @param \DateTime $date_from The start date of the payment period, in `YYYY-MM-DD` format.
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
     * @return \DateTime
     */
    public function getDateTo()
    {
        return $this->container['date_to'];
    }

    /**
     * Sets date_to
     *
     * @param \DateTime $date_to The end date of the payment period, in `YYYY-MM-DD` format.
     *
     * @return $this
     */
    public function setDateTo($date_to)
    {
        $this->container['date_to'] = $date_to;

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
     * Gets payment_date
     *
     * @return \DateTime
     */
    public function getPaymentDate()
    {
        return $this->container['payment_date'];
    }

    /**
     * Sets payment_date
     *
     * @param \DateTime $payment_date The payment date, in `YYYY-MM-DD` format.
     *
     * @return $this
     */
    public function setPaymentDate($payment_date)
    {
        $this->container['payment_date'] = $payment_date;

        return $this;
    }

    /**
     * Gets periodicity
     *
     * @return string
     */
    public function getPeriodicity()
    {
        return $this->container['periodicity'];
    }

    /**
     * Sets periodicity
     *
     * @param string $periodicity How often the payroll payment is made.  For Mexico's SAT, we return one of the following values:    - `DAILY`   - `WEEKLY`   - `TENTH_DAY`   - `FOURTEENTH_DAY`   - `FIFTEENTH_DAY`   - `MONTHLY`   - `BIMONTHLY`   - `PER_TASK`   - `COMMISSION`   - `ONE_OFF`   - `OTHER_PERIODICITY`
     *
     * @return $this
     */
    public function setPeriodicity($periodicity)
    {
        $allowedValues = $this->getPeriodicityAllowableValues();
        if (!is_null($periodicity) && !in_array($periodicity, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'periodicity', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['periodicity'] = $periodicity;

        return $this;
    }

    /**
     * Gets earnings_breakdown
     *
     * @return \Swagger\Client\Model\ApiinvoicesPayrollEarningsBreakdown[]
     */
    public function getEarningsBreakdown()
    {
        return $this->container['earnings_breakdown'];
    }

    /**
     * Sets earnings_breakdown
     *
     * @param \Swagger\Client\Model\ApiinvoicesPayrollEarningsBreakdown[] $earnings_breakdown A breakdown of the earnings for the payroll payment.
     *
     * @return $this
     */
    public function setEarningsBreakdown($earnings_breakdown)
    {
        $this->container['earnings_breakdown'] = $earnings_breakdown;

        return $this;
    }

    /**
     * Gets tax_deductions
     *
     * @return \Swagger\Client\Model\ApiinvoicesPayrollTaxDeductions[]
     */
    public function getTaxDeductions()
    {
        return $this->container['tax_deductions'];
    }

    /**
     * Sets tax_deductions
     *
     * @param \Swagger\Client\Model\ApiinvoicesPayrollTaxDeductions[] $tax_deductions A breakdown of the tax deductions on the payroll payment.
     *
     * @return $this
     */
    public function setTaxDeductions($tax_deductions)
    {
        $this->container['tax_deductions'] = $tax_deductions;

        return $this;
    }

    /**
     * Gets other_payments
     *
     * @return \Swagger\Client\Model\ApiinvoicesPayrollOtherPayments[]
     */
    public function getOtherPayments()
    {
        return $this->container['other_payments'];
    }

    /**
     * Sets other_payments
     *
     * @param \Swagger\Client\Model\ApiinvoicesPayrollOtherPayments[] $other_payments A breakdown of other payments for the payroll.
     *
     * @return $this
     */
    public function setOtherPayments($other_payments)
    {
        $this->container['other_payments'] = $other_payments;

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
