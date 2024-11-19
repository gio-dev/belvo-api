<?php
/**
 * OwnerIndividualFinancialRelationSalaryPortabilityRequests
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
 * OwnerIndividualFinancialRelationSalaryPortabilityRequests Class Doc Comment
 *
 * @category Class
 * @description Details regarding the salary portability request.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OwnerIndividualFinancialRelationSalaryPortabilityRequests implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OwnerIndividualFinancialRelation_salary_portability_requests';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'employer_name' => 'string',
        'employer_id_number' => 'string',
        'employer_bank_id_number' => 'string',
        'employer_bank_code' => 'string',
        'portability_approval_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'employer_name' => null,
        'employer_id_number' => null,
        'employer_bank_id_number' => null,
        'employer_bank_code' => null,
        'portability_approval_date' => 'date'
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
        'employer_name' => 'employer_name',
        'employer_id_number' => 'employer_id_number',
        'employer_bank_id_number' => 'employer_bank_id_number',
        'employer_bank_code' => 'employer_bank_code',
        'portability_approval_date' => 'portability_approval_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'employer_name' => 'setEmployerName',
        'employer_id_number' => 'setEmployerIdNumber',
        'employer_bank_id_number' => 'setEmployerBankIdNumber',
        'employer_bank_code' => 'setEmployerBankCode',
        'portability_approval_date' => 'setPortabilityApprovalDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'employer_name' => 'getEmployerName',
        'employer_id_number' => 'getEmployerIdNumber',
        'employer_bank_id_number' => 'getEmployerBankIdNumber',
        'employer_bank_code' => 'getEmployerBankCode',
        'portability_approval_date' => 'getPortabilityApprovalDate'
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
        $this->container['employer_name'] = isset($data['employer_name']) ? $data['employer_name'] : null;
        $this->container['employer_id_number'] = isset($data['employer_id_number']) ? $data['employer_id_number'] : null;
        $this->container['employer_bank_id_number'] = isset($data['employer_bank_id_number']) ? $data['employer_bank_id_number'] : null;
        $this->container['employer_bank_code'] = isset($data['employer_bank_code']) ? $data['employer_bank_code'] : null;
        $this->container['portability_approval_date'] = isset($data['portability_approval_date']) ? $data['portability_approval_date'] : null;
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
     * Gets employer_name
     *
     * @return string
     */
    public function getEmployerName()
    {
        return $this->container['employer_name'];
    }

    /**
     * Sets employer_name
     *
     * @param string $employer_name The name of the employer.
     *
     * @return $this
     */
    public function setEmployerName($employer_name)
    {
        $this->container['employer_name'] = $employer_name;

        return $this;
    }

    /**
     * Gets employer_id_number
     *
     * @return string
     */
    public function getEmployerIdNumber()
    {
        return $this->container['employer_id_number'];
    }

    /**
     * Sets employer_id_number
     *
     * @param string $employer_id_number The CPF or CNPJ of the employer.
     *
     * @return $this
     */
    public function setEmployerIdNumber($employer_id_number)
    {
        $this->container['employer_id_number'] = $employer_id_number;

        return $this;
    }

    /**
     * Gets employer_bank_id_number
     *
     * @return string
     */
    public function getEmployerBankIdNumber()
    {
        return $this->container['employer_bank_id_number'];
    }

    /**
     * Sets employer_bank_id_number
     *
     * @param string $employer_bank_id_number The CNPJ of the employer's bank.
     *
     * @return $this
     */
    public function setEmployerBankIdNumber($employer_bank_id_number)
    {
        $this->container['employer_bank_id_number'] = $employer_bank_id_number;

        return $this;
    }

    /**
     * Gets employer_bank_code
     *
     * @return string
     */
    public function getEmployerBankCode()
    {
        return $this->container['employer_bank_code'];
    }

    /**
     * Sets employer_bank_code
     *
     * @param string $employer_bank_code The bank ISPB (*Identificador de Sistema de Pagamentos Brasileiro*s) code of the employer's bank.
     *
     * @return $this
     */
    public function setEmployerBankCode($employer_bank_code)
    {
        $this->container['employer_bank_code'] = $employer_bank_code;

        return $this;
    }

    /**
     * Gets portability_approval_date
     *
     * @return \DateTime
     */
    public function getPortabilityApprovalDate()
    {
        return $this->container['portability_approval_date'];
    }

    /**
     * Sets portability_approval_date
     *
     * @param \DateTime $portability_approval_date The date the portability request was approved, in `YYYY-MM-DD` format.
     *
     * @return $this
     */
    public function setPortabilityApprovalDate($portability_approval_date)
    {
        $this->container['portability_approval_date'] = $portability_approval_date;

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
