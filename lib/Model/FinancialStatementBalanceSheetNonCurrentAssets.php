<?php
/**
 * FinancialStatementBalanceSheetNonCurrentAssets
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
 * FinancialStatementBalanceSheetNonCurrentAssets Class Doc Comment
 *
 * @category Class
 * @description The non-current assets of the company, which are long-term investments or property not easily converted into cash, for the given year.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FinancialStatementBalanceSheetNonCurrentAssets implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FinancialStatementBalanceSheetNonCurrentAssets';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'property_plant_and_equipment' => 'float',
        'long_term_accounts_receivable' => 'float',
        'prepayment_to_suppliers' => 'float',
        'goodwill' => 'float',
        'intangible_assets' => 'float',
        'investments_in_associates' => 'float',
        'long_term_financial_instruments' => 'float',
        'total' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'property_plant_and_equipment' => 'float',
        'long_term_accounts_receivable' => 'float',
        'prepayment_to_suppliers' => 'float',
        'goodwill' => 'float',
        'intangible_assets' => 'float',
        'investments_in_associates' => 'float',
        'long_term_financial_instruments' => 'float',
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
        'property_plant_and_equipment' => 'property_plant_and_equipment',
        'long_term_accounts_receivable' => 'long_term_accounts_receivable',
        'prepayment_to_suppliers' => 'prepayment_to_suppliers',
        'goodwill' => 'goodwill',
        'intangible_assets' => 'intangible_assets',
        'investments_in_associates' => 'investments_in_associates',
        'long_term_financial_instruments' => 'long_term_financial_instruments',
        'total' => 'total'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'property_plant_and_equipment' => 'setPropertyPlantAndEquipment',
        'long_term_accounts_receivable' => 'setLongTermAccountsReceivable',
        'prepayment_to_suppliers' => 'setPrepaymentToSuppliers',
        'goodwill' => 'setGoodwill',
        'intangible_assets' => 'setIntangibleAssets',
        'investments_in_associates' => 'setInvestmentsInAssociates',
        'long_term_financial_instruments' => 'setLongTermFinancialInstruments',
        'total' => 'setTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'property_plant_and_equipment' => 'getPropertyPlantAndEquipment',
        'long_term_accounts_receivable' => 'getLongTermAccountsReceivable',
        'prepayment_to_suppliers' => 'getPrepaymentToSuppliers',
        'goodwill' => 'getGoodwill',
        'intangible_assets' => 'getIntangibleAssets',
        'investments_in_associates' => 'getInvestmentsInAssociates',
        'long_term_financial_instruments' => 'getLongTermFinancialInstruments',
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
        $this->container['property_plant_and_equipment'] = isset($data['property_plant_and_equipment']) ? $data['property_plant_and_equipment'] : null;
        $this->container['long_term_accounts_receivable'] = isset($data['long_term_accounts_receivable']) ? $data['long_term_accounts_receivable'] : null;
        $this->container['prepayment_to_suppliers'] = isset($data['prepayment_to_suppliers']) ? $data['prepayment_to_suppliers'] : null;
        $this->container['goodwill'] = isset($data['goodwill']) ? $data['goodwill'] : null;
        $this->container['intangible_assets'] = isset($data['intangible_assets']) ? $data['intangible_assets'] : null;
        $this->container['investments_in_associates'] = isset($data['investments_in_associates']) ? $data['investments_in_associates'] : null;
        $this->container['long_term_financial_instruments'] = isset($data['long_term_financial_instruments']) ? $data['long_term_financial_instruments'] : null;
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

        if ($this->container['property_plant_and_equipment'] === null) {
            $invalidProperties[] = "'property_plant_and_equipment' can't be null";
        }
        if ($this->container['long_term_accounts_receivable'] === null) {
            $invalidProperties[] = "'long_term_accounts_receivable' can't be null";
        }
        if ($this->container['prepayment_to_suppliers'] === null) {
            $invalidProperties[] = "'prepayment_to_suppliers' can't be null";
        }
        if ($this->container['goodwill'] === null) {
            $invalidProperties[] = "'goodwill' can't be null";
        }
        if ($this->container['intangible_assets'] === null) {
            $invalidProperties[] = "'intangible_assets' can't be null";
        }
        if ($this->container['investments_in_associates'] === null) {
            $invalidProperties[] = "'investments_in_associates' can't be null";
        }
        if ($this->container['long_term_financial_instruments'] === null) {
            $invalidProperties[] = "'long_term_financial_instruments' can't be null";
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
     * Gets property_plant_and_equipment
     *
     * @return float
     */
    public function getPropertyPlantAndEquipment()
    {
        return $this->container['property_plant_and_equipment'];
    }

    /**
     * Sets property_plant_and_equipment
     *
     * @param float $property_plant_and_equipment The total value of property, plant, and equipment owned by the company, including land, buildings, machinery, and vehicles, used for long-term operations.
     *
     * @return $this
     */
    public function setPropertyPlantAndEquipment($property_plant_and_equipment)
    {
        $this->container['property_plant_and_equipment'] = $property_plant_and_equipment;

        return $this;
    }

    /**
     * Gets long_term_accounts_receivable
     *
     * @return float
     */
    public function getLongTermAccountsReceivable()
    {
        return $this->container['long_term_accounts_receivable'];
    }

    /**
     * Sets long_term_accounts_receivable
     *
     * @param float $long_term_accounts_receivable The amount owed by customers for sales made on credit, expected to be received after one year.
     *
     * @return $this
     */
    public function setLongTermAccountsReceivable($long_term_accounts_receivable)
    {
        $this->container['long_term_accounts_receivable'] = $long_term_accounts_receivable;

        return $this;
    }

    /**
     * Gets prepayment_to_suppliers
     *
     * @return float
     */
    public function getPrepaymentToSuppliers()
    {
        return $this->container['prepayment_to_suppliers'];
    }

    /**
     * Sets prepayment_to_suppliers
     *
     * @param float $prepayment_to_suppliers The amount paid in advance to suppliers for goods or services to be received in the future, expected to be utilized over the long term.
     *
     * @return $this
     */
    public function setPrepaymentToSuppliers($prepayment_to_suppliers)
    {
        $this->container['prepayment_to_suppliers'] = $prepayment_to_suppliers;

        return $this;
    }

    /**
     * Gets goodwill
     *
     * @return float
     */
    public function getGoodwill()
    {
        return $this->container['goodwill'];
    }

    /**
     * Sets goodwill
     *
     * @param float $goodwill The value of intangible assets that arise from the acquisition of other companies, representing the premium paid over the fair value of net assets acquired.
     *
     * @return $this
     */
    public function setGoodwill($goodwill)
    {
        $this->container['goodwill'] = $goodwill;

        return $this;
    }

    /**
     * Gets intangible_assets
     *
     * @return float
     */
    public function getIntangibleAssets()
    {
        return $this->container['intangible_assets'];
    }

    /**
     * Sets intangible_assets
     *
     * @param float $intangible_assets The total value of intangible assets owned by the company, such as patents, trademarks, and copyrights, with useful lives extending beyond one year.
     *
     * @return $this
     */
    public function setIntangibleAssets($intangible_assets)
    {
        $this->container['intangible_assets'] = $intangible_assets;

        return $this;
    }

    /**
     * Gets investments_in_associates
     *
     * @return float
     */
    public function getInvestmentsInAssociates()
    {
        return $this->container['investments_in_associates'];
    }

    /**
     * Sets investments_in_associates
     *
     * @param float $investments_in_associates The value of investments in other companies in which the company has significant influence but not control, typically represented by ownership of 20-50% of the associate's voting shares.
     *
     * @return $this
     */
    public function setInvestmentsInAssociates($investments_in_associates)
    {
        $this->container['investments_in_associates'] = $investments_in_associates;

        return $this;
    }

    /**
     * Gets long_term_financial_instruments
     *
     * @return float
     */
    public function getLongTermFinancialInstruments()
    {
        return $this->container['long_term_financial_instruments'];
    }

    /**
     * Sets long_term_financial_instruments
     *
     * @param float $long_term_financial_instruments The value of financial instruments that are expected to be held for more than one year, such as bonds, debentures, and long-term loans.
     *
     * @return $this
     */
    public function setLongTermFinancialInstruments($long_term_financial_instruments)
    {
        $this->container['long_term_financial_instruments'] = $long_term_financial_instruments;

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
     * @param float $total The sum of all non-current assets, representing the total value of assets expected to be used or held for more than one year.
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
