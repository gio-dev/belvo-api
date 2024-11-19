<?php
/**
 * InlineResponse20010
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
 * InlineResponse20010 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20010 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_10';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'created_at' => '\DateTime',
        'collected_at' => '\DateTime',
        'account' => '\Swagger\Client\Model\AccountsOFDABrazil',
        'internal_identification' => 'string',
        'bill_name' => 'string',
        'due_date' => '\DateTime',
        'currency' => 'string',
        'total_amount' => 'float',
        'minimum_amount' => 'float',
        'is_installment' => 'bool',
        'finance_charges' => '\Swagger\Client\Model\ApibillsFinanceCharges[]',
        'payments' => '\Swagger\Client\Model\ApibillsPayments[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'created_at' => 'date-time',
        'collected_at' => 'date-time',
        'account' => null,
        'internal_identification' => null,
        'bill_name' => null,
        'due_date' => 'date',
        'currency' => null,
        'total_amount' => 'float',
        'minimum_amount' => 'float',
        'is_installment' => null,
        'finance_charges' => null,
        'payments' => null
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
        'id' => 'id',
        'created_at' => 'created_at',
        'collected_at' => 'collected_at',
        'account' => 'account',
        'internal_identification' => 'internal_identification',
        'bill_name' => 'bill_name',
        'due_date' => 'due_date',
        'currency' => 'currency',
        'total_amount' => 'total_amount',
        'minimum_amount' => 'minimum_amount',
        'is_installment' => 'is_installment',
        'finance_charges' => 'finance_charges',
        'payments' => 'payments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'collected_at' => 'setCollectedAt',
        'account' => 'setAccount',
        'internal_identification' => 'setInternalIdentification',
        'bill_name' => 'setBillName',
        'due_date' => 'setDueDate',
        'currency' => 'setCurrency',
        'total_amount' => 'setTotalAmount',
        'minimum_amount' => 'setMinimumAmount',
        'is_installment' => 'setIsInstallment',
        'finance_charges' => 'setFinanceCharges',
        'payments' => 'setPayments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'collected_at' => 'getCollectedAt',
        'account' => 'getAccount',
        'internal_identification' => 'getInternalIdentification',
        'bill_name' => 'getBillName',
        'due_date' => 'getDueDate',
        'currency' => 'getCurrency',
        'total_amount' => 'getTotalAmount',
        'minimum_amount' => 'getMinimumAmount',
        'is_installment' => 'getIsInstallment',
        'finance_charges' => 'getFinanceCharges',
        'payments' => 'getPayments'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['collected_at'] = isset($data['collected_at']) ? $data['collected_at'] : null;
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['internal_identification'] = isset($data['internal_identification']) ? $data['internal_identification'] : null;
        $this->container['bill_name'] = isset($data['bill_name']) ? $data['bill_name'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['minimum_amount'] = isset($data['minimum_amount']) ? $data['minimum_amount'] : null;
        $this->container['is_installment'] = isset($data['is_installment']) ? $data['is_installment'] : null;
        $this->container['finance_charges'] = isset($data['finance_charges']) ? $data['finance_charges'] : null;
        $this->container['payments'] = isset($data['payments']) ? $data['payments'] : null;
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Belvo's unique identifier for the current item.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at The ISO-8601 timestamp of when the data point was created in Belvo's database.
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

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
     * Gets account
     *
     * @return \Swagger\Client\Model\AccountsOFDABrazil
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param \Swagger\Client\Model\AccountsOFDABrazil $account account
     *
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets internal_identification
     *
     * @return string
     */
    public function getInternalIdentification()
    {
        return $this->container['internal_identification'];
    }

    /**
     * Sets internal_identification
     *
     * @param string $internal_identification The institution's internal identifier for the bill.
     *
     * @return $this
     */
    public function setInternalIdentification($internal_identification)
    {
        $this->container['internal_identification'] = $internal_identification;

        return $this;
    }

    /**
     * Gets bill_name
     *
     * @return string
     */
    public function getBillName()
    {
        return $this->container['bill_name'];
    }

    /**
     * Sets bill_name
     *
     * @param string $bill_name The title of the monthly credit card bill the transaction belongs to. The format of the returned value is institution specific, however, some common examples are:  - diciembre-2021 - dec-2021 - dec-21  > **Note**: This field is only returned for 'closed' bills (meaning the billing period has ended and the bill has been emitted). If the billing period is still ongoing, we return `null`.
     *
     * @return $this
     */
    public function setBillName($bill_name)
    {
        $this->container['bill_name'] = $bill_name;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime $due_date The date that the bill is to be paid, in `YYYY-MM-DD` format.
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency The three-letter currency code (ISO-4217).
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return float
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param float $total_amount The total amount of the bill.
     *
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets minimum_amount
     *
     * @return float
     */
    public function getMinimumAmount()
    {
        return $this->container['minimum_amount'];
    }

    /**
     * Sets minimum_amount
     *
     * @param float $minimum_amount The minimum amount to pay.
     *
     * @return $this
     */
    public function setMinimumAmount($minimum_amount)
    {
        $this->container['minimum_amount'] = $minimum_amount;

        return $this;
    }

    /**
     * Gets is_installment
     *
     * @return bool
     */
    public function getIsInstallment()
    {
        return $this->container['is_installment'];
    }

    /**
     * Sets is_installment
     *
     * @param bool $is_installment Boolean to indicate whether this bill can be paid in installments.
     *
     * @return $this
     */
    public function setIsInstallment($is_installment)
    {
        $this->container['is_installment'] = $is_installment;

        return $this;
    }

    /**
     * Gets finance_charges
     *
     * @return \Swagger\Client\Model\ApibillsFinanceCharges[]
     */
    public function getFinanceCharges()
    {
        return $this->container['finance_charges'];
    }

    /**
     * Sets finance_charges
     *
     * @param \Swagger\Client\Model\ApibillsFinanceCharges[] $finance_charges finance_charges
     *
     * @return $this
     */
    public function setFinanceCharges($finance_charges)
    {
        $this->container['finance_charges'] = $finance_charges;

        return $this;
    }

    /**
     * Gets payments
     *
     * @return \Swagger\Client\Model\ApibillsPayments[]
     */
    public function getPayments()
    {
        return $this->container['payments'];
    }

    /**
     * Sets payments
     *
     * @param \Swagger\Client\Model\ApibillsPayments[] $payments payments
     *
     * @return $this
     */
    public function setPayments($payments)
    {
        $this->container['payments'] = $payments;

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
