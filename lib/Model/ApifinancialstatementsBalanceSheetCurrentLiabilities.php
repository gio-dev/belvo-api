<?php
/**
 * ApifinancialstatementsBalanceSheetCurrentLiabilities
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
 * ApifinancialstatementsBalanceSheetCurrentLiabilities Class Doc Comment
 *
 * @category Class
 * @description The current liabilities of the company, expected to be settled within the given year.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApifinancialstatementsBalanceSheetCurrentLiabilities implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'apifinancialstatements_balance_sheet_current_liabilities';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bank_loans' => 'float',
        'accounts_payable' => 'float',
        'notes_payable' => 'float',
        'financial_instruments' => 'float',
        'other_creditors' => 'float',
        'income_tax_payable' => 'float',
        'customer_advances' => 'float',
        'provisions' => 'float',
        'taxes_payable' => 'float',
        'total' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bank_loans' => 'float',
        'accounts_payable' => 'float',
        'notes_payable' => 'float',
        'financial_instruments' => 'float',
        'other_creditors' => 'float',
        'income_tax_payable' => 'float',
        'customer_advances' => 'float',
        'provisions' => 'float',
        'taxes_payable' => 'float',
        'total' => 'float'
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
        'bank_loans' => 'bank_loans',
        'accounts_payable' => 'accounts_payable',
        'notes_payable' => 'notes_payable',
        'financial_instruments' => 'financial_instruments',
        'other_creditors' => 'other_creditors',
        'income_tax_payable' => 'income_tax_payable',
        'customer_advances' => 'customer_advances',
        'provisions' => 'provisions',
        'taxes_payable' => 'taxes_payable',
        'total' => 'total'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bank_loans' => 'setBankLoans',
        'accounts_payable' => 'setAccountsPayable',
        'notes_payable' => 'setNotesPayable',
        'financial_instruments' => 'setFinancialInstruments',
        'other_creditors' => 'setOtherCreditors',
        'income_tax_payable' => 'setIncomeTaxPayable',
        'customer_advances' => 'setCustomerAdvances',
        'provisions' => 'setProvisions',
        'taxes_payable' => 'setTaxesPayable',
        'total' => 'setTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bank_loans' => 'getBankLoans',
        'accounts_payable' => 'getAccountsPayable',
        'notes_payable' => 'getNotesPayable',
        'financial_instruments' => 'getFinancialInstruments',
        'other_creditors' => 'getOtherCreditors',
        'income_tax_payable' => 'getIncomeTaxPayable',
        'customer_advances' => 'getCustomerAdvances',
        'provisions' => 'getProvisions',
        'taxes_payable' => 'getTaxesPayable',
        'total' => 'getTotal'
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
        $this->container['bank_loans'] = isset($data['bank_loans']) ? $data['bank_loans'] : null;
        $this->container['accounts_payable'] = isset($data['accounts_payable']) ? $data['accounts_payable'] : null;
        $this->container['notes_payable'] = isset($data['notes_payable']) ? $data['notes_payable'] : null;
        $this->container['financial_instruments'] = isset($data['financial_instruments']) ? $data['financial_instruments'] : null;
        $this->container['other_creditors'] = isset($data['other_creditors']) ? $data['other_creditors'] : null;
        $this->container['income_tax_payable'] = isset($data['income_tax_payable']) ? $data['income_tax_payable'] : null;
        $this->container['customer_advances'] = isset($data['customer_advances']) ? $data['customer_advances'] : null;
        $this->container['provisions'] = isset($data['provisions']) ? $data['provisions'] : null;
        $this->container['taxes_payable'] = isset($data['taxes_payable']) ? $data['taxes_payable'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['bank_loans'] === null) {
            $invalidProperties[] = "'bank_loans' can't be null";
        }
        if ($this->container['accounts_payable'] === null) {
            $invalidProperties[] = "'accounts_payable' can't be null";
        }
        if ($this->container['notes_payable'] === null) {
            $invalidProperties[] = "'notes_payable' can't be null";
        }
        if ($this->container['financial_instruments'] === null) {
            $invalidProperties[] = "'financial_instruments' can't be null";
        }
        if ($this->container['other_creditors'] === null) {
            $invalidProperties[] = "'other_creditors' can't be null";
        }
        if ($this->container['income_tax_payable'] === null) {
            $invalidProperties[] = "'income_tax_payable' can't be null";
        }
        if ($this->container['customer_advances'] === null) {
            $invalidProperties[] = "'customer_advances' can't be null";
        }
        if ($this->container['provisions'] === null) {
            $invalidProperties[] = "'provisions' can't be null";
        }
        if ($this->container['taxes_payable'] === null) {
            $invalidProperties[] = "'taxes_payable' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
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
     * Gets bank_loans
     *
     * @return float
     */
    public function getBankLoans()
    {
        return $this->container['bank_loans'];
    }

    /**
     * Sets bank_loans
     *
     * @param float $bank_loans The total amount of loans borrowed from banks or financial institutions, expected to be repaid within one year.
     *
     * @return $this
     */
    public function setBankLoans($bank_loans)
    {
        $this->container['bank_loans'] = $bank_loans;

        return $this;
    }

    /**
     * Gets accounts_payable
     *
     * @return float
     */
    public function getAccountsPayable()
    {
        return $this->container['accounts_payable'];
    }

    /**
     * Sets accounts_payable
     *
     * @param float $accounts_payable The amount owed to suppliers for goods or services purchased on credit, expected to be paid within a short period.
     *
     * @return $this
     */
    public function setAccountsPayable($accounts_payable)
    {
        $this->container['accounts_payable'] = $accounts_payable;

        return $this;
    }

    /**
     * Gets notes_payable
     *
     * @return float
     */
    public function getNotesPayable()
    {
        return $this->container['notes_payable'];
    }

    /**
     * Sets notes_payable
     *
     * @param float $notes_payable The value of written promissory notes issued to suppliers or others, promising to pay a specified amount by a certain date.
     *
     * @return $this
     */
    public function setNotesPayable($notes_payable)
    {
        $this->container['notes_payable'] = $notes_payable;

        return $this;
    }

    /**
     * Gets financial_instruments
     *
     * @return float
     */
    public function getFinancialInstruments()
    {
        return $this->container['financial_instruments'];
    }

    /**
     * Sets financial_instruments
     *
     * @param float $financial_instruments The value of financial instruments that are expected to be liquidated into cash within one year, such as bonds, debentures, and short-term loans.
     *
     * @return $this
     */
    public function setFinancialInstruments($financial_instruments)
    {
        $this->container['financial_instruments'] = $financial_instruments;

        return $this;
    }

    /**
     * Gets other_creditors
     *
     * @return float
     */
    public function getOtherCreditors()
    {
        return $this->container['other_creditors'];
    }

    /**
     * Sets other_creditors
     *
     * @param float $other_creditors The total amounts due to various other creditors, excluding accounts and notes payable.
     *
     * @return $this
     */
    public function setOtherCreditors($other_creditors)
    {
        $this->container['other_creditors'] = $other_creditors;

        return $this;
    }

    /**
     * Gets income_tax_payable
     *
     * @return float
     */
    public function getIncomeTaxPayable()
    {
        return $this->container['income_tax_payable'];
    }

    /**
     * Sets income_tax_payable
     *
     * @param float $income_tax_payable The amount of income tax that is owed to tax authorities, expected to be paid within a short period.
     *
     * @return $this
     */
    public function setIncomeTaxPayable($income_tax_payable)
    {
        $this->container['income_tax_payable'] = $income_tax_payable;

        return $this;
    }

    /**
     * Gets customer_advances
     *
     * @return float
     */
    public function getCustomerAdvances()
    {
        return $this->container['customer_advances'];
    }

    /**
     * Sets customer_advances
     *
     * @param float $customer_advances The total amount received in advance from customers for goods or services to be delivered in the future, expected to be utilized within one year.
     *
     * @return $this
     */
    public function setCustomerAdvances($customer_advances)
    {
        $this->container['customer_advances'] = $customer_advances;

        return $this;
    }

    /**
     * Gets provisions
     *
     * @return float
     */
    public function getProvisions()
    {
        return $this->container['provisions'];
    }

    /**
     * Sets provisions
     *
     * @param float $provisions The estimated amount set aside for future liabilities or losses, such as warranties, legal claims, or restructuring costs.
     *
     * @return $this
     */
    public function setProvisions($provisions)
    {
        $this->container['provisions'] = $provisions;

        return $this;
    }

    /**
     * Gets taxes_payable
     *
     * @return float
     */
    public function getTaxesPayable()
    {
        return $this->container['taxes_payable'];
    }

    /**
     * Sets taxes_payable
     *
     * @param float $taxes_payable The total amount of taxes owed to tax authorities, expected to be paid within a short period.
     *
     * @return $this
     */
    public function setTaxesPayable($taxes_payable)
    {
        $this->container['taxes_payable'] = $taxes_payable;

        return $this;
    }

    /**
     * Gets total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param float $total The sum of all current liabilities, representing the total value of obligations expected to be settled within one year.
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

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
