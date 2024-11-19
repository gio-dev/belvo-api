<?php
/**
 * BusinessTaxDeclaration
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
 * BusinessTaxDeclaration Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BusinessTaxDeclaration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Business Tax Declaration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'link' => 'string',
        'collected_at' => '\DateTime',
        'created_at' => '\DateTime',
        'document_information' => '\Swagger\Client\Model\TaxDeclarationBusinessDocumentInformation',
        'tax_payer_information' => '\Swagger\Client\Model\TaxDeclarationBusinessTaxPayerInformation',
        'equity_statement' => '\Swagger\Client\Model\TaxDeclarationBusinessEquityStatement',
        'annual_income_statement' => '\Swagger\Client\Model\TaxDeclarationBusinessAnnualIncomeStatement',
        'annual_costs_and_deductions_statement' => '\Swagger\Client\Model\TaxDeclarationBusinessAnnualCostsAndDeductionsStatement',
        'tax_assessment' => '\Swagger\Client\Model\TaxDeclarationBusinessTaxAssessment',
        'date_issued' => '\DateTime',
        'pdf' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'link' => 'uuid',
        'collected_at' => 'date-time',
        'created_at' => 'date-time',
        'document_information' => null,
        'tax_payer_information' => null,
        'equity_statement' => null,
        'annual_income_statement' => null,
        'annual_costs_and_deductions_statement' => null,
        'tax_assessment' => null,
        'date_issued' => 'date',
        'pdf' => null
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
        'id' => 'id',
        'link' => 'link',
        'collected_at' => 'collected_at',
        'created_at' => 'created_at',
        'document_information' => 'document_information',
        'tax_payer_information' => 'tax_payer_information',
        'equity_statement' => 'equity_statement',
        'annual_income_statement' => 'annual_income_statement',
        'annual_costs_and_deductions_statement' => 'annual_costs_and_deductions_statement',
        'tax_assessment' => 'tax_assessment',
        'date_issued' => 'date_issued',
        'pdf' => 'pdf'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'link' => 'setLink',
        'collected_at' => 'setCollectedAt',
        'created_at' => 'setCreatedAt',
        'document_information' => 'setDocumentInformation',
        'tax_payer_information' => 'setTaxPayerInformation',
        'equity_statement' => 'setEquityStatement',
        'annual_income_statement' => 'setAnnualIncomeStatement',
        'annual_costs_and_deductions_statement' => 'setAnnualCostsAndDeductionsStatement',
        'tax_assessment' => 'setTaxAssessment',
        'date_issued' => 'setDateIssued',
        'pdf' => 'setPdf'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'link' => 'getLink',
        'collected_at' => 'getCollectedAt',
        'created_at' => 'getCreatedAt',
        'document_information' => 'getDocumentInformation',
        'tax_payer_information' => 'getTaxPayerInformation',
        'equity_statement' => 'getEquityStatement',
        'annual_income_statement' => 'getAnnualIncomeStatement',
        'annual_costs_and_deductions_statement' => 'getAnnualCostsAndDeductionsStatement',
        'tax_assessment' => 'getTaxAssessment',
        'date_issued' => 'getDateIssued',
        'pdf' => 'getPdf'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['collected_at'] = isset($data['collected_at']) ? $data['collected_at'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['document_information'] = isset($data['document_information']) ? $data['document_information'] : null;
        $this->container['tax_payer_information'] = isset($data['tax_payer_information']) ? $data['tax_payer_information'] : null;
        $this->container['equity_statement'] = isset($data['equity_statement']) ? $data['equity_statement'] : null;
        $this->container['annual_income_statement'] = isset($data['annual_income_statement']) ? $data['annual_income_statement'] : null;
        $this->container['annual_costs_and_deductions_statement'] = isset($data['annual_costs_and_deductions_statement']) ? $data['annual_costs_and_deductions_statement'] : null;
        $this->container['tax_assessment'] = isset($data['tax_assessment']) ? $data['tax_assessment'] : null;
        $this->container['date_issued'] = isset($data['date_issued']) ? $data['date_issued'] : null;
        $this->container['pdf'] = isset($data['pdf']) ? $data['pdf'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['link'] === null) {
            $invalidProperties[] = "'link' can't be null";
        }
        if ($this->container['collected_at'] === null) {
            $invalidProperties[] = "'collected_at' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['document_information'] === null) {
            $invalidProperties[] = "'document_information' can't be null";
        }
        if ($this->container['tax_payer_information'] === null) {
            $invalidProperties[] = "'tax_payer_information' can't be null";
        }
        if ($this->container['equity_statement'] === null) {
            $invalidProperties[] = "'equity_statement' can't be null";
        }
        if ($this->container['annual_income_statement'] === null) {
            $invalidProperties[] = "'annual_income_statement' can't be null";
        }
        if ($this->container['annual_costs_and_deductions_statement'] === null) {
            $invalidProperties[] = "'annual_costs_and_deductions_statement' can't be null";
        }
        if ($this->container['tax_assessment'] === null) {
            $invalidProperties[] = "'tax_assessment' can't be null";
        }
        if ($this->container['date_issued'] === null) {
            $invalidProperties[] = "'date_issued' can't be null";
        }
        if ($this->container['pdf'] === null) {
            $invalidProperties[] = "'pdf' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Belvo's unique identifier for the current item.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param string $link The `link.id` the data belongs to.
     *
     * @return $this
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

        return $this;
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
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at The ISO-8601 timestamp of when the data point was created in Belvo's database.
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets document_information
     *
     * @return \Swagger\Client\Model\TaxDeclarationBusinessDocumentInformation
     */
    public function getDocumentInformation()
    {
        return $this->container['document_information'];
    }

    /**
     * Sets document_information
     *
     * @param \Swagger\Client\Model\TaxDeclarationBusinessDocumentInformation $document_information document_information
     *
     * @return $this
     */
    public function setDocumentInformation($document_information)
    {
        $this->container['document_information'] = $document_information;

        return $this;
    }

    /**
     * Gets tax_payer_information
     *
     * @return \Swagger\Client\Model\TaxDeclarationBusinessTaxPayerInformation
     */
    public function getTaxPayerInformation()
    {
        return $this->container['tax_payer_information'];
    }

    /**
     * Sets tax_payer_information
     *
     * @param \Swagger\Client\Model\TaxDeclarationBusinessTaxPayerInformation $tax_payer_information tax_payer_information
     *
     * @return $this
     */
    public function setTaxPayerInformation($tax_payer_information)
    {
        $this->container['tax_payer_information'] = $tax_payer_information;

        return $this;
    }

    /**
     * Gets equity_statement
     *
     * @return \Swagger\Client\Model\TaxDeclarationBusinessEquityStatement
     */
    public function getEquityStatement()
    {
        return $this->container['equity_statement'];
    }

    /**
     * Sets equity_statement
     *
     * @param \Swagger\Client\Model\TaxDeclarationBusinessEquityStatement $equity_statement equity_statement
     *
     * @return $this
     */
    public function setEquityStatement($equity_statement)
    {
        $this->container['equity_statement'] = $equity_statement;

        return $this;
    }

    /**
     * Gets annual_income_statement
     *
     * @return \Swagger\Client\Model\TaxDeclarationBusinessAnnualIncomeStatement
     */
    public function getAnnualIncomeStatement()
    {
        return $this->container['annual_income_statement'];
    }

    /**
     * Sets annual_income_statement
     *
     * @param \Swagger\Client\Model\TaxDeclarationBusinessAnnualIncomeStatement $annual_income_statement annual_income_statement
     *
     * @return $this
     */
    public function setAnnualIncomeStatement($annual_income_statement)
    {
        $this->container['annual_income_statement'] = $annual_income_statement;

        return $this;
    }

    /**
     * Gets annual_costs_and_deductions_statement
     *
     * @return \Swagger\Client\Model\TaxDeclarationBusinessAnnualCostsAndDeductionsStatement
     */
    public function getAnnualCostsAndDeductionsStatement()
    {
        return $this->container['annual_costs_and_deductions_statement'];
    }

    /**
     * Sets annual_costs_and_deductions_statement
     *
     * @param \Swagger\Client\Model\TaxDeclarationBusinessAnnualCostsAndDeductionsStatement $annual_costs_and_deductions_statement annual_costs_and_deductions_statement
     *
     * @return $this
     */
    public function setAnnualCostsAndDeductionsStatement($annual_costs_and_deductions_statement)
    {
        $this->container['annual_costs_and_deductions_statement'] = $annual_costs_and_deductions_statement;

        return $this;
    }

    /**
     * Gets tax_assessment
     *
     * @return \Swagger\Client\Model\TaxDeclarationBusinessTaxAssessment
     */
    public function getTaxAssessment()
    {
        return $this->container['tax_assessment'];
    }

    /**
     * Sets tax_assessment
     *
     * @param \Swagger\Client\Model\TaxDeclarationBusinessTaxAssessment $tax_assessment tax_assessment
     *
     * @return $this
     */
    public function setTaxAssessment($tax_assessment)
    {
        $this->container['tax_assessment'] = $tax_assessment;

        return $this;
    }

    /**
     * Gets date_issued
     *
     * @return \DateTime
     */
    public function getDateIssued()
    {
        return $this->container['date_issued'];
    }

    /**
     * Sets date_issued
     *
     * @param \DateTime $date_issued The date the tax declaration was issued by the fiscal institution.
     *
     * @return $this
     */
    public function setDateIssued($date_issued)
    {
        $this->container['date_issued'] = $date_issued;

        return $this;
    }

    /**
     * Gets pdf
     *
     * @return string
     */
    public function getPdf()
    {
        return $this->container['pdf'];
    }

    /**
     * Sets pdf
     *
     * @param string $pdf The PDF of the tax declaration, as a binary string.
     *
     * @return $this
     */
    public function setPdf($pdf)
    {
        $this->container['pdf'] = $pdf;

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
