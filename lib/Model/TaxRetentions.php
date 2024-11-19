<?php
/**
 * TaxRetentions
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
 * TaxRetentions Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaxRetentions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaxRetentions';

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
        'version' => 'string',
        'code' => 'int',
        'issued_at' => '\DateTime',
        'certified_at' => '\DateTime',
        'cancelled_at' => '\DateTime',
        'sender_id' => 'string',
        'sender_name' => 'string',
        'receiver_nationality' => 'string',
        'receiver_id' => 'string',
        'receiver_name' => 'string',
        'total_invoice_amount' => 'float',
        'total_exempt_amount' => 'float',
        'total_retained_amount' => 'float',
        'total_taxable_amount' => 'float',
        'retention_breakdown' => '\Swagger\Client\Model\ApitaxretentionsRetentionBreakdown[]',
        'xml' => 'string'
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
        'invoice_identification' => 'uuid',
        'version' => null,
        'code' => 'int32',
        'issued_at' => 'date-time',
        'certified_at' => 'date-time',
        'cancelled_at' => 'date-time',
        'sender_id' => null,
        'sender_name' => null,
        'receiver_nationality' => null,
        'receiver_id' => null,
        'receiver_name' => null,
        'total_invoice_amount' => 'float',
        'total_exempt_amount' => 'float',
        'total_retained_amount' => 'float',
        'total_taxable_amount' => 'float',
        'retention_breakdown' => null,
        'xml' => null
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
        'version' => 'version',
        'code' => 'code',
        'issued_at' => 'issued_at',
        'certified_at' => 'certified_at',
        'cancelled_at' => 'cancelled_at',
        'sender_id' => 'sender_id',
        'sender_name' => 'sender_name',
        'receiver_nationality' => 'receiver_nationality',
        'receiver_id' => 'receiver_id',
        'receiver_name' => 'receiver_name',
        'total_invoice_amount' => 'total_invoice_amount',
        'total_exempt_amount' => 'total_exempt_amount',
        'total_retained_amount' => 'total_retained_amount',
        'total_taxable_amount' => 'total_taxable_amount',
        'retention_breakdown' => 'retention_breakdown',
        'xml' => 'xml'
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
        'version' => 'setVersion',
        'code' => 'setCode',
        'issued_at' => 'setIssuedAt',
        'certified_at' => 'setCertifiedAt',
        'cancelled_at' => 'setCancelledAt',
        'sender_id' => 'setSenderId',
        'sender_name' => 'setSenderName',
        'receiver_nationality' => 'setReceiverNationality',
        'receiver_id' => 'setReceiverId',
        'receiver_name' => 'setReceiverName',
        'total_invoice_amount' => 'setTotalInvoiceAmount',
        'total_exempt_amount' => 'setTotalExemptAmount',
        'total_retained_amount' => 'setTotalRetainedAmount',
        'total_taxable_amount' => 'setTotalTaxableAmount',
        'retention_breakdown' => 'setRetentionBreakdown',
        'xml' => 'setXml'
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
        'version' => 'getVersion',
        'code' => 'getCode',
        'issued_at' => 'getIssuedAt',
        'certified_at' => 'getCertifiedAt',
        'cancelled_at' => 'getCancelledAt',
        'sender_id' => 'getSenderId',
        'sender_name' => 'getSenderName',
        'receiver_nationality' => 'getReceiverNationality',
        'receiver_id' => 'getReceiverId',
        'receiver_name' => 'getReceiverName',
        'total_invoice_amount' => 'getTotalInvoiceAmount',
        'total_exempt_amount' => 'getTotalExemptAmount',
        'total_retained_amount' => 'getTotalRetainedAmount',
        'total_taxable_amount' => 'getTotalTaxableAmount',
        'retention_breakdown' => 'getRetentionBreakdown',
        'xml' => 'getXml'
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

    const RECEIVER_NATIONALITY_NATIONAL = 'NATIONAL';
    const RECEIVER_NATIONALITY_FOREIGN = 'FOREIGN';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReceiverNationalityAllowableValues()
    {
        return [
            self::RECEIVER_NATIONALITY_NATIONAL,
            self::RECEIVER_NATIONALITY_FOREIGN,
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['issued_at'] = isset($data['issued_at']) ? $data['issued_at'] : null;
        $this->container['certified_at'] = isset($data['certified_at']) ? $data['certified_at'] : null;
        $this->container['cancelled_at'] = isset($data['cancelled_at']) ? $data['cancelled_at'] : null;
        $this->container['sender_id'] = isset($data['sender_id']) ? $data['sender_id'] : null;
        $this->container['sender_name'] = isset($data['sender_name']) ? $data['sender_name'] : null;
        $this->container['receiver_nationality'] = isset($data['receiver_nationality']) ? $data['receiver_nationality'] : null;
        $this->container['receiver_id'] = isset($data['receiver_id']) ? $data['receiver_id'] : null;
        $this->container['receiver_name'] = isset($data['receiver_name']) ? $data['receiver_name'] : null;
        $this->container['total_invoice_amount'] = isset($data['total_invoice_amount']) ? $data['total_invoice_amount'] : null;
        $this->container['total_exempt_amount'] = isset($data['total_exempt_amount']) ? $data['total_exempt_amount'] : null;
        $this->container['total_retained_amount'] = isset($data['total_retained_amount']) ? $data['total_retained_amount'] : null;
        $this->container['total_taxable_amount'] = isset($data['total_taxable_amount']) ? $data['total_taxable_amount'] : null;
        $this->container['retention_breakdown'] = isset($data['retention_breakdown']) ? $data['retention_breakdown'] : null;
        $this->container['xml'] = isset($data['xml']) ? $data['xml'] : null;
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
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ($this->container['issued_at'] === null) {
            $invalidProperties[] = "'issued_at' can't be null";
        }
        if ($this->container['certified_at'] === null) {
            $invalidProperties[] = "'certified_at' can't be null";
        }
        if ($this->container['cancelled_at'] === null) {
            $invalidProperties[] = "'cancelled_at' can't be null";
        }
        if ($this->container['sender_id'] === null) {
            $invalidProperties[] = "'sender_id' can't be null";
        }
        if ($this->container['sender_name'] === null) {
            $invalidProperties[] = "'sender_name' can't be null";
        }
        if ($this->container['receiver_nationality'] === null) {
            $invalidProperties[] = "'receiver_nationality' can't be null";
        }
        $allowedValues = $this->getReceiverNationalityAllowableValues();
        if (!is_null($this->container['receiver_nationality']) && !in_array($this->container['receiver_nationality'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'receiver_nationality', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['receiver_id'] === null) {
            $invalidProperties[] = "'receiver_id' can't be null";
        }
        if ($this->container['receiver_name'] === null) {
            $invalidProperties[] = "'receiver_name' can't be null";
        }
        if ($this->container['total_invoice_amount'] === null) {
            $invalidProperties[] = "'total_invoice_amount' can't be null";
        }
        if ($this->container['total_exempt_amount'] === null) {
            $invalidProperties[] = "'total_exempt_amount' can't be null";
        }
        if ($this->container['total_retained_amount'] === null) {
            $invalidProperties[] = "'total_retained_amount' can't be null";
        }
        if ($this->container['total_taxable_amount'] === null) {
            $invalidProperties[] = "'total_taxable_amount' can't be null";
        }
        if ($this->container['retention_breakdown'] === null) {
            $invalidProperties[] = "'retention_breakdown' can't be null";
        }
        if ($this->container['xml'] === null) {
            $invalidProperties[] = "'xml' can't be null";
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
     * @param string $invoice_identification The fiscal institution's unique ID for the invoice that the tax retention relates to.
     *
     * @return $this
     */
    public function setInvoiceIdentification($invoice_identification)
    {
        $this->container['invoice_identification'] = $invoice_identification;

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
     * @param string $version The CFDI version of the tax retentions.
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets code
     *
     * @return int
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param int $code The tax retention code. For more information, see our [SAT Catalogs DevPortal article](https://developers.belvo.com/docs/sat-catalogs#retention-code).
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets issued_at
     *
     * @return \DateTime
     */
    public function getIssuedAt()
    {
        return $this->container['issued_at'];
    }

    /**
     * Sets issued_at
     *
     * @param \DateTime $issued_at The ISO-8601 timestamp of when the tax retention was issued.
     *
     * @return $this
     */
    public function setIssuedAt($issued_at)
    {
        $this->container['issued_at'] = $issued_at;

        return $this;
    }

    /**
     * Gets certified_at
     *
     * @return \DateTime
     */
    public function getCertifiedAt()
    {
        return $this->container['certified_at'];
    }

    /**
     * Sets certified_at
     *
     * @param \DateTime $certified_at The ISO-8601 timestamp of when the tax retention was certified.
     *
     * @return $this
     */
    public function setCertifiedAt($certified_at)
    {
        $this->container['certified_at'] = $certified_at;

        return $this;
    }

    /**
     * Gets cancelled_at
     *
     * @return \DateTime
     */
    public function getCancelledAt()
    {
        return $this->container['cancelled_at'];
    }

    /**
     * Sets cancelled_at
     *
     * @param \DateTime $cancelled_at The ISO-8601 timestamp of when the tax retention was canceled (if applicable).
     *
     * @return $this
     */
    public function setCancelledAt($cancelled_at)
    {
        $this->container['cancelled_at'] = $cancelled_at;

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
     * @param string $sender_id The fiscal ID of the invoice sender.
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
     * Gets receiver_nationality
     *
     * @return string
     */
    public function getReceiverNationality()
    {
        return $this->container['receiver_nationality'];
    }

    /**
     * Sets receiver_nationality
     *
     * @param string $receiver_nationality Whether the invoice receiver is a Mexican national or not. If the receiver is not considered a Mexican national, the retained taxes can be calculated differently. Possible values:   - `NATIONAL`   - `FOREIGN`
     *
     * @return $this
     */
    public function setReceiverNationality($receiver_nationality)
    {
        $allowedValues = $this->getReceiverNationalityAllowableValues();
        if (!in_array($receiver_nationality, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'receiver_nationality', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['receiver_nationality'] = $receiver_nationality;

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
     * Gets total_invoice_amount
     *
     * @return float
     */
    public function getTotalInvoiceAmount()
    {
        return $this->container['total_invoice_amount'];
    }

    /**
     * Sets total_invoice_amount
     *
     * @param float $total_invoice_amount The total amount of the invoice that the tax retention relates to.
     *
     * @return $this
     */
    public function setTotalInvoiceAmount($total_invoice_amount)
    {
        $this->container['total_invoice_amount'] = $total_invoice_amount;

        return $this;
    }

    /**
     * Gets total_exempt_amount
     *
     * @return float
     */
    public function getTotalExemptAmount()
    {
        return $this->container['total_exempt_amount'];
    }

    /**
     * Sets total_exempt_amount
     *
     * @param float $total_exempt_amount Total amount that is exempt from taxation.
     *
     * @return $this
     */
    public function setTotalExemptAmount($total_exempt_amount)
    {
        $this->container['total_exempt_amount'] = $total_exempt_amount;

        return $this;
    }

    /**
     * Gets total_retained_amount
     *
     * @return float
     */
    public function getTotalRetainedAmount()
    {
        return $this->container['total_retained_amount'];
    }

    /**
     * Sets total_retained_amount
     *
     * @param float $total_retained_amount Total tax retained.
     *
     * @return $this
     */
    public function setTotalRetainedAmount($total_retained_amount)
    {
        $this->container['total_retained_amount'] = $total_retained_amount;

        return $this;
    }

    /**
     * Gets total_taxable_amount
     *
     * @return float
     */
    public function getTotalTaxableAmount()
    {
        return $this->container['total_taxable_amount'];
    }

    /**
     * Sets total_taxable_amount
     *
     * @param float $total_taxable_amount The total amount that can be taxed. Calculated as `total_invoice_amount` - `total_exempt_amount`.
     *
     * @return $this
     */
    public function setTotalTaxableAmount($total_taxable_amount)
    {
        $this->container['total_taxable_amount'] = $total_taxable_amount;

        return $this;
    }

    /**
     * Gets retention_breakdown
     *
     * @return \Swagger\Client\Model\ApitaxretentionsRetentionBreakdown[]
     */
    public function getRetentionBreakdown()
    {
        return $this->container['retention_breakdown'];
    }

    /**
     * Sets retention_breakdown
     *
     * @param \Swagger\Client\Model\ApitaxretentionsRetentionBreakdown[] $retention_breakdown A breakdown of the retained taxes.
     *
     * @return $this
     */
    public function setRetentionBreakdown($retention_breakdown)
    {
        $this->container['retention_breakdown'] = $retention_breakdown;

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
     * @param string $xml The tax retention document in XML form.
     *
     * @return $this
     */
    public function setXml($xml)
    {
        $this->container['xml'] = $xml;

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
