<?php
/**
 * InvoiceWithIdSat
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
 * InvoiceWithIdSat Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InvoiceWithIdSat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InvoiceWithIdSat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'link' => 'string',
        'collected_at' => '\DateTime',
        'created_at' => '\DateTime',
        'invoice_identification' => 'string',
        'invoice_date' => 'string',
        'status' => 'string',
        'invoice_type' => 'string',
        'type' => 'string',
        'sender_id' => 'string',
        'sender_name' => 'string',
        'sender_tax_fraud_status' => 'string',
        'receiver_id' => 'string',
        'receiver_name' => 'string',
        'receiver_tax_fraud_status' => 'string',
        'cancelation_status' => 'string',
        'cancelation_update_date' => '\DateTime',
        'certification_date' => '\DateTime',
        'certification_authority' => 'string',
        'payment_type' => 'string',
        'payment_type_description' => 'string',
        'payment_method' => 'string',
        'payment_method_description' => 'string',
        'usage' => 'string',
        'version' => 'string',
        'place_of_issue' => 'string',
        'invoice_details' => '\Swagger\Client\Model\ApiinvoicesInvoiceDetails[]',
        'currency' => 'string',
        'subtotal_amount' => 'float',
        'exchange_rate' => 'float',
        'tax_amount' => 'float',
        'discount_amount' => 'float',
        'total_amount' => 'float',
        'payments' => '\Swagger\Client\Model\ApiinvoicesPayments[]',
        'payroll' => '\Swagger\Client\Model\ApiinvoicesPayroll',
        'folio' => 'string',
        'xml' => 'string',
        'warnings' => '\Swagger\Client\Model\ApiinvoicesWarnings',
        'sender_blacklist_status' => 'string',
        'receiver_blacklist_status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'link' => 'uuid',
        'collected_at' => 'date-time',
        'created_at' => 'date-time',
        'invoice_identification' => null,
        'invoice_date' => null,
        'status' => null,
        'invoice_type' => null,
        'type' => null,
        'sender_id' => null,
        'sender_name' => null,
        'sender_tax_fraud_status' => null,
        'receiver_id' => null,
        'receiver_name' => null,
        'receiver_tax_fraud_status' => null,
        'cancelation_status' => null,
        'cancelation_update_date' => 'date',
        'certification_date' => 'date',
        'certification_authority' => null,
        'payment_type' => null,
        'payment_type_description' => null,
        'payment_method' => null,
        'payment_method_description' => null,
        'usage' => null,
        'version' => null,
        'place_of_issue' => null,
        'invoice_details' => null,
        'currency' => null,
        'subtotal_amount' => 'float',
        'exchange_rate' => 'float',
        'tax_amount' => 'float',
        'discount_amount' => 'float',
        'total_amount' => 'float',
        'payments' => null,
        'payroll' => null,
        'folio' => null,
        'xml' => null,
        'warnings' => null,
        'sender_blacklist_status' => null,
        'receiver_blacklist_status' => null
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
        'link' => 'link',
        'collected_at' => 'collected_at',
        'created_at' => 'created_at',
        'invoice_identification' => 'invoice_identification',
        'invoice_date' => 'invoice_date',
        'status' => 'status',
        'invoice_type' => 'invoice_type',
        'type' => 'type',
        'sender_id' => 'sender_id',
        'sender_name' => 'sender_name',
        'sender_tax_fraud_status' => 'sender_tax_fraud_status',
        'receiver_id' => 'receiver_id',
        'receiver_name' => 'receiver_name',
        'receiver_tax_fraud_status' => 'receiver_tax_fraud_status',
        'cancelation_status' => 'cancelation_status',
        'cancelation_update_date' => 'cancelation_update_date',
        'certification_date' => 'certification_date',
        'certification_authority' => 'certification_authority',
        'payment_type' => 'payment_type',
        'payment_type_description' => 'payment_type_description',
        'payment_method' => 'payment_method',
        'payment_method_description' => 'payment_method_description',
        'usage' => 'usage',
        'version' => 'version',
        'place_of_issue' => 'place_of_issue',
        'invoice_details' => 'invoice_details',
        'currency' => 'currency',
        'subtotal_amount' => 'subtotal_amount',
        'exchange_rate' => 'exchange_rate',
        'tax_amount' => 'tax_amount',
        'discount_amount' => 'discount_amount',
        'total_amount' => 'total_amount',
        'payments' => 'payments',
        'payroll' => 'payroll',
        'folio' => 'folio',
        'xml' => 'xml',
        'warnings' => 'warnings',
        'sender_blacklist_status' => 'sender_blacklist_status',
        'receiver_blacklist_status' => 'receiver_blacklist_status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'link' => 'setLink',
        'collected_at' => 'setCollectedAt',
        'created_at' => 'setCreatedAt',
        'invoice_identification' => 'setInvoiceIdentification',
        'invoice_date' => 'setInvoiceDate',
        'status' => 'setStatus',
        'invoice_type' => 'setInvoiceType',
        'type' => 'setType',
        'sender_id' => 'setSenderId',
        'sender_name' => 'setSenderName',
        'sender_tax_fraud_status' => 'setSenderTaxFraudStatus',
        'receiver_id' => 'setReceiverId',
        'receiver_name' => 'setReceiverName',
        'receiver_tax_fraud_status' => 'setReceiverTaxFraudStatus',
        'cancelation_status' => 'setCancelationStatus',
        'cancelation_update_date' => 'setCancelationUpdateDate',
        'certification_date' => 'setCertificationDate',
        'certification_authority' => 'setCertificationAuthority',
        'payment_type' => 'setPaymentType',
        'payment_type_description' => 'setPaymentTypeDescription',
        'payment_method' => 'setPaymentMethod',
        'payment_method_description' => 'setPaymentMethodDescription',
        'usage' => 'setUsage',
        'version' => 'setVersion',
        'place_of_issue' => 'setPlaceOfIssue',
        'invoice_details' => 'setInvoiceDetails',
        'currency' => 'setCurrency',
        'subtotal_amount' => 'setSubtotalAmount',
        'exchange_rate' => 'setExchangeRate',
        'tax_amount' => 'setTaxAmount',
        'discount_amount' => 'setDiscountAmount',
        'total_amount' => 'setTotalAmount',
        'payments' => 'setPayments',
        'payroll' => 'setPayroll',
        'folio' => 'setFolio',
        'xml' => 'setXml',
        'warnings' => 'setWarnings',
        'sender_blacklist_status' => 'setSenderBlacklistStatus',
        'receiver_blacklist_status' => 'setReceiverBlacklistStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'link' => 'getLink',
        'collected_at' => 'getCollectedAt',
        'created_at' => 'getCreatedAt',
        'invoice_identification' => 'getInvoiceIdentification',
        'invoice_date' => 'getInvoiceDate',
        'status' => 'getStatus',
        'invoice_type' => 'getInvoiceType',
        'type' => 'getType',
        'sender_id' => 'getSenderId',
        'sender_name' => 'getSenderName',
        'sender_tax_fraud_status' => 'getSenderTaxFraudStatus',
        'receiver_id' => 'getReceiverId',
        'receiver_name' => 'getReceiverName',
        'receiver_tax_fraud_status' => 'getReceiverTaxFraudStatus',
        'cancelation_status' => 'getCancelationStatus',
        'cancelation_update_date' => 'getCancelationUpdateDate',
        'certification_date' => 'getCertificationDate',
        'certification_authority' => 'getCertificationAuthority',
        'payment_type' => 'getPaymentType',
        'payment_type_description' => 'getPaymentTypeDescription',
        'payment_method' => 'getPaymentMethod',
        'payment_method_description' => 'getPaymentMethodDescription',
        'usage' => 'getUsage',
        'version' => 'getVersion',
        'place_of_issue' => 'getPlaceOfIssue',
        'invoice_details' => 'getInvoiceDetails',
        'currency' => 'getCurrency',
        'subtotal_amount' => 'getSubtotalAmount',
        'exchange_rate' => 'getExchangeRate',
        'tax_amount' => 'getTaxAmount',
        'discount_amount' => 'getDiscountAmount',
        'total_amount' => 'getTotalAmount',
        'payments' => 'getPayments',
        'payroll' => 'getPayroll',
        'folio' => 'getFolio',
        'xml' => 'getXml',
        'warnings' => 'getWarnings',
        'sender_blacklist_status' => 'getSenderBlacklistStatus',
        'receiver_blacklist_status' => 'getReceiverBlacklistStatus'
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

    const INVOICE_TYPE_EGRESO = 'Egreso';
    const INVOICE_TYPE_INGRESO = 'Ingreso';
    const INVOICE_TYPE_NMINA = 'Nómina';
    const INVOICE_TYPE_PAGO = 'Pago';
    const INVOICE_TYPE_TRASLADO = 'Traslado';
    const TYPE_OUTFLOW = 'OUTFLOW';
    const TYPE_INFLOW = 'INFLOW';
    const TYPE_NULL = 'null';
    const PAYMENT_METHOD_PUE = 'PUE';
    const PAYMENT_METHOD_PPD = 'PPD';
    const PAYMENT_METHOD_NULL = 'null';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInvoiceTypeAllowableValues()
    {
        return [
            self::INVOICE_TYPE_EGRESO,
            self::INVOICE_TYPE_INGRESO,
            self::INVOICE_TYPE_NMINA,
            self::INVOICE_TYPE_PAGO,
            self::INVOICE_TYPE_TRASLADO,
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
            self::TYPE_OUTFLOW,
            self::TYPE_INFLOW,
            self::TYPE_NULL,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentMethodAllowableValues()
    {
        return [
            self::PAYMENT_METHOD_PUE,
            self::PAYMENT_METHOD_PPD,
            self::PAYMENT_METHOD_NULL,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['collected_at'] = isset($data['collected_at']) ? $data['collected_at'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['invoice_identification'] = isset($data['invoice_identification']) ? $data['invoice_identification'] : null;
        $this->container['invoice_date'] = isset($data['invoice_date']) ? $data['invoice_date'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['invoice_type'] = isset($data['invoice_type']) ? $data['invoice_type'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['sender_id'] = isset($data['sender_id']) ? $data['sender_id'] : null;
        $this->container['sender_name'] = isset($data['sender_name']) ? $data['sender_name'] : null;
        $this->container['sender_tax_fraud_status'] = isset($data['sender_tax_fraud_status']) ? $data['sender_tax_fraud_status'] : null;
        $this->container['receiver_id'] = isset($data['receiver_id']) ? $data['receiver_id'] : null;
        $this->container['receiver_name'] = isset($data['receiver_name']) ? $data['receiver_name'] : null;
        $this->container['receiver_tax_fraud_status'] = isset($data['receiver_tax_fraud_status']) ? $data['receiver_tax_fraud_status'] : null;
        $this->container['cancelation_status'] = isset($data['cancelation_status']) ? $data['cancelation_status'] : null;
        $this->container['cancelation_update_date'] = isset($data['cancelation_update_date']) ? $data['cancelation_update_date'] : null;
        $this->container['certification_date'] = isset($data['certification_date']) ? $data['certification_date'] : null;
        $this->container['certification_authority'] = isset($data['certification_authority']) ? $data['certification_authority'] : null;
        $this->container['payment_type'] = isset($data['payment_type']) ? $data['payment_type'] : null;
        $this->container['payment_type_description'] = isset($data['payment_type_description']) ? $data['payment_type_description'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['payment_method_description'] = isset($data['payment_method_description']) ? $data['payment_method_description'] : null;
        $this->container['usage'] = isset($data['usage']) ? $data['usage'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['place_of_issue'] = isset($data['place_of_issue']) ? $data['place_of_issue'] : null;
        $this->container['invoice_details'] = isset($data['invoice_details']) ? $data['invoice_details'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['subtotal_amount'] = isset($data['subtotal_amount']) ? $data['subtotal_amount'] : null;
        $this->container['exchange_rate'] = isset($data['exchange_rate']) ? $data['exchange_rate'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        $this->container['discount_amount'] = isset($data['discount_amount']) ? $data['discount_amount'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['payments'] = isset($data['payments']) ? $data['payments'] : null;
        $this->container['payroll'] = isset($data['payroll']) ? $data['payroll'] : null;
        $this->container['folio'] = isset($data['folio']) ? $data['folio'] : null;
        $this->container['xml'] = isset($data['xml']) ? $data['xml'] : null;
        $this->container['warnings'] = isset($data['warnings']) ? $data['warnings'] : null;
        $this->container['sender_blacklist_status'] = isset($data['sender_blacklist_status']) ? $data['sender_blacklist_status'] : null;
        $this->container['receiver_blacklist_status'] = isset($data['receiver_blacklist_status']) ? $data['receiver_blacklist_status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['collected_at'] === null) {
            $invalidProperties[] = "'collected_at' can't be null";
        }
        if ($this->container['invoice_identification'] === null) {
            $invalidProperties[] = "'invoice_identification' can't be null";
        }
        if ($this->container['invoice_date'] === null) {
            $invalidProperties[] = "'invoice_date' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['invoice_type'] === null) {
            $invalidProperties[] = "'invoice_type' can't be null";
        }
        $allowedValues = $this->getInvoiceTypeAllowableValues();
        if (!is_null($this->container['invoice_type']) && !in_array($this->container['invoice_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'invoice_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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

        if ($this->container['sender_id'] === null) {
            $invalidProperties[] = "'sender_id' can't be null";
        }
        if ($this->container['sender_name'] === null) {
            $invalidProperties[] = "'sender_name' can't be null";
        }
        if ($this->container['receiver_id'] === null) {
            $invalidProperties[] = "'receiver_id' can't be null";
        }
        if ($this->container['receiver_name'] === null) {
            $invalidProperties[] = "'receiver_name' can't be null";
        }
        if ($this->container['cancelation_status'] === null) {
            $invalidProperties[] = "'cancelation_status' can't be null";
        }
        if ($this->container['cancelation_update_date'] === null) {
            $invalidProperties[] = "'cancelation_update_date' can't be null";
        }
        if ($this->container['certification_date'] === null) {
            $invalidProperties[] = "'certification_date' can't be null";
        }
        if ($this->container['certification_authority'] === null) {
            $invalidProperties[] = "'certification_authority' can't be null";
        }
        if ($this->container['payment_type'] === null) {
            $invalidProperties[] = "'payment_type' can't be null";
        }
        if ($this->container['payment_type_description'] === null) {
            $invalidProperties[] = "'payment_type_description' can't be null";
        }
        $allowedValues = $this->getPaymentMethodAllowableValues();
        if (!is_null($this->container['payment_method']) && !in_array($this->container['payment_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payment_method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['invoice_details'] === null) {
            $invalidProperties[] = "'invoice_details' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['subtotal_amount'] === null) {
            $invalidProperties[] = "'subtotal_amount' can't be null";
        }
        if ($this->container['exchange_rate'] === null) {
            $invalidProperties[] = "'exchange_rate' can't be null";
        }
        if ($this->container['tax_amount'] === null) {
            $invalidProperties[] = "'tax_amount' can't be null";
        }
        if ($this->container['discount_amount'] === null) {
            $invalidProperties[] = "'discount_amount' can't be null";
        }
        if ($this->container['total_amount'] === null) {
            $invalidProperties[] = "'total_amount' can't be null";
        }
        if ($this->container['payments'] === null) {
            $invalidProperties[] = "'payments' can't be null";
        }
        if ($this->container['payroll'] === null) {
            $invalidProperties[] = "'payroll' can't be null";
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
     * Gets link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param string $link The `link.id` the data belongs to.
     *
     * @return $this
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

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
     * Gets invoice_identification
     *
     * @return string
     */
    public function getInvoiceIdentification()
    {
        return $this->container['invoice_identification'];
    }

    /**
     * Sets invoice_identification
     *
     * @param string $invoice_identification The fiscal institution's unique ID for the invoice.
     *
     * @return $this
     */
    public function setInvoiceIdentification($invoice_identification)
    {
        $this->container['invoice_identification'] = $invoice_identification;

        return $this;
    }

    /**
     * Gets invoice_date
     *
     * @return string
     */
    public function getInvoiceDate()
    {
        return $this->container['invoice_date'];
    }

    /**
     * Sets invoice_date
     *
     * @param string $invoice_date The date of the invoice, in `YYYY-MM-DD` format.
     *
     * @return $this
     */
    public function setInvoiceDate($invoice_date)
    {
        $this->container['invoice_date'] = $invoice_date;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The status of the invoice. Can be either *Vigente* (valid) or *Cancelado* (cancelled).
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets invoice_type
     *
     * @return string
     */
    public function getInvoiceType()
    {
        return $this->container['invoice_type'];
    }

    /**
     * Sets invoice_type
     *
     * @param string $invoice_type The fiscal institution's classification of the invoice.  For Mexico's SAT, we return one of the following values:    - `Egreso`   - `Ingreso`   - `Nómina`   - `Pago`   - `Traslado`
     *
     * @return $this
     */
    public function setInvoiceType($invoice_type)
    {
        $allowedValues = $this->getInvoiceTypeAllowableValues();
        if (!in_array($invoice_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'invoice_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['invoice_type'] = $invoice_type;

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
     * @param string $type The direction of the invoice (from the perspective of the Link owner). - `OUTFLOW` indicates a sent invoice. - `INFLOW` indicates a received invoice.
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
     * Gets sender_id
     *
     * @return string
     */
    public function getSenderId()
    {
        return $this->container['sender_id'];
    }

    /**
     * Sets sender_id
     *
     * @param string $sender_id The fiscal ID of the invoice sender
     *
     * @return $this
     */
    public function setSenderId($sender_id)
    {
        $this->container['sender_id'] = $sender_id;

        return $this;
    }

    /**
     * Gets sender_name
     *
     * @return string
     */
    public function getSenderName()
    {
        return $this->container['sender_name'];
    }

    /**
     * Sets sender_name
     *
     * @param string $sender_name The name of the invoice sender.
     *
     * @return $this
     */
    public function setSenderName($sender_name)
    {
        $this->container['sender_name'] = $sender_name;

        return $this;
    }

    /**
     * Gets sender_tax_fraud_status
     *
     * @return string
     */
    public function getSenderTaxFraudStatus()
    {
        return $this->container['sender_tax_fraud_status'];
    }

    /**
     * Sets sender_tax_fraud_status
     *
     * @param string $sender_tax_fraud_status Indicates whether or not the sender is on SAT's tax fraud list for having submitted incorrect data, having outstanding payments, or having conducted business that is in violation of the fiscal institution's regulations.<br><br>  SAT updates the tax fraud list every three months. <br><br>  For more information regarding the reason's a taxpayer can be put on the tax fraud list, please see [Article 69](http://omawww.sat.gob.mx/cifras_sat/Paginas/datos/vinculo.html?page=ListCompleta69.html) and [Article 69-B](http://omawww.sat.gob.mx/cifras_sat/Paginas/datos/vinculo.html?page=ListCompleta69B.html) of Mexico's Código Fiscal de la Federación. <br><br>  Possible statuses are:  - `INVESTIGATING` <br> The fiscal institution has identified irregularities and open an investigation regarding the taxpayer. <br> - `DISMISSED` <br> The fiscal institution has investigated the taxpayer and declared them innocent. <br> - `CONFIRMED` <br> The fiscal institution has confirmed that the taxpayer is guilty. <br> - `OVERTURNED` <br> The fiscal institution has reassessed a previously confirmed taxpayer and, based on new evidence, has taken the taxpayer off the tax fraud list. <br> - `NO_TAX_FRAUD_STATUS` <br> The receiver or sender is not found in the list (in other words, they are complying with the fiscal institution's regulations).
     *
     * @return $this
     */
    public function setSenderTaxFraudStatus($sender_tax_fraud_status)
    {
        $this->container['sender_tax_fraud_status'] = $sender_tax_fraud_status;

        return $this;
    }

    /**
     * Gets receiver_id
     *
     * @return string
     */
    public function getReceiverId()
    {
        return $this->container['receiver_id'];
    }

    /**
     * Sets receiver_id
     *
     * @param string $receiver_id The fiscal ID of the invoice receiver.
     *
     * @return $this
     */
    public function setReceiverId($receiver_id)
    {
        $this->container['receiver_id'] = $receiver_id;

        return $this;
    }

    /**
     * Gets receiver_name
     *
     * @return string
     */
    public function getReceiverName()
    {
        return $this->container['receiver_name'];
    }

    /**
     * Sets receiver_name
     *
     * @param string $receiver_name The name of the invoice receiver.
     *
     * @return $this
     */
    public function setReceiverName($receiver_name)
    {
        $this->container['receiver_name'] = $receiver_name;

        return $this;
    }

    /**
     * Gets receiver_tax_fraud_status
     *
     * @return string
     */
    public function getReceiverTaxFraudStatus()
    {
        return $this->container['receiver_tax_fraud_status'];
    }

    /**
     * Sets receiver_tax_fraud_status
     *
     * @param string $receiver_tax_fraud_status Indicates whether or not the receiver is on SAT's tax fraud list for having submitted incorrect data, having outstanding payments, or having conducted business that is in violation of the fiscal institution's regulations.<br><br>  SAT updates the tax fraud list every three months. <br><br>  For more information regarding the reason's a taxpayer can be put on the tax fraud list, please see [Article 69](http://omawww.sat.gob.mx/cifras_sat/Paginas/datos/vinculo.html?page=ListCompleta69.html) and [Article 69-B](http://omawww.sat.gob.mx/cifras_sat/Paginas/datos/vinculo.html?page=ListCompleta69B.html) of Mexico's Código Fiscal de la Federación. <br><br>  Possible statuses are:  - `INVESTIGATING` <br> The fiscal institution has identified irregularities and open an investigation regarding the taxpayer. <br> - `DISMISSED` <br> The fiscal institution has investigated the taxpayer and declared them innocent. <br> - `CONFIRMED` <br> The fiscal institution has confirmed that the taxpayer is guilty. <br> - `OVERTURNED` <br> The fiscal institution has reassessed a previously confirmed taxpayer and, based on new evidence, has taken the taxpayer off the tax fraud list. <br> - `NO_TAX_FRAUD_STATUS` <br> The receiver or sender is not found in the list (in other words, they are complying with the fiscal institution's regulations).
     *
     * @return $this
     */
    public function setReceiverTaxFraudStatus($receiver_tax_fraud_status)
    {
        $this->container['receiver_tax_fraud_status'] = $receiver_tax_fraud_status;

        return $this;
    }

    /**
     * Gets cancelation_status
     *
     * @return string
     */
    public function getCancelationStatus()
    {
        return $this->container['cancelation_status'];
    }

    /**
     * Sets cancelation_status
     *
     * @param string $cancelation_status If the invoice is cancelled, this field indicates the status of the cancellation.
     *
     * @return $this
     */
    public function setCancelationStatus($cancelation_status)
    {
        $this->container['cancelation_status'] = $cancelation_status;

        return $this;
    }

    /**
     * Gets cancelation_update_date
     *
     * @return \DateTime
     */
    public function getCancelationUpdateDate()
    {
        return $this->container['cancelation_update_date'];
    }

    /**
     * Sets cancelation_update_date
     *
     * @param \DateTime $cancelation_update_date The date of the invoice cancelation, in `YYYY-MM-DD` format.
     *
     * @return $this
     */
    public function setCancelationUpdateDate($cancelation_update_date)
    {
        $this->container['cancelation_update_date'] = $cancelation_update_date;

        return $this;
    }

    /**
     * Gets certification_date
     *
     * @return \DateTime
     */
    public function getCertificationDate()
    {
        return $this->container['certification_date'];
    }

    /**
     * Sets certification_date
     *
     * @param \DateTime $certification_date The date of the fiscal certification, in `YYYY-MM-DD` format.
     *
     * @return $this
     */
    public function setCertificationDate($certification_date)
    {
        $this->container['certification_date'] = $certification_date;

        return $this;
    }

    /**
     * Gets certification_authority
     *
     * @return string
     */
    public function getCertificationAuthority()
    {
        return $this->container['certification_authority'];
    }

    /**
     * Sets certification_authority
     *
     * @param string $certification_authority The fiscal ID of the certification provider.
     *
     * @return $this
     */
    public function setCertificationAuthority($certification_authority)
    {
        $this->container['certification_authority'] = $certification_authority;

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
     * @param string $payment_type The payment type code used for this invoice, as defined by the country legal entity.  - 🇲🇽 Mexico [SAT catalog reference article](https://developers.belvo.com/docs/sat-catalogs#payment-type)
     *
     * @return $this
     */
    public function setPaymentType($payment_type)
    {
        $this->container['payment_type'] = $payment_type;

        return $this;
    }

    /**
     * Gets payment_type_description
     *
     * @return string
     */
    public function getPaymentTypeDescription()
    {
        return $this->container['payment_type_description'];
    }

    /**
     * Sets payment_type_description
     *
     * @param string $payment_type_description *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.*
     *
     * @return $this
     */
    public function setPaymentTypeDescription($payment_type_description)
    {
        $this->container['payment_type_description'] = $payment_type_description;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param string $payment_method The payment method code used for this invoice, as defined by the legal entity of the country.  - 🇲🇽 Mexico [SAT catalog reference article](https://developers.belvo.com/docs/sat-catalogs#payment-method). For Mexico, we return `PUE`, `PPD`, or `null`.
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $allowedValues = $this->getPaymentMethodAllowableValues();
        if (!is_null($payment_method) && !in_array($payment_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payment_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets payment_method_description
     *
     * @return string
     */
    public function getPaymentMethodDescription()
    {
        return $this->container['payment_method_description'];
    }

    /**
     * Sets payment_method_description
     *
     * @param string $payment_method_description *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.*  *The description of the payment method used for this invoice.*
     *
     * @return $this
     */
    public function setPaymentMethodDescription($payment_method_description)
    {
        $this->container['payment_method_description'] = $payment_method_description;

        return $this;
    }

    /**
     * Gets usage
     *
     * @return string
     */
    public function getUsage()
    {
        return $this->container['usage'];
    }

    /**
     * Sets usage
     *
     * @param string $usage The invoice's usage code, as defined by the legal entity of the country.   - 🇲🇽 Mexico [SAT catalog reference article](https://developers.belvo.com/docs/sat-catalogs#usage)
     *
     * @return $this
     */
    public function setUsage($usage)
    {
        $this->container['usage'] = $usage;

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
     * @param string $version The CFDI version of the invoice.
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets place_of_issue
     *
     * @return string
     */
    public function getPlaceOfIssue()
    {
        return $this->container['place_of_issue'];
    }

    /**
     * Sets place_of_issue
     *
     * @param string $place_of_issue The postcode of where the invoice was issued.
     *
     * @return $this
     */
    public function setPlaceOfIssue($place_of_issue)
    {
        $this->container['place_of_issue'] = $place_of_issue;

        return $this;
    }

    /**
     * Gets invoice_details
     *
     * @return \Swagger\Client\Model\ApiinvoicesInvoiceDetails[]
     */
    public function getInvoiceDetails()
    {
        return $this->container['invoice_details'];
    }

    /**
     * Sets invoice_details
     *
     * @param \Swagger\Client\Model\ApiinvoicesInvoiceDetails[] $invoice_details A list of descriptions for each item (purchased product or service provided) in the invoice.
     *
     * @return $this
     */
    public function setInvoiceDetails($invoice_details)
    {
        $this->container['invoice_details'] = $invoice_details;

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
     * @param string $currency The currency of the invoice. For example:    - 🇧🇷 BRL (Brazilian Real)  - 🇨🇴 COP (Colombian Peso)  - 🇲🇽 MXN (Mexican Peso)  - 🇺🇸 USD (United States Dollar)
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets subtotal_amount
     *
     * @return float
     */
    public function getSubtotalAmount()
    {
        return $this->container['subtotal_amount'];
    }

    /**
     * Sets subtotal_amount
     *
     * @param float $subtotal_amount The pretax amount of this invoice (sum of each item's `pre_tax_amount`).
     *
     * @return $this
     */
    public function setSubtotalAmount($subtotal_amount)
    {
        $this->container['subtotal_amount'] = $subtotal_amount;

        return $this;
    }

    /**
     * Gets exchange_rate
     *
     * @return float
     */
    public function getExchangeRate()
    {
        return $this->container['exchange_rate'];
    }

    /**
     * Sets exchange_rate
     *
     * @param float $exchange_rate The exchange rate used in this invoice for the currency.
     *
     * @return $this
     */
    public function setExchangeRate($exchange_rate)
    {
        $this->container['exchange_rate'] = $exchange_rate;

        return $this;
    }

    /**
     * Gets tax_amount
     *
     * @return float
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param float $tax_amount The amount of tax for this invoice (sum of each item's `tax_amount`).
     *
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets discount_amount
     *
     * @return float
     */
    public function getDiscountAmount()
    {
        return $this->container['discount_amount'];
    }

    /**
     * Sets discount_amount
     *
     * @param float $discount_amount The total amount discounted in this invoice.
     *
     * @return $this
     */
    public function setDiscountAmount($discount_amount)
    {
        $this->container['discount_amount'] = $discount_amount;

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
     * @param float $total_amount The total amount of the invoice (`subtotal_amount` + `tax_amount` - `discount_amount`)
     *
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets payments
     *
     * @return \Swagger\Client\Model\ApiinvoicesPayments[]
     */
    public function getPayments()
    {
        return $this->container['payments'];
    }

    /**
     * Sets payments
     *
     * @param \Swagger\Client\Model\ApiinvoicesPayments[] $payments A list detailing all the invoice payments.
     *
     * @return $this
     */
    public function setPayments($payments)
    {
        $this->container['payments'] = $payments;

        return $this;
    }

    /**
     * Gets payroll
     *
     * @return \Swagger\Client\Model\ApiinvoicesPayroll
     */
    public function getPayroll()
    {
        return $this->container['payroll'];
    }

    /**
     * Sets payroll
     *
     * @param \Swagger\Client\Model\ApiinvoicesPayroll $payroll payroll
     *
     * @return $this
     */
    public function setPayroll($payroll)
    {
        $this->container['payroll'] = $payroll;

        return $this;
    }

    /**
     * Gets folio
     *
     * @return string
     */
    public function getFolio()
    {
        return $this->container['folio'];
    }

    /**
     * Sets folio
     *
     * @param string $folio The internal control number that the taxpayer assigns to the invoice.
     *
     * @return $this
     */
    public function setFolio($folio)
    {
        $this->container['folio'] = $folio;

        return $this;
    }

    /**
     * Gets xml
     *
     * @return string
     */
    public function getXml()
    {
        return $this->container['xml'];
    }

    /**
     * Sets xml
     *
     * @param string $xml XML of the invoice document.
     *
     * @return $this
     */
    public function setXml($xml)
    {
        $this->container['xml'] = $xml;

        return $this;
    }

    /**
     * Gets warnings
     *
     * @return \Swagger\Client\Model\ApiinvoicesWarnings
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     *
     * @param \Swagger\Client\Model\ApiinvoicesWarnings $warnings warnings
     *
     * @return $this
     */
    public function setWarnings($warnings)
    {
        $this->container['warnings'] = $warnings;

        return $this;
    }

    /**
     * Gets sender_blacklist_status
     *
     * @return string
     */
    public function getSenderBlacklistStatus()
    {
        return $this->container['sender_blacklist_status'];
    }

    /**
     * Sets sender_blacklist_status
     *
     * @param string $sender_blacklist_status *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.* Please use `sender_tax_fraud_status` instead.
     *
     * @return $this
     */
    public function setSenderBlacklistStatus($sender_blacklist_status)
    {
        $this->container['sender_blacklist_status'] = $sender_blacklist_status;

        return $this;
    }

    /**
     * Gets receiver_blacklist_status
     *
     * @return string
     */
    public function getReceiverBlacklistStatus()
    {
        return $this->container['receiver_blacklist_status'];
    }

    /**
     * Sets receiver_blacklist_status
     *
     * @param string $receiver_blacklist_status *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.* Please use `receiver_tax_fraud_status` instead.
     *
     * @return $this
     */
    public function setReceiverBlacklistStatus($receiver_blacklist_status)
    {
        $this->container['receiver_blacklist_status'] = $receiver_blacklist_status;

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
