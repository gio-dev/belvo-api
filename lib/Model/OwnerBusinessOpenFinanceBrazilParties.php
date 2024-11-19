<?php
/**
 * OwnerBusinessOpenFinanceBrazilParties
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
 * OwnerBusinessOpenFinanceBrazilParties Class Doc Comment
 *
 * @category Class
 * @description Detailed information regarding the parties allowed to act on the owner&#x27;s behalf.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OwnerBusinessOpenFinanceBrazilParties implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OwnerBusinessOpenFinanceBrazil_parties';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'person_type' => 'string',
        'type' => 'string',
        'display_name' => 'string',
        'social_name' => 'string',
        'company_name' => 'string',
        'trade_name' => 'string',
        'start_date' => '\DateTime',
        'percentage_type' => 'float',
        'document_type' => 'string',
        'document_number' => 'string',
        'document_issue_date' => '\DateTime',
        'document_expiration_date' => '\DateTime',
        'document_country' => 'string',
        'document_additional_info' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'person_type' => null,
        'type' => null,
        'display_name' => null,
        'social_name' => null,
        'company_name' => null,
        'trade_name' => null,
        'start_date' => 'date',
        'percentage_type' => 'float',
        'document_type' => null,
        'document_number' => null,
        'document_issue_date' => 'date',
        'document_expiration_date' => 'date',
        'document_country' => null,
        'document_additional_info' => null
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
        'person_type' => 'person_type',
        'type' => 'type',
        'display_name' => 'display_name',
        'social_name' => 'social_name',
        'company_name' => 'company_name',
        'trade_name' => 'trade_name',
        'start_date' => 'start_date',
        'percentage_type' => 'percentage_type',
        'document_type' => 'document_type',
        'document_number' => 'document_number',
        'document_issue_date' => 'document_issue_date',
        'document_expiration_date' => 'document_expiration_date',
        'document_country' => 'document_country',
        'document_additional_info' => 'document_additional_info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'person_type' => 'setPersonType',
        'type' => 'setType',
        'display_name' => 'setDisplayName',
        'social_name' => 'setSocialName',
        'company_name' => 'setCompanyName',
        'trade_name' => 'setTradeName',
        'start_date' => 'setStartDate',
        'percentage_type' => 'setPercentageType',
        'document_type' => 'setDocumentType',
        'document_number' => 'setDocumentNumber',
        'document_issue_date' => 'setDocumentIssueDate',
        'document_expiration_date' => 'setDocumentExpirationDate',
        'document_country' => 'setDocumentCountry',
        'document_additional_info' => 'setDocumentAdditionalInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'person_type' => 'getPersonType',
        'type' => 'getType',
        'display_name' => 'getDisplayName',
        'social_name' => 'getSocialName',
        'company_name' => 'getCompanyName',
        'trade_name' => 'getTradeName',
        'start_date' => 'getStartDate',
        'percentage_type' => 'getPercentageType',
        'document_type' => 'getDocumentType',
        'document_number' => 'getDocumentNumber',
        'document_issue_date' => 'getDocumentIssueDate',
        'document_expiration_date' => 'getDocumentExpirationDate',
        'document_country' => 'getDocumentCountry',
        'document_additional_info' => 'getDocumentAdditionalInfo'
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

    const PERSON_TYPE_INDIVIDUAL = 'INDIVIDUAL';
    const PERSON_TYPE_COMPANY = 'COMPANY';
    const TYPE_MEMBER = 'MEMBER';
    const TYPE_ADMINISTRATOR = 'ADMINISTRATOR';
    const DOCUMENT_TYPE_CPF = 'CPF';
    const DOCUMENT_TYPE_CNPJ = 'CNPJ';
    const DOCUMENT_TYPE_OTHER_TRAVEL_DOCUMENT = 'OTHER_TRAVEL_DOCUMENT';
    const DOCUMENT_TYPE_PASSPORT = 'PASSPORT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPersonTypeAllowableValues()
    {
        return [
            self::PERSON_TYPE_INDIVIDUAL,
            self::PERSON_TYPE_COMPANY,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_MEMBER,
            self::TYPE_ADMINISTRATOR,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDocumentTypeAllowableValues()
    {
        return [
            self::DOCUMENT_TYPE_CPF,
            self::DOCUMENT_TYPE_CNPJ,
            self::DOCUMENT_TYPE_OTHER_TRAVEL_DOCUMENT,
            self::DOCUMENT_TYPE_PASSPORT,
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
        $this->container['person_type'] = isset($data['person_type']) ? $data['person_type'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['social_name'] = isset($data['social_name']) ? $data['social_name'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['trade_name'] = isset($data['trade_name']) ? $data['trade_name'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['percentage_type'] = isset($data['percentage_type']) ? $data['percentage_type'] : null;
        $this->container['document_type'] = isset($data['document_type']) ? $data['document_type'] : null;
        $this->container['document_number'] = isset($data['document_number']) ? $data['document_number'] : null;
        $this->container['document_issue_date'] = isset($data['document_issue_date']) ? $data['document_issue_date'] : null;
        $this->container['document_expiration_date'] = isset($data['document_expiration_date']) ? $data['document_expiration_date'] : null;
        $this->container['document_country'] = isset($data['document_country']) ? $data['document_country'] : null;
        $this->container['document_additional_info'] = isset($data['document_additional_info']) ? $data['document_additional_info'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['person_type'] === null) {
            $invalidProperties[] = "'person_type' can't be null";
        }
        $allowedValues = $this->getPersonTypeAllowableValues();
        if (!is_null($this->container['person_type']) && !in_array($this->container['person_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'person_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['display_name'] === null) {
            $invalidProperties[] = "'display_name' can't be null";
        }
        if ($this->container['social_name'] === null) {
            $invalidProperties[] = "'social_name' can't be null";
        }
        if ($this->container['trade_name'] === null) {
            $invalidProperties[] = "'trade_name' can't be null";
        }
        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ($this->container['percentage_type'] === null) {
            $invalidProperties[] = "'percentage_type' can't be null";
        }
        if ($this->container['document_type'] === null) {
            $invalidProperties[] = "'document_type' can't be null";
        }
        $allowedValues = $this->getDocumentTypeAllowableValues();
        if (!is_null($this->container['document_type']) && !in_array($this->container['document_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'document_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['document_number'] === null) {
            $invalidProperties[] = "'document_number' can't be null";
        }
        if ($this->container['document_issue_date'] === null) {
            $invalidProperties[] = "'document_issue_date' can't be null";
        }
        if ($this->container['document_expiration_date'] === null) {
            $invalidProperties[] = "'document_expiration_date' can't be null";
        }
        if ($this->container['document_country'] === null) {
            $invalidProperties[] = "'document_country' can't be null";
        }
        if ($this->container['document_additional_info'] === null) {
            $invalidProperties[] = "'document_additional_info' can't be null";
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
     * Gets person_type
     *
     * @return string
     */
    public function getPersonType()
    {
        return $this->container['person_type'];
    }

    /**
     * Sets person_type
     *
     * @param string $person_type The type of person that is an ownership party of the account. We return one of the following values:    - `INDIVIDUAL`   - `COMPANY`
     *
     * @return $this
     */
    public function setPersonType($person_type)
    {
        $allowedValues = $this->getPersonTypeAllowableValues();
        if (!in_array($person_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'person_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['person_type'] = $person_type;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The access type that the `person_type` has to the account. We return one of the following values:  - `MEMBER` indicates that the `person_type` has read access to the account. - `ADMINISTRATOR` indicates that the `person_type` can perform all actions for the account (including transfers).
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name The full name of the individual, as provided by the institution. Only applicable if the `person_type` is `INDIVIDUAL`.
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets social_name
     *
     * @return string
     */
    public function getSocialName()
    {
        return $this->container['social_name'];
    }

    /**
     * Sets social_name
     *
     * @param string $social_name The social name of the individual, as generally accepted by the country. Only applicable if the `person_type` is `INDIVIDUAL`.
     *
     * @return $this
     */
    public function setSocialName($social_name)
    {
        $this->container['social_name'] = $social_name;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name The full (official) name of the business. Only applicable if the `person_type` is `COMPANY`.
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets trade_name
     *
     * @return string
     */
    public function getTradeName()
    {
        return $this->container['trade_name'];
    }

    /**
     * Sets trade_name
     *
     * @param string $trade_name The trade name of the business. Only applicable if the `person_type` is `COMPANY`.
     *
     * @return $this
     */
    public function setTradeName($trade_name)
    {
        $this->container['trade_name'] = $trade_name;

        return $this;
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
     * @param \DateTime $start_date The date that the party was added to the account, in `YYYY-MM-DD` format.
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets percentage_type
     *
     * @return float
     */
    public function getPercentageType()
    {
        return $this->container['percentage_type'];
    }

    /**
     * Sets percentage_type
     *
     * @param float $percentage_type The party's equity interest.
     *
     * @return $this
     */
    public function setPercentageType($percentage_type)
    {
        $this->container['percentage_type'] = $percentage_type;

        return $this;
    }

    /**
     * Gets document_type
     *
     * @return string
     */
    public function getDocumentType()
    {
        return $this->container['document_type'];
    }

    /**
     * Sets document_type
     *
     * @param string $document_type The type of ID document the party provided when being added to the account. We return one of the following values:    - `CPF`   - `CNPJ`   - `OTHER_TRAVEL_DOCUMENT`   - `PASSPORT`
     *
     * @return $this
     */
    public function setDocumentType($document_type)
    {
        $allowedValues = $this->getDocumentTypeAllowableValues();
        if (!in_array($document_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'document_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['document_type'] = $document_type;

        return $this;
    }

    /**
     * Gets document_number
     *
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->container['document_number'];
    }

    /**
     * Sets document_number
     *
     * @param string $document_number The ID document's number.  > **Non-nullable:** A value must be returned by Brazil's open finance network.
     *
     * @return $this
     */
    public function setDocumentNumber($document_number)
    {
        $this->container['document_number'] = $document_number;

        return $this;
    }

    /**
     * Gets document_issue_date
     *
     * @return \DateTime
     */
    public function getDocumentIssueDate()
    {
        return $this->container['document_issue_date'];
    }

    /**
     * Sets document_issue_date
     *
     * @param \DateTime $document_issue_date The date the the ID document was issued, in `YYYY-MM-DD` format.
     *
     * @return $this
     */
    public function setDocumentIssueDate($document_issue_date)
    {
        $this->container['document_issue_date'] = $document_issue_date;

        return $this;
    }

    /**
     * Gets document_expiration_date
     *
     * @return \DateTime
     */
    public function getDocumentExpirationDate()
    {
        return $this->container['document_expiration_date'];
    }

    /**
     * Sets document_expiration_date
     *
     * @param \DateTime $document_expiration_date The date the the ID document expires, in `YYYY-MM-DD` format.
     *
     * @return $this
     */
    public function setDocumentExpirationDate($document_expiration_date)
    {
        $this->container['document_expiration_date'] = $document_expiration_date;

        return $this;
    }

    /**
     * Gets document_country
     *
     * @return string
     */
    public function getDocumentCountry()
    {
        return $this->container['document_country'];
    }

    /**
     * Sets document_country
     *
     * @param string $document_country The three-letter country code that issued the document (in ISO-3166 Alpha 3 format).
     *
     * @return $this
     */
    public function setDocumentCountry($document_country)
    {
        $this->container['document_country'] = $document_country;

        return $this;
    }

    /**
     * Gets document_additional_info
     *
     * @return string
     */
    public function getDocumentAdditionalInfo()
    {
        return $this->container['document_additional_info'];
    }

    /**
     * Sets document_additional_info
     *
     * @param string $document_additional_info Additional information regarding the document.
     *
     * @return $this
     */
    public function setDocumentAdditionalInfo($document_additional_info)
    {
        $this->container['document_additional_info'] = $document_additional_info;

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
