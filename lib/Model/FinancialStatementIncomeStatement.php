<?php
/**
 * FinancialStatementIncomeStatement
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
 * FinancialStatementIncomeStatement Class Doc Comment
 *
 * @category Class
 * @description The income statement detailing the company&#x27;s revenues, expenses, and profits for the given year.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FinancialStatementIncomeStatement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FinancialStatementIncomeStatement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'net_revenue' => 'float',
        'domestic_sales' => 'float',
        'foreign_sales' => 'float',
        'materials_used' => 'float',
        'cost_of_goods_sold' => 'float',
        'cost_of_services_sold' => 'float',
        'gross_profit' => 'float',
        'gross_loss' => 'float',
        'operating_expenses' => 'float',
        'operating_income' => 'float',
        'operating_loss' => 'float',
        'financial_result' => 'float',
        'equity_in_earnings_of_affiliates' => 'float',
        'income_before_taxes' => 'float',
        'loss_before_taxes' => 'float',
        'income_taxes' => 'float',
        'income_from_continuing_operations' => 'float',
        'loss_from_continuing_operations' => 'float',
        'discontinued_operations' => 'float',
        'net_income' => 'float',
        'net_loss' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'net_revenue' => 'float',
        'domestic_sales' => 'float',
        'foreign_sales' => 'float',
        'materials_used' => 'float',
        'cost_of_goods_sold' => 'float',
        'cost_of_services_sold' => 'float',
        'gross_profit' => 'float',
        'gross_loss' => 'float',
        'operating_expenses' => 'float',
        'operating_income' => 'float',
        'operating_loss' => 'float',
        'financial_result' => 'float',
        'equity_in_earnings_of_affiliates' => 'float',
        'income_before_taxes' => 'float',
        'loss_before_taxes' => 'float',
        'income_taxes' => 'float',
        'income_from_continuing_operations' => 'float',
        'loss_from_continuing_operations' => 'float',
        'discontinued_operations' => 'float',
        'net_income' => 'float',
        'net_loss' => 'float'
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
        'net_revenue' => 'net_revenue',
        'domestic_sales' => 'domestic_sales',
        'foreign_sales' => 'foreign_sales',
        'materials_used' => 'materials_used',
        'cost_of_goods_sold' => 'cost_of_goods_sold',
        'cost_of_services_sold' => 'cost_of_services_sold',
        'gross_profit' => 'gross_profit',
        'gross_loss' => 'gross_loss',
        'operating_expenses' => 'operating_expenses',
        'operating_income' => 'operating_income',
        'operating_loss' => 'operating_loss',
        'financial_result' => 'financial_result',
        'equity_in_earnings_of_affiliates' => 'equity_in_earnings_of_affiliates',
        'income_before_taxes' => 'income_before_taxes',
        'loss_before_taxes' => 'loss_before_taxes',
        'income_taxes' => 'income_taxes',
        'income_from_continuing_operations' => 'income_from_continuing_operations',
        'loss_from_continuing_operations' => 'loss_from_continuing_operations',
        'discontinued_operations' => 'discontinued_operations',
        'net_income' => 'net_income',
        'net_loss' => 'net_loss'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'net_revenue' => 'setNetRevenue',
        'domestic_sales' => 'setDomesticSales',
        'foreign_sales' => 'setForeignSales',
        'materials_used' => 'setMaterialsUsed',
        'cost_of_goods_sold' => 'setCostOfGoodsSold',
        'cost_of_services_sold' => 'setCostOfServicesSold',
        'gross_profit' => 'setGrossProfit',
        'gross_loss' => 'setGrossLoss',
        'operating_expenses' => 'setOperatingExpenses',
        'operating_income' => 'setOperatingIncome',
        'operating_loss' => 'setOperatingLoss',
        'financial_result' => 'setFinancialResult',
        'equity_in_earnings_of_affiliates' => 'setEquityInEarningsOfAffiliates',
        'income_before_taxes' => 'setIncomeBeforeTaxes',
        'loss_before_taxes' => 'setLossBeforeTaxes',
        'income_taxes' => 'setIncomeTaxes',
        'income_from_continuing_operations' => 'setIncomeFromContinuingOperations',
        'loss_from_continuing_operations' => 'setLossFromContinuingOperations',
        'discontinued_operations' => 'setDiscontinuedOperations',
        'net_income' => 'setNetIncome',
        'net_loss' => 'setNetLoss'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'net_revenue' => 'getNetRevenue',
        'domestic_sales' => 'getDomesticSales',
        'foreign_sales' => 'getForeignSales',
        'materials_used' => 'getMaterialsUsed',
        'cost_of_goods_sold' => 'getCostOfGoodsSold',
        'cost_of_services_sold' => 'getCostOfServicesSold',
        'gross_profit' => 'getGrossProfit',
        'gross_loss' => 'getGrossLoss',
        'operating_expenses' => 'getOperatingExpenses',
        'operating_income' => 'getOperatingIncome',
        'operating_loss' => 'getOperatingLoss',
        'financial_result' => 'getFinancialResult',
        'equity_in_earnings_of_affiliates' => 'getEquityInEarningsOfAffiliates',
        'income_before_taxes' => 'getIncomeBeforeTaxes',
        'loss_before_taxes' => 'getLossBeforeTaxes',
        'income_taxes' => 'getIncomeTaxes',
        'income_from_continuing_operations' => 'getIncomeFromContinuingOperations',
        'loss_from_continuing_operations' => 'getLossFromContinuingOperations',
        'discontinued_operations' => 'getDiscontinuedOperations',
        'net_income' => 'getNetIncome',
        'net_loss' => 'getNetLoss'
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
        $this->container['net_revenue'] = isset($data['net_revenue']) ? $data['net_revenue'] : null;
        $this->container['domestic_sales'] = isset($data['domestic_sales']) ? $data['domestic_sales'] : null;
        $this->container['foreign_sales'] = isset($data['foreign_sales']) ? $data['foreign_sales'] : null;
        $this->container['materials_used'] = isset($data['materials_used']) ? $data['materials_used'] : null;
        $this->container['cost_of_goods_sold'] = isset($data['cost_of_goods_sold']) ? $data['cost_of_goods_sold'] : null;
        $this->container['cost_of_services_sold'] = isset($data['cost_of_services_sold']) ? $data['cost_of_services_sold'] : null;
        $this->container['gross_profit'] = isset($data['gross_profit']) ? $data['gross_profit'] : null;
        $this->container['gross_loss'] = isset($data['gross_loss']) ? $data['gross_loss'] : null;
        $this->container['operating_expenses'] = isset($data['operating_expenses']) ? $data['operating_expenses'] : null;
        $this->container['operating_income'] = isset($data['operating_income']) ? $data['operating_income'] : null;
        $this->container['operating_loss'] = isset($data['operating_loss']) ? $data['operating_loss'] : null;
        $this->container['financial_result'] = isset($data['financial_result']) ? $data['financial_result'] : null;
        $this->container['equity_in_earnings_of_affiliates'] = isset($data['equity_in_earnings_of_affiliates']) ? $data['equity_in_earnings_of_affiliates'] : null;
        $this->container['income_before_taxes'] = isset($data['income_before_taxes']) ? $data['income_before_taxes'] : null;
        $this->container['loss_before_taxes'] = isset($data['loss_before_taxes']) ? $data['loss_before_taxes'] : null;
        $this->container['income_taxes'] = isset($data['income_taxes']) ? $data['income_taxes'] : null;
        $this->container['income_from_continuing_operations'] = isset($data['income_from_continuing_operations']) ? $data['income_from_continuing_operations'] : null;
        $this->container['loss_from_continuing_operations'] = isset($data['loss_from_continuing_operations']) ? $data['loss_from_continuing_operations'] : null;
        $this->container['discontinued_operations'] = isset($data['discontinued_operations']) ? $data['discontinued_operations'] : null;
        $this->container['net_income'] = isset($data['net_income']) ? $data['net_income'] : null;
        $this->container['net_loss'] = isset($data['net_loss']) ? $data['net_loss'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['net_revenue'] === null) {
            $invalidProperties[] = "'net_revenue' can't be null";
        }
        if ($this->container['domestic_sales'] === null) {
            $invalidProperties[] = "'domestic_sales' can't be null";
        }
        if ($this->container['foreign_sales'] === null) {
            $invalidProperties[] = "'foreign_sales' can't be null";
        }
        if ($this->container['cost_of_goods_sold'] === null) {
            $invalidProperties[] = "'cost_of_goods_sold' can't be null";
        }
        if ($this->container['cost_of_services_sold'] === null) {
            $invalidProperties[] = "'cost_of_services_sold' can't be null";
        }
        if ($this->container['gross_profit'] === null) {
            $invalidProperties[] = "'gross_profit' can't be null";
        }
        if ($this->container['gross_loss'] === null) {
            $invalidProperties[] = "'gross_loss' can't be null";
        }
        if ($this->container['operating_expenses'] === null) {
            $invalidProperties[] = "'operating_expenses' can't be null";
        }
        if ($this->container['operating_income'] === null) {
            $invalidProperties[] = "'operating_income' can't be null";
        }
        if ($this->container['operating_loss'] === null) {
            $invalidProperties[] = "'operating_loss' can't be null";
        }
        if ($this->container['financial_result'] === null) {
            $invalidProperties[] = "'financial_result' can't be null";
        }
        if ($this->container['equity_in_earnings_of_affiliates'] === null) {
            $invalidProperties[] = "'equity_in_earnings_of_affiliates' can't be null";
        }
        if ($this->container['income_before_taxes'] === null) {
            $invalidProperties[] = "'income_before_taxes' can't be null";
        }
        if ($this->container['loss_before_taxes'] === null) {
            $invalidProperties[] = "'loss_before_taxes' can't be null";
        }
        if ($this->container['income_taxes'] === null) {
            $invalidProperties[] = "'income_taxes' can't be null";
        }
        if ($this->container['income_from_continuing_operations'] === null) {
            $invalidProperties[] = "'income_from_continuing_operations' can't be null";
        }
        if ($this->container['loss_from_continuing_operations'] === null) {
            $invalidProperties[] = "'loss_from_continuing_operations' can't be null";
        }
        if ($this->container['discontinued_operations'] === null) {
            $invalidProperties[] = "'discontinued_operations' can't be null";
        }
        if ($this->container['net_income'] === null) {
            $invalidProperties[] = "'net_income' can't be null";
        }
        if ($this->container['net_loss'] === null) {
            $invalidProperties[] = "'net_loss' can't be null";
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
     * Gets net_revenue
     *
     * @return float
     */
    public function getNetRevenue()
    {
        return $this->container['net_revenue'];
    }

    /**
     * Sets net_revenue
     *
     * @param float $net_revenue The total revenue generated by the company from its core business operations, excluding any deductions for discounts, returns, or allowances.  > **Note**: `domestic_sales` +  `foreign_sales` will not sum to the `net_revenue` due to the exclusion of discounts, returns, and allowances.
     *
     * @return $this
     */
    public function setNetRevenue($net_revenue)
    {
        $this->container['net_revenue'] = $net_revenue;

        return $this;
    }

    /**
     * Gets domestic_sales
     *
     * @return float
     */
    public function getDomesticSales()
    {
        return $this->container['domestic_sales'];
    }

    /**
     * Sets domestic_sales
     *
     * @param float $domestic_sales The revenue generated by the company from sales of goods or services within its home country.
     *
     * @return $this
     */
    public function setDomesticSales($domestic_sales)
    {
        $this->container['domestic_sales'] = $domestic_sales;

        return $this;
    }

    /**
     * Gets foreign_sales
     *
     * @return float
     */
    public function getForeignSales()
    {
        return $this->container['foreign_sales'];
    }

    /**
     * Sets foreign_sales
     *
     * @param float $foreign_sales The revenue generated by the company from sales of goods or services in foreign countries.
     *
     * @return $this
     */
    public function setForeignSales($foreign_sales)
    {
        $this->container['foreign_sales'] = $foreign_sales;

        return $this;
    }

    /**
     * Gets materials_used
     *
     * @return float
     */
    public function getMaterialsUsed()
    {
        return $this->container['materials_used'];
    }

    /**
     * Sets materials_used
     *
     * @param float $materials_used The total cost of materials used or traded by the company during the reporting period.
     *
     * @return $this
     */
    public function setMaterialsUsed($materials_used)
    {
        $this->container['materials_used'] = $materials_used;

        return $this;
    }

    /**
     * Gets cost_of_goods_sold
     *
     * @return float
     */
    public function getCostOfGoodsSold()
    {
        return $this->container['cost_of_goods_sold'];
    }

    /**
     * Sets cost_of_goods_sold
     *
     * @param float $cost_of_goods_sold The total cost incurred by the company to produce or purchase the goods sold during the reporting period.
     *
     * @return $this
     */
    public function setCostOfGoodsSold($cost_of_goods_sold)
    {
        $this->container['cost_of_goods_sold'] = $cost_of_goods_sold;

        return $this;
    }

    /**
     * Gets cost_of_services_sold
     *
     * @return float
     */
    public function getCostOfServicesSold()
    {
        return $this->container['cost_of_services_sold'];
    }

    /**
     * Sets cost_of_services_sold
     *
     * @param float $cost_of_services_sold The total cost incurred by the company to provide the services sold during the reporting period.
     *
     * @return $this
     */
    public function setCostOfServicesSold($cost_of_services_sold)
    {
        $this->container['cost_of_services_sold'] = $cost_of_services_sold;

        return $this;
    }

    /**
     * Gets gross_profit
     *
     * @return float
     */
    public function getGrossProfit()
    {
        return $this->container['gross_profit'];
    }

    /**
     * Sets gross_profit
     *
     * @param float $gross_profit The difference between net revenue and the total cost of goods and services sold, representing the profit earned from core business operations before deducting operating expenses.
     *
     * @return $this
     */
    public function setGrossProfit($gross_profit)
    {
        $this->container['gross_profit'] = $gross_profit;

        return $this;
    }

    /**
     * Gets gross_loss
     *
     * @return float
     */
    public function getGrossLoss()
    {
        return $this->container['gross_loss'];
    }

    /**
     * Sets gross_loss
     *
     * @param float $gross_loss The negative difference between net revenue and the total cost of goods and services sold, representing the loss incurred from core business operations before deducting operating expenses.
     *
     * @return $this
     */
    public function setGrossLoss($gross_loss)
    {
        $this->container['gross_loss'] = $gross_loss;

        return $this;
    }

    /**
     * Gets operating_expenses
     *
     * @return float
     */
    public function getOperatingExpenses()
    {
        return $this->container['operating_expenses'];
    }

    /**
     * Sets operating_expenses
     *
     * @param float $operating_expenses The total expenses incurred by the company in its normal operating activities, including selling, general, and administrative expenses.
     *
     * @return $this
     */
    public function setOperatingExpenses($operating_expenses)
    {
        $this->container['operating_expenses'] = $operating_expenses;

        return $this;
    }

    /**
     * Gets operating_income
     *
     * @return float
     */
    public function getOperatingIncome()
    {
        return $this->container['operating_income'];
    }

    /**
     * Sets operating_income
     *
     * @param float $operating_income The profit earned from core business operations after deducting operating expenses, but before considering interest, taxes, and other non-operating items.
     *
     * @return $this
     */
    public function setOperatingIncome($operating_income)
    {
        $this->container['operating_income'] = $operating_income;

        return $this;
    }

    /**
     * Gets operating_loss
     *
     * @return float
     */
    public function getOperatingLoss()
    {
        return $this->container['operating_loss'];
    }

    /**
     * Sets operating_loss
     *
     * @param float $operating_loss The loss incurred from core business operations after deducting operating expenses, but before considering interest, taxes, and other non-operating items.
     *
     * @return $this
     */
    public function setOperatingLoss($operating_loss)
    {
        $this->container['operating_loss'] = $operating_loss;

        return $this;
    }

    /**
     * Gets financial_result
     *
     * @return float
     */
    public function getFinancialResult()
    {
        return $this->container['financial_result'];
    }

    /**
     * Sets financial_result
     *
     * @param float $financial_result The net result of financial activities, including interest income, interest expense, and other financial gains or losses.
     *
     * @return $this
     */
    public function setFinancialResult($financial_result)
    {
        $this->container['financial_result'] = $financial_result;

        return $this;
    }

    /**
     * Gets equity_in_earnings_of_affiliates
     *
     * @return float
     */
    public function getEquityInEarningsOfAffiliates()
    {
        return $this->container['equity_in_earnings_of_affiliates'];
    }

    /**
     * Sets equity_in_earnings_of_affiliates
     *
     * @param float $equity_in_earnings_of_affiliates The company's share of the profit or loss in its associates, entities over which it has significant influence but not control.
     *
     * @return $this
     */
    public function setEquityInEarningsOfAffiliates($equity_in_earnings_of_affiliates)
    {
        $this->container['equity_in_earnings_of_affiliates'] = $equity_in_earnings_of_affiliates;

        return $this;
    }

    /**
     * Gets income_before_taxes
     *
     * @return float
     */
    public function getIncomeBeforeTaxes()
    {
        return $this->container['income_before_taxes'];
    }

    /**
     * Sets income_before_taxes
     *
     * @param float $income_before_taxes The profit earned before accounting for income tax expenses.
     *
     * @return $this
     */
    public function setIncomeBeforeTaxes($income_before_taxes)
    {
        $this->container['income_before_taxes'] = $income_before_taxes;

        return $this;
    }

    /**
     * Gets loss_before_taxes
     *
     * @return float
     */
    public function getLossBeforeTaxes()
    {
        return $this->container['loss_before_taxes'];
    }

    /**
     * Sets loss_before_taxes
     *
     * @param float $loss_before_taxes The loss incurred before accounting for income tax expenses.
     *
     * @return $this
     */
    public function setLossBeforeTaxes($loss_before_taxes)
    {
        $this->container['loss_before_taxes'] = $loss_before_taxes;

        return $this;
    }

    /**
     * Gets income_taxes
     *
     * @return float
     */
    public function getIncomeTaxes()
    {
        return $this->container['income_taxes'];
    }

    /**
     * Sets income_taxes
     *
     * @param float $income_taxes The total amount of income tax expenses incurred during the reporting period.
     *
     * @return $this
     */
    public function setIncomeTaxes($income_taxes)
    {
        $this->container['income_taxes'] = $income_taxes;

        return $this;
    }

    /**
     * Gets income_from_continuing_operations
     *
     * @return float
     */
    public function getIncomeFromContinuingOperations()
    {
        return $this->container['income_from_continuing_operations'];
    }

    /**
     * Sets income_from_continuing_operations
     *
     * @param float $income_from_continuing_operations The profit earned from the company's ongoing business operations after deducting operating expenses and taxes.
     *
     * @return $this
     */
    public function setIncomeFromContinuingOperations($income_from_continuing_operations)
    {
        $this->container['income_from_continuing_operations'] = $income_from_continuing_operations;

        return $this;
    }

    /**
     * Gets loss_from_continuing_operations
     *
     * @return float
     */
    public function getLossFromContinuingOperations()
    {
        return $this->container['loss_from_continuing_operations'];
    }

    /**
     * Sets loss_from_continuing_operations
     *
     * @param float $loss_from_continuing_operations The loss incurred from the company's ongoing business operations after deducting operating expenses and taxes.
     *
     * @return $this
     */
    public function setLossFromContinuingOperations($loss_from_continuing_operations)
    {
        $this->container['loss_from_continuing_operations'] = $loss_from_continuing_operations;

        return $this;
    }

    /**
     * Gets discontinued_operations
     *
     * @return float
     */
    public function getDiscontinuedOperations()
    {
        return $this->container['discontinued_operations'];
    }

    /**
     * Sets discontinued_operations
     *
     * @param float $discontinued_operations The net result of operations that have been discontinued or sold off during the reporting period.
     *
     * @return $this
     */
    public function setDiscontinuedOperations($discontinued_operations)
    {
        $this->container['discontinued_operations'] = $discontinued_operations;

        return $this;
    }

    /**
     * Gets net_income
     *
     * @return float
     */
    public function getNetIncome()
    {
        return $this->container['net_income'];
    }

    /**
     * Sets net_income
     *
     * @param float $net_income The total profit earned by the company after deducting all expenses, including operating, non-operating, interest, and taxes.
     *
     * @return $this
     */
    public function setNetIncome($net_income)
    {
        $this->container['net_income'] = $net_income;

        return $this;
    }

    /**
     * Gets net_loss
     *
     * @return float
     */
    public function getNetLoss()
    {
        return $this->container['net_loss'];
    }

    /**
     * Sets net_loss
     *
     * @param float $net_loss The total loss incurred by the company after deducting all expenses, including operating, non-operating, interest, and taxes.
     *
     * @return $this
     */
    public function setNetLoss($net_loss)
    {
        $this->container['net_loss'] = $net_loss;

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
