<?php
/**
 * InvoiceDetailSat
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
 * InvoiceDetailSat Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InvoiceDetailSat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InvoiceDetailSat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'description' => 'string',
        'product_identification' => 'string',
        'quantity' => 'float',
        'unit_code' => 'string',
        'unit_description' => 'string',
        'unit_amount' => 'float',
        'tax_type' => 'string',
        'pre_tax_amount' => 'float',
        'tax_percentage' => 'float',
        'tax_amount' => 'float',
        'total_amount' => 'float',
        'retained_taxes' => '\Swagger\Client\Model\ApiinvoicesRetainedTaxes[]',
        'collected_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'description' => null,
        'product_identification' => null,
        'quantity' => 'float',
        'unit_code' => null,
        'unit_description' => null,
        'unit_amount' => 'float',
        'tax_type' => null,
        'pre_tax_amount' => 'float',
        'tax_percentage' => 'float',
        'tax_amount' => 'float',
        'total_amount' => 'float',
        'retained_taxes' => null,
        'collected_at' => 'date-time'
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
        'description' => 'description',
        'product_identification' => 'product_identification',
        'quantity' => 'quantity',
        'unit_code' => 'unit_code',
        'unit_description' => 'unit_description',
        'unit_amount' => 'unit_amount',
        'tax_type' => 'tax_type',
        'pre_tax_amount' => 'pre_tax_amount',
        'tax_percentage' => 'tax_percentage',
        'tax_amount' => 'tax_amount',
        'total_amount' => 'total_amount',
        'retained_taxes' => 'retained_taxes',
        'collected_at' => 'collected_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'product_identification' => 'setProductIdentification',
        'quantity' => 'setQuantity',
        'unit_code' => 'setUnitCode',
        'unit_description' => 'setUnitDescription',
        'unit_amount' => 'setUnitAmount',
        'tax_type' => 'setTaxType',
        'pre_tax_amount' => 'setPreTaxAmount',
        'tax_percentage' => 'setTaxPercentage',
        'tax_amount' => 'setTaxAmount',
        'total_amount' => 'setTotalAmount',
        'retained_taxes' => 'setRetainedTaxes',
        'collected_at' => 'setCollectedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'product_identification' => 'getProductIdentification',
        'quantity' => 'getQuantity',
        'unit_code' => 'getUnitCode',
        'unit_description' => 'getUnitDescription',
        'unit_amount' => 'getUnitAmount',
        'tax_type' => 'getTaxType',
        'pre_tax_amount' => 'getPreTaxAmount',
        'tax_percentage' => 'getTaxPercentage',
        'tax_amount' => 'getTaxAmount',
        'total_amount' => 'getTotalAmount',
        'retained_taxes' => 'getRetainedTaxes',
        'collected_at' => 'getCollectedAt'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['product_identification'] = isset($data['product_identification']) ? $data['product_identification'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['unit_code'] = isset($data['unit_code']) ? $data['unit_code'] : null;
        $this->container['unit_description'] = isset($data['unit_description']) ? $data['unit_description'] : null;
        $this->container['unit_amount'] = isset($data['unit_amount']) ? $data['unit_amount'] : null;
        $this->container['tax_type'] = isset($data['tax_type']) ? $data['tax_type'] : null;
        $this->container['pre_tax_amount'] = isset($data['pre_tax_amount']) ? $data['pre_tax_amount'] : null;
        $this->container['tax_percentage'] = isset($data['tax_percentage']) ? $data['tax_percentage'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['retained_taxes'] = isset($data['retained_taxes']) ? $data['retained_taxes'] : null;
        $this->container['collected_at'] = isset($data['collected_at']) ? $data['collected_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['product_identification'] === null) {
            $invalidProperties[] = "'product_identification' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['unit_code'] === null) {
            $invalidProperties[] = "'unit_code' can't be null";
        }
        if ($this->container['unit_description'] === null) {
            $invalidProperties[] = "'unit_description' can't be null";
        }
        if ($this->container['unit_amount'] === null) {
            $invalidProperties[] = "'unit_amount' can't be null";
        }
        if ($this->container['pre_tax_amount'] === null) {
            $invalidProperties[] = "'pre_tax_amount' can't be null";
        }
        if ($this->container['tax_percentage'] === null) {
            $invalidProperties[] = "'tax_percentage' can't be null";
        }
        if ($this->container['tax_amount'] === null) {
            $invalidProperties[] = "'tax_amount' can't be null";
        }
        if ($this->container['total_amount'] === null) {
            $invalidProperties[] = "'total_amount' can't be null";
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
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description The description of the invoice item (an invoice can have one or more items).
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets product_identification
     *
     * @return string
     */
    public function getProductIdentification()
    {
        return $this->container['product_identification'];
    }

    /**
     * Sets product_identification
     *
     * @param string $product_identification The identification code of the product or the service, as defined by the legal entity in the country. - 🇲🇽 [Mexico](http://200.57.3.89/Pys/catPyS.aspx)
     *
     * @return $this
     */
    public function setProductIdentification($product_identification)
    {
        $this->container['product_identification'] = $product_identification;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float $quantity The quantity of this invoice item.
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets unit_code
     *
     * @return string
     */
    public function getUnitCode()
    {
        return $this->container['unit_code'];
    }

    /**
     * Sets unit_code
     *
     * @param string $unit_code The unit of measure, as defined by the legal entity in the country.  - 🇲🇽 Mexico [SAT catalog reference](https://developers.belvo.com/docs/sat-catalogs#unit-code)
     *
     * @return $this
     */
    public function setUnitCode($unit_code)
    {
        $this->container['unit_code'] = $unit_code;

        return $this;
    }

    /**
     * Gets unit_description
     *
     * @return string
     */
    public function getUnitDescription()
    {
        return $this->container['unit_description'];
    }

    /**
     * Sets unit_description
     *
     * @param string $unit_description The description of the item, as defined by the legal entity in the country. - 🇲🇽 Mexico [SAT catalog reference](https://developers.belvo.com/docs/sat-catalogs#unit-code)
     *
     * @return $this
     */
    public function setUnitDescription($unit_description)
    {
        $this->container['unit_description'] = $unit_description;

        return $this;
    }

    /**
     * Gets unit_amount
     *
     * @return float
     */
    public function getUnitAmount()
    {
        return $this->container['unit_amount'];
    }

    /**
     * Sets unit_amount
     *
     * @param float $unit_amount The price of one a singular item.
     *
     * @return $this
     */
    public function setUnitAmount($unit_amount)
    {
        $this->container['unit_amount'] = $unit_amount;

        return $this;
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
     * @param string $tax_type The item's tax type.
     *
     * @return $this
     */
    public function setTaxType($tax_type)
    {
        $this->container['tax_type'] = $tax_type;

        return $this;
    }

    /**
     * Gets pre_tax_amount
     *
     * @return float
     */
    public function getPreTaxAmount()
    {
        return $this->container['pre_tax_amount'];
    }

    /**
     * Sets pre_tax_amount
     *
     * @param float $pre_tax_amount The total price for this item before tax is applied (`quantity` x `unit_amount`).
     *
     * @return $this
     */
    public function setPreTaxAmount($pre_tax_amount)
    {
        $this->container['pre_tax_amount'] = $pre_tax_amount;

        return $this;
    }

    /**
     * Gets tax_percentage
     *
     * @return float
     */
    public function getTaxPercentage()
    {
        return $this->container['tax_percentage'];
    }

    /**
     * Sets tax_percentage
     *
     * @param float $tax_percentage The tax percentage to apply.
     *
     * @return $this
     */
    public function setTaxPercentage($tax_percentage)
    {
        $this->container['tax_percentage'] = $tax_percentage;

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
     * @param float $tax_amount The amount of tax for this invoice item (`pre_tax_amount` x `tax_percentage`).
     *
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

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
     * @param float $total_amount The total price for this invoice item (`pre_tax_amount` + `tax_amount`).
     *
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets retained_taxes
     *
     * @return \Swagger\Client\Model\ApiinvoicesRetainedTaxes[]
     */
    public function getRetainedTaxes()
    {
        return $this->container['retained_taxes'];
    }

    /**
     * Sets retained_taxes
     *
     * @param \Swagger\Client\Model\ApiinvoicesRetainedTaxes[] $retained_taxes The retained tax on the invoice item.
     *
     * @return $this
     */
    public function setRetainedTaxes($retained_taxes)
    {
        $this->container['retained_taxes'] = $retained_taxes;

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
