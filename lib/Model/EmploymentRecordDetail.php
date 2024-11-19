<?php
/**
 * EmploymentRecordDetail
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
 * EmploymentRecordDetail Class Doc Comment
 *
 * @category Class
 * @description Details regarding the individual&#x27;s employment history.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmploymentRecordDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmploymentRecordDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'collected_at' => '\DateTime',
        'employer' => 'string',
        'employer_id' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'weeks_employed' => 'int',
        'state' => 'string',
        'most_recent_base_salary' => 'float',
        'monthly_salary' => 'float',
        'currency' => 'string',
        'employment_status_updates' => '\Swagger\Client\Model\ApiemploymentrecordsEmploymentStatusUpdates[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'collected_at' => 'date-time',
        'employer' => null,
        'employer_id' => null,
        'start_date' => 'date',
        'end_date' => 'date',
        'weeks_employed' => 'int32',
        'state' => null,
        'most_recent_base_salary' => 'float',
        'monthly_salary' => 'float',
        'currency' => null,
        'employment_status_updates' => null
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
        'collected_at' => 'collected_at',
        'employer' => 'employer',
        'employer_id' => 'employer_id',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'weeks_employed' => 'weeks_employed',
        'state' => 'state',
        'most_recent_base_salary' => 'most_recent_base_salary',
        'monthly_salary' => 'monthly_salary',
        'currency' => 'currency',
        'employment_status_updates' => 'employment_status_updates'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'collected_at' => 'setCollectedAt',
        'employer' => 'setEmployer',
        'employer_id' => 'setEmployerId',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'weeks_employed' => 'setWeeksEmployed',
        'state' => 'setState',
        'most_recent_base_salary' => 'setMostRecentBaseSalary',
        'monthly_salary' => 'setMonthlySalary',
        'currency' => 'setCurrency',
        'employment_status_updates' => 'setEmploymentStatusUpdates'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'collected_at' => 'getCollectedAt',
        'employer' => 'getEmployer',
        'employer_id' => 'getEmployerId',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'weeks_employed' => 'getWeeksEmployed',
        'state' => 'getState',
        'most_recent_base_salary' => 'getMostRecentBaseSalary',
        'monthly_salary' => 'getMonthlySalary',
        'currency' => 'getCurrency',
        'employment_status_updates' => 'getEmploymentStatusUpdates'
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
        $this->container['collected_at'] = isset($data['collected_at']) ? $data['collected_at'] : null;
        $this->container['employer'] = isset($data['employer']) ? $data['employer'] : null;
        $this->container['employer_id'] = isset($data['employer_id']) ? $data['employer_id'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['weeks_employed'] = isset($data['weeks_employed']) ? $data['weeks_employed'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['most_recent_base_salary'] = isset($data['most_recent_base_salary']) ? $data['most_recent_base_salary'] : null;
        $this->container['monthly_salary'] = isset($data['monthly_salary']) ? $data['monthly_salary'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['employment_status_updates'] = isset($data['employment_status_updates']) ? $data['employment_status_updates'] : null;
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
     * Gets employer
     *
     * @return string
     */
    public function getEmployer()
    {
        return $this->container['employer'];
    }

    /**
     * Sets employer
     *
     * @param string $employer The official name of the employer.  >**Note**: For ISSSTE Mexico, this is the official name of the entity along with the entity that is responsible for managing the employee's information, separated by a semicolon (`;`). For example: SECRETARIA DE EDUCACION PUBLICA (SEP);SECRETARIA DE EDUCACION PUBLICA (SEP).
     *
     * @return $this
     */
    public function setEmployer($employer)
    {
        $this->container['employer'] = $employer;

        return $this;
    }

    /**
     * Gets employer_id
     *
     * @return string
     */
    public function getEmployerId()
    {
        return $this->container['employer_id'];
    }

    /**
     * Sets employer_id
     *
     * @param string $employer_id The official ID of the employer, according to the country.  >**Note**: For ISSSTE Mexico, this value will return `null`.
     *
     * @return $this
     */
    public function setEmployerId($employer_id)
    {
        $this->container['employer_id'] = $employer_id;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date Date when employment started, in `YYYY-MM-DD` format.
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date Date when employment finished, in `YYYY-MM-DD` format.  >**Note**: This field will return `null` for the user's current employment.
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets weeks_employed
     *
     * @return int
     */
    public function getWeeksEmployed()
    {
        return $this->container['weeks_employed'];
    }

    /**
     * Sets weeks_employed
     *
     * @param int $weeks_employed Number of weeks that the individual was employed.
     *
     * @return $this
     */
    public function setWeeksEmployed($weeks_employed)
    {
        $this->container['weeks_employed'] = $weeks_employed;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state In what geographical state the individual was employed, according to the country.  >**Note**: For ISSSTE Mexico, this value will return `null`.
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets most_recent_base_salary
     *
     * @return float
     */
    public function getMostRecentBaseSalary()
    {
        return $this->container['most_recent_base_salary'];
    }

    /**
     * Sets most_recent_base_salary
     *
     * @param float $most_recent_base_salary The most recent base salary the individual earned.  - For IMSS Mexico, this value is calculated including the perks that the individual is entitled to throughout the year. - For ISSSTE Mexico, this value is calculated dividing `monthly_salary` by 30 (days), and excludes the individual's perks.
     *
     * @return $this
     */
    public function setMostRecentBaseSalary($most_recent_base_salary)
    {
        $this->container['most_recent_base_salary'] = $most_recent_base_salary;

        return $this;
    }

    /**
     * Gets monthly_salary
     *
     * @return float
     */
    public function getMonthlySalary()
    {
        return $this->container['monthly_salary'];
    }

    /**
     * Sets monthly_salary
     *
     * @param float $monthly_salary The monthly salary of the individual, including any additional perks.  - For IMSS Mexico, this value is calculated including the perks that the individual is entitled to throughout the year. - For ISSSTE Mexico, this value is calculated excluding perks.
     *
     * @return $this
     */
    public function setMonthlySalary($monthly_salary)
    {
        $this->container['monthly_salary'] = $monthly_salary;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency The three-letter currency code in which the salary is paid.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets employment_status_updates
     *
     * @return \Swagger\Client\Model\ApiemploymentrecordsEmploymentStatusUpdates[]
     */
    public function getEmploymentStatusUpdates()
    {
        return $this->container['employment_status_updates'];
    }

    /**
     * Sets employment_status_updates
     *
     * @param \Swagger\Client\Model\ApiemploymentrecordsEmploymentStatusUpdates[] $employment_status_updates Details regarding any employment changes of the individual.
     *
     * @return $this
     */
    public function setEmploymentStatusUpdates($employment_status_updates)
    {
        $this->container['employment_status_updates'] = $employment_status_updates;

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
