<?php
/**
 * ApiriskinsightsLoansMetrics
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
 * ApiriskinsightsLoansMetrics Class Doc Comment
 *
 * @category Class
 * @description Aggregated metrics calculated based on the user&#x27;s loan accounts and checking accounts that have an overdraft.  &gt; Loan metrics help in understanding a customer&#x27;s borrowing and repayment behavior, which can help in assessing their ability to take on additional credit and potential default risks.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApiriskinsightsLoansMetrics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'apiriskinsights_loans_metrics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'num_accounts' => 'int',
        'sum_loans_principal' => 'float',
        'sum_loans_outstanding_principal' => 'float',
        'sum_loans_monthly_payment' => 'float',
        'loan_limit_utilization' => 'float',
        'overdraft_limit' => 'float',
        'overdraft_limit_utilization' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'num_accounts' => 'int32',
        'sum_loans_principal' => 'float',
        'sum_loans_outstanding_principal' => 'float',
        'sum_loans_monthly_payment' => 'float',
        'loan_limit_utilization' => 'float',
        'overdraft_limit' => 'float',
        'overdraft_limit_utilization' => 'float'
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
        'num_accounts' => 'num_accounts',
        'sum_loans_principal' => 'sum_loans_principal',
        'sum_loans_outstanding_principal' => 'sum_loans_outstanding_principal',
        'sum_loans_monthly_payment' => 'sum_loans_monthly_payment',
        'loan_limit_utilization' => 'loan_limit_utilization',
        'overdraft_limit' => 'overdraft_limit',
        'overdraft_limit_utilization' => 'overdraft_limit_utilization'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'num_accounts' => 'setNumAccounts',
        'sum_loans_principal' => 'setSumLoansPrincipal',
        'sum_loans_outstanding_principal' => 'setSumLoansOutstandingPrincipal',
        'sum_loans_monthly_payment' => 'setSumLoansMonthlyPayment',
        'loan_limit_utilization' => 'setLoanLimitUtilization',
        'overdraft_limit' => 'setOverdraftLimit',
        'overdraft_limit_utilization' => 'setOverdraftLimitUtilization'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'num_accounts' => 'getNumAccounts',
        'sum_loans_principal' => 'getSumLoansPrincipal',
        'sum_loans_outstanding_principal' => 'getSumLoansOutstandingPrincipal',
        'sum_loans_monthly_payment' => 'getSumLoansMonthlyPayment',
        'loan_limit_utilization' => 'getLoanLimitUtilization',
        'overdraft_limit' => 'getOverdraftLimit',
        'overdraft_limit_utilization' => 'getOverdraftLimitUtilization'
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
        $this->container['num_accounts'] = isset($data['num_accounts']) ? $data['num_accounts'] : null;
        $this->container['sum_loans_principal'] = isset($data['sum_loans_principal']) ? $data['sum_loans_principal'] : null;
        $this->container['sum_loans_outstanding_principal'] = isset($data['sum_loans_outstanding_principal']) ? $data['sum_loans_outstanding_principal'] : null;
        $this->container['sum_loans_monthly_payment'] = isset($data['sum_loans_monthly_payment']) ? $data['sum_loans_monthly_payment'] : null;
        $this->container['loan_limit_utilization'] = isset($data['loan_limit_utilization']) ? $data['loan_limit_utilization'] : null;
        $this->container['overdraft_limit'] = isset($data['overdraft_limit']) ? $data['overdraft_limit'] : null;
        $this->container['overdraft_limit_utilization'] = isset($data['overdraft_limit_utilization']) ? $data['overdraft_limit_utilization'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['num_accounts'] === null) {
            $invalidProperties[] = "'num_accounts' can't be null";
        }
        if ($this->container['sum_loans_principal'] === null) {
            $invalidProperties[] = "'sum_loans_principal' can't be null";
        }
        if ($this->container['sum_loans_outstanding_principal'] === null) {
            $invalidProperties[] = "'sum_loans_outstanding_principal' can't be null";
        }
        if ($this->container['sum_loans_monthly_payment'] === null) {
            $invalidProperties[] = "'sum_loans_monthly_payment' can't be null";
        }
        if ($this->container['loan_limit_utilization'] === null) {
            $invalidProperties[] = "'loan_limit_utilization' can't be null";
        }
        if ($this->container['overdraft_limit'] === null) {
            $invalidProperties[] = "'overdraft_limit' can't be null";
        }
        if ($this->container['overdraft_limit_utilization'] === null) {
            $invalidProperties[] = "'overdraft_limit_utilization' can't be null";
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
     * Gets num_accounts
     *
     * @return int
     */
    public function getNumAccounts()
    {
        return $this->container['num_accounts'];
    }

    /**
     * Sets num_accounts
     *
     * @param int $num_accounts The number of loan accounts associated with the user.
     *
     * @return $this
     */
    public function setNumAccounts($num_accounts)
    {
        $this->container['num_accounts'] = $num_accounts;

        return $this;
    }

    /**
     * Gets sum_loans_principal
     *
     * @return float
     */
    public function getSumLoansPrincipal()
    {
        return $this->container['sum_loans_principal'];
    }

    /**
     * Sets sum_loans_principal
     *
     * @param float $sum_loans_principal Sum total of the principal for all of the user's loan accounts.
     *
     * @return $this
     */
    public function setSumLoansPrincipal($sum_loans_principal)
    {
        $this->container['sum_loans_principal'] = $sum_loans_principal;

        return $this;
    }

    /**
     * Gets sum_loans_outstanding_principal
     *
     * @return float
     */
    public function getSumLoansOutstandingPrincipal()
    {
        return $this->container['sum_loans_outstanding_principal'];
    }

    /**
     * Sets sum_loans_outstanding_principal
     *
     * @param float $sum_loans_outstanding_principal Sum total of the outstanding principal for all the user's loan accounts.
     *
     * @return $this
     */
    public function setSumLoansOutstandingPrincipal($sum_loans_outstanding_principal)
    {
        $this->container['sum_loans_outstanding_principal'] = $sum_loans_outstanding_principal;

        return $this;
    }

    /**
     * Gets sum_loans_monthly_payment
     *
     * @return float
     */
    public function getSumLoansMonthlyPayment()
    {
        return $this->container['sum_loans_monthly_payment'];
    }

    /**
     * Sets sum_loans_monthly_payment
     *
     * @param float $sum_loans_monthly_payment Sum total of the monthly payments for all the user's loan accounts.
     *
     * @return $this
     */
    public function setSumLoansMonthlyPayment($sum_loans_monthly_payment)
    {
        $this->container['sum_loans_monthly_payment'] = $sum_loans_monthly_payment;

        return $this;
    }

    /**
     * Gets loan_limit_utilization
     *
     * @return float
     */
    public function getLoanLimitUtilization()
    {
        return $this->container['loan_limit_utilization'];
    }

    /**
     * Sets loan_limit_utilization
     *
     * @param float $loan_limit_utilization The percentage of the loan limit used.
     *
     * @return $this
     */
    public function setLoanLimitUtilization($loan_limit_utilization)
    {
        $this->container['loan_limit_utilization'] = $loan_limit_utilization;

        return $this;
    }

    /**
     * Gets overdraft_limit
     *
     * @return float
     */
    public function getOverdraftLimit()
    {
        return $this->container['overdraft_limit'];
    }

    /**
     * Sets overdraft_limit
     *
     * @param float $overdraft_limit The total overdraft limit of all checking and savings accounts.
     *
     * @return $this
     */
    public function setOverdraftLimit($overdraft_limit)
    {
        $this->container['overdraft_limit'] = $overdraft_limit;

        return $this;
    }

    /**
     * Gets overdraft_limit_utilization
     *
     * @return float
     */
    public function getOverdraftLimitUtilization()
    {
        return $this->container['overdraft_limit_utilization'];
    }

    /**
     * Sets overdraft_limit_utilization
     *
     * @param float $overdraft_limit_utilization The percentage of the overdraft limit used.
     *
     * @return $this
     */
    public function setOverdraftLimitUtilization($overdraft_limit_utilization)
    {
        $this->container['overdraft_limit_utilization'] = $overdraft_limit_utilization;

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
