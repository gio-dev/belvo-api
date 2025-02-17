<?php
/**
 * TaxPayerInformationBusiness
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
 * TaxPayerInformationBusiness Class Doc Comment
 *
 * @category Class
 * @description Object containing information about the tax payer.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaxPayerInformationBusiness implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaxPayerInformationBusiness';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'first_last_name' => 'string',
        'second_last_name' => 'string',
        'first_name' => 'string',
        'other_names' => 'string',
        'company_name' => 'string',
        'main_economic_activity' => 'string',
        'document_id' => '\Swagger\Client\Model\TaxPayerInformationBusinessDocumentId',
        'reporting_id' => '\Swagger\Client\Model\TaxPayerInformationIndividualReportingId'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'first_last_name' => null,
        'second_last_name' => null,
        'first_name' => null,
        'other_names' => null,
        'company_name' => null,
        'main_economic_activity' => null,
        'document_id' => null,
        'reporting_id' => null
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
        'first_last_name' => 'first_last_name',
        'second_last_name' => 'second_last_name',
        'first_name' => 'first_name',
        'other_names' => 'other_names',
        'company_name' => 'company_name',
        'main_economic_activity' => 'main_economic_activity',
        'document_id' => 'document_id',
        'reporting_id' => 'reporting_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'first_last_name' => 'setFirstLastName',
        'second_last_name' => 'setSecondLastName',
        'first_name' => 'setFirstName',
        'other_names' => 'setOtherNames',
        'company_name' => 'setCompanyName',
        'main_economic_activity' => 'setMainEconomicActivity',
        'document_id' => 'setDocumentId',
        'reporting_id' => 'setReportingId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'first_last_name' => 'getFirstLastName',
        'second_last_name' => 'getSecondLastName',
        'first_name' => 'getFirstName',
        'other_names' => 'getOtherNames',
        'company_name' => 'getCompanyName',
        'main_economic_activity' => 'getMainEconomicActivity',
        'document_id' => 'getDocumentId',
        'reporting_id' => 'getReportingId'
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
        $this->container['first_last_name'] = isset($data['first_last_name']) ? $data['first_last_name'] : null;
        $this->container['second_last_name'] = isset($data['second_last_name']) ? $data['second_last_name'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['other_names'] = isset($data['other_names']) ? $data['other_names'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['main_economic_activity'] = isset($data['main_economic_activity']) ? $data['main_economic_activity'] : null;
        $this->container['document_id'] = isset($data['document_id']) ? $data['document_id'] : null;
        $this->container['reporting_id'] = isset($data['reporting_id']) ? $data['reporting_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['first_last_name'] === null) {
            $invalidProperties[] = "'first_last_name' can't be null";
        }
        if ($this->container['second_last_name'] === null) {
            $invalidProperties[] = "'second_last_name' can't be null";
        }
        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ($this->container['other_names'] === null) {
            $invalidProperties[] = "'other_names' can't be null";
        }
        if ($this->container['company_name'] === null) {
            $invalidProperties[] = "'company_name' can't be null";
        }
        if ($this->container['main_economic_activity'] === null) {
            $invalidProperties[] = "'main_economic_activity' can't be null";
        }
        if ($this->container['document_id'] === null) {
            $invalidProperties[] = "'document_id' can't be null";
        }
        if ($this->container['reporting_id'] === null) {
            $invalidProperties[] = "'reporting_id' can't be null";
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
     * @param string $first_last_name The tax payer's first last name.
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
     * @param string $second_last_name The tax payer's second last name.
     *
     * @return $this
     */
    public function setSecondLastName($second_last_name)
    {
        $this->container['second_last_name'] = $second_last_name;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name The tax payer's first name.
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets other_names
     *
     * @return string
     */
    public function getOtherNames()
    {
        return $this->container['other_names'];
    }

    /**
     * Sets other_names
     *
     * @param string $other_names Additional names of the tax payer.
     *
     * @return $this
     */
    public function setOtherNames($other_names)
    {
        $this->container['other_names'] = $other_names;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name The name of the company, as registered at the institution.
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets main_economic_activity
     *
     * @return string
     */
    public function getMainEconomicActivity()
    {
        return $this->container['main_economic_activity'];
    }

    /**
     * Sets main_economic_activity
     *
     * @param string $main_economic_activity The main economic activity the tax payer is involved in.
     *
     * @return $this
     */
    public function setMainEconomicActivity($main_economic_activity)
    {
        $this->container['main_economic_activity'] = $main_economic_activity;

        return $this;
    }

    /**
     * Gets document_id
     *
     * @return \Swagger\Client\Model\TaxPayerInformationBusinessDocumentId
     */
    public function getDocumentId()
    {
        return $this->container['document_id'];
    }

    /**
     * Sets document_id
     *
     * @param \Swagger\Client\Model\TaxPayerInformationBusinessDocumentId $document_id document_id
     *
     * @return $this
     */
    public function setDocumentId($document_id)
    {
        $this->container['document_id'] = $document_id;

        return $this;
    }

    /**
     * Gets reporting_id
     *
     * @return \Swagger\Client\Model\TaxPayerInformationIndividualReportingId
     */
    public function getReportingId()
    {
        return $this->container['reporting_id'];
    }

    /**
     * Sets reporting_id
     *
     * @param \Swagger\Client\Model\TaxPayerInformationIndividualReportingId $reporting_id reporting_id
     *
     * @return $this
     */
    public function setReportingId($reporting_id)
    {
        $this->container['reporting_id'] = $reporting_id;

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
