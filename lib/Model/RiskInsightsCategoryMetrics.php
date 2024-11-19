<?php
/**
 * RiskInsightsCategoryMetrics
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
 * RiskInsightsCategoryMetrics Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RiskInsightsCategoryMetrics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RiskInsightsCategoryMetrics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'category' => 'string',
        'subcategory' => 'string',
        'net_amount_3m' => 'float',
        'category_inflow_ratio_3m' => 'float',
        'trend_3m' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'category' => null,
        'subcategory' => null,
        'net_amount_3m' => 'float',
        'category_inflow_ratio_3m' => 'float',
        'trend_3m' => 'float'
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
        'category' => 'category',
        'subcategory' => 'subcategory',
        'net_amount_3m' => 'net_amount_3m',
        'category_inflow_ratio_3m' => 'category_inflow_ratio_3m',
        'trend_3m' => 'trend_3m'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category' => 'setCategory',
        'subcategory' => 'setSubcategory',
        'net_amount_3m' => 'setNetAmount3m',
        'category_inflow_ratio_3m' => 'setCategoryInflowRatio3m',
        'trend_3m' => 'setTrend3m'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category' => 'getCategory',
        'subcategory' => 'getSubcategory',
        'net_amount_3m' => 'getNetAmount3m',
        'category_inflow_ratio_3m' => 'getCategoryInflowRatio3m',
        'trend_3m' => 'getTrend3m'
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

    const CATEGORY_BILLS__UTILITIES = 'Bills & Utilities';
    const CATEGORY_CREDITS__LOANS = 'Credits & Loans';
    const CATEGORY_DEPOSITS = 'Deposits';
    const CATEGORY_FEES__CHARGES = 'Fees & Charges';
    const CATEGORY_FOOD__GROCERIES = 'Food & Groceries';
    const CATEGORY_HOME__LIFE = 'Home & Life';
    const CATEGORY_INCOME__PAYMENTS = 'Income & Payments';
    const CATEGORY_INSURANCE = 'Insurance';
    const CATEGORY_INVESTMENTS__SAVINGS = 'Investments & Savings';
    const CATEGORY_ONLINE_PLATFORMS__LEISURE = 'Online Platforms & Leisure';
    const CATEGORY_PERSONAL_SHOPPING = 'Personal Shopping';
    const CATEGORY_TAXES = 'Taxes';
    const CATEGORY_TRANSFERS = 'Transfers';
    const CATEGORY_TRANSPORT__TRAVEL = 'Transport & Travel';
    const CATEGORY_UNKNOWN = 'Unknown';
    const CATEGORY_WITHDRAWAL__ATM = 'Withdrawal & ATM';
    const CATEGORY_NULL = 'null';
    const SUBCATEGORY_ELECTRICITY__ENERGY = 'Electricity & Energy';
    const SUBCATEGORY_RENT = 'Rent';
    const SUBCATEGORY_TELECOMMUNICATIONS = 'Telecommunications';
    const SUBCATEGORY_WATER = 'Water';
    const SUBCATEGORY_AUTO = 'Auto';
    const SUBCATEGORY_CREDIT_CARD = 'Credit Card';
    const SUBCATEGORY_INSTALMENT = 'Instalment';
    const SUBCATEGORY_INTEREST__CHARGES = 'Interest & Charges';
    const SUBCATEGORY_MORTGAGE = 'Mortgage';
    const SUBCATEGORY_PAY_ADVANCE = 'Pay Advance';
    const SUBCATEGORY_PERSONAL = 'Personal';
    const SUBCATEGORY_ADJUSTMENTS = 'Adjustments';
    const SUBCATEGORY_BANK_FEES = 'Bank Fees';
    const SUBCATEGORY_CHARGEBACK = 'Chargeback';
    const SUBCATEGORY_REFUND = 'Refund';
    const SUBCATEGORY_BLOCKED_BALANCES = 'Blocked Balances';
    const SUBCATEGORY_ALIMONY = 'Alimony';
    const SUBCATEGORY_ALCOHOL__TOBACCO = 'Alcohol & Tobacco';
    const SUBCATEGORY_BAKERY__COFFEE = 'Bakery & Coffee';
    const SUBCATEGORY_BARS__NIGHTCLUBS = 'Bars & Nightclubs';
    const SUBCATEGORY_CONVENIENCE_STORE = 'Convenience Store';
    const SUBCATEGORY_DELIVERY = 'Delivery';
    const SUBCATEGORY_GROCERIES = 'Groceries';
    const SUBCATEGORY_RESTAURANTS = 'Restaurants';
    const SUBCATEGORY_EDUCATION = 'Education';
    const SUBCATEGORY_GYMS__FITNESS = 'Gyms & Fitness';
    const SUBCATEGORY_HAIR__BEAUTY = 'Hair & Beauty';
    const SUBCATEGORY_HEALTH = 'Health';
    const SUBCATEGORY_HOME_DECOR__APPLIANCES = 'Home Decor & Appliances';
    const SUBCATEGORY_LAUNDRY__DRY_CLEANING = 'Laundry & Dry Cleaning';
    const SUBCATEGORY_PHARMACIES = 'Pharmacies';
    const SUBCATEGORY_PROFESSIONAL_SERVICES = 'Professional Services';
    const SUBCATEGORY_VETERINARY_SERVICES = 'Veterinary Services';
    const SUBCATEGORY_FREELANCE = 'Freelance';
    const SUBCATEGORY_INTEREST = 'Interest';
    const SUBCATEGORY_RETIREMENT = 'Retirement';
    const SUBCATEGORY_SALARY = 'Salary';
    const SUBCATEGORY_GOVERNMENT = 'Government';
    const SUBCATEGORY_HOME_INSURANCE = 'Home Insurance';
    const SUBCATEGORY_AUTO_INSURANCE = 'Auto Insurance';
    const SUBCATEGORY_HEALTH__LIFE_INSURANCE = 'Health & Life Insurance';
    const SUBCATEGORY_SAVINGS = 'Savings';
    const SUBCATEGORY_FIXED_INCOME = 'Fixed income';
    const SUBCATEGORY_EQUITY = 'Equity';
    const SUBCATEGORY_INVESTMENT_FUNDS = 'Investment Funds';
    const SUBCATEGORY_DERIVATIVES = 'Derivatives';
    const SUBCATEGORY_CRYPTOCURRENCIES = 'Cryptocurrencies';
    const SUBCATEGORY_APPS_SOFTWARE_AND_CLOUD_SERVICES = 'Apps, Software and Cloud Services';
    const SUBCATEGORY_EVENTS_PARKS_AND_MUSEUMS = 'Events, Parks and Museums';
    const SUBCATEGORY_GAMBLING = 'Gambling';
    const SUBCATEGORY_GAMING = 'Gaming';
    const SUBCATEGORY_LOTTERY = 'Lottery';
    const SUBCATEGORY_MOVIE__AUDIO = 'Movie & Audio';
    const SUBCATEGORY_BOOKS__NEWS = 'Books & News';
    const SUBCATEGORY_CLOTHING__ACCESSORIES = 'Clothing & Accessories';
    const SUBCATEGORY_DEPARTMENT_STORE = 'Department Store';
    const SUBCATEGORY_ELECTRONICS = 'Electronics';
    const SUBCATEGORY_E_COMMERCE = 'E-commerce';
    const SUBCATEGORY_GIFTS = 'Gifts';
    const SUBCATEGORY_OFFICE_SUPPLIES = 'Office Supplies';
    const SUBCATEGORY_PET_SUPPLIES = 'Pet Supplies';
    const SUBCATEGORY_AUTO_TAX__FEES = 'Auto Tax & Fees';
    const SUBCATEGORY_DONATION = 'Donation';
    const SUBCATEGORY_GOVERNMENT_FEES = 'Government Fees';
    const SUBCATEGORY_INCOME_TAX = 'Income Tax';
    const SUBCATEGORY_REAL_ESTATE_TAX__FEES = 'Real Estate Tax & Fees';
    const SUBCATEGORY_TAX_RETURN = 'Tax Return';
    const SUBCATEGORY_ACCOMMODATION = 'Accommodation';
    const SUBCATEGORY_AUTO_EXPENSES = 'Auto Expenses';
    const SUBCATEGORY_AUTO_RENTAL = 'Auto Rental';
    const SUBCATEGORY_FLIGHTS = 'Flights';
    const SUBCATEGORY_GAS = 'Gas';
    const SUBCATEGORY_MILEAGE_PROGRAMS = 'Mileage Programs';
    const SUBCATEGORY_PARKING__TOLLS = 'Parking & Tolls';
    const SUBCATEGORY_PUBLIC_TRANSIT = 'Public Transit';
    const SUBCATEGORY_TAXIS__RIDESHARES = 'Taxis & Rideshares';
    const SUBCATEGORY_OTHER = 'Other';
    const SUBCATEGORY_NULL = 'null';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_BILLS__UTILITIES,
            self::CATEGORY_CREDITS__LOANS,
            self::CATEGORY_DEPOSITS,
            self::CATEGORY_FEES__CHARGES,
            self::CATEGORY_FOOD__GROCERIES,
            self::CATEGORY_HOME__LIFE,
            self::CATEGORY_INCOME__PAYMENTS,
            self::CATEGORY_INSURANCE,
            self::CATEGORY_INVESTMENTS__SAVINGS,
            self::CATEGORY_ONLINE_PLATFORMS__LEISURE,
            self::CATEGORY_PERSONAL_SHOPPING,
            self::CATEGORY_TAXES,
            self::CATEGORY_TRANSFERS,
            self::CATEGORY_TRANSPORT__TRAVEL,
            self::CATEGORY_UNKNOWN,
            self::CATEGORY_WITHDRAWAL__ATM,
            self::CATEGORY_NULL,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSubcategoryAllowableValues()
    {
        return [
            self::SUBCATEGORY_ELECTRICITY__ENERGY,
            self::SUBCATEGORY_RENT,
            self::SUBCATEGORY_TELECOMMUNICATIONS,
            self::SUBCATEGORY_WATER,
            self::SUBCATEGORY_AUTO,
            self::SUBCATEGORY_CREDIT_CARD,
            self::SUBCATEGORY_INSTALMENT,
            self::SUBCATEGORY_INTEREST__CHARGES,
            self::SUBCATEGORY_MORTGAGE,
            self::SUBCATEGORY_PAY_ADVANCE,
            self::SUBCATEGORY_PERSONAL,
            self::SUBCATEGORY_ADJUSTMENTS,
            self::SUBCATEGORY_BANK_FEES,
            self::SUBCATEGORY_CHARGEBACK,
            self::SUBCATEGORY_REFUND,
            self::SUBCATEGORY_BLOCKED_BALANCES,
            self::SUBCATEGORY_ALIMONY,
            self::SUBCATEGORY_ALCOHOL__TOBACCO,
            self::SUBCATEGORY_BAKERY__COFFEE,
            self::SUBCATEGORY_BARS__NIGHTCLUBS,
            self::SUBCATEGORY_CONVENIENCE_STORE,
            self::SUBCATEGORY_DELIVERY,
            self::SUBCATEGORY_GROCERIES,
            self::SUBCATEGORY_RESTAURANTS,
            self::SUBCATEGORY_EDUCATION,
            self::SUBCATEGORY_GYMS__FITNESS,
            self::SUBCATEGORY_HAIR__BEAUTY,
            self::SUBCATEGORY_HEALTH,
            self::SUBCATEGORY_HOME_DECOR__APPLIANCES,
            self::SUBCATEGORY_LAUNDRY__DRY_CLEANING,
            self::SUBCATEGORY_PHARMACIES,
            self::SUBCATEGORY_PROFESSIONAL_SERVICES,
            self::SUBCATEGORY_VETERINARY_SERVICES,
            self::SUBCATEGORY_FREELANCE,
            self::SUBCATEGORY_INTEREST,
            self::SUBCATEGORY_RETIREMENT,
            self::SUBCATEGORY_SALARY,
            self::SUBCATEGORY_GOVERNMENT,
            self::SUBCATEGORY_HOME_INSURANCE,
            self::SUBCATEGORY_AUTO_INSURANCE,
            self::SUBCATEGORY_HEALTH__LIFE_INSURANCE,
            self::SUBCATEGORY_SAVINGS,
            self::SUBCATEGORY_FIXED_INCOME,
            self::SUBCATEGORY_EQUITY,
            self::SUBCATEGORY_INVESTMENT_FUNDS,
            self::SUBCATEGORY_DERIVATIVES,
            self::SUBCATEGORY_CRYPTOCURRENCIES,
            self::SUBCATEGORY_APPS_SOFTWARE_AND_CLOUD_SERVICES,
            self::SUBCATEGORY_EVENTS_PARKS_AND_MUSEUMS,
            self::SUBCATEGORY_GAMBLING,
            self::SUBCATEGORY_GAMING,
            self::SUBCATEGORY_LOTTERY,
            self::SUBCATEGORY_MOVIE__AUDIO,
            self::SUBCATEGORY_BOOKS__NEWS,
            self::SUBCATEGORY_CLOTHING__ACCESSORIES,
            self::SUBCATEGORY_DEPARTMENT_STORE,
            self::SUBCATEGORY_ELECTRONICS,
            self::SUBCATEGORY_E_COMMERCE,
            self::SUBCATEGORY_GIFTS,
            self::SUBCATEGORY_OFFICE_SUPPLIES,
            self::SUBCATEGORY_PET_SUPPLIES,
            self::SUBCATEGORY_AUTO_TAX__FEES,
            self::SUBCATEGORY_DONATION,
            self::SUBCATEGORY_GOVERNMENT_FEES,
            self::SUBCATEGORY_INCOME_TAX,
            self::SUBCATEGORY_REAL_ESTATE_TAX__FEES,
            self::SUBCATEGORY_TAX_RETURN,
            self::SUBCATEGORY_ACCOMMODATION,
            self::SUBCATEGORY_AUTO_EXPENSES,
            self::SUBCATEGORY_AUTO_RENTAL,
            self::SUBCATEGORY_FLIGHTS,
            self::SUBCATEGORY_GAS,
            self::SUBCATEGORY_MILEAGE_PROGRAMS,
            self::SUBCATEGORY_PARKING__TOLLS,
            self::SUBCATEGORY_PUBLIC_TRANSIT,
            self::SUBCATEGORY_TAXIS__RIDESHARES,
            self::SUBCATEGORY_OTHER,
            self::SUBCATEGORY_NULL,
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['subcategory'] = isset($data['subcategory']) ? $data['subcategory'] : null;
        $this->container['net_amount_3m'] = isset($data['net_amount_3m']) ? $data['net_amount_3m'] : null;
        $this->container['category_inflow_ratio_3m'] = isset($data['category_inflow_ratio_3m']) ? $data['category_inflow_ratio_3m'] : null;
        $this->container['trend_3m'] = isset($data['trend_3m']) ? $data['trend_3m'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCategoryAllowableValues();
        if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSubcategoryAllowableValues();
        if (!is_null($this->container['subcategory']) && !in_array($this->container['subcategory'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'subcategory', must be one of '%s'",
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
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category The name of the transaction category.  > **Get transaction categorization** With [Transaction categorization](https://developers.belvo.com/docs/banking#categorizing-transactions), we clean and categorize transactions for you, turning raw data into actionable insights. To enable this feature, just [reach out](https://belvo.com/contact/?utm_source=documentation) to us, and we'll get right to it.  We return one of the following enum values:    - `Bills & Utilities`   - `Credits & Loans`   - `Deposits`   - `Fees & Charges`   - `Food & Groceries`   - `Home & Life`   - `Income & Payments`   - `Insurance`   - `Investments & Savings`   - `Online Platforms & Leisure`   - `Personal Shopping`   - `Taxes`   - `Transfers`   - `Transport & Travel`   - `Unknown`*   - `Withdrawal & ATM`   - `null`     \\* For clients not using our Transaction Categorization product, we return `null` instead.
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $allowedValues = $this->getCategoryAllowableValues();
        if (!is_null($category) && !in_array($category, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'category', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets subcategory
     *
     * @return string
     */
    public function getSubcategory()
    {
        return $this->container['subcategory'];
    }

    /**
     * Sets subcategory
     *
     * @param string $subcategory The transaction subcategory.    > **Get transaction categorization**   For clients not using our [Transaction categorization](https://developers.belvo.com/docs/banking#categorizing-transactions), we return `null` instead. To enable this feature, just [reach out](https://belvo.com/contact/?utm_source=documentation) to us, and we'll get right to it.   We return one of the following enum values:    - `Electricity & Energy`   - `Rent`   - `Telecommunications`   - `Water`   - `Auto`   - `Credit Card`   - `Instalment`   - `Interest & Charges`   - `Mortgage`   - `Pay Advance`   - `Personal`   - `Adjustments`   - `Bank Fees`   - `Chargeback`   - `Refund`   - `Blocked Balances`   - `Alimony`   - `Alcohol & Tobacco`   - `Bakery & Coffee`   - `Bars & Nightclubs`   - `Convenience Store`   - `Delivery`   - `Groceries`   - `Restaurants`   - `Education`   - `Gyms & Fitness`   - `Hair & Beauty`   - `Health`   - `Home Decor & Appliances`   - `Laundry & Dry Cleaning`   - `Pharmacies`   - `Professional Services`   - `Veterinary Services`   - `Freelance`   - `Interest`   - `Retirement`   - `Salary`   - `Government`   - `Home Insurance`   - `Auto Insurance`   - `Health & Life Insurance`   - `Savings`   - `Fixed income`   - `Equity`   - `Investment Funds`   - `Derivatives`   - `Cryptocurrencies`   - `Apps, Software and Cloud Services`   - `Events, Parks and Museums`   - `Gambling`   - `Gaming`   - `Lottery`   - `Movie & Audio`   - `Books & News`   - `Clothing & Accessories`   - `Department Store`   - `Electronics`   - `E-commerce`   - `Gifts`   - `Office Supplies`   - `Pet Supplies`   - `Auto Tax & Fees`   - `Donation`   - `Government Fees`   - `Income Tax`   - `Real Estate Tax & Fees`   - `Tax Return`   - `Accommodation`   - `Auto Expenses`   - `Auto Rental`   - `Flights`   - `Gas`   - `Mileage Programs`   - `Parking & Tolls`   - `Public Transit`   - `Taxis & Rideshares`   - `Other`   - `null`
     *
     * @return $this
     */
    public function setSubcategory($subcategory)
    {
        $allowedValues = $this->getSubcategoryAllowableValues();
        if (!is_null($subcategory) && !in_array($subcategory, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'subcategory', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['subcategory'] = $subcategory;

        return $this;
    }

    /**
     * Gets net_amount_3m
     *
     * @return float
     */
    public function getNetAmount3m()
    {
        return $this->container['net_amount_3m'];
    }

    /**
     * Sets net_amount_3m
     *
     * @param float $net_amount_3m The net amount of the transactions for this category in the last three months (calculated as the total incoming - total outgoing transactions for this category).
     *
     * @return $this
     */
    public function setNetAmount3m($net_amount_3m)
    {
        $this->container['net_amount_3m'] = $net_amount_3m;

        return $this;
    }

    /**
     * Gets category_inflow_ratio_3m
     *
     * @return float
     */
    public function getCategoryInflowRatio3m()
    {
        return $this->container['category_inflow_ratio_3m'];
    }

    /**
     * Sets category_inflow_ratio_3m
     *
     * @param float $category_inflow_ratio_3m The ratio of `net_amount_3m` divided by the sum of all incoming categorized transactions (including the current category) for the same period.  Note: If there are no inflow transactions for the period, this value will return `null`.
     *
     * @return $this
     */
    public function setCategoryInflowRatio3m($category_inflow_ratio_3m)
    {
        $this->container['category_inflow_ratio_3m'] = $category_inflow_ratio_3m;

        return $this;
    }

    /**
     * Gets trend_3m
     *
     * @return float
     */
    public function getTrend3m()
    {
        return $this->container['trend_3m'];
    }

    /**
     * Sets trend_3m
     *
     * @param float $trend_3m The net category transaction trend (incoming - outgoing transactions for the category) for the period.
     *
     * @return $this
     */
    public function setTrend3m($trend_3m)
    {
        $this->container['trend_3m'] = $trend_3m;

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
