<?php
/**
 * TaxStatusSat
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
 * TaxStatusSat Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaxStatusSat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaxStatusSat';

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
        'place_and_date_of_issuance' => 'string',
        'official_name' => 'string',
        'id_cif' => 'string',
        'tax_payer_information' => '\Swagger\Client\Model\TaxStatusSatTaxPayerInformation',
        'address' => '\Swagger\Client\Model\TaxStatusSatAddress',
        'economic_activity' => '\Swagger\Client\Model\TaxStatusSatEconomicActivity[]',
        'regimes' => '\Swagger\Client\Model\TaxStatusSatRegimes[]',
        'obligations' => '\Swagger\Client\Model\TaxStatusSatObligations[]',
        'digital_stamp' => 'string',
        'digital_stamp_chain' => 'string',
        'pdf' => 'string'
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
        'place_and_date_of_issuance' => null,
        'official_name' => null,
        'id_cif' => null,
        'tax_payer_information' => null,
        'address' => null,
        'economic_activity' => null,
        'regimes' => null,
        'obligations' => null,
        'digital_stamp' => null,
        'digital_stamp_chain' => null,
        'pdf' => 'binary'
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
        'place_and_date_of_issuance' => 'place_and_date_of_issuance',
        'official_name' => 'official_name',
        'id_cif' => 'id_cif',
        'tax_payer_information' => 'tax_payer_information',
        'address' => 'address',
        'economic_activity' => 'economic_activity',
        'regimes' => 'regimes',
        'obligations' => 'obligations',
        'digital_stamp' => 'digital_stamp',
        'digital_stamp_chain' => 'digital_stamp_chain',
        'pdf' => 'pdf'
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
        'place_and_date_of_issuance' => 'setPlaceAndDateOfIssuance',
        'official_name' => 'setOfficialName',
        'id_cif' => 'setIdCif',
        'tax_payer_information' => 'setTaxPayerInformation',
        'address' => 'setAddress',
        'economic_activity' => 'setEconomicActivity',
        'regimes' => 'setRegimes',
        'obligations' => 'setObligations',
        'digital_stamp' => 'setDigitalStamp',
        'digital_stamp_chain' => 'setDigitalStampChain',
        'pdf' => 'setPdf'
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
        'place_and_date_of_issuance' => 'getPlaceAndDateOfIssuance',
        'official_name' => 'getOfficialName',
        'id_cif' => 'getIdCif',
        'tax_payer_information' => 'getTaxPayerInformation',
        'address' => 'getAddress',
        'economic_activity' => 'getEconomicActivity',
        'regimes' => 'getRegimes',
        'obligations' => 'getObligations',
        'digital_stamp' => 'getDigitalStamp',
        'digital_stamp_chain' => 'getDigitalStampChain',
        'pdf' => 'getPdf'
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
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['collected_at'] = isset($data['collected_at']) ? $data['collected_at'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['place_and_date_of_issuance'] = isset($data['place_and_date_of_issuance']) ? $data['place_and_date_of_issuance'] : null;
        $this->container['official_name'] = isset($data['official_name']) ? $data['official_name'] : null;
        $this->container['id_cif'] = isset($data['id_cif']) ? $data['id_cif'] : null;
        $this->container['tax_payer_information'] = isset($data['tax_payer_information']) ? $data['tax_payer_information'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['economic_activity'] = isset($data['economic_activity']) ? $data['economic_activity'] : null;
        $this->container['regimes'] = isset($data['regimes']) ? $data['regimes'] : null;
        $this->container['obligations'] = isset($data['obligations']) ? $data['obligations'] : null;
        $this->container['digital_stamp'] = isset($data['digital_stamp']) ? $data['digital_stamp'] : null;
        $this->container['digital_stamp_chain'] = isset($data['digital_stamp_chain']) ? $data['digital_stamp_chain'] : null;
        $this->container['pdf'] = isset($data['pdf']) ? $data['pdf'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['link'] === null) {
            $invalidProperties[] = "'link' can't be null";
        }
        if ($this->container['collected_at'] === null) {
            $invalidProperties[] = "'collected_at' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['place_and_date_of_issuance'] === null) {
            $invalidProperties[] = "'place_and_date_of_issuance' can't be null";
        }
        if ($this->container['official_name'] === null) {
            $invalidProperties[] = "'official_name' can't be null";
        }
        if ($this->container['id_cif'] === null) {
            $invalidProperties[] = "'id_cif' can't be null";
        }
        if ($this->container['tax_payer_information'] === null) {
            $invalidProperties[] = "'tax_payer_information' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['economic_activity'] === null) {
            $invalidProperties[] = "'economic_activity' can't be null";
        }
        if ($this->container['regimes'] === null) {
            $invalidProperties[] = "'regimes' can't be null";
        }
        if ($this->container['obligations'] === null) {
            $invalidProperties[] = "'obligations' can't be null";
        }
        if ($this->container['digital_stamp'] === null) {
            $invalidProperties[] = "'digital_stamp' can't be null";
        }
        if ($this->container['digital_stamp_chain'] === null) {
            $invalidProperties[] = "'digital_stamp_chain' can't be null";
        }
        if ($this->container['pdf'] === null) {
            $invalidProperties[] = "'pdf' can't be null";
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
     * Gets place_and_date_of_issuance
     *
     * @return string
     */
    public function getPlaceAndDateOfIssuance()
    {
        return $this->container['place_and_date_of_issuance'];
    }

    /**
     * Sets place_and_date_of_issuance
     *
     * @param string $place_and_date_of_issuance The place and date of that the tax status was issued.
     *
     * @return $this
     */
    public function setPlaceAndDateOfIssuance($place_and_date_of_issuance)
    {
        $this->container['place_and_date_of_issuance'] = $place_and_date_of_issuance;

        return $this;
    }

    /**
     * Gets official_name
     *
     * @return string
     */
    public function getOfficialName()
    {
        return $this->container['official_name'];
    }

    /**
     * Sets official_name
     *
     * @param string $official_name The name of the person or business.
     *
     * @return $this
     */
    public function setOfficialName($official_name)
    {
        $this->container['official_name'] = $official_name;

        return $this;
    }

    /**
     * Gets id_cif
     *
     * @return string
     */
    public function getIdCif()
    {
        return $this->container['id_cif'];
    }

    /**
     * Sets id_cif
     *
     * @param string $id_cif The taxpayer's *Cédula de Identificación Fiscal* (CIF) ID.
     *
     * @return $this
     */
    public function setIdCif($id_cif)
    {
        $this->container['id_cif'] = $id_cif;

        return $this;
    }

    /**
     * Gets tax_payer_information
     *
     * @return \Swagger\Client\Model\TaxStatusSatTaxPayerInformation
     */
    public function getTaxPayerInformation()
    {
        return $this->container['tax_payer_information'];
    }

    /**
     * Sets tax_payer_information
     *
     * @param \Swagger\Client\Model\TaxStatusSatTaxPayerInformation $tax_payer_information tax_payer_information
     *
     * @return $this
     */
    public function setTaxPayerInformation($tax_payer_information)
    {
        $this->container['tax_payer_information'] = $tax_payer_information;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Swagger\Client\Model\TaxStatusSatAddress
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Swagger\Client\Model\TaxStatusSatAddress $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets economic_activity
     *
     * @return \Swagger\Client\Model\TaxStatusSatEconomicActivity[]
     */
    public function getEconomicActivity()
    {
        return $this->container['economic_activity'];
    }

    /**
     * Sets economic_activity
     *
     * @param \Swagger\Client\Model\TaxStatusSatEconomicActivity[] $economic_activity A list of economic activity objects.
     *
     * @return $this
     */
    public function setEconomicActivity($economic_activity)
    {
        $this->container['economic_activity'] = $economic_activity;

        return $this;
    }

    /**
     * Gets regimes
     *
     * @return \Swagger\Client\Model\TaxStatusSatRegimes[]
     */
    public function getRegimes()
    {
        return $this->container['regimes'];
    }

    /**
     * Sets regimes
     *
     * @param \Swagger\Client\Model\TaxStatusSatRegimes[] $regimes A list of regimen objects.
     *
     * @return $this
     */
    public function setRegimes($regimes)
    {
        $this->container['regimes'] = $regimes;

        return $this;
    }

    /**
     * Gets obligations
     *
     * @return \Swagger\Client\Model\TaxStatusSatObligations[]
     */
    public function getObligations()
    {
        return $this->container['obligations'];
    }

    /**
     * Sets obligations
     *
     * @param \Swagger\Client\Model\TaxStatusSatObligations[] $obligations Details regarding a business's obligations.  ℹ️ For non-business accounts, this field will return empty.
     *
     * @return $this
     */
    public function setObligations($obligations)
    {
        $this->container['obligations'] = $obligations;

        return $this;
    }

    /**
     * Gets digital_stamp
     *
     * @return string
     */
    public function getDigitalStamp()
    {
        return $this->container['digital_stamp'];
    }

    /**
     * Sets digital_stamp
     *
     * @param string $digital_stamp The validation certificate of the document.
     *
     * @return $this
     */
    public function setDigitalStamp($digital_stamp)
    {
        $this->container['digital_stamp'] = $digital_stamp;

        return $this;
    }

    /**
     * Gets digital_stamp_chain
     *
     * @return string
     */
    public function getDigitalStampChain()
    {
        return $this->container['digital_stamp_chain'];
    }

    /**
     * Sets digital_stamp_chain
     *
     * @param string $digital_stamp_chain A data chain containing the basic structure of a fiscal digital check. For Mexico, this is the *Comprobante Fiscal Digital por Internet* (CFDI).
     *
     * @return $this
     */
    public function setDigitalStampChain($digital_stamp_chain)
    {
        $this->container['digital_stamp_chain'] = $digital_stamp_chain;

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
     * @param string $pdf Tax status PDF as a binary string.
     *
     * @return $this
     */
    public function setPdf($pdf)
    {
        $this->container['pdf'] = $pdf;

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
