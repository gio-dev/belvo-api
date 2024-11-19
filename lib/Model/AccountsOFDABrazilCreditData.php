<?php
/**
 * AccountsOFDABrazilCreditData
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
 * AccountsOFDABrazilCreditData Class Doc Comment
 *
 * @category Class
 * @description Details regarding the credit cards associated with this account.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountsOFDABrazilCreditData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Accounts OFDA Brazil_credit_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'collected_at' => '\DateTime',
        'credit_limit' => 'float',
        'limits' => '\Swagger\Client\Model\AccountsOFDABrazilCreditDataLimits[]',
        'cutting_date' => '\DateTime',
        'minimum_payment' => 'float',
        'network' => 'string',
        'network_additional_info' => 'string',
        'cards' => '\Swagger\Client\Model\AccountsOFDABrazilCreditDataCards[]',
        'next_payment_date' => 'string',
        'no_interest_payment' => 'float',
        'interest_rate' => 'float',
        'monthly_payment' => 'float',
        'last_payment_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'collected_at' => 'date-time',
        'credit_limit' => 'float',
        'limits' => null,
        'cutting_date' => 'date',
        'minimum_payment' => 'float',
        'network' => null,
        'network_additional_info' => null,
        'cards' => null,
        'next_payment_date' => null,
        'no_interest_payment' => 'float',
        'interest_rate' => 'float',
        'monthly_payment' => null,
        'last_payment_date' => null
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
        'credit_limit' => 'credit_limit',
        'limits' => 'limits',
        'cutting_date' => 'cutting_date',
        'minimum_payment' => 'minimum_payment',
        'network' => 'network',
        'network_additional_info' => 'network_additional_info',
        'cards' => 'cards',
        'next_payment_date' => 'next_payment_date',
        'no_interest_payment' => 'no_interest_payment',
        'interest_rate' => 'interest_rate',
        'monthly_payment' => 'monthly_payment',
        'last_payment_date' => 'last_payment_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'collected_at' => 'setCollectedAt',
        'credit_limit' => 'setCreditLimit',
        'limits' => 'setLimits',
        'cutting_date' => 'setCuttingDate',
        'minimum_payment' => 'setMinimumPayment',
        'network' => 'setNetwork',
        'network_additional_info' => 'setNetworkAdditionalInfo',
        'cards' => 'setCards',
        'next_payment_date' => 'setNextPaymentDate',
        'no_interest_payment' => 'setNoInterestPayment',
        'interest_rate' => 'setInterestRate',
        'monthly_payment' => 'setMonthlyPayment',
        'last_payment_date' => 'setLastPaymentDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'collected_at' => 'getCollectedAt',
        'credit_limit' => 'getCreditLimit',
        'limits' => 'getLimits',
        'cutting_date' => 'getCuttingDate',
        'minimum_payment' => 'getMinimumPayment',
        'network' => 'getNetwork',
        'network_additional_info' => 'getNetworkAdditionalInfo',
        'cards' => 'getCards',
        'next_payment_date' => 'getNextPaymentDate',
        'no_interest_payment' => 'getNoInterestPayment',
        'interest_rate' => 'getInterestRate',
        'monthly_payment' => 'getMonthlyPayment',
        'last_payment_date' => 'getLastPaymentDate'
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

    const NETWORK_VISA = 'VISA';
    const NETWORK_MASTERCARD = 'MASTERCARD';
    const NETWORK_AMERICAN_EXPRESS = 'AMERICAN_EXPRESS';
    const NETWORK_DINERS_CLUB = 'DINERS_CLUB';
    const NETWORK_HIPERCARD = 'HIPERCARD';
    const NETWORK_BANDEIRA_PROPRIA = 'BANDEIRA_PROPRIA';
    const NETWORK_CHEQUE_ELETRONICO = 'CHEQUE_ELETRONICO';
    const NETWORK_ELO = 'ELO';
    const NETWORK_OTHER = 'OTHER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNetworkAllowableValues()
    {
        return [
            self::NETWORK_VISA,
            self::NETWORK_MASTERCARD,
            self::NETWORK_AMERICAN_EXPRESS,
            self::NETWORK_DINERS_CLUB,
            self::NETWORK_HIPERCARD,
            self::NETWORK_BANDEIRA_PROPRIA,
            self::NETWORK_CHEQUE_ELETRONICO,
            self::NETWORK_ELO,
            self::NETWORK_OTHER,
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
        $this->container['credit_limit'] = isset($data['credit_limit']) ? $data['credit_limit'] : null;
        $this->container['limits'] = isset($data['limits']) ? $data['limits'] : null;
        $this->container['cutting_date'] = isset($data['cutting_date']) ? $data['cutting_date'] : null;
        $this->container['minimum_payment'] = isset($data['minimum_payment']) ? $data['minimum_payment'] : null;
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
        $this->container['network_additional_info'] = isset($data['network_additional_info']) ? $data['network_additional_info'] : null;
        $this->container['cards'] = isset($data['cards']) ? $data['cards'] : null;
        $this->container['next_payment_date'] = isset($data['next_payment_date']) ? $data['next_payment_date'] : null;
        $this->container['no_interest_payment'] = isset($data['no_interest_payment']) ? $data['no_interest_payment'] : null;
        $this->container['interest_rate'] = isset($data['interest_rate']) ? $data['interest_rate'] : null;
        $this->container['monthly_payment'] = isset($data['monthly_payment']) ? $data['monthly_payment'] : null;
        $this->container['last_payment_date'] = isset($data['last_payment_date']) ? $data['last_payment_date'] : null;
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
        if ($this->container['credit_limit'] === null) {
            $invalidProperties[] = "'credit_limit' can't be null";
        }
        $allowedValues = $this->getNetworkAllowableValues();
        if (!is_null($this->container['network']) && !in_array($this->container['network'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'network', must be one of '%s'",
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
     * @param float $credit_limit The upper credit limit of the card.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setCreditLimit($credit_limit)
    {
        $this->container['credit_limit'] = $credit_limit;

        return $this;
    }

    /**
     * Gets limits
     *
     * @return \Swagger\Client\Model\AccountsOFDABrazilCreditDataLimits[]
     */
    public function getLimits()
    {
        return $this->container['limits'];
    }

    /**
     * Sets limits
     *
     * @param \Swagger\Client\Model\AccountsOFDABrazilCreditDataLimits[] $limits limits
     *
     * @return $this
     */
    public function setLimits($limits)
    {
        $this->container['limits'] = $limits;

        return $this;
    }

    /**
     * Gets cutting_date
     *
     * @return \DateTime
     */
    public function getCuttingDate()
    {
        return $this->container['cutting_date'];
    }

    /**
     * Sets cutting_date
     *
     * @param \DateTime $cutting_date The date when the credit card's bill is due.
     *
     * @return $this
     */
    public function setCuttingDate($cutting_date)
    {
        $this->container['cutting_date'] = $cutting_date;

        return $this;
    }

    /**
     * Gets minimum_payment
     *
     * @return float
     */
    public function getMinimumPayment()
    {
        return $this->container['minimum_payment'];
    }

    /**
     * Sets minimum_payment
     *
     * @param float $minimum_payment The minimum amount that the account owner needs to pay in the current credit period.
     *
     * @return $this
     */
    public function setMinimumPayment($minimum_payment)
    {
        $this->container['minimum_payment'] = $minimum_payment;

        return $this;
    }

    /**
     * Gets network
     *
     * @return string
     */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
     * Sets network
     *
     * @param string $network The credit network that the card is associated with. We return one of the following values:    - `VISA`   - `MASTERCARD`   - `AMERICAN_EXPRESS`   - `DINERS_CLUB`   - `HIPERCARD`   - `BANDEIRA_PROPRIA`   - `CHEQUE_ELETRONICO`   - `ELO`   - `OTHER`    > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setNetwork($network)
    {
        $allowedValues = $this->getNetworkAllowableValues();
        if (!is_null($network) && !in_array($network, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'network', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['network'] = $network;

        return $this;
    }

    /**
     * Gets network_additional_info
     *
     * @return string
     */
    public function getNetworkAdditionalInfo()
    {
        return $this->container['network_additional_info'];
    }

    /**
     * Sets network_additional_info
     *
     * @param string $network_additional_info Additional information about the credit card network.
     *
     * @return $this
     */
    public function setNetworkAdditionalInfo($network_additional_info)
    {
        $this->container['network_additional_info'] = $network_additional_info;

        return $this;
    }

    /**
     * Gets cards
     *
     * @return \Swagger\Client\Model\AccountsOFDABrazilCreditDataCards[]
     */
    public function getCards()
    {
        return $this->container['cards'];
    }

    /**
     * Sets cards
     *
     * @param \Swagger\Client\Model\AccountsOFDABrazilCreditDataCards[] $cards Details regarding the cards associated with the account.
     *
     * @return $this
     */
    public function setCards($cards)
    {
        $this->container['cards'] = $cards;

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
     * @param string $next_payment_date **Note:** This field is not applicable for OF Brazil and will return null.
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
