<?php
/**
 * AccountsStandardMultiRegionLoanData
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
 * AccountsStandardMultiRegionLoanData Class Doc Comment
 *
 * @category Class
 * @description The loan options associated with this account.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountsStandardMultiRegionLoanData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Accounts Standard MultiRegion_loan_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'collected_at' => '\DateTime',
        'contract_amount' => 'float',
        'principal' => 'float',
        'loan_type' => 'string',
        'payment_day' => 'string',
        'outstanding_principal' => 'float',
        'outstanding_balance' => 'float',
        'monthly_payment' => 'float',
        'interest_rates' => '\Swagger\Client\Model\AccountsStandardMultiRegionLoanDataInterestRates[]',
        'fees' => '\Swagger\Client\Model\AccountsStandardMultiRegionLoanDataFees[]',
        'number_of_installments_total' => 'int',
        'number_of_installments_outstanding' => 'int',
        'contract_start_date' => 'string',
        'contract_end_date' => '\DateTime',
        'contract_number' => 'string',
        'credit_limit' => 'float',
        'last_period_balance' => 'float',
        'interest_rate' => 'float',
        'limit_day' => 'string',
        'cutting_day' => 'string',
        'cutting_date' => 'string',
        'last_payment_date' => 'string',
        'next_payment_date' => 'string',
        'no_interest_payment' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'collected_at' => 'date-time',
        'contract_amount' => 'float',
        'principal' => 'float',
        'loan_type' => null,
        'payment_day' => null,
        'outstanding_principal' => 'float',
        'outstanding_balance' => 'float',
        'monthly_payment' => 'float',
        'interest_rates' => null,
        'fees' => null,
        'number_of_installments_total' => 'int32',
        'number_of_installments_outstanding' => 'int32',
        'contract_start_date' => null,
        'contract_end_date' => 'date',
        'contract_number' => null,
        'credit_limit' => null,
        'last_period_balance' => null,
        'interest_rate' => null,
        'limit_day' => null,
        'cutting_day' => null,
        'cutting_date' => null,
        'last_payment_date' => null,
        'next_payment_date' => null,
        'no_interest_payment' => null
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
        'contract_amount' => 'contract_amount',
        'principal' => 'principal',
        'loan_type' => 'loan_type',
        'payment_day' => 'payment_day',
        'outstanding_principal' => 'outstanding_principal',
        'outstanding_balance' => 'outstanding_balance',
        'monthly_payment' => 'monthly_payment',
        'interest_rates' => 'interest_rates',
        'fees' => 'fees',
        'number_of_installments_total' => 'number_of_installments_total',
        'number_of_installments_outstanding' => 'number_of_installments_outstanding',
        'contract_start_date' => 'contract_start_date',
        'contract_end_date' => 'contract_end_date',
        'contract_number' => 'contract_number',
        'credit_limit' => 'credit_limit',
        'last_period_balance' => 'last_period_balance',
        'interest_rate' => 'interest_rate',
        'limit_day' => 'limit_day',
        'cutting_day' => 'cutting_day',
        'cutting_date' => 'cutting_date',
        'last_payment_date' => 'last_payment_date',
        'next_payment_date' => 'next_payment_date',
        'no_interest_payment' => 'no_interest_payment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'collected_at' => 'setCollectedAt',
        'contract_amount' => 'setContractAmount',
        'principal' => 'setPrincipal',
        'loan_type' => 'setLoanType',
        'payment_day' => 'setPaymentDay',
        'outstanding_principal' => 'setOutstandingPrincipal',
        'outstanding_balance' => 'setOutstandingBalance',
        'monthly_payment' => 'setMonthlyPayment',
        'interest_rates' => 'setInterestRates',
        'fees' => 'setFees',
        'number_of_installments_total' => 'setNumberOfInstallmentsTotal',
        'number_of_installments_outstanding' => 'setNumberOfInstallmentsOutstanding',
        'contract_start_date' => 'setContractStartDate',
        'contract_end_date' => 'setContractEndDate',
        'contract_number' => 'setContractNumber',
        'credit_limit' => 'setCreditLimit',
        'last_period_balance' => 'setLastPeriodBalance',
        'interest_rate' => 'setInterestRate',
        'limit_day' => 'setLimitDay',
        'cutting_day' => 'setCuttingDay',
        'cutting_date' => 'setCuttingDate',
        'last_payment_date' => 'setLastPaymentDate',
        'next_payment_date' => 'setNextPaymentDate',
        'no_interest_payment' => 'setNoInterestPayment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'collected_at' => 'getCollectedAt',
        'contract_amount' => 'getContractAmount',
        'principal' => 'getPrincipal',
        'loan_type' => 'getLoanType',
        'payment_day' => 'getPaymentDay',
        'outstanding_principal' => 'getOutstandingPrincipal',
        'outstanding_balance' => 'getOutstandingBalance',
        'monthly_payment' => 'getMonthlyPayment',
        'interest_rates' => 'getInterestRates',
        'fees' => 'getFees',
        'number_of_installments_total' => 'getNumberOfInstallmentsTotal',
        'number_of_installments_outstanding' => 'getNumberOfInstallmentsOutstanding',
        'contract_start_date' => 'getContractStartDate',
        'contract_end_date' => 'getContractEndDate',
        'contract_number' => 'getContractNumber',
        'credit_limit' => 'getCreditLimit',
        'last_period_balance' => 'getLastPeriodBalance',
        'interest_rate' => 'getInterestRate',
        'limit_day' => 'getLimitDay',
        'cutting_day' => 'getCuttingDay',
        'cutting_date' => 'getCuttingDate',
        'last_payment_date' => 'getLastPaymentDate',
        'next_payment_date' => 'getNextPaymentDate',
        'no_interest_payment' => 'getNoInterestPayment'
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
        $this->container['contract_amount'] = isset($data['contract_amount']) ? $data['contract_amount'] : null;
        $this->container['principal'] = isset($data['principal']) ? $data['principal'] : null;
        $this->container['loan_type'] = isset($data['loan_type']) ? $data['loan_type'] : null;
        $this->container['payment_day'] = isset($data['payment_day']) ? $data['payment_day'] : null;
        $this->container['outstanding_principal'] = isset($data['outstanding_principal']) ? $data['outstanding_principal'] : null;
        $this->container['outstanding_balance'] = isset($data['outstanding_balance']) ? $data['outstanding_balance'] : null;
        $this->container['monthly_payment'] = isset($data['monthly_payment']) ? $data['monthly_payment'] : null;
        $this->container['interest_rates'] = isset($data['interest_rates']) ? $data['interest_rates'] : null;
        $this->container['fees'] = isset($data['fees']) ? $data['fees'] : null;
        $this->container['number_of_installments_total'] = isset($data['number_of_installments_total']) ? $data['number_of_installments_total'] : null;
        $this->container['number_of_installments_outstanding'] = isset($data['number_of_installments_outstanding']) ? $data['number_of_installments_outstanding'] : null;
        $this->container['contract_start_date'] = isset($data['contract_start_date']) ? $data['contract_start_date'] : null;
        $this->container['contract_end_date'] = isset($data['contract_end_date']) ? $data['contract_end_date'] : null;
        $this->container['contract_number'] = isset($data['contract_number']) ? $data['contract_number'] : null;
        $this->container['credit_limit'] = isset($data['credit_limit']) ? $data['credit_limit'] : null;
        $this->container['last_period_balance'] = isset($data['last_period_balance']) ? $data['last_period_balance'] : null;
        $this->container['interest_rate'] = isset($data['interest_rate']) ? $data['interest_rate'] : null;
        $this->container['limit_day'] = isset($data['limit_day']) ? $data['limit_day'] : null;
        $this->container['cutting_day'] = isset($data['cutting_day']) ? $data['cutting_day'] : null;
        $this->container['cutting_date'] = isset($data['cutting_date']) ? $data['cutting_date'] : null;
        $this->container['last_payment_date'] = isset($data['last_payment_date']) ? $data['last_payment_date'] : null;
        $this->container['next_payment_date'] = isset($data['next_payment_date']) ? $data['next_payment_date'] : null;
        $this->container['no_interest_payment'] = isset($data['no_interest_payment']) ? $data['no_interest_payment'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['collected_at'] === null) {
            $invalidProperties[] = "'collected_at' can't be null";
        }
        if ($this->container['principal'] === null) {
            $invalidProperties[] = "'principal' can't be null";
        }
        if ($this->container['outstanding_balance'] === null) {
            $invalidProperties[] = "'outstanding_balance' can't be null";
        }
        if ($this->container['monthly_payment'] === null) {
            $invalidProperties[] = "'monthly_payment' can't be null";
        }
        if ($this->container['interest_rates'] === null) {
            $invalidProperties[] = "'interest_rates' can't be null";
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
     * Gets contract_amount
     *
     * @return float
     */
    public function getContractAmount()
    {
        return $this->container['contract_amount'];
    }

    /**
     * Sets contract_amount
     *
     * @param float $contract_amount The initial total loan amount, calculated by the institution, when the contract was signed. This amount includes the principal + interest + taxes + fees.
     *
     * @return $this
     */
    public function setContractAmount($contract_amount)
    {
        $this->container['contract_amount'] = $contract_amount;

        return $this;
    }

    /**
     * Gets principal
     *
     * @return float
     */
    public function getPrincipal()
    {
        return $this->container['principal'];
    }

    /**
     * Sets principal
     *
     * @param float $principal Total amount of the loan (the amount the user receives).
     *
     * @return $this
     */
    public function setPrincipal($principal)
    {
        $this->container['principal'] = $principal;

        return $this;
    }

    /**
     * Gets loan_type
     *
     * @return string
     */
    public function getLoanType()
    {
        return $this->container['loan_type'];
    }

    /**
     * Sets loan_type
     *
     * @param string $loan_type The type of the loan, according to the institution.
     *
     * @return $this
     */
    public function setLoanType($loan_type)
    {
        $this->container['loan_type'] = $loan_type;

        return $this;
    }

    /**
     * Gets payment_day
     *
     * @return string
     */
    public function getPaymentDay()
    {
        return $this->container['payment_day'];
    }

    /**
     * Sets payment_day
     *
     * @param string $payment_day The day of the month by which the owner needs to pay the loan (`DD`).
     *
     * @return $this
     */
    public function setPaymentDay($payment_day)
    {
        $this->container['payment_day'] = $payment_day;

        return $this;
    }

    /**
     * Gets outstanding_principal
     *
     * @return float
     */
    public function getOutstandingPrincipal()
    {
        return $this->container['outstanding_principal'];
    }

    /**
     * Sets outstanding_principal
     *
     * @param float $outstanding_principal Outstanding loan amount, that is, how much remains to pay on the principal (not including interest).
     *
     * @return $this
     */
    public function setOutstandingPrincipal($outstanding_principal)
    {
        $this->container['outstanding_principal'] = $outstanding_principal;

        return $this;
    }

    /**
     * Gets outstanding_balance
     *
     * @return float
     */
    public function getOutstandingBalance()
    {
        return $this->container['outstanding_balance'];
    }

    /**
     * Sets outstanding_balance
     *
     * @param float $outstanding_balance The amount remaining to pay in total, including interest.
     *
     * @return $this
     */
    public function setOutstandingBalance($outstanding_balance)
    {
        $this->container['outstanding_balance'] = $outstanding_balance;

        return $this;
    }

    /**
     * Gets monthly_payment
     *
     * @return float
     */
    public function getMonthlyPayment()
    {
        return $this->container['monthly_payment'];
    }

    /**
     * Sets monthly_payment
     *
     * @param float $monthly_payment The recurrent monthly payment, if applicable.
     *
     * @return $this
     */
    public function setMonthlyPayment($monthly_payment)
    {
        $this->container['monthly_payment'] = $monthly_payment;

        return $this;
    }

    /**
     * Gets interest_rates
     *
     * @return \Swagger\Client\Model\AccountsStandardMultiRegionLoanDataInterestRates[]
     */
    public function getInterestRates()
    {
        return $this->container['interest_rates'];
    }

    /**
     * Sets interest_rates
     *
     * @param \Swagger\Client\Model\AccountsStandardMultiRegionLoanDataInterestRates[] $interest_rates Breakdown of the interest applied to the loan.
     *
     * @return $this
     */
    public function setInterestRates($interest_rates)
    {
        $this->container['interest_rates'] = $interest_rates;

        return $this;
    }

    /**
     * Gets fees
     *
     * @return \Swagger\Client\Model\AccountsStandardMultiRegionLoanDataFees[]
     */
    public function getFees()
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees
     *
     * @param \Swagger\Client\Model\AccountsStandardMultiRegionLoanDataFees[] $fees Breakdown of the fees applied to the loan.
     *
     * @return $this
     */
    public function setFees($fees)
    {
        $this->container['fees'] = $fees;

        return $this;
    }

    /**
     * Gets number_of_installments_total
     *
     * @return int
     */
    public function getNumberOfInstallmentsTotal()
    {
        return $this->container['number_of_installments_total'];
    }

    /**
     * Sets number_of_installments_total
     *
     * @param int $number_of_installments_total The total number of installments required to pay the loan.
     *
     * @return $this
     */
    public function setNumberOfInstallmentsTotal($number_of_installments_total)
    {
        $this->container['number_of_installments_total'] = $number_of_installments_total;

        return $this;
    }

    /**
     * Gets number_of_installments_outstanding
     *
     * @return int
     */
    public function getNumberOfInstallmentsOutstanding()
    {
        return $this->container['number_of_installments_outstanding'];
    }

    /**
     * Sets number_of_installments_outstanding
     *
     * @param int $number_of_installments_outstanding The number of installments left to pay.
     *
     * @return $this
     */
    public function setNumberOfInstallmentsOutstanding($number_of_installments_outstanding)
    {
        $this->container['number_of_installments_outstanding'] = $number_of_installments_outstanding;

        return $this;
    }

    /**
     * Gets contract_start_date
     *
     * @return string
     */
    public function getContractStartDate()
    {
        return $this->container['contract_start_date'];
    }

    /**
     * Sets contract_start_date
     *
     * @param string $contract_start_date The date when the loan contract was signed , in `YYYY-MM-DD` format.
     *
     * @return $this
     */
    public function setContractStartDate($contract_start_date)
    {
        $this->container['contract_start_date'] = $contract_start_date;

        return $this;
    }

    /**
     * Gets contract_end_date
     *
     * @return \DateTime
     */
    public function getContractEndDate()
    {
        return $this->container['contract_end_date'];
    }

    /**
     * Sets contract_end_date
     *
     * @param \DateTime $contract_end_date The date when the loan is expected to be completed, in `YYYY-MM-DD` format.
     *
     * @return $this
     */
    public function setContractEndDate($contract_end_date)
    {
        $this->container['contract_end_date'] = $contract_end_date;

        return $this;
    }

    /**
     * Gets contract_number
     *
     * @return string
     */
    public function getContractNumber()
    {
        return $this->container['contract_number'];
    }

    /**
     * Sets contract_number
     *
     * @param string $contract_number The contract number of the loan, as given by the institution.
     *
     * @return $this
     */
    public function setContractNumber($contract_number)
    {
        $this->container['contract_number'] = $contract_number;

        return $this;
    }

    /**
     * Gets credit_limit
     *
     * @return float
     */
    public function getCreditLimit()
    {
        return $this->container['credit_limit'];
    }

    /**
     * Sets credit_limit
     *
     * @param float $credit_limit *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.*  Please see `principal` instead.
     *
     * @return $this
     */
    public function setCreditLimit($credit_limit)
    {
        $this->container['credit_limit'] = $credit_limit;

        return $this;
    }

    /**
     * Gets last_period_balance
     *
     * @return float
     */
    public function getLastPeriodBalance()
    {
        return $this->container['last_period_balance'];
    }

    /**
     * Sets last_period_balance
     *
     * @param float $last_period_balance *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.*  Please see `outstanding_balance` instead.
     *
     * @return $this
     */
    public function setLastPeriodBalance($last_period_balance)
    {
        $this->container['last_period_balance'] = $last_period_balance;

        return $this;
    }

    /**
     * Gets interest_rate
     *
     * @return float
     */
    public function getInterestRate()
    {
        return $this->container['interest_rate'];
    }

    /**
     * Sets interest_rate
     *
     * @param float $interest_rate *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.*  Please see the `interest_rates` object instead.
     *
     * @return $this
     */
    public function setInterestRate($interest_rate)
    {
        $this->container['interest_rate'] = $interest_rate;

        return $this;
    }

    /**
     * Gets limit_day
     *
     * @return string
     */
    public function getLimitDay()
    {
        return $this->container['limit_day'];
    }

    /**
     * Sets limit_day
     *
     * @param string $limit_day *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.*  Please see `payment_day` instead.
     *
     * @return $this
     */
    public function setLimitDay($limit_day)
    {
        $this->container['limit_day'] = $limit_day;

        return $this;
    }

    /**
     * Gets cutting_day
     *
     * @return string
     */
    public function getCuttingDay()
    {
        return $this->container['cutting_day'];
    }

    /**
     * Sets cutting_day
     *
     * @param string $cutting_day *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.*  The closing day of the month for the loan.
     *
     * @return $this
     */
    public function setCuttingDay($cutting_day)
    {
        $this->container['cutting_day'] = $cutting_day;

        return $this;
    }

    /**
     * Gets cutting_date
     *
     * @return string
     */
    public function getCuttingDate()
    {
        return $this->container['cutting_date'];
    }

    /**
     * Sets cutting_date
     *
     * @param string $cutting_date *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.*  The closing date of the loan period, in `YYYY-MM-DD` format.
     *
     * @return $this
     */
    public function setCuttingDate($cutting_date)
    {
        $this->container['cutting_date'] = $cutting_date;

        return $this;
    }

    /**
     * Gets last_payment_date
     *
     * @return string
     */
    public function getLastPaymentDate()
    {
        return $this->container['last_payment_date'];
    }

    /**
     * Sets last_payment_date
     *
     * @param string $last_payment_date *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.*  The date when the last loan payment was made, in `YYYY-MM-DD` format.
     *
     * @return $this
     */
    public function setLastPaymentDate($last_payment_date)
    {
        $this->container['last_payment_date'] = $last_payment_date;

        return $this;
    }

    /**
     * Gets next_payment_date
     *
     * @return string
     */
    public function getNextPaymentDate()
    {
        return $this->container['next_payment_date'];
    }

    /**
     * Sets next_payment_date
     *
     * @param string $next_payment_date *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.*  Please use `payment_day` instead, in `YYYY-MM-DD` format.
     *
     * @return $this
     */
    public function setNextPaymentDate($next_payment_date)
    {
        $this->container['next_payment_date'] = $next_payment_date;

        return $this;
    }

    /**
     * Gets no_interest_payment
     *
     * @return float
     */
    public function getNoInterestPayment()
    {
        return $this->container['no_interest_payment'];
    }

    /**
     * Sets no_interest_payment
     *
     * @param float $no_interest_payment *This field has been deprecated. For more information regarding Belvo and deprecation, see our [Deprecated fields](https://developers.belvo.com/reference/using-the-api-reference#%EF%B8%8F-deprecated-fields) explanation.*  The minimum amount required to pay to avoid generating interest.
     *
     * @return $this
     */
    public function setNoInterestPayment($no_interest_payment)
    {
        $this->container['no_interest_payment'] = $no_interest_payment;

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
