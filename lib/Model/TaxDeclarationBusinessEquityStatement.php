<?php
/**
 * TaxDeclarationBusinessEquityStatement
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
 * TaxDeclarationBusinessEquityStatement Class Doc Comment
 *
 * @category Class
 * @description Object containing the general fiscal situation of the taxpayer.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaxDeclarationBusinessEquityStatement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaxDeclarationBusiness_equity_statement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cash_and_cash_equivalents' => 'float',
        'investments_and_derivative_financial_instruments' => 'float',
        'accounts_documents_and_finance_leases_receivable' => 'float',
        'inventory' => 'float',
        'property_plant_and_equipment_investment_properties' => 'float',
        'total_gross_equity' => 'float',
        'debts' => 'float',
        'total_net_equity' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cash_and_cash_equivalents' => 'float',
        'investments_and_derivative_financial_instruments' => 'float',
        'accounts_documents_and_finance_leases_receivable' => 'float',
        'inventory' => 'float',
        'property_plant_and_equipment_investment_properties' => 'float',
        'total_gross_equity' => 'float',
        'debts' => 'float',
        'total_net_equity' => 'float'
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
        'cash_and_cash_equivalents' => 'cash_and_cash_equivalents',
        'investments_and_derivative_financial_instruments' => 'investments_and_derivative_financial_instruments',
        'accounts_documents_and_finance_leases_receivable' => 'accounts_documents_and_finance_leases_receivable',
        'inventory' => 'inventory',
        'property_plant_and_equipment_investment_properties' => 'property_plant_and_equipment_investment_properties',
        'total_gross_equity' => 'total_gross_equity',
        'debts' => 'debts',
        'total_net_equity' => 'total_net_equity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cash_and_cash_equivalents' => 'setCashAndCashEquivalents',
        'investments_and_derivative_financial_instruments' => 'setInvestmentsAndDerivativeFinancialInstruments',
        'accounts_documents_and_finance_leases_receivable' => 'setAccountsDocumentsAndFinanceLeasesReceivable',
        'inventory' => 'setInventory',
        'property_plant_and_equipment_investment_properties' => 'setPropertyPlantAndEquipmentInvestmentProperties',
        'total_gross_equity' => 'setTotalGrossEquity',
        'debts' => 'setDebts',
        'total_net_equity' => 'setTotalNetEquity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cash_and_cash_equivalents' => 'getCashAndCashEquivalents',
        'investments_and_derivative_financial_instruments' => 'getInvestmentsAndDerivativeFinancialInstruments',
        'accounts_documents_and_finance_leases_receivable' => 'getAccountsDocumentsAndFinanceLeasesReceivable',
        'inventory' => 'getInventory',
        'property_plant_and_equipment_investment_properties' => 'getPropertyPlantAndEquipmentInvestmentProperties',
        'total_gross_equity' => 'getTotalGrossEquity',
        'debts' => 'getDebts',
        'total_net_equity' => 'getTotalNetEquity'
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
        $this->container['cash_and_cash_equivalents'] = isset($data['cash_and_cash_equivalents']) ? $data['cash_and_cash_equivalents'] : null;
        $this->container['investments_and_derivative_financial_instruments'] = isset($data['investments_and_derivative_financial_instruments']) ? $data['investments_and_derivative_financial_instruments'] : null;
        $this->container['accounts_documents_and_finance_leases_receivable'] = isset($data['accounts_documents_and_finance_leases_receivable']) ? $data['accounts_documents_and_finance_leases_receivable'] : null;
        $this->container['inventory'] = isset($data['inventory']) ? $data['inventory'] : null;
        $this->container['property_plant_and_equipment_investment_properties'] = isset($data['property_plant_and_equipment_investment_properties']) ? $data['property_plant_and_equipment_investment_properties'] : null;
        $this->container['total_gross_equity'] = isset($data['total_gross_equity']) ? $data['total_gross_equity'] : null;
        $this->container['debts'] = isset($data['debts']) ? $data['debts'] : null;
        $this->container['total_net_equity'] = isset($data['total_net_equity']) ? $data['total_net_equity'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['cash_and_cash_equivalents'] === null) {
            $invalidProperties[] = "'cash_and_cash_equivalents' can't be null";
        }
        if ($this->container['investments_and_derivative_financial_instruments'] === null) {
            $invalidProperties[] = "'investments_and_derivative_financial_instruments' can't be null";
        }
        if ($this->container['accounts_documents_and_finance_leases_receivable'] === null) {
            $invalidProperties[] = "'accounts_documents_and_finance_leases_receivable' can't be null";
        }
        if ($this->container['inventory'] === null) {
            $invalidProperties[] = "'inventory' can't be null";
        }
        if ($this->container['property_plant_and_equipment_investment_properties'] === null) {
            $invalidProperties[] = "'property_plant_and_equipment_investment_properties' can't be null";
        }
        if ($this->container['total_gross_equity'] === null) {
            $invalidProperties[] = "'total_gross_equity' can't be null";
        }
        if ($this->container['debts'] === null) {
            $invalidProperties[] = "'debts' can't be null";
        }
        if ($this->container['total_net_equity'] === null) {
            $invalidProperties[] = "'total_net_equity' can't be null";
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
     * Gets cash_and_cash_equivalents
     *
     * @return float
     */
    public function getCashAndCashEquivalents()
    {
        return $this->container['cash_and_cash_equivalents'];
    }

    /**
     * Sets cash_and_cash_equivalents
     *
     * @param float $cash_and_cash_equivalents Total cash (or cash equivalents) that the business currently holds at the end of the fiscal year.
     *
     * @return $this
     */
    public function setCashAndCashEquivalents($cash_and_cash_equivalents)
    {
        $this->container['cash_and_cash_equivalents'] = $cash_and_cash_equivalents;

        return $this;
    }

    /**
     * Gets investments_and_derivative_financial_instruments
     *
     * @return float
     */
    public function getInvestmentsAndDerivativeFinancialInstruments()
    {
        return $this->container['investments_and_derivative_financial_instruments'];
    }

    /**
     * Sets investments_and_derivative_financial_instruments
     *
     * @param float $investments_and_derivative_financial_instruments Total value of all investments, stocks, or similar, that the company has.
     *
     * @return $this
     */
    public function setInvestmentsAndDerivativeFinancialInstruments($investments_and_derivative_financial_instruments)
    {
        $this->container['investments_and_derivative_financial_instruments'] = $investments_and_derivative_financial_instruments;

        return $this;
    }

    /**
     * Gets accounts_documents_and_finance_leases_receivable
     *
     * @return float
     */
    public function getAccountsDocumentsAndFinanceLeasesReceivable()
    {
        return $this->container['accounts_documents_and_finance_leases_receivable'];
    }

    /**
     * Sets accounts_documents_and_finance_leases_receivable
     *
     * @param float $accounts_documents_and_finance_leases_receivable Total of all payments the company expects to receive (for example, from partial invoices that have not been paid yet).
     *
     * @return $this
     */
    public function setAccountsDocumentsAndFinanceLeasesReceivable($accounts_documents_and_finance_leases_receivable)
    {
        $this->container['accounts_documents_and_finance_leases_receivable'] = $accounts_documents_and_finance_leases_receivable;

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
     * @param float $inventory Total financial value of the company's sellable inventory.
     *
     * @return $this
     */
    public function setInventory($inventory)
    {
        $this->container['inventory'] = $inventory;

        return $this;
    }

    /**
     * Gets property_plant_and_equipment_investment_properties
     *
     * @return float
     */
    public function getPropertyPlantAndEquipmentInvestmentProperties()
    {
        return $this->container['property_plant_and_equipment_investment_properties'];
    }

    /**
     * Sets property_plant_and_equipment_investment_properties
     *
     * @param float $property_plant_and_equipment_investment_properties Total value of real estate, plant infrastructure, or equipment that has been purchased.
     *
     * @return $this
     */
    public function setPropertyPlantAndEquipmentInvestmentProperties($property_plant_and_equipment_investment_properties)
    {
        $this->container['property_plant_and_equipment_investment_properties'] = $property_plant_and_equipment_investment_properties;

        return $this;
    }

    /**
     * Gets total_gross_equity
     *
     * @return float
     */
    public function getTotalGrossEquity()
    {
        return $this->container['total_gross_equity'];
    }

    /**
     * Sets total_gross_equity
     *
     * @param float $total_gross_equity Total gross equity.
     *
     * @return $this
     */
    public function setTotalGrossEquity($total_gross_equity)
    {
        $this->container['total_gross_equity'] = $total_gross_equity;

        return $this;
    }

    /**
     * Gets debts
     *
     * @return float
     */
    public function getDebts()
    {
        return $this->container['debts'];
    }

    /**
     * Sets debts
     *
     * @param float $debts Total debts that the company currently has.
     *
     * @return $this
     */
    public function setDebts($debts)
    {
        $this->container['debts'] = $debts;

        return $this;
    }

    /**
     * Gets total_net_equity
     *
     * @return float
     */
    public function getTotalNetEquity()
    {
        return $this->container['total_net_equity'];
    }

    /**
     * Sets total_net_equity
     *
     * @param float $total_net_equity The total net equity of the company (`total_gross_equity` - `debts`).
     *
     * @return $this
     */
    public function setTotalNetEquity($total_net_equity)
    {
        $this->container['total_net_equity'] = $total_net_equity;

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
