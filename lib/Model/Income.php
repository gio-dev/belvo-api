<?php
/**
 * Income
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
 * Income Class Doc Comment
 *
 * @category Class
 * @description Income insights
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Income implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Income';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'link' => 'string',
        'created_at' => '\DateTime',
        'income_streams' => '\Swagger\Client\Model\ApiincomesIncomeStreams[]',
        'income_source_type' => 'string',
        'first_transaction_date' => '\DateTime',
        'last_transaction_date' => '\DateTime',
        'number_of_income_streams' => 'int',
        'monthly_average' => 'float',
        'monthly_average_regular' => 'float',
        'monthly_average_irregular' => 'float',
        'monthly_average_low_confidence' => 'float',
        'monthly_average_medium_confidence' => 'float',
        'monthly_average_high_confidence' => 'float',
        'total_income_amount' => 'float',
        'total_regular_income_amount' => 'float',
        'total_irregular_income_amount' => 'float',
        'total_low_confidence' => 'float',
        'total_medium_confidence' => 'float',
        'total_high_confidence' => 'float'
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
        'income_streams' => null,
        'income_source_type' => null,
        'first_transaction_date' => 'date',
        'last_transaction_date' => 'date',
        'number_of_income_streams' => 'int32',
        'monthly_average' => 'float',
        'monthly_average_regular' => 'float',
        'monthly_average_irregular' => 'float',
        'monthly_average_low_confidence' => 'float',
        'monthly_average_medium_confidence' => 'float',
        'monthly_average_high_confidence' => 'float',
        'total_income_amount' => 'float',
        'total_regular_income_amount' => 'float',
        'total_irregular_income_amount' => 'float',
        'total_low_confidence' => 'float',
        'total_medium_confidence' => 'float',
        'total_high_confidence' => 'float'
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
        'income_streams' => 'income_streams',
        'income_source_type' => 'income_source_type',
        'first_transaction_date' => 'first_transaction_date',
        'last_transaction_date' => 'last_transaction_date',
        'number_of_income_streams' => 'number_of_income_streams',
        'monthly_average' => 'monthly_average',
        'monthly_average_regular' => 'monthly_average_regular',
        'monthly_average_irregular' => 'monthly_average_irregular',
        'monthly_average_low_confidence' => 'monthly_average_low_confidence',
        'monthly_average_medium_confidence' => 'monthly_average_medium_confidence',
        'monthly_average_high_confidence' => 'monthly_average_high_confidence',
        'total_income_amount' => 'total_income_amount',
        'total_regular_income_amount' => 'total_regular_income_amount',
        'total_irregular_income_amount' => 'total_irregular_income_amount',
        'total_low_confidence' => 'total_low_confidence',
        'total_medium_confidence' => 'total_medium_confidence',
        'total_high_confidence' => 'total_high_confidence'
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
        'income_streams' => 'setIncomeStreams',
        'income_source_type' => 'setIncomeSourceType',
        'first_transaction_date' => 'setFirstTransactionDate',
        'last_transaction_date' => 'setLastTransactionDate',
        'number_of_income_streams' => 'setNumberOfIncomeStreams',
        'monthly_average' => 'setMonthlyAverage',
        'monthly_average_regular' => 'setMonthlyAverageRegular',
        'monthly_average_irregular' => 'setMonthlyAverageIrregular',
        'monthly_average_low_confidence' => 'setMonthlyAverageLowConfidence',
        'monthly_average_medium_confidence' => 'setMonthlyAverageMediumConfidence',
        'monthly_average_high_confidence' => 'setMonthlyAverageHighConfidence',
        'total_income_amount' => 'setTotalIncomeAmount',
        'total_regular_income_amount' => 'setTotalRegularIncomeAmount',
        'total_irregular_income_amount' => 'setTotalIrregularIncomeAmount',
        'total_low_confidence' => 'setTotalLowConfidence',
        'total_medium_confidence' => 'setTotalMediumConfidence',
        'total_high_confidence' => 'setTotalHighConfidence'
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
        'income_streams' => 'getIncomeStreams',
        'income_source_type' => 'getIncomeSourceType',
        'first_transaction_date' => 'getFirstTransactionDate',
        'last_transaction_date' => 'getLastTransactionDate',
        'number_of_income_streams' => 'getNumberOfIncomeStreams',
        'monthly_average' => 'getMonthlyAverage',
        'monthly_average_regular' => 'getMonthlyAverageRegular',
        'monthly_average_irregular' => 'getMonthlyAverageIrregular',
        'monthly_average_low_confidence' => 'getMonthlyAverageLowConfidence',
        'monthly_average_medium_confidence' => 'getMonthlyAverageMediumConfidence',
        'monthly_average_high_confidence' => 'getMonthlyAverageHighConfidence',
        'total_income_amount' => 'getTotalIncomeAmount',
        'total_regular_income_amount' => 'getTotalRegularIncomeAmount',
        'total_irregular_income_amount' => 'getTotalIrregularIncomeAmount',
        'total_low_confidence' => 'getTotalLowConfidence',
        'total_medium_confidence' => 'getTotalMediumConfidence',
        'total_high_confidence' => 'getTotalHighConfidence'
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

    const INCOME_SOURCE_TYPE_BANK = 'BANK';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIncomeSourceTypeAllowableValues()
    {
        return [
            self::INCOME_SOURCE_TYPE_BANK,
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
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['income_streams'] = isset($data['income_streams']) ? $data['income_streams'] : null;
        $this->container['income_source_type'] = isset($data['income_source_type']) ? $data['income_source_type'] : null;
        $this->container['first_transaction_date'] = isset($data['first_transaction_date']) ? $data['first_transaction_date'] : null;
        $this->container['last_transaction_date'] = isset($data['last_transaction_date']) ? $data['last_transaction_date'] : null;
        $this->container['number_of_income_streams'] = isset($data['number_of_income_streams']) ? $data['number_of_income_streams'] : null;
        $this->container['monthly_average'] = isset($data['monthly_average']) ? $data['monthly_average'] : null;
        $this->container['monthly_average_regular'] = isset($data['monthly_average_regular']) ? $data['monthly_average_regular'] : null;
        $this->container['monthly_average_irregular'] = isset($data['monthly_average_irregular']) ? $data['monthly_average_irregular'] : null;
        $this->container['monthly_average_low_confidence'] = isset($data['monthly_average_low_confidence']) ? $data['monthly_average_low_confidence'] : null;
        $this->container['monthly_average_medium_confidence'] = isset($data['monthly_average_medium_confidence']) ? $data['monthly_average_medium_confidence'] : null;
        $this->container['monthly_average_high_confidence'] = isset($data['monthly_average_high_confidence']) ? $data['monthly_average_high_confidence'] : null;
        $this->container['total_income_amount'] = isset($data['total_income_amount']) ? $data['total_income_amount'] : null;
        $this->container['total_regular_income_amount'] = isset($data['total_regular_income_amount']) ? $data['total_regular_income_amount'] : null;
        $this->container['total_irregular_income_amount'] = isset($data['total_irregular_income_amount']) ? $data['total_irregular_income_amount'] : null;
        $this->container['total_low_confidence'] = isset($data['total_low_confidence']) ? $data['total_low_confidence'] : null;
        $this->container['total_medium_confidence'] = isset($data['total_medium_confidence']) ? $data['total_medium_confidence'] : null;
        $this->container['total_high_confidence'] = isset($data['total_high_confidence']) ? $data['total_high_confidence'] : null;
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
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['income_streams'] === null) {
            $invalidProperties[] = "'income_streams' can't be null";
        }
        if ($this->container['income_source_type'] === null) {
            $invalidProperties[] = "'income_source_type' can't be null";
        }
        $allowedValues = $this->getIncomeSourceTypeAllowableValues();
        if (!is_null($this->container['income_source_type']) && !in_array($this->container['income_source_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'income_source_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['first_transaction_date'] === null) {
            $invalidProperties[] = "'first_transaction_date' can't be null";
        }
        if ($this->container['last_transaction_date'] === null) {
            $invalidProperties[] = "'last_transaction_date' can't be null";
        }
        if ($this->container['number_of_income_streams'] === null) {
            $invalidProperties[] = "'number_of_income_streams' can't be null";
        }
        if ($this->container['monthly_average'] === null) {
            $invalidProperties[] = "'monthly_average' can't be null";
        }
        if ($this->container['monthly_average_regular'] === null) {
            $invalidProperties[] = "'monthly_average_regular' can't be null";
        }
        if ($this->container['monthly_average_irregular'] === null) {
            $invalidProperties[] = "'monthly_average_irregular' can't be null";
        }
        if ($this->container['monthly_average_low_confidence'] === null) {
            $invalidProperties[] = "'monthly_average_low_confidence' can't be null";
        }
        if ($this->container['monthly_average_medium_confidence'] === null) {
            $invalidProperties[] = "'monthly_average_medium_confidence' can't be null";
        }
        if ($this->container['monthly_average_high_confidence'] === null) {
            $invalidProperties[] = "'monthly_average_high_confidence' can't be null";
        }
        if ($this->container['total_income_amount'] === null) {
            $invalidProperties[] = "'total_income_amount' can't be null";
        }
        if ($this->container['total_regular_income_amount'] === null) {
            $invalidProperties[] = "'total_regular_income_amount' can't be null";
        }
        if ($this->container['total_low_confidence'] === null) {
            $invalidProperties[] = "'total_low_confidence' can't be null";
        }
        if ($this->container['total_medium_confidence'] === null) {
            $invalidProperties[] = "'total_medium_confidence' can't be null";
        }
        if ($this->container['total_high_confidence'] === null) {
            $invalidProperties[] = "'total_high_confidence' can't be null";
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
     * Gets income_streams
     *
     * @return \Swagger\Client\Model\ApiincomesIncomeStreams[]
     */
    public function getIncomeStreams()
    {
        return $this->container['income_streams'];
    }

    /**
     * Sets income_streams
     *
     * @param \Swagger\Client\Model\ApiincomesIncomeStreams[] $income_streams An array of enriched income stream objects.
     *
     * @return $this
     */
    public function setIncomeStreams($income_streams)
    {
        $this->container['income_streams'] = $income_streams;

        return $this;
    }

    /**
     * Gets income_source_type
     *
     * @return string
     */
    public function getIncomeSourceType()
    {
        return $this->container['income_source_type'];
    }

    /**
     * Sets income_source_type
     *
     * @param string $income_source_type The type of source we generate income insights from. We return one of the following enum values:    - `BANK`
     *
     * @return $this
     */
    public function setIncomeSourceType($income_source_type)
    {
        $allowedValues = $this->getIncomeSourceTypeAllowableValues();
        if (!in_array($income_source_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'income_source_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['income_source_type'] = $income_source_type;

        return $this;
    }

    /**
     * Gets first_transaction_date
     *
     * @return \DateTime
     */
    public function getFirstTransactionDate()
    {
        return $this->container['first_transaction_date'];
    }

    /**
     * Sets first_transaction_date
     *
     * @param \DateTime $first_transaction_date The date when the first transaction occurred, in `YYYY-MM-DD` format.
     *
     * @return $this
     */
    public function setFirstTransactionDate($first_transaction_date)
    {
        $this->container['first_transaction_date'] = $first_transaction_date;

        return $this;
    }

    /**
     * Gets last_transaction_date
     *
     * @return \DateTime
     */
    public function getLastTransactionDate()
    {
        return $this->container['last_transaction_date'];
    }

    /**
     * Sets last_transaction_date
     *
     * @param \DateTime $last_transaction_date The date when when the last transaction occurred, in `YYYY-MM-DD` format.
     *
     * @return $this
     */
    public function setLastTransactionDate($last_transaction_date)
    {
        $this->container['last_transaction_date'] = $last_transaction_date;

        return $this;
    }

    /**
     * Gets number_of_income_streams
     *
     * @return int
     */
    public function getNumberOfIncomeStreams()
    {
        return $this->container['number_of_income_streams'];
    }

    /**
     * Sets number_of_income_streams
     *
     * @param int $number_of_income_streams Number of total income streams analized.
     *
     * @return $this
     */
    public function setNumberOfIncomeStreams($number_of_income_streams)
    {
        $this->container['number_of_income_streams'] = $number_of_income_streams;

        return $this;
    }

    /**
     * Gets monthly_average
     *
     * @return float
     */
    public function getMonthlyAverage()
    {
        return $this->container['monthly_average'];
    }

    /**
     * Sets monthly_average
     *
     * @param float $monthly_average Average amount of income received per month across all the accounts for the specific user.
     *
     * @return $this
     */
    public function setMonthlyAverage($monthly_average)
    {
        $this->container['monthly_average'] = $monthly_average;

        return $this;
    }

    /**
     * Gets monthly_average_regular
     *
     * @return float
     */
    public function getMonthlyAverageRegular()
    {
        return $this->container['monthly_average_regular'];
    }

    /**
     * Sets monthly_average_regular
     *
     * @param float $monthly_average_regular Average amount of regular income (with a frequency of `MONTHLY`, `FORTNIGHTLY`, or `WEEKLY`) received per month for the specific user.
     *
     * @return $this
     */
    public function setMonthlyAverageRegular($monthly_average_regular)
    {
        $this->container['monthly_average_regular'] = $monthly_average_regular;

        return $this;
    }

    /**
     * Gets monthly_average_irregular
     *
     * @return float
     */
    public function getMonthlyAverageIrregular()
    {
        return $this->container['monthly_average_irregular'];
    }

    /**
     * Sets monthly_average_irregular
     *
     * @param float $monthly_average_irregular Average amount of irregular income (with a frequency of `SINGLE` or `IRREGULAR`) received per month for the specific user.
     *
     * @return $this
     */
    public function setMonthlyAverageIrregular($monthly_average_irregular)
    {
        $this->container['monthly_average_irregular'] = $monthly_average_irregular;

        return $this;
    }

    /**
     * Gets monthly_average_low_confidence
     *
     * @return float
     */
    public function getMonthlyAverageLowConfidence()
    {
        return $this->container['monthly_average_low_confidence'];
    }

    /**
     * Sets monthly_average_low_confidence
     *
     * @param float $monthly_average_low_confidence Average amount of income received per month for the specific user with `LOW` confidence.
     *
     * @return $this
     */
    public function setMonthlyAverageLowConfidence($monthly_average_low_confidence)
    {
        $this->container['monthly_average_low_confidence'] = $monthly_average_low_confidence;

        return $this;
    }

    /**
     * Gets monthly_average_medium_confidence
     *
     * @return float
     */
    public function getMonthlyAverageMediumConfidence()
    {
        return $this->container['monthly_average_medium_confidence'];
    }

    /**
     * Sets monthly_average_medium_confidence
     *
     * @param float $monthly_average_medium_confidence Average amount of income received per month for the specific user with `MEDIUM` confidence.
     *
     * @return $this
     */
    public function setMonthlyAverageMediumConfidence($monthly_average_medium_confidence)
    {
        $this->container['monthly_average_medium_confidence'] = $monthly_average_medium_confidence;

        return $this;
    }

    /**
     * Gets monthly_average_high_confidence
     *
     * @return float
     */
    public function getMonthlyAverageHighConfidence()
    {
        return $this->container['monthly_average_high_confidence'];
    }

    /**
     * Sets monthly_average_high_confidence
     *
     * @param float $monthly_average_high_confidence Average amount of income received per month for the specific user with `HIGH` confidence.
     *
     * @return $this
     */
    public function setMonthlyAverageHighConfidence($monthly_average_high_confidence)
    {
        $this->container['monthly_average_high_confidence'] = $monthly_average_high_confidence;

        return $this;
    }

    /**
     * Gets total_income_amount
     *
     * @return float
     */
    public function getTotalIncomeAmount()
    {
        return $this->container['total_income_amount'];
    }

    /**
     * Sets total_income_amount
     *
     * @param float $total_income_amount Total amount of all income received for the specific user.
     *
     * @return $this
     */
    public function setTotalIncomeAmount($total_income_amount)
    {
        $this->container['total_income_amount'] = $total_income_amount;

        return $this;
    }

    /**
     * Gets total_regular_income_amount
     *
     * @return float
     */
    public function getTotalRegularIncomeAmount()
    {
        return $this->container['total_regular_income_amount'];
    }

    /**
     * Sets total_regular_income_amount
     *
     * @param float $total_regular_income_amount Total amount of regular income (with a frequency of `MONTHLY`, `FORTNIGHTLY`, `WEEKLY`) for the specific user.
     *
     * @return $this
     */
    public function setTotalRegularIncomeAmount($total_regular_income_amount)
    {
        $this->container['total_regular_income_amount'] = $total_regular_income_amount;

        return $this;
    }

    /**
     * Gets total_irregular_income_amount
     *
     * @return float
     */
    public function getTotalIrregularIncomeAmount()
    {
        return $this->container['total_irregular_income_amount'];
    }

    /**
     * Sets total_irregular_income_amount
     *
     * @param float $total_irregular_income_amount Total amount of irregular income (with a frequency of `SINGLE` or `IRREGULAR`) for the specific user.
     *
     * @return $this
     */
    public function setTotalIrregularIncomeAmount($total_irregular_income_amount)
    {
        $this->container['total_irregular_income_amount'] = $total_irregular_income_amount;

        return $this;
    }

    /**
     * Gets total_low_confidence
     *
     * @return float
     */
    public function getTotalLowConfidence()
    {
        return $this->container['total_low_confidence'];
    }

    /**
     * Sets total_low_confidence
     *
     * @param float $total_low_confidence Total amount of income for the specific user with `LOW` confidence.
     *
     * @return $this
     */
    public function setTotalLowConfidence($total_low_confidence)
    {
        $this->container['total_low_confidence'] = $total_low_confidence;

        return $this;
    }

    /**
     * Gets total_medium_confidence
     *
     * @return float
     */
    public function getTotalMediumConfidence()
    {
        return $this->container['total_medium_confidence'];
    }

    /**
     * Sets total_medium_confidence
     *
     * @param float $total_medium_confidence Total amount of income for the specific user with `MEDIUM` confidence.
     *
     * @return $this
     */
    public function setTotalMediumConfidence($total_medium_confidence)
    {
        $this->container['total_medium_confidence'] = $total_medium_confidence;

        return $this;
    }

    /**
     * Gets total_high_confidence
     *
     * @return float
     */
    public function getTotalHighConfidence()
    {
        return $this->container['total_high_confidence'];
    }

    /**
     * Sets total_high_confidence
     *
     * @param float $total_high_confidence Total amount of income for the specific user with `HIGH` confidence.
     *
     * @return $this
     */
    public function setTotalHighConfidence($total_high_confidence)
    {
        $this->container['total_high_confidence'] = $total_high_confidence;

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
