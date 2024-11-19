<?php
/**
 * EmploymentMetric
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
 * EmploymentMetric Class Doc Comment
 *
 * @category Class
 * @description Employment Metrics details
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmploymentMetric implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmploymentMetric';

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
        'updated_at' => '\DateTime',
        'reference_date' => '\DateTime',
        'age' => 'int',
        'current_status' => 'string',
        'current_employer_count' => 'int',
        'base_salary_last' => 'float',
        'weeks_employed_last_job' => 'float',
        'weeks_since_last_job' => 'float',
        'weeks_employed_total' => 'float',
        'weeks_with_multiple_employers' => 'float',
        'employer_count' => 'int',
        'unique_employer_count' => 'int',
        'employers_per_year' => 'float',
        'weeks_between_jobs' => 'float',
        'max_weeks_between_jobs' => 'float',
        'increases_last_job' => 'int',
        'decreases_last_job' => 'int',
        'increases_after_change' => 'int',
        'decreases_after_change' => 'int',
        'increases_overall' => 'int',
        'decreases_overall' => 'int',
        'increases_1y' => 'int',
        'decreases_1y' => 'int',
        'increases_3y' => 'int',
        'decreases_3y' => 'int',
        'increases_5y' => 'int',
        'decreases_5y' => 'int',
        'yearly_change_1y' => 'float',
        'yearly_change_3y' => 'float',
        'yearly_change_5y' => 'float',
        'min_monthly_salary_1y' => 'float',
        'min_monthly_salary_3y' => 'float',
        'min_monthly_salary_5y' => 'float',
        'average_monthly_salary_1y' => 'float',
        'average_monthly_salary_3y' => 'float',
        'average_monthly_salary_5y' => 'float',
        'max_monthly_salary_1y' => 'float',
        'max_monthly_salary_3y' => 'float',
        'max_monthly_salary_5y' => 'float'
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
        'updated_at' => 'date-time',
        'reference_date' => 'date',
        'age' => 'int32',
        'current_status' => null,
        'current_employer_count' => 'int32',
        'base_salary_last' => 'float',
        'weeks_employed_last_job' => 'float',
        'weeks_since_last_job' => 'float',
        'weeks_employed_total' => 'float',
        'weeks_with_multiple_employers' => 'float',
        'employer_count' => 'int32',
        'unique_employer_count' => 'int32',
        'employers_per_year' => 'float',
        'weeks_between_jobs' => 'float',
        'max_weeks_between_jobs' => 'float',
        'increases_last_job' => 'int32',
        'decreases_last_job' => 'int32',
        'increases_after_change' => 'int32',
        'decreases_after_change' => 'int32',
        'increases_overall' => 'int32',
        'decreases_overall' => 'int32',
        'increases_1y' => 'int32',
        'decreases_1y' => 'int32',
        'increases_3y' => 'int32',
        'decreases_3y' => 'int32',
        'increases_5y' => 'int32',
        'decreases_5y' => 'int32',
        'yearly_change_1y' => 'float',
        'yearly_change_3y' => 'float',
        'yearly_change_5y' => 'float',
        'min_monthly_salary_1y' => 'float',
        'min_monthly_salary_3y' => 'float',
        'min_monthly_salary_5y' => 'float',
        'average_monthly_salary_1y' => 'float',
        'average_monthly_salary_3y' => 'float',
        'average_monthly_salary_5y' => 'float',
        'max_monthly_salary_1y' => 'float',
        'max_monthly_salary_3y' => 'float',
        'max_monthly_salary_5y' => 'float'
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
        'updated_at' => 'updated_at',
        'reference_date' => 'reference_date',
        'age' => 'age',
        'current_status' => 'current_status',
        'current_employer_count' => 'current_employer_count',
        'base_salary_last' => 'base_salary_last',
        'weeks_employed_last_job' => 'weeks_employed_last_job',
        'weeks_since_last_job' => 'weeks_since_last_job',
        'weeks_employed_total' => 'weeks_employed_total',
        'weeks_with_multiple_employers' => 'weeks_with_multiple_employers',
        'employer_count' => 'employer_count',
        'unique_employer_count' => 'unique_employer_count',
        'employers_per_year' => 'employers_per_year',
        'weeks_between_jobs' => 'weeks_between_jobs',
        'max_weeks_between_jobs' => 'max_weeks_between_jobs',
        'increases_last_job' => 'increases_last_job',
        'decreases_last_job' => 'decreases_last_job',
        'increases_after_change' => 'increases_after_change',
        'decreases_after_change' => 'decreases_after_change',
        'increases_overall' => 'increases_overall',
        'decreases_overall' => 'decreases_overall',
        'increases_1y' => 'increases_1y',
        'decreases_1y' => 'decreases_1y',
        'increases_3y' => 'increases_3y',
        'decreases_3y' => 'decreases_3y',
        'increases_5y' => 'increases_5y',
        'decreases_5y' => 'decreases_5y',
        'yearly_change_1y' => 'yearly_change_1y',
        'yearly_change_3y' => 'yearly_change_3y',
        'yearly_change_5y' => 'yearly_change_5y',
        'min_monthly_salary_1y' => 'min_monthly_salary_1y',
        'min_monthly_salary_3y' => 'min_monthly_salary_3y',
        'min_monthly_salary_5y' => 'min_monthly_salary_5y',
        'average_monthly_salary_1y' => 'average_monthly_salary_1y',
        'average_monthly_salary_3y' => 'average_monthly_salary_3y',
        'average_monthly_salary_5y' => 'average_monthly_salary_5y',
        'max_monthly_salary_1y' => 'max_monthly_salary_1y',
        'max_monthly_salary_3y' => 'max_monthly_salary_3y',
        'max_monthly_salary_5y' => 'max_monthly_salary_5y'
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
        'updated_at' => 'setUpdatedAt',
        'reference_date' => 'setReferenceDate',
        'age' => 'setAge',
        'current_status' => 'setCurrentStatus',
        'current_employer_count' => 'setCurrentEmployerCount',
        'base_salary_last' => 'setBaseSalaryLast',
        'weeks_employed_last_job' => 'setWeeksEmployedLastJob',
        'weeks_since_last_job' => 'setWeeksSinceLastJob',
        'weeks_employed_total' => 'setWeeksEmployedTotal',
        'weeks_with_multiple_employers' => 'setWeeksWithMultipleEmployers',
        'employer_count' => 'setEmployerCount',
        'unique_employer_count' => 'setUniqueEmployerCount',
        'employers_per_year' => 'setEmployersPerYear',
        'weeks_between_jobs' => 'setWeeksBetweenJobs',
        'max_weeks_between_jobs' => 'setMaxWeeksBetweenJobs',
        'increases_last_job' => 'setIncreasesLastJob',
        'decreases_last_job' => 'setDecreasesLastJob',
        'increases_after_change' => 'setIncreasesAfterChange',
        'decreases_after_change' => 'setDecreasesAfterChange',
        'increases_overall' => 'setIncreasesOverall',
        'decreases_overall' => 'setDecreasesOverall',
        'increases_1y' => 'setIncreases1y',
        'decreases_1y' => 'setDecreases1y',
        'increases_3y' => 'setIncreases3y',
        'decreases_3y' => 'setDecreases3y',
        'increases_5y' => 'setIncreases5y',
        'decreases_5y' => 'setDecreases5y',
        'yearly_change_1y' => 'setYearlyChange1y',
        'yearly_change_3y' => 'setYearlyChange3y',
        'yearly_change_5y' => 'setYearlyChange5y',
        'min_monthly_salary_1y' => 'setMinMonthlySalary1y',
        'min_monthly_salary_3y' => 'setMinMonthlySalary3y',
        'min_monthly_salary_5y' => 'setMinMonthlySalary5y',
        'average_monthly_salary_1y' => 'setAverageMonthlySalary1y',
        'average_monthly_salary_3y' => 'setAverageMonthlySalary3y',
        'average_monthly_salary_5y' => 'setAverageMonthlySalary5y',
        'max_monthly_salary_1y' => 'setMaxMonthlySalary1y',
        'max_monthly_salary_3y' => 'setMaxMonthlySalary3y',
        'max_monthly_salary_5y' => 'setMaxMonthlySalary5y'
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
        'updated_at' => 'getUpdatedAt',
        'reference_date' => 'getReferenceDate',
        'age' => 'getAge',
        'current_status' => 'getCurrentStatus',
        'current_employer_count' => 'getCurrentEmployerCount',
        'base_salary_last' => 'getBaseSalaryLast',
        'weeks_employed_last_job' => 'getWeeksEmployedLastJob',
        'weeks_since_last_job' => 'getWeeksSinceLastJob',
        'weeks_employed_total' => 'getWeeksEmployedTotal',
        'weeks_with_multiple_employers' => 'getWeeksWithMultipleEmployers',
        'employer_count' => 'getEmployerCount',
        'unique_employer_count' => 'getUniqueEmployerCount',
        'employers_per_year' => 'getEmployersPerYear',
        'weeks_between_jobs' => 'getWeeksBetweenJobs',
        'max_weeks_between_jobs' => 'getMaxWeeksBetweenJobs',
        'increases_last_job' => 'getIncreasesLastJob',
        'decreases_last_job' => 'getDecreasesLastJob',
        'increases_after_change' => 'getIncreasesAfterChange',
        'decreases_after_change' => 'getDecreasesAfterChange',
        'increases_overall' => 'getIncreasesOverall',
        'decreases_overall' => 'getDecreasesOverall',
        'increases_1y' => 'getIncreases1y',
        'decreases_1y' => 'getDecreases1y',
        'increases_3y' => 'getIncreases3y',
        'decreases_3y' => 'getDecreases3y',
        'increases_5y' => 'getIncreases5y',
        'decreases_5y' => 'getDecreases5y',
        'yearly_change_1y' => 'getYearlyChange1y',
        'yearly_change_3y' => 'getYearlyChange3y',
        'yearly_change_5y' => 'getYearlyChange5y',
        'min_monthly_salary_1y' => 'getMinMonthlySalary1y',
        'min_monthly_salary_3y' => 'getMinMonthlySalary3y',
        'min_monthly_salary_5y' => 'getMinMonthlySalary5y',
        'average_monthly_salary_1y' => 'getAverageMonthlySalary1y',
        'average_monthly_salary_3y' => 'getAverageMonthlySalary3y',
        'average_monthly_salary_5y' => 'getAverageMonthlySalary5y',
        'max_monthly_salary_1y' => 'getMaxMonthlySalary1y',
        'max_monthly_salary_3y' => 'getMaxMonthlySalary3y',
        'max_monthly_salary_5y' => 'getMaxMonthlySalary5y'
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

    const CURRENT_STATUS_EMPLOYED = 'EMPLOYED';
    const CURRENT_STATUS_RETIRED = 'RETIRED';
    const CURRENT_STATUS_UNEMPLOYED = 'UNEMPLOYED';
    const CURRENT_STATUS_NULL = 'null';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCurrentStatusAllowableValues()
    {
        return [
            self::CURRENT_STATUS_EMPLOYED,
            self::CURRENT_STATUS_RETIRED,
            self::CURRENT_STATUS_UNEMPLOYED,
            self::CURRENT_STATUS_NULL,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['collected_at'] = isset($data['collected_at']) ? $data['collected_at'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['reference_date'] = isset($data['reference_date']) ? $data['reference_date'] : null;
        $this->container['age'] = isset($data['age']) ? $data['age'] : null;
        $this->container['current_status'] = isset($data['current_status']) ? $data['current_status'] : null;
        $this->container['current_employer_count'] = isset($data['current_employer_count']) ? $data['current_employer_count'] : null;
        $this->container['base_salary_last'] = isset($data['base_salary_last']) ? $data['base_salary_last'] : null;
        $this->container['weeks_employed_last_job'] = isset($data['weeks_employed_last_job']) ? $data['weeks_employed_last_job'] : null;
        $this->container['weeks_since_last_job'] = isset($data['weeks_since_last_job']) ? $data['weeks_since_last_job'] : null;
        $this->container['weeks_employed_total'] = isset($data['weeks_employed_total']) ? $data['weeks_employed_total'] : null;
        $this->container['weeks_with_multiple_employers'] = isset($data['weeks_with_multiple_employers']) ? $data['weeks_with_multiple_employers'] : null;
        $this->container['employer_count'] = isset($data['employer_count']) ? $data['employer_count'] : null;
        $this->container['unique_employer_count'] = isset($data['unique_employer_count']) ? $data['unique_employer_count'] : null;
        $this->container['employers_per_year'] = isset($data['employers_per_year']) ? $data['employers_per_year'] : null;
        $this->container['weeks_between_jobs'] = isset($data['weeks_between_jobs']) ? $data['weeks_between_jobs'] : null;
        $this->container['max_weeks_between_jobs'] = isset($data['max_weeks_between_jobs']) ? $data['max_weeks_between_jobs'] : null;
        $this->container['increases_last_job'] = isset($data['increases_last_job']) ? $data['increases_last_job'] : null;
        $this->container['decreases_last_job'] = isset($data['decreases_last_job']) ? $data['decreases_last_job'] : null;
        $this->container['increases_after_change'] = isset($data['increases_after_change']) ? $data['increases_after_change'] : null;
        $this->container['decreases_after_change'] = isset($data['decreases_after_change']) ? $data['decreases_after_change'] : null;
        $this->container['increases_overall'] = isset($data['increases_overall']) ? $data['increases_overall'] : null;
        $this->container['decreases_overall'] = isset($data['decreases_overall']) ? $data['decreases_overall'] : null;
        $this->container['increases_1y'] = isset($data['increases_1y']) ? $data['increases_1y'] : null;
        $this->container['decreases_1y'] = isset($data['decreases_1y']) ? $data['decreases_1y'] : null;
        $this->container['increases_3y'] = isset($data['increases_3y']) ? $data['increases_3y'] : null;
        $this->container['decreases_3y'] = isset($data['decreases_3y']) ? $data['decreases_3y'] : null;
        $this->container['increases_5y'] = isset($data['increases_5y']) ? $data['increases_5y'] : null;
        $this->container['decreases_5y'] = isset($data['decreases_5y']) ? $data['decreases_5y'] : null;
        $this->container['yearly_change_1y'] = isset($data['yearly_change_1y']) ? $data['yearly_change_1y'] : null;
        $this->container['yearly_change_3y'] = isset($data['yearly_change_3y']) ? $data['yearly_change_3y'] : null;
        $this->container['yearly_change_5y'] = isset($data['yearly_change_5y']) ? $data['yearly_change_5y'] : null;
        $this->container['min_monthly_salary_1y'] = isset($data['min_monthly_salary_1y']) ? $data['min_monthly_salary_1y'] : null;
        $this->container['min_monthly_salary_3y'] = isset($data['min_monthly_salary_3y']) ? $data['min_monthly_salary_3y'] : null;
        $this->container['min_monthly_salary_5y'] = isset($data['min_monthly_salary_5y']) ? $data['min_monthly_salary_5y'] : null;
        $this->container['average_monthly_salary_1y'] = isset($data['average_monthly_salary_1y']) ? $data['average_monthly_salary_1y'] : null;
        $this->container['average_monthly_salary_3y'] = isset($data['average_monthly_salary_3y']) ? $data['average_monthly_salary_3y'] : null;
        $this->container['average_monthly_salary_5y'] = isset($data['average_monthly_salary_5y']) ? $data['average_monthly_salary_5y'] : null;
        $this->container['max_monthly_salary_1y'] = isset($data['max_monthly_salary_1y']) ? $data['max_monthly_salary_1y'] : null;
        $this->container['max_monthly_salary_3y'] = isset($data['max_monthly_salary_3y']) ? $data['max_monthly_salary_3y'] : null;
        $this->container['max_monthly_salary_5y'] = isset($data['max_monthly_salary_5y']) ? $data['max_monthly_salary_5y'] : null;
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
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['reference_date'] === null) {
            $invalidProperties[] = "'reference_date' can't be null";
        }
        if ($this->container['age'] === null) {
            $invalidProperties[] = "'age' can't be null";
        }
        if ($this->container['current_status'] === null) {
            $invalidProperties[] = "'current_status' can't be null";
        }
        $allowedValues = $this->getCurrentStatusAllowableValues();
        if (!is_null($this->container['current_status']) && !in_array($this->container['current_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'current_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['current_employer_count'] === null) {
            $invalidProperties[] = "'current_employer_count' can't be null";
        }
        if ($this->container['base_salary_last'] === null) {
            $invalidProperties[] = "'base_salary_last' can't be null";
        }
        if ($this->container['weeks_employed_last_job'] === null) {
            $invalidProperties[] = "'weeks_employed_last_job' can't be null";
        }
        if ($this->container['weeks_since_last_job'] === null) {
            $invalidProperties[] = "'weeks_since_last_job' can't be null";
        }
        if ($this->container['weeks_employed_total'] === null) {
            $invalidProperties[] = "'weeks_employed_total' can't be null";
        }
        if ($this->container['weeks_with_multiple_employers'] === null) {
            $invalidProperties[] = "'weeks_with_multiple_employers' can't be null";
        }
        if ($this->container['employer_count'] === null) {
            $invalidProperties[] = "'employer_count' can't be null";
        }
        if ($this->container['unique_employer_count'] === null) {
            $invalidProperties[] = "'unique_employer_count' can't be null";
        }
        if ($this->container['employers_per_year'] === null) {
            $invalidProperties[] = "'employers_per_year' can't be null";
        }
        if ($this->container['weeks_between_jobs'] === null) {
            $invalidProperties[] = "'weeks_between_jobs' can't be null";
        }
        if ($this->container['max_weeks_between_jobs'] === null) {
            $invalidProperties[] = "'max_weeks_between_jobs' can't be null";
        }
        if ($this->container['increases_last_job'] === null) {
            $invalidProperties[] = "'increases_last_job' can't be null";
        }
        if ($this->container['decreases_last_job'] === null) {
            $invalidProperties[] = "'decreases_last_job' can't be null";
        }
        if ($this->container['increases_after_change'] === null) {
            $invalidProperties[] = "'increases_after_change' can't be null";
        }
        if ($this->container['decreases_after_change'] === null) {
            $invalidProperties[] = "'decreases_after_change' can't be null";
        }
        if ($this->container['increases_overall'] === null) {
            $invalidProperties[] = "'increases_overall' can't be null";
        }
        if ($this->container['decreases_overall'] === null) {
            $invalidProperties[] = "'decreases_overall' can't be null";
        }
        if ($this->container['increases_1y'] === null) {
            $invalidProperties[] = "'increases_1y' can't be null";
        }
        if ($this->container['decreases_1y'] === null) {
            $invalidProperties[] = "'decreases_1y' can't be null";
        }
        if ($this->container['increases_3y'] === null) {
            $invalidProperties[] = "'increases_3y' can't be null";
        }
        if ($this->container['decreases_3y'] === null) {
            $invalidProperties[] = "'decreases_3y' can't be null";
        }
        if ($this->container['increases_5y'] === null) {
            $invalidProperties[] = "'increases_5y' can't be null";
        }
        if ($this->container['decreases_5y'] === null) {
            $invalidProperties[] = "'decreases_5y' can't be null";
        }
        if ($this->container['yearly_change_1y'] === null) {
            $invalidProperties[] = "'yearly_change_1y' can't be null";
        }
        if ($this->container['yearly_change_3y'] === null) {
            $invalidProperties[] = "'yearly_change_3y' can't be null";
        }
        if ($this->container['yearly_change_5y'] === null) {
            $invalidProperties[] = "'yearly_change_5y' can't be null";
        }
        if ($this->container['min_monthly_salary_1y'] === null) {
            $invalidProperties[] = "'min_monthly_salary_1y' can't be null";
        }
        if ($this->container['min_monthly_salary_3y'] === null) {
            $invalidProperties[] = "'min_monthly_salary_3y' can't be null";
        }
        if ($this->container['min_monthly_salary_5y'] === null) {
            $invalidProperties[] = "'min_monthly_salary_5y' can't be null";
        }
        if ($this->container['average_monthly_salary_1y'] === null) {
            $invalidProperties[] = "'average_monthly_salary_1y' can't be null";
        }
        if ($this->container['average_monthly_salary_3y'] === null) {
            $invalidProperties[] = "'average_monthly_salary_3y' can't be null";
        }
        if ($this->container['average_monthly_salary_5y'] === null) {
            $invalidProperties[] = "'average_monthly_salary_5y' can't be null";
        }
        if ($this->container['max_monthly_salary_1y'] === null) {
            $invalidProperties[] = "'max_monthly_salary_1y' can't be null";
        }
        if ($this->container['max_monthly_salary_3y'] === null) {
            $invalidProperties[] = "'max_monthly_salary_3y' can't be null";
        }
        if ($this->container['max_monthly_salary_5y'] === null) {
            $invalidProperties[] = "'max_monthly_salary_5y' can't be null";
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
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at The ISO-8601 timestamp of when the employment metrics calculation was last updated.
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets reference_date
     *
     * @return \DateTime
     */
    public function getReferenceDate()
    {
        return $this->container['reference_date'];
    }

    /**
     * Sets reference_date
     *
     * @param \DateTime $reference_date The reference_date your provided in your request. If you didn't provide one, this field will return `null`, indicating that the calculations are performed up until the date of the request.  **Note:** All calculations are relative to this date.
     *
     * @return $this
     */
    public function setReferenceDate($reference_date)
    {
        $this->container['reference_date'] = $reference_date;

        return $this;
    }

    /**
     * Gets age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->container['age'];
    }

    /**
     * Sets age
     *
     * @param int $age The age of the individual.
     *
     * @return $this
     */
    public function setAge($age)
    {
        $this->container['age'] = $age;

        return $this;
    }

    /**
     * Gets current_status
     *
     * @return string
     */
    public function getCurrentStatus()
    {
        return $this->container['current_status'];
    }

    /**
     * Sets current_status
     *
     * @param string $current_status Indicates the employment status of the individual. We return one of the following responses:      - `EMPLOYED`   - `RETIRED`   - `UNEMPLOYED`   - `null`
     *
     * @return $this
     */
    public function setCurrentStatus($current_status)
    {
        $allowedValues = $this->getCurrentStatusAllowableValues();
        if (!in_array($current_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'current_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['current_status'] = $current_status;

        return $this;
    }

    /**
     * Gets current_employer_count
     *
     * @return int
     */
    public function getCurrentEmployerCount()
    {
        return $this->container['current_employer_count'];
    }

    /**
     * Sets current_employer_count
     *
     * @param int $current_employer_count The number of employers the individual has right now.
     *
     * @return $this
     */
    public function setCurrentEmployerCount($current_employer_count)
    {
        $this->container['current_employer_count'] = $current_employer_count;

        return $this;
    }

    /**
     * Gets base_salary_last
     *
     * @return float
     */
    public function getBaseSalaryLast()
    {
        return $this->container['base_salary_last'];
    }

    /**
     * Sets base_salary_last
     *
     * @param float $base_salary_last The user's latest base salary. If `current_status` is `EMPLOYED`, this is the user's current base salary.
     *
     * @return $this
     */
    public function setBaseSalaryLast($base_salary_last)
    {
        $this->container['base_salary_last'] = $base_salary_last;

        return $this;
    }

    /**
     * Gets weeks_employed_last_job
     *
     * @return float
     */
    public function getWeeksEmployedLastJob()
    {
        return $this->container['weeks_employed_last_job'];
    }

    /**
     * Sets weeks_employed_last_job
     *
     * @param float $weeks_employed_last_job The number of weeks the user was employed in their last job. If `current_status` is `EMPLOYED`, then this field indicates the number of weeks the user has been employed with his current job.
     *
     * @return $this
     */
    public function setWeeksEmployedLastJob($weeks_employed_last_job)
    {
        $this->container['weeks_employed_last_job'] = $weeks_employed_last_job;

        return $this;
    }

    /**
     * Gets weeks_since_last_job
     *
     * @return float
     */
    public function getWeeksSinceLastJob()
    {
        return $this->container['weeks_since_last_job'];
    }

    /**
     * Sets weeks_since_last_job
     *
     * @param float $weeks_since_last_job The number of weeks since their last job. If the value of this field is `0`, this indicates that the user is currently employed.
     *
     * @return $this
     */
    public function setWeeksSinceLastJob($weeks_since_last_job)
    {
        $this->container['weeks_since_last_job'] = $weeks_since_last_job;

        return $this;
    }

    /**
     * Gets weeks_employed_total
     *
     * @return float
     */
    public function getWeeksEmployedTotal()
    {
        return $this->container['weeks_employed_total'];
    }

    /**
     * Sets weeks_employed_total
     *
     * @param float $weeks_employed_total The total number of weeks the user has been employed, according to the institution.  > **Note:** > > In the case that the user is employed at two or more places at the same time, we still calculate those weeks as one week. For example, if a user has three concurrent jobs for a month, this is calculated as 4 weeks.
     *
     * @return $this
     */
    public function setWeeksEmployedTotal($weeks_employed_total)
    {
        $this->container['weeks_employed_total'] = $weeks_employed_total;

        return $this;
    }

    /**
     * Gets weeks_with_multiple_employers
     *
     * @return float
     */
    public function getWeeksWithMultipleEmployers()
    {
        return $this->container['weeks_with_multiple_employers'];
    }

    /**
     * Sets weeks_with_multiple_employers
     *
     * @param float $weeks_with_multiple_employers The number of the weeks that the individual has had more than one employer at the same time.
     *
     * @return $this
     */
    public function setWeeksWithMultipleEmployers($weeks_with_multiple_employers)
    {
        $this->container['weeks_with_multiple_employers'] = $weeks_with_multiple_employers;

        return $this;
    }

    /**
     * Gets employer_count
     *
     * @return int
     */
    public function getEmployerCount()
    {
        return $this->container['employer_count'];
    }

    /**
     * Sets employer_count
     *
     * @param int $employer_count The total number of employers the user has had. Useful to indicate employment stability over the course of their lifetime.
     *
     * @return $this
     */
    public function setEmployerCount($employer_count)
    {
        $this->container['employer_count'] = $employer_count;

        return $this;
    }

    /**
     * Gets unique_employer_count
     *
     * @return int
     */
    public function getUniqueEmployerCount()
    {
        return $this->container['unique_employer_count'];
    }

    /**
     * Sets unique_employer_count
     *
     * @param int $unique_employer_count The number of unique employers that the individual has had.  > **Note:** > > If the user left one company and returned, for example, six months later to the same company, this is counted as one employer.
     *
     * @return $this
     */
    public function setUniqueEmployerCount($unique_employer_count)
    {
        $this->container['unique_employer_count'] = $unique_employer_count;

        return $this;
    }

    /**
     * Gets employers_per_year
     *
     * @return float
     */
    public function getEmployersPerYear()
    {
        return $this->container['employers_per_year'];
    }

    /**
     * Sets employers_per_year
     *
     * @param float $employers_per_year Number of employers per year. Useful to indicate employment stability over the course of a year.  > **Note:** > > If the user left one company and returned, for example, six months later to the same company, this is counted as one employer.
     *
     * @return $this
     */
    public function setEmployersPerYear($employers_per_year)
    {
        $this->container['employers_per_year'] = $employers_per_year;

        return $this;
    }

    /**
     * Gets weeks_between_jobs
     *
     * @return float
     */
    public function getWeeksBetweenJobs()
    {
        return $this->container['weeks_between_jobs'];
    }

    /**
     * Sets weeks_between_jobs
     *
     * @param float $weeks_between_jobs The total number of weeks the individual was unemployed.
     *
     * @return $this
     */
    public function setWeeksBetweenJobs($weeks_between_jobs)
    {
        $this->container['weeks_between_jobs'] = $weeks_between_jobs;

        return $this;
    }

    /**
     * Gets max_weeks_between_jobs
     *
     * @return float
     */
    public function getMaxWeeksBetweenJobs()
    {
        return $this->container['max_weeks_between_jobs'];
    }

    /**
     * Sets max_weeks_between_jobs
     *
     * @param float $max_weeks_between_jobs The maximum number of weeks that the individual was unemployed.
     *
     * @return $this
     */
    public function setMaxWeeksBetweenJobs($max_weeks_between_jobs)
    {
        $this->container['max_weeks_between_jobs'] = $max_weeks_between_jobs;

        return $this;
    }

    /**
     * Gets increases_last_job
     *
     * @return int
     */
    public function getIncreasesLastJob()
    {
        return $this->container['increases_last_job'];
    }

    /**
     * Sets increases_last_job
     *
     * @param int $increases_last_job The total number of salary increases the user had in their last job. If `current_status` is `EMPLOYED`, this refers to the user's current job.  > **Note:** > > For all salary increases or decreases, we only take into account those where the change in salary is greater than 2%.
     *
     * @return $this
     */
    public function setIncreasesLastJob($increases_last_job)
    {
        $this->container['increases_last_job'] = $increases_last_job;

        return $this;
    }

    /**
     * Gets decreases_last_job
     *
     * @return int
     */
    public function getDecreasesLastJob()
    {
        return $this->container['decreases_last_job'];
    }

    /**
     * Sets decreases_last_job
     *
     * @param int $decreases_last_job The total number of salary increases the user had in their last job. If `current_status` is `EMPLOYED`, this refers to the user's current job.
     *
     * @return $this
     */
    public function setDecreasesLastJob($decreases_last_job)
    {
        $this->container['decreases_last_job'] = $decreases_last_job;

        return $this;
    }

    /**
     * Gets increases_after_change
     *
     * @return int
     */
    public function getIncreasesAfterChange()
    {
        return $this->container['increases_after_change'];
    }

    /**
     * Sets increases_after_change
     *
     * @param int $increases_after_change The total number of salary increases between the individual's penultimate job and the last (or current) job.
     *
     * @return $this
     */
    public function setIncreasesAfterChange($increases_after_change)
    {
        $this->container['increases_after_change'] = $increases_after_change;

        return $this;
    }

    /**
     * Gets decreases_after_change
     *
     * @return int
     */
    public function getDecreasesAfterChange()
    {
        return $this->container['decreases_after_change'];
    }

    /**
     * Sets decreases_after_change
     *
     * @param int $decreases_after_change The total number of salary decreases between the individual's penultimate job and the last (or current) job.
     *
     * @return $this
     */
    public function setDecreasesAfterChange($decreases_after_change)
    {
        $this->container['decreases_after_change'] = $decreases_after_change;

        return $this;
    }

    /**
     * Gets increases_overall
     *
     * @return int
     */
    public function getIncreasesOverall()
    {
        return $this->container['increases_overall'];
    }

    /**
     * Sets increases_overall
     *
     * @param int $increases_overall The total number of salary increases throughout the individual's working career.
     *
     * @return $this
     */
    public function setIncreasesOverall($increases_overall)
    {
        $this->container['increases_overall'] = $increases_overall;

        return $this;
    }

    /**
     * Gets decreases_overall
     *
     * @return int
     */
    public function getDecreasesOverall()
    {
        return $this->container['decreases_overall'];
    }

    /**
     * Sets decreases_overall
     *
     * @param int $decreases_overall The total number of salary decreases throughout the individual's working career.
     *
     * @return $this
     */
    public function setDecreasesOverall($decreases_overall)
    {
        $this->container['decreases_overall'] = $decreases_overall;

        return $this;
    }

    /**
     * Gets increases_1y
     *
     * @return int
     */
    public function getIncreases1y()
    {
        return $this->container['increases_1y'];
    }

    /**
     * Sets increases_1y
     *
     * @param int $increases_1y The total number of salary increases throughout the individual's last year (YTD).
     *
     * @return $this
     */
    public function setIncreases1y($increases_1y)
    {
        $this->container['increases_1y'] = $increases_1y;

        return $this;
    }

    /**
     * Gets decreases_1y
     *
     * @return int
     */
    public function getDecreases1y()
    {
        return $this->container['decreases_1y'];
    }

    /**
     * Sets decreases_1y
     *
     * @param int $decreases_1y The total number of salary decreases throughout the individual's last year (YTD).
     *
     * @return $this
     */
    public function setDecreases1y($decreases_1y)
    {
        $this->container['decreases_1y'] = $decreases_1y;

        return $this;
    }

    /**
     * Gets increases_3y
     *
     * @return int
     */
    public function getIncreases3y()
    {
        return $this->container['increases_3y'];
    }

    /**
     * Sets increases_3y
     *
     * @param int $increases_3y The total number of salary increases throughout the individual's last three years.  > **Note:** > >  If the individual's working career is less than three years, we return `null`.
     *
     * @return $this
     */
    public function setIncreases3y($increases_3y)
    {
        $this->container['increases_3y'] = $increases_3y;

        return $this;
    }

    /**
     * Gets decreases_3y
     *
     * @return int
     */
    public function getDecreases3y()
    {
        return $this->container['decreases_3y'];
    }

    /**
     * Sets decreases_3y
     *
     * @param int $decreases_3y The total number of salary decreases throughout the individual's last three years.  > **Note:** > >  If the individual's working career is less than three years, we return `null`.
     *
     * @return $this
     */
    public function setDecreases3y($decreases_3y)
    {
        $this->container['decreases_3y'] = $decreases_3y;

        return $this;
    }

    /**
     * Gets increases_5y
     *
     * @return int
     */
    public function getIncreases5y()
    {
        return $this->container['increases_5y'];
    }

    /**
     * Sets increases_5y
     *
     * @param int $increases_5y The total number of salary increases throughout the individual's last five years.  > **Note:** > >  If the individual's working career is less than five years, we return `null`.
     *
     * @return $this
     */
    public function setIncreases5y($increases_5y)
    {
        $this->container['increases_5y'] = $increases_5y;

        return $this;
    }

    /**
     * Gets decreases_5y
     *
     * @return int
     */
    public function getDecreases5y()
    {
        return $this->container['decreases_5y'];
    }

    /**
     * Sets decreases_5y
     *
     * @param int $decreases_5y The total number of salary decreases throughout the individual's last five years.  > **Note:** > >  If the individual's working career is less than five years, we return `null`.
     *
     * @return $this
     */
    public function setDecreases5y($decreases_5y)
    {
        $this->container['decreases_5y'] = $decreases_5y;

        return $this;
    }

    /**
     * Gets yearly_change_1y
     *
     * @return float
     */
    public function getYearlyChange1y()
    {
        return $this->container['yearly_change_1y'];
    }

    /**
     * Sets yearly_change_1y
     *
     * @param float $yearly_change_1y The individual's salary percentage change for the last year (YTD).
     *
     * @return $this
     */
    public function setYearlyChange1y($yearly_change_1y)
    {
        $this->container['yearly_change_1y'] = $yearly_change_1y;

        return $this;
    }

    /**
     * Gets yearly_change_3y
     *
     * @return float
     */
    public function getYearlyChange3y()
    {
        return $this->container['yearly_change_3y'];
    }

    /**
     * Sets yearly_change_3y
     *
     * @param float $yearly_change_3y The individual's salary percentage change for the last three years.  > **Note:** > >  If the individual's working career is less than three years, we return `null`.
     *
     * @return $this
     */
    public function setYearlyChange3y($yearly_change_3y)
    {
        $this->container['yearly_change_3y'] = $yearly_change_3y;

        return $this;
    }

    /**
     * Gets yearly_change_5y
     *
     * @return float
     */
    public function getYearlyChange5y()
    {
        return $this->container['yearly_change_5y'];
    }

    /**
     * Sets yearly_change_5y
     *
     * @param float $yearly_change_5y The individual's salary percentage change for the last five years.  > **Note:** > >  If the individual's working career is less than five years, we return `null`.
     *
     * @return $this
     */
    public function setYearlyChange5y($yearly_change_5y)
    {
        $this->container['yearly_change_5y'] = $yearly_change_5y;

        return $this;
    }

    /**
     * Gets min_monthly_salary_1y
     *
     * @return float
     */
    public function getMinMonthlySalary1y()
    {
        return $this->container['min_monthly_salary_1y'];
    }

    /**
     * Sets min_monthly_salary_1y
     *
     * @param float $min_monthly_salary_1y The individual's minimum monthly salary for the last year.
     *
     * @return $this
     */
    public function setMinMonthlySalary1y($min_monthly_salary_1y)
    {
        $this->container['min_monthly_salary_1y'] = $min_monthly_salary_1y;

        return $this;
    }

    /**
     * Gets min_monthly_salary_3y
     *
     * @return float
     */
    public function getMinMonthlySalary3y()
    {
        return $this->container['min_monthly_salary_3y'];
    }

    /**
     * Sets min_monthly_salary_3y
     *
     * @param float $min_monthly_salary_3y The individual's minimum monthly salary for the last three years.
     *
     * @return $this
     */
    public function setMinMonthlySalary3y($min_monthly_salary_3y)
    {
        $this->container['min_monthly_salary_3y'] = $min_monthly_salary_3y;

        return $this;
    }

    /**
     * Gets min_monthly_salary_5y
     *
     * @return float
     */
    public function getMinMonthlySalary5y()
    {
        return $this->container['min_monthly_salary_5y'];
    }

    /**
     * Sets min_monthly_salary_5y
     *
     * @param float $min_monthly_salary_5y The individual's minimum monthly salary for the last five years.
     *
     * @return $this
     */
    public function setMinMonthlySalary5y($min_monthly_salary_5y)
    {
        $this->container['min_monthly_salary_5y'] = $min_monthly_salary_5y;

        return $this;
    }

    /**
     * Gets average_monthly_salary_1y
     *
     * @return float
     */
    public function getAverageMonthlySalary1y()
    {
        return $this->container['average_monthly_salary_1y'];
    }

    /**
     * Sets average_monthly_salary_1y
     *
     * @param float $average_monthly_salary_1y The individual's average monthly salary for the last year.
     *
     * @return $this
     */
    public function setAverageMonthlySalary1y($average_monthly_salary_1y)
    {
        $this->container['average_monthly_salary_1y'] = $average_monthly_salary_1y;

        return $this;
    }

    /**
     * Gets average_monthly_salary_3y
     *
     * @return float
     */
    public function getAverageMonthlySalary3y()
    {
        return $this->container['average_monthly_salary_3y'];
    }

    /**
     * Sets average_monthly_salary_3y
     *
     * @param float $average_monthly_salary_3y The individual's average monthly salary for the last three years.
     *
     * @return $this
     */
    public function setAverageMonthlySalary3y($average_monthly_salary_3y)
    {
        $this->container['average_monthly_salary_3y'] = $average_monthly_salary_3y;

        return $this;
    }

    /**
     * Gets average_monthly_salary_5y
     *
     * @return float
     */
    public function getAverageMonthlySalary5y()
    {
        return $this->container['average_monthly_salary_5y'];
    }

    /**
     * Sets average_monthly_salary_5y
     *
     * @param float $average_monthly_salary_5y The individual's average monthly salary for the last five years.
     *
     * @return $this
     */
    public function setAverageMonthlySalary5y($average_monthly_salary_5y)
    {
        $this->container['average_monthly_salary_5y'] = $average_monthly_salary_5y;

        return $this;
    }

    /**
     * Gets max_monthly_salary_1y
     *
     * @return float
     */
    public function getMaxMonthlySalary1y()
    {
        return $this->container['max_monthly_salary_1y'];
    }

    /**
     * Sets max_monthly_salary_1y
     *
     * @param float $max_monthly_salary_1y The individual's maximum monthly salary for the last year.
     *
     * @return $this
     */
    public function setMaxMonthlySalary1y($max_monthly_salary_1y)
    {
        $this->container['max_monthly_salary_1y'] = $max_monthly_salary_1y;

        return $this;
    }

    /**
     * Gets max_monthly_salary_3y
     *
     * @return float
     */
    public function getMaxMonthlySalary3y()
    {
        return $this->container['max_monthly_salary_3y'];
    }

    /**
     * Sets max_monthly_salary_3y
     *
     * @param float $max_monthly_salary_3y The individual's maximum monthly salary for the last three years.
     *
     * @return $this
     */
    public function setMaxMonthlySalary3y($max_monthly_salary_3y)
    {
        $this->container['max_monthly_salary_3y'] = $max_monthly_salary_3y;

        return $this;
    }

    /**
     * Gets max_monthly_salary_5y
     *
     * @return float
     */
    public function getMaxMonthlySalary5y()
    {
        return $this->container['max_monthly_salary_5y'];
    }

    /**
     * Sets max_monthly_salary_5y
     *
     * @param float $max_monthly_salary_5y The individual's maximum monthly salary for the last five years.
     *
     * @return $this
     */
    public function setMaxMonthlySalary5y($max_monthly_salary_5y)
    {
        $this->container['max_monthly_salary_5y'] = $max_monthly_salary_5y;

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
