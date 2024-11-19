<?php
/**
 * ApiincomesIncomeStreams
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
 * ApiincomesIncomeStreams Class Doc Comment
 *
 * @category Class
 * @description A list of income streams for the account.  For each income stream, we provide additional insights such as: - Frequency, stability, and confidence level of the income transactions. - Key metrics about the transaction amounts. ℹ️ If no income sources are found, we return an empty array.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApiincomesIncomeStreams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'apiincomes_income_streams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_id' => 'string',
        'income_type' => 'string',
        'frequency' => 'string',
        'monthly_average' => 'float',
        'monthly_median' => 'float',
        'average_income_amount' => 'float',
        'last_income_amount' => 'float',
        'currency' => 'string',
        'last_income_description' => 'string',
        'last_income_date' => '\DateTime',
        'stability' => 'float',
        'regularity' => 'float',
        'trend' => 'float',
        'lookback_periods' => 'int',
        'full_periods' => 'int',
        'periods_with_income' => 'int',
        'number_of_incomes' => 'int',
        'confidence' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_id' => null,
        'income_type' => null,
        'frequency' => null,
        'monthly_average' => 'float',
        'monthly_median' => 'float',
        'average_income_amount' => 'float',
        'last_income_amount' => 'float',
        'currency' => null,
        'last_income_description' => null,
        'last_income_date' => 'date',
        'stability' => 'float',
        'regularity' => 'float',
        'trend' => 'float',
        'lookback_periods' => 'int32',
        'full_periods' => 'int32',
        'periods_with_income' => 'int32',
        'number_of_incomes' => 'int32',
        'confidence' => null
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
        'account_id' => 'account_id',
        'income_type' => 'income_type',
        'frequency' => 'frequency',
        'monthly_average' => 'monthly_average',
        'monthly_median' => 'monthly_median',
        'average_income_amount' => 'average_income_amount',
        'last_income_amount' => 'last_income_amount',
        'currency' => 'currency',
        'last_income_description' => 'last_income_description',
        'last_income_date' => 'last_income_date',
        'stability' => 'stability',
        'regularity' => 'regularity',
        'trend' => 'trend',
        'lookback_periods' => 'lookback_periods',
        'full_periods' => 'full_periods',
        'periods_with_income' => 'periods_with_income',
        'number_of_incomes' => 'number_of_incomes',
        'confidence' => 'confidence'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'income_type' => 'setIncomeType',
        'frequency' => 'setFrequency',
        'monthly_average' => 'setMonthlyAverage',
        'monthly_median' => 'setMonthlyMedian',
        'average_income_amount' => 'setAverageIncomeAmount',
        'last_income_amount' => 'setLastIncomeAmount',
        'currency' => 'setCurrency',
        'last_income_description' => 'setLastIncomeDescription',
        'last_income_date' => 'setLastIncomeDate',
        'stability' => 'setStability',
        'regularity' => 'setRegularity',
        'trend' => 'setTrend',
        'lookback_periods' => 'setLookbackPeriods',
        'full_periods' => 'setFullPeriods',
        'periods_with_income' => 'setPeriodsWithIncome',
        'number_of_incomes' => 'setNumberOfIncomes',
        'confidence' => 'setConfidence'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'income_type' => 'getIncomeType',
        'frequency' => 'getFrequency',
        'monthly_average' => 'getMonthlyAverage',
        'monthly_median' => 'getMonthlyMedian',
        'average_income_amount' => 'getAverageIncomeAmount',
        'last_income_amount' => 'getLastIncomeAmount',
        'currency' => 'getCurrency',
        'last_income_description' => 'getLastIncomeDescription',
        'last_income_date' => 'getLastIncomeDate',
        'stability' => 'getStability',
        'regularity' => 'getRegularity',
        'trend' => 'getTrend',
        'lookback_periods' => 'getLookbackPeriods',
        'full_periods' => 'getFullPeriods',
        'periods_with_income' => 'getPeriodsWithIncome',
        'number_of_incomes' => 'getNumberOfIncomes',
        'confidence' => 'getConfidence'
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

    const INCOME_TYPE_SALARY = 'SALARY';
    const INCOME_TYPE_GOVERNMENT = 'GOVERNMENT';
    const INCOME_TYPE_INTEREST = 'INTEREST';
    const INCOME_TYPE_RENT = 'RENT';
    const INCOME_TYPE_RETIREMENT = 'RETIREMENT';
    const INCOME_TYPE_FREELANCE = 'FREELANCE';
    const INCOME_TYPE_ALTERNATIVE_INCOME = 'ALTERNATIVE_INCOME';
    const INCOME_TYPE_TRANSFER = 'TRANSFER';
    const INCOME_TYPE_DEPOSIT = 'DEPOSIT';
    const INCOME_TYPE_UNKNOWN = 'UNKNOWN';
    const FREQUENCY_MONTHLY = 'MONTHLY';
    const FREQUENCY_FORTNIGHTLY = 'FORTNIGHTLY';
    const FREQUENCY_WEEKLY = 'WEEKLY';
    const FREQUENCY_IRREGULAR = 'IRREGULAR';
    const FREQUENCY_SINGLE = 'SINGLE';
    const CONFIDENCE_HIGH = 'HIGH';
    const CONFIDENCE_MEDIUM = 'MEDIUM';
    const CONFIDENCE_LOW = 'LOW';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIncomeTypeAllowableValues()
    {
        return [
            self::INCOME_TYPE_SALARY,
            self::INCOME_TYPE_GOVERNMENT,
            self::INCOME_TYPE_INTEREST,
            self::INCOME_TYPE_RENT,
            self::INCOME_TYPE_RETIREMENT,
            self::INCOME_TYPE_FREELANCE,
            self::INCOME_TYPE_ALTERNATIVE_INCOME,
            self::INCOME_TYPE_TRANSFER,
            self::INCOME_TYPE_DEPOSIT,
            self::INCOME_TYPE_UNKNOWN,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFrequencyAllowableValues()
    {
        return [
            self::FREQUENCY_MONTHLY,
            self::FREQUENCY_FORTNIGHTLY,
            self::FREQUENCY_WEEKLY,
            self::FREQUENCY_IRREGULAR,
            self::FREQUENCY_SINGLE,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConfidenceAllowableValues()
    {
        return [
            self::CONFIDENCE_HIGH
            self::CONFIDENCE_MEDIUM
            self::CONFIDENCE_LOW
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['income_type'] = isset($data['income_type']) ? $data['income_type'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['monthly_average'] = isset($data['monthly_average']) ? $data['monthly_average'] : null;
        $this->container['monthly_median'] = isset($data['monthly_median']) ? $data['monthly_median'] : null;
        $this->container['average_income_amount'] = isset($data['average_income_amount']) ? $data['average_income_amount'] : null;
        $this->container['last_income_amount'] = isset($data['last_income_amount']) ? $data['last_income_amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['last_income_description'] = isset($data['last_income_description']) ? $data['last_income_description'] : null;
        $this->container['last_income_date'] = isset($data['last_income_date']) ? $data['last_income_date'] : null;
        $this->container['stability'] = isset($data['stability']) ? $data['stability'] : null;
        $this->container['regularity'] = isset($data['regularity']) ? $data['regularity'] : null;
        $this->container['trend'] = isset($data['trend']) ? $data['trend'] : null;
        $this->container['lookback_periods'] = isset($data['lookback_periods']) ? $data['lookback_periods'] : null;
        $this->container['full_periods'] = isset($data['full_periods']) ? $data['full_periods'] : null;
        $this->container['periods_with_income'] = isset($data['periods_with_income']) ? $data['periods_with_income'] : null;
        $this->container['number_of_incomes'] = isset($data['number_of_incomes']) ? $data['number_of_incomes'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
        }
        if ($this->container['income_type'] === null) {
            $invalidProperties[] = "'income_type' can't be null";
        }
        $allowedValues = $this->getIncomeTypeAllowableValues();
        if (!is_null($this->container['income_type']) && !in_array($this->container['income_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'income_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['frequency'] === null) {
            $invalidProperties[] = "'frequency' can't be null";
        }
        $allowedValues = $this->getFrequencyAllowableValues();
        if (!is_null($this->container['frequency']) && !in_array($this->container['frequency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'frequency', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['monthly_average'] === null) {
            $invalidProperties[] = "'monthly_average' can't be null";
        }
        if ($this->container['average_income_amount'] === null) {
            $invalidProperties[] = "'average_income_amount' can't be null";
        }
        if ($this->container['last_income_amount'] === null) {
            $invalidProperties[] = "'last_income_amount' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['last_income_description'] === null) {
            $invalidProperties[] = "'last_income_description' can't be null";
        }
        if ($this->container['last_income_date'] === null) {
            $invalidProperties[] = "'last_income_date' can't be null";
        }
        if ($this->container['stability'] === null) {
            $invalidProperties[] = "'stability' can't be null";
        }
        if ($this->container['regularity'] === null) {
            $invalidProperties[] = "'regularity' can't be null";
        }
        if ($this->container['trend'] === null) {
            $invalidProperties[] = "'trend' can't be null";
        }
        if ($this->container['lookback_periods'] === null) {
            $invalidProperties[] = "'lookback_periods' can't be null";
        }
        if ($this->container['full_periods'] === null) {
            $invalidProperties[] = "'full_periods' can't be null";
        }
        if ($this->container['periods_with_income'] === null) {
            $invalidProperties[] = "'periods_with_income' can't be null";
        }
        if ($this->container['number_of_incomes'] === null) {
            $invalidProperties[] = "'number_of_incomes' can't be null";
        }
        if ($this->container['confidence'] === null) {
            $invalidProperties[] = "'confidence' can't be null";
        }
        $allowedValues = $this->getConfidenceAllowableValues();
        if (!is_null($this->container['confidence']) && !in_array($this->container['confidence'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'confidence', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets account_id
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string $account_id Unique ID for the bank account to be verified for income streams.
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets income_type
     *
     * @return string
     */
    public function getIncomeType()
    {
        return $this->container['income_type'];
    }

    /**
     * Sets income_type
     *
     * @param string $income_type The type of income used in the calculations.  We return one of the following enum values:    - `SALARY`   - `GOVERNMENT`   - `INTEREST`   - `RENT`   - `RETIREMENT`   - `FREELANCE`   - `ALTERNATIVE_INCOME`   - `TRANSFER`   - `DEPOSIT`   - `UNKNOWN`
     *
     * @return $this
     */
    public function setIncomeType($income_type)
    {
        $allowedValues = $this->getIncomeTypeAllowableValues();
        if (!in_array($income_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'income_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['income_type'] = $income_type;

        return $this;
    }

    /**
     * Gets frequency
     *
     * @return string
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param string $frequency How often the income is received.  We return one of the following enum values:    - `MONTHLY` - For transactions that occur once per month.   - `FORTNIGHTLY` - For transactions that occur once every two weeks.   - `WEEKLY` - For transactions that occur once per week.   - `IRREGULAR` - For transactions that do not occur on a defined frequency pattern.   - `SINGLE` - For transactions that occur only once and do not repeat.
     *
     * @return $this
     */
    public function setFrequency($frequency)
    {
        $allowedValues = $this->getFrequencyAllowableValues();
        if (!in_array($frequency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'frequency', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['frequency'] = $frequency;

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
     * @param float $monthly_average The average amount of income received from the source over `periods_with_income`.
     *
     * @return $this
     */
    public function setMonthlyAverage($monthly_average)
    {
        $this->container['monthly_average'] = $monthly_average;

        return $this;
    }

    /**
     * Gets monthly_median
     *
     * @return float
     */
    public function getMonthlyMedian()
    {
        return $this->container['monthly_median'];
    }

    /**
     * Sets monthly_median
     *
     * @param float $monthly_median The median amount of income received from the source over within a natural month.
     *
     * @return $this
     */
    public function setMonthlyMedian($monthly_median)
    {
        $this->container['monthly_median'] = $monthly_median;

        return $this;
    }

    /**
     * Gets average_income_amount
     *
     * @return float
     */
    public function getAverageIncomeAmount()
    {
        return $this->container['average_income_amount'];
    }

    /**
     * Sets average_income_amount
     *
     * @param float $average_income_amount The average income transaction amount from the source.
     *
     * @return $this
     */
    public function setAverageIncomeAmount($average_income_amount)
    {
        $this->container['average_income_amount'] = $average_income_amount;

        return $this;
    }

    /**
     * Gets last_income_amount
     *
     * @return float
     */
    public function getLastIncomeAmount()
    {
        return $this->container['last_income_amount'];
    }

    /**
     * Sets last_income_amount
     *
     * @param float $last_income_amount The amount of the most recent income received from the source.
     *
     * @return $this
     */
    public function setLastIncomeAmount($last_income_amount)
    {
        $this->container['last_income_amount'] = $last_income_amount;

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
     * @param string $currency The three-letter currency code of the income. For example:    • 🇧🇷 BRL (Brazilian Real)   • 🇨🇴 COP (Colombian Peso)   • 🇲🇽 MXN (Mexican Peso)
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets last_income_description
     *
     * @return string
     */
    public function getLastIncomeDescription()
    {
        return $this->container['last_income_description'];
    }

    /**
     * Sets last_income_description
     *
     * @param string $last_income_description The description of the most recent income from the stream.
     *
     * @return $this
     */
    public function setLastIncomeDescription($last_income_description)
    {
        $this->container['last_income_description'] = $last_income_description;

        return $this;
    }

    /**
     * Gets last_income_date
     *
     * @return \DateTime
     */
    public function getLastIncomeDate()
    {
        return $this->container['last_income_date'];
    }

    /**
     * Sets last_income_date
     *
     * @param \DateTime $last_income_date The date when the most recent income from the stream was received, in `YYYY-MM-DD` format.
     *
     * @return $this
     */
    public function setLastIncomeDate($last_income_date)
    {
        $this->container['last_income_date'] = $last_income_date;

        return $this;
    }

    /**
     * Gets stability
     *
     * @return float
     */
    public function getStability()
    {
        return $this->container['stability'];
    }

    /**
     * Sets stability
     *
     * @param float $stability The stability of the income based on its amount, with a range from 0 to 1, where 1 represents perfect stability.  **Note:** For transactions with `frequency`=`SINGLE`, this value returns `null`.
     *
     * @return $this
     */
    public function setStability($stability)
    {
        $this->container['stability'] = $stability;

        return $this;
    }

    /**
     * Gets regularity
     *
     * @return float
     */
    public function getRegularity()
    {
        return $this->container['regularity'];
    }

    /**
     * Sets regularity
     *
     * @param float $regularity The regularity of the income based in its frequency, with a range from 0 to 1, where 1 represents perfect regularity.  **Note:** For transactions with `frequency`=`SINGLE`, this value returns `null`.
     *
     * @return $this
     */
    public function setRegularity($regularity)
    {
        $this->container['regularity'] = $regularity;

        return $this;
    }

    /**
     * Gets trend
     *
     * @return float
     */
    public function getTrend()
    {
        return $this->container['trend'];
    }

    /**
     * Sets trend
     *
     * @param float $trend The income trend during a period of time calculated between last income and first income received, where:   - a negative float means that the income trend is decreasing during the time period.   - a positive float means that the income trend is increasing during the time period.  **Note:** For transactions with `frequency`=`SINGLE`, this value returns `null`.
     *
     * @return $this
     */
    public function setTrend($trend)
    {
        $this->container['trend'] = $trend;

        return $this;
    }

    /**
     * Gets lookback_periods
     *
     * @return int
     */
    public function getLookbackPeriods()
    {
        return $this->container['lookback_periods'];
    }

    /**
     * Sets lookback_periods
     *
     * @param int $lookback_periods Number of period units (based on *rolling months*) used to generate insights and calculations.  **Note:** A *rolling month* is a period of 30 days. For example, 2023-01-15 to 2023-02-15.
     *
     * @return $this
     */
    public function setLookbackPeriods($lookback_periods)
    {
        $this->container['lookback_periods'] = $lookback_periods;

        return $this;
    }

    /**
     * Gets full_periods
     *
     * @return int
     */
    public function getFullPeriods()
    {
        return $this->container['full_periods'];
    }

    /**
     * Sets full_periods
     *
     * @param int $full_periods Number of period units (based on *rolling months*) with data to perform calculations.  **Note:** A *rolling month* is a period of 30 days. For example, 2023-01-15 to 2023-02-15.
     *
     * @return $this
     */
    public function setFullPeriods($full_periods)
    {
        $this->container['full_periods'] = $full_periods;

        return $this;
    }

    /**
     * Gets periods_with_income
     *
     * @return int
     */
    public function getPeriodsWithIncome()
    {
        return $this->container['periods_with_income'];
    }

    /**
     * Sets periods_with_income
     *
     * @param int $periods_with_income Number of period units (based on *rolling months*) with at least one income available.  **Note:** A *rolling month* is a period of 30 days. For example, 2023-01-15 to 2023-02-15.
     *
     * @return $this
     */
    public function setPeriodsWithIncome($periods_with_income)
    {
        $this->container['periods_with_income'] = $periods_with_income;

        return $this;
    }

    /**
     * Gets number_of_incomes
     *
     * @return int
     */
    public function getNumberOfIncomes()
    {
        return $this->container['number_of_incomes'];
    }

    /**
     * Sets number_of_incomes
     *
     * @param int $number_of_incomes Number of income transactions over the `lookback_periods`.
     *
     * @return $this
     */
    public function setNumberOfIncomes($number_of_incomes)
    {
        $this->container['number_of_incomes'] = $number_of_incomes;

        return $this;
    }

    /**
     * Gets confidence
     *
     * @return string
     */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
     * Sets confidence
     *
     * @param string $confidence Belvo's level of confidence for future incomes.  We return one of the following enum values:    - `HIGH`   - `MEDIUM`   - `LOW`
     *
     * @return $this
     */
    public function setConfidence($confidence)
    {
        $allowedValues = $this->getConfidenceAllowableValues();
        if (!in_array($confidence, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'confidence', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['confidence'] = $confidence;

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
