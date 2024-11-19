<?php
/**
 * FinancialStatementBalanceSheetCurrentAssets
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
 * FinancialStatementBalanceSheetCurrentAssets Class Doc Comment
 *
 * @category Class
 * @description The current assets of the company for the given year.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FinancialStatementBalanceSheetCurrentAssets implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FinancialStatementBalanceSheetCurrentAssets';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cash_and_equivalents' => 'float',
        'short_term_investments' => 'float',
        'accounts_receivable' => 'float',
        'notes_receivable' => 'float',
        'other_debtors' => 'float',
        'bad_debt_provision' => 'float',
        'tax_recoverable' => 'float',
        'inventory' => 'float',
        'prepaid_expenses' => 'float',
        'assets_available_for_sale' => 'float',
        'total' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cash_and_equivalents' => 'float',
        'short_term_investments' => 'float',
        'accounts_receivable' => 'float',
        'notes_receivable' => 'float',
        'other_debtors' => 'float',
        'bad_debt_provision' => 'float',
        'tax_recoverable' => 'float',
        'inventory' => 'float',
        'prepaid_expenses' => 'float',
        'assets_available_for_sale' => 'float',
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
        'cash_and_equivalents' => 'cash_and_equivalents',
        'short_term_investments' => 'short_term_investments',
        'accounts_receivable' => 'accounts_receivable',
        'notes_receivable' => 'notes_receivable',
        'other_debtors' => 'other_debtors',
        'bad_debt_provision' => 'bad_debt_provision',
        'tax_recoverable' => 'tax_recoverable',
        'inventory' => 'inventory',
        'prepaid_expenses' => 'prepaid_expenses',
        'assets_available_for_sale' => 'assets_available_for_sale',
        'total' => 'total'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cash_and_equivalents' => 'setCashAndEquivalents',
        'short_term_investments' => 'setShortTermInvestments',
        'accounts_receivable' => 'setAccountsReceivable',
        'notes_receivable' => 'setNotesReceivable',
        'other_debtors' => 'setOtherDebtors',
        'bad_debt_provision' => 'setBadDebtProvision',
        'tax_recoverable' => 'setTaxRecoverable',
        'inventory' => 'setInventory',
        'prepaid_expenses' => 'setPrepaidExpenses',
        'assets_available_for_sale' => 'setAssetsAvailableForSale',
        'total' => 'setTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cash_and_equivalents' => 'getCashAndEquivalents',
        'short_term_investments' => 'getShortTermInvestments',
        'accounts_receivable' => 'getAccountsReceivable',
        'notes_receivable' => 'getNotesReceivable',
        'other_debtors' => 'getOtherDebtors',
        'bad_debt_provision' => 'getBadDebtProvision',
        'tax_recoverable' => 'getTaxRecoverable',
        'inventory' => 'getInventory',
        'prepaid_expenses' => 'getPrepaidExpenses',
        'assets_available_for_sale' => 'getAssetsAvailableForSale',
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
        $this->container['cash_and_equivalents'] = isset($data['cash_and_equivalents']) ? $data['cash_and_equivalents'] : null;
        $this->container['short_term_investments'] = isset($data['short_term_investments']) ? $data['short_term_investments'] : null;
        $this->container['accounts_receivable'] = isset($data['accounts_receivable']) ? $data['accounts_receivable'] : null;
        $this->container['notes_receivable'] = isset($data['notes_receivable']) ? $data['notes_receivable'] : null;
        $this->container['other_debtors'] = isset($data['other_debtors']) ? $data['other_debtors'] : null;
        $this->container['bad_debt_provision'] = isset($data['bad_debt_provision']) ? $data['bad_debt_provision'] : null;
        $this->container['tax_recoverable'] = isset($data['tax_recoverable']) ? $data['tax_recoverable'] : null;
        $this->container['inventory'] = isset($data['inventory']) ? $data['inventory'] : null;
        $this->container['prepaid_expenses'] = isset($data['prepaid_expenses']) ? $data['prepaid_expenses'] : null;
        $this->container['assets_available_for_sale'] = isset($data['assets_available_for_sale']) ? $data['assets_available_for_sale'] : null;
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

        if ($this->container['cash_and_equivalents'] === null) {
            $invalidProperties[] = "'cash_and_equivalents' can't be null";
        }
        if ($this->container['short_term_investments'] === null) {
            $invalidProperties[] = "'short_term_investments' can't be null";
        }
        if ($this->container['accounts_receivable'] === null) {
            $invalidProperties[] = "'accounts_receivable' can't be null";
        }
        if ($this->container['notes_receivable'] === null) {
            $invalidProperties[] = "'notes_receivable' can't be null";
        }
        if ($this->container['other_debtors'] === null) {
            $invalidProperties[] = "'other_debtors' can't be null";
        }
        if ($this->container['bad_debt_provision'] === null) {
            $invalidProperties[] = "'bad_debt_provision' can't be null";
        }
        if ($this->container['tax_recoverable'] === null) {
            $invalidProperties[] = "'tax_recoverable' can't be null";
        }
        if ($this->container['inventory'] === null) {
            $invalidProperties[] = "'inventory' can't be null";
        }
        if ($this->container['prepaid_expenses'] === null) {
            $invalidProperties[] = "'prepaid_expenses' can't be null";
        }
        if ($this->container['assets_available_for_sale'] === null) {
            $invalidProperties[] = "'assets_available_for_sale' can't be null";
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
     * Gets cash_and_equivalents
     *
     * @return float
     */
    public function getCashAndEquivalents()
    {
        return $this->container['cash_and_equivalents'];
    }

    /**
     * Sets cash_and_equivalents
     *
     * @param float $cash_and_equivalents The total amount of cash and cash equivalents, including currency, bank accounts, and other liquid investments that can be quickly converted to cash.
     *
     * @return $this
     */
    public function setCashAndEquivalents($cash_and_equivalents)
    {
        $this->container['cash_and_equivalents'] = $cash_and_equivalents;

        return $this;
    }

    /**
     * Gets short_term_investments
     *
     * @return float
     */
    public function getShortTermInvestments()
    {
        return $this->container['short_term_investments'];
    }

    /**
     * Sets short_term_investments
     *
     * @param float $short_term_investments The value of investments that are expected to be liquidated into cash within one year, such as marketable securities.
     *
     * @return $this
     */
    public function setShortTermInvestments($short_term_investments)
    {
        $this->container['short_term_investments'] = $short_term_investments;

        return $this;
    }

    /**
     * Gets accounts_receivable
     *
     * @return float
     */
    public function getAccountsReceivable()
    {
        return $this->container['accounts_receivable'];
    }

    /**
     * Sets accounts_receivable
     *
     * @param float $accounts_receivable The amount owed by customers for sales made on credit, expected to be received within a short period.
     *
     * @return $this
     */
    public function setAccountsReceivable($accounts_receivable)
    {
        $this->container['accounts_receivable'] = $accounts_receivable;

        return $this;
    }

    /**
     * Gets notes_receivable
     *
     * @return float
     */
    public function getNotesReceivable()
    {
        return $this->container['notes_receivable'];
    }

    /**
     * Sets notes_receivable
     *
     * @param float $notes_receivable The value of written promissory notes received from customers or others, promising to pay a specified amount by a certain date.
     *
     * @return $this
     */
    public function setNotesReceivable($notes_receivable)
    {
        $this->container['notes_receivable'] = $notes_receivable;

        return $this;
    }

    /**
     * Gets other_debtors
     *
     * @return float
     */
    public function getOtherDebtors()
    {
        return $this->container['other_debtors'];
    }

    /**
     * Sets other_debtors
     *
     * @param float $other_debtors The total amounts due from various other debtors, excluding accounts and notes receivable.
     *
     * @return $this
     */
    public function setOtherDebtors($other_debtors)
    {
        $this->container['other_debtors'] = $other_debtors;

        return $this;
    }

    /**
     * Gets bad_debt_provision
     *
     * @return float
     */
    public function getBadDebtProvision()
    {
        return $this->container['bad_debt_provision'];
    }

    /**
     * Sets bad_debt_provision
     *
     * @param float $bad_debt_provision The estimated amount of receivables that are expected to be uncollectible, often referred to as allowance for doubtful accounts.
     *
     * @return $this
     */
    public function setBadDebtProvision($bad_debt_provision)
    {
        $this->container['bad_debt_provision'] = $bad_debt_provision;

        return $this;
    }

    /**
     * Gets tax_recoverable
     *
     * @return float
     */
    public function getTaxRecoverable()
    {
        return $this->container['tax_recoverable'];
    }

    /**
     * Sets tax_recoverable
     *
     * @param float $tax_recoverable The amount of tax payments that can be recovered from tax authorities.
     *
     * @return $this
     */
    public function setTaxRecoverable($tax_recoverable)
    {
        $this->container['tax_recoverable'] = $tax_recoverable;

        return $this;
    }

    /**
     * Gets inventory
     *
     * @return float
     */
    public function getInventory()
    {
        return $this->container['inventory'];
    }

    /**
     * Sets inventory
     *
     * @param float $inventory The total value of goods available for sale, raw materials, work-in-progress, and finished products.
     *
     * @return $this
     */
    public function setInventory($inventory)
    {
        $this->container['inventory'] = $inventory;

        return $this;
    }

    /**
     * Gets prepaid_expenses
     *
     * @return float
     */
    public function getPrepaidExpenses()
    {
        return $this->container['prepaid_expenses'];
    }

    /**
     * Sets prepaid_expenses
     *
     * @param float $prepaid_expenses The amount paid in advance for goods or services to be received in the future, such as insurance premiums or rent.
     *
     * @return $this
     */
    public function setPrepaidExpenses($prepaid_expenses)
    {
        $this->container['prepaid_expenses'] = $prepaid_expenses;

        return $this;
    }

    /**
     * Gets assets_available_for_sale
     *
     * @return float
     */
    public function getAssetsAvailableForSale()
    {
        return $this->container['assets_available_for_sale'];
    }

    /**
     * Sets assets_available_for_sale
     *
     * @param float $assets_available_for_sale The value of non-current assets that are available for sale but not yet sold, such as surplus equipment or property.
     *
     * @return $this
     */
    public function setAssetsAvailableForSale($assets_available_for_sale)
    {
        $this->container['assets_available_for_sale'] = $assets_available_for_sale;

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
     * @param float $total The sum of all current assets, representing the total value of assets expected to be converted into cash or used within one year.
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
