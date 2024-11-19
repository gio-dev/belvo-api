<?php
/**
 * TransactionOFDABrazil
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
 * TransactionOFDABrazil Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransactionOFDABrazil implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Transaction OFDA Brazil';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'internal_identification' => 'string',
        'account' => '\Swagger\Client\Model\AccountsOFDABrazil',
        'collected_at' => '\DateTime',
        'created_at' => '\DateTime',
        'value_date' => '\DateTime',
        'transacted_at' => '\DateTime',
        'accounting_date' => 'string',
        'amount' => 'float',
        'local_currency_amount' => 'float',
        'balance' => 'float',
        'currency' => 'string',
        'description' => 'string',
        'observations' => 'string',
        'merchant' => '\Swagger\Client\Model\TransactionMerchant',
        'category' => 'string',
        'subcategory' => 'string',
        'reference' => 'string',
        'type' => 'string',
        'status' => 'string',
        'credit_card_data' => '\Swagger\Client\Model\TransactionOpenFinanceBrazilCreditCardData',
        'counterparty' => '\Swagger\Client\Model\TransactionOpenFinanceBrazilCounterparty',
        'loan_data' => '\Swagger\Client\Model\TransactionOpenFinanceBrazilLoanData',
        'payment_type' => 'string',
        'operation_type' => 'string',
        'operation_type_additional_info' => 'string',
        'mcc' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'internal_identification' => null,
        'account' => null,
        'collected_at' => 'date-time',
        'created_at' => 'date-time',
        'value_date' => 'date',
        'transacted_at' => 'date-time',
        'accounting_date' => null,
        'amount' => 'float',
        'local_currency_amount' => 'float',
        'balance' => 'float',
        'currency' => null,
        'description' => null,
        'observations' => null,
        'merchant' => null,
        'category' => null,
        'subcategory' => null,
        'reference' => null,
        'type' => null,
        'status' => null,
        'credit_card_data' => null,
        'counterparty' => null,
        'loan_data' => null,
        'payment_type' => null,
        'operation_type' => null,
        'operation_type_additional_info' => null,
        'mcc' => 'int32'
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
        'internal_identification' => 'internal_identification',
        'account' => 'account',
        'collected_at' => 'collected_at',
        'created_at' => 'created_at',
        'value_date' => 'value_date',
        'transacted_at' => 'transacted_at',
        'accounting_date' => 'accounting_date',
        'amount' => 'amount',
        'local_currency_amount' => 'local_currency_amount',
        'balance' => 'balance',
        'currency' => 'currency',
        'description' => 'description',
        'observations' => 'observations',
        'merchant' => 'merchant',
        'category' => 'category',
        'subcategory' => 'subcategory',
        'reference' => 'reference',
        'type' => 'type',
        'status' => 'status',
        'credit_card_data' => 'credit_card_data',
        'counterparty' => 'counterparty',
        'loan_data' => 'loan_data',
        'payment_type' => 'payment_type',
        'operation_type' => 'operation_type',
        'operation_type_additional_info' => 'operation_type_additional_info',
        'mcc' => 'mcc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'internal_identification' => 'setInternalIdentification',
        'account' => 'setAccount',
        'collected_at' => 'setCollectedAt',
        'created_at' => 'setCreatedAt',
        'value_date' => 'setValueDate',
        'transacted_at' => 'setTransactedAt',
        'accounting_date' => 'setAccountingDate',
        'amount' => 'setAmount',
        'local_currency_amount' => 'setLocalCurrencyAmount',
        'balance' => 'setBalance',
        'currency' => 'setCurrency',
        'description' => 'setDescription',
        'observations' => 'setObservations',
        'merchant' => 'setMerchant',
        'category' => 'setCategory',
        'subcategory' => 'setSubcategory',
        'reference' => 'setReference',
        'type' => 'setType',
        'status' => 'setStatus',
        'credit_card_data' => 'setCreditCardData',
        'counterparty' => 'setCounterparty',
        'loan_data' => 'setLoanData',
        'payment_type' => 'setPaymentType',
        'operation_type' => 'setOperationType',
        'operation_type_additional_info' => 'setOperationTypeAdditionalInfo',
        'mcc' => 'setMcc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'internal_identification' => 'getInternalIdentification',
        'account' => 'getAccount',
        'collected_at' => 'getCollectedAt',
        'created_at' => 'getCreatedAt',
        'value_date' => 'getValueDate',
        'transacted_at' => 'getTransactedAt',
        'accounting_date' => 'getAccountingDate',
        'amount' => 'getAmount',
        'local_currency_amount' => 'getLocalCurrencyAmount',
        'balance' => 'getBalance',
        'currency' => 'getCurrency',
        'description' => 'getDescription',
        'observations' => 'getObservations',
        'merchant' => 'getMerchant',
        'category' => 'getCategory',
        'subcategory' => 'getSubcategory',
        'reference' => 'getReference',
        'type' => 'getType',
        'status' => 'getStatus',
        'credit_card_data' => 'getCreditCardData',
        'counterparty' => 'getCounterparty',
        'loan_data' => 'getLoanData',
        'payment_type' => 'getPaymentType',
        'operation_type' => 'getOperationType',
        'operation_type_additional_info' => 'getOperationTypeAdditionalInfo',
        'mcc' => 'getMcc'
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
    const TYPE_OUTFLOW = 'OUTFLOW';
    const TYPE_INFLOW = 'INFLOW';
    const TYPE_NULL = 'null';
    const STATUS_PENDING = 'PENDING';
    const STATUS_PROCESSED = 'PROCESSED';
    const STATUS_UNCATEGORIZED = 'UNCATEGORIZED';
    const STATUS_NULL = 'null';
    const PAYMENT_TYPE_FULL = 'FULL';
    const PAYMENT_TYPE_INSTALLMENT = 'INSTALLMENT';
    const PAYMENT_TYPE_NULL = 'null';

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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_OUTFLOW,
            self::TYPE_INFLOW,
            self::TYPE_NULL,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_PROCESSED,
            self::STATUS_UNCATEGORIZED,
            self::STATUS_NULL,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentTypeAllowableValues()
    {
        return [
            self::PAYMENT_TYPE_FULL,
            self::PAYMENT_TYPE_INSTALLMENT,
            self::PAYMENT_TYPE_NULL,
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
        $this->container['internal_identification'] = isset($data['internal_identification']) ? $data['internal_identification'] : null;
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['collected_at'] = isset($data['collected_at']) ? $data['collected_at'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['value_date'] = isset($data['value_date']) ? $data['value_date'] : null;
        $this->container['transacted_at'] = isset($data['transacted_at']) ? $data['transacted_at'] : null;
        $this->container['accounting_date'] = isset($data['accounting_date']) ? $data['accounting_date'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['local_currency_amount'] = isset($data['local_currency_amount']) ? $data['local_currency_amount'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['observations'] = isset($data['observations']) ? $data['observations'] : null;
        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['subcategory'] = isset($data['subcategory']) ? $data['subcategory'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['credit_card_data'] = isset($data['credit_card_data']) ? $data['credit_card_data'] : null;
        $this->container['counterparty'] = isset($data['counterparty']) ? $data['counterparty'] : null;
        $this->container['loan_data'] = isset($data['loan_data']) ? $data['loan_data'] : null;
        $this->container['payment_type'] = isset($data['payment_type']) ? $data['payment_type'] : null;
        $this->container['operation_type'] = isset($data['operation_type']) ? $data['operation_type'] : null;
        $this->container['operation_type_additional_info'] = isset($data['operation_type_additional_info']) ? $data['operation_type_additional_info'] : null;
        $this->container['mcc'] = isset($data['mcc']) ? $data['mcc'] : null;
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
        if ($this->container['internal_identification'] === null) {
            $invalidProperties[] = "'internal_identification' can't be null";
        }
        if ($this->container['account'] === null) {
            $invalidProperties[] = "'account' can't be null";
        }
        if ($this->container['collected_at'] === null) {
            $invalidProperties[] = "'collected_at' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['value_date'] === null) {
            $invalidProperties[] = "'value_date' can't be null";
        }
        if ($this->container['accounting_date'] === null) {
            $invalidProperties[] = "'accounting_date' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['local_currency_amount'] === null) {
            $invalidProperties[] = "'local_currency_amount' can't be null";
        }
        if ($this->container['balance'] === null) {
            $invalidProperties[] = "'balance' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['observations'] === null) {
            $invalidProperties[] = "'observations' can't be null";
        }
        if ($this->container['merchant'] === null) {
            $invalidProperties[] = "'merchant' can't be null";
        }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
        $allowedValues = $this->getCategoryAllowableValues();
        if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['subcategory'] === null) {
            $invalidProperties[] = "'subcategory' can't be null";
        }
        $allowedValues = $this->getSubcategoryAllowableValues();
        if (!is_null($this->container['subcategory']) && !in_array($this->container['subcategory'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'subcategory', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['reference'] === null) {
            $invalidProperties[] = "'reference' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['credit_card_data'] === null) {
            $invalidProperties[] = "'credit_card_data' can't be null";
        }
        if ($this->container['counterparty'] === null) {
            $invalidProperties[] = "'counterparty' can't be null";
        }
        if ($this->container['loan_data'] === null) {
            $invalidProperties[] = "'loan_data' can't be null";
        }
        if ($this->container['payment_type'] === null) {
            $invalidProperties[] = "'payment_type' can't be null";
        }
        $allowedValues = $this->getPaymentTypeAllowableValues();
        if (!is_null($this->container['payment_type']) && !in_array($this->container['payment_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payment_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['operation_type'] === null) {
            $invalidProperties[] = "'operation_type' can't be null";
        }
        if ($this->container['operation_type_additional_info'] === null) {
            $invalidProperties[] = "'operation_type_additional_info' can't be null";
        }
        if ($this->container['mcc'] === null) {
            $invalidProperties[] = "'mcc' can't be null";
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
     * @param string $internal_identification The institution's internal identification for the transaction.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setInternalIdentification($internal_identification)
    {
        $this->container['internal_identification'] = $internal_identification;

        return $this;
    }

    /**
     * Gets account
     *
     * @return \Swagger\Client\Model\AccountsOFDABrazil
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param \Swagger\Client\Model\AccountsOFDABrazil $account account
     *
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

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
     * Gets value_date
     *
     * @return \DateTime
     */
    public function getValueDate()
    {
        return $this->container['value_date'];
    }

    /**
     * Sets value_date
     *
     * @param \DateTime $value_date The date when the transaction occurred, in `YYYY-MM-DD` format, in `YYYY-MM-DD` format.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setValueDate($value_date)
    {
        $this->container['value_date'] = $value_date;

        return $this;
    }

    /**
     * Gets transacted_at
     *
     * @return \DateTime
     */
    public function getTransactedAt()
    {
        return $this->container['transacted_at'];
    }

    /**
     * Sets transacted_at
     *
     * @param \DateTime $transacted_at The ISO-8601 timestamp of when the transaction occurred (in the UTC timezone).  > **Note:** For transactions that occurred before 31.01.2024, the timestamp may only indicate the day (for example, `2016-01-29T00:00:00.000Z`). However, transactions that occurred after this date must include the date and time (`2024-02-20T12:29:03.374Z`).  > **Institutions not abiding by this format:** > Some institutions may not provide the exact time of the transaction. In this case, the timestamp will be set to `00:00:00.000Z`. > Belvo has identified the following institutions as not abiding by the regulation and have raised the issue with regulators: Bradesco, Itau, and Sicoob.  > **Non-nullable:** A value must be returned by Brazil's open finance network for **credit card and checking account transactions**.
     *
     * @return $this
     */
    public function setTransactedAt($transacted_at)
    {
        $this->container['transacted_at'] = $transacted_at;

        return $this;
    }

    /**
     * Gets accounting_date
     *
     * @return string
     */
    public function getAccountingDate()
    {
        return $this->container['accounting_date'];
    }

    /**
     * Sets accounting_date
     *
     * @param string $accounting_date The date when the transaction was processed and accounted for by the institution, in `YYYY-MM-DD` format. > **Non-nullable:** A value must be returned by Brazil's open finance network for **credit card transactions**.
     *
     * @return $this
     */
    public function setAccountingDate($accounting_date)
    {
        $this->container['accounting_date'] = $accounting_date;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount The transaction amount. ℹ️ The amount displayed is always positive as we indicate the direction of the transaction in the `type` parameter. > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets local_currency_amount
     *
     * @return float
     */
    public function getLocalCurrencyAmount()
    {
        return $this->container['local_currency_amount'];
    }

    /**
     * Sets local_currency_amount
     *
     * @param float $local_currency_amount The value of the transaction in the local currency.  > **Non-nullable:** A value must be returned by Brazil's open finance network for **credit card transactions**.
     *
     * @return $this
     */
    public function setLocalCurrencyAmount($local_currency_amount)
    {
        $this->container['local_currency_amount'] = $local_currency_amount;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return float
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param float $balance **Note:** This field is not applicable for OF Brazil and will return null.
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

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
     * @param string $currency The three-letter currency code (ISO-4217).
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description The description of transaction provided by the institution. Usually this is the text that the end user sees in the online platform.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets observations
     *
     * @return string
     */
    public function getObservations()
    {
        return $this->container['observations'];
    }

    /**
     * Sets observations
     *
     * @param string $observations **Note:** This field is not applicable for OF Brazil and will return null.
     *
     * @return $this
     */
    public function setObservations($observations)
    {
        $this->container['observations'] = $observations;

        return $this;
    }

    /**
     * Gets merchant
     *
     * @return \Swagger\Client\Model\TransactionMerchant
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     *
     * @param \Swagger\Client\Model\TransactionMerchant $merchant merchant
     *
     * @return $this
     */
    public function setMerchant($merchant)
    {
        $this->container['merchant'] = $merchant;

        return $this;
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
        if (!in_array($category, $allowedValues, true)) {
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
        if (!in_array($subcategory, $allowedValues, true)) {
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
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference **Note:** This field is not applicable for OF Brazil and will return null.
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The direction of the transaction: - `INFLOW` indicates money coming into the account. - `OUTFLOW` indicates money going out of the account. - `null` when no information was present regarding the direction of the transaction.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The status of the transaction. We return one of the following values:    - `PROCESSED` (The transaction has been processed by the institution.)   - `PENDING` (The institution clearly states that the transaction has not yet been processed.)   - `UNCATEGORIZED` (deprecated)   - `null` (deprecated)
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets credit_card_data
     *
     * @return \Swagger\Client\Model\TransactionOpenFinanceBrazilCreditCardData
     */
    public function getCreditCardData()
    {
        return $this->container['credit_card_data'];
    }

    /**
     * Sets credit_card_data
     *
     * @param \Swagger\Client\Model\TransactionOpenFinanceBrazilCreditCardData $credit_card_data credit_card_data
     *
     * @return $this
     */
    public function setCreditCardData($credit_card_data)
    {
        $this->container['credit_card_data'] = $credit_card_data;

        return $this;
    }

    /**
     * Gets counterparty
     *
     * @return \Swagger\Client\Model\TransactionOpenFinanceBrazilCounterparty
     */
    public function getCounterparty()
    {
        return $this->container['counterparty'];
    }

    /**
     * Sets counterparty
     *
     * @param \Swagger\Client\Model\TransactionOpenFinanceBrazilCounterparty $counterparty counterparty
     *
     * @return $this
     */
    public function setCounterparty($counterparty)
    {
        $this->container['counterparty'] = $counterparty;

        return $this;
    }

    /**
     * Gets loan_data
     *
     * @return \Swagger\Client\Model\TransactionOpenFinanceBrazilLoanData
     */
    public function getLoanData()
    {
        return $this->container['loan_data'];
    }

    /**
     * Sets loan_data
     *
     * @param \Swagger\Client\Model\TransactionOpenFinanceBrazilLoanData $loan_data loan_data
     *
     * @return $this
     */
    public function setLoanData($loan_data)
    {
        $this->container['loan_data'] = $loan_data;

        return $this;
    }

    /**
     * Gets payment_type
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     *
     * @param string $payment_type The transaction payment type. We return one of the following values:    - `FULL`   - `INSTALLMENT`   - `null`
     *
     * @return $this
     */
    public function setPaymentType($payment_type)
    {
        $allowedValues = $this->getPaymentTypeAllowableValues();
        if (!in_array($payment_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payment_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_type'] = $payment_type;

        return $this;
    }

    /**
     * Gets operation_type
     *
     * @return string
     */
    public function getOperationType()
    {
        return $this->container['operation_type'];
    }

    /**
     * Sets operation_type
     *
     * @param string $operation_type The type of transaction. For example, a PIX payment or a deposit.  > **Non-nullable:** A value must be returned by Brazil's open finance network for **non-loan account transactions**.
     *
     * @return $this
     */
    public function setOperationType($operation_type)
    {
        $this->container['operation_type'] = $operation_type;

        return $this;
    }

    /**
     * Gets operation_type_additional_info
     *
     * @return string
     */
    public function getOperationTypeAdditionalInfo()
    {
        return $this->container['operation_type_additional_info'];
    }

    /**
     * Sets operation_type_additional_info
     *
     * @param string $operation_type_additional_info Additional information regarding the `operation_type`, if applicable.
     *
     * @return $this
     */
    public function setOperationTypeAdditionalInfo($operation_type_additional_info)
    {
        $this->container['operation_type_additional_info'] = $operation_type_additional_info;

        return $this;
    }

    /**
     * Gets mcc
     *
     * @return int
     */
    public function getMcc()
    {
        return $this->container['mcc'];
    }

    /**
     * Sets mcc
     *
     * @param int $mcc The four-digit (ISO-18245 compliant) Merchant Category Code (MCC) for the transaction. This field is only applicable for credit card transactions.
     *
     * @return $this
     */
    public function setMcc($mcc)
    {
        $this->container['mcc'] = $mcc;

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
