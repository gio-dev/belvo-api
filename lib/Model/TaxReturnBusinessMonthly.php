<?php
/**
 * TaxReturnBusinessMonthly
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
 * TaxReturnBusinessMonthly Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaxReturnBusinessMonthly implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Tax Return Business Monthly';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'collected_at' => '\DateTime',
        'created_at' => '\DateTime',
        'informacion_general' => 'object',
        'determinacion_isr' => 'object',
        'detalle_pago_isr' => 'object',
        'determinacion_iva' => 'object',
        'detalle_pago_iva' => 'object',
        'pdf' => 'string',
        'receipt_pdf' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'collected_at' => 'date-time',
        'created_at' => 'date-time',
        'informacion_general' => null,
        'determinacion_isr' => null,
        'detalle_pago_isr' => null,
        'determinacion_iva' => null,
        'detalle_pago_iva' => null,
        'pdf' => 'binary',
        'receipt_pdf' => 'binary',
        'type' => null
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
        'collected_at' => 'collected_at',
        'created_at' => 'created_at',
        'informacion_general' => 'informacion_general',
        'determinacion_isr' => 'determinacion_isr',
        'detalle_pago_isr' => 'detalle_pago_isr',
        'determinacion_iva' => 'determinacion_iva',
        'detalle_pago_iva' => 'detalle_pago_iva',
        'pdf' => 'pdf',
        'receipt_pdf' => 'receipt_pdf',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'collected_at' => 'setCollectedAt',
        'created_at' => 'setCreatedAt',
        'informacion_general' => 'setInformacionGeneral',
        'determinacion_isr' => 'setDeterminacionIsr',
        'detalle_pago_isr' => 'setDetallePagoIsr',
        'determinacion_iva' => 'setDeterminacionIva',
        'detalle_pago_iva' => 'setDetallePagoIva',
        'pdf' => 'setPdf',
        'receipt_pdf' => 'setReceiptPdf',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'collected_at' => 'getCollectedAt',
        'created_at' => 'getCreatedAt',
        'informacion_general' => 'getInformacionGeneral',
        'determinacion_isr' => 'getDeterminacionIsr',
        'detalle_pago_isr' => 'getDetallePagoIsr',
        'determinacion_iva' => 'getDeterminacionIva',
        'detalle_pago_iva' => 'getDetallePagoIva',
        'pdf' => 'getPdf',
        'receipt_pdf' => 'getReceiptPdf',
        'type' => 'getType'
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
        $this->container['collected_at'] = isset($data['collected_at']) ? $data['collected_at'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['informacion_general'] = isset($data['informacion_general']) ? $data['informacion_general'] : null;
        $this->container['determinacion_isr'] = isset($data['determinacion_isr']) ? $data['determinacion_isr'] : null;
        $this->container['detalle_pago_isr'] = isset($data['detalle_pago_isr']) ? $data['detalle_pago_isr'] : null;
        $this->container['determinacion_iva'] = isset($data['determinacion_iva']) ? $data['determinacion_iva'] : null;
        $this->container['detalle_pago_iva'] = isset($data['detalle_pago_iva']) ? $data['detalle_pago_iva'] : null;
        $this->container['pdf'] = isset($data['pdf']) ? $data['pdf'] : null;
        $this->container['receipt_pdf'] = isset($data['receipt_pdf']) ? $data['receipt_pdf'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
        if ($this->container['informacion_general'] === null) {
            $invalidProperties[] = "'informacion_general' can't be null";
        }
        if ($this->container['determinacion_isr'] === null) {
            $invalidProperties[] = "'determinacion_isr' can't be null";
        }
        if ($this->container['detalle_pago_isr'] === null) {
            $invalidProperties[] = "'detalle_pago_isr' can't be null";
        }
        if ($this->container['determinacion_iva'] === null) {
            $invalidProperties[] = "'determinacion_iva' can't be null";
        }
        if ($this->container['detalle_pago_iva'] === null) {
            $invalidProperties[] = "'detalle_pago_iva' can't be null";
        }
        if ($this->container['pdf'] === null) {
            $invalidProperties[] = "'pdf' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * Gets informacion_general
     *
     * @return object
     */
    public function getInformacionGeneral()
    {
        return $this->container['informacion_general'];
    }

    /**
     * Sets informacion_general
     *
     * @param object $informacion_general General information regarding the tax return (year, RFC, return type, person/company name, and so on).
     *
     * @return $this
     */
    public function setInformacionGeneral($informacion_general)
    {
        $this->container['informacion_general'] = $informacion_general;

        return $this;
    }

    /**
     * Gets determinacion_isr
     *
     * @return object
     */
    public function getDeterminacionIsr()
    {
        return $this->container['determinacion_isr'];
    }

    /**
     * Sets determinacion_isr
     *
     * @param object $determinacion_isr Information used to calculate the provisional income tax for the period.
     *
     * @return $this
     */
    public function setDeterminacionIsr($determinacion_isr)
    {
        $this->container['determinacion_isr'] = $determinacion_isr;

        return $this;
    }

    /**
     * Gets detalle_pago_isr
     *
     * @return object
     */
    public function getDetallePagoIsr()
    {
        return $this->container['detalle_pago_isr'];
    }

    /**
     * Sets detalle_pago_isr
     *
     * @param object $detalle_pago_isr Information on the monthly provisional payments for the income tax.
     *
     * @return $this
     */
    public function setDetallePagoIsr($detalle_pago_isr)
    {
        $this->container['detalle_pago_isr'] = $detalle_pago_isr;

        return $this;
    }

    /**
     * Gets determinacion_iva
     *
     * @return object
     */
    public function getDeterminacionIva()
    {
        return $this->container['determinacion_iva'];
    }

    /**
     * Sets determinacion_iva
     *
     * @param object $determinacion_iva Information used to calculate the provisional VAT tax for the period.
     *
     * @return $this
     */
    public function setDeterminacionIva($determinacion_iva)
    {
        $this->container['determinacion_iva'] = $determinacion_iva;

        return $this;
    }

    /**
     * Gets detalle_pago_iva
     *
     * @return object
     */
    public function getDetallePagoIva()
    {
        return $this->container['detalle_pago_iva'];
    }

    /**
     * Sets detalle_pago_iva
     *
     * @param object $detalle_pago_iva Information on the monthly provisional payments for the VAT tax.
     *
     * @return $this
     */
    public function setDetallePagoIva($detalle_pago_iva)
    {
        $this->container['detalle_pago_iva'] = $detalle_pago_iva;

        return $this;
    }

    /**
     * Gets pdf
     *
     * @return string
     */
    public function getPdf()
    {
        return $this->container['pdf'];
    }

    /**
     * Sets pdf
     *
     * @param string $pdf Tax return PDF as a binary.
     *
     * @return $this
     */
    public function setPdf($pdf)
    {
        $this->container['pdf'] = $pdf;

        return $this;
    }

    /**
     * Gets receipt_pdf
     *
     * @return string
     */
    public function getReceiptPdf()
    {
        return $this->container['receipt_pdf'];
    }

    /**
     * Sets receipt_pdf
     *
     * @param string $receipt_pdf The acknowledgement receipt from the fiscal institution confirming that they received the tax return.
     *
     * @return $this
     */
    public function setReceiptPdf($receipt_pdf)
    {
        $this->container['receipt_pdf'] = $receipt_pdf;

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
     * @param string $type The type of tax return. Can be either monthly or annual.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
