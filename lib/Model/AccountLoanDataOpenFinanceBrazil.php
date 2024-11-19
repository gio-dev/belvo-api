<?php
/**
 * AccountLoanDataOpenFinanceBrazil
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
 * AccountLoanDataOpenFinanceBrazil Class Doc Comment
 *
 * @category Class
 * @description The loan options associated with this account.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountLoanDataOpenFinanceBrazil implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountLoanDataOpenFinanceBrazil';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'collected_at' => '\DateTime',
        'loan_code' => 'string',
        'contract_amount' => 'float',
        'total_effective_cost' => 'float',
        'loan_type' => 'string',
        'outstanding_balance' => 'float',
        'interest_rates' => '\Swagger\Client\Model\AccountsOFDABrazilLoanDataInterestRates[]',
        'fees' => '\Swagger\Client\Model\AccountsOFDABrazilLoanDataFees[]',
        'contracted_charges' => '\Swagger\Client\Model\AccountsOFDABrazilLoanDataContractedCharges[]',
        'collaterals' => '\Swagger\Client\Model\AccountsOFDABrazilLoanDataCollaterals[]',
        'balloon_payments' => '\Swagger\Client\Model\AccountsOFDABrazilLoanDataBalloonPayments[]',
        'installments_contract_term_frequency' => 'string',
        'installment_frequency' => 'string',
        'installment_frequency_info' => 'string',
        'first_installment_due_date' => '\DateTime',
        'number_of_installments_total' => 'int',
        'number_of_installments_outstanding' => 'int',
        'number_of_installments_paid' => 'int',
        'number_of_installments_past_due' => 'int',
        'disbursement_dates' => 'string[]',
        'settlement_date' => 'string',
        'contract_start_date' => '\DateTime',
        'contract_end_date' => '\DateTime',
        'contract_remaining_frequency' => 'string',
        'contract_remaining_total' => 'int',
        'amortization_schedule' => 'string',
        'amortization_schedule_info' => 'string',
        'consignee_id' => 'string',
        'contract_number' => 'string',
        'monthly_payment' => 'float',
        'principal' => 'float',
        'payment_day' => 'string',
        'outstanding_principal' => 'float',
        'credit_limit' => 'float',
        'last_period_balance' => 'float',
        'interest_rate' => 'float',
        'limit_day' => 'string',
        'cutting_day' => 'string',
        'cutting_date' => 'string',
        'last_payment_date' => 'string',
        'no_interest_payment' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'collected_at' => 'date-time',
        'loan_code' => null,
        'contract_amount' => 'float',
        'total_effective_cost' => 'float',
        'loan_type' => null,
        'outstanding_balance' => 'float',
        'interest_rates' => null,
        'fees' => null,
        'contracted_charges' => null,
        'collaterals' => null,
        'balloon_payments' => null,
        'installments_contract_term_frequency' => null,
        'installment_frequency' => null,
        'installment_frequency_info' => null,
        'first_installment_due_date' => 'date',
        'number_of_installments_total' => 'int32',
        'number_of_installments_outstanding' => 'int32',
        'number_of_installments_paid' => 'int32',
        'number_of_installments_past_due' => 'int32',
        'disbursement_dates' => null,
        'settlement_date' => null,
        'contract_start_date' => 'date',
        'contract_end_date' => 'date',
        'contract_remaining_frequency' => null,
        'contract_remaining_total' => 'int32',
        'amortization_schedule' => null,
        'amortization_schedule_info' => null,
        'consignee_id' => null,
        'contract_number' => null,
        'monthly_payment' => 'float',
        'principal' => 'float',
        'payment_day' => null,
        'outstanding_principal' => 'float',
        'credit_limit' => null,
        'last_period_balance' => null,
        'interest_rate' => null,
        'limit_day' => null,
        'cutting_day' => null,
        'cutting_date' => null,
        'last_payment_date' => null,
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
        'loan_code' => 'loan_code',
        'contract_amount' => 'contract_amount',
        'total_effective_cost' => 'total_effective_cost',
        'loan_type' => 'loan_type',
        'outstanding_balance' => 'outstanding_balance',
        'interest_rates' => 'interest_rates',
        'fees' => 'fees',
        'contracted_charges' => 'contracted_charges',
        'collaterals' => 'collaterals',
        'balloon_payments' => 'balloon_payments',
        'installments_contract_term_frequency' => 'installments_contract_term_frequency',
        'installment_frequency' => 'installment_frequency',
        'installment_frequency_info' => 'installment_frequency_info',
        'first_installment_due_date' => 'first_installment_due_date',
        'number_of_installments_total' => 'number_of_installments_total',
        'number_of_installments_outstanding' => 'number_of_installments_outstanding',
        'number_of_installments_paid' => 'number_of_installments_paid',
        'number_of_installments_past_due' => 'number_of_installments_past_due',
        'disbursement_dates' => 'disbursement_dates',
        'settlement_date' => 'settlement_date',
        'contract_start_date' => 'contract_start_date',
        'contract_end_date' => 'contract_end_date',
        'contract_remaining_frequency' => 'contract_remaining_frequency',
        'contract_remaining_total' => 'contract_remaining_total',
        'amortization_schedule' => 'amortization_schedule',
        'amortization_schedule_info' => 'amortization_schedule_info',
        'consignee_id' => 'consignee_id',
        'contract_number' => 'contract_number',
        'monthly_payment' => 'monthly_payment',
        'principal' => 'principal',
        'payment_day' => 'payment_day',
        'outstanding_principal' => 'outstanding_principal',
        'credit_limit' => 'credit_limit',
        'last_period_balance' => 'last_period_balance',
        'interest_rate' => 'interest_rate',
        'limit_day' => 'limit_day',
        'cutting_day' => 'cutting_day',
        'cutting_date' => 'cutting_date',
        'last_payment_date' => 'last_payment_date',
        'no_interest_payment' => 'no_interest_payment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'collected_at' => 'setCollectedAt',
        'loan_code' => 'setLoanCode',
        'contract_amount' => 'setContractAmount',
        'total_effective_cost' => 'setTotalEffectiveCost',
        'loan_type' => 'setLoanType',
        'outstanding_balance' => 'setOutstandingBalance',
        'interest_rates' => 'setInterestRates',
        'fees' => 'setFees',
        'contracted_charges' => 'setContractedCharges',
        'collaterals' => 'setCollaterals',
        'balloon_payments' => 'setBalloonPayments',
        'installments_contract_term_frequency' => 'setInstallmentsContractTermFrequency',
        'installment_frequency' => 'setInstallmentFrequency',
        'installment_frequency_info' => 'setInstallmentFrequencyInfo',
        'first_installment_due_date' => 'setFirstInstallmentDueDate',
        'number_of_installments_total' => 'setNumberOfInstallmentsTotal',
        'number_of_installments_outstanding' => 'setNumberOfInstallmentsOutstanding',
        'number_of_installments_paid' => 'setNumberOfInstallmentsPaid',
        'number_of_installments_past_due' => 'setNumberOfInstallmentsPastDue',
        'disbursement_dates' => 'setDisbursementDates',
        'settlement_date' => 'setSettlementDate',
        'contract_start_date' => 'setContractStartDate',
        'contract_end_date' => 'setContractEndDate',
        'contract_remaining_frequency' => 'setContractRemainingFrequency',
        'contract_remaining_total' => 'setContractRemainingTotal',
        'amortization_schedule' => 'setAmortizationSchedule',
        'amortization_schedule_info' => 'setAmortizationScheduleInfo',
        'consignee_id' => 'setConsigneeId',
        'contract_number' => 'setContractNumber',
        'monthly_payment' => 'setMonthlyPayment',
        'principal' => 'setPrincipal',
        'payment_day' => 'setPaymentDay',
        'outstanding_principal' => 'setOutstandingPrincipal',
        'credit_limit' => 'setCreditLimit',
        'last_period_balance' => 'setLastPeriodBalance',
        'interest_rate' => 'setInterestRate',
        'limit_day' => 'setLimitDay',
        'cutting_day' => 'setCuttingDay',
        'cutting_date' => 'setCuttingDate',
        'last_payment_date' => 'setLastPaymentDate',
        'no_interest_payment' => 'setNoInterestPayment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'collected_at' => 'getCollectedAt',
        'loan_code' => 'getLoanCode',
        'contract_amount' => 'getContractAmount',
        'total_effective_cost' => 'getTotalEffectiveCost',
        'loan_type' => 'getLoanType',
        'outstanding_balance' => 'getOutstandingBalance',
        'interest_rates' => 'getInterestRates',
        'fees' => 'getFees',
        'contracted_charges' => 'getContractedCharges',
        'collaterals' => 'getCollaterals',
        'balloon_payments' => 'getBalloonPayments',
        'installments_contract_term_frequency' => 'getInstallmentsContractTermFrequency',
        'installment_frequency' => 'getInstallmentFrequency',
        'installment_frequency_info' => 'getInstallmentFrequencyInfo',
        'first_installment_due_date' => 'getFirstInstallmentDueDate',
        'number_of_installments_total' => 'getNumberOfInstallmentsTotal',
        'number_of_installments_outstanding' => 'getNumberOfInstallmentsOutstanding',
        'number_of_installments_paid' => 'getNumberOfInstallmentsPaid',
        'number_of_installments_past_due' => 'getNumberOfInstallmentsPastDue',
        'disbursement_dates' => 'getDisbursementDates',
        'settlement_date' => 'getSettlementDate',
        'contract_start_date' => 'getContractStartDate',
        'contract_end_date' => 'getContractEndDate',
        'contract_remaining_frequency' => 'getContractRemainingFrequency',
        'contract_remaining_total' => 'getContractRemainingTotal',
        'amortization_schedule' => 'getAmortizationSchedule',
        'amortization_schedule_info' => 'getAmortizationScheduleInfo',
        'consignee_id' => 'getConsigneeId',
        'contract_number' => 'getContractNumber',
        'monthly_payment' => 'getMonthlyPayment',
        'principal' => 'getPrincipal',
        'payment_day' => 'getPaymentDay',
        'outstanding_principal' => 'getOutstandingPrincipal',
        'credit_limit' => 'getCreditLimit',
        'last_period_balance' => 'getLastPeriodBalance',
        'interest_rate' => 'getInterestRate',
        'limit_day' => 'getLimitDay',
        'cutting_day' => 'getCuttingDay',
        'cutting_date' => 'getCuttingDate',
        'last_payment_date' => 'getLastPaymentDate',
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

    const INSTALLMENTS_CONTRACT_TERM_FREQUENCY_DAY = 'DAY';
    const INSTALLMENTS_CONTRACT_TERM_FREQUENCY_WEEK = 'WEEK';
    const INSTALLMENTS_CONTRACT_TERM_FREQUENCY_MONTH = 'MONTH';
    const INSTALLMENTS_CONTRACT_TERM_FREQUENCY_YEAR = 'YEAR';
    const INSTALLMENTS_CONTRACT_TERM_FREQUENCY_NO_DEADLINE_REMAINING = 'NO_DEADLINE_REMAINING';
    const INSTALLMENTS_CONTRACT_TERM_FREQUENCY_NULL = 'null';
    const INSTALLMENT_FREQUENCY_IRREGULAR = 'IRREGULAR';
    const INSTALLMENT_FREQUENCY_WEEKLY = 'WEEKLY';
    const INSTALLMENT_FREQUENCY_FORTNIGHTLY = 'FORTNIGHTLY';
    const INSTALLMENT_FREQUENCY_MONTHLY = 'MONTHLY';
    const INSTALLMENT_FREQUENCY_BIMONTHLY = 'BIMONTHLY';
    const INSTALLMENT_FREQUENCY_QUARTERLY = 'QUARTERLY';
    const INSTALLMENT_FREQUENCY_BIANNUALLY = 'BIANNUALLY';
    const INSTALLMENT_FREQUENCY_ANNUALLY = 'ANNUALLY';
    const INSTALLMENT_FREQUENCY_OTHER = 'OTHER';
    const CONTRACT_REMAINING_FREQUENCY_DAY = 'DAY';
    const CONTRACT_REMAINING_FREQUENCY_WEEK = 'WEEK';
    const CONTRACT_REMAINING_FREQUENCY_MONTH = 'MONTH';
    const CONTRACT_REMAINING_FREQUENCY_YEAR = 'YEAR';
    const CONTRACT_REMAINING_FREQUENCY_NO_DEADLINE_REMAINING = 'NO_DEADLINE_REMAINING';
    const CONTRACT_REMAINING_FREQUENCY_NULL = 'null';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInstallmentsContractTermFrequencyAllowableValues()
    {
        return [
            self::INSTALLMENTS_CONTRACT_TERM_FREQUENCY_DAY,
            self::INSTALLMENTS_CONTRACT_TERM_FREQUENCY_WEEK,
            self::INSTALLMENTS_CONTRACT_TERM_FREQUENCY_MONTH,
            self::INSTALLMENTS_CONTRACT_TERM_FREQUENCY_YEAR,
            self::INSTALLMENTS_CONTRACT_TERM_FREQUENCY_NO_DEADLINE_REMAINING,
            self::INSTALLMENTS_CONTRACT_TERM_FREQUENCY_NULL,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInstallmentFrequencyAllowableValues()
    {
        return [
            self::INSTALLMENT_FREQUENCY_IRREGULAR,
            self::INSTALLMENT_FREQUENCY_WEEKLY,
            self::INSTALLMENT_FREQUENCY_FORTNIGHTLY,
            self::INSTALLMENT_FREQUENCY_MONTHLY,
            self::INSTALLMENT_FREQUENCY_BIMONTHLY,
            self::INSTALLMENT_FREQUENCY_QUARTERLY,
            self::INSTALLMENT_FREQUENCY_BIANNUALLY,
            self::INSTALLMENT_FREQUENCY_ANNUALLY,
            self::INSTALLMENT_FREQUENCY_OTHER,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContractRemainingFrequencyAllowableValues()
    {
        return [
            self::CONTRACT_REMAINING_FREQUENCY_DAY,
            self::CONTRACT_REMAINING_FREQUENCY_WEEK,
            self::CONTRACT_REMAINING_FREQUENCY_MONTH,
            self::CONTRACT_REMAINING_FREQUENCY_YEAR,
            self::CONTRACT_REMAINING_FREQUENCY_NO_DEADLINE_REMAINING,
            self::CONTRACT_REMAINING_FREQUENCY_NULL,
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
        $this->container['collected_at'] = isset($data['collected_at']) ? $data['collected_at'] : null;
        $this->container['loan_code'] = isset($data['loan_code']) ? $data['loan_code'] : null;
        $this->container['contract_amount'] = isset($data['contract_amount']) ? $data['contract_amount'] : null;
        $this->container['total_effective_cost'] = isset($data['total_effective_cost']) ? $data['total_effective_cost'] : null;
        $this->container['loan_type'] = isset($data['loan_type']) ? $data['loan_type'] : null;
        $this->container['outstanding_balance'] = isset($data['outstanding_balance']) ? $data['outstanding_balance'] : null;
        $this->container['interest_rates'] = isset($data['interest_rates']) ? $data['interest_rates'] : null;
        $this->container['fees'] = isset($data['fees']) ? $data['fees'] : null;
        $this->container['contracted_charges'] = isset($data['contracted_charges']) ? $data['contracted_charges'] : null;
        $this->container['collaterals'] = isset($data['collaterals']) ? $data['collaterals'] : null;
        $this->container['balloon_payments'] = isset($data['balloon_payments']) ? $data['balloon_payments'] : null;
        $this->container['installments_contract_term_frequency'] = isset($data['installments_contract_term_frequency']) ? $data['installments_contract_term_frequency'] : null;
        $this->container['installment_frequency'] = isset($data['installment_frequency']) ? $data['installment_frequency'] : null;
        $this->container['installment_frequency_info'] = isset($data['installment_frequency_info']) ? $data['installment_frequency_info'] : null;
        $this->container['first_installment_due_date'] = isset($data['first_installment_due_date']) ? $data['first_installment_due_date'] : null;
        $this->container['number_of_installments_total'] = isset($data['number_of_installments_total']) ? $data['number_of_installments_total'] : null;
        $this->container['number_of_installments_outstanding'] = isset($data['number_of_installments_outstanding']) ? $data['number_of_installments_outstanding'] : null;
        $this->container['number_of_installments_paid'] = isset($data['number_of_installments_paid']) ? $data['number_of_installments_paid'] : null;
        $this->container['number_of_installments_past_due'] = isset($data['number_of_installments_past_due']) ? $data['number_of_installments_past_due'] : null;
        $this->container['disbursement_dates'] = isset($data['disbursement_dates']) ? $data['disbursement_dates'] : null;
        $this->container['settlement_date'] = isset($data['settlement_date']) ? $data['settlement_date'] : null;
        $this->container['contract_start_date'] = isset($data['contract_start_date']) ? $data['contract_start_date'] : null;
        $this->container['contract_end_date'] = isset($data['contract_end_date']) ? $data['contract_end_date'] : null;
        $this->container['contract_remaining_frequency'] = isset($data['contract_remaining_frequency']) ? $data['contract_remaining_frequency'] : null;
        $this->container['contract_remaining_total'] = isset($data['contract_remaining_total']) ? $data['contract_remaining_total'] : null;
        $this->container['amortization_schedule'] = isset($data['amortization_schedule']) ? $data['amortization_schedule'] : null;
        $this->container['amortization_schedule_info'] = isset($data['amortization_schedule_info']) ? $data['amortization_schedule_info'] : null;
        $this->container['consignee_id'] = isset($data['consignee_id']) ? $data['consignee_id'] : null;
        $this->container['contract_number'] = isset($data['contract_number']) ? $data['contract_number'] : null;
        $this->container['monthly_payment'] = isset($data['monthly_payment']) ? $data['monthly_payment'] : null;
        $this->container['principal'] = isset($data['principal']) ? $data['principal'] : null;
        $this->container['payment_day'] = isset($data['payment_day']) ? $data['payment_day'] : null;
        $this->container['outstanding_principal'] = isset($data['outstanding_principal']) ? $data['outstanding_principal'] : null;
        $this->container['credit_limit'] = isset($data['credit_limit']) ? $data['credit_limit'] : null;
        $this->container['last_period_balance'] = isset($data['last_period_balance']) ? $data['last_period_balance'] : null;
        $this->container['interest_rate'] = isset($data['interest_rate']) ? $data['interest_rate'] : null;
        $this->container['limit_day'] = isset($data['limit_day']) ? $data['limit_day'] : null;
        $this->container['cutting_day'] = isset($data['cutting_day']) ? $data['cutting_day'] : null;
        $this->container['cutting_date'] = isset($data['cutting_date']) ? $data['cutting_date'] : null;
        $this->container['last_payment_date'] = isset($data['last_payment_date']) ? $data['last_payment_date'] : null;
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
        if ($this->container['loan_code'] === null) {
            $invalidProperties[] = "'loan_code' can't be null";
        }
        if ($this->container['contract_amount'] === null) {
            $invalidProperties[] = "'contract_amount' can't be null";
        }
        if ($this->container['loan_type'] === null) {
            $invalidProperties[] = "'loan_type' can't be null";
        }
        if ($this->container['outstanding_balance'] === null) {
            $invalidProperties[] = "'outstanding_balance' can't be null";
        }
        if ($this->container['interest_rates'] === null) {
            $invalidProperties[] = "'interest_rates' can't be null";
        }
        if ($this->container['fees'] === null) {
            $invalidProperties[] = "'fees' can't be null";
        }
        if ($this->container['collaterals'] === null) {
            $invalidProperties[] = "'collaterals' can't be null";
        }
        if ($this->container['balloon_payments'] === null) {
            $invalidProperties[] = "'balloon_payments' can't be null";
        }
        if ($this->container['installments_contract_term_frequency'] === null) {
            $invalidProperties[] = "'installments_contract_term_frequency' can't be null";
        }
        $allowedValues = $this->getInstallmentsContractTermFrequencyAllowableValues();
        if (!is_null($this->container['installments_contract_term_frequency']) && !in_array($this->container['installments_contract_term_frequency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'installments_contract_term_frequency', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['installment_frequency'] === null) {
            $invalidProperties[] = "'installment_frequency' can't be null";
        }
        $allowedValues = $this->getInstallmentFrequencyAllowableValues();
        if (!is_null($this->container['installment_frequency']) && !in_array($this->container['installment_frequency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'installment_frequency', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['installment_frequency_info'] === null) {
            $invalidProperties[] = "'installment_frequency_info' can't be null";
        }
        if ($this->container['first_installment_due_date'] === null) {
            $invalidProperties[] = "'first_installment_due_date' can't be null";
        }
        if ($this->container['number_of_installments_total'] === null) {
            $invalidProperties[] = "'number_of_installments_total' can't be null";
        }
        if ($this->container['number_of_installments_outstanding'] === null) {
            $invalidProperties[] = "'number_of_installments_outstanding' can't be null";
        }
        if ($this->container['number_of_installments_paid'] === null) {
            $invalidProperties[] = "'number_of_installments_paid' can't be null";
        }
        if ($this->container['number_of_installments_past_due'] === null) {
            $invalidProperties[] = "'number_of_installments_past_due' can't be null";
        }
        if ($this->container['disbursement_dates'] === null) {
            $invalidProperties[] = "'disbursement_dates' can't be null";
        }
        if ($this->container['settlement_date'] === null) {
            $invalidProperties[] = "'settlement_date' can't be null";
        }
        if ($this->container['contract_start_date'] === null) {
            $invalidProperties[] = "'contract_start_date' can't be null";
        }
        if ($this->container['contract_end_date'] === null) {
            $invalidProperties[] = "'contract_end_date' can't be null";
        }
        if ($this->container['contract_remaining_frequency'] === null) {
            $invalidProperties[] = "'contract_remaining_frequency' can't be null";
        }
        $allowedValues = $this->getContractRemainingFrequencyAllowableValues();
        if (!is_null($this->container['contract_remaining_frequency']) && !in_array($this->container['contract_remaining_frequency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'contract_remaining_frequency', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['contract_remaining_total'] === null) {
            $invalidProperties[] = "'contract_remaining_total' can't be null";
        }
        if ($this->container['amortization_schedule'] === null) {
            $invalidProperties[] = "'amortization_schedule' can't be null";
        }
        if ($this->container['amortization_schedule_info'] === null) {
            $invalidProperties[] = "'amortization_schedule_info' can't be null";
        }
        if ($this->container['consignee_id'] === null) {
            $invalidProperties[] = "'consignee_id' can't be null";
        }
        if ($this->container['contract_number'] === null) {
            $invalidProperties[] = "'contract_number' can't be null";
        }
        if ($this->container['monthly_payment'] === null) {
            $invalidProperties[] = "'monthly_payment' can't be null";
        }
        if ($this->container['principal'] === null) {
            $invalidProperties[] = "'principal' can't be null";
        }
        if ($this->container['payment_day'] === null) {
            $invalidProperties[] = "'payment_day' can't be null";
        }
        if ($this->container['outstanding_principal'] === null) {
            $invalidProperties[] = "'outstanding_principal' can't be null";
        }
        if ($this->container['credit_limit'] === null) {
            $invalidProperties[] = "'credit_limit' can't be null";
        }
        if ($this->container['last_period_balance'] === null) {
            $invalidProperties[] = "'last_period_balance' can't be null";
        }
        if ($this->container['interest_rate'] === null) {
            $invalidProperties[] = "'interest_rate' can't be null";
        }
        if ($this->container['limit_day'] === null) {
            $invalidProperties[] = "'limit_day' can't be null";
        }
        if ($this->container['cutting_day'] === null) {
            $invalidProperties[] = "'cutting_day' can't be null";
        }
        if ($this->container['cutting_date'] === null) {
            $invalidProperties[] = "'cutting_date' can't be null";
        }
        if ($this->container['last_payment_date'] === null) {
            $invalidProperties[] = "'last_payment_date' can't be null";
        }
        if ($this->container['no_interest_payment'] === null) {
            $invalidProperties[] = "'no_interest_payment' can't be null";
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
     * Gets loan_code
     *
     * @return string
     */
    public function getLoanCode()
    {
        return $this->container['loan_code'];
    }

    /**
     * Sets loan_code
     *
     * @param string $loan_code The country-specific standardized contract number.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setLoanCode($loan_code)
    {
        $this->container['loan_code'] = $loan_code;

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
     * @param float $contract_amount The initial total loan amount when the contract was signed, calculated by the institution. This amount includes the principal + interest + taxes + fees.
     *
     * @return $this
     */
    public function setContractAmount($contract_amount)
    {
        $this->container['contract_amount'] = $contract_amount;

        return $this;
    }

    /**
     * Gets total_effective_cost
     *
     * @return float
     */
    public function getTotalEffectiveCost()
    {
        return $this->container['total_effective_cost'];
    }

    /**
     * Sets total_effective_cost
     *
     * @param float $total_effective_cost The initial total effective cost of the loan.
     *
     * @return $this
     */
    public function setTotalEffectiveCost($total_effective_cost)
    {
        $this->container['total_effective_cost'] = $total_effective_cost;

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
     * @param string $loan_type The type of the loan, according to the institution.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setLoanType($loan_type)
    {
        $this->container['loan_type'] = $loan_type;

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
     * Gets interest_rates
     *
     * @return \Swagger\Client\Model\AccountsOFDABrazilLoanDataInterestRates[]
     */
    public function getInterestRates()
    {
        return $this->container['interest_rates'];
    }

    /**
     * Sets interest_rates
     *
     * @param \Swagger\Client\Model\AccountsOFDABrazilLoanDataInterestRates[] $interest_rates Breakdown of the interest applied to the loan. With OF Brazil, we highly recommend using the information in `interest_rate_data` for in-depth information.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
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
     * @return \Swagger\Client\Model\AccountsOFDABrazilLoanDataFees[]
     */
    public function getFees()
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees
     *
     * @param \Swagger\Client\Model\AccountsOFDABrazilLoanDataFees[] $fees Breakdown of the fees applied to the loan.
     *
     * @return $this
     */
    public function setFees($fees)
    {
        $this->container['fees'] = $fees;

        return $this;
    }

    /**
     * Gets contracted_charges
     *
     * @return \Swagger\Client\Model\AccountsOFDABrazilLoanDataContractedCharges[]
     */
    public function getContractedCharges()
    {
        return $this->container['contracted_charges'];
    }

    /**
     * Sets contracted_charges
     *
     * @param \Swagger\Client\Model\AccountsOFDABrazilLoanDataContractedCharges[] $contracted_charges contracted_charges
     *
     * @return $this
     */
    public function setContractedCharges($contracted_charges)
    {
        $this->container['contracted_charges'] = $contracted_charges;

        return $this;
    }

    /**
     * Gets collaterals
     *
     * @return \Swagger\Client\Model\AccountsOFDABrazilLoanDataCollaterals[]
     */
    public function getCollaterals()
    {
        return $this->container['collaterals'];
    }

    /**
     * Sets collaterals
     *
     * @param \Swagger\Client\Model\AccountsOFDABrazilLoanDataCollaterals[] $collaterals Details regarding any loan collaterals that the individual or business supplied.
     *
     * @return $this
     */
    public function setCollaterals($collaterals)
    {
        $this->container['collaterals'] = $collaterals;

        return $this;
    }

    /**
     * Gets balloon_payments
     *
     * @return \Swagger\Client\Model\AccountsOFDABrazilLoanDataBalloonPayments[]
     */
    public function getBalloonPayments()
    {
        return $this->container['balloon_payments'];
    }

    /**
     * Sets balloon_payments
     *
     * @param \Swagger\Client\Model\AccountsOFDABrazilLoanDataBalloonPayments[] $balloon_payments Detailed information regarding any balloon payments for the loan, if applicable.
     *
     * @return $this
     */
    public function setBalloonPayments($balloon_payments)
    {
        $this->container['balloon_payments'] = $balloon_payments;

        return $this;
    }

    /**
     * Gets installments_contract_term_frequency
     *
     * @return string
     */
    public function getInstallmentsContractTermFrequency()
    {
        return $this->container['installments_contract_term_frequency'];
    }

    /**
     * Sets installments_contract_term_frequency
     *
     * @param string $installments_contract_term_frequency The frequency of contracted installment payments, as defined when the contract was first signed. We return one of the following:    - `DAY`   - `WEEK`   - `MONTH`   - `YEAR`   - `NO_DEADLINE_REMAINING`   - `null`
     *
     * @return $this
     */
    public function setInstallmentsContractTermFrequency($installments_contract_term_frequency)
    {
        $allowedValues = $this->getInstallmentsContractTermFrequencyAllowableValues();
        if (!in_array($installments_contract_term_frequency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'installments_contract_term_frequency', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['installments_contract_term_frequency'] = $installments_contract_term_frequency;

        return $this;
    }

    /**
     * Gets installment_frequency
     *
     * @return string
     */
    public function getInstallmentFrequency()
    {
        return $this->container['installment_frequency'];
    }

    /**
     * Sets installment_frequency
     *
     * @param string $installment_frequency The frequency that the installments are paid. We return one of the following values:    - `IRREGULAR`   - `WEEKLY`   - `FORTNIGHTLY`   - `MONTHLY`   - `BIMONTHLY`   - `QUARTERLY`   - `BIANNUALLY`   - `ANNUALLY`   - `OTHER`    > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setInstallmentFrequency($installment_frequency)
    {
        $allowedValues = $this->getInstallmentFrequencyAllowableValues();
        if (!in_array($installment_frequency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'installment_frequency', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['installment_frequency'] = $installment_frequency;

        return $this;
    }

    /**
     * Gets installment_frequency_info
     *
     * @return string
     */
    public function getInstallmentFrequencyInfo()
    {
        return $this->container['installment_frequency_info'];
    }

    /**
     * Sets installment_frequency_info
     *
     * @param string $installment_frequency_info Additional information regarding the `installment_frequency`.
     *
     * @return $this
     */
    public function setInstallmentFrequencyInfo($installment_frequency_info)
    {
        $this->container['installment_frequency_info'] = $installment_frequency_info;

        return $this;
    }

    /**
     * Gets first_installment_due_date
     *
     * @return \DateTime
     */
    public function getFirstInstallmentDueDate()
    {
        return $this->container['first_installment_due_date'];
    }

    /**
     * Sets first_installment_due_date
     *
     * @param \DateTime $first_installment_due_date The date when the first installment of the loan is to be paid, in `YYYY-MM-DD` format.
     *
     * @return $this
     */
    public function setFirstInstallmentDueDate($first_installment_due_date)
    {
        $this->container['first_installment_due_date'] = $first_installment_due_date;

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
     * Gets number_of_installments_paid
     *
     * @return int
     */
    public function getNumberOfInstallmentsPaid()
    {
        return $this->container['number_of_installments_paid'];
    }

    /**
     * Sets number_of_installments_paid
     *
     * @param int $number_of_installments_paid The number of installments already paid.
     *
     * @return $this
     */
    public function setNumberOfInstallmentsPaid($number_of_installments_paid)
    {
        $this->container['number_of_installments_paid'] = $number_of_installments_paid;

        return $this;
    }

    /**
     * Gets number_of_installments_past_due
     *
     * @return int
     */
    public function getNumberOfInstallmentsPastDue()
    {
        return $this->container['number_of_installments_past_due'];
    }

    /**
     * Sets number_of_installments_past_due
     *
     * @param int $number_of_installments_past_due The number of installments that are overdue.
     *
     * @return $this
     */
    public function setNumberOfInstallmentsPastDue($number_of_installments_past_due)
    {
        $this->container['number_of_installments_past_due'] = $number_of_installments_past_due;

        return $this;
    }

    /**
     * Gets disbursement_dates
     *
     * @return string[]
     */
    public function getDisbursementDates()
    {
        return $this->container['disbursement_dates'];
    }

    /**
     * Sets disbursement_dates
     *
     * @param string[] $disbursement_dates An array of dates when the loan was disbursed.
     *
     * @return $this
     */
    public function setDisbursementDates($disbursement_dates)
    {
        $this->container['disbursement_dates'] = $disbursement_dates;

        return $this;
    }

    /**
     * Gets settlement_date
     *
     * @return string
     */
    public function getSettlementDate()
    {
        return $this->container['settlement_date'];
    }

    /**
     * Sets settlement_date
     *
     * @param string $settlement_date The date that the loan was settled, in `YYYY-MM-DD` format.
     *
     * @return $this
     */
    public function setSettlementDate($settlement_date)
    {
        $this->container['settlement_date'] = $settlement_date;

        return $this;
    }

    /**
     * Gets contract_start_date
     *
     * @return \DateTime
     */
    public function getContractStartDate()
    {
        return $this->container['contract_start_date'];
    }

    /**
     * Sets contract_start_date
     *
     * @param \DateTime $contract_start_date The date when the loan contract was signed, in `YYYY-MM-DD` format.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
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
     * Gets contract_remaining_frequency
     *
     * @return string
     */
    public function getContractRemainingFrequency()
    {
        return $this->container['contract_remaining_frequency'];
    }

    /**
     * Sets contract_remaining_frequency
     *
     * @param string $contract_remaining_frequency The frequency of the remaining contracted installment payments, as defined when the contract was first signed. We return one of the following: - `DAY` - `WEEK` - `MONTH` - `YEAR` - `NO_DEADLINE_REMAINING` - `null`
     *
     * @return $this
     */
    public function setContractRemainingFrequency($contract_remaining_frequency)
    {
        $allowedValues = $this->getContractRemainingFrequencyAllowableValues();
        if (!in_array($contract_remaining_frequency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'contract_remaining_frequency', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['contract_remaining_frequency'] = $contract_remaining_frequency;

        return $this;
    }

    /**
     * Gets contract_remaining_total
     *
     * @return int
     */
    public function getContractRemainingTotal()
    {
        return $this->container['contract_remaining_total'];
    }

    /**
     * Sets contract_remaining_total
     *
     * @param int $contract_remaining_total The total number of installments remaining on the loan.
     *
     * @return $this
     */
    public function setContractRemainingTotal($contract_remaining_total)
    {
        $this->container['contract_remaining_total'] = $contract_remaining_total;

        return $this;
    }

    /**
     * Gets amortization_schedule
     *
     * @return string
     */
    public function getAmortizationSchedule()
    {
        return $this->container['amortization_schedule'];
    }

    /**
     * Sets amortization_schedule
     *
     * @param string $amortization_schedule The loan amortization schedule.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setAmortizationSchedule($amortization_schedule)
    {
        $this->container['amortization_schedule'] = $amortization_schedule;

        return $this;
    }

    /**
     * Gets amortization_schedule_info
     *
     * @return string
     */
    public function getAmortizationScheduleInfo()
    {
        return $this->container['amortization_schedule_info'];
    }

    /**
     * Sets amortization_schedule_info
     *
     * @param string $amortization_schedule_info Additional information regarding the `amortization_schedule`.
     *
     * @return $this
     */
    public function setAmortizationScheduleInfo($amortization_schedule_info)
    {
        $this->container['amortization_schedule_info'] = $amortization_schedule_info;

        return $this;
    }

    /**
     * Gets consignee_id
     *
     * @return string
     */
    public function getConsigneeId()
    {
        return $this->container['consignee_id'];
    }

    /**
     * Sets consignee_id
     *
     * @param string $consignee_id The ID of the consignee of the loan.
     *
     * @return $this
     */
    public function setConsigneeId($consignee_id)
    {
        $this->container['consignee_id'] = $consignee_id;

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
     * @param float $monthly_payment **Note:** This field is not applicable for OF Brazil and will return null.
     *
     * @return $this
     */
    public function setMonthlyPayment($monthly_payment)
    {
        $this->container['monthly_payment'] = $monthly_payment;

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
     * @param float $principal **Note:** This field is not applicable for OF Brazil and will return null.
     *
     * @return $this
     */
    public function setPrincipal($principal)
    {
        $this->container['principal'] = $principal;

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
     * @param string $payment_day **Note:** This field is not applicable for OF Brazil and will return null.
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
     * @param float $outstanding_principal **Note:** This field is not applicable for OF Brazil and will return null.
     *
     * @return $this
     */
    public function setOutstandingPrincipal($outstanding_principal)
    {
        $this->container['outstanding_principal'] = $outstanding_principal;

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
     * @param float $credit_limit **Note:** This field is not applicable for OF Brazil and will return null.
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
     * @param float $last_period_balance **Note:** This field is not applicable for OF Brazil and will return null.
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
     * @param float $interest_rate **Note:** This field is not applicable for OF Brazil and will return null.
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
     * @param string $limit_day **Note:** This field is not applicable for OF Brazil and will return null.
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
     * @param string $cutting_day **Note:** This field is not applicable for OF Brazil and will return null.
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
     * @param string $cutting_date **Note:** This field is not applicable for OF Brazil and will return null.
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
     * @param string $last_payment_date **Note:** This field is not applicable for OF Brazil and will return null.
     *
     * @return $this
     */
    public function setLastPaymentDate($last_payment_date)
    {
        $this->container['last_payment_date'] = $last_payment_date;

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
     * @param float $no_interest_payment **Note:** This field is not applicable for OF Brazil and will return null.
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
