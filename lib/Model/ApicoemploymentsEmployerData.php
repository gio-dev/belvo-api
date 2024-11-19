<?php
/**
 * ApicoemploymentsEmployerData
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
 * ApicoemploymentsEmployerData Class Doc Comment
 *
 * @category Class
 * @description Details regarding the employment the employee had at a given employer.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApicoemploymentsEmployerData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'apicoemployments_employer_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'id_type' => 'string',
        'id_number' => 'int',
        'economic_activity_code' => 'int',
        'economic_activity_code_description' => 'string',
        'contributor_class_code' => 'string',
        'contributor_class_code_description' => 'string',
        'contributor_type_code' => 'int',
        'contributor_type_description' => 'string',
        'tenure' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'id_type' => null,
        'id_number' => null,
        'economic_activity_code' => null,
        'economic_activity_code_description' => null,
        'contributor_class_code' => null,
        'contributor_class_code_description' => null,
        'contributor_type_code' => null,
        'contributor_type_description' => null,
        'tenure' => null
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
        'name' => 'name',
        'id_type' => 'id_type',
        'id_number' => 'id_number',
        'economic_activity_code' => 'economic_activity_code',
        'economic_activity_code_description' => 'economic_activity_code_description',
        'contributor_class_code' => 'contributor_class_code',
        'contributor_class_code_description' => 'contributor_class_code_description',
        'contributor_type_code' => 'contributor_type_code',
        'contributor_type_description' => 'contributor_type_description',
        'tenure' => 'tenure'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'id_type' => 'setIdType',
        'id_number' => 'setIdNumber',
        'economic_activity_code' => 'setEconomicActivityCode',
        'economic_activity_code_description' => 'setEconomicActivityCodeDescription',
        'contributor_class_code' => 'setContributorClassCode',
        'contributor_class_code_description' => 'setContributorClassCodeDescription',
        'contributor_type_code' => 'setContributorTypeCode',
        'contributor_type_description' => 'setContributorTypeDescription',
        'tenure' => 'setTenure'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'id_type' => 'getIdType',
        'id_number' => 'getIdNumber',
        'economic_activity_code' => 'getEconomicActivityCode',
        'economic_activity_code_description' => 'getEconomicActivityCodeDescription',
        'contributor_class_code' => 'getContributorClassCode',
        'contributor_class_code_description' => 'getContributorClassCodeDescription',
        'contributor_type_code' => 'getContributorTypeCode',
        'contributor_type_description' => 'getContributorTypeDescription',
        'tenure' => 'getTenure'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id_type'] = isset($data['id_type']) ? $data['id_type'] : null;
        $this->container['id_number'] = isset($data['id_number']) ? $data['id_number'] : null;
        $this->container['economic_activity_code'] = isset($data['economic_activity_code']) ? $data['economic_activity_code'] : null;
        $this->container['economic_activity_code_description'] = isset($data['economic_activity_code_description']) ? $data['economic_activity_code_description'] : null;
        $this->container['contributor_class_code'] = isset($data['contributor_class_code']) ? $data['contributor_class_code'] : null;
        $this->container['contributor_class_code_description'] = isset($data['contributor_class_code_description']) ? $data['contributor_class_code_description'] : null;
        $this->container['contributor_type_code'] = isset($data['contributor_type_code']) ? $data['contributor_type_code'] : null;
        $this->container['contributor_type_description'] = isset($data['contributor_type_description']) ? $data['contributor_type_description'] : null;
        $this->container['tenure'] = isset($data['tenure']) ? $data['tenure'] : null;
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The legal name of the entity that makes the social security contribution (*Aporte de la planilla de la seguridad Social* (PILA))
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets id_type
     *
     * @return string
     */
    public function getIdType()
    {
        return $this->container['id_type'];
    }

    /**
     * Sets id_type
     *
     * @param string $id_type The ID document type of the employer. Can be either:      - `NIT`   - `CE`   - `CC`   - `PASSPORT`
     *
     * @return $this
     */
    public function setIdType($id_type)
    {
        $this->container['id_type'] = $id_type;

        return $this;
    }

    /**
     * Gets id_number
     *
     * @return int
     */
    public function getIdNumber()
    {
        return $this->container['id_number'];
    }

    /**
     * Sets id_number
     *
     * @param int $id_number The number of the ID document type.
     *
     * @return $this
     */
    public function setIdNumber($id_number)
    {
        $this->container['id_number'] = $id_number;

        return $this;
    }

    /**
     * Gets economic_activity_code
     *
     * @return int
     */
    public function getEconomicActivityCode()
    {
        return $this->container['economic_activity_code'];
    }

    /**
     * Sets economic_activity_code
     *
     * @param int $economic_activity_code The code of the business's primary economic activity.
     *
     * @return $this
     */
    public function setEconomicActivityCode($economic_activity_code)
    {
        $this->container['economic_activity_code'] = $economic_activity_code;

        return $this;
    }

    /**
     * Gets economic_activity_code_description
     *
     * @return string
     */
    public function getEconomicActivityCodeDescription()
    {
        return $this->container['economic_activity_code_description'];
    }

    /**
     * Sets economic_activity_code_description
     *
     * @param string $economic_activity_code_description The description of the business's primary economic activity.
     *
     * @return $this
     */
    public function setEconomicActivityCodeDescription($economic_activity_code_description)
    {
        $this->container['economic_activity_code_description'] = $economic_activity_code_description;

        return $this;
    }

    /**
     * Gets contributor_class_code
     *
     * @return string
     */
    public function getContributorClassCode()
    {
        return $this->container['contributor_class_code'];
    }

    /**
     * Sets contributor_class_code
     *
     * @param string $contributor_class_code The classification of the business.
     *
     * @return $this
     */
    public function setContributorClassCode($contributor_class_code)
    {
        $this->container['contributor_class_code'] = $contributor_class_code;

        return $this;
    }

    /**
     * Gets contributor_class_code_description
     *
     * @return string
     */
    public function getContributorClassCodeDescription()
    {
        return $this->container['contributor_class_code_description'];
    }

    /**
     * Sets contributor_class_code_description
     *
     * @param string $contributor_class_code_description The description of the business's classification.
     *
     * @return $this
     */
    public function setContributorClassCodeDescription($contributor_class_code_description)
    {
        $this->container['contributor_class_code_description'] = $contributor_class_code_description;

        return $this;
    }

    /**
     * Gets contributor_type_code
     *
     * @return int
     */
    public function getContributorTypeCode()
    {
        return $this->container['contributor_type_code'];
    }

    /**
     * Sets contributor_type_code
     *
     * @param int $contributor_type_code The classification of the business type.
     *
     * @return $this
     */
    public function setContributorTypeCode($contributor_type_code)
    {
        $this->container['contributor_type_code'] = $contributor_type_code;

        return $this;
    }

    /**
     * Gets contributor_type_description
     *
     * @return string
     */
    public function getContributorTypeDescription()
    {
        return $this->container['contributor_type_description'];
    }

    /**
     * Sets contributor_type_description
     *
     * @param string $contributor_type_description The description of the business type. For example, if the business is a private company, government organization, NGO, and so on.
     *
     * @return $this
     */
    public function setContributorTypeDescription($contributor_type_description)
    {
        $this->container['contributor_type_description'] = $contributor_type_description;

        return $this;
    }

    /**
     * Gets tenure
     *
     * @return int
     */
    public function getTenure()
    {
        return $this->container['tenure'];
    }

    /**
     * Sets tenure
     *
     * @param int $tenure The number of months the employee has been working at the employer.
     *
     * @return $this
     */
    public function setTenure($tenure)
    {
        $this->container['tenure'] = $tenure;

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
