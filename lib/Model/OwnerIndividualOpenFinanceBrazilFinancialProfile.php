<?php
/**
 * OwnerIndividualOpenFinanceBrazilFinancialProfile
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
 * OwnerIndividualOpenFinanceBrazilFinancialProfile Class Doc Comment
 *
 * @category Class
 * @description Information regarding the financial profile of the individual.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OwnerIndividualOpenFinanceBrazilFinancialProfile implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OwnerIndividualOpenFinanceBrazil_financial_profile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company_id' => 'string',
        'occuptation_code' => 'string',
        'occupation_description' => 'string',
        'informed_income' => '\Swagger\Client\Model\OwnerIndividualFinancialProfileInformedIncome',
        'patrimony' => '\Swagger\Client\Model\OwnerIndividualFinancialProfilePatrimony'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'company_id' => null,
        'occuptation_code' => null,
        'occupation_description' => null,
        'informed_income' => null,
        'patrimony' => null
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
        'company_id' => 'company_id',
        'occuptation_code' => 'occuptation_code',
        'occupation_description' => 'occupation_description',
        'informed_income' => 'informed_income',
        'patrimony' => 'patrimony'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_id' => 'setCompanyId',
        'occuptation_code' => 'setOccuptationCode',
        'occupation_description' => 'setOccupationDescription',
        'informed_income' => 'setInformedIncome',
        'patrimony' => 'setPatrimony'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_id' => 'getCompanyId',
        'occuptation_code' => 'getOccuptationCode',
        'occupation_description' => 'getOccupationDescription',
        'informed_income' => 'getInformedIncome',
        'patrimony' => 'getPatrimony'
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

    const OCCUPTATION_CODE_BRAZIL_PUBLIC_OFFICE = 'BRAZIL_PUBLIC_OFFICE';
    const OCCUPTATION_CODE_BRAZIL_OCCUPATION_CODE = 'BRAZIL_OCCUPATION_CODE';
    const OCCUPTATION_CODE_OTHER = 'OTHER';
    const OCCUPTATION_CODE_NULL = 'null';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOccuptationCodeAllowableValues()
    {
        return [
            self::OCCUPTATION_CODE_BRAZIL_PUBLIC_OFFICE,
            self::OCCUPTATION_CODE_BRAZIL_OCCUPATION_CODE,
            self::OCCUPTATION_CODE_OTHER,
            self::OCCUPTATION_CODE_NULL,
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
        $this->container['company_id'] = isset($data['company_id']) ? $data['company_id'] : null;
        $this->container['occuptation_code'] = isset($data['occuptation_code']) ? $data['occuptation_code'] : null;
        $this->container['occupation_description'] = isset($data['occupation_description']) ? $data['occupation_description'] : null;
        $this->container['informed_income'] = isset($data['informed_income']) ? $data['informed_income'] : null;
        $this->container['patrimony'] = isset($data['patrimony']) ? $data['patrimony'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['company_id'] === null) {
            $invalidProperties[] = "'company_id' can't be null";
        }
        $allowedValues = $this->getOccuptationCodeAllowableValues();
        if (!is_null($this->container['occuptation_code']) && !in_array($this->container['occuptation_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'occuptation_code', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['occupation_description'] === null) {
            $invalidProperties[] = "'occupation_description' can't be null";
        }
        if ($this->container['informed_income'] === null) {
            $invalidProperties[] = "'informed_income' can't be null";
        }
        if ($this->container['patrimony'] === null) {
            $invalidProperties[] = "'patrimony' can't be null";
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
     * Gets company_id
     *
     * @return string
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param string $company_id The identifier of the company where the individual is employed.
     *
     * @return $this
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets occuptation_code
     *
     * @return string
     */
    public function getOccuptationCode()
    {
        return $this->container['occuptation_code'];
    }

    /**
     * Sets occuptation_code
     *
     * @param string $occuptation_code The area of employment of the individual. We return one of the following values:    - `BRAZIL_PUBLIC_OFFICE`   - `BRAZIL_OCCUPATION_CODE`   - `OTHER`   - `null`
     *
     * @return $this
     */
    public function setOccuptationCode($occuptation_code)
    {
        $allowedValues = $this->getOccuptationCodeAllowableValues();
        if (!is_null($occuptation_code) && !in_array($occuptation_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'occuptation_code', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['occuptation_code'] = $occuptation_code;

        return $this;
    }

    /**
     * Gets occupation_description
     *
     * @return string
     */
    public function getOccupationDescription()
    {
        return $this->container['occupation_description'];
    }

    /**
     * Sets occupation_description
     *
     * @param string $occupation_description Information regarding the individual's occupation.
     *
     * @return $this
     */
    public function setOccupationDescription($occupation_description)
    {
        $this->container['occupation_description'] = $occupation_description;

        return $this;
    }

    /**
     * Gets informed_income
     *
     * @return \Swagger\Client\Model\OwnerIndividualFinancialProfileInformedIncome
     */
    public function getInformedIncome()
    {
        return $this->container['informed_income'];
    }

    /**
     * Sets informed_income
     *
     * @param \Swagger\Client\Model\OwnerIndividualFinancialProfileInformedIncome $informed_income informed_income
     *
     * @return $this
     */
    public function setInformedIncome($informed_income)
    {
        $this->container['informed_income'] = $informed_income;

        return $this;
    }

    /**
     * Gets patrimony
     *
     * @return \Swagger\Client\Model\OwnerIndividualFinancialProfilePatrimony
     */
    public function getPatrimony()
    {
        return $this->container['patrimony'];
    }

    /**
     * Sets patrimony
     *
     * @param \Swagger\Client\Model\OwnerIndividualFinancialProfilePatrimony $patrimony patrimony
     *
     * @return $this
     */
    public function setPatrimony($patrimony)
    {
        $this->container['patrimony'] = $patrimony;

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
