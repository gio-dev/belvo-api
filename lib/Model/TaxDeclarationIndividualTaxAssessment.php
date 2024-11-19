<?php
/**
 * TaxDeclarationIndividualTaxAssessment
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
 * TaxDeclarationIndividualTaxAssessment Class Doc Comment
 *
 * @category Class
 * @description Object containing the calculated tax assessment of the tax payer. This includes the total taxable income, the income tax applied, and taxes already withheld.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaxDeclarationIndividualTaxAssessment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaxDeclarationIndividual_tax_assessment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fortuitous_profit_tax' => 'float',
        'total_tax_on_taxable_net_income' => 'float',
        'net_income_tax' => 'float',
        'total_tax_due' => 'float',
        'previous_year_balance' => 'float',
        'total_withheld_tax' => 'float',
        'balance_payable' => 'float',
        'balance_refundable' => 'float',
        'total_payment' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fortuitous_profit_tax' => 'float',
        'total_tax_on_taxable_net_income' => 'float',
        'net_income_tax' => 'float',
        'total_tax_due' => 'float',
        'previous_year_balance' => 'float',
        'total_withheld_tax' => 'float',
        'balance_payable' => 'float',
        'balance_refundable' => 'float',
        'total_payment' => 'float'
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
        'fortuitous_profit_tax' => 'fortuitous_profit_tax',
        'total_tax_on_taxable_net_income' => 'total_tax_on_taxable_net_income',
        'net_income_tax' => 'net_income_tax',
        'total_tax_due' => 'total_tax_due',
        'previous_year_balance' => 'previous_year_balance',
        'total_withheld_tax' => 'total_withheld_tax',
        'balance_payable' => 'balance_payable',
        'balance_refundable' => 'balance_refundable',
        'total_payment' => 'total_payment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fortuitous_profit_tax' => 'setFortuitousProfitTax',
        'total_tax_on_taxable_net_income' => 'setTotalTaxOnTaxableNetIncome',
        'net_income_tax' => 'setNetIncomeTax',
        'total_tax_due' => 'setTotalTaxDue',
        'previous_year_balance' => 'setPreviousYearBalance',
        'total_withheld_tax' => 'setTotalWithheldTax',
        'balance_payable' => 'setBalancePayable',
        'balance_refundable' => 'setBalanceRefundable',
        'total_payment' => 'setTotalPayment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fortuitous_profit_tax' => 'getFortuitousProfitTax',
        'total_tax_on_taxable_net_income' => 'getTotalTaxOnTaxableNetIncome',
        'net_income_tax' => 'getNetIncomeTax',
        'total_tax_due' => 'getTotalTaxDue',
        'previous_year_balance' => 'getPreviousYearBalance',
        'total_withheld_tax' => 'getTotalWithheldTax',
        'balance_payable' => 'getBalancePayable',
        'balance_refundable' => 'getBalanceRefundable',
        'total_payment' => 'getTotalPayment'
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
        $this->container['fortuitous_profit_tax'] = isset($data['fortuitous_profit_tax']) ? $data['fortuitous_profit_tax'] : null;
        $this->container['total_tax_on_taxable_net_income'] = isset($data['total_tax_on_taxable_net_income']) ? $data['total_tax_on_taxable_net_income'] : null;
        $this->container['net_income_tax'] = isset($data['net_income_tax']) ? $data['net_income_tax'] : null;
        $this->container['total_tax_due'] = isset($data['total_tax_due']) ? $data['total_tax_due'] : null;
        $this->container['previous_year_balance'] = isset($data['previous_year_balance']) ? $data['previous_year_balance'] : null;
        $this->container['total_withheld_tax'] = isset($data['total_withheld_tax']) ? $data['total_withheld_tax'] : null;
        $this->container['balance_payable'] = isset($data['balance_payable']) ? $data['balance_payable'] : null;
        $this->container['balance_refundable'] = isset($data['balance_refundable']) ? $data['balance_refundable'] : null;
        $this->container['total_payment'] = isset($data['total_payment']) ? $data['total_payment'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fortuitous_profit_tax'] === null) {
            $invalidProperties[] = "'fortuitous_profit_tax' can't be null";
        }
        if ($this->container['total_tax_on_taxable_net_income'] === null) {
            $invalidProperties[] = "'total_tax_on_taxable_net_income' can't be null";
        }
        if ($this->container['net_income_tax'] === null) {
            $invalidProperties[] = "'net_income_tax' can't be null";
        }
        if ($this->container['total_tax_due'] === null) {
            $invalidProperties[] = "'total_tax_due' can't be null";
        }
        if ($this->container['previous_year_balance'] === null) {
            $invalidProperties[] = "'previous_year_balance' can't be null";
        }
        if ($this->container['total_withheld_tax'] === null) {
            $invalidProperties[] = "'total_withheld_tax' can't be null";
        }
        if ($this->container['balance_payable'] === null) {
            $invalidProperties[] = "'balance_payable' can't be null";
        }
        if ($this->container['balance_refundable'] === null) {
            $invalidProperties[] = "'balance_refundable' can't be null";
        }
        if ($this->container['total_payment'] === null) {
            $invalidProperties[] = "'total_payment' can't be null";
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
     * Gets fortuitous_profit_tax
     *
     * @return float
     */
    public function getFortuitousProfitTax()
    {
        return $this->container['fortuitous_profit_tax'];
    }

    /**
     * Sets fortuitous_profit_tax
     *
     * @param float $fortuitous_profit_tax The tax applied on your unexpected income (such as lottery wins or house sales).
     *
     * @return $this
     */
    public function setFortuitousProfitTax($fortuitous_profit_tax)
    {
        $this->container['fortuitous_profit_tax'] = $fortuitous_profit_tax;

        return $this;
    }

    /**
     * Gets total_tax_on_taxable_net_income
     *
     * @return float
     */
    public function getTotalTaxOnTaxableNetIncome()
    {
        return $this->container['total_tax_on_taxable_net_income'];
    }

    /**
     * Sets total_tax_on_taxable_net_income
     *
     * @param float $total_tax_on_taxable_net_income The calculated total tax that can be applied on the tax payer's taxable income (total income - exemptions - deductions).
     *
     * @return $this
     */
    public function setTotalTaxOnTaxableNetIncome($total_tax_on_taxable_net_income)
    {
        $this->container['total_tax_on_taxable_net_income'] = $total_tax_on_taxable_net_income;

        return $this;
    }

    /**
     * Gets net_income_tax
     *
     * @return float
     */
    public function getNetIncomeTax()
    {
        return $this->container['net_income_tax'];
    }

    /**
     * Sets net_income_tax
     *
     * @param float $net_income_tax After additional deductions that you can apply, this will be the net income tax. If not further deduction are identified, this value will be the same as `total_tax_on_taxable_net_income`.
     *
     * @return $this
     */
    public function setNetIncomeTax($net_income_tax)
    {
        $this->container['net_income_tax'] = $net_income_tax;

        return $this;
    }

    /**
     * Gets total_tax_due
     *
     * @return float
     */
    public function getTotalTaxDue()
    {
        return $this->container['total_tax_due'];
    }

    /**
     * Sets total_tax_due
     *
     * @param float $total_tax_due After further deductions, this is the final calculated tax that the taxpayer is required to pay.
     *
     * @return $this
     */
    public function setTotalTaxDue($total_tax_due)
    {
        $this->container['total_tax_due'] = $total_tax_due;

        return $this;
    }

    /**
     * Gets previous_year_balance
     *
     * @return float
     */
    public function getPreviousYearBalance()
    {
        return $this->container['previous_year_balance'];
    }

    /**
     * Sets previous_year_balance
     *
     * @param float $previous_year_balance Only applicable for DIAN.   The amount the tax payer has as a \"credit\" fromt he previous year (this is equal to the `balance_refundable`) of the previous year.
     *
     * @return $this
     */
    public function setPreviousYearBalance($previous_year_balance)
    {
        $this->container['previous_year_balance'] = $previous_year_balance;

        return $this;
    }

    /**
     * Gets total_withheld_tax
     *
     * @return float
     */
    public function getTotalWithheldTax()
    {
        return $this->container['total_withheld_tax'];
    }

    /**
     * Sets total_withheld_tax
     *
     * @param float $total_withheld_tax The total tax already withheld in the current fiscal year.
     *
     * @return $this
     */
    public function setTotalWithheldTax($total_withheld_tax)
    {
        $this->container['total_withheld_tax'] = $total_withheld_tax;

        return $this;
    }

    /**
     * Gets balance_payable
     *
     * @return float
     */
    public function getBalancePayable()
    {
        return $this->container['balance_payable'];
    }

    /**
     * Sets balance_payable
     *
     * @param float $balance_payable How much the tax payer is required to pay.
     *
     * @return $this
     */
    public function setBalancePayable($balance_payable)
    {
        $this->container['balance_payable'] = $balance_payable;

        return $this;
    }

    /**
     * Gets balance_refundable
     *
     * @return float
     */
    public function getBalanceRefundable()
    {
        return $this->container['balance_refundable'];
    }

    /**
     * Sets balance_refundable
     *
     * @param float $balance_refundable How much the tax payer is expected to receive. For DIAN, this will count as credit for the next fiscal year (see `previous_year_balance`).
     *
     * @return $this
     */
    public function setBalanceRefundable($balance_refundable)
    {
        $this->container['balance_refundable'] = $balance_refundable;

        return $this;
    }

    /**
     * Gets total_payment
     *
     * @return float
     */
    public function getTotalPayment()
    {
        return $this->container['total_payment'];
    }

    /**
     * Sets total_payment
     *
     * @param float $total_payment The total the tax payer is required to pay, taking into account deductions and fiscal credits.
     *
     * @return $this
     */
    public function setTotalPayment($total_payment)
    {
        $this->container['total_payment'] = $total_payment;

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
