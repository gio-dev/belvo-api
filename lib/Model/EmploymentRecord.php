<?php
/**
 * EmploymentRecord
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
 * EmploymentRecord Class Doc Comment
 *
 * @category Class
 * @description Employment record response payload
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmploymentRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmploymentRecord';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'link' => 'string',
        'created_at' => '\DateTime',
        'collected_at' => '\DateTime',
        'report_date' => '\DateTime',
        'internal_identification' => 'string',
        'personal_data' => '\Swagger\Client\Model\ApiemploymentrecordsPersonalData',
        'social_security_summary' => '\Swagger\Client\Model\ApiemploymentrecordsSocialSecuritySummary',
        'employment_records' => '\Swagger\Client\Model\ApiemploymentrecordsEmploymentRecords[]',
        'employment_scores' => '\Swagger\Client\Model\ApiemploymentrecordsEmploymentScores[]',
        'files' => '\Swagger\Client\Model\ApiemploymentrecordsFiles[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'link' => 'uuid',
        'created_at' => 'date-time',
        'collected_at' => 'date-time',
        'report_date' => 'date',
        'internal_identification' => null,
        'personal_data' => null,
        'social_security_summary' => null,
        'employment_records' => null,
        'employment_scores' => null,
        'files' => null
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
        'created_at' => 'created_at',
        'collected_at' => 'collected_at',
        'report_date' => 'report_date',
        'internal_identification' => 'internal_identification',
        'personal_data' => 'personal_data',
        'social_security_summary' => 'social_security_summary',
        'employment_records' => 'employment_records',
        'employment_scores' => 'employment_scores',
        'files' => 'files'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'link' => 'setLink',
        'created_at' => 'setCreatedAt',
        'collected_at' => 'setCollectedAt',
        'report_date' => 'setReportDate',
        'internal_identification' => 'setInternalIdentification',
        'personal_data' => 'setPersonalData',
        'social_security_summary' => 'setSocialSecuritySummary',
        'employment_records' => 'setEmploymentRecords',
        'employment_scores' => 'setEmploymentScores',
        'files' => 'setFiles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'link' => 'getLink',
        'created_at' => 'getCreatedAt',
        'collected_at' => 'getCollectedAt',
        'report_date' => 'getReportDate',
        'internal_identification' => 'getInternalIdentification',
        'personal_data' => 'getPersonalData',
        'social_security_summary' => 'getSocialSecuritySummary',
        'employment_records' => 'getEmploymentRecords',
        'employment_scores' => 'getEmploymentScores',
        'files' => 'getFiles'
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
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['collected_at'] = isset($data['collected_at']) ? $data['collected_at'] : null;
        $this->container['report_date'] = isset($data['report_date']) ? $data['report_date'] : null;
        $this->container['internal_identification'] = isset($data['internal_identification']) ? $data['internal_identification'] : null;
        $this->container['personal_data'] = isset($data['personal_data']) ? $data['personal_data'] : null;
        $this->container['social_security_summary'] = isset($data['social_security_summary']) ? $data['social_security_summary'] : null;
        $this->container['employment_records'] = isset($data['employment_records']) ? $data['employment_records'] : null;
        $this->container['employment_scores'] = isset($data['employment_scores']) ? $data['employment_scores'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
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
     * Gets report_date
     *
     * @return \DateTime
     */
    public function getReportDate()
    {
        return $this->container['report_date'];
    }

    /**
     * Sets report_date
     *
     * @param \DateTime $report_date The date when the employment record report was generated, in `YYYY-MM-DD` format.
     *
     * @return $this
     */
    public function setReportDate($report_date)
    {
        $this->container['report_date'] = $report_date;

        return $this;
    }

    /**
     * Gets internal_identification
     *
     * @return string
     */
    public function getInternalIdentification()
    {
        return $this->container['internal_identification'];
    }

    /**
     * Sets internal_identification
     *
     * @param string $internal_identification Unique ID for user according to the institution. For IMSS and ISSSTE Mexico, this is the CURP.
     *
     * @return $this
     */
    public function setInternalIdentification($internal_identification)
    {
        $this->container['internal_identification'] = $internal_identification;

        return $this;
    }

    /**
     * Gets personal_data
     *
     * @return \Swagger\Client\Model\ApiemploymentrecordsPersonalData
     */
    public function getPersonalData()
    {
        return $this->container['personal_data'];
    }

    /**
     * Sets personal_data
     *
     * @param \Swagger\Client\Model\ApiemploymentrecordsPersonalData $personal_data personal_data
     *
     * @return $this
     */
    public function setPersonalData($personal_data)
    {
        $this->container['personal_data'] = $personal_data;

        return $this;
    }

    /**
     * Gets social_security_summary
     *
     * @return \Swagger\Client\Model\ApiemploymentrecordsSocialSecuritySummary
     */
    public function getSocialSecuritySummary()
    {
        return $this->container['social_security_summary'];
    }

    /**
     * Sets social_security_summary
     *
     * @param \Swagger\Client\Model\ApiemploymentrecordsSocialSecuritySummary $social_security_summary social_security_summary
     *
     * @return $this
     */
    public function setSocialSecuritySummary($social_security_summary)
    {
        $this->container['social_security_summary'] = $social_security_summary;

        return $this;
    }

    /**
     * Gets employment_records
     *
     * @return \Swagger\Client\Model\ApiemploymentrecordsEmploymentRecords[]
     */
    public function getEmploymentRecords()
    {
        return $this->container['employment_records'];
    }

    /**
     * Sets employment_records
     *
     * @param \Swagger\Client\Model\ApiemploymentrecordsEmploymentRecords[] $employment_records Details regarding the individual's employment history.
     *
     * @return $this
     */
    public function setEmploymentRecords($employment_records)
    {
        $this->container['employment_records'] = $employment_records;

        return $this;
    }

    /**
     * Gets employment_scores
     *
     * @return \Swagger\Client\Model\ApiemploymentrecordsEmploymentScores[]
     */
    public function getEmploymentScores()
    {
        return $this->container['employment_scores'];
    }

    /**
     * Sets employment_scores
     *
     * @param \Swagger\Client\Model\ApiemploymentrecordsEmploymentScores[] $employment_scores An array of `employment_record` scores. Each score provides an insight into employability and income generation potential in a given period.  > **Note 1**: This field is only available for links created with Mexico's IMSS. For other institutions, this field will return `null`.  > **Note 2**: This field will return `null` for employment records retrieved before 16-04-2024. For employment records generated before 16-04-2024, you'll need to make a new POST request to retrieve employment records to calculate the scores.
     *
     * @return $this
     */
    public function setEmploymentScores($employment_scores)
    {
        $this->container['employment_scores'] = $employment_scores;

        return $this;
    }

    /**
     * Gets files
     *
     * @return \Swagger\Client\Model\ApiemploymentrecordsFiles[]
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param \Swagger\Client\Model\ApiemploymentrecordsFiles[] $files Additional PDF binary files relating to the individual's employment.
     *
     * @return $this
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

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
