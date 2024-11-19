<?php
/**
 * TransactionOpenFinanceBrazilCreditCardData
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
 * TransactionOpenFinanceBrazilCreditCardData Class Doc Comment
 *
 * @category Class
 * @description Additional data provided by the institution for credit card transactions.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransactionOpenFinanceBrazilCreditCardData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransactionOpenFinanceBrazil_credit_card_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'collected_at' => '\DateTime',
        'bill_name' => 'string',
        'bill_due_date' => '\DateTime',
        'bill_internal_identification' => 'string',
        'bill_status' => 'string',
        'previous_bill_total' => 'string',
        'bill_amount' => 'float',
        'card_number' => 'string',
        'fee_type' => 'string',
        'fee_type_additional_info' => 'string',
        'credits_type' => 'string',
        'credits_type_additional_info' => 'string',
        'installment_identifier' => 'string',
        'number_of_installments' => 'int',
        'credit_card_bill' => '\Swagger\Client\Model\TransactionCreditCardDataOpenFinanceBrazilCreditCardBill'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'collected_at' => 'date-time',
        'bill_name' => null,
        'bill_due_date' => 'date',
        'bill_internal_identification' => null,
        'bill_status' => null,
        'previous_bill_total' => null,
        'bill_amount' => 'float',
        'card_number' => null,
        'fee_type' => null,
        'fee_type_additional_info' => null,
        'credits_type' => null,
        'credits_type_additional_info' => null,
        'installment_identifier' => null,
        'number_of_installments' => null,
        'credit_card_bill' => null
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
        'bill_name' => 'bill_name',
        'bill_due_date' => 'bill_due_date',
        'bill_internal_identification' => 'bill_internal_identification',
        'bill_status' => 'bill_status',
        'previous_bill_total' => 'previous_bill_total',
        'bill_amount' => 'bill_amount',
        'card_number' => 'card_number',
        'fee_type' => 'fee_type',
        'fee_type_additional_info' => 'fee_type_additional_info',
        'credits_type' => 'credits_type',
        'credits_type_additional_info' => 'credits_type_additional_info',
        'installment_identifier' => 'installment_identifier',
        'number_of_installments' => 'number_of_installments',
        'credit_card_bill' => 'credit_card_bill'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'collected_at' => 'setCollectedAt',
        'bill_name' => 'setBillName',
        'bill_due_date' => 'setBillDueDate',
        'bill_internal_identification' => 'setBillInternalIdentification',
        'bill_status' => 'setBillStatus',
        'previous_bill_total' => 'setPreviousBillTotal',
        'bill_amount' => 'setBillAmount',
        'card_number' => 'setCardNumber',
        'fee_type' => 'setFeeType',
        'fee_type_additional_info' => 'setFeeTypeAdditionalInfo',
        'credits_type' => 'setCreditsType',
        'credits_type_additional_info' => 'setCreditsTypeAdditionalInfo',
        'installment_identifier' => 'setInstallmentIdentifier',
        'number_of_installments' => 'setNumberOfInstallments',
        'credit_card_bill' => 'setCreditCardBill'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'collected_at' => 'getCollectedAt',
        'bill_name' => 'getBillName',
        'bill_due_date' => 'getBillDueDate',
        'bill_internal_identification' => 'getBillInternalIdentification',
        'bill_status' => 'getBillStatus',
        'previous_bill_total' => 'getPreviousBillTotal',
        'bill_amount' => 'getBillAmount',
        'card_number' => 'getCardNumber',
        'fee_type' => 'getFeeType',
        'fee_type_additional_info' => 'getFeeTypeAdditionalInfo',
        'credits_type' => 'getCreditsType',
        'credits_type_additional_info' => 'getCreditsTypeAdditionalInfo',
        'installment_identifier' => 'getInstallmentIdentifier',
        'number_of_installments' => 'getNumberOfInstallments',
        'credit_card_bill' => 'getCreditCardBill'
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

    const FEE_TYPE_ANNUAL_FEE = 'ANNUAL_FEE';
    const FEE_TYPE_NATIONAL_WITHDRAWAL = 'NATIONAL_WITHDRAWAL';
    const FEE_TYPE_INTERNATIONAL_WITHDRAWAL = 'INTERNATIONAL_WITHDRAWAL';
    const FEE_TYPE_EMERGENCY_CREDIT_EVALUATION_FEE = 'EMERGENCY_CREDIT_EVALUATION_FEE';
    const FEE_TYPE_DUPLICATE_ISSUANCE_FEE = 'DUPLICATE_ISSUANCE_FEE';
    const FEE_TYPE_PAYMENT_FEE = 'PAYMENT_FEE';
    const FEE_TYPE_SMS_FEE = 'SMS_FEE';
    const FEE_TYPE_OTHERS = 'OTHERS';
    const FEE_TYPE_NULL = 'null';
    const CREDITS_TYPE_REVOLVING_CREDIT = 'REVOLVING_CREDIT';
    const CREDITS_TYPE_BILL_INSTALLMENT_PAYMENT = 'BILL_INSTALLMENT_PAYMENT';
    const CREDITS_TYPE_LOAN = 'LOAN';
    const CREDITS_TYPE_OTHERS = 'OTHERS';
    const CREDITS_TYPE_NULL = 'null';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFeeTypeAllowableValues()
    {
        return [
            self::FEE_TYPE_ANNUAL_FEE,
            self::FEE_TYPE_NATIONAL_WITHDRAWAL,
            self::FEE_TYPE_INTERNATIONAL_WITHDRAWAL,
            self::FEE_TYPE_EMERGENCY_CREDIT_EVALUATION_FEE,
            self::FEE_TYPE_DUPLICATE_ISSUANCE_FEE,
            self::FEE_TYPE_PAYMENT_FEE,
            self::FEE_TYPE_SMS_FEE,
            self::FEE_TYPE_OTHERS,
            self::FEE_TYPE_NULL,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCreditsTypeAllowableValues()
    {
        return [
            self::CREDITS_TYPE_REVOLVING_CREDIT,
            self::CREDITS_TYPE_BILL_INSTALLMENT_PAYMENT,
            self::CREDITS_TYPE_LOAN,
            self::CREDITS_TYPE_OTHERS,
            self::CREDITS_TYPE_NULL,
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
        $this->container['bill_name'] = isset($data['bill_name']) ? $data['bill_name'] : null;
        $this->container['bill_due_date'] = isset($data['bill_due_date']) ? $data['bill_due_date'] : null;
        $this->container['bill_internal_identification'] = isset($data['bill_internal_identification']) ? $data['bill_internal_identification'] : null;
        $this->container['bill_status'] = isset($data['bill_status']) ? $data['bill_status'] : null;
        $this->container['previous_bill_total'] = isset($data['previous_bill_total']) ? $data['previous_bill_total'] : null;
        $this->container['bill_amount'] = isset($data['bill_amount']) ? $data['bill_amount'] : null;
        $this->container['card_number'] = isset($data['card_number']) ? $data['card_number'] : null;
        $this->container['fee_type'] = isset($data['fee_type']) ? $data['fee_type'] : null;
        $this->container['fee_type_additional_info'] = isset($data['fee_type_additional_info']) ? $data['fee_type_additional_info'] : null;
        $this->container['credits_type'] = isset($data['credits_type']) ? $data['credits_type'] : null;
        $this->container['credits_type_additional_info'] = isset($data['credits_type_additional_info']) ? $data['credits_type_additional_info'] : null;
        $this->container['installment_identifier'] = isset($data['installment_identifier']) ? $data['installment_identifier'] : null;
        $this->container['number_of_installments'] = isset($data['number_of_installments']) ? $data['number_of_installments'] : null;
        $this->container['credit_card_bill'] = isset($data['credit_card_bill']) ? $data['credit_card_bill'] : null;
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
        if ($this->container['bill_name'] === null) {
            $invalidProperties[] = "'bill_name' can't be null";
        }
        if ($this->container['bill_status'] === null) {
            $invalidProperties[] = "'bill_status' can't be null";
        }
        if ($this->container['previous_bill_total'] === null) {
            $invalidProperties[] = "'previous_bill_total' can't be null";
        }
        if ($this->container['bill_amount'] === null) {
            $invalidProperties[] = "'bill_amount' can't be null";
        }
        if ($this->container['card_number'] === null) {
            $invalidProperties[] = "'card_number' can't be null";
        }
        if ($this->container['fee_type'] === null) {
            $invalidProperties[] = "'fee_type' can't be null";
        }
        $allowedValues = $this->getFeeTypeAllowableValues();
        if (!is_null($this->container['fee_type']) && !in_array($this->container['fee_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'fee_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['fee_type_additional_info'] === null) {
            $invalidProperties[] = "'fee_type_additional_info' can't be null";
        }
        if ($this->container['credits_type'] === null) {
            $invalidProperties[] = "'credits_type' can't be null";
        }
        $allowedValues = $this->getCreditsTypeAllowableValues();
        if (!is_null($this->container['credits_type']) && !in_array($this->container['credits_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'credits_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['credits_type_additional_info'] === null) {
            $invalidProperties[] = "'credits_type_additional_info' can't be null";
        }
        if ($this->container['installment_identifier'] === null) {
            $invalidProperties[] = "'installment_identifier' can't be null";
        }
        if ($this->container['number_of_installments'] === null) {
            $invalidProperties[] = "'number_of_installments' can't be null";
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
     * Gets bill_name
     *
     * @return string
     */
    public function getBillName()
    {
        return $this->container['bill_name'];
    }

    /**
     * Sets bill_name
     *
     * @param string $bill_name The title of the monthly credit card bill the transaction belongs to. The format of the returned value is institution specific, however, some common examples are:  - diciembre-2021 - dec-2021 - dec-21  > **Note**: This field is only returned for 'closed' bills (meaning the billing period has ended and the bill has been emitted). If the billing period is still ongoing, we return `null`.
     *
     * @return $this
     */
    public function setBillName($bill_name)
    {
        $this->container['bill_name'] = $bill_name;

        return $this;
    }

    /**
     * Gets bill_due_date
     *
     * @return \DateTime
     */
    public function getBillDueDate()
    {
        return $this->container['bill_due_date'];
    }

    /**
     * Sets bill_due_date
     *
     * @param \DateTime $bill_due_date The date that the bill is due to be paid, in `YYYY-MM-DD` format.  > **Note**: This field is only returned for 'closed' bills (meaning the billing period has ended and the bill has been emitted). If the billing period is still ongoing, we return `null`.
     *
     * @return $this
     */
    public function setBillDueDate($bill_due_date)
    {
        $this->container['bill_due_date'] = $bill_due_date;

        return $this;
    }

    /**
     * Gets bill_internal_identification
     *
     * @return string
     */
    public function getBillInternalIdentification()
    {
        return $this->container['bill_internal_identification'];
    }

    /**
     * Sets bill_internal_identification
     *
     * @param string $bill_internal_identification The institution's internal identifier for the bill.  > **Note**: This field is only returned for 'closed' bills (meaning the billing period has ended and the bill has been emitted). If the billing period is still ongoing, we return `null`.
     *
     * @return $this
     */
    public function setBillInternalIdentification($bill_internal_identification)
    {
        $this->container['bill_internal_identification'] = $bill_internal_identification;

        return $this;
    }

    /**
     * Gets bill_status
     *
     * @return string
     */
    public function getBillStatus()
    {
        return $this->container['bill_status'];
    }

    /**
     * Sets bill_status
     *
     * @param string $bill_status **Note:** This field is not applicable for OFDA Brazil and will return `null`.
     *
     * @return $this
     */
    public function setBillStatus($bill_status)
    {
        $this->container['bill_status'] = $bill_status;

        return $this;
    }

    /**
     * Gets previous_bill_total
     *
     * @return string
     */
    public function getPreviousBillTotal()
    {
        return $this->container['previous_bill_total'];
    }

    /**
     * Sets previous_bill_total
     *
     * @param string $previous_bill_total **Note:** This field is not applicable for OFDA Brazil and will return `null`.
     *
     * @return $this
     */
    public function setPreviousBillTotal($previous_bill_total)
    {
        $this->container['previous_bill_total'] = $previous_bill_total;

        return $this;
    }

    /**
     * Gets bill_amount
     *
     * @return float
     */
    public function getBillAmount()
    {
        return $this->container['bill_amount'];
    }

    /**
     * Sets bill_amount
     *
     * @param float $bill_amount The bill amount, as of `collected_at`. For more information, see `credit_card_bill`.
     *
     * @return $this
     */
    public function setBillAmount($bill_amount)
    {
        $this->container['bill_amount'] = $bill_amount;

        return $this;
    }

    /**
     * Gets card_number
     *
     * @return string
     */
    public function getCardNumber()
    {
        return $this->container['card_number'];
    }

    /**
     * Sets card_number
     *
     * @param string $card_number The credit card number.  **Note:** Often, this is just the last four digit of the credit card.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setCardNumber($card_number)
    {
        $this->container['card_number'] = $card_number;

        return $this;
    }

    /**
     * Gets fee_type
     *
     * @return string
     */
    public function getFeeType()
    {
        return $this->container['fee_type'];
    }

    /**
     * Sets fee_type
     *
     * @param string $fee_type The fee that can be charged for a card transaction. We return one of the following values:    - `ANNUAL_FEE`   - `NATIONAL_WITHDRAWAL`   - `INTERNATIONAL_WITHDRAWAL`   - `EMERGENCY_CREDIT_EVALUATION_FEE`   - `DUPLICATE_ISSUANCE_FEE`   - `PAYMENT_FEE`   - `SMS_FEE`   - `OTHERS`   - `null`
     *
     * @return $this
     */
    public function setFeeType($fee_type)
    {
        $allowedValues = $this->getFeeTypeAllowableValues();
        if (!in_array($fee_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'fee_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fee_type'] = $fee_type;

        return $this;
    }

    /**
     * Gets fee_type_additional_info
     *
     * @return string
     */
    public function getFeeTypeAdditionalInfo()
    {
        return $this->container['fee_type_additional_info'];
    }

    /**
     * Sets fee_type_additional_info
     *
     * @param string $fee_type_additional_info Additional information regarding the fee.
     *
     * @return $this
     */
    public function setFeeTypeAdditionalInfo($fee_type_additional_info)
    {
        $this->container['fee_type_additional_info'] = $fee_type_additional_info;

        return $this;
    }

    /**
     * Gets credits_type
     *
     * @return string
     */
    public function getCreditsType()
    {
        return $this->container['credits_type'];
    }

    /**
     * Sets credits_type
     *
     * @param string $credits_type Other types of credit that have been contracted on the card. We return one of the following values:    - `REVOLVING_CREDIT`   - `BILL_INSTALLMENT_PAYMENT`   - `LOAN`   - `OTHERS`   - `null`
     *
     * @return $this
     */
    public function setCreditsType($credits_type)
    {
        $allowedValues = $this->getCreditsTypeAllowableValues();
        if (!in_array($credits_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'credits_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['credits_type'] = $credits_type;

        return $this;
    }

    /**
     * Gets credits_type_additional_info
     *
     * @return string
     */
    public function getCreditsTypeAdditionalInfo()
    {
        return $this->container['credits_type_additional_info'];
    }

    /**
     * Sets credits_type_additional_info
     *
     * @param string $credits_type_additional_info Additional information regarding the credit type.
     *
     * @return $this
     */
    public function setCreditsTypeAdditionalInfo($credits_type_additional_info)
    {
        $this->container['credits_type_additional_info'] = $credits_type_additional_info;

        return $this;
    }

    /**
     * Gets installment_identifier
     *
     * @return string
     */
    public function getInstallmentIdentifier()
    {
        return $this->container['installment_identifier'];
    }

    /**
     * Sets installment_identifier
     *
     * @param string $installment_identifier An identifier for the installment, according to the institution.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setInstallmentIdentifier($installment_identifier)
    {
        $this->container['installment_identifier'] = $installment_identifier;

        return $this;
    }

    /**
     * Gets number_of_installments
     *
     * @return int
     */
    public function getNumberOfInstallments()
    {
        return $this->container['number_of_installments'];
    }

    /**
     * Sets number_of_installments
     *
     * @param int $number_of_installments The total number of installments for the card transaction, if applicable.
     *
     * @return $this
     */
    public function setNumberOfInstallments($number_of_installments)
    {
        $this->container['number_of_installments'] = $number_of_installments;

        return $this;
    }

    /**
     * Gets credit_card_bill
     *
     * @return \Swagger\Client\Model\TransactionCreditCardDataOpenFinanceBrazilCreditCardBill
     */
    public function getCreditCardBill()
    {
        return $this->container['credit_card_bill'];
    }

    /**
     * Sets credit_card_bill
     *
     * @param \Swagger\Client\Model\TransactionCreditCardDataOpenFinanceBrazilCreditCardBill $credit_card_bill credit_card_bill
     *
     * @return $this
     */
    public function setCreditCardBill($credit_card_bill)
    {
        $this->container['credit_card_bill'] = $credit_card_bill;

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
