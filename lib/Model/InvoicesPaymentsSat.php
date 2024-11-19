<?php
/**
 * InvoicesPaymentsSat
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
 * InvoicesPaymentsSat Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InvoicesPaymentsSat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InvoicesPaymentsSat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date' => '\DateTime',
        'payment_type' => 'string',
        'currency' => 'string',
        'exchange_rate' => 'string',
        'amount' => 'float',
        'operation_number' => 'string',
        'beneficiary_rfc' => 'string',
        'beneficiary_account_number' => 'string',
        'payer_rfc' => 'string',
        'payer_account_number' => 'string',
        'payer_bank_name' => 'string',
        'related_documents' => '\Swagger\Client\Model\ApiinvoicesRelatedDocuments[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date' => 'date-time',
        'payment_type' => null,
        'currency' => null,
        'exchange_rate' => null,
        'amount' => 'float',
        'operation_number' => null,
        'beneficiary_rfc' => null,
        'beneficiary_account_number' => null,
        'payer_rfc' => null,
        'payer_account_number' => null,
        'payer_bank_name' => null,
        'related_documents' => null
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
        'date' => 'date',
        'payment_type' => 'payment_type',
        'currency' => 'currency',
        'exchange_rate' => 'exchange_rate',
        'amount' => 'amount',
        'operation_number' => 'operation_number',
        'beneficiary_rfc' => 'beneficiary_rfc',
        'beneficiary_account_number' => 'beneficiary_account_number',
        'payer_rfc' => 'payer_rfc',
        'payer_account_number' => 'payer_account_number',
        'payer_bank_name' => 'payer_bank_name',
        'related_documents' => 'related_documents'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
        'payment_type' => 'setPaymentType',
        'currency' => 'setCurrency',
        'exchange_rate' => 'setExchangeRate',
        'amount' => 'setAmount',
        'operation_number' => 'setOperationNumber',
        'beneficiary_rfc' => 'setBeneficiaryRfc',
        'beneficiary_account_number' => 'setBeneficiaryAccountNumber',
        'payer_rfc' => 'setPayerRfc',
        'payer_account_number' => 'setPayerAccountNumber',
        'payer_bank_name' => 'setPayerBankName',
        'related_documents' => 'setRelatedDocuments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
        'payment_type' => 'getPaymentType',
        'currency' => 'getCurrency',
        'exchange_rate' => 'getExchangeRate',
        'amount' => 'getAmount',
        'operation_number' => 'getOperationNumber',
        'beneficiary_rfc' => 'getBeneficiaryRfc',
        'beneficiary_account_number' => 'getBeneficiaryAccountNumber',
        'payer_rfc' => 'getPayerRfc',
        'payer_account_number' => 'getPayerAccountNumber',
        'payer_bank_name' => 'getPayerBankName',
        'related_documents' => 'getRelatedDocuments'
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
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['payment_type'] = isset($data['payment_type']) ? $data['payment_type'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['exchange_rate'] = isset($data['exchange_rate']) ? $data['exchange_rate'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['operation_number'] = isset($data['operation_number']) ? $data['operation_number'] : null;
        $this->container['beneficiary_rfc'] = isset($data['beneficiary_rfc']) ? $data['beneficiary_rfc'] : null;
        $this->container['beneficiary_account_number'] = isset($data['beneficiary_account_number']) ? $data['beneficiary_account_number'] : null;
        $this->container['payer_rfc'] = isset($data['payer_rfc']) ? $data['payer_rfc'] : null;
        $this->container['payer_account_number'] = isset($data['payer_account_number']) ? $data['payer_account_number'] : null;
        $this->container['payer_bank_name'] = isset($data['payer_bank_name']) ? $data['payer_bank_name'] : null;
        $this->container['related_documents'] = isset($data['related_documents']) ? $data['related_documents'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['payment_type'] === null) {
            $invalidProperties[] = "'payment_type' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['exchange_rate'] === null) {
            $invalidProperties[] = "'exchange_rate' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['operation_number'] === null) {
            $invalidProperties[] = "'operation_number' can't be null";
        }
        if ($this->container['beneficiary_account_number'] === null) {
            $invalidProperties[] = "'beneficiary_account_number' can't be null";
        }
        if ($this->container['payer_rfc'] === null) {
            $invalidProperties[] = "'payer_rfc' can't be null";
        }
        if ($this->container['payer_account_number'] === null) {
            $invalidProperties[] = "'payer_account_number' can't be null";
        }
        if ($this->container['payer_bank_name'] === null) {
            $invalidProperties[] = "'payer_bank_name' can't be null";
        }
        if ($this->container['related_documents'] === null) {
            $invalidProperties[] = "'related_documents' can't be null";
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
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date ISO-8601 timestamp when the payment was made.
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets payment_type
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     *
     * @param string $payment_type Payment type code used for this invoice, as defined by the country's legal entity.  - 🇲🇽 Mexico [SAT catalog reference article](https://developers.belvo.com/docs/sat-catalogs#payment-type)
     *
     * @return $this
     */
    public function setPaymentType($payment_type)
    {
        $this->container['payment_type'] = $payment_type;

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
     * @param string $currency The currency of the payment. For example:  - 🇧🇷 BRL (Brazilian Real) - 🇨🇴 COP (Colombian Peso) - 🇲🇽 MXN (Mexican Peso)  Please note that other currencies other than in the list above may be returned.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets exchange_rate
     *
     * @return string
     */
    public function getExchangeRate()
    {
        return $this->container['exchange_rate'];
    }

    /**
     * Sets exchange_rate
     *
     * @param string $exchange_rate The `currency` to MXN currency exchange rate when the payment was made.
     *
     * @return $this
     */
    public function setExchangeRate($exchange_rate)
    {
        $this->container['exchange_rate'] = $exchange_rate;

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
     * @param float $amount The invoice amount, in the currency of the original invoice.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets operation_number
     *
     * @return string
     */
    public function getOperationNumber()
    {
        return $this->container['operation_number'];
    }

    /**
     * Sets operation_number
     *
     * @param string $operation_number The fiscal institution's internal identifier for the operation.
     *
     * @return $this
     */
    public function setOperationNumber($operation_number)
    {
        $this->container['operation_number'] = $operation_number;

        return $this;
    }

    /**
     * Gets beneficiary_rfc
     *
     * @return string
     */
    public function getBeneficiaryRfc()
    {
        return $this->container['beneficiary_rfc'];
    }

    /**
     * Sets beneficiary_rfc
     *
     * @param string $beneficiary_rfc The fiscal ID of the payment beneficiary.
     *
     * @return $this
     */
    public function setBeneficiaryRfc($beneficiary_rfc)
    {
        $this->container['beneficiary_rfc'] = $beneficiary_rfc;

        return $this;
    }

    /**
     * Gets beneficiary_account_number
     *
     * @return string
     */
    public function getBeneficiaryAccountNumber()
    {
        return $this->container['beneficiary_account_number'];
    }

    /**
     * Sets beneficiary_account_number
     *
     * @param string $beneficiary_account_number The bank account number of the payment beneficiary.
     *
     * @return $this
     */
    public function setBeneficiaryAccountNumber($beneficiary_account_number)
    {
        $this->container['beneficiary_account_number'] = $beneficiary_account_number;

        return $this;
    }

    /**
     * Gets payer_rfc
     *
     * @return string
     */
    public function getPayerRfc()
    {
        return $this->container['payer_rfc'];
    }

    /**
     * Sets payer_rfc
     *
     * @param string $payer_rfc The fiscal ID of the payment issuer.
     *
     * @return $this
     */
    public function setPayerRfc($payer_rfc)
    {
        $this->container['payer_rfc'] = $payer_rfc;

        return $this;
    }

    /**
     * Gets payer_account_number
     *
     * @return string
     */
    public function getPayerAccountNumber()
    {
        return $this->container['payer_account_number'];
    }

    /**
     * Sets payer_account_number
     *
     * @param string $payer_account_number The bank account number of the payment issuer.
     *
     * @return $this
     */
    public function setPayerAccountNumber($payer_account_number)
    {
        $this->container['payer_account_number'] = $payer_account_number;

        return $this;
    }

    /**
     * Gets payer_bank_name
     *
     * @return string
     */
    public function getPayerBankName()
    {
        return $this->container['payer_bank_name'];
    }

    /**
     * Sets payer_bank_name
     *
     * @param string $payer_bank_name The banking institution that was used by the payment issuer.
     *
     * @return $this
     */
    public function setPayerBankName($payer_bank_name)
    {
        $this->container['payer_bank_name'] = $payer_bank_name;

        return $this;
    }

    /**
     * Gets related_documents
     *
     * @return \Swagger\Client\Model\ApiinvoicesRelatedDocuments[]
     */
    public function getRelatedDocuments()
    {
        return $this->container['related_documents'];
    }

    /**
     * Sets related_documents
     *
     * @param \Swagger\Client\Model\ApiinvoicesRelatedDocuments[] $related_documents A list of all the related deferred invoices affected by the payment.
     *
     * @return $this
     */
    public function setRelatedDocuments($related_documents)
    {
        $this->container['related_documents'] = $related_documents;

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
