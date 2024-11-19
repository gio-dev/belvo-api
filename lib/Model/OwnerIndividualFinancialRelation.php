<?php
/**
 * OwnerIndividualFinancialRelation
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
 * OwnerIndividualFinancialRelation Class Doc Comment
 *
 * @category Class
 * @description Details regarding any additional relationship the individual has with the institution (for example, other accounts or products they have with the institution).
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OwnerIndividualFinancialRelation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OwnerIndividualFinancialRelation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'start_date' => '\DateTime',
        'product_services' => 'string[]',
        'product_services_additional_info' => 'string',
        'procurators' => '\Swagger\Client\Model\OwnerIndividualFinancialRelationProcurators[]',
        'products' => '\Swagger\Client\Model\OwnerIndividualFinancialRelationProducts[]',
        'salary_portability_requests' => '\Swagger\Client\Model\OwnerIndividualFinancialRelationSalaryPortabilityRequests[]',
        'payroll_accounts' => '\Swagger\Client\Model\OwnerIndividualFinancialRelationPayrollAccounts[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'start_date' => 'date-time',
        'product_services' => null,
        'product_services_additional_info' => null,
        'procurators' => null,
        'products' => null,
        'salary_portability_requests' => null,
        'payroll_accounts' => null
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
        'start_date' => 'start_date',
        'product_services' => 'product_services',
        'product_services_additional_info' => 'product_services_additional_info',
        'procurators' => 'procurators',
        'products' => 'products',
        'salary_portability_requests' => 'salary_portability_requests',
        'payroll_accounts' => 'payroll_accounts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start_date' => 'setStartDate',
        'product_services' => 'setProductServices',
        'product_services_additional_info' => 'setProductServicesAdditionalInfo',
        'procurators' => 'setProcurators',
        'products' => 'setProducts',
        'salary_portability_requests' => 'setSalaryPortabilityRequests',
        'payroll_accounts' => 'setPayrollAccounts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start_date' => 'getStartDate',
        'product_services' => 'getProductServices',
        'product_services_additional_info' => 'getProductServicesAdditionalInfo',
        'procurators' => 'getProcurators',
        'products' => 'getProducts',
        'salary_portability_requests' => 'getSalaryPortabilityRequests',
        'payroll_accounts' => 'getPayrollAccounts'
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
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['product_services'] = isset($data['product_services']) ? $data['product_services'] : null;
        $this->container['product_services_additional_info'] = isset($data['product_services_additional_info']) ? $data['product_services_additional_info'] : null;
        $this->container['procurators'] = isset($data['procurators']) ? $data['procurators'] : null;
        $this->container['products'] = isset($data['products']) ? $data['products'] : null;
        $this->container['salary_portability_requests'] = isset($data['salary_portability_requests']) ? $data['salary_portability_requests'] : null;
        $this->container['payroll_accounts'] = isset($data['payroll_accounts']) ? $data['payroll_accounts'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ($this->container['product_services'] === null) {
            $invalidProperties[] = "'product_services' can't be null";
        }
        if ($this->container['product_services_additional_info'] === null) {
            $invalidProperties[] = "'product_services_additional_info' can't be null";
        }
        if ($this->container['procurators'] === null) {
            $invalidProperties[] = "'procurators' can't be null";
        }
        if ($this->container['products'] === null) {
            $invalidProperties[] = "'products' can't be null";
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
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date The ISO-8601 timestamp when the financial relationship between the individual and the institution started.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets product_services
     *
     * @return string[]
     */
    public function getProductServices()
    {
        return $this->container['product_services'];
    }

    /**
     * Sets product_services
     *
     * @param string[] $product_services A list of products that the individual has with the institution.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setProductServices($product_services)
    {
        $this->container['product_services'] = $product_services;

        return $this;
    }

    /**
     * Gets product_services_additional_info
     *
     * @return string
     */
    public function getProductServicesAdditionalInfo()
    {
        return $this->container['product_services_additional_info'];
    }

    /**
     * Sets product_services_additional_info
     *
     * @param string $product_services_additional_info Additional information regarding the products that the individual has.
     *
     * @return $this
     */
    public function setProductServicesAdditionalInfo($product_services_additional_info)
    {
        $this->container['product_services_additional_info'] = $product_services_additional_info;

        return $this;
    }

    /**
     * Gets procurators
     *
     * @return \Swagger\Client\Model\OwnerIndividualFinancialRelationProcurators[]
     */
    public function getProcurators()
    {
        return $this->container['procurators'];
    }

    /**
     * Sets procurators
     *
     * @param \Swagger\Client\Model\OwnerIndividualFinancialRelationProcurators[] $procurators Information regarding any individuals or companies that can act on behalf of the owner.
     *
     * @return $this
     */
    public function setProcurators($procurators)
    {
        $this->container['procurators'] = $procurators;

        return $this;
    }

    /**
     * Gets products
     *
     * @return \Swagger\Client\Model\OwnerIndividualFinancialRelationProducts[]
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     *
     * @param \Swagger\Client\Model\OwnerIndividualFinancialRelationProducts[] $products Details regarding any additional products that the individual has with the institution.
     *
     * @return $this
     */
    public function setProducts($products)
    {
        $this->container['products'] = $products;

        return $this;
    }

    /**
     * Gets salary_portability_requests
     *
     * @return \Swagger\Client\Model\OwnerIndividualFinancialRelationSalaryPortabilityRequests[]
     */
    public function getSalaryPortabilityRequests()
    {
        return $this->container['salary_portability_requests'];
    }

    /**
     * Sets salary_portability_requests
     *
     * @param \Swagger\Client\Model\OwnerIndividualFinancialRelationSalaryPortabilityRequests[] $salary_portability_requests Details regarding any salary portability requests that the individual has made with the institution.  A salary portability is a request to transfer the individual's salary from their employer's 'payroll' bank account to another bank account.  > 📘  > > Please note that the receiving bank account cannot terminate a salary portability (or be informed that it has been termnated). Only the employer's payroll bank is able to provide this information. As such, the portabilities listed here may not be up-to-date.
     *
     * @return $this
     */
    public function setSalaryPortabilityRequests($salary_portability_requests)
    {
        $this->container['salary_portability_requests'] = $salary_portability_requests;

        return $this;
    }

    /**
     * Gets payroll_accounts
     *
     * @return \Swagger\Client\Model\OwnerIndividualFinancialRelationPayrollAccounts[]
     */
    public function getPayrollAccounts()
    {
        return $this->container['payroll_accounts'];
    }

    /**
     * Sets payroll_accounts
     *
     * @param \Swagger\Client\Model\OwnerIndividualFinancialRelationPayrollAccounts[] $payroll_accounts Details regarding any payroll bank accounts that are associated with the individual. That is, each time the indivudal has a new employer that they receive a salary from, it should be listed here.  > 📘 > > Past employers may not close the payroll account for the indiviual. As such, the payroll accounts listed here may not be up-to-date.
     *
     * @return $this
     */
    public function setPayrollAccounts($payroll_accounts)
    {
        $this->container['payroll_accounts'] = $payroll_accounts;

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
