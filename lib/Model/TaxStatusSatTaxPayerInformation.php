<?php
/**
 * TaxStatusSatTaxPayerInformation
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
 * TaxStatusSatTaxPayerInformation Class Doc Comment
 *
 * @category Class
 * @description Details regarding the taxpayer.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaxStatusSatTaxPayerInformation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaxStatusSat_tax_payer_information';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'rfc' => 'string',
        'curp' => 'string',
        'name' => 'string',
        'first_last_name' => 'string',
        'second_last_name' => 'string',
        'start_operations_date' => '\DateTime',
        'status_padron' => 'string',
        'last_status_change_date' => '\DateTime',
        'commercial_name' => 'string',
        'social_name' => 'string',
        'email' => 'string',
        'phone' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'rfc' => null,
        'curp' => null,
        'name' => null,
        'first_last_name' => null,
        'second_last_name' => null,
        'start_operations_date' => 'date',
        'status_padron' => null,
        'last_status_change_date' => 'date',
        'commercial_name' => null,
        'social_name' => null,
        'email' => null,
        'phone' => null
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
        'rfc' => 'rfc',
        'curp' => 'curp',
        'name' => 'name',
        'first_last_name' => 'first_last_name',
        'second_last_name' => 'second_last_name',
        'start_operations_date' => 'start_operations_date',
        'status_padron' => 'status_padron',
        'last_status_change_date' => 'last_status_change_date',
        'commercial_name' => 'commercial_name',
        'social_name' => 'social_name',
        'email' => 'email',
        'phone' => 'phone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rfc' => 'setRfc',
        'curp' => 'setCurp',
        'name' => 'setName',
        'first_last_name' => 'setFirstLastName',
        'second_last_name' => 'setSecondLastName',
        'start_operations_date' => 'setStartOperationsDate',
        'status_padron' => 'setStatusPadron',
        'last_status_change_date' => 'setLastStatusChangeDate',
        'commercial_name' => 'setCommercialName',
        'social_name' => 'setSocialName',
        'email' => 'setEmail',
        'phone' => 'setPhone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rfc' => 'getRfc',
        'curp' => 'getCurp',
        'name' => 'getName',
        'first_last_name' => 'getFirstLastName',
        'second_last_name' => 'getSecondLastName',
        'start_operations_date' => 'getStartOperationsDate',
        'status_padron' => 'getStatusPadron',
        'last_status_change_date' => 'getLastStatusChangeDate',
        'commercial_name' => 'getCommercialName',
        'social_name' => 'getSocialName',
        'email' => 'getEmail',
        'phone' => 'getPhone'
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
        $this->container['rfc'] = isset($data['rfc']) ? $data['rfc'] : null;
        $this->container['curp'] = isset($data['curp']) ? $data['curp'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['first_last_name'] = isset($data['first_last_name']) ? $data['first_last_name'] : null;
        $this->container['second_last_name'] = isset($data['second_last_name']) ? $data['second_last_name'] : null;
        $this->container['start_operations_date'] = isset($data['start_operations_date']) ? $data['start_operations_date'] : null;
        $this->container['status_padron'] = isset($data['status_padron']) ? $data['status_padron'] : null;
        $this->container['last_status_change_date'] = isset($data['last_status_change_date']) ? $data['last_status_change_date'] : null;
        $this->container['commercial_name'] = isset($data['commercial_name']) ? $data['commercial_name'] : null;
        $this->container['social_name'] = isset($data['social_name']) ? $data['social_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['rfc'] === null) {
            $invalidProperties[] = "'rfc' can't be null";
        }
        if ($this->container['start_operations_date'] === null) {
            $invalidProperties[] = "'start_operations_date' can't be null";
        }
        if ($this->container['status_padron'] === null) {
            $invalidProperties[] = "'status_padron' can't be null";
        }
        if ($this->container['last_status_change_date'] === null) {
            $invalidProperties[] = "'last_status_change_date' can't be null";
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
     * Gets rfc
     *
     * @return string
     */
    public function getRfc()
    {
        return $this->container['rfc'];
    }

    /**
     * Sets rfc
     *
     * @param string $rfc The tax payers's identification number (For Mexico, this is the RFC).
     *
     * @return $this
     */
    public function setRfc($rfc)
    {
        $this->container['rfc'] = $rfc;

        return $this;
    }

    /**
     * Gets curp
     *
     * @return string
     */
    public function getCurp()
    {
        return $this->container['curp'];
    }

    /**
     * Sets curp
     *
     * @param string $curp The tax payers's *Clave Única de Registro de Población* (CURP) number.
     *
     * @return $this
     */
    public function setCurp($curp)
    {
        $this->container['curp'] = $curp;

        return $this;
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
     * @param string $name The tax payers's first name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets first_last_name
     *
     * @return string
     */
    public function getFirstLastName()
    {
        return $this->container['first_last_name'];
    }

    /**
     * Sets first_last_name
     *
     * @param string $first_last_name The tax payers's first last name.
     *
     * @return $this
     */
    public function setFirstLastName($first_last_name)
    {
        $this->container['first_last_name'] = $first_last_name;

        return $this;
    }

    /**
     * Gets second_last_name
     *
     * @return string
     */
    public function getSecondLastName()
    {
        return $this->container['second_last_name'];
    }

    /**
     * Sets second_last_name
     *
     * @param string $second_last_name The tax payers's second last name.
     *
     * @return $this
     */
    public function setSecondLastName($second_last_name)
    {
        $this->container['second_last_name'] = $second_last_name;

        return $this;
    }

    /**
     * Gets start_operations_date
     *
     * @return \DateTime
     */
    public function getStartOperationsDate()
    {
        return $this->container['start_operations_date'];
    }

    /**
     * Sets start_operations_date
     *
     * @param \DateTime $start_operations_date Date when the tax payer commenced taxable commercial activities, in `YYYY-MM-DD` format.
     *
     * @return $this
     */
    public function setStartOperationsDate($start_operations_date)
    {
        $this->container['start_operations_date'] = $start_operations_date;

        return $this;
    }

    /**
     * Gets status_padron
     *
     * @return string
     */
    public function getStatusPadron()
    {
        return $this->container['status_padron'];
    }

    /**
     * Sets status_padron
     *
     * @param string $status_padron Status of the taxpayer in the Federal Register of Taxpayers (RFC). Can be `ACTIVO` or `INACTIVO`.
     *
     * @return $this
     */
    public function setStatusPadron($status_padron)
    {
        $this->container['status_padron'] = $status_padron;

        return $this;
    }

    /**
     * Gets last_status_change_date
     *
     * @return \DateTime
     */
    public function getLastStatusChangeDate()
    {
        return $this->container['last_status_change_date'];
    }

    /**
     * Sets last_status_change_date
     *
     * @param \DateTime $last_status_change_date Date when `status_padron` was most recently updated, in `YYYY-MM-DD` format.
     *
     * @return $this
     */
    public function setLastStatusChangeDate($last_status_change_date)
    {
        $this->container['last_status_change_date'] = $last_status_change_date;

        return $this;
    }

    /**
     * Gets commercial_name
     *
     * @return string
     */
    public function getCommercialName()
    {
        return $this->container['commercial_name'];
    }

    /**
     * Sets commercial_name
     *
     * @param string $commercial_name The name of the business designated for consumers and the general public.  **Note**: Only applicable for businesses.
     *
     * @return $this
     */
    public function setCommercialName($commercial_name)
    {
        $this->container['commercial_name'] = $commercial_name;

        return $this;
    }

    /**
     * Gets social_name
     *
     * @return string
     */
    public function getSocialName()
    {
        return $this->container['social_name'];
    }

    /**
     * Sets social_name
     *
     * @param string $social_name The unique and exclusive name within the national territory that companies receive for legal or administrative purposes.  **Note**: Only applicable for businesses.
     *
     * @return $this
     */
    public function setSocialName($social_name)
    {
        $this->container['social_name'] = $social_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Contact email address for the tax payer.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone Contact phone number for the tax payer.
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

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
